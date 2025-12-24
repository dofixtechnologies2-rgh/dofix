<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\Enquiry as MailEnquiry;
use App\Models\Providers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\ProviderSignUpMail;
use App\Models\Enquiry;
use App\Models\Services;
use Exception;
use Intervention\Image\Laravel\Facades\Image;

class HomeController extends Controller
{

    public function index()
    {   
        $services = Services::where('status',1)->get();
        return view('web.pages.home',compact('services'));
    }

    public function serviceDetail($slug)
    {   
        $serviceObj = Services::where('slug',$slug)->first();
        if(empty($serviceObj)){
            abort(404);
        }
        else
        {
            $services = Services::where('status',1)->get();
            return view('web.pages.service_detail',compact('serviceObj','services'));
        }
       
    }


    public function stepOne(Request $request)
    {
        return view('web.pages.provider_onboard_one');
    }



    // Function to optimize image
    public function optimizeImage($file, $path, $prefix)
    {
        $extension = $file->getClientOriginalExtension(); // Get original file extension
        $filename = time() . "_{$prefix}.{$extension}";
    
        // Process Image
        $image = Image::read($file)
            ->resize(800, 800, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encodeByExtension('jpg', quality: 75); // Optimize with 75% quality
    
        // Define Save Path
        $savePath = public_path("admin/{$path}/" . $filename);
    
        // Save Image to Public Path
        $image->save($savePath);
    
        return $filename;
    }

    public function storeStepOne(Request $request)
    {   
        $request->validate([
            'provider_name' => 'required',
            'contact_number' => 'required|unique:providers,contact_number',
            'email' => 'required|email|unique:providers,email',
            'address' => 'required',
            'adhar_number' => 'required',
            'pan_number' => 'required',
            'dl_number' => 'required',
            'adhar_image' => 'required|image',
            'pan_img' => 'required|image',
            'dl_image' => 'required|image',
            'profile_img' => 'required|image',
        ]);

     

        $adhar_image_path = $request->hasFile('adhar_image') ? $this->optimizeImage($request->file('adhar_image'), 'adhar_image', 'adhar') : null;
        $pan_img_path = $request->hasFile('pan_img') ? $this->optimizeImage($request->file('pan_img'), 'pan_img', 'pan') : null;
        $dl_img_path = $request->hasFile('dl_image') ? $this->optimizeImage($request->file('dl_image'), 'dl_image', 'dl') : null;
        $profile_img_path = $request->hasFile('profile_img') ? $this->optimizeImage($request->file('profile_img'), 'profile_img', 'profile') : null;

        $created_provider = Providers::create([
            'name' => $request->provider_name ?? '',
            'company_name' => $request->company_name ?? '',
            'contact_number' => $request->contact_number ?? '',
            'alternate_number' => $request->alternate_contact_number ?? '',
            'email' => $request->email ?? '',
            'address' => $request->address ?? '',
            'adhar_card_number' => $request->adhar_number ?? '',
            'pan_card_number' => $request->pan_number ?? '',
            'driving_lic_number' => $request->dl_number ?? '',
            'adhar_img' => $adhar_image_path ?? '',
            'pan_card_img' => $pan_img_path ?? '',
            'driving_lic_img' => $dl_img_path ?? '',
            'profile_image' => $profile_img_path ?? '',
            'admin_note' => null,
        ]);

        $lastInsertedId = $created_provider->id;
        return redirect()->to('provider-onboard-step-two/' . base64_encode($lastInsertedId));

    }

    public function stepTwo(Request $request, $id)
    {

        $id = base64_decode($id);

        $providerExist = Providers::where('id', $id)->first();

        if (empty($providerExist) || !empty($providerExist->account_holder_name)) {
            return redirect()->to('/');
        }

        $id = base64_encode($id);

        return view('web.pages.provider_onboard_two', compact('id'));
    }


    public function storeStepTwo(Request $request)
    {

        $request->validate([
            'id' => 'required', // Ensure ID exists
            'account_holder_name' => 'required|string',
            'branch_name' => 'required|string',
            'account_number' => 'required|numeric',
            'ifsc_code' => 'required|string',
            'bank_document' => 'required', // Allow only specific file types
        ]);

        $id = base64_decode($request->id);

        $providerExist = Providers::where('id', $id)->first();

        if (empty($providerExist)) {
            return back();
        }

        if (!empty($providerExist->account_holder_name)) {
            return back();
        }

        $bank_document_path = null;
        if ($request->hasFile('bank_document')) {
    
            $bank_document_path = $request->hasFile('bank_document') ? $this->optimizeImage($request->file('bank_document'), 'bank_document', 'bank_doc') : null;

        }

        Providers::where('id', $id)->update([
            'account_holder_name' => $request->account_holder_name,
            'branch_name' => $request->branch_name,
            'account_number' => $request->account_number,
            'ifsc_code' => $request->ifsc_code,
            'bank_document' => $bank_document_path ?? Providers::find($id)->bank_document ?? '', // Keep old document if not updated
        ]);

        // Mail::to("info@dofix.in")->send(new ProviderSignUpMail($providerExist));
        return redirect()->to('thank-you');
    }


    public function thankYou(Request $request)
    {
        return view('web.pages.thank_you');
    }

    public function aboutUs(Request $request)
    {
        return view('web.pages.about-us');
    }


    public function privacyPolicy(Request $request)
    {
        return view('web.pages.privacy_policy');
    }

    public function termsCondition(Request $request)
    {
        return view('web.pages.term_conditions');
    }



    public function contactUs(Request $request)
    {

        $services = Services::where('status',1)->get();
        return view('web.pages.contact-us', compact('services'));
    }

    public function contactUsStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:300',
            'mobile_number' => 'required',
            'email' => 'required|email',
            'service_id' => 'required|integer',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'address' => 'required',
            'message' => 'required',
        ]);
    
        $created_enquiry = Enquiry::create([
            'name' => $validated['name'],
            'mobile_number' => $validated['mobile_number'],
            'email' => $validated['email'],
            'service_id' => $validated['service_id'],
            'date' => $validated['date'],
            'time' => $validated['time'],
            'address' => $validated['address'],
            'message' => $validated['message'],
            'status' => 0,
			
        ]);
    
        $service = Services::find($created_enquiry->service_id);
     return view('web.pages.thank_you');
        try {
            if ($created_enquiry) {
                Mail::to("info@dofix.in")->send(new MailEnquiry($created_enquiry, $service));
                return view('web.pages.thank_you');
            } else {
                return redirect()->back()->with('error', 'Failed to create enquiry');
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->with('error', 'Failed to send email: ' . $e->getMessage());
        }
    }
    

}

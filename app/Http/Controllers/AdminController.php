<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Facilities;
use App\Models\Slider;
use App\Models\Album;
use App\Models\AlbumGallery;
use App\Models\Enquiry;
use App\Models\Notification;
use App\Models\Result;
use App\Models\Reviews;
use App\Models\VideoGallery;
use App\Models\ExternalLinks;
use App\Models\Providers;
use App\Models\Services;
use App\Models\Teachers;
use File;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Str;

class AdminController extends Controller
{
 
    public function mydashboard()
    {
        return view('admin.pages.dashboard');
    }
    
 
    public function services()
    {
        $services = Services::latest()->paginate(20);
        return view('admin.pages.services', compact('services'));
    }

    public function addService()
    {
        return view('admin.pages.add_service');
    }

      // Function to optimize image
    public function optimizeImage($file, $path, $prefix)
    {
        $extension = $file->getClientOriginalExtension(); // Get original file extension
        $filename = time() . "_{$prefix}.{$extension}";
        $image = Image::read($file)
                ->resize(800, 800, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->encodeByExtension('jpg', quality: 75);
        
        $savePath = public_path("admin/{$path}/" . $filename);
        $image->save($savePath);
    
        return $filename;
    }

    public function storeService(Request $request)
    {  
        $validated = $request->validate([
            'service_name' => 'required',
            'status' => 'required',
            'description' => 'required',
            'service_image' => 'required',
        ]);

        $service_image_path = $request->hasFile('service_image') ? $this->optimizeImage($request->file('service_image'), 'service_image', 'service_image') : null;


        Services::create([
            'name'=>$request->service_name,
            'slug'=>Str::slug($request->service_name),
            'status'=>$request->status,
            'description'=>$request->description,
            'image'=>$service_image_path,
        ]);

        return redirect('/admin/services');
    }

 
    public function viewService($id)
    {
        $edit_service_data = Services::where('id', $id)->first();

        if(empty($edit_service_data))
        return back();

        return view('admin.pages.edit_service', compact('edit_service_data'));
    }

    public function updateService(Request $request)
    {    
        // dd($request->all());
        $validated = $request->validate([
            'id' => 'required',
            'service_name' => 'required',
            'status' => 'required',
            'description' => 'required',
            'service_image' => 'required',
        ]);

        $service_image_path = $request->hasFile('service_image') ? $this->optimizeImage($request->file('service_image'), 'service_image', 'service_image') : null;
        
        Services::where('id', $request->id)->update([
            'name'=>$request->service_name,
            'status'=>$request->status,
            'description'=>$request->description,
            'image'=>!empty($service_image_path)  ? $service_image_path : Services::where('id', $request->id)->first()->image,
        ]);

        return redirect('/admin/services');
    }

    public function providers()
    {
        $providers = Providers::latest()->paginate(20);
        return view('admin.pages.provider_list', compact('providers'));
    }
    
    public function providersDetails($id)
    {
        $provider = Providers::findOrFail($id); 
        $provider->viewed=1;
        $provider->save();
        
        return view('admin.pages.provider_view', compact('provider'));
    }

    public function enquiry()
    {
        $enquiries = Enquiry::latest()->paginate(20);
        return view('admin.pages.enquiry_list', compact('enquiries'));
    }

    public function enquiryView($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $service = Services::find($enquiry->service_id); 

        return view('admin.pages.enquiry_view', compact('enquiry', 'service')); 
    }

    public function updateStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => 'required|in:0,1', 
        ]);

        $enquiry = Enquiry::findOrFail($id);
        $enquiry->status = $validated['status'];  
        $enquiry->save(); 

        return redirect()->route('enquiry.view', $id)->with('success', 'Status updated successfully');
    }

    public function providerAdminAction(Request $request){

        $validated = $request->validate([
            'id' => 'required', 
            'status' => 'required', 
        ]);

        $provider = Providers::findOrFail($request->id);
        $provider->status = $request->status;  
        $provider->admin_note =  $request->admin_note ?? '';  
        $provider->save(); 

        return redirect()->back();

    }

}

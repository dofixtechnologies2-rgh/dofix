<x-admin-app-layout>
    @section('title', 'Provider Details')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Details Of  "{{ $provider->name }}"</</h1>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-lg border-0 mt-3">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0"><i class="fas fa-user-tie"></i> Provider Details</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <div class="p-3 border rounded bg-light">
                                <h6 class="text-primary"><i class="fas fa-building"></i> Company Information</h6>
                                <p><b>Provider Name:</b> {{ $provider->provider_name ?? 'N/A' }}</p>
                                <p><b>Contact Number:</b> {{ $provider->contact_number ?? 'N/A' }}</p>
                                <p><b>Email:</b> {{ $provider->email ?? 'N/A' }}</p>
                                <p><b>Alternate Number:</b> {{ $provider->alternate_number ?? 'N/A' }}</p>
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="p-3 border rounded bg-light">
                                <h6 class="text-primary"><i class="fas fa-map-marker-alt"></i> Address & Bank Details</h6>
                                <p><b>Address:</b> {{ $provider->address ?? 'N/A' }}</p>
                                <p><b>Account Holder Name:</b> {{ $provider->account_holder_name ?? 'N/A' }}</p>
                                <p><b>Branch Name:</b> {{ $provider->branch_name ?? 'N/A' }}</p>
                                <p><b>Account Number:</b> {{ $provider->account_number ?? 'N/A' }}</p>
                                <p><b>IFSC Code:</b> {{ $provider->ifsc_code ?? 'N/A' }}</p>
                            </div>
                        </div>
            
                        <div class="col-md-4">
                            <div class="p-3 border rounded bg-light">
                                <h6 class="text-primary"><i class="fas fa-id-card"></i> Identity Documents</h6>
                                <p><b>Adhar Card Number:</b> {{ $provider->adhar_card_number ?? 'N/A' }}</p>
                                <p><b>Pan Card Number:</b> {{ $provider->pan_card_number ?? 'N/A' }}</p>
                                <p><b>Driving Licence Number:</b> {{ $provider->driving_lic_number ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="card mt-3 shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Provider Documents</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        @php
                            $documents = [
                                ['label' => 'Profile', 'path' => 'admin/profile_img/', 'file' => $provider->profile_image],
                                ['label' => 'Adhar', 'path' => 'admin/adhar_image/', 'file' => $provider->adhar_img],
                                ['label' => 'Pan Card', 'path' => 'admin/pan_img/', 'file' => $provider->pan_card_img],
                                ['label' => 'Driving Licence', 'path' => 'admin/dl_image/', 'file' => $provider->driving_lic_img],
                                ['label' => 'Bank Document', 'path' => 'admin/bank_document/', 'file' => $provider->bank_document],
                            ];
                        @endphp
            
                        @foreach($documents as $doc)
                            @php
                                $filePath = asset($doc['path'] . $doc['file']);
                                $fileExtension = pathinfo($doc['file'], PATHINFO_EXTENSION);
                                $isImage = in_array(strtolower($fileExtension), ['jpg', 'jpeg', 'png', 'gif', 'webp']);
                            @endphp
            
                            <div class="col-md-4">
                                <div class="card border-0 shadow-sm p-3 mt-3">
                                    <h6 class="text-center text-primary"><u>{{ $doc['label'] }}</u></h6>
                                    <a href="{{ $filePath }}" target="_blank" class="d-block text-center">
                                        @if($isImage)
                                            <img src="{{ $filePath }}" alt="{{ $doc['label'] }}" class="img-fluid rounded" style="height: 120px; width: 100%; object-fit: cover;">
                                        @else
                                            <button class="btn btn-outline-primary w-100">
                                                <i class="fas fa-file-alt"></i> View Document
                                            </button>
                                        @endif
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="card mt-3 shadow-lg">
                <div class="card-header bg-danger text-white">
                    <h5 class="mb-0">Admin Action</h5>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-lg-12">
                        <form action="{{url('/admin/provider/admin/action')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$provider->id}}">
                            <div class="form-group">
                              <label for="status">Select Status</label>
                              <select class="form-control" id="status" name="status">
                                <option value="0" {{$provider->status==0 ? 'selected' : ''}}>Pending</option>
                                <option value="1" {{$provider->status==1 ? 'selected' : ''}}>Approve</option>
                                <option value="2" {{$provider->status==2 ? 'selected' : ''}}>Cancel</option>
                              </select>
                            </div>
                            <div class="form-group">
                                <label for="admin_note">Note</label>
                                @if($provider->admin_note)
                                <textarea class="form-control" id="admin_note" name="admin_note" rows="3">{{$provider->admin_note ?? ''}}</textarea>
                                @else
                                <textarea class="form-control" id="admin_note" name="admin_note" rows="3"></textarea>
                                @endif
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-admin-app-layout>

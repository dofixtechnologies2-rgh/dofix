<x-admin-app-layout>
    @section('title', 'Enquiry Details')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-primary font-weight-bold">{{ __('Enquiry Details') }}</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg rounded border-0">
                <div class="card-header bg-primary text-white">
                    <h6 class="mb-0">Enquiry Information</h6>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-6">
                            <div class="card mb-3 border-0 shadow-sm">
                                <div class="card-body">
                                    <p><strong>Name:</strong> {{ $enquiry->name }}</p>
                                    <p><strong>Mobile Number:</strong> {{ $enquiry->mobile_number }}</p>
                                    <p><strong>Email:</strong> {{ $enquiry->email }}</p>
                                    <p><strong>Service:</strong> {{ $service ? $service->name : 'N/A' }}</p>
                                 
                                   
                                </div>
                            </div>

                            <div class="card mb-3 border-0 shadow-sm">
                                <div class="card-body">
                                    <p><strong>Address:</strong> {{ $enquiry->address }}</p>
                                    <p><strong>Message:</strong> {{ $enquiry->message }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-6">
                            <div class="card mb-3 border-0 shadow-sm">
                                <div class="card-body">
                                    <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($enquiry->date)->format('F d, Y') }}</p>
                                    <p><strong>Time:</strong> {{ \Carbon\Carbon::parse($enquiry->time)->format('g:i A') }}</p>
                                </div>
                            </div>

                            <div class="card mb-3 border-0 shadow-sm">
                                <div class="card-body">
                                    <form action="{{ route('enquiry.updateStatus', $enquiry->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="status" class="font-weight-bold">Update Status</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="0" {{ $enquiry->status == 0 ? 'selected' : '' }}>Pending</option>
                                                <option value="1" {{ $enquiry->status == 1 ? 'selected' : '' }}>Done</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-block">Update Status</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Row -->
                </div>
            </div>
        </div>
    </div>

</x-admin-app-layout>

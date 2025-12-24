<x-admin-app-layout>
    @section('title', 'Service Details')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-primary font-weight-bold">Service</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg rounded border-0">
                <div class="card-header bg-primary text-white">
                    <h6 class="mb-0">Edit Service</h6>
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
                        <div class="col-md-12">
                            <div class="card mb-3 border-0 shadow-sm">
                                <div class="card-body">
                                    <form action="{{url('admin/service-update')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{$edit_service_data->id}}" name="id">
                                        <div class="form-group">
                                            <label for="status" class="font-weight-bold">Name*</label>
                                            <input type="text" class="form-control" name="service_name" value="{{$edit_service_data->name}}" required>
                                        </div>


                                        <div class="form-group">
                                            <label class="font-weight-bold">Image</label>
                                            <input type="file" class="form-control" name="service_image">
                                            <img src="{{asset('public/admin/service_image/'.$edit_service_data->image ?? '')}}" height="70px" width="70px;">
                                        </div>

                                        <div class="form-group">
                                            <label>Description*</label>
                                            <textarea class="form-control" rows="3" name="description" required>{{$edit_service_data->description}}</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="status" class="font-weight-bold">Update Status*</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="1" {{ $edit_service_data->status == 1 ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ $edit_service_data->status == 0 ? 'selected' : '' }}>Inactive</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-success btn-block">Update</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-app-layout>

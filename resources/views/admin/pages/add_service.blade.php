<x-admin-app-layout>
    @section('title', 'Service Details')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-primary font-weight-bold">Service</h1>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-lg rounded border-0">
                <div class="card-header bg-primary text-white">
                    <h6 class="mb-0">Add Service</h6>
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
                                    <form action="{{url('admin/store-service')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label class="font-weight-bold">Name*</label>
                                            <input type="text" class="form-control" name="service_name" required>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-weight-bold">Image*</label>
                                            <input type="file" class="form-control" name="service_image" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Description*</label>
                                            <textarea class="form-control" rows="3" name="description" required></textarea>
                                          </div>

                                        <div class="form-group">
                                            <label  class="font-weight-bold">Status*</label>
                                            <select name="status" id="status" class="form-control" required>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
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

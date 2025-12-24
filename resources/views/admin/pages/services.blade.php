<x-admin-app-layout>
    @section('title', 'Providers')
    
    @push('styles')
       
    @endpush


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Services</h1>
        <a href="{{url('admin/add-service')}}" class="btn btn-primary">Add Service</a>
    </div>
    
    <div class="row">
        <div class="col-md-12">
        <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $service->name }}</td>
                                <td>{{ $service->status==1 ? 'Active' : 'Inactive' }}</td>
                                <td>
                                    <a href="{{url('admin/service/'.$service->id) }}" class="btn btn-outline-info"><i class="fas fa-pen"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
              
                {{ $services->links() }}
            </div>
        </div>
    </div>
    </div>
    </div>


    @push('scripts')
        
    @endpush

</x-admin-app-layout>

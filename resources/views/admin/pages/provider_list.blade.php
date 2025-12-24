<x-admin-app-layout>
    @section('title', 'Providers')
    
    @push('styles')
       
    @endpush


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Providers') }}</h1>
    </div>
    
    <div class="row">
        <div class="col-md-12">
        <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>{{ __('Sr No.') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Company Name') }}</th>
                            <th>{{ __('Contact Number') }}</th>
                            <th>{{ __('Email') }}</th>
                            <th>{{ __('Status') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($providers as $provider)
                            <tr class="{{$provider->viewed==0 ?  'table-danger' : '' }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $provider->name }}</td>
                                <td>{{ $provider->company_name }}</td>
                                <td>{{ $provider->contact_number }}</td>
                                <td>{{ $provider->email }}</td>
                                <td>
                                    @if($provider->status==0)
                                    <span class="badge badge-pill badge-warning">Pending</span>
                                    @elseif($provider->status==1)
                                    <span class="badge badge-pill badge-success">Approved</span>
                                    @else
                                    <span class="badge badge-pill badge-danger">Cancelled</span>
                                    @endif

                                </td>
                                <td>
                                    <a href="{{ route('providers.view', $provider->id) }}" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
              
                {{ $providers->links() }}
            </div>
        </div>
    </div>
    </div>
    </div>


    @push('scripts')
        
    @endpush

</x-admin-app-layout>

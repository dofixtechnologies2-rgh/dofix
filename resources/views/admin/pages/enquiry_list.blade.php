<x-admin-app-layout>
    @section('title', 'Providers')
    
    @push('styles')
       
    @endpush


    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Enquries</h1>
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
                            <th>{{ __('Contact Number') }}</th>
                            <th>{{ __('Email') }}</th>
                            <th>{{ __('Service Date') }}</th>
                            <th>{{ __('Action') }}</th>
                            {{-- <th>{{ __('Referral Code') }}</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($enquiries as $enquiry)
                            <tr class="{{$enquiry->status==0 ?  'table-danger' : '' }}">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $enquiry->name }}</td>
                                <td>{{ $enquiry->mobile_number }}</td>
                                <td>{{ $enquiry->email }}</td>
                                {{-- <td>{{ $enquiry->referral ?? 'N/A' }}</td> --}}
                                <td>{{ \Carbon\Carbon::parse($enquiry->date)->format('F d, Y') }}</td>
                                <td>
                                    <a href="{{ route('enquiry.view', $enquiry->id) }}" class="btn btn-outline-info"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
              
                {{ $enquiries->links() }}
            </div>
        </div>
    </div>
    </div>
    </div>


    @push('scripts')
        
    @endpush

</x-admin-app-layout>

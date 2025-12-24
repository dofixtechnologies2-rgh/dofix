<?php

use App\Models\Enquiry;
use App\Models\Providers;
use App\Models\Services;

if (!function_exists('allDbCount')) {
    function allDbCount()
    {
        $dbcount=[];
        $dbcount['Providers']=Providers::all()->count();
        $dbcount['Enquiries']=Enquiry::all()->count();
        $dbcount['Services']=Services::all()->count();

        return $dbcount;
    }
}



<?php

namespace App\Exports;

use App\Models\Subscribe;
use Illuminate\Contracts\View\View;

use Maatwebsite\Excel\Concerns\FromView;

class SubscriberExport implements FromView
{

    

    public function view(): View
    {

        return view('exports.subcribers',[
            'subscribers'=> Subscribe::orderBy('id','asc')->get(),
        ]);   
    }
}
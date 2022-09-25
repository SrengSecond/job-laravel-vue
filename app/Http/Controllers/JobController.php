<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(){
        return view('pages.job.index',[
            'header' => 'Job List',
            'jobs' => Job::latest()->get()
        ]);

    }

    public function detail($id) {
        return view('pages.job.detail',[
            'header' => 'Job Detail',
            'jobs'=> Job::find($id)
        ]);
    }
}

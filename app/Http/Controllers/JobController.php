<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() {
        return view('pages.job.index',[
            'header' => 'Job List',
            'jobs' => Job::latest()
                ->filter(request(['tags','search']))
                ->paginate(5),
        ]);

    }
    public function show($id) {
        return view('pages.job.show',[
            'header' => 'Job Detail',
            'job'=> Job::find($id)
        ]);
    }

    public function create() {
        return view('pages.job.create',[
            'header' => 'Create Job'
        ]);
    }

    public function store(Request $request) {
        /*dd($request);*/

        $formFields = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'tags' => 'string|max:255',
            'location' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'salary' => 'required|integer',
        ]);

        if($request->hasFile('img')) {
            $formFields['img'] = $request->file('img')->store('images','public');
        }

        Job::create($formFields);

        /*Session::flash('message', 'Job created successfully');*/

        return redirect(route('jobs.index'))->with('message', 'Job created successfully');
    }

    //Show
    //Create
    //Edit
    //Store
    //Delete
    //Update
}

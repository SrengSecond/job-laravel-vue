<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\RedirectResponse;
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

    public function show(Job $job) {
        return view('pages.job.show',[
            'header' => 'Job Detail',
            'job'=> $job
        ]);
    }

    public function show_manually($id) {

        $job = Job::find($id);

        if($job) {
            return view('pages.job.show',[
                'header' => 'Job Detail',
                'job'=> $job
            ]);
        }
        return abort('404');
    }

    public function create() {
        return view('pages.job.create',[
            'header' => 'Create Job'
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
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

        return redirect()->route('jobs.index')->with('message', 'Job created successfully');
    }

    public function destroy(Job $job): RedirectResponse
    {
        $job->delete();
        return redirect()->route('jobs.index')->with('message','Job delete successfully');
    }

    public function edit(Job $job){
        return view('pages.job.edit',[
            'header' => 'Edit Job',
            'job' => $job
        ]);
    }

    public function update(Request $request,Job $job){
        $formFields = $request->validate([
                'title' => 'required|string|max:255',
            ]
        );

        if($request->hasFile('img')) {
            $formFields['img'] = $request->file('img')->store('images','public');
        }

        $job->update($formFields);

        return redirect()->route('jobs.index')->with('message','Job updated successfully');
    }

    //Show
    //Create
    //Edit
    //Store
    //Delete
    //Update
}

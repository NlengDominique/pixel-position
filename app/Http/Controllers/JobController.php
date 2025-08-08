<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $jobs = Job::with(['employer','tags'])
            ->latest()
            ->get()
            ->groupBy('featured');

        return view('jobs.index', [
            'featuredJobs' => $jobs[1],
            'jobs' => $jobs[0],
            'tags' => Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
     $attributes =  $request->validate([
        'title'=>'required|string',
          'salary'=>'required|string',
          'location'=>'required|string',
          'schedule'=>'required|in:full-time,part-time',
          'url'=>'required|active_url',
          'tags'=>'nullable'
      ]);

     $attributes['featured'] = $request->has('featured');

     $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

     if($attributes['tags'] ?? false){
        foreach (explode(',',$attributes['tags']) as $tag){
            $job->tag($tag);
        }
     }

     return redirect('/');
    }


}

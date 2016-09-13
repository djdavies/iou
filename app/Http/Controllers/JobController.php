<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Illuminate\Support\Facades\Auth;
use App\Job;
use Session;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {

            // find all the jobs, that have been proposed by the Auth::user
            $jobs = Auth::user()->jobs;
            return view('jobs.index', ['jobs' => $jobs]);
        } else {
            Session::flash('flash_message', "Please log in to view jobs!");

            return redirect('posts');
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $this->validate($request, [
                'id' => 'required'
            ]);

            $id = $request->input('id');
            // TODO: default value of completed = 0
            Job::create(['post_id' => $id, 'user_id' => Auth::id(), 'accepted' => 0, 'completed' => 0]);

            Session::flash('flash_message', "You've proposed to do this job!");

        } else {
            Session::flash('flash_message', "Please log in to propose job offers!");
        }

        return redirect('posts');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Show job proposals -- if user owns the post, and accepted == 1
//        if (Auth::check()) {
//            $post = Post::find($id);
//            $jobs = $post->job()->get();
//            return view('jobs.show', ['jobs' => $jobs]);
//        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'yes_offer' => 'required'
        ]);

        if ($request->yes_offer) {
            Job::find($id)->update(['accepted' => 1]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

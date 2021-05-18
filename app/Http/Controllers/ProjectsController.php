<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        $project = new Project;
        $eligibleProjects = null;
        if ($user->role_id !== 4) {
            $eligibleProjects = DB::table('projects')
                ->join('project_roles', 'project_roles.project_id', '=', 'projects.id')
                ->join('users', 'users.id', '=', 'project_roles.user_id')
                ->select('projects.*')->where('users.id', $user->id)
                ->paginate(10);
        } else {
            $eligibleProjects = $project->get();
        }

        return view('projects.projects', [
            'projects' => $eligibleProjects,
            'userRole' => $user->role_id,


        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $user = Auth::user();
        if ($user->role_id !== 4) {
            return redirect('/projects');
        } else {
            return (view('projects.create-projects'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "name" => 'required|max:255',
            "description" => 'required',
            'start_date' => 'required|date|date_format:Y-m-d|after_or_equal:today',
            'end_date' => 'required|date|date_format:Y-m-d|after_or_equal:today',
            "avatar_image_url" => 'image',
            "background_image_url" => 'image',
        ]);

                //UPLOAD TO CLOUDINARY 
                $project = new Project;
                $project->name = $request->input('name');
                $project->description = $request->input('description');
                $project->start_date = $request->input('start_date');
                $project->end_date = $request->input('end_date');
                $project->avatar_image_url = 'no image';
                $project->background_image_url = 'no image';
                $project->slug = Str::of($project->name)->slug('-');;
        
        
                $project->save();
        
                return redirect('/projects')->with('status', 'project successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

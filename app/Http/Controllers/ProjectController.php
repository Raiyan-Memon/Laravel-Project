<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Interface\Modules\ProjectRepositoryInterface;

class ProjectController extends Controller
{
    private ProjectRepositoryInterface $contactRepoInterface;
  
    public function __construct( ProjectRepositoryInterface $projectRepoInterface){

        $this->middleware('auth');
        $this->projectRepoInterface = $projectRepoInterface;
    }

    public function index()
    {
       
        return view ('projects.index', ['project' => $this->projectRepoInterface->all()]);
    }

  
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request -> validate([

            'name' => '',
            'description' => '',
            'date' => ''
        ]);

        $this->projectRepoInterface->create($input);

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show', ['project' => $this->projectRepoInterface->find($project->id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        
        $request->validate([
            'name' => '',
            'description' => '',
            'date' => ''
        ]);
        
        
        
        return redirect() -> route('projects.index',['project'=>$this->projectRepoInterface->update($request, $project->id)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        
        return redirect()->route('projects.index',['project' => $this->projectRepoInterface->delete($project->id)]);
    }
}

<?php

namespace App\Repository\Modules;

use App\Interface\Modules\ProjectRepositoryInterface;
use App\Models\Project;

class ProjectRepository implements ProjectRepositoryInterface
{

    public function all()
    {
        $project = project::paginate(5);
        return $project;
    }

    public function create($input)
    {

        return project::create($input);
    }

    public function find($project)
    {

        return project::findorfail($project);
    }

    public function update($request, $project)
    {
        $input = $request->all();
        $projects = project::find($project);
        return $projects->fill($input)->save();
    }

    public function delete($id)
    {
        return project::findorfail($id)->delete();
    }

    public function updateApi($request, $project)
    {
        $projects = Project::find($request);
        $updated = $projects->update($project);
    }
}
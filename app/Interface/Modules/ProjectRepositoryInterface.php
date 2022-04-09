<?php

namespace App\Interface\Modules;

interface ProjectRepositoryInterface
{

    public function all();
    public function create($input);
    public function find($account);
    public function update($request, $project);
    public function updateApi($request, $id);
    public function delete($id);
}
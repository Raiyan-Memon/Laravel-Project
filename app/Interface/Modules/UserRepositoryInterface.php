<?php

namespace App\Interface\Modules;

interface UserRepositoryInterface
{

    public function all();
    public function create($input);
    public function find($account);
    public function update($request, $user);
    public function updateApi($request, $id);
    public function delete($id);
}
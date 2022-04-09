<?php

namespace App\Interface\Modules;

interface ContactRepositoryInterface
{

    public function all();
    public function create($input);
    public function find($account);
    public function update($request, $id);
    public function updateApi($request, $id);
    public function delete($id);
}
<?php

namespace App\Repository;

interface AccountRepositoryInterface{

 
public function all();
public function create($input);
public function find($account);
public function update($request, $id);
public function delete($id);

}
?>
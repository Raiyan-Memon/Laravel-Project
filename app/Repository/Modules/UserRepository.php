<?php

namespace App\Repository\Modules;

use App\Interface\Modules\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{

    public function all()
    {
        $user = user::paginate(5);
        return $user;
    }

    public function create($input)
    {

        return User::create($input);
    }

    public function find($project)
    {

        return user::findorfail($project);
    }

    public function update($request, $user)
    {
        $input = $request->all();
        $users = user::find($user);
        return $users->fill($input)->save();
    }

    public function delete($id)
    {
        return user::findorfail($id)->delete();
    }

    public function updateApi($request, $user)
    {
        $users = User::find($request);
        $updated = $users->update($user);
    }
}
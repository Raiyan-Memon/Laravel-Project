<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interface\Modules\UserRepositoryInterface;
use App\Models\User;

class UserController extends Controller
{

    private UserRepositoryInterface $userRepoInterface;

    public function __construct(UserRepositoryInterface $userRepoInterface)
    {

        $this->middleware('auth');
        $this->userRepoInterface = $userRepoInterface;
    }

    public function index()
    {
        return view('users.index', ['user' => $this->userRepoInterface->all()]);
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $input = $request->validate([

            'name' => '',
            'email' => '',
            'password' => ''
        ]);

        $this->userRepoInterface->create($input);

        return redirect()->route('users.index');
    }


    public function show(User $user)
    {
        return view('users.show', ['user' => $this->userRepoInterface->find($user->id)]);
    }


    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => '',
            'email' => '',
            'password' => ''
        ]);



        return redirect()->route('users.index', ['user' => $this->userRepoInterface->update($request, $user->id)]);
    }


    public function destroy(User $user)
    {
        return redirect()->route('users.index', ['user' => $this->userRepoInterface->delete($user->id)]);
    }
}
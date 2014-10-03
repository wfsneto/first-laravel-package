<?php
namespace Wfsneto\FirstLaravelPackage;

class UsersController extends BaseController
{
    public function index()
    {
        $users = User::all();
        return \View::make('first-laravel-package::users.index')->with('users', $users);
    }
}
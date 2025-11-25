<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function index()
    {
        $users = User::all(); // fetch all users
        view('users/index', ['users' => $users]);
    }

    public function delete()
    {
        $id = $_POST['id'] ?? null;

        if ($id) {
            $user = User::find($id);
            if ($user) {
                $user->delete();
            }
        }

        redirect('/users');
    }

    public function editForm()
    {
        $id = $_GET['id'];
        $user = User::find($id);

        view('users/edit', ['user' => $user]);
    }

    public function update()
    {
        $id = $_POST['id'];

        $updateData = [
            'email' => $_POST['email'],
        ];

        if (!empty($_POST['password'])) {
            $updateData['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
        }

        User::update($updateData, $id);

        redirect('/users');
    }
    public function createForm()
{
    view('users/create');
}

public function create()
{
    if (!$_POST['email'] || !$_POST['password']) {
        return redirect('/users/create');
    }

    $user = new User();
    $user->email = $_POST['email'];
    $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $user->save();

    redirect('/users');
}

}

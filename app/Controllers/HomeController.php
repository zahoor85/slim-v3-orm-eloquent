<?php

namespace App\Controllers;

use App\Models\User;

class HomeController extends Controller
{

    public function index($request, $response)
    {
       echo "Welcome SLIM v3 with Eloquent ORM";
    }
    public function create($request, $response)
    {
        $create = User::create([
            'name' => 'zahoor',
            'email' => 'zahoor@example.com',
            'password' => 'zahoor',
        ]);
        var_dump($create);
    }



    public function getall($request, $response)
    {
        $users = $this->container->db->table('users')->get();
        foreach ($users as $user) {
            echo $user->name . "</br>";
            echo $user->email . "</br>";
        }
    }
}

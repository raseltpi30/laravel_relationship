<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return $users;
    }
    public function create(){
        // return "This is create page!";       
        $data = [
            'name' => "Rasel Rana",
            'email' => "rasel525300@gmail.com",
            'password' => 123456,
        ];
        User::create($data);

        return "Create Data successfully!";
    }
    public function show($id){
        $users = User::findOrFail($id);
        return $users;
    }
    public function delete($id){
        $users = User::findOrFail($id);
        $users->delete();
        return "Deleted";
    }
    public function edit($id){
        $users = User::findOrFail($id);
        $users->name = "New Name";
        $users->email = "new@gmail.com";
        $users->save();

        return "User name changed Successfully";
    }
}

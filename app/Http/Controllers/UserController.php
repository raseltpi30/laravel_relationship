<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
    public function creat_user(){
        return view('create_user');
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
    public function store(){
        return "Add a user";
    }
    public function update(){
        return "Updated";
    }
    public function updateName(){
        return "User name has been Updated Successfully";
    }
    public function delete(){
        return "Deleted";
    }
    public function show($id ,$name = "Raj"){
        return $id ." ".$name;
    }
    public function display($id){
        return "Display"." ".$id;
    }
}

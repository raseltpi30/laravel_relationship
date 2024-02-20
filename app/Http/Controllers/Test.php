<?php
namespace App\Http\Controllers;

class Test extends Controller{
    public function test(){
        // $name = "Rasel Rana";
        $this->data['name'] = 'Rasel Rana';
        $this->data['roll'] = 101397;
        $this->data['registration'] = 1500900314;
        $this->data['subjects'] = ['Computer','RAC','AIDT','Food'];
        return view('home.index',$this->data);
    }
}
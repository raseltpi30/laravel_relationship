<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        $customers = DB::table('customers_info')->get();
        // $customers = DB::table('customers_info')->find(2);
        // $customers = DB::table('customers_info')->count();
        // $customers = DB::table('customers_info')->sum('balance');
        // $customers = DB::table('customers_info')->max('balance');
        // $customers = DB::table('customers_info')->min('balance');
        // $customers = DB::table('customers_info')->average('balance');
        // $customers = DB::table('customers_info')->select('email')->where('balance',10)->get();
        dd($customers);
        // json_encode($customers);
    }
    public function store(){
        // $cust = DB::table('customers_info')->select('customers_info.email','invoices.amount')->leftJoin('invoices','customers_info.id' ,'=', 'invoices.customer_id')->get();
        $cust = DB::table('customers_info')
        ->updateOrInsert(
            ['name' => 'Rasel Rana','email'=>'rasel@gmail.com','address' => 'Thakurgaon'],
            ['balance' => '500'],
        );

        dd($cust);
    }
    public function delete(){
        DB::table('customers_info')
        ->where('id',3)->delete();
        return "Deleted";
    }
}

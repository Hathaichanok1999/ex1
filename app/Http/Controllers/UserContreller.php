<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserContreller extends Controller
{
    public function index(){
        return "หน้า user";
    }
    public function create(){
        return "สร้าง user";
    }
    public function ShowName($name){
        return "สวัสดี $name";
    }
    public function ShowNameAndAge($name, $age){
        return "สวัสดี $name อายุ $age";
    }
}

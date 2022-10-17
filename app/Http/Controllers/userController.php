<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class userController extends Controller
{
    /** 
    *Show the profile for given user.
    *
    *@param int $id
    *@return View
    */

    public function show($name){
        return "Hello world".$name."...!";
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TaskController extends Controller
{
    function __construct(){
    	$this->midleware('auth');
    }
}

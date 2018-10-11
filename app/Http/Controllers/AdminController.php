<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Middleware;
use App\User;

class AdminController extends Controller
{
    public function __construct() {
        
        $this->middleware('admin');
    }
    
 
    public function index() {
        
         $users = User::orderBy('created_at', 'asc')->get();
        
        return view('admin.index',compact('users'));
    }
    
}

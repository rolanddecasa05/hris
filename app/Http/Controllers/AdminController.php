<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
    	return Inertia::render('Admin/AdminDashboard', [
    		'users' => User::limit(10)->get()
    	]);
    }
}

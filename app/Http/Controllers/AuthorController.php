<?php

namespace App\Http\Controllers;
use App\Models\Authors;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        return view('authors.index');
    }
}
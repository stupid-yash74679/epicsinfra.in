<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return (new View)
            ->template('blogs/index')
            ->layout('layout');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class About extends Controller

    public function show(){
        Route::get('/blog/{blogId}', function ($blogId) {
            $title = request()->query('title', 'Untitled'); // Ambil query string 'title', default 'Untitled'
            $content = request()->query('content', 'No content provided'); // Ambil query string 'content', default 'No content provided'
        
            return "Blog ID: $blogId, Title: $title, Content: $content";
        });
        
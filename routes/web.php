<?php

use App\Http\Controllers\About;
use Illuminate\Support\Facades\Route;

// Signin and Signup
Route::get('/signin', function () {
    return 'Signin Form';
});
Route::get('/signup', function () {
    return 'Signup Form';
});
Route::post('/signin', function () {
    return 'Process Signin Data';
});
Route::post('/signup', function () {
    return 'Process Signup Data';
});

// Home
Route::get('/', function () {
    return 'Home Page';
});

// Blog
Route::get('/blog', function () {
    return 'Blog List';
});
Route::get('/blog/{slug}', function ($slug) {
    return "Blog Detail for slug: $slug";
});

// Category
Route::get('/category/{slug}', function ($slug) {
    return "Articles in Category: $slug";
});

// Author
Route::get('/author/{username}', function ($username) {
    return "Articles by Author: $username";
});

// Privacy Policy
Route::get('/privacy-policy', function () {
    return 'Privacy Policy Page';
});

Route::get('/blog/{blogId}', function ($blogId) {
    $title = request()->query('title', 'Untitled'); // Ambil query string 'title', default 'Untitled'
    $content = request()->query('content', 'No content provided'); // Ambil query string 'content', default 'No content provided'

    return "Blog ID: $blogId, Title: $title, Content: $content";
});

    




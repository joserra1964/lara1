<?php


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('blog', function() {
// Consulta a BBDD
$posts = [
    ['id'=>1, 'title'=>'PHP', 'slug'=>'php'],
    ['id'=>2, 'title'=>'Laravel', 'slug'=>'laravel']
];
return view('blog',['posts'=>$posts]);
});

Route::get('blog/{slug}',function($slug) {
    // Consulta a BBDD
    $post = $slug;
    return view('post',['post'=>$post]);
});



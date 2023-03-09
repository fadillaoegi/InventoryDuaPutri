<?php

use Faker\Provider\Lorem;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');
    
});


Route::get('/pemanasanlaravel', function () {
    return view('contohLayout/layouts/home', 
    [
        "tittle" => "Home",
        "slug" => "slug home",
        
    ]);
});

Route::get('pemanasanlaravel/blog', function () {
    $blogs = [
        [
            "tittle" => "Tabebuya",
            "email" => "fadil@gmail.com",
            "penulis" => "Shofa",
            "slug" => "slug tatebuya",
            "post" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum nisi illum, veniam repudiandae totam placeat! Numquam debitis minus velit fuga, dolorum, ea voluptas quo odio eum iste ipsam corporis labore modi aliquam alias laborum obcaecati totam. Facere, sit voluptates. Enim alias neque, veritatis amet debitis repudiandae sint quia eveniet dicta non ratione id assumenda, veniam facilis. Error fugit eligendi fuga nesciunt reprehenderit sequi ipsa aspernatur delectus. Doloribus beatae impedit quas totam. Vero voluptatum vel tempora dolorum repellendus incidunt delectus, accusamus temporibus magnam, voluptates in aperiam voluptatibus obcaecati cumque nisi minima non quas culpa quia! Laboriosam perspiciatis expedita eveniet neque placeat?"
        ],
        [
            "tittle" => "Buku",
            "email" => "fadil@gmail.com",
            "penulis" => "Nabila",
            "slug" => "slug buku",
            "post" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum nisi illum, veniam repudiandae totam placeat! Numquam debitis minus velit fuga, dolorum, ea voluptas quo odio eum iste ipsam corporis labore modi aliquam alias laborum obcaecati totam. Facere, sit voluptates. Enim alias neque, veritatis amet debitis repudiandae sint quia eveniet dicta non ratione id assumenda, veniam facilis. Error fugit eligendi fuga nesciunt reprehenderit sequi ipsa aspernatur delectus. Doloribus beatae impedit quas totam. Vero voluptatum vel tempora dolorum repellendus incidunt delectus, accusamus temporibus magnam, voluptates in aperiam voluptatibus obcaecati cumque nisi minima non quas culpa quia! Laboriosam perspiciatis expedita eveniet neque placeat?"
        ],
        [
            "tittle" => "Babi",
            "email" => "fadil@gmail.com",
            "penulis" => "Alifa",
            "slug" => "slug babi",
            "post" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum nisi illum, veniam repudiandae totam placeat! Numquam debitis minus velit fuga, dolorum, ea voluptas quo odio eum iste ipsam corporis labore modi aliquam alias laborum obcaecati totam. Facere, sit voluptates. Enim alias neque, veritatis amet debitis repudiandae sint quia eveniet dicta non ratione id assumenda, veniam facilis. Error fugit eligendi fuga nesciunt reprehenderit sequi ipsa aspernatur delectus. Doloribus beatae impedit quas totam. Vero voluptatum vel tempora dolorum repellendus incidunt delectus, accusamus temporibus magnam, voluptates in aperiam voluptatibus obcaecati cumque nisi minima non quas culpa quia! Laboriosam perspiciatis expedita eveniet neque placeat?"
        ],
    ];
    return view('contohLayout/layouts/blogs', 
    [
        "tittle" => "Blog",
        "email" => "Shofa@gmail.com",
        "posts" => $blogs,
    ]);
});

Route::get('pemanasanlaravel/about', function () {
    return view('contohLayout/layouts/about', 
    [
        "tittle" => "About",
        "slug" => "slug ablot",
        "email" => "Shofa@gmail.com"
    ]);
});


// Route::get('/pemanasan', [MemberController::class, 'invoice'])->name('member.invoice');
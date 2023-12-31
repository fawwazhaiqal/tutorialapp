<?php

use App\Models\Post;
use App\Models\Category;
use Symfony\Component\Yaml\Yaml;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
   
    return view('posts',[
        'posts'=> Post ::all()

    // return view ('posts',['posts'=>$post]);

    // return view ('posts',[
    //     'posts'=> Post::all()
    // ]);
]);
});

    
Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts 
    ]);
}); 
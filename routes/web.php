<?php

use App\Models\Comment;
use App\Models\Post;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
    //return view('welcome');
    //return view('index');
    //return view('post');
    //return view('contact');
    //return view('about');
//    return redirect(route('posts.index'));
//    $post = new Post();     //先產生 Post 的物件 $post ， $post 將代表 posts 資料表的一篇貼文
//    $post->title = 'test title';        //指定貼文的title
//    $post->content = 'test content';    //指定貼文的content
//    $post->save();          //將新貼文 $post 存入 posts 資料表
//    Post::create([
//        'title' => 'created title',
//        'content' => 'created content',
//    ]);
//    $posts = Post::all();    //取出 posts 資料表所有貼文
//    dd($posts);             //data dump 可將變數內容倒出，並停止程式執行
//    $post = Post::find(1);      //找尋 posts 資料表 id = 1 的貼文
//    dd($post);
//    $posts = Post::where('id', '<', 10)->orderBy('id', 'DESC')->get();  //查詢符合條件(id<10)的貼文
//    dd($posts);

//    $post = Post::find(1);
//    $post->update([
//        'title' => 'updated title',
//        'content' => 'updated content',
//    ]);
//    return 'Updated, OK!';

//    $post = Post::find(1);
//    $post->title = 'saved title';
//    $post->content = 'saved content';
//    $post->save();
//    return 'Saved, OK!';

//    $post = Post::find(1);
//    $post->delete();

//    Post::destroy(2);

//    Post::destroy(3, 5, 7);
//    return 'Deleted!';

//    取得 Collection //多筆貼文的集合
//    $allPosts = Post::all();
//    dd($allPosts);
//    $featuredPosts = Post::where('is_feature', 1)->get();   //多筆貼文的集合
//    dd($featuredPosts);
//    取得 Model  //單一筆貼文
//    $fourthPost = Post::find(4);
//    dd($fourthPost);
//    $lastPost = Post::orderBy('id', 'DESC')->first();
//    dd($lastPost);

//    $post = Post::find(6);
//    echo '標題: '.$post->title.'<br>';
//    echo '內容: '.$post->content.'<br>';
//    echo '--------------------------'.'<br>';
    //    $comments = $post->comments()->get();   //$post->comments()->get()可簡寫$post->comments
    //    $comments = $post->comments;
//    foreach ($comments as $comment){
//        echo '留言: '.$comment->content."<br>";
//        echo '-----------------------------'.'<br>';
//    }
    $comment = Comment::find(2);
    echo $comment->content.'<br>';
    echo '******************'.'<br>';
    //    $post = $comment->post()->first();      //$comment->post()->first()可簡寫$comment->post
    $post = $comment->post;
    echo $post->id.'<br>';
    echo $post->title.'<br>';
    echo $post->content.'<br>';

});

Route::get('posts',[PostController::class, 'index'])->name('posts.index');
Route::get('post',[PostController::class, 'show'])->name('posts.show');
Route::get('contact',[PostController::class, 'contact'])->name('posts.contact');
Route::get('about',[PostController::class, 'about'])->name('posts.about');

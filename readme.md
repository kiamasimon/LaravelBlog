<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

# Laravel Blog 

## Simple Laravel Blog Sample 
This is a beginer level project, illustrating ther basic of creating a blog and the various parts that it should include.

### Getting Started
This project was implemented in the windows platform
For this project to function as intended, you must having the following installed on your machine;

    1. Server - Lamp/wamp/xammp, get it from:: https://www.apachefriends.org/download.html
    2. Composer installed global.
        Also make sure that the following are installed for laravel 5.7:
            1) PHP >= 7.1.3
            2) OpenSSL PHP Extension
            3) PDO PHP Extension
            4) Mbstring PHP Extension
            5) Tokenizer PHP Extension
            6) XML PHP Extension
            7) Ctype PHP Extension
            8) JSON PHP Extension
            9) BCMath PHP Extension
            
#### Prequisites
  1) Composer installed global.
  2) If you are using a windows based computer, you must have basic knowledge on running commands on cmd,shell and windows file navigation 
  
#### Installing
1) Use git to clone the project to your local computer url:: https://github.com/kiamasimon/LaravelBlog
2) Download it directly from the repository.
3) Navigate to project folder where artisan file is located.
5) Run the command php artisan serve to start the test server and navigate to::http://localhost:8000/
    on your browser of choice.
##### End Points
        Route::get('/', 'PostController@getIndex')->name('index');
        Auth::routes();
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/author/posts', 'HomeController@getPostForm')->name('post.form');
        Route::post('/author/posts', 'HomeController@createPost')->name('post.form');
        Route::get('/author/posts/detail/{id}', 'HomeController@getPost')->name('post.detail');
        Route::get('/author/posts/edit/{id}', 'HomeController@editPost')->name('post.edit');
        Route::post('/author/posts/edit/{id}', 'HomeController@updatePost')->name('post.update');
        Route::get('/author/posts/delete/{id}', 'HomeController@deletePost')->name('post.delete');
        Route::get('/posts/read/{post_id}', 'PostController@getFullPost')->name('post.read');
    
#### Authors
Simon Kiama Irungu

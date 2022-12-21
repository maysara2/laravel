<?php

use App\Http\Controllers\catcontroller;
use App\Http\Controllers\cvcontroller;
use App\Http\Controllers\ffcon;
use App\Http\Controllers\form1controller;
use App\Http\Controllers\ggcontroller;
use App\Http\Controllers\GGnaser;
use App\Http\Controllers\maysatacontroller;
use App\Http\Controllers\page1controller;
use App\Http\Controllers\postscontroller;
use App\Http\Controllers\webController;
use App\Models\Categoties;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\Environment\Runtime;

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






/*
 Route::get('/', function () {
    return 'hello maysara';
});
 */


 /* هذه الروابط لعرض الصفحات بشكل مباشر  */
/*

Route::get("/",function(){
    return 'home page';
});

Route::get("about",function(){
    return 'about page';
});

Route::get("team",function(){
    return 'tram page';
}); */




/* يقبل جميع الارقام والاحجرف والرموز  */

/* Route::get('user/{name}',function($name){
return "welcome ". $name;
});
 */

/* يقببل فقط الاحرف */

/*  Route::get('user/{name}',function($name){
    return 'welcome  '. $name;
 })->whereAlpha('name');
 */
 /* الاسم  يقبل فقط الاحرف والعمر يقبل فقط الارقام */

 /* Route::get('user/{name}/{age}',function($name,$age){
return 'your name is '.$name .' and your age is '.$age;
})->whereAlpha('name')->whereNumber("age"); */

/* اسم المستخدم يقبل الاحرف والارقام دون الرموز */

/* Route::get('user/{user}',function($user){
    return 'your user is ' .$user;
})->whereAlphaNumeric('user');
 */

 /* اضافة شرط على الرابط */

/*  Route::get('news/{id?}',function($id = null){
   if($id){
    return 'news id =' . $id;
   }
    return 'news ';
 }); */

 /* تغيير الكود وعمل علامة مرجعية  */

/*  Route::get('/',function(){
  // return url('contact-us');
    return route('maysara');
});
Route:: get('contact-uuhhhhhh',function(){
    return 'contact Us';
})->name('maysara');
 */


 Route::get("/",[webController::class,'index'])
->name('web.index');

Route::get("/about",[webController::class,'about'])
->name('web.about');

Route::get("/contact",[webController::class,'contact'])
->name('web.contact');

Route::get("/team",[webController::class,'team'])
->name('web.team');

Route::get('news/{id?}',[webController::class,'news'])
->name('web.news');







Route::prefix('page1')->name('page1')->group(function(){

    Route::get('/',[page1controller::class,'index'])->name('index');

     Route::get('/about',[page1controller::class,'about'])->name('about');

     Route::get('/contact',[page1controller::class,'contact'])->name('contact');

     Route::get('/post',[page1controller::class,'post'])->name('post');
});














Route::prefix('cv')->name('cv.')->group(function(){

    Route::get('/',[cvcontroller::class,"index"])->name('index');

    Route::get('/experiens',[cvcontroller::class,"experiens"])->name('experiens');

    Route::get('/education',[cvcontroller::class,"education"])->name('education');

    Route::get('/skills',[cvcontroller::class,"skills"])->name('skills');

    Route::get('/interests',[cvcontroller::class,"interests"])->name('interests');

    Route::get('/awards',[cvcontroller::class,"awards"])->name('awards');
});

Route::get('form1',[form1controller::class,'form1'])->name('form1');
Route::post('form1',[form1controller::class,'form1_data'])->name('form1_data');




Route::get('form2',[form1controller::class,'form2'])->name('form2');
Route::post('form2',[form1controller::class,'form2_data'])->name('form2_data');




Route::get('form3',[form1controller::class,'form3'])->name('form3');
Route::post('form3',[form1controller::class,'form3_data'])->name('form3_data');


Route::get('posts',[postscontroller::class,'index'])->name('posts.index');


Route::get('categoties',[catcontroller::class,'index'])->name('categoties.index');



Route::get('posts/create',[postscontroller::class,'create'])->name('posts.create');
Route::post('posts/srote',[postscontroller::class,'store'])->name('posts.store');


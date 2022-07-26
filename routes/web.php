<?php

use App\Http\Controllers\webController;
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









/* Route::get('/', function () {
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

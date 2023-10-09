<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstControl;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

########################################
// ============Project Routs:===========//

Route::get('/', function () {
    return view('Ecom.index');
});

Route::post('/hello', [FirstControl::class, 'hello']);

Route::get('/signup', [FirstControl::class, 'signup']);

Route::get('/login', [FirstControl::class, 'login']);

Route::post('/signupMain', [FirstControl::class, 'signupMain']);

Route::get('/main', [FirstControl::class, 'main']);

Route::post('/uplode', [FirstControl::class, 'uplode']);

Route::get('/search/{id?}', [FirstControl::class, 'search']);

Route::get('/logout', [FirstControl::class, 'logout']);


#######################################Project Route End


Route::get('/about', function(){
    return view('Inheri/about');
});
Route::get('/post', function(){
    return view('Inheri/post');
});
Route:: get('/js', function(){
    return view('Inheri.js');
});

Route::get('/show/{id}', [FirstControl::class, 'show']);


## IF we use Singel Controller than we can make a group of Routes:

Route::controller(FirstControl::class)->group(function(){
    Route::get('/show/{id}', 'show')->name('show');
    Route::get('/showtwo', 'showTwo')->name('Two');
    // We can make Multiple Routes LIke as:
});


// Route::get('/hello/{id?}', function(string $id = null){
//     if($id == null){
//         return view('welcom');
//     }else{
//         return "<h1>Your ID: ". $id. "</h1>";
//     }

// })->whereAlpha('id');


// Route::get('/hello/{id?}/done/{hi?}', function(string $id = null, $hi = null){
//     if($id == null){
//         echo 'Id Was Null';
//     }else{
//         return "<h1>Your ID: ". $id. "Hello Id:". $hi ."</h1>";
//     }

// })->whereAlpha('id')->whereAlpha('hi');
// Route::view('welcom','/hello');


# Named Routes this is prefered to use:
// Route::get('/A_hello', function (){
//     return view('welcom');
// })->name('about');

# Redirect use for :
// Route::redirect('/about', '/A_hello');

# if we want to use "SubRoutes" then use prefix:
// Route::prefix('post')->group(function(){
//     Route::get('/pages', function(){
//         echo "this is first SubRoute";
//     });
// });
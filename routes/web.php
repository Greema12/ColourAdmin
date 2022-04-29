<?php

use App\Http\Controllers\CatalogueController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index1')->name('home');


// Route::get('/', 'HomeController@index');


Auth::routes(['verify'=> true]);

Route::get('/', function () {
    return view('auth.login');
});



 Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/register/register' ,'HomeController@register');



//logo page
Route::get('/logo/logo' ,'HomeController@logo');
Route::get('/logo/LogoEdit/{id}','HomeController@EditLogo');
Route::post('/logo/masterUpdate/{id}', 'HomeController@updateLogo');



//slider
Route::get('/slider/slider' ,'HomeController@slider');
Route::get('/slider/addNewSlider' ,'HomeController@newslider');
Route::post('/slider/store' ,'HomeController@storeSlider');
Route::get('/slider/SliderEdit/{id}' , 'HomeController@EditSlider');
Route::post('/slider/masterUpdate/{id}' ,'HomeController@updateSlider');
Route::get('/slider/delete/{id}' ,'HomeController@deleteSlider');


//why choose us
Route::get('/choose_us/chooseus' ,'HomeController@chooseus');
Route::get('/choose_us/editChooseUs/{id}' , 'HomeController@EditChooseUs');
Route::post('/choose_us/masterUpdate/{id}' ,'HomeController@updateChooseUs');

//aboutus home page

Route::get('/about_home/aboutus' ,'HomeController@aboutus');
Route::get('/about_home/editAboutUs/{id}' , 'HomeController@EditAboutUs');
Route::post('/about_home/masterUpdate/{id}' ,'HomeController@updateAboutUs');

//feedback

Route::get('/feedback/feedback' ,'HomeController@Feedback');
Route::get('/feedback/editFeedback/{id}' , 'HomeController@EditFeedback');
Route::post('/feedback/updateFeedback/{id}' ,'HomeController@updateFeedback');
Route::get('/feedback/addFeedback' ,'HomeController@newFeedback');
Route::post('/feedback/store' ,'HomeController@storeFeedback');
Route::get('/feedback/delete/{id}' ,'HomeController@deleteFeedback');

//Social media
Route::get('/social_media/socialmedia' , 'HomeController@EditSocial_media');
Route::post('/social_media/updatesocialmedia/{id}' ,'HomeController@updateSocial_media');


//manufacturing page
Route::get('/manufacturing/manufacturing' , 'AboutusController@manufacturing');
Route::get('/manufacturing/editManu/{id}' ,'AboutusController@editManu');
Route::post('/manufacturing/masterUpdate/{id}' ,'AboutusController@updateManu');

//technology page
Route::get('/technology/technology' , 'AboutusController@technology');
Route::get('/technology/editTechnology/{id}' ,'AboutusController@editTech');
Route::post('/technology/masterUpdate/{id}' ,'AboutusController@updateTech');

//vision mision page
Route::get('/vision_mision/vision' , 'AboutusController@vision');
Route::get('/vision_mision/editVision/{id}' ,'AboutusController@editVision');
Route::post('/vision_mision/masterUpdate/{id}' ,'AboutusController@updateVision');

//quality_policy page
Route::get('/quality_policy/quality' , 'AboutusController@quality');
Route::get('/quality_policy/editQuality/{id}' ,'AboutusController@editQuality');
Route::post('/quality_policy/masterUpdate/{id}' ,'AboutusController@updateQuality');


//category page
Route::get('/category/category' , 'AboutusController@category');
Route::get('/category/editCategory/{id}' ,'AboutusController@editCategory');
Route::post('/category/masterUpdate/{id}' ,'AboutusController@updateCategory');
Route::get('/category/addNewCategory' ,'AboutusController@newcategory');
Route::post('/category/store' ,'AboutusController@storeCategory');
Route::get('/category/delete/{id}' ,'AboutusController@deleteCategory');


//product
Route::get('/product/product' , 'ProductController@product');
Route::get('/product/viewproduct/{id}' ,'ProductController@viewproduct');
Route::get('/product/editProduct/{id}' ,'ProductController@editProduct');
Route::post('/product/masterUpdate/{id}' ,'ProductController@updateProduct');
Route::get('/product/newProduct' , 'ProductController@newProduct');
Route::post('/product/store' , 'ProductController@storeProduct');
Route::get('/product/delete/{id}' , 'ProductController@deleteProduct');


//catalogue Page
Route::get('/catalogue/catalogue' , 'CatalogueController@catalogue');
Route::get('/catalogue/editCatalogue/{id}' , 'CatalogueController@editCatalogue');
Route::post('/catalogue/masterUpdate/{id}' , 'CatalogueController@updateCatalogue');
Route::get('/catalogue/addNewCatalogue' ,[CatalogueController::class,'newCatalogue']);
Route::post('/catalogue/store' ,[CatalogueController::class,'storeCatalogue']);
Route::get('/catalogue/delete/{id}' ,'CatalogueController@deleteCatalogue');


//contactus 
Route::get('/contactus/contactus' , 'ContactusController@EditContactus');
Route::post('/contactus/updatecontactus/{id}' ,'ContactusController@updateContactus');

//profile page
Route::get('/profile/profile' , 'AboutusController@profile');
Route::get('/profile/editProfile/{id}' ,'AboutusController@editProfile');
Route::post('/profile/masterUpdate/{id}' ,'AboutusController@updateProfile');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SslCommerzPaymentController;


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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//website
Route::get('/', [App\Http\Controllers\Website\WebsiteController::class, 'index'])->name('');


//admin
Route::prefix('/admin')->middleware(['auth','isAdmin'])->group(function(){
Route::get('/', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('');




//product

Route::get('/product', [App\Http\Controllers\Admin\ProductController::class, 'index'])->name('');
Route::get('/product/delete/{id}', [App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('');
Route::get('/product/approve/{id}', [App\Http\Controllers\Admin\ProductController::class, 'approve'])->name('');
Route::get('/product/disapproved/{id}', [App\Http\Controllers\Admin\ProductController::class, 'disapproved'])->name('');
Route::get('/product/add/', [App\Http\Controllers\Admin\ProductController::class, 'create'])->name('');
Route::post('/product/submit', [App\Http\Controllers\Admin\ProductController::class, 'store'])->name('');



//category
Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('');
Route::get('/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('');
Route::post('/category-submit', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('');
Route::get('/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('');





//project
Route::get('/project', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('');
Route::get('/addproject', [App\Http\Controllers\Admin\ProjectController::class, 'create'])->name('');
Route::post('/addproject-sub', [App\Http\Controllers\Admin\ProjectController::class, 'store'])->name('');
Route::get('/project-edit/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'edit'])->name('');
Route::post('/project-update', [App\Http\Controllers\Admin\ProjectController::class, 'update'])->name('');
Route::get('/project-del/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'destroy'])->name('');


//vegitable cultivation
Route::get('/vegcul', [App\Http\Controllers\Admin\VegculController::class, 'index'])->name('');
Route::get('/addvegcul', [App\Http\Controllers\Admin\VegculController::class, 'create'])->name('');
Route::post('/addvegcul-sub', [App\Http\Controllers\Admin\VegculController::class, 'store'])->name('');
Route::get('/vegcul-edit/{id}', [App\Http\Controllers\Admin\VegculController::class, 'edit'])->name('');
Route::post('/vegcul-update', [App\Http\Controllers\Admin\VegculController::class, 'update'])->name('');
Route::get('/vegcul-del/{id}', [App\Http\Controllers\Admin\VegculController::class, 'destroy'])->name('');

//agricultural informationn
Route::get('/agriinfo', [App\Http\Controllers\Admin\AgrinfController::class, 'index'])->name('');
Route::get('/addagriinfo', [App\Http\Controllers\Admin\AgrinfController::class, 'create'])->name('');
Route::post('/addagriinfo-sub', [App\Http\Controllers\Admin\AgrinfController::class, 'store'])->name('');
Route::get('/agriinfo-edit/{id}', [App\Http\Controllers\Admin\AgrinfController::class, 'edit'])->name('');
Route::post('/agriinfo-update', [App\Http\Controllers\Admin\AgrinfController::class, 'update'])->name('');
Route::get('/agriinfo-del/{id}', [App\Http\Controllers\Admin\AgrinfController::class, 'destroy'])->name('');




//order

//order
Route::get('/order', [App\Http\Controllers\Admin\OrderController::class, 'index'])->name('');
Route::get('/order/view/{id}', [App\Http\Controllers\Admin\OrderController::class, 'show'])->name('');
Route::get('/order/edit/{id}', [App\Http\Controllers\Admin\OrderController::class, 'edit'])->name('');
Route::post('/order/update', [App\Http\Controllers\Admin\OrderController::class, 'update'])->name('');
Route::get('/order/delete/{id}', [App\Http\Controllers\Admin\OrderController::class, 'destroy'])->name('');






//product order
Route::get('/product-order', [App\Http\Controllers\Admin\ProductOrderController::class, 'index'])->name('');
Route::get('/product-order/view/{id}', [App\Http\Controllers\Admin\ProductOrderController::class, 'show'])->name('');
Route::get('/product-order/edit/{id}', [App\Http\Controllers\Admin\ProductOrderController::class, 'edit'])->name('');
Route::post('product-order/update', [App\Http\Controllers\Admin\ProductOrderController::class, 'update'])->name('');
Route::get('/product-order/delete/{id}', [App\Http\Controllers\Admin\ProductOrderController::class, 'destroy'])->name('');








//apply

Route::get('/apply', [App\Http\Controllers\ApplyController::class, 'index'])->name('');
Route::get('/apply/edit/{id}', [App\Http\Controllers\ApplyController::class, 'edit'])->name('');
Route::get('/apply/view/{id}', [App\Http\Controllers\ApplyController::class, 'show'])->name('');
Route::get('/apply/delete/{id}', [App\Http\Controllers\ApplyController::class, 'destroy'])->name('');

Route::get('/applyvet', [App\Http\Controllers\ApplyVetController::class, 'index'])->name('');

Route::get('/applyvet/edit/{id}', [App\Http\Controllers\ApplyVetController::class, 'edit'])->name('');
Route::get('/applyvet/view/{id}', [App\Http\Controllers\ApplyVetController::class, 'show'])->name('');
Route::get('/applyvet/delete/{id}', [App\Http\Controllers\ApplyVetController::class, 'destroy'])->name('');
Route::get('/applyvet/approve/{id}', [App\Http\Controllers\ApplyVetController::class, 'approve'])->name('');
Route::get('/applyvet/disapproved/{id}', [App\Http\Controllers\ApplyVetController::class, 'disapproved'])->name('');


Route::get('/applyseller', [App\Http\Controllers\SellingController::class, 'index'])->name('');
Route::get('/applyseller/view/{id}', [App\Http\Controllers\SellingController::class, 'show'])->name('');
Route::get('/applyseller/approve/{id}', [App\Http\Controllers\SellingController::class, 'approve'])->name('');
Route::get('/applyseller/delete/{id}', [App\Http\Controllers\SellingController::class, 'destroy'])->name('');
Route::get('/applyseller/disapproved/{id}', [App\Http\Controllers\SellingController::class, 'disapproved'])->name('');




Route::get('/farmerproblem', [App\Http\Controllers\FarmerProblemController::class, 'index'])->name('');
Route::get('/farmerproblem/edit/{id}', [App\Http\Controllers\FarmerProblemController::class, 'edit'])->name('');
Route::get('/farmerproblem/view/{id}', [App\Http\Controllers\FarmerProblemController::class, 'show'])->name('');
Route::get('/farmerproblem/delete/{id}', [App\Http\Controllers\FarmerProblemController::class, 'destroy'])->name('');
Route::get('/farmerproblem/solve/{id}', [App\Http\Controllers\FarmerProblemController::class, 'solve'])->name('');
Route::get('/farmerproblem/notsolve/{id}', [App\Http\Controllers\FarmerProblemController::class, 'notsolve'])->name('');

});

Route::get('/check-my-vet-app', [App\Http\Controllers\ApplyVetController::class, 'index2'])->name('');
Route::get('/check-my-seller-app', [App\Http\Controllers\Website\WebsiteController::class, 'seller_status'])->name('');
//website
Route::get('/vegetable', [App\Http\Controllers\Website\WebsiteController::class, 'vegcul'])->name('');
Route::get('/grain-cultivation', [App\Http\Controllers\Website\WebsiteController::class, 'graincul'])->name('');
Route::get('/single-project/{id}', [App\Http\Controllers\Website\WebsiteController::class, 'single_proj'])->name('');
Route::get('/projects', [App\Http\Controllers\Website\WebsiteController::class, 'project_all'])->name('');



Route::get('/cart', [App\Http\Controllers\Website\CartController::class, 'index'])->name('');
Route::get('/cart/add/{project}', [App\Http\Controllers\Website\CartController::class, 'addtocart'])->name('');
Route::get('/cart/add2/{product}', [App\Http\Controllers\Website\CartController::class, 'addtocart2'])->name('');
Route::get('/cart/remove/{product}', [App\Http\Controllers\Website\CartController::class, 'itemremove'])->name('');





//product
Route::get('/products', [App\Http\Controllers\Admin\ProductController::class, 'product_page'])->name('');
Route::get('/single-product/{id}', [App\Http\Controllers\Admin\ProductController::class, 'single_product_page'])->name('');



//others page

Route::get('/khoi-corn', [App\Http\Controllers\Website\ExtrapageController::class, 'khoi_corn'])->name('');
Route::get('/corn-all', [App\Http\Controllers\Website\ExtrapageController::class, 'corn_all'])->name('');
Route::get('/bornali', [App\Http\Controllers\Website\ExtrapageController::class, 'bornali'])->name('');
Route::get('/mohor', [App\Http\Controllers\Website\ExtrapageController::class, 'mohor'])->name('');
Route::get('/shuvra', [App\Http\Controllers\Website\ExtrapageController::class, 'shuvra'])->name('');
Route::get('/barimistivutta1', [App\Http\Controllers\Website\ExtrapageController::class, 'barimistivutta1'])->name('');

Route::get('/barivutta1', [App\Http\Controllers\Website\ExtrapageController::class, 'barivutta1'])->name('');
Route::get('/barivutta4', [App\Http\Controllers\Website\ExtrapageController::class, 'barivutta4'])->name('');
Route::get('/barivutta5', [App\Http\Controllers\Website\ExtrapageController::class, 'barivutta5'])->name('');
Route::get('/barivuttanonhybrid5', [App\Http\Controllers\Website\ExtrapageController::class, 'barivuttanonhybrid5'])->name('');
Route::get('/barivutta6', [App\Http\Controllers\Website\ExtrapageController::class, 'barivutta6'])->name('');
Route::get('/barivuttanonhybrid6', [App\Http\Controllers\Website\ExtrapageController::class, 'barivuttanonhybrid6'])->name('');
Route::get('/barivutta7', [App\Http\Controllers\Website\ExtrapageController::class, 'barivutta7'])->name('');
Route::get('/barivuttanonhybrid7', [App\Http\Controllers\Website\ExtrapageController::class, 'barivuttanonhybrid7'])->name('');
Route::get('/barivutta8', [App\Http\Controllers\Website\ExtrapageController::class, 'barivutta8'])->name('');
Route::get('/barivutta9', [App\Http\Controllers\Website\ExtrapageController::class, 'barivutta9'])->name('');
Route::get('/barivutta10', [App\Http\Controllers\Website\ExtrapageController::class, 'barivutta10'])->name('');
Route::get('/barivutta11', [App\Http\Controllers\Website\ExtrapageController::class, 'barivutta11'])->name('');
Route::get('/barivutta12', [App\Http\Controllers\Website\ExtrapageController::class, 'barivutta12'])->name('');
Route::get('/barivutta13', [App\Http\Controllers\Website\ExtrapageController::class, 'barivutta13'])->name('');
Route::get('/barivutta14', [App\Http\Controllers\Website\ExtrapageController::class, 'barivutta14'])->name('');
Route::get('/barivutta15', [App\Http\Controllers\Website\ExtrapageController::class, 'barivutta15'])->name('');
Route::get('/barivutta16', [App\Http\Controllers\Website\ExtrapageController::class, 'barivutta16'])->name('');
Route::get('/barivutta17', [App\Http\Controllers\Website\ExtrapageController::class, 'barivutta17'])->name('');


Route::get('/our-vets', [App\Http\Controllers\ApplyVetController::class, 'index3'])->name('');




Route::get('/baby-corn', [App\Http\Controllers\Website\ExtrapageController::class, 'baby_corn'])->name('');
Route::get('/bari-baby-corn', [App\Http\Controllers\Website\ExtrapageController::class, 'bari_baby_corn'])->name('');
Route::get('/wheat', [App\Http\Controllers\Website\ExtrapageController::class, 'wheat'])->name('');
Route::get('/barigom25', [App\Http\Controllers\Website\ExtrapageController::class, 'barigom25'])->name('');
Route::get('/barigom26', [App\Http\Controllers\Website\ExtrapageController::class, 'barigom26'])->name('');
Route::get('/barigom27', [App\Http\Controllers\Website\ExtrapageController::class, 'barigom27'])->name('');
Route::get('/barigom28', [App\Http\Controllers\Website\ExtrapageController::class, 'barigom28'])->name('');
Route::get('/barigom29', [App\Http\Controllers\Website\ExtrapageController::class, 'barigom29'])->name('');
Route::get('/barigom30', [App\Http\Controllers\Website\ExtrapageController::class, 'barigom30'])->name('');
Route::get('/barigom31', [App\Http\Controllers\Website\ExtrapageController::class, 'barigom31'])->name('');
Route::get('/barigom32', [App\Http\Controllers\Website\ExtrapageController::class, 'barigom32'])->name('');
Route::get('/barigom33', [App\Http\Controllers\Website\ExtrapageController::class, 'barigom33'])->name('');





Route::get('/barli', [App\Http\Controllers\Website\ExtrapageController::class, 'barli'])->name('');
Route::get('/barli1', [App\Http\Controllers\Website\ExtrapageController::class, 'barli1'])->name('');
Route::get('/barli2', [App\Http\Controllers\Website\ExtrapageController::class, 'barli2'])->name('');
Route::get('/barli3', [App\Http\Controllers\Website\ExtrapageController::class, 'barli3'])->name('');
Route::get('/barli4', [App\Http\Controllers\Website\ExtrapageController::class, 'barli4'])->name('');
Route::get('/barli5', [App\Http\Controllers\Website\ExtrapageController::class, 'barli5'])->name('');
Route::get('/barli6', [App\Http\Controllers\Website\ExtrapageController::class, 'barli6'])->name('');
Route::get('/barli7', [App\Http\Controllers\Website\ExtrapageController::class, 'barli7'])->name('');
Route::get('/barli8', [App\Http\Controllers\Website\ExtrapageController::class, 'barli8'])->name('');
Route::get('/barli9', [App\Http\Controllers\Website\ExtrapageController::class, 'barli9'])->name('');



Route::get('/coun', [App\Http\Controllers\Website\ExtrapageController::class, 'baricoun'])->name('');
Route::get('/baricoun1', [App\Http\Controllers\Website\ExtrapageController::class, 'baricoun1'])->name('');
Route::get('/baricoun2', [App\Http\Controllers\Website\ExtrapageController::class, 'baricoun2'])->name('');
Route::get('/baricoun3', [App\Http\Controllers\Website\ExtrapageController::class, 'baricoun3'])->name('');









Route::get('/china', [App\Http\Controllers\Website\ExtrapageController::class, 'china'])->name('');
Route::get('/china1', [App\Http\Controllers\Website\ExtrapageController::class, 'china1'])->name('');





Route::get('/vegitable-cultivation', [App\Http\Controllers\Website\ExtrapageController::class, 'vegitable_cultivation'])->name('');




Route::get('/oil-cultivation', [App\Http\Controllers\PagesController::class, 'oil'])->name('');
//Route::get('/websitelayout', [App\Http\Controllers\PagesController::class, 'onlylayout'])->name('');


//kona 


Route::get('/btbegun', [App\Http\Controllers\KonaController::class, 'bt_begun'])->name('');
Route::get('/btbegun1', [App\Http\Controllers\KonaController::class, 'btbegun1'])->name('');
Route::get('/btbegun2', [App\Http\Controllers\KonaController::class, 'btbegun2'])->name('');



//kona wrapper

//vegetablcultivations

Route::get('/bt_begun', [App\Http\Controllers\KonaController::class, 'bt_begun'])->name('');
Route::get('/bt_begun1', [App\Http\Controllers\KonaController::class, 'bt_begun1'])->name('');
Route::get('/bt_begun2', [App\Http\Controllers\KonaController::class, 'bt_begun2'])->name('');
Route::get('/bt_begun3', [App\Http\Controllers\KonaController::class, 'bt_begun3'])->name('');
Route::get('/bt_begun4', [App\Http\Controllers\KonaController::class, 'bt_begun4'])->name('');

//begun
Route::get('/begun', [App\Http\Controllers\KonaController::class, 'begun'])->name('');
Route::get('/begun1', [App\Http\Controllers\KonaController::class, 'begun1'])->name('');
Route::get('/begun2', [App\Http\Controllers\KonaController::class, 'begun2'])->name('');
Route::get('/begun3', [App\Http\Controllers\KonaController::class, 'begun3'])->name('');
Route::get('/begun4', [App\Http\Controllers\KonaController::class, 'begun4'])->name('');
Route::get('/begun5', [App\Http\Controllers\KonaController::class, 'begun5'])->name('');
Route::get('/begun6', [App\Http\Controllers\KonaController::class, 'begun6'])->name('');
Route::get('/begun7', [App\Http\Controllers\KonaController::class, 'begun7'])->name('');
Route::get('/begun8', [App\Http\Controllers\KonaController::class, 'begun8'])->name('');
Route::get('/begun9', [App\Http\Controllers\KonaController::class, 'begun9'])->name('');

//tomato
Route::get('/tomato', [App\Http\Controllers\KonaController::class, 'tomato'])->name('');
Route::get('/tomato2', [App\Http\Controllers\KonaController::class, 'tomato2'])->name('');
Route::get('/tomato3', [App\Http\Controllers\KonaController::class, 'tomato3'])->name('');
Route::get('/tomato4', [App\Http\Controllers\KonaController::class, 'tomato4'])->name('');
Route::get('/tomato8', [App\Http\Controllers\KonaController::class, 'tomato8'])->name('');
Route::get('/tomato9', [App\Http\Controllers\KonaController::class, 'tomato9'])->name('');
Route::get('/tomato10', [App\Http\Controllers\KonaController::class, 'tomato10'])->name('');

//fulcopi
Route::get('/fulcopi', [App\Http\Controllers\KonaController::class, 'fulcopi'])->name('');
Route::get('/fulcopi1', [App\Http\Controllers\KonaController::class, 'fulcopi1'])->name('');
Route::get('/fulcopi2', [App\Http\Controllers\KonaController::class, 'fulcopi2'])->name('');
Route::get('/fulcopi3', [App\Http\Controllers\KonaController::class, 'fulcopi3'])->name('');


//mula
Route::get('/mula', [App\Http\Controllers\KonaController::class, 'mula'])->name('');
Route::get('/mula1', [App\Http\Controllers\KonaController::class, 'mula1'])->name('');
Route::get('/mula2', [App\Http\Controllers\KonaController::class, 'mula2'])->name('');
Route::get('/mula3', [App\Http\Controllers\KonaController::class, 'mula3'])->name('');

//korola
Route::get('/korola', [App\Http\Controllers\KonaController::class, 'korola'])->name('');
Route::get('/korola1', [App\Http\Controllers\KonaController::class, 'korola1'])->name('');
Route::get('/korola2', [App\Http\Controllers\KonaController::class, 'korola2'])->name('');
Route::get('/korola3', [App\Http\Controllers\KonaController::class, 'korola3'])->name('');

//Lau
Route::get('/lau', [App\Http\Controllers\KonaController::class, 'lau'])->name('');
Route::get('/lau3', [App\Http\Controllers\KonaController::class, 'lau3'])->name('');
Route::get('/lau4', [App\Http\Controllers\KonaController::class, 'lau4'])->name('');
Route::get('/lau5', [App\Http\Controllers\KonaController::class, 'lau5'])->name('');

//mistikumra
Route::get('/mistikumra', [App\Http\Controllers\KonaController::class, 'mistikumra'])->name('');
Route::get('/mistikumra1', [App\Http\Controllers\KonaController::class, 'mistikumra1'])->name('');
Route::get('/mistikumra2', [App\Http\Controllers\KonaController::class, 'mistikumra2'])->name('');
Route::get('/mistikumra3', [App\Http\Controllers\KonaController::class, 'mistikumra3'])->name('');

//sim
Route::get('/sim', [App\Http\Controllers\KonaController::class, 'sim'])->name('');
Route::get('/sim1', [App\Http\Controllers\KonaController::class, 'sim1'])->name('');
Route::get('/sim2', [App\Http\Controllers\KonaController::class, 'sim2'])->name('');
Route::get('/sim3', [App\Http\Controllers\KonaController::class, 'sim3'])->name('');
Route::get('/sim4', [App\Http\Controllers\KonaController::class, 'sim4'])->name('');
Route::get('/sim5', [App\Http\Controllers\KonaController::class, 'sim5'])->name('');

//peacod
Route::get('/peacod', [App\Http\Controllers\KonaController::class, 'peacod'])->name('');
Route::get('/peacod1', [App\Http\Controllers\KonaController::class, 'peacod1'])->name('');
Route::get('/peacod2', [App\Http\Controllers\KonaController::class, 'peacod2'])->name('');
Route::get('/peacod3', [App\Http\Controllers\KonaController::class, 'peacod3'])->name('');

//bushbeans
Route::get('/bushbeans', [App\Http\Controllers\KonaController::class, 'bushbeans'])->name('');
Route::get('/bushbeans1', [App\Http\Controllers\KonaController::class, 'bushbeans1'])->name('');
Route::get('/bushbeans2', [App\Http\Controllers\KonaController::class, 'bushbeans2'])->name('');
Route::get('/bushbeans3', [App\Http\Controllers\KonaController::class, 'bushbeans3'])->name('');

//red-amaranth
Route::get('/redamaranth', [App\Http\Controllers\KonaController::class, 'redamaranth'])->name('');
Route::get('/redamaranth1', [App\Http\Controllers\KonaController::class, 'redamaranth1'])->name('');

//wateramarnath
Route::get('/wateramarnath', [App\Http\Controllers\KonaController::class, 'wateramarnath'])->name('');
Route::get('/wateramarnath1', [App\Http\Controllers\KonaController::class, 'wateramarnath1'])->name('');

//lettuce
Route::get('/lettuce', [App\Http\Controllers\KonaController::class, 'lettuce'])->name('');
Route::get('/lettuce1', [App\Http\Controllers\KonaController::class, 'lettuce1'])->name('');

//luffa
Route::get('/luffa', [App\Http\Controllers\KonaController::class, 'luffa'])->name('');
Route::get('/luffa1', [App\Http\Controllers\KonaController::class, 'luffa1'])->name('');
Route::get('/luffa2', [App\Http\Controllers\KonaController::class, 'luffa2'])->name('');

//malabrspinach
Route::get('/malabrspinach', [App\Http\Controllers\KonaController::class, 'malabrspinach'])->name('');
Route::get('/malabrspinach1', [App\Http\Controllers\KonaController::class, 'malabrspinach1'])->name('');
Route::get('/malabrspinach2', [App\Http\Controllers\KonaController::class, 'malabrspinach2'])->name('');

//broccoli
Route::get('/broccoli', [App\Http\Controllers\KonaController::class, 'broccoli'])->name('');
Route::get('/broccoli1', [App\Http\Controllers\KonaController::class, 'broccoli1'])->name('');

//spinach
Route::get('/spinach', [App\Http\Controllers\KonaController::class, 'spinach'])->name('');
Route::get('/spinach1', [App\Http\Controllers\KonaController::class, 'spinach1'])->name('');

//hybrideggplant
Route::get('/hybrideggplant', [App\Http\Controllers\KonaController::class, 'hybrideggplant'])->name('');
Route::get('/hybrideggplant1', [App\Http\Controllers\KonaController::class, 'hybrideggplant1'])->name('');

//longbeans
Route::get('/longbeans', [App\Http\Controllers\KonaController::class, 'longbeans'])->name('');
Route::get('/longbeans1', [App\Http\Controllers\KonaController::class, 'longbeans1'])->name('');

//potol
Route::get('/potol', [App\Http\Controllers\KonaController::class, 'potol'])->name('');
Route::get('/potol1', [App\Http\Controllers\KonaController::class, 'potol1'])->name('');

//sajina
Route::get('/sajina', [App\Http\Controllers\KonaController::class, 'sajina'])->name('');
Route::get('/sajina1', [App\Http\Controllers\KonaController::class, 'sajina1'])->name('');

//spongegruond
Route::get('/spongegruond', [App\Http\Controllers\KonaController::class, 'spongegruond'])->name('');
Route::get('/spongegruond1', [App\Http\Controllers\KonaController::class, 'spongegruond1'])->name('');
Route::get('/spongegruond2', [App\Http\Controllers\KonaController::class, 'spongegruond2'])->name('');
Route::get('/spongegruond3', [App\Http\Controllers\KonaController::class, 'spongegruond3'])->name('');

//oilcultivations

//peantuts
Route::get('/peantuts', [App\Http\Controllers\KonaController::class, 'peantuts'])->name('');
Route::get('/peantuts1', [App\Http\Controllers\KonaController::class, 'peantuts1'])->name('');
Route::get('/peantuts2', [App\Http\Controllers\KonaController::class, 'peantuts2'])->name('');
Route::get('/peantuts3', [App\Http\Controllers\KonaController::class, 'peantuts3'])->name('');
Route::get('/peantuts4', [App\Http\Controllers\KonaController::class, 'peantuts4'])->name('');
Route::get('/peantuts5', [App\Http\Controllers\KonaController::class, 'peantuts5'])->name('');
Route::get('/peantuts6', [App\Http\Controllers\KonaController::class, 'peantuts6'])->name('');
Route::get('/peantuts7', [App\Http\Controllers\KonaController::class, 'peantuts7'])->name('');
Route::get('/peantuts8', [App\Http\Controllers\KonaController::class, 'peantuts8'])->name('');
Route::get('/peantuts9', [App\Http\Controllers\KonaController::class, 'peantuts9'])->name('');
Route::get('/peantuts10', [App\Http\Controllers\KonaController::class, 'peantuts10'])->name('');
Route::get('/peantuts11', [App\Http\Controllers\KonaController::class, 'peantuts11'])->name('');
Route::get('/peantuts12', [App\Http\Controllers\KonaController::class, 'peantuts12'])->name('');
Route::get('/peantuts13', [App\Http\Controllers\KonaController::class, 'peantuts13'])->name('');
Route::get('/peantuts14', [App\Http\Controllers\KonaController::class, 'peantuts14'])->name('');

//mustard
Route::get('/mustard', [App\Http\Controllers\KonaController::class, 'mustard'])->name('');
Route::get('/mustard1', [App\Http\Controllers\KonaController::class, 'mustard1'])->name('');
Route::get('/mustard2', [App\Http\Controllers\KonaController::class, 'mustard2'])->name('');
Route::get('/mustard3', [App\Http\Controllers\KonaController::class, 'mustard3'])->name('');
Route::get('/mustard4', [App\Http\Controllers\KonaController::class, 'mustard4'])->name('');
Route::get('/mustard5', [App\Http\Controllers\KonaController::class, 'mustard5'])->name('');
Route::get('/mustard6', [App\Http\Controllers\KonaController::class, 'mustard6'])->name('');
Route::get('/mustard7', [App\Http\Controllers\KonaController::class, 'mustard7'])->name('');
Route::get('/mustard8', [App\Http\Controllers\KonaController::class, 'mustard8'])->name('');
Route::get('/mustard9', [App\Http\Controllers\KonaController::class, 'mustard9'])->name('');

//soybean
Route::get('/soybean', [App\Http\Controllers\KonaController::class, 'soybean'])->name('');
Route::get('/soybean1', [App\Http\Controllers\KonaController::class, 'soybean1'])->name('');
Route::get('/soybean2', [App\Http\Controllers\KonaController::class, 'soybean2'])->name('');
Route::get('/soybean3', [App\Http\Controllers\KonaController::class, 'soybean3'])->name('');

//sunflower
Route::get('/sunflower', [App\Http\Controllers\KonaController::class, 'sunflower'])->name('');
Route::get('/sunflower1', [App\Http\Controllers\KonaController::class, 'sunflower1'])->name('');
Route::get('/sunflower2', [App\Http\Controllers\KonaController::class, 'sunflower2'])->name('');

//sesamseeds
Route::get('/sesamseeds', [App\Http\Controllers\KonaController::class, 'sesamseeds'])->name('');
Route::get('/sesamseeds1', [App\Http\Controllers\KonaController::class, 'sesamseeds1'])->name('');
Route::get('/sesamseeds2', [App\Http\Controllers\KonaController::class, 'sesamseeds2'])->name('');
Route::get('/sesamseeds3', [App\Http\Controllers\KonaController::class, 'sesamseeds3'])->name('');
Route::get('/sesamseeds4', [App\Http\Controllers\KonaController::class, 'sesamseeds4'])->name('');
Route::get('/sesamseeds5', [App\Http\Controllers\KonaController::class, 'sesamseeds5'])->name('');
Route::get('/sesamseeds6', [App\Http\Controllers\KonaController::class, 'sesamseeds6'])->name('');


//Flowers cltivation

//africandaisy
Route::get('/africandaisy', [App\Http\Controllers\KonaController::class, 'africandaisy'])->name('');
Route::get('/africandaisy1', [App\Http\Controllers\KonaController::class, 'africandaisy1'])->name('');
Route::get('/africandaisy2', [App\Http\Controllers\KonaController::class, 'africandaisy2'])->name('');

//alpinia
Route::get('/alpinia', [App\Http\Controllers\KonaController::class, 'alpinia'])->name('');
Route::get('/alpinia1', [App\Http\Controllers\KonaController::class, 'alpinia1'])->name('');

//bougainvillea
Route::get('/bougainvillea', [App\Http\Controllers\KonaController::class, 'bougainvillea'])->name('');
Route::get('/bougainvillea1', [App\Http\Controllers\KonaController::class, 'bougainvillea1'])->name('');

//cactuspaniculata
Route::get('/cactuspaniculata', [App\Http\Controllers\KonaController::class, 'cactuspaniculata'])->name('');
Route::get('/cactuspaniculata1', [App\Http\Controllers\KonaController::class, 'cactuspaniculata1'])->name('');

//chrysanthemumcrassum
Route::get('/chrysanthemumcrassum', [App\Http\Controllers\KonaController::class, 'chrysanthemumcrassum'])->name('');
Route::get('/chrysanthemumcrassum1', [App\Http\Controllers\KonaController::class, 'chrysanthemumcrassum1'])->name('');
Route::get('/chrysanthemumcrassum2', [App\Http\Controllers\KonaController::class, 'chrysanthemumcrassum2'])->name('');
Route::get('/chrysanthemumcrassum3', [App\Http\Controllers\KonaController::class, 'chrysanthemumcrassum3'])->name('');
Route::get('/chrysanthemumcrassum4', [App\Http\Controllers\KonaController::class, 'chrysanthemumcrassum4'])->name('');

//dahlia
Route::get('/dahlia', [App\Http\Controllers\KonaController::class, 'dahlia'])->name('');
Route::get('/dahlia1', [App\Http\Controllers\KonaController::class, 'dahlia1'])->name('');

//flamingoflower
Route::get('/flamingoflower', [App\Http\Controllers\KonaController::class, 'flamingoflower'])->name('');
Route::get('/flamingoflower1', [App\Http\Controllers\KonaController::class, 'flamingoflower1'])->name('');

//gladiolus
Route::get('/gladiolus', [App\Http\Controllers\KonaController::class, 'gladiolus'])->name('');
Route::get('/gladiolus1', [App\Http\Controllers\KonaController::class, 'gladiolus1'])->name('');
Route::get('/gladiolus2', [App\Http\Controllers\KonaController::class, 'gladiolus2'])->name('');
Route::get('/gladiolus3', [App\Http\Controllers\KonaController::class, 'gladiolus3'])->name('');
Route::get('/gladiolus4', [App\Http\Controllers\KonaController::class, 'gladiolus4'])->name('');
Route::get('/gladiolus5', [App\Http\Controllers\KonaController::class, 'gladiolus5'])->name('');
Route::get('/gladiolus6', [App\Http\Controllers\KonaController::class, 'gladiolus6'])->name('');

//gypsophilapaniculata
Route::get('/gypsophilapaniculata', [App\Http\Controllers\KonaController::class, 'gypsophilapaniculata'])->name('');
Route::get('/gypsophilapaniculata1', [App\Http\Controllers\KonaController::class, 'gypsophilapaniculata1'])->name('');

//lily
Route::get('/lily', [App\Http\Controllers\KonaController::class, 'lily'])->name('');
Route::get('/lily1', [App\Http\Controllers\KonaController::class, 'lily1'])->name('');

//marigolds
Route::get('/marigolds', [App\Http\Controllers\KonaController::class, 'marigolds'])->name('');
Route::get('/marigolds1', [App\Http\Controllers\KonaController::class, 'marigolds1'])->name('');

//archid
Route::get('/archid', [App\Http\Controllers\KonaController::class, 'archid'])->name('');
Route::get('/archid1', [App\Http\Controllers\KonaController::class, 'archid1'])->name('');

//tuberose
Route::get('/tuberose', [App\Http\Controllers\KonaController::class, 'tuberose'])->name('');
Route::get('/tuberose1', [App\Http\Controllers\KonaController::class, 'tuberose1'])->name('');



//Fruits
//amra
Route::get('/amra', [App\Http\Controllers\KonaController::class, 'amra'])->name('');
Route::get('/amra1', [App\Http\Controllers\KonaController::class, 'amra1'])->name('');
Route::get('/amra2', [App\Http\Controllers\KonaController::class, 'amra2'])->name('');

//banana
Route::get('/banana', [App\Http\Controllers\KonaController::class, 'banana'])->name('');
Route::get('/banana1', [App\Http\Controllers\KonaController::class, 'banana1'])->name('');
Route::get('/banana2', [App\Http\Controllers\KonaController::class, 'banana2'])->name('');
Route::get('/banana3', [App\Http\Controllers\KonaController::class, 'banana3'])->name('');
Route::get('/banana4', [App\Http\Controllers\KonaController::class, 'banana4'])->name('');
Route::get('/banana5', [App\Http\Controllers\KonaController::class, 'banana5'])->name('');

//burmesegrape
Route::get('/burmesegrape', [App\Http\Controllers\KonaController::class, 'burmesegrape'])->name('');
Route::get('/burmesegrape1', [App\Http\Controllers\KonaController::class, 'burmesegrape1'])->name('');

//carambola
Route::get('/carambola', [App\Http\Controllers\KonaController::class, 'carambola'])->name('');
Route::get('/carambola1', [App\Http\Controllers\KonaController::class, 'carambola1'])->name('');
Route::get('/carambola2', [App\Http\Controllers\KonaController::class, 'carambola2'])->name('');

//coconut
Route::get('/coconut', [App\Http\Controllers\KonaController::class, 'coconut'])->name('');
Route::get('/coconut1', [App\Http\Controllers\KonaController::class, 'coconut1'])->name('');
Route::get('/coconut2', [App\Http\Controllers\KonaController::class, 'coconut2'])->name('');

//guava
Route::get('/guava', [App\Http\Controllers\KonaController::class, 'guava'])->name('');
Route::get('/guava1', [App\Http\Controllers\KonaController::class, 'guava1'])->name('');
Route::get('/guava2', [App\Http\Controllers\KonaController::class, 'guava2'])->name('');
Route::get('/guava3', [App\Http\Controllers\KonaController::class, 'guava3'])->name('');
Route::get('/guava4', [App\Http\Controllers\KonaController::class, 'guava4'])->name('');

//indianblackberry
Route::get('/indianblackberry', [App\Http\Controllers\KonaController::class, 'indianblackberry'])->name('');
Route::get('/indianblackberry1', [App\Http\Controllers\KonaController::class, 'indianblackberry1'])->name('');
Route::get('/indianblackberry2', [App\Http\Controllers\KonaController::class, 'indianblackberry2'])->name('');

//jackfruit
Route::get('/jackfruit', [App\Http\Controllers\KonaController::class, 'jackfruit'])->name('');
Route::get('/jackfruit1', [App\Http\Controllers\KonaController::class, 'jackfruit1'])->name('');
Route::get('/jackfruit2', [App\Http\Controllers\KonaController::class, 'jackfruit2'])->name('');
Route::get('/jackfruit3', [App\Http\Controllers\KonaController::class, 'jackfruit3'])->name('');
Route::get('/jackfruit4', [App\Http\Controllers\KonaController::class, 'jackfruit4'])->name('');

//lemon
Route::get('/lemon', [App\Http\Controllers\KonaController::class, 'lemon'])->name('');
Route::get('/lemon1', [App\Http\Controllers\KonaController::class, 'lemon1'])->name('');
Route::get('/lemon2', [App\Http\Controllers\KonaController::class, 'lemon2'])->name('');
Route::get('/lemon3', [App\Http\Controllers\KonaController::class, 'lemon3'])->name('');
Route::get('/lemon4', [App\Http\Controllers\KonaController::class, 'lemon4'])->name('');

//mango
Route::get('/mango', [App\Http\Controllers\KonaController::class, 'mango'])->name('');
Route::get('/mango1', [App\Http\Controllers\KonaController::class, 'mango1'])->name('');
Route::get('/mango2', [App\Http\Controllers\KonaController::class, 'mango2'])->name('');
Route::get('/mango3', [App\Http\Controllers\KonaController::class, 'mango3'])->name('');
Route::get('/mango4', [App\Http\Controllers\KonaController::class, 'mango4'])->name('');
Route::get('/mango5', [App\Http\Controllers\KonaController::class, 'mango5'])->name('');
Route::get('/mango6', [App\Http\Controllers\KonaController::class, 'mango6'])->name('');
Route::get('/mango7', [App\Http\Controllers\KonaController::class, 'mango7'])->name('');
Route::get('/mango8', [App\Http\Controllers\KonaController::class, 'mango8'])->name('');
Route::get('/mango9', [App\Http\Controllers\KonaController::class, 'mango9'])->name('');
Route::get('/mango10', [App\Http\Controllers\KonaController::class, 'mango10'])->name('');
Route::get('/mango11', [App\Http\Controllers\KonaController::class, 'mango11'])->name('');
Route::get('/mango12', [App\Http\Controllers\KonaController::class, 'mango12'])->name('');
Route::get('/mango13', [App\Http\Controllers\KonaController::class, 'mango13'])->name('');
Route::get('/mango17', [App\Http\Controllers\KonaController::class, 'mango17'])->name('');
Route::get('/mango14', [App\Http\Controllers\KonaController::class, 'mango14'])->name('');
Route::get('/mango15', [App\Http\Controllers\KonaController::class, 'mango15'])->name('');
Route::get('/mango16', [App\Http\Controllers\KonaController::class, 'mango16'])->name('');
Route::get('/mango18', [App\Http\Controllers\KonaController::class, 'mango18'])->name('');



//olive
Route::get('/olive', [App\Http\Controllers\KonaController::class, 'olive'])->name('');
Route::get('/olive1', [App\Http\Controllers\KonaController::class, 'olive1'])->name('');

//orange
Route::get('/orange', [App\Http\Controllers\KonaController::class, 'orange'])->name('');
Route::get('/orange1', [App\Http\Controllers\KonaController::class, 'orange1'])->name('');
Route::get('/orange2', [App\Http\Controllers\KonaController::class, 'orange2'])->name('');

//stoneapple
Route::get('/stoneapple', [App\Http\Controllers\KonaController::class, 'stoneapple'])->name('');
Route::get('/stoneapple1', [App\Http\Controllers\KonaController::class, 'stoneapple1'])->name('');

//custardapple

Route::get('/custardapple', [App\Http\Controllers\KonaController::class, 'custardapple'])->name('');
Route::get('/custardapple1', [App\Http\Controllers\KonaController::class, 'custardapple1'])->name('');

//sweetorange
Route::get('/sweetorange', [App\Http\Controllers\KonaController::class, 'sweetorange'])->name('');
Route::get('/sweetorange1', [App\Http\Controllers\KonaController::class, 'sweetorange1'])->name('');

//termarind
Route::get('/termarind', [App\Http\Controllers\KonaController::class, 'termarind'])->name('');
Route::get('/termarind1', [App\Http\Controllers\KonaController::class, 'termarind1'])->name('');

//watermelon
Route::get('/watermelon', [App\Http\Controllers\KonaController::class, 'watermelon'])->name('');
Route::get('/watermelon1', [App\Http\Controllers\KonaController::class, 'watermelon1'])->name('');

//waxapple
Route::get('/waxapple', [App\Http\Controllers\KonaController::class, 'waxapple'])->name('');
Route::get('/waxapple1', [App\Http\Controllers\KonaController::class, 'waxapple1'])->name('');
Route::get('/waxapple2', [App\Http\Controllers\KonaController::class, 'waxapple2'])->name('');


























//kona wrapper


// // SSLCOMMERZ Start
// Route::get('/checkout', [App\Http\Controllers\SslCommerzPaymentController::class, 'exampleEasyCheckout']);
// Route::get('/example2', [App\Http\Controllers\SslCommerzPaymentController::class, 'exampleHostedCheckout']);

// Route::post('/pay', [App\Http\Controllers\SslCommerzPaymentController::class, 'index']);
// Route::post('/pay-via-ajax', [App\Http\Controllers\SslCommerzPaymentController::class, 'payViaAjax']);

// Route::post('/success', [App\Http\Controllers\SslCommerzPaymentController::class, 'success']);
// Route::post('/fail', [App\Http\Controllers\SslCommerzPaymentController::class, 'fail']);
// Route::post('/cancel', [App\Http\Controllers\SslCommerzPaymentController::class, 'cancel']);

// Route::post('/ipn', [App\Http\Controllers\SslCommerzPaymentController::class, 'ipn']);
// //SSLCOMMERZ END







//flower
Route::get('/flower', [App\Http\Controllers\Website\ExtrapageController::class, 'flower'])->name('');
Route::get('/flower-main', [App\Http\Controllers\Website\ExtrapageController::class, 'flower_main'])->name('');







//spice
Route::get('/spice-main', [App\Http\Controllers\Website\ExtrapageController::class, 'spice_main'])->name('');
Route::get('/spice1', [App\Http\Controllers\Website\ExtrapageController::class, 'spice1'])->name('');
Route::get('/spice2', [App\Http\Controllers\Website\ExtrapageController::class, 'spice2'])->name('');
Route::get('/spice3', [App\Http\Controllers\Website\ExtrapageController::class, 'spice3'])->name('');
Route::get('/spice4', [App\Http\Controllers\Website\ExtrapageController::class, 'spice4'])->name('');
Route::get('/spice5', [App\Http\Controllers\Website\ExtrapageController::class, 'spice5'])->name('');
Route::get('/spice6', [App\Http\Controllers\Website\ExtrapageController::class, 'spice6'])->name('');
Route::get('/spice7', [App\Http\Controllers\Website\ExtrapageController::class, 'spice7'])->name('');
Route::get('/spice8', [App\Http\Controllers\Website\ExtrapageController::class, 'spice8'])->name('');
Route::get('/spice9', [App\Http\Controllers\Website\ExtrapageController::class, 'spice9'])->name('');
Route::get('/spice10', [App\Http\Controllers\Website\ExtrapageController::class, 'spice10'])->name('');
Route::get('/spice11', [App\Http\Controllers\Website\ExtrapageController::class, 'spice11'])->name('');
Route::get('/spice12', [App\Http\Controllers\Website\ExtrapageController::class, 'spice12'])->name('');
Route::get('/spice13', [App\Http\Controllers\Website\ExtrapageController::class, 'spice13'])->name('');
Route::get('/spice14', [App\Http\Controllers\Website\ExtrapageController::class, 'spice14'])->name('');
Route::get('/spice15', [App\Http\Controllers\Website\ExtrapageController::class, 'spice15'])->name('');
Route::get('/spice16', [App\Http\Controllers\Website\ExtrapageController::class, 'spice16'])->name('');
Route::get('/spice17', [App\Http\Controllers\Website\ExtrapageController::class, 'spice17'])->name('');
Route::get('/spice18', [App\Http\Controllers\Website\ExtrapageController::class, 'spice18'])->name('');
Route::get('/spice19', [App\Http\Controllers\Website\ExtrapageController::class, 'spice19'])->name('');
Route::get('/tejpata1', [App\Http\Controllers\Website\ExtrapageController::class, 'tejpata1'])->name('');
Route::get('/baripan1', [App\Http\Controllers\Website\ExtrapageController::class, 'baripan1'])->name('');
Route::get('/baripan1details', [App\Http\Controllers\Website\ExtrapageController::class, 'baripan1details'])->name('');
Route::get('/barikalojira1', [App\Http\Controllers\Website\ExtrapageController::class, 'barikalojira1'])->name('');
Route::get('/barigolmoris1', [App\Http\Controllers\Website\ExtrapageController::class, 'barigolmoris1'])->name('');
Route::get('/baridaruchini1', [App\Http\Controllers\Website\ExtrapageController::class, 'baridaruchini1'])->name('');
Route::get('/baridhonia1', [App\Http\Controllers\Website\ExtrapageController::class, 'baridhonia1'])->name('');
Route::get('/baridhonia2', [App\Http\Controllers\Website\ExtrapageController::class, 'baridhonia2'])->name('');
Route::get('/barijira1', [App\Http\Controllers\Website\ExtrapageController::class, 'barijira1'])->name('');
Route::get('/barimouri1', [App\Http\Controllers\Website\ExtrapageController::class, 'barimouri1'])->name('');
Route::get('/barimouri2', [App\Http\Controllers\Website\ExtrapageController::class, 'barimouri2'])->name('');
Route::get('/barimethi1', [App\Http\Controllers\Website\ExtrapageController::class, 'barimethi1'])->name('');
Route::get('/barimethi2', [App\Http\Controllers\Website\ExtrapageController::class, 'barimethi2'])->name('');
Route::get('/barimethi3', [App\Http\Controllers\Website\ExtrapageController::class, 'barimethi3'])->name('');
Route::get('/barigarlic1', [App\Http\Controllers\Website\ExtrapageController::class, 'barigarlic1'])->name('');
Route::get('/barigarlic2', [App\Http\Controllers\Website\ExtrapageController::class, 'barigarlic2'])->name('');
Route::get('/barigarlic3', [App\Http\Controllers\Website\ExtrapageController::class, 'barigarlic3'])->name('');
Route::get('/barigarlic4', [App\Http\Controllers\Website\ExtrapageController::class, 'barigarlic4'])->name('');
Route::get('/bariada1', [App\Http\Controllers\Website\ExtrapageController::class, 'bariada1'])->name('');
Route::get('/bariada2', [App\Http\Controllers\Website\ExtrapageController::class, 'bariada2'])->name('');
Route::get('/bariada3', [App\Http\Controllers\Website\ExtrapageController::class, 'bariada3'])->name('');



Route::get('/baripeyaj1', [App\Http\Controllers\Website\ExtrapageController::class, 'baripeyaj1'])->name('');
Route::get('/baripeyaj2', [App\Http\Controllers\Website\ExtrapageController::class, 'baripeyaj2'])->name('');
Route::get('/baripeyaj3', [App\Http\Controllers\Website\ExtrapageController::class, 'baripeyaj3'])->name('');
Route::get('/baripeyaj4', [App\Http\Controllers\Website\ExtrapageController::class, 'baripeyaj4'])->name('');
Route::get('/baripeyaj5', [App\Http\Controllers\Website\ExtrapageController::class, 'baripeyaj5'])->name('');
Route::get('/baripeyaj6', [App\Http\Controllers\Website\ExtrapageController::class, 'baripeyaj6'])->name('');


//project checkout
Route::get('/checkout', [App\Http\Controllers\Website\CheckoutController::class, 'index'])->name('');
Route::post('/checkout', [App\Http\Controllers\Website\CheckoutController::class, 'store'])->name('');















Route::get('/thanks', [App\Http\Controllers\Website\CheckoutController::class, 'thanks'])->name('');
Route::get('/invest-application-ty', [App\Http\Controllers\ApplyController::class, 'thanks'])->name('');
Route::get('/seller-application-ty', [App\Http\Controllers\ApplyController::class, 'seller_thanks'])->name('');
Route::get('/problem-ty', [App\Http\Controllers\FarmerProblemController::class, 'thanks'])->name('');





Route::get('/vegetable', [App\Http\Controllers\Website\WebsiteController::class, 'vegcul'])->name('');
Route::get('/cow-farming', [App\Http\Controllers\Website\WebsiteController::class, 'cow_far'])->name('');
Route::get('/privacy-policy', [App\Http\Controllers\Website\WebsiteController::class, 'privacy'])->name('');
Route::get('/terms-condition', [App\Http\Controllers\Website\WebsiteController::class, 'termsandcondition'])->name('');
Route::get('/agriculture-information', [App\Http\Controllers\Website\WebsiteController::class, 'agriculture_information'])->name('');





Route::get('/cow', [App\Http\Controllers\SharminController::class, 'cow'])->name('');
Route::get('/cow1', [App\Http\Controllers\SharminController::class, 'cow1'])->name('');
Route::get('/cow3', [App\Http\Controllers\SharminController::class, 'cow3'])->name('');
Route::get('/cow4', [App\Http\Controllers\SharminController::class, 'cow4'])->name('');
Route::get('/cow5', [App\Http\Controllers\SharminController::class, 'cow5'])->name('');
Route::get('/cow2', [App\Http\Controllers\SharminController::class, 'cow2'])->name('');


Route::get('/hen', [App\Http\Controllers\SharminController::class, 'hen'])->name('');
Route::get('/hen1', [App\Http\Controllers\SharminController::class, 'hen1'])->name('');
Route::get('/hen2', [App\Http\Controllers\SharminController::class, 'hen2'])->name('');
Route::get('/hen3', [App\Http\Controllers\SharminController::class, 'hen3'])->name('');
Route::get('/hen4', [App\Http\Controllers\SharminController::class, 'hen4'])->name('');
Route::get('/hen5', [App\Http\Controllers\SharminController::class, 'hen5'])->name('');





Route::get('/fruit', [App\Http\Controllers\SharminController::class, 'fruit'])->name('');


Route::get('/apply', [App\Http\Controllers\ApplyController::class, 'create'])->name('');
Route::post('/applyforinvest', [App\Http\Controllers\ApplyController::class, 'store'])->name('');
Route::post('/joinasvet_submit', [App\Http\Controllers\ApplyVetController::class, 'store'])->name('');



Route::get('/joinasvet', [App\Http\Controllers\ApplyVetController::class, 'create'])->name('');

Route::get('/farmerproblem', [App\Http\Controllers\FarmerProblemController::class, 'create'])->name('');
Route::post('/submitfarmerproblem', [App\Http\Controllers\FarmerProblemController::class, 'store'])->name('');


Route::get('/fish', [App\Http\Controllers\SharminController::class, 'fish'])->name('');
Route::get('/fish1', [App\Http\Controllers\SharminController::class, 'fish1'])->name('');
Route::get('/fish2', [App\Http\Controllers\SharminController::class, 'fish2'])->name('');
Route::get('/fish3', [App\Http\Controllers\SharminController::class, 'fish3'])->name('');



Route::get('/goat', [App\Http\Controllers\SharminController::class, 'goat'])->name('');
Route::get('/goat1', [App\Http\Controllers\SharminController::class, 'goat1'])->name('');
Route::get('/goat2', [App\Http\Controllers\SharminController::class, 'goat2'])->name('');
Route::get('/goat3', [App\Http\Controllers\SharminController::class, 'goat3'])->name('');






Route::get('/check-my-app-farm', [App\Http\Controllers\FarmerProblemController::class, 'index2'])->name('');
Route::get('/check-my-app-inv', [App\Http\Controllers\ApplyController::class, 'index2'])->name('');




Route::prefix('/')->middleware('isVet')->group(function(){
//Route::get('/vet/me', [App\Http\Controllers\VetController::class, 'index'])->name('');
Route::get('/vet/me/', [App\Http\Controllers\VetController::class, 'index'])->name('');
Route::get('/vet/me/farmerissue', [App\Http\Controllers\VetController::class, 'farmer_index'])->name('');
Route::get('/vet/me/farmerissue/view/{id}', [App\Http\Controllers\VetController::class, 'show'])->name('');
Route::get('/vet/me/farmerissue/solve/{id}', [App\Http\Controllers\VetController::class, 'solve'])->name('');
Route::get('/vet/me/farmerissue/notsolve/{id}', [App\Http\Controllers\VetController::class, 'notsolve'])->name('');
Route::get('/vet/me/farmerissue/delete/{id}', [App\Http\Controllers\VetController::class, 'destroy'])->name('');

});




Route::prefix('/')->middleware('isSeller')->group(function(){
    Route::get('/seller/me/', [App\Http\Controllers\SellingController::class, 'index2'])->name('');
    Route::get('/seller/me/allproduct', [App\Http\Controllers\SellingController::class, 'index3'])->name('');
    Route::get('/seller/me/addproduct', [App\Http\Controllers\SellingController::class, 'index4'])->name('');
    Route::post('/seller/me/saveproduct', [App\Http\Controllers\SellingController::class, 'store2'])->name('');
    Route::get('/seller/me/product/delete/{id}', [App\Http\Controllers\SellingController::class, 'destroy'])->name('');
    Route::get('/seller/me/addcategory', [App\Http\Controllers\SellingController::class, 'addcategory'])->name('');
    Route::post('/seller/me/addcategory/submit', [App\Http\Controllers\SellingController::class, 'addcategory_store'])->name('');
    Route::get('/seller/me/allcategory', [App\Http\Controllers\SellingController::class, 'allcategory'])->name('');

    Route::get('/seller/me/orderforme', [App\Http\Controllers\SellingController::class, 'orderforme'])->name('');

    
    });



    




Route::get('/myorder', [App\Http\Controllers\Admin\OrderController::class, 'user_index'])->name('');
Route::get('/myorder/view/{id}', [App\Http\Controllers\Admin\OrderController::class, 'user_show'])->name('');


Route::get('product/myorder', [App\Http\Controllers\Admin\OrderController::class, 'user_index2'])->name('');
Route::get('product/myorder/view/{id}', [App\Http\Controllers\Admin\OrderController::class, 'user_show2'])->name('');










//for selling
Route::get('/forselling', [App\Http\Controllers\SellingController::class, 'create'])->name('');
Route::post('/joinasseller_submit', [App\Http\Controllers\SellingController::class, 'store'])->name('');










// SSLCOMMERZ Start
// Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
// Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

// Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
// Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

// Route::post('/success', [SslCommerzPaymentController::class, 'success']);
// Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
// Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

// Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


Route::get('/paynow/{id}', [App\Http\Controllers\PaymentController::class, 'index'])->name('');
Route::post('/payment-save', [App\Http\Controllers\PaymentController::class, 'store'])->name('');




<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('admin.login');
});


Route::group(['prefix'=>'cshop'], function(){
    Route::get('',['as'=>'home','uses'=>'ShopController@getHome']);

    Route::get('product',['as'=>'shop','uses'=>'ShopController@getProduct']);
    Route::get('product/{id_type}',['as' => 'product', 'uses' => 'ShopController@getProductsByID']);

//    Route::get('shop/productdetail/{id}',['as'=>'product-detail','uses'=>'ShopController@getProductDetail']);

    Route::get('wishlist',['as'=>'wishlist','uses'=>'ShopController@getWishlist']);

    Route::get('blog',['as'=>'blog','uses'=>'ShopController@getBlog']);

    Route::get('about',['as'=>'about','uses'=>'ShopController@getAbout']);

    Route::get('contact',['as'=>'contact','uses'=>'ShopController@getContact']);

    Route::get('product-detail/{id}',['as' => 'product-detail', 'uses' => 'ShopController@getProductsDetails']);
    Route::get('cart',['as'=>'cart','uses'=>'ShopController@cart']);
    Route::get('addtocart/{id}',['as' => 'addtocart', 'uses' => 'ShopController@getAddtoCart']);
    Route::get('delete-item-cart/{id}',['as' => 'deleteitem', 'uses' => 'ShopController@removeItem']);
    Route::get('checkout',['as' => 'checkout', 'uses' => 'ShopController@getCheckOut']);
    Route::post('submit-checkout',['as' => 'submitcheckout', 'uses' => 'ShopController@postCheckOut']);

    //cập nhật giỏ hàng (số lượng sản phẩm)
    Route::get('update-cart/{id}/{qty}',['as'=>'updatecart','uses'=>'ShopController@updateCart']);
});
Route::get('ordercomplete',['as'=>'ordercomplete','uses'=>'ShopController@getOrderComplete']);

////đăng nhập
//Route::get('admin/login',['as'=>'login','uses'=>'AdminController@getLoginAdmin']);
//Route::post('admin/login',['as'=>'login','uses'=>'AdminController@postLoginAdmin']);
////đăng xuất
//Route::get('admin/logout',['as'=>'logout','uses'=>'AdminController@getLogoutAdmin']);

//Đăng ký
Route::get('sign-in',['as'=>'sign-up','uses'=>'AdminController@getSignIn']);
Route::post('sign-in',['as'=>'sign-up','uses'=>'AdminController@postSignIn']);

//Đăng nhập
Route::get('login', ['as' => 'Login', 'uses' => 'AdminController@getLogin']);
Route::post('login', ['as' => 'Login', 'uses' => 'AdminController@postLogin']);
Route::get('logout', ['as' => 'Logout', 'uses' => 'AdminController@getLogout']);

Route::group(['middleware' => 'checkAdminLogin', 'prefix' => 'admin', 'namespace' => 'Admin'], function() {
    Route::get('/', function() {
        return view('admin.index');
    });
});

Route::group(['prefix'=>'admin'], function(){

    Route::get('index',['as'=>'admin','uses'=>'AdminController@getAdmin']);

    Route::get('product-list',['as'=>'product-list','uses'=>'AdminController@getProduct']);
    //xóa sản phẩm
    Route::get('product-list/{id}', ['as'=>'postDeleteProduct', 'uses'=>'AdminController@postDeleteProduct']);

    //sửa sản phẩm
    Route::get('editproduct/{id}',['as'=>'editproduct','uses'=>'AdminController@getEditproduct']);
    Route::post('editproduct/{id}',['as'=>'postEditproduct','uses'=>'AdminController@postEditproduct']);

    Route::get('influencer-profile',['as'=>'influencer-profile','uses'=>'AdminController@getProfile']);

    //thêm sản phẩm
    Route::get('addproduct',['as'=>'addproduct','uses'=>'AdminController@getAddProduct']);
    Route::post('addproduct',['as'=>'postAddproduct','uses'=>'AdminController@postAddproduct']);

});



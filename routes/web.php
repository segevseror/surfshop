<?php






#shop contrroler
Route::get('/shop', 'ShopController@categorie');
Route::get('/shop/clear-cart' , 'ShopController@clearCart');
Route::get('/shop/remove-item' , 'ShopController@removeItem');
Route::get('/shop/checkout' , 'ShopController@checkOut');
Route::get('/shop/update-quantity' , 'ShopController@updateItem');
Route::get('/shop/add-to-cart' , 'ShopController@addToCart');
Route::get('shop/order' , 'ShopController@order');
Route::get('shop/allproducts' , 'ShopController@allproducts' );
Route::get('shop/allcartajax' , 'ShopController@allcartajax' );

Route::get('/search', 'ShopController@search');
Route::get('/search/{name_product}', 'ShopController@searchproduct');

Route::get('/shop/{url_categorie}', 'ShopController@producats');
Route::get('/shop/{url_categorie}/{url_product}', 'ShopController@item');



#users


Route::get('/user/sigin' , 'UserController@signin');
Route::post('/user/sigin' , 'UserController@postsigin');
Route::get('/user/signup' , 'UserController@signup');
Route::post('/user/signup' , 'UserController@postSignup');
Route::get('/user/logout', 'UserController@logout');


#cms
Route::get('cms/dashboard', 'cmsController@dashboard');
Route::resource('cms/content' , 'ContentController' );
Route::resource('cms/menu' , 'MenuController' );
Route::resource('cms/categories' , 'CategoriesController' );
Route::resource('cms/product' , 'ProductController' );

#pages
Route::get('/', 'PageController@home');
Route::get('{url}', 'PageController@dynamiMenu');

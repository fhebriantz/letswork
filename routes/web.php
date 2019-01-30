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


Route::get('/', 'Cms\Cms_DashboardController@dashboard');
Route::get('/dashboard', 'Cms\Cms_DashboardController@dashboard');
Route::get('/form', 'Cms\Cms_DashboardController@form');
Route::get('/datatable', 'Cms\Cms_DashboardController@datatable');
Route::get('/validation', 'Cms\Cms_DashboardController@validation');
Route::get('/currency', 'Cms\Cms_DashboardController@currency');
Route::get('/datepicker', 'Cms\Cms_DashboardController@datepicker');


// crud Login
Route::get('/login', 'Login\Cms_LoginController@show');

Route::post('/login', 'Login\Cms_LoginController@login');
Route::post('/signup', 'Login\Cms_LoginController@signup');
Route::get('/logout', 'Login\Cms_LoginController@logout');

// order
Route::get('/order', 'Transaction\Trans_OrderController@show');
Route::get('/order/{id}/view', 'Transaction\Trans_OrderController@view');
Route::get('/detail/{id}/edit', 'Transaction\Trans_OrderController@detailedit');
Route::get('/detail/{id}/input', 'Transaction\Trans_OrderController@detailinput');
Route::get('/order/input', 'Transaction\Trans_OrderController@input');
// crud order
Route::post('/detail/{id}/input','Transaction\Trans_OrderController@detailinsert');
Route::post('/detail/{id}/active','Transaction\Trans_OrderController@active');
Route::delete('/detail/{id}/delete','Transaction\Trans_OrderController@detaildelete'); 
Route::post('/order/input','Transaction\Trans_OrderController@insert'); 
Route::put('/order/{id}/edit','Transaction\Trans_OrderController@update'); 
Route::put('/detail/{id}/edit','Transaction\Trans_OrderController@detailupdate'); 
Route::delete('/order/{id}/delete','Transaction\Trans_OrderController@delete');



// transaksi
Route::get('/transaksi', 'Transaction\List_TransactionController@show');
Route::get('/transaksi/input', 'Transaction\List_TransactionController@input');
Route::get('/transaksi/{id}/view', 'Transaction\List_TransactionController@view');
Route::get('/detailtransaksi/{id}/edit', 'Transaction\List_TransactionController@detailedit');
Route::get('/detailtransaksi/{id}/input', 'Transaction\List_TransactionController@detailinput');
// crud order
Route::post('/transaksi/input','Transaction\List_TransactionController@insert'); 
Route::put('/transaksi/{id}/edit','Transaction\List_TransactionController@update'); 
Route::delete('/transaksi/{id}/delete','Transaction\List_TransactionController@delete');
Route::post('/detailtransaksi/{id}/input','Transaction\List_TransactionController@detailinsert');
Route::put('/detailtransaksi/{id}/edit','Transaction\List_TransactionController@detailupdate'); 
Route::post('/detailtransaksi/{id}/active','Transaction\List_TransactionController@active');
Route::delete('/detailtransaksi/{id}/delete','Transaction\List_TransactionController@detaildelete'); 


// ubah SO 
Route::get('/so', 'Transaction\Trans_OrderController@show_so');
Route::get('/so/{id}/edit', 'Transaction\Trans_OrderController@edit_so');
Route::put('/so/{id}/edit','Transaction\Trans_OrderController@update_so'); 


// Tagihan 
Route::get('/tagihan', 'Transaction\Trans_OrderController@show_tagihan');
Route::get('/tagihan/{id}/edit', 'Transaction\Trans_OrderController@edit_tagihan');
Route::put('/tagihan/{id}/edit','Transaction\Trans_OrderController@update_tagihan'); 


// pembayaran
Route::get('/pembayaran', 'Transaction\Trans_OrderController@show_pembayaran');
Route::get('/pembayaran/{id}/edit', 'Transaction\Trans_OrderController@edit_pembayaran');
Route::post('/pembayaran/{id}/input','Transaction\Trans_OrderController@insert_pembayaran'); 

// Penerimaan 
Route::get('/penerimaan', 'Transaction\Trans_OrderController@show_penerimaan');
Route::get('/penerimaan/{id}/edit', 'Transaction\Trans_OrderController@edit_penerimaan');
Route::put('/penerimaan/{id}/edit','Transaction\Trans_OrderController@update_penerimaan'); 


// sponsor
Route::get('/sponsor', 'Master\Mast_SponsorController@show');
Route::get('/sponsor/{id}/edit', 'Master\Mast_SponsorController@edit');
Route::get('/sponsor/input', 'Master\Mast_SponsorController@input');
// crud sponsor
Route::post('/sponsor/input','Master\Mast_SponsorController@insert'); 
Route::put('/sponsor/{id}/edit','Master\Mast_SponsorController@update'); 
Route::delete('/sponsor/{id}/delete','Master\Mast_SponsorController@delete');

// brosur
Route::get('/brosur', 'Master\Mast_BrosurController@show');
Route::get('/brosur/{id}/edit', 'Master\Mast_BrosurController@edit');
Route::get('/brosur/input', 'Master\Mast_BrosurController@input');
// crud brosur
Route::post('/brosur/input','Master\Mast_BrosurController@insert'); 
Route::put('/brosur/{id}/edit','Master\Mast_BrosurController@update'); 
Route::delete('/brosur/{id}/delete','Master\Mast_BrosurController@delete');

// dokter
Route::get('/dokter', 'Master\Mast_DokterController@show');
Route::get('/dokter/{id}/edit', 'Master\Mast_DokterController@edit');
Route::get('/dokter/input', 'Master\Mast_DokterController@input');
// crud dokter
Route::post('/dokter/input','Master\Mast_DokterController@insert'); 
Route::put('/dokter/{id}/edit','Master\Mast_DokterController@update'); 
Route::delete('/dokter/{id}/delete','Master\Mast_DokterController@delete');

// kunjungan
Route::get('/kunjungan', 'Master\Mast_KunjunganController@show');
Route::get('/kunjungan/{id}/edit', 'Master\Mast_KunjunganController@edit');
Route::get('/kunjungan/input', 'Master\Mast_KunjunganController@input');
// crud kunjungan
Route::post('/kunjungan/input','Master\Mast_KunjunganController@insert'); 
Route::put('/kunjungan/{id}/edit','Master\Mast_KunjunganController@update'); 
Route::delete('/kunjungan/{id}/delete','Master\Mast_KunjunganController@delete');

// makloon
Route::get('/makloon', 'Master\Mast_MakloonController@show');
Route::get('/makloon/{id}/edit', 'Master\Mast_MakloonController@edit');
Route::get('/makloon/input', 'Master\Mast_MakloonController@input');
// crud makloon
Route::post('/makloon/input','Master\Mast_MakloonController@insert'); 
Route::put('/makloon/{id}/edit','Master\Mast_MakloonController@update'); 
Route::delete('/makloon/{id}/delete','Master\Mast_MakloonController@delete');

// medrep
Route::get('/medrep', 'Master\Mast_MedrepController@show');
Route::get('/medrep/{id}/edit', 'Master\Mast_MedrepController@edit');
Route::get('/medrep/input', 'Master\Mast_MedrepController@input');
// crud medrep
Route::post('/medrep/input','Master\Mast_MedrepController@insert'); 
Route::put('/medrep/{id}/edit','Master\Mast_MedrepController@update'); 
Route::delete('/medrep/{id}/delete','Master\Mast_MedrepController@delete');


// ---------------------------------------------------------------------------

// additional
Route::get('/additional', 'Master\Ms_AdditionalController@show');
Route::get('/additional/{id}/edit', 'Master\Ms_AdditionalController@edit');
Route::get('/additional/input', 'Master\Ms_AdditionalController@input');
// crud additional
Route::post('/additional/input','Master\Ms_AdditionalController@insert'); 
Route::put('/additional/{id}/edit','Master\Ms_AdditionalController@update'); 
Route::delete('/additional/{id}/delete','Master\Ms_AdditionalController@delete');


// ------Transaction--------
// laundry
Route::get('/laundry', 'Transaction\Tr_LaundryController@show');
Route::get('/laundry/{id}/view', 'Transaction\Tr_LaundryController@view');
// crud laundry
Route::delete('/laundry/{id}/delete','Transaction\Tr_LaundryController@delete');


// -------MASTER-------
// customer
Route::get('/customer', 'Master\Ms_CustomerController@show');
Route::get('/customer/{id}/edit', 'Master\Ms_CustomerController@edit');
Route::get('/customer/input', 'Master\Ms_CustomerController@input');
// crud customer
Route::post('/customer/input','Master\Ms_CustomerController@insert'); 
Route::put('/customer/{id}/edit','Master\Ms_CustomerController@update'); 
Route::delete('/customer/{id}/delete','Master\Ms_CustomerController@delete');

// package
Route::get('/package', 'Master\Ms_PackageController@show');
Route::get('/package/{id}/edit', 'Master\Ms_PackageController@edit');
Route::get('/package/input', 'Master\Ms_PackageController@input');
// crud package
Route::post('/package/input','Master\Ms_PackageController@insert'); 
Route::put('/package/{id}/edit','Master\Ms_PackageController@update'); 
Route::delete('/package/{id}/delete','Master\Ms_PackageController@delete');

// outlet
Route::get('/outlet', 'Master\Ms_OutletController@show');
Route::get('/outlet/{id}/edit', 'Master\Ms_OutletController@edit');
Route::get('/outlet/input', 'Master\Ms_OutletController@input');
// crud outlet
Route::post('/outlet/input','Master\Ms_OutletController@insert'); 
Route::put('/outlet/{id}/edit','Master\Ms_OutletController@update'); 
Route::delete('/outlet/{id}/delete','Master\Ms_OutletController@delete');




// laundryservice
Route::get('/laundryservice', 'Master\Ms_LaundryserviceController@show');
Route::get('/laundryservice/{id}/edit', 'Master\Ms_LaundryserviceController@edit');
Route::get('/laundryservice/input', 'Master\Ms_LaundryserviceController@input');
// crud laundryservice
Route::post('/laundryservice/input','Master\Ms_LaundryserviceController@insert'); 
Route::put('/laundryservice/{id}/edit','Master\Ms_LaundryserviceController@update'); 
Route::delete('/laundryservice/{id}/delete','Master\Ms_LaundryserviceController@delete');

// usergroup
Route::get('/usergroup', 'Master\Ms_UsergroupController@show');
Route::get('/usergroup/{id}/edit', 'Master\Ms_UsergroupController@edit');
Route::get('/usergroup/input', 'Master\Ms_UsergroupController@input');
// crud usergroup
Route::post('/usergroup/input','Master\Ms_UsergroupController@insert'); 
Route::put('/usergroup/{id}/edit','Master\Ms_UsergroupController@update'); 
Route::delete('/usergroup/{id}/delete','Master\Ms_UsergroupController@delete');

// outletuser
Route::get('/outletuser', 'Master\Ms_OutletuserController@show');
Route::get('/outletuser/{id}/edit', 'Master\Ms_OutletuserController@edit');
Route::get('/outletuser/input', 'Master\Ms_OutletuserController@input');
// crud outletuser
Route::post('/outletuser/input','Master\Ms_OutletuserController@insert'); 
Route::put('/outletuser/{id}/edit','Master\Ms_OutletuserController@update'); 
Route::delete('/outletuser/{id}/delete','Master\Ms_OutletuserController@delete');

// promo
Route::get('/promo', 'Master\Ms_PromoController@show');
Route::get('/promo/{id}/edit', 'Master\Ms_PromoController@edit');
Route::get('/promo/input', 'Master\Ms_PromoController@input');
// crud promo
Route::post('/promo/input','Master\Ms_PromoController@insert'); 
Route::put('/promo/{id}/edit','Master\Ms_PromoController@update'); 
Route::delete('/promo/{id}/delete','Master\Ms_PromoController@delete');

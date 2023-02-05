<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PacketBookingController;
use App\Http\Controllers\OtherApiController;
use App\Http\Controllers\VendorMasterController;
use App\Http\Controllers\ClientMasterController;
use App\Http\Controllers\ZoneMasterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteSettingController;
use App\Http\Controllers\VendorMainFestController;

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

Route::group(['prefix' => '', 'middleware' => ['auth']], function(){

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::resource('user', userController::class);
    Route::get('user/unlink/{id}/{image}', [userController::class, 'unlink']);


    Route::get('packet-booking', [PacketBookingController::class, 'packetBooking']);
    Route::get('import-packet', [PacketBookingController::class, 'importPacket']);
    Route::get('booking-report', [PacketBookingController::class, 'bookingReport']);
    Route::get('manifest-report', [PacketBookingController::class, 'manifestReport']);
    Route::get('delivered-report', [PacketBookingController::class, 'deliveredReport']);

    Route::get('print-awb-document', [OtherApiController::class, 'printAWBDocument']);
    Route::get('shipment-movement', [OtherApiController::class, 'shipmentMovement']);
    Route::get('pod-upload', [OtherApiController::class, 'podUpload']);

    Route::get('country-master', [OtherApiController::class, 'countryMaster']);
    Route::post('country-save',[OtherApiController::class,'countrySave'])->name('country.save');
    Route::get('country-list',[OtherApiController::class,'getCountryList'])->name('country.list');
    Route::get('country-delete/{id}',[OtherApiController::class,'countryDelete'])->name('country.delete');
    Route::post('country-update',[OtherApiController::class,'countryUpdate'])->name('country.update');
    
    Route::get('reason-master', [OtherApiController::class, 'reasonMaster']);
    Route::post('reason-save', [OtherApiController::class,'reasonSave'])->name('reason.save');
    Route::get('reason-delete/{id}',[OtherApiController::class,'reasonDelete'])->name('reason.delete');
    Route::post('reason-update',[OtherApiController::class,'reasonUpdate'])->name('reason.update');
    Route::get('create-invoice', [OtherApiController::class, 'createInvoice']);
    Route::get('invoice', [OtherApiController::class, 'invoice']);
    Route::get('vendor-api-configuration', [OtherApiController::class, 'vendorApiConfiguration']);

    
    Route::get('client-master', [ClientMasterController::class, 'clientMaster']);
    Route::post('client-master-save',[ClientMasterController::class, 'clientMasterSave'])->name('client.master.save');
    Route::get('client-master-delete/{id}',[ClientMasterController::class, 'clientMasterDelete'])->name('client.master.delete');
    
    Route::get('zone-master', [ZoneMasterController::class, 'zoneMaster'])->name('zone.master');
    Route::post('zone-master-save', [ZoneMasterController::class, 'zoneMasterSave'])->name('zone.master.save');
    Route::get('zone-master-delete/{id}', [ZoneMasterController::class, 'zoneMasterDelete'])->name('zone.master.delete');
    Route::get('manage-users', [UserController::class, 'manageUser'])->name('manage.user');
    Route::post('user-master-save',[UserController::class, 'userMasterSave'])->name('user.master.save');
    Route::post('user-master-update',[UserController::class, 'userMasterUpdate'])->name('user.master.update');
    Route::get('user-delete/{id}',[UserController::class, 'userMasterDelete'])->name('user.delete');

    Route::get('change-password', [UserController::class, 'changePassword']);
    Route::get('payment-history', [UserController::class, 'paymentHistory']);
    Route::get('user-profile', [UserController::class, 'userProfile']);
    Route::post('user-profile-update',[UserController::class, 'userProfileUpdate'])->name('user.profile.update');
    Route::get('website-setting', [WebsiteSettingController::class, 'websiteSetting']);
    Route::post('website-setting-save', [WebsiteSettingController::class, 'websiteSettingSave'])->name('website.setting.save');
    
    // Route::get('vendor-manifest', [VendorMasterController::class, 'vendorManifest']);
    Route::get('vendor-master', [VendorMasterController::class, 'vendorMaster']);
    Route::post('vendor-master-save', [VendorMasterController::class, 'vendorMasterSave'])->name('vendor.master.save');
    Route::get('vendor-master-delete/{id}', [VendorMasterController::class, 'vendorMasterDelete'])->name('vendor.master.delete');
    Route::get('vendor-account-detail', [VendorMasterController::class, 'vendorAccountDetail'])->name('vendor.account.detail');
    Route::post('vendor-acccount-save',[VendorMasterController::class,'vendorAcccountSave'])->name('vendor.acccount.save');

    Route::post('get-vendor-service',[VendorMasterController::class,'getVendorService'])->name('get-vendor-service');
    
    Route::get('vendor-account-detail-delete/{id}',[VendorMasterController::class,'vendorAcccountDetailDelete'])->name('vendor.account.detail.delete');

    Route::resource('vendor-manifest', VendorMainFestController::class);
    Route::post('vendor-manifest', [VendorMainFestController::class,'create'])->name('vendor-manifest-create');
});
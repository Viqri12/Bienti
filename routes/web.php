<?php

use App\Http\Controllers\depan\landingPage;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DataKolController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [landingPage::class, 'index'])->name('landingpage');

//  Route::get('login-admin', [LoginController::class, 'index'])->name('login-admin')->middleware('guest');
//  Route::post('login-admin-bienti', [LoginController::class, 'login'])->name('login-admin-bienti');

 Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
 
 Route::get('Register-admin', [RegisterController::class, 'index'])->name('register-admin');
 Route::post('Register-admin-bienti', [RegisterController::class, 'store'])->name('register-admin-bienti');

// Route::get('/login', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Admin
    Route::prefix('admin')->group(function(){
    
        Route::get('dashboard', [DashboardController::class ,'index'])->name('dashboard');

        //INFLUENCER
        Route::get('Tambah-influencer', [DashboardController::class ,'influencer'])->name('tambah-influencer');
        Route::post('Tambah-data-influencer', [DashboardController::class ,'influencerPost'])->name('tambah-data-influencer');
        Route::get('edit-Influencer/{id}',[DashboardController::class, 'EditInfluencer'])->name('edit-influencer');
        Route::post('edit-data-influencer/{id}',[DashboardController::class, 'EditInfluencerPost'])->name('edit-data-influencer');
        Route::get('hapus-influencer/{id}',[DashboardController::class, 'hapusIinfluencer'])->name('delete-influencer');
        
        //INSTAGRAM
        Route::get('input-KOL-instagram',[DashboardController::class, 'tambah'])->name('tambah');
        Route::post('tambah-KOL-instagram',[DashboardController::class, 'create'])->name('tambah-instagram');
        Route::get('data-KOL-instagram', [DataKolController::class, 'instagram_data'])->name('instagram_data');
        Route::get('edit-KOL-instagram/{id}',[DataKolController::class, 'EditKol'])->name('edit-KOL-influencer');
        Route::post('edit-KOL-instagram/{id}',[DataKolController::class, 'EditKolData'])->name('edit-data-KOL-influencer');
        Route::get('delete-instagram/{id}', [DataKolController::class, 'hapusInstagram'])->name('delete-instagram');

        //COMUNITY
        Route::get('input-KOL-comunity', [DashboardController::class, 'comunity'])->name('comunity');
        Route::post('Tambah-KOL-comunity', [DashboardController::class, 'TambahComunity'])->name('tambah-comunity');
        Route::get('data-KOL-comunity', [DataKolController::class, 'comunity_data'])->name('comunity_data');
        Route::get('edit-comunity/{id}', [DashboardController::class, 'editComunity'])->name('edit-comunity');
        Route::post('edit-data-comunity/{id}', [DashboardController::class, 'EditDataComunity'])->name('edit-data-comunity');
        Route::get('delete-comunity/{id}', [DashboardController::class, 'HapusComunity'])->name('delete-comunity');

        //TWITTER
        Route::get('input-KOL-twitter', [DashboardController::class, 'twitter'])->name('twitter');
        Route::post('tambah-KOL-twitter', [DashboardController::class, 'TambahTwitter'])->name('tambah-twitter');
        Route::get('data-KOL-twitter', [DataKolController::class, 'twitter_data'])->name('twitter_data');
        Route::get('edit-KOL-twitter/{id}',[DataKolController::class, 'EditKolTwitter'])->name('edit-KOL-twitter');
        Route::post('edit-data-KOL-twitter/{id}', [DataKolController::class, 'EditDataTwiiter'])->name('edit-data-KOL-twitter');
        Route::get('delete-twitter/{id}', [DataKolController::class, 'hapusTwitter'])->name('delete-twitter');
        
        //YOUTUBE
        Route::get('input-KOL-youtube', [DashboardController::class,'youtube'])->name('youtube');
        Route::post('tambah-KOL-youtube',[DashboardController::class, 'TambahYoutube'])->name('tambah-youtube');
        Route::get('data-KOL-youtube', [DataKolController::class, 'youtube_data'])->name('youtube_data');
        Route::get('edit-KOL-youtube/{id}', [DataKolController::class, 'EditYoutube'])->name('edit-youtube');
        Route::post('edit-data-KOL-youtube/{id}',[DataKolController::class, 'EditDataYoutube'])->name('edit-data-KOL-youtube');
        Route::get('delete-youtube/{id}', [DataKolController::class, 'HapusYoutube'])->name('delete-youtube');
        
        //TIKTOK
        Route::get('input-KOL-tiktok', [DashboardController::class, 'tiktok'])->name('tiktok');
        Route::post('tambah-KOL-tiktok',[DashboardController::class, 'TambahTiktok'])->name('tambah-tiktok');
        Route::get('data-KOL-tiktok', [DataKolController::class, 'tiktok_data'])->name('tiktok_data');
        Route::get('edit-KOL-tiktok/{id}', [DataKolController::class, 'EditTiktok'])->name('edit-tiktok');
        Route::post('edit-KOL-tiktok/{id}', [DataKolController::class, 'EditDataKol'])->name('edit-data-tiktok');
        Route::get('delete-tiktok/{id}', [DataKolController::class, 'HapusTiktok'])->name('delete-tiktok');
    
        //TALENT / MC
        Route::get('input-KOL-Talent/MC', [DashboardController::class, 'talent'])->name('talent');
        Route::post('tambah-KOL-talent', [DashboardController::class, 'TambahTalent'])->name('tambah-talent');
        Route::get('data-talent',[DashboardController::class, 'DataTalent'])->name('data_talent');
        Route::get('edit-talent/{id}', [DashboardController::class, 'EditTalent'])->name('edit_talent');
        Route::post('edit-talent/{id}', [DashboardController::class, 'EditDataTalent'])->name('edit-data-talent');
        Route::get('delete-talent/{id}', [DashboardController::class, 'HapusTalent'])->name('delete-talent');
       
        //MEDIA
        Route::get('input-media',[DashboardController::class, 'media'])->name('input-data-media');
        Route::post('tambah-media', [DashboardController::class, 'TambahMedia'])->name('tambah-media');
        Route::get('data-media', [DashboardController::class, 'DataMedia'])->name('data-media');
        Route::get('edit-media/{id}',[DashboardController::class,'editMedia'])->name('edit-media');
        Route::post('edit-data-media/{id}', [DashboardController::class, 'EditDataMedia'])->name('edit-data-media');
        Route::get('delete-media/{id}', [DashboardController::class, 'HapusMedia'])->name('delete-media');


    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


    

require __DIR__.'/auth.php';

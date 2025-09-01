<?php

use Illuminate\Support\Facades\Route;

//halaman utama
Route::get('/', function () {
    return view('welcome');
});

//about
Route::get('/about', function () {
    return view('about');
});

//contact
Route::get('/contact', action: function () {
    return view('contact');
})->name(name: 'contact.page');


// Rute dengan nama profil.blade
Route::get('/pofil', function() {
     return view('profil'); 
 })->name('profil.page');

// menggunakan rute bernama untuk pengalihan  {ini belum}
// Route::get('/redirect-to-profile', function () {
//     return redirect()->route('profile.page');
// });

//untuk pengguna
Route::get('/pengguna/{id}', function ($id)  {
    return "halaman pengguna dengan ID : ".$id;
})->name('pengguna.page');

//Rute Grup (Route Groups)
Route::prefix(prefix: 'manage')->group(callback: function(): void {
    route::get(uri: '/edit-profil',action: function() {
    return view(view: 'manage.edit');
    })->name(name: 'edit.page');

    route::get(uri: '/setting',action: function() {
    return view(view: 'manage.setting');
    })->name(name: 'setting.page');
});



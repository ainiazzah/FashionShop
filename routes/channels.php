<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Saluran Siaran
|--------------------------------------------------------------------------
|
|Di sini Anda dapat mendaftarkan semua saluran penyiaran acara yang Anda miliki
| dukungan aplikasi. Callback otorisasi saluran yang diberikan adalah
| digunakan untuk memeriksa apakah pengguna yang diautentikasi dapat mendengarkan saluran.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

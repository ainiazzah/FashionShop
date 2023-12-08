<?php

namespace App\Models; //Menunjukkan bahwa kelas Category berada di dalam namespace App\Models

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

//Menunjukkan bahwa kelas User extends (memperluas) kelas Authenticatable
class User extends Authenticatable
{
    //Menggunakan beberapa trait, untuk mendukung API token authentication, untuk pembuatan data pabrik, dan untuk mendukung notifikasi.
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    //Menentukan kolom-kolom pada tabel database users yang dapat diisi secara massal (mass assignable). 
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    //Menyatakan atribut-atribut yang harus disembunyikan ketika objek User di-serialisasi. 
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    //Menentukan konversi tipe data untuk atribut tertentu.
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    //Mendefinisikan relasi "one-to-one" antara User dan Shop
    public function shop(){
        return $this->hasOne(Shop::class);
    }
}

<?php

namespace App\Models; // Menunjukkan bahwa kelas Category berada di dalam namespace App\Models

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Mendefinisikan kelas Category yang extends (memperluas) kelas Model.
class Category extends Model
{
    //Menentukan kolom-kolom pada tabel database categories yang dapat diisi secara massal 
    protected $fillable = ['shop_id', 'name', 'path'];

    //Mendefinisikan relasi "many-to-one" antara Category dan Shop
    public function shop(){
        return $this->belongsTo(Shop::class);
    }

    //Mendefinisikan relasi "one-to-many" antara Category dan Product.
    public function product(){
        return $this->hasMany(Product::class);
    }

    // Menggunakan trait HasFactory, yang menyediakan fungsionalitas untuk membuat data pabrik
    use HasFactory;
}

<?php
//Menentukan namespace untuk kelas Carts.
namespace App\View\Components\Organisms;

use Illuminate\View\Component;
//Mendefinisikan kelas Carts yang extends (memperluas) kelas Component dari Laravel. 
class Carts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    //memberikan tampilan atau konten yang akan dirender ketika komponen dipanggil dalam sebuah view.
    public function render()
    {
        //mengembalikan view Blade yang akan digunakan untuk merepresentasikan komponen.
        return view('client.components.organisms.carts');
    }
}

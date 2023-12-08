<?php
//Menentukan namespace untuk kelas Layout.
namespace App\View\Components\Template;

use Illuminate\View\Component;
//Mendefinisikan kelas Layout yang extends (memperluas) kelas Component dari Laravel.
class Layout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    // Mendefinisikan properti title yang akan digunakan dalam komponen.
     public $title;
    //Konstruktor kelas. Saat objek Layout dibuat, konstruktor ini menerima nilai $title dan mengatur nilai tersebut ke properti $title.
    public function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('client.components.template.layout');
    }
}

<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        
/* ACA SE MANDA LLAMAR LA VISTA: RESOURCES/LAYOUTS/APP.BLADE.PHP */
        return view('layouts.app');
    }
}


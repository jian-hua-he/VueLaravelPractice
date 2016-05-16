<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VueController extends Controller
{
    public function simpleExample()
    {
        return view('vue.simple_example');
    }

    public function renderList()
    {
        return view('vue.render_list');
    }

    public function condition()
    {
        return view('vue.condition');
    }

    public function handleEvent()
    {
        return view('vue.handle_event');
    }

    public function filter()
    {
        return view('vue.filter');
    }

    public function computed()
    {
        return view('vue.computed');
    }

    public function computedSetter()
    {
        return view('vue.computed_setter');
    }

    public function styleBinding()
    {
        return view('vue.style_binding');
    }

    public function component()
    {
        return view('vue.component');
    }

    public function modularization()
    {
        return 'mudolarization';
    }
}

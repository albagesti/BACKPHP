<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ClassController extends Controller
{
    public function index()
    {
        $clases = Classes::get();
        return view('admin.clases.clases', [
            'clases' => $clases
        ]);
    }

    public function store(Request $request)
    {
        $clase = new Classes;
        $clase->name = $request->get('name');
        $clase->id_teacher = $request->get('id_teacher');
        $clase->day_start = $request->get('day_start');
        $clase->color = $request->get('color');
        $clase->save();
        return redirect('clases');

    }

}

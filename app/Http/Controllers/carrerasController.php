<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\carrera;
use Illuminate\Http\Request;

class carrerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $carreras = carrera::where('nombreCarrera', 'LIKE', "%$keyword%")
                ->orWhere('nombreAbreviado', 'LIKE', "%$keyword%")
                ->orWhere('idDepto', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $carreras = carrera::latest()->paginate($perPage);
        }

        return view('carreras.index', compact('carreras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('carreras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $campos= [
            'nombreCarrera' => 'required|string|max:50',
            'nombreAbreviado' => 'required|string|max:6',
            'idDepto' => 'required|int'
        ];

        $mensaje = ["required"=>'El campo de :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        $requestData = $request->all();

        carrera::create($requestData);

        return redirect('carreras')->with('flash_message', 'Carrera agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $carrera = carrera::findOrFail($id);

        return view('carreras.show', compact('carrera'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $carrera = carrera::findOrFail($id);

        return view('carreras.edit', compact('carrera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $campos= [
            'nombreCarrera' => 'required|string|max:50',
            'nombreAbreviado' => 'required|string|max:6',
            'idDepto' => 'required|int'
        ];

        $mensaje = ["required"=>'El campo de :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        $requestData = $request->all();

        $carrera = carrera::findOrFail($id);
        $carrera->update($requestData);

        return redirect('carreras')->with('flash_message', 'Carrera actualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        carrera::destroy($id);

        return redirect('carreras')->with('flash_message', 'Carrera eliminada');
    }
}

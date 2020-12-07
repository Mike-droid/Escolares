<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\reticula;
use Illuminate\Http\Request;

class reticulasController extends Controller
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
            $reticulas = reticula::where('DescripcionReticula', 'LIKE', "%$keyword%")
                ->orWhere('FechaDeVigor', 'LIKE', "%$keyword%")
                ->orWhere('idCarrera', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $reticulas = reticula::latest()->paginate($perPage);
        }

        return view('reticulas.index', compact('reticulas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('reticulas.create');
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
        $campos = [
            'DescripcionReticula' => 'required|string|max:200',
            'FechaDeVigor' => 'required|date',
            'idCarrera' => 'required|int'
        ];
        $mensaje = ["required"=>'El campo de :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        $requestData = $request->all();

        reticula::create($requestData);

        return redirect('reticulas')->with('flash_message', 'Retícula agregada');
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
        $reticula = reticula::findOrFail($id);

        return view('reticulas.show', compact('reticula'));
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
        $reticula = reticula::findOrFail($id);

        return view('reticulas.edit', compact('reticula'));
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
        $campos = [
            'DescripcionReticula' => 'required|string|max:200',
            'FechaDeVigor' => 'required|date',
            'idCarrera' => 'required|int'
        ];
        $mensaje = ["required"=>'El campo de :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        $requestData = $request->all();

        $reticula = reticula::findOrFail($id);
        $reticula->update($requestData);

        return redirect('reticulas')->with('flash_message', 'Retícula actualizada');
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
        reticula::destroy($id);

        return redirect('reticulas')->with('flash_message', 'Retícula eliminada');
    }
}

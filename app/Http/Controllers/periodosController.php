<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\periodo;
use Illuminate\Http\Request;

class periodosController extends Controller
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
            $periodos = periodo::where('FechaInicio', 'LIKE', "%$keyword%")
                ->orWhere('FechaFinal', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $periodos = periodo::latest()->paginate($perPage);
        }

        return view('periodos.index', compact('periodos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('periodos.create');
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
            'FechaInicio' => 'required|date',
            'FechaFinal' => 'required|date'
        ];
        $mensaje = ["required"=>'El campo de :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        $requestData = $request->all();

        periodo::create($requestData);

        return redirect('periodos')->with('flash_message', 'Periodo agregado');
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
        $periodo = periodo::findOrFail($id);

        return view('periodos.show', compact('periodo'));
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
        $periodo = periodo::findOrFail($id);

        return view('periodos.edit', compact('periodo'));
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
            'FechaInicio' => 'required|date',
            'FechaFinal' => 'required|date'
        ];
        $mensaje = ["required"=>'El campo de :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        $requestData = $request->all();

        $periodo = periodo::findOrFail($id);
        $periodo->update($requestData);

        return redirect('periodos')->with('flash_message', 'Periodo actualizado');
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
        periodo::destroy($id);

        return redirect('periodos')->with('flash_message', 'Periodo eliminado');
    }
}

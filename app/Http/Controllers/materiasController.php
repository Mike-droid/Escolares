<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\materia;
use Illuminate\Http\Request;

class materiasController extends Controller
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
            $materias = materia::where('NombreMateria', 'LIKE', "%$keyword%")
                ->orWhere('idMateriaInterno', 'LIKE', "%$keyword%")
                ->orWhere('idMateriaOficial', 'LIKE', "%$keyword%")
                ->orWhere('creditos', 'LIKE', "%$keyword%")
                ->orWhere('idReticula', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $materias = materia::latest()->paginate($perPage);
        }

        return view('materias.index', compact('materias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('materias.create');
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
            'NombreMateria' => 'required|string|max:50',
            'idMateriaInterno' => 'required|string',
            'idMateriaOficial' => 'required|string',
            'creditos' => 'required|int',
            'idReticula' => 'required|int'
        ];
        $mensaje = ["required"=>'El campo de :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        $requestData = $request->all();

        materia::create($requestData);

        return redirect('materias')->with('flash_message', 'Materia agregada');
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
        $materia = materia::findOrFail($id);

        return view('materias.show', compact('materia'));
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
        $materia = materia::findOrFail($id);

        return view('materias.edit', compact('materia'));
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
            'NombreMateria' => 'required|string|max:50',
            'idMateriaInterno' => 'required|string',
            'idMateriaOficial' => 'required|string',
            'creditos' => 'required|int',
            'idReticula' => 'required|int'
        ];
        $mensaje = ["required"=>'El campo de :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        $requestData = $request->all();

        $materia = materia::findOrFail($id);
        $materia->update($requestData);

        return redirect('materias')->with('flash_message', 'Materia actualizada');
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
        materia::destroy($id);

        return redirect('materias')->with('flash_message', 'Materia eliminada');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\alumno;
use Illuminate\Http\Request;

class alumnosController extends Controller
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
            $alumnos = alumno::where('noCtrl', 'LIKE', "%$keyword%")
                ->orWhere('Nombre', 'LIKE', "%$keyword%")
                ->orWhere('apellidoPaterno', 'LIKE', "%$keyword%")
                ->orWhere('apellidoMaterno', 'LIKE', "%$keyword%")
                ->orWhere('sexo', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('facebook', 'LIKE', "%$keyword%")
                ->orWhere('twitter', 'LIKE', "%$keyword%")
                ->orWhere('telefono', 'LIKE', "%$keyword%")
                ->orWhere('idiomaIngles', 'LIKE', "%$keyword%")
                ->orWhere('idiomaFrances', 'LIKE', "%$keyword%")
                ->orWhere('idiomaEspanol', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $alumnos = alumno::latest()->paginate($perPage);
        }

        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('alumnos.create');
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
            'noCtrl' => 'required|string|max:8',
            'Nombre' => 'required|string|max:50',
            'apellidoPaterno' => 'required|string|max:50',
            'apellidoMaterno' => 'required|string|max:50'
        ];

        $mensaje = ["required"=>'El campo de :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        $requestData = $request->all();

        alumno::create($requestData);

        return redirect('alumnos')->with('flash_message', 'Alumno agregado');
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
        $alumno = alumno::findOrFail($id);

        return view('alumnos.show', compact('alumno'));
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
        $alumno = alumno::findOrFail($id);

        return view('alumnos.edit', compact('alumno'));
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
            'noCtrl' => 'required|string|max:8',
            'Nombre' => 'required|string|max:50',
            'apellidoPaterno' => 'required|string|max:50',
            'apellidoMaterno' => 'required|string|max:50'
        ];

        $mensaje = ["required"=>'El campo de :attribute es requerido'];
        $this->validate($request,$campos,$mensaje);

        $requestData = $request->all();

        $alumno = alumno::findOrFail($id);
        $alumno->update($requestData);

        return redirect('alumnos')->with('flash_message', 'Alumno actualizado');
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
        alumno::destroy($id);

        return redirect('alumnos')->with('flash_message', 'Alumno eliminado');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\horario;
use Illuminate\Http\Request;

class horariosController extends Controller
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
            $horarios = horario::where('Semestre', 'LIKE', "%$keyword%")
                ->orWhere('noCtrl', 'LIKE', "%$keyword%")
                ->orWhere('numeroOficioProrroga', 'LIKE', "%$keyword%")
                ->orWhere('idPeriodo', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $horarios = horario::latest()->paginate($perPage);
        }

        return view('horarios.index', compact('horarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('horarios.create');
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
        
        $requestData = $request->all();
        
        horario::create($requestData);

        return redirect('horarios')->with('flash_message', 'horario added!');
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
        $horario = horario::findOrFail($id);

        return view('horarios.show', compact('horario'));
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
        $horario = horario::findOrFail($id);

        return view('horarios.edit', compact('horario'));
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
        
        $requestData = $request->all();
        
        $horario = horario::findOrFail($id);
        $horario->update($requestData);

        return redirect('horarios')->with('flash_message', 'horario updated!');
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
        horario::destroy($id);

        return redirect('horarios')->with('flash_message', 'horario deleted!');
    }
}

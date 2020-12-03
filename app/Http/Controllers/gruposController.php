<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\grupo;
use Illuminate\Http\Request;

class gruposController extends Controller
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
            $grupos = grupo::where('NombreGrupo', 'LIKE', "%$keyword%")
                ->orWhere('idMateriaInterno', 'LIKE', "%$keyword%")
                ->orWhere('capacidadMaxima', 'LIKE', "%$keyword%")
                ->orWhere('rfcDocente', 'LIKE', "%$keyword%")
                ->orWhere('idPeriodo', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $grupos = grupo::latest()->paginate($perPage);
        }

        return view('grupos.index', compact('grupos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('grupos.create');
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
        
        grupo::create($requestData);

        return redirect('grupos')->with('flash_message', 'grupo added!');
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
        $grupo = grupo::findOrFail($id);

        return view('grupos.show', compact('grupo'));
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
        $grupo = grupo::findOrFail($id);

        return view('grupos.edit', compact('grupo'));
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
        
        $grupo = grupo::findOrFail($id);
        $grupo->update($requestData);

        return redirect('grupos')->with('flash_message', 'grupo updated!');
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
        grupo::destroy($id);

        return redirect('grupos')->with('flash_message', 'grupo deleted!');
    }
}

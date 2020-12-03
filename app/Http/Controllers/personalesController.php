<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\personale;
use Illuminate\Http\Request;

class personalesController extends Controller
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
            $personales = personale::where('RFC', 'LIKE', "%$keyword%")
                ->orWhere('Nombre', 'LIKE', "%$keyword%")
                ->orWhere('apellidoPaterno', 'LIKE', "%$keyword%")
                ->orWhere('apellidoMaterno', 'LIKE', "%$keyword%")
                ->orWhere('ipDepto', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $personales = personale::latest()->paginate($perPage);
        }

        return view('personales.index', compact('personales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('personales.create');
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
        
        personale::create($requestData);

        return redirect('personales')->with('flash_message', 'personale added!');
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
        $personale = personale::findOrFail($id);

        return view('personales.show', compact('personale'));
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
        $personale = personale::findOrFail($id);

        return view('personales.edit', compact('personale'));
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
        
        $personale = personale::findOrFail($id);
        $personale->update($requestData);

        return redirect('personales')->with('flash_message', 'personale updated!');
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
        personale::destroy($id);

        return redirect('personales')->with('flash_message', 'personale deleted!');
    }
}

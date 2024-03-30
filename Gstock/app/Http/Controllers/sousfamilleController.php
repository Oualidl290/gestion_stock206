<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

use App\Models\sousfamille;
use Illuminate\View\View;

class sousfamillesController extends Controller
{
    
    public function index() : View

    {
        $sousfamilles = sousfamille::all();
        return view ('sousfamilles.index')->with('sousfamilles', $sousfamilles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create() : View
    {
        return view('sousfamilles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     * 
     */
    public function store(Request $request) : RedirectResponse
    {
        $input = $request->all();
        sousfamille::create($input);
        return redirect('sousfamilles')->with('flash_message', 'sousfamilles Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * 
     * 
     */
    public function show($id) : View
    {
        $sousfamilles = sousfamille::find($id);
        return view('sousfamilles.show')->with('sousfamilles', $sousfamilles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     * 
     */
    public function edit($id) : View
    {
        $sousfamilles = sousfamille::find($id);
        return view('sousfamilles.edit')->with('sousfamilles', $sousfamilles);
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id) : RedirectResponse
    {
        $sousfamilles = sousfamille::find($id);
        $input = $request->all();
        $sousfamilles->update($input);
        return redirect('sousfamilles')->with('flash_message','sousfamille Updated!');
    }

    
    public function destroy($id) : RedirectResponse
    {
        sousfamille::destroy($id);
        return redirect('sousfamilles')->with('flash_message', 'sousfamilles deleted!'); 
    }
}
  

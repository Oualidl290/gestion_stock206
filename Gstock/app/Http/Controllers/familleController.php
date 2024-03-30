<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

use App\Models\familles;
use Illuminate\View\View;

class famillesController extends Controller
{
    
    public function index() : View

    {
        $familles = familles::all();
        return view ('familles.index')->with('familles', $familles);
    }

    
    public function create() : View
    {
        return view('familles.create');
    }

    
    public function store(Request $request) : RedirectResponse
    {
        $input = $request->all();
        familles::create($input);
        return redirect('familles')->with('flash_message', 'familles Addedd!');
    }

    /**
     * Display the specified resource.
     *
     * 
     * 
     */
    public function show($id) : View
    {
        $familles = familles::find($id);
        return view('familles.show')->with('familles', $familles);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     * 
     */
    public function edit($id) : View
    {
        $familles = familles::find($id);
        return view('familles.edit')->with('familles', $familles);
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id) : RedirectResponse
    {
        $familles = familles::find($id);
        $input = $request->all();
        $familles->update($input);
        return redirect('familles')->with('flash_message','famille Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * 
     */
    public function destroy($id) : RedirectResponse
    {
        familles::destroy($id);
        return redirect('familles')->with('flash_message', 'familles deleted!'); 
    }
}

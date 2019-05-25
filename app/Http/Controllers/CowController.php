<?php

namespace App\Http\Controllers;

use App\Cow;
use Illuminate\Http\Request;
use App\Http\Requests\CowRequest;

class CowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cows = Cow::pluck('name', 'id');
        return view('cows.index', ['cows' => $cows]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cows.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CowRequest $request)
    {
        $cow = Cow::create([
            'name' => $request['name'],
        ]);
        if ($cow) {
            return redirect('/cow/create')->with('message', 'Successfully added');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cow  $cow
     * @return \Illuminate\Http\Response
     */
    public function show(Cow $cow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cow  $cow
     * @return \Illuminate\Http\Response
     */
    public function edit(Cow $id)
    {
        $cowDetails = $id->toArray();
        $cowDetails['clean_date'] = date_format($id->created_at, 'd/m/Y');
        return view('cows.edit', ['cowDetails' => $cowDetails]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cow  $cow
     * @return \Illuminate\Http\Response
     */
    public function update(CowRequest $request, Cow $cow)
    {
        $chosenCow = Cow::findOrFail($request->id);
        $chosenCow->name = $request->name;
        $chosenCow->save();
        if ($chosenCow) {
            return redirect('/cow/'.$request->id.'/edit')->with('message', 'Name successfully changed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cow  $cow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cow $cow)
    {
        //
    }
}

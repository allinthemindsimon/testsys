<?php

namespace App\Http\Controllers;

use App\Cow;
use Illuminate\Http\Request;
use App\Http\Requests\CowRequest;

class CowController extends Controller
{

    public function index()
    {
        $cows = Cow::orderBy('name')->pluck('name', 'id');
        return view('cows.index', ['cows' => $cows]);
    }

    public function create()
    {
        return view('cows.create');
    }

    public function store(CowRequest $request)
    {
        $cow = Cow::create([
            'name' => $request['name'],
        ]);
        if ($cow) {
            return redirect('/cow/create')->with('cowmessage', $request['name'].' successfully added');
        }
    }

    public function edit(Cow $id)
    {
        $cowDetails = $id->toArray();
        $cowDetails['clean_date'] = date_format($id->created_at, 'd/m/Y');
        return view('cows.edit', ['cowDetails' => $cowDetails]);
    }

    public function update(CowRequest $request, Cow $cow)
    {
        $chosenCow = Cow::findOrFail($request->id);
        $chosenCow->name = $request->name;
        $chosenCow->save();
        if ($chosenCow) {
            return redirect('/cow/'.$request->id.'/edit')->with('message', 'Name successfully changed');
        }
    }
}

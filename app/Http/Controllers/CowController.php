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
        if ($cow->wasRecentlyCreated) {  //not sure there is any need for a check here but first time I've used ->wRC 
            return redirect('/cow/create')->with('cowmessage', $request['name'].' successfully added');
        }
    }

    public function edit(Cow $id)
    {
        $date = date_format($id->created_at, 'd/m/Y');
        $id->clean_date = $date;
        return view('cows.edit', ['cowDetails' => $id]);
    }

    public function update(CowRequest $request, Cow $id)
    {
        $id->name = $request->name;
        $id->save();
        if ($id) {
            return redirect('/cow/'.$id->id.'/edit')->with('cowmessage', 'Name successfully changed');
        }
    }
}

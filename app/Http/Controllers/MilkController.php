<?php

namespace App\Http\Controllers;

use App\Milk;
use App\Cow;
use Illuminate\Http\Request;
use App\Http\Requests\MilkRequest;

class MilkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MilkRequest $request)
    {
        $r = $request->all();
        $milk = Milk::create([
            'amount_litres' => $r['amount_litres'],
            'cow_id' => $r['cow_id']
        ]);
        // dd($milk);
        $cowDetails = Cow::findOrFail($r['cow_id']);
        if ($milk) {
            return redirect('/cow/'.$r['cow_id'].'/edit')->with([
                'milkmessage' => $r['amount_litres'].' litres of milk was successfully added',
                'cowDetails' => $cowDetails,
                // 'milkDetails' => $milk
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Milk  $milk
     * @return \Illuminate\Http\Response
     */
    public function show(Milk $milk)
    {
        dd('show');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Milk  $milk
     * @return \Illuminate\Http\Response
     */
    public function edit(MilkRequest $milk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Milk  $milk
     * @return \Illuminate\Http\Response
     */
    public function update(MilkRequest $request, Milk $milk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Milk  $milk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Milk $milk)
    {
        //
    }
}

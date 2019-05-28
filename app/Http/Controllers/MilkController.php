<?php

namespace App\Http\Controllers;

use App\Milk;
use App\Cow;
use Illuminate\Http\Request;
use App\Http\Requests\MilkRequest;

class MilkController extends Controller
{

    public function store(MilkRequest $request, Cow $id)
    {
        //I'm sure this can be neater, I'm looking for an 'if_exists' Laravel method or validator
        $checkday = Milk::whereRaw("DATE(created_at) = DATE(NOW())")->where('cow_id', '=', $id->id)->get();
        $milk = '';
        if (empty($checkday->toArray())) {
            $milk = Milk::create([
                'amount_litres' => $request->amount_litres,
                'cow_id' => $id->id
            ]);
        } else {
            return redirect('/cow/'.$id->id.'/edit')->with([
                'milkmessage' => 'This cow\'s daily milk yield has already been submitted',
                'class' => 'notification is-danger'
            ]);
        }
        if ($milk) {
            return redirect('/cow/'.$id->id.'/edit')->with([
                'milkmessage' => $request->amount_litres.' litres of milk was successfully added',
                'class' => 'message is-success',
                'cowDetails' => $id,
            ]);
        }
    }
}

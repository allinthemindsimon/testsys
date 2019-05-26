<?php

namespace App\Http\Controllers;

use App\Milk;
use App\Cow;
use Illuminate\Http\Request;
use App\Http\Requests\MilkRequest;

class MilkController extends Controller
{

    public function store(MilkRequest $request)
    {
        $r = $request->all();
        $checkday = Milk::whereRaw("DATE(created_at) = DATE(NOW())")->where('cow_id', '=', $r['cow_id'])->get();
        $milk = '';
        if (empty($checkday->toArray())) {
            $milk = Milk::create([
                'amount_litres' => $r['amount_litres'],
                'cow_id' => $r['cow_id']
            ]);
        } else {
            return redirect('/cow/'.$r['cow_id'].'/edit')->with([
                'milkmessage' => 'This cow\'s daily milk yield has already been submitted',
                'class' => 'notification is-danger'
            ]);
        }
        $cowDetails = Cow::findOrFail($r['cow_id']);
        if ($milk) {
            return redirect('/cow/'.$r['cow_id'].'/edit')->with([
                'milkmessage' => $r['amount_litres'].' litres of milk was successfully added',
                'class' => 'message is-success',
                'cowDetails' => $cowDetails,
            ]);
        }
    }
}

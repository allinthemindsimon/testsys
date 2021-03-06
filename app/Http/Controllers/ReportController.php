<?php

namespace App\Http\Controllers;

use DB;
use App\Milk;
use App\Cow;
use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $cows = DB::select("
            SELECT 
                cows.name as cow_name,
                cow_id,
                DATE_FORMAT(cows.created_at, '%d/%m/%Y') AS arrived,
                FORMAT(AVG(amount_litres), 3) AS average,
                AVG(amount_litres) AS averageDirty,
                FORMAT(MAX(amount_litres), 3) AS maximum
            FROM
                milks
                    JOIN
                cows ON milks.cow_id = cows.id
            GROUP BY cow_id
        ");
        $cows = collect($cows);
        return view('reports.index', ['cows' => $cows->sortByDesc('averageDirty')]);
    }

    public function show($id)
    {
        $id = (int)$id;
        $yields = Milk::with('cow')
            ->where('cow_id', '=', $id)
            ->selectRaw("created_at, cow_id, DATE_FORMAT(created_at, '%d/%m/%Y') as clean_date, FORMAT(amount_litres, 3) as amount_litres")
            ->get();
        return view('reports.show', ['yields' => $yields->sortByDesc('created_at')]);
    }
}

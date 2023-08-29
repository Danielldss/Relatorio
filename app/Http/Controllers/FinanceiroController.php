<?php

namespace App\Http\Controllers;

use App\Models\Relatorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanceiroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $financeiro = Relatorio::select(DB::raw('MONTH(data_service) AS mes, SUM(`value`) AS total_servicos'))
            ->groupBy(DB::raw('MONTH(data_service)'))
            ->get();

        return  view('financeiro.index',$financeiro);
    }
}

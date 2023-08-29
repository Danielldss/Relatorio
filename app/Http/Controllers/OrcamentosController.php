<?php

namespace App\Http\Controllers;

use App\Models\Orcamentos;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrcamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orcamentos = Orcamentos::with('produto')->get();

        $totalOrcamentos = Orcamentos::leftJoin('produtos', 'orcamentos.id', '=', 'produtos.orcamento_id')
            ->select(DB::raw('(130 + COALESCE(SUM(produtos.total_value), 0)) AS total'))
            ->value('total');

        $data['orcamentos'] = $orcamentos;
        $data['totalOrcamentos'] = $totalOrcamentos;

       return view('orcamentos.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()    {

        return view('orcamentos.createe');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $budget = [
            'request'=> $request->get('request'),
            'type' => $request->get('type'),
            'description_service' => $request->get('description_service'),
            'place' => $request->get('place'),
            'situation' => $request->get('situation'),
            'data_budget' => $request->get('data_budget'),
            'value_labor' => $request->get('value_labor'),
        ];
        Orcamentos::create($budget);

        return redirect()->route('admin.list-orcamentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $orcamentos = orcamentos::find($id)->delete();

        return redirect()->route('admin.list-orcamentos');
    }
    /**
     * visualização dos item do orçcamento
     */

    public function product($id){
        $orcamento = Orcamentos::find($id);
        $data['orcamento'] = $orcamento;
        return view('orcamentos.new-product', $data);
    }
    public function AddProduct (Request $request)
    {
        $product = $request->all();
        Product::create($product);

        return redirect()->route('admin.list-orcamentos');
    }
    public function itemOrcamento($id)
    {
        $orcamentos = Orcamentos::with('produto')->find($id);

        $totalOrcamentos = Orcamentos::leftJoin('produtos', 'orcamentos.id', '=', 'produtos.orcamento_id')
            ->select(DB::raw('(130 + COALESCE(SUM(produtos.total_value), 0)) AS total'))
            ->value('total');

        $data['orcamentos'] = $orcamentos;
        $data['totalOrcamentos'] = $totalOrcamentos;

        return view('orcamentos.itemOrcamento', $data);
    }
    public function exportToPDF($id)
    {
        $orcamentos = Orcamentos::find($id);

        $totalOrcamentos = Orcamentos::leftJoin('produtos', 'orcamentos.id', '=', 'produtos.orcamento_id')
            ->select(DB::raw('(130 + COALESCE(SUM(produtos.total_value), 0)) AS total'))
            ->value('total');

        $pdf = Pdf::loadView('orcamentos.exportToPDF',compact('orcamentos','totalOrcamentos'));

        return $pdf->stream('Orçamentos');

    }
}

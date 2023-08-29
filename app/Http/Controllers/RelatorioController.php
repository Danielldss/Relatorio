<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Relatorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class RelatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $relatorios = Relatorio::orderBy('data_service');

        if ($request->has('data') && $request->get('data') != '') {
            $relatorios = $relatorios->where('data_service', 'LIKE', '%' . $request->get('data') . '%');
        }

        $getlFiltro = $request->get('data');

        $relatoriosFiltrados = $relatorios->paginate(10);

        $totalService = $relatoriosFiltrados->sum('value');
        $typeSearch = Relatorio::distinct()->pluck('type');

        $data['typeSearch'] = $typeSearch;
        $data['totalService'] = $totalService;
        $data['relatorios'] = $relatoriosFiltrados;
        $data['filtro'] = $getlFiltro;

        return view('relatorio.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('relatorio.create');
    }

    /**
     * Cadastro de novo serviço
     */
    public function store(Request $request)
    {

        $service = $request->all();

        Relatorio::create($service);

        return redirect()->route('admin.list-service');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editService = Relatorio::find($id);

        return view('relatorio.edit' ,compact('editService'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = $request->all();

        Relatorio::find($id)->update($service);

        return  redirect()->route('admin.list-service');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Relatorio::find($id)->delete();
        return  redirect()->route('admin.list-service');
    }
    public function exportToPDF($filtro,Request $request)
    {
        $relatorios = Relatorio::orderBy('data_service');

        if ($request->has('data') && $request->get('data') != '') {
            $relatorios = $relatorios->where('data_service', 'LIKE', '%' . $request->get('data') . '%');
        }

        $relatoriosFiltrados = $relatorios->get();
        $totalService = $relatoriosFiltrados->sum('value');

        $data['totalService'] = $totalService;
        $data['relatorios'] = $relatoriosFiltrados;

        $pdf = PDF::loadView('relatorio.exportToPDF', $data);

        return $pdf->stream('Relatorio.pdf');

    }

}

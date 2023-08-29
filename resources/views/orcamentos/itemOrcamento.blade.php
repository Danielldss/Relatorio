@extends('template.master')

@section('content')
    <div class="container">

        <table style="border: 2px solid black;" class="mt-5 table table-borderless t1-logo">
            <thead class="info-margin">
                <tr>
                    <th rowspan="5">
                        <img class="logo" src="{{ asset('img/logo.jpg') }}" alt="logo">
                    </th>
                    <th class="info"> <span class="logo-title ">Oliveira Informatica </span></th>
                </tr>
                <tr>
                    <td  class="info">CNPJ/CPF: 52.524.0001-85</td>
                </tr>
                <tr>
                    <td  class="info">Rua N qd 51 lote18 </td>
                </tr>
                <tr>
                    <td  class="info">Goiania - Goias/Go - Cep: 74940560</td>
                </tr>
                <tr>
                    <td  class="info">E-mail:Danielcj_8@hotmail.com</td>
                </tr>
            </thead>
        </table>


        <table style="border: 2px solid black" class="table table-bordered">
            <thead>
                <tr>
                    <td> <span style="font-weight: bolder"> Orçamento Nº:</span>5</td>
                    <td> <span style="font-weight: bolder"> Emitido em:</span> 22/05/23</td>
                    <td><span style="font-weight: bolder"> Válido até:</span>  01/06/23</td>
                </tr>

            </thead>
        </table>

        {{-- TABLE DADOS DA EMPRESA--}}
        <table style="border: 2px solid black" class="table table-bordered orc">
            <tr>
                <thead>
                    <th colspan="8">  CLIENTE</th>
                </thead>
            </tr>
            <tr >
                <thead>
                    <th>Nome:</th>
                    <td colspan="7">MUNDIAL MIX ACABAMENTOS LTDA</td>
                </thead>
            </tr>
            <tr>
                <thead>
                    <th>Telefone:</th>
                    <td colspan="3">(62) 3945-7342</td>
                    <th>Email:</th>
                    <td colspan="3">CONTATO@MUNDIALMIX.COM.BR</td>
                </thead>
            </tr>
            <tr>
                <thead>
                    <th>CNPJ:</th>
                    <td colspan="2">10.141.800/0001-86</td>
                    <th>RG/IE:</th>
                    <td colspan="4">N/A</td>
                </thead>
            </tr>

            <tr>
                <thead>
                    <th>Endereço:</th>
                    <td colspan="7">AVENIDA  T 63, nº 3448, QD 331 LT 14, </td>
                </thead>
            </tr>

            <tr>
                <thead>
                    <th>Bairro:</th>
                    <td>JARDIM AMERICA</td>
                    <th>Cidade:</th>
                    <td>GOIANIA</td>
                    <th>Estado:</th>
                    <td>GO</td>
                    <th>Cep</th>
                    <td>74.250-320</td>
                </thead>
            </tr>
        </table>
        {{-- FIM TABLE DADOS DA EMPRESA--}}

        <table style="border: 2px solid black" class="table table-bordered ">

            <thead>
                <tr>
                    <th>ITEM</th>
                    <th>PRODUTO</th>
                    <th>SERVIÇO</th>
                    <th>QUANT.</th>
                    <th>VALOR UNITARIO</th>

                </tr>
            </thead>

                <tbody>
                @foreach($orcamentos->produto as $produto )
                    <tr>
                        <td  class="text-center">{{ $produto->id}}</td>
                        <td>{{ $produto->description_product}}</td>
                        <td>{{ $produto->description_service}}</td>
                        <td class="text-center">{{ $produto->amout_product}}</td>
                        <td  class="text-center">{{ \App\Models\Help::formatarMoeda($produto->single_value )}}</td>

                    </tr>
                @endforeach

                </tbody>


        </table>

        <table style="border: 2px solid black" class="table table-bordered ">
            <tr>
                <th>SUBTOTAL: <span style="font-weight: lighter">{{ \App\Models\Help::formatarMoeda($totalOrcamentos) }}</span></th>
                <th>DESCONTO:<span style="font-weight: lighter">R$00,00</span></th>
                <th>VALOR MÃO DE OBRA: <span style="font-weight: lighter">{{ \App\Models\Help::formatarMoeda($orcamentos->value_labor)}}</span></th>
                <th>TOTAL:<span style="font-weight: lighter">{{ \App\Models\Help::formatarMoeda($totalOrcamentos) }}</span></th>
            </tr>
        </table>

        <table style="border: 2px solid black; " class="table table-borderless ">
            <thead>
                <th class="font-title" colspan="" >Obsevações</th>
            </thead>
            <thead  class="orc2">
                  <th colspan="8">Forma de pagamento: <span class="foot-info"> </span> A combinar </th>
            </thead>
            <thead  class="orc2">
            <th>Acrécimo: <span class="foot-info"> Sem acrecimos</span> </th>
            </thead>

            <thead  class="orc2">
                <th>Desconto: <span class="foot-info"> NDA </span></th>
            </thead>

            <thead  class="orc2 til-fim">
                <th >Obs.:  <span class=" foot-info"> O atendimento aos finais de semana possui o valor dobrado </span></th>
            </thead>
        </table>

        <div class="row">
                <div class="col-2 mr-5">
                    <a  style="color: #1a202c; margin-bottom: 10px;" href="{{ route('admin.OrçamentoExport-pdf',['id' => $orcamentos->id]) }}" class="form-control badge badge-primary">Exportar para PDF</a>
                </div>
        </div>


    </div>
@endsection

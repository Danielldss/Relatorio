<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body {
            font-family: Arial, sans-serif;
        }


        table {
            width: 100%;
            border-collapse: collapse;

        }

        th, td {
            padding: 8px;
            border-bottom: 1px solid black;


        }
        td{
            padding: 30px 0 30px 0;
            text-align: center;
        }


        img{
            margin-top: -30px;!important;
            height: 100px;
            position: relative;
            bottom: -20px;

        }

        .info{
            padding: 0 !important;
        }

        .info-margin tr {
            margin-top: 20px!important;
        }

        .orc td{
            text-align: justify!important;
            padding: 5px!important;

        }
        .orc th{
            padding: 5px!important;
        }
        .orc2 th{
            text-align: left!important;
            padding: 0 30px 0 30px!important;
        }

        .foot-info{
            font-weight: lighter;
        }

        .font-title{
            text-align: center!important;
            border: 1px solid black!important;
        ;
        }
        .til-fim th{
            padding-bottom: 10px!important;

        }

        .logo-title{
            font-size: 25px;

        }

        .logo-title {
            font-size: 25px;
        }

        .tabela1{
            border: 2px solid black;
            margin-top: 80px;
        }
        .tabela2{
            border: 2px solid black;
            margin-top: 10px;

        }
        .tabela3{
            border: 2px solid black;
            margin-top: 10px;
            font-size: 15px;
        }
        .tabela4{
            border: 2px solid black;
            margin-top: 10px;
        }
        .tabela5{
            border: 2px solid black;
            margin-top: 10px;
        }

        .tabela6{
            border: 2px solid black;
            margin-top: 10px;
        }


        .tabela4 td ,th{
            border: 1px solid black;
            padding: 3px;
        }

        .tabela2 td{
            border: 1px solid black;
        }

    </style>
</head>
<body>
    <div class="container">
        <table class="tabela1" >
            <thead>
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

        <table  class="tabela2">
            <thead>
            <tr>
                <td> <span style="font-weight: bolder"> Orçamento Nº:</span>{{ $orcamentos->id }}</td>
                <td> <span style="font-weight: bolder"> Emitido em:</span> {{ date('d/m/y',strtotime($orcamentos->created_at))  }}</td>
                <td><span style="font-weight: bolder"> Válido até:</span>  {{ date('d/m/Y', strtotime('+1 month')) }}</td>
            </tr>

            </thead>
        </table>

        <table  class=" tabela3 orc">
            <thead>
                <tr>
                    <th colspan="8">  CLIENTE</th>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th>Nome:</th>
                    <td colspan="7">MUNDIAL MIX ACABAMENTOS LTDA</td>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th>Telefone:</th>
                    <td colspan="3">(62) 3945-7342</td>
                    <th>Email:</th>
                    <td colspan="3">CONTATO@MUNDIALMIX.COM.BR</td>
                </tr>
            </thead>
            <thead>
                <tr>
                    <th>CNPJ:</th>
                    <td colspan="2">10.141.800/0001-86</td>
                    <th>RG/IE:</th>
                    <td colspan="4">N/A</td>
                </tr>
            </thead>
            <thead>

            <tr>
                <th>Endereço:</th>
                <td colspan="7">AVENIDA  T 63, nº 3448, QD 331 LT 14, </td>
            </tr>
            </thead>
            <thead>
                <tr>
                    <th>Bairro:</th>
                    <td>JARDIM AMERICA</td>
                    <th>Cidade:</th>
                    <td>GOIANIA</td>
                    <th>Estado:</th>
                    <td>GO</td>
                    <th>Cep</th>
                    <td>74.250-320</td>
                </tr>
            </thead>
        </table>

        <table class="tabela4">

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
                    <td>{{ $produto->id}}</td>
                    <td>{{ $produto->description_product}}</td>
                    <td>{{ $produto->description_service}}</td>
                    <td>{{ $produto->amout_product}}</td>
                    <td>{{ $produto->single_value}}</td>


                </tr>
            @endforeach

            </tbody>
        </table>

        <table  class="tabela5">
            <tr>


                <th>VALOR MOD.: <span style="font-weight: lighter">{{ \App\Models\Help::formatarMoeda($orcamentos->value_labor)}}</span></th>
                <th>SUBTOTAL: <span style="font-weight: lighter">{{ \App\Models\Help::formatarMoeda($totalOrcamentos) }}</span></th>
                <th>DESCONTO:<span style="font-weight: lighter">R$00,00</span></th>
                <th>TOTAL:<span style="font-weight: lighter">{{ \App\Models\Help::formatarMoeda($totalOrcamentos) }}</span></th>
            </tr>
        </table>

        <table style="border: 2px solid black; " class="tabela6 orc">
            <thead>
                 <th class="font-title" colspan="8" >Obsevações</th>
            </thead>
            <thead  class="orc2">
                 <th colspan="8">Forma de pagamento: <span class="foot-info">Opção de pagamento via Pix ou boleto  </span></th>
            </thead>
            <thead  class="orc2">
                <th colspan="8">Acrécimo: <span class="foot-info"> Sem acrecimos</span> </th>
            </thead>

            <thead  class="orc2">
                <th colspan="8">Desconto: <span class="foot-info">N/A</span></th>
            </thead>

            <thead  class="orc2 til-fim">
                <th colspan="8">Obs.:  <span class=" foot-info">  O atendimento aos finais de semana possui o valor dobrado </span></th>
            </thead>
        </table>

    </div>
</body>
</html>



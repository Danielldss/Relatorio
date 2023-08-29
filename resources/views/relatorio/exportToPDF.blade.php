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

        .tp-pc{

            font-weight: bolder;
            color: green;
        }
        .tp-rt{

            font-weight: bolder;
            color: Blue;
        }

        .tt1{
            color: #333;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 40px;
            text-align: center;
            text-decoration: underline;
        }
    </style>
</head>
<body>
<?php
$dataMes = ['01'=>'Janeiro','02'=>'Fevereiro','03'=>'Março','04'=>'Abril','05'=>'Maio','06'=>'Junho',
    '07'=>'Julho','08'=>'Agosto','09'=>'Setembro','10'=>'Outubro','11'=>'Novembro','12'=>'Dezembro' ];
?>
<h3 class="tt1">Mundial-Mix  <br>
    Relatório de  {{ $dataMes[date('m', strtotime('m'))] }}
</h3>
<table>
    <thead>
    <tr>

        <th>Solicitante</th>
        <th>Tipo</th>
        <th>Local</th>
        <th>Data Serviço</th>
        <th>Valor</th>
        <th>Situação</th>
        <th>Serviço/Aquisição</th>
    </tr>
    </thead>
    <tbody>
    @foreach($relatorios as $service)
        <tr>

            <td>{{ $service->request }}</td>
            <td>{{ \App\Models\Help::traduzirPalavra($service->type)}}</td>
            <td>{{ $service->place }}</td>
            <td>{{ date('d/m/y',strtotime($service->data_service))  }}</td>
            <td>{{ \App\Models\Help::formatarMoeda( $service->value) }}</td>
            <td style="font-weight: bolder;color: red">{{ $service->situation == 'pendent' ? 'Pendente': 'Pago' }}</td>
            <td>{{ $service->service }}</td>
        </tr>
    @endforeach
    <tr>
        <th   colspan = 6 ></th>
        <th  colspan = 1>TOTAL: {{\App\Models\Help::formatarMoeda($totalService)}}</th>
    </tr>



    </tbody>

</table>
</body>
</html>

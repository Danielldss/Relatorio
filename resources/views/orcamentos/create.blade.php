@extends('template.master')
@section('content')

    <div class="container">
        <div class="base">
            <div>
                <h3 class="til-relatorio">Novo Orçamento</h3>
            </div>
            <a class="bnt-voltar" href="{{ route('admin.list-service') }}">  <i style="font-size: 25px;margin-left: 115px" class="fas fa-arrow-left"></i> </a>

            <form action="{{route('admin.store-orcamentos')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-3">
                        <label class="tt2" for="">Solicitante</label><br>
                        <input  require class="form-control" type="text" name="request" placeholder="Nome"><br>
                    </div>
                    <div class="col-3">
                        <label class="tt2" for="">Data do Orçamento</label><br>
                        <input  require class="form-control" type="date" name="data_service"><br>
                    </div>
                    <div class="col-3">
                        <label class="tt2" for="">Tipo</label><br>
                        <select class="form-control" name="type" id="">
                            <option value="">Selecione</option>
                            <option value="remote">Remoto</option>
                            <option value="in_person">Presencial</option>
                        </select><br>
                    </div>
                </div>

                <div style="margin-top: -15px" class="row mb-4">
                    <div class="col-2"></div>
                    <div class="col-4">
                        <label class="tt2" for="">Descrição do Serviço</label><br>
                        <input  require class="form-control" type="text" name="description_service" placeholder="Descrição ..."><br>
                    </div>

                    <div class="col-3">
                        <label class="tt2" for="">Local</label><br>
                        <select class="form-control" name="place" id="">
                            <option value="">Selecione</option>
                            <option value="mix">Mix</option>
                            <option value="design">Design</option>
                            <option value="shed">Galpão</option>
                        </select><br>
                    </div>
                    <div class="col-2">
                        <label class="tt2" for="">Valor Mão de obra</label><br>
                        <input  require class="form-control" type="text" name="value_labor" placeholder="150,00"><br>
                    </div>

                </div>
                {{-- Produto adicional--}}

                <div class="product-line">
                    <div class="row clone">
                        <div class="col-2">
                            <input  class="form-control" type="hidden"  value="pendent" name="situation"><br>
                        </div>
                        <div class="col-1">
                            <label class="tt2" for="">Qtd.</label><br>
                            <input  require class="form-control" type="number" name="amout_product"><br>
                        </div>
                        <div class="col-4">
                            <label class="tt2" for="">Descrição do Produto</label><br>
                            <input  require class="form-control" type="text" name="description_product" placeholder="Produto"><br>
                        </div>

                        <div class="col-2">
                            <label class="tt2" for="">Valor. U </label><br>
                            <input  require class="form-control" type="text" name="single_value" placeholder="Produto"><br>
                        </div>

                        <div class="col-2">
                            <label class="tt2" for="">Valor T. </label><br>
                            <input  require class="form-control" type="text" name="total_value" placeholder="100"><br>
                        </div>

                    </div>

                </div>
                {{--Fim de produto adicional--}}

                <div class="row">
                    <div class="col-2 "></div>
                    <div class="col-2" style="text-align: left">
                        <button style="color: #1a202c" type="submit" class="form-control badge badge-primary">Cadastrar</button>
                    </div>
                    <div class="col-2" style="text-align: left">
                        <button style="color: #1a202c" type="button" onclick="addProductLine()" class="form-control badge badge-primary">Adicionar Produto</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


@endsection

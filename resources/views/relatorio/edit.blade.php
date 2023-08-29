@extends('template.master')

    @section('content')
        <div class="container">
            <div class="base">
                <div>
                    <h3 class="til-relatorio">Editar Serviço</h3>
                </div>
                <a class="bnt-voltar" href="{{ route('admin.list-service') }}">  <i style="font-size: 25px;margin-left: 115px" class="fas fa-arrow-left"></i></a>
                <form action="{{route('admin.update-service', ['id' => $editService->id])}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-3">
                            <label class="tt2" for="">Solicitante</label><br>
                            <input class="form-control" type="text" name="request" value="{{ $editService->request }}" placeholder="Nome"><br>
                        </div>
                        <div class="col-3">
                            <label class="tt2" for="">Data do Serviço</label><br>
                            <input  class="form-control" type="date" value="{{ $editService->data_service }}" name="data_service"><br>
                        </div>
                        <div class="col-3">
                            <label class="tt2" for="">Tipo</label><br>
                            <select class="form-control" name="type" id="">
                                <option value="">Selecione</option>
                                <option value="remote"{{ $editService->type == 'remote' ? 'selected' : '' }}>Remoto</option>
                                <option value="in_person"{{ $editService->type == 'in_person' ? 'selected' : '' }}>Presencial</option>
                            </select><br>
                        </div>
                    </div>

                    <div style="margin-top: -15px" class="row">
                        <div class="col-2"></div>
                        <div class="col-4">
                            <label class="tt2" for="">Descrição do Serviço</label><br>
                            <input class="form-control" type="text" name="service" value="{{ $editService->service }}" placeholder="Descrição ..."><br>
                        </div>

                        <div class="col-3">
                            <label class="tt2" for="">Local</label><br>
                            <select class="form-control" name="place" id="place">
                                <option value="">Selecione</option>
                                <option value="mix" {{ $editService->place == 'mix' ? 'selected' : '' }}>Mundial - Mix</option>
                                <option value="design" {{ $editService->place == 'design' ? 'selected' : '' }}>Mundial - Design</option>
                                <option value="shed" {{ $editService->place == 'shed' ? 'selected' : '' }}>Galpão - Mix</option>
                            </select><br>
                        </div>
                        <div class="col-2">
                            <label class="tt2" for="">Valor</label><br>
                            <input  class="form-control" type="number" name="value" value="{{ ($editService->value)  }}" placeholder="150,00"><br>
                        </div>
                        <div>
                            <input  class="form-control" type="hidden" name="situation" value="pendent">
                        </div>

                        <div class="col-2"></div>
                        <div class="col-6" style="text-align: left">
                            <input type="submit" value="Atualizar">

                        </div>

                    </div>
                </form>

            </div>
        </div>
    @endsection

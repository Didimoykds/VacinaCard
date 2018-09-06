<div class="panel panel-default">
    <div class="panel-body">
        <h2 class="text-center">Cadastro de Vacinas</h2>
        <div class="panel-body">
            <div class="col-md-12" style="max-height:250px;overflow-y:scroll;">
                <div class="row table">
                  <div class="col-md-3" style="text-align:center;">
                    Nome
                  </div>
                  <div class="col-md-3" style="text-align:center;">
                    Descrição
                  </div>
                  <div class="col-md-3" style="text-align:center;">
                    Recorrência
                  </div>
                  <div class="col-md-3" style="text-align:center;">
                  </div>
                </div>
                <hr style="color:black; background-color:black;height:2px;"/>
                @if(isset($vaccines))
                  @foreach($vaccines as $vaccine)
                    <div class="row table">
                      <form method="POST" action="{{route('update-vaccine', ['id' => $vaccine['id']])}}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="col-md-3">
                            <input type="text" class="form-control" name="vaccine[nome]" value="{{$vaccine['nome']}}" required>
                          </div>
                          <div class="col-md-3">
                            <input type="text" class="form-control" name="vaccine[descricao]" value="{{$vaccine['descricao']}}" required>
                          </div>
                          <div class="col-md-3">
                            <input type="text" class="form-control" name="vaccine[recorrencia]" value="{{$vaccine['recorrencia']}}" required>
                          </div>
                          <div class="col-md-1">
                            <input type="submit" class="btn btn-warning" value="Atualizar" onclick="return confirm('Você tem certeza que quer atualizar essa vacina?');">
                          </div>
                        </form>
                        <div class="col-md-1">
                          <form method="POST" action="{{route('delete-vaccine', ['id' => $vaccine['id']])}}">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-danger" value="Deletar" onclick="return confirm('Você tem certeza que quer deletar essa vacina?');">
                           </form>
                        </div>
                      </div>
                    <hr/>
                  @endforeach
                @endif
            </div>
            <hr/>
            <div class="form-horizontal">
                <form method="POST" action="{{route('create-vaccine')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <label for="nome" class="control-label">Nome<b style="color:red;">*</b></label>
                            <input type="text" id="nome" class="form-control" name="vaccine[nome]" value="{{old('vaccine[nome]')}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="descricao" class="control-label">Descrição<b style="color:red;">*</b></label>
                            <input type="text" id="descricao" class="form-control" name="vaccine[descricao]" value="{{old('vaccine[descricao]')}}" required>
                        </div>
                        <div class="col-md-6">
                            <label for="recorrencia" class="control-label">Recorrência<b style="color:red;">*</b></label>
                            <input type="text" id="recorrencia" class="form-control" name="vaccine[recorrencia]" value="{{old('vaccine[recorrencia]')}}" required>
                        </div>
                        <div class="col-md-6 col-md-offset-3" style="margin-top:20px;">
                            <input type="submit" class="form-control btn btn-primary" value="Cadastrar"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

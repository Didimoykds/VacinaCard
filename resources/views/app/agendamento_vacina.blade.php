<div class="panel panel-default">
    <div class="panel-body">
        <h2 class="text-center">Cadastro de Vacinas</h2>
        <div class="panel-body">
            <div class="col-md-12" style="max-height:250px;overflow-y:scroll;">
                <div class="row table">
                  <div class="col-md-3" style="text-align:center;">
                    Data Marcada
                  </div>
                  <div class="col-md-2" style="text-align:center;">
                    Vacina
                  </div>
                  <div class="col-md-2" style="text-align:center;">
                    Local
                  </div>
                  <div class="col-md-2" style="text-align:center;">
                    Observação
                  </div>
                  <div class="col-md-2" style="text-align:center;">
                  </div>
                </div>
                <hr style="color:black; background-color:black;height:2px;"/>
                @if(isset($scheduleCards))
                  @foreach($scheduleCards as $schedule)
                    <div class="row table">
                      <form method="POST" action="{{route('update-schedule', ['id' => $schedule['id']])}}">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="col-md-3">
                            <input type="date" class="form-control" name="schedule[dataMarcada]" value="{{$schedule['dataMarcada']}}" required>
                          </div>
                          <div class="col-md-2">
                            <input type="text" class="form-control" value="{{$schedule['nome_vacina']}}" disabled>
                          </div>
                          <div class="col-md-2">
                            <input type="text" class="form-control" name="schedule[local]" value="{{$schedule['local']}}" required>
                          </div>
                          <div class="col-md-2">
                            <input type="text" class="form-control" name="schedule[observacao]" value="{{$schedule['observacao']}}" required>
                          </div>
                          <div class="col-md-1">
                            <input type="submit" class="btn btn-warning" value="Atualizar" onclick="return confirm('Você tem certeza que quer atualizar esse agendamento?');">
                          </div>
                        </form>
                        <div class="col-md-1">
                          <form method="POST" action="{{route('delete-schedule', ['id' => $schedule['id']])}}">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="submit" class="btn btn-danger" value="Deletar" onclick="return confirm('Você tem certeza que quer deletar esse agendamento?');">
                           </form>
                        </div>
                        <div class="col-md-1">
                            <form method="POST" action="{{route('complete-schedule', ['id' => $schedule['id']])}}">
                                <input type="hidden" name="_method" value="PUT" >
                                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                                <input type="hidden" name="id" value = "{{$schedule['id']}}">
                                <input type="hidden" name="form_type" value = "updateSchedule">
                                <input class="btn btn-success" value="Concluido" style="cursor: pointer;" type="submit" >
                            </form>
                        </div>
                      </div>
                    <hr/>
                  @endforeach
                @endif
            </div>
            <hr/>
            <div class="form-horizontal">
                <form method="POST" action="{{route('create-schedule')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                    <input type="hidden" name="form_name" value="agendarVacina" />
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <label for="vaccine" class="control-label">Vacina</label>
                            <select class="form-control" id="vaccine" name="schedule[fk_vaccine]">
                                @foreach($vaccines as $vaccine)
                                    <option value="{{$vaccine['id']}}">{{$vaccine['nome']}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="local" class="control-label">Local</label>
                            <input type="text" id="local" class="form-control" name="schedule[local]" required>
                        </div>
                        <div class="col-md-6">
                            <label for="observacao" class="control-label">Observação</label>
                            <input type="text" id="observacao" class="form-control" name="schedule[observacao]" required>
                        </div>
                        <div class="col-md-6">
                            <label for="dataVacina" class="control-label">Data da Vacina</label>
                            <input type="date" id="dataVacina" class="form-control" name="schedule[dataMarcada]" required>
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

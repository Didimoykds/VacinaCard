<form method="post">
    <div class="panel panel-default">
        <div class="panel-heading text-center"><b>Cartão de Vacina</b></div>
        <div class="panel-body">
            <h2 class="text-center">Tabela de Vacinas</h2>
            <div class="panel-body">
                <div class="col-md-12" style="max-height:250px;overflow-y:scroll;">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Data Marcada</th>
                                <th>Vacina</th>
                                <th>Local</th>
                                <th>Observação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($scheduleCards))
                                @foreach($scheduleCards as $scheduleCard)
                                    <tr>
                                        <td>{{$scheduleCard['schedule_date']}}</td>
                                        <td>{{$scheduleCard['vaccine_name']}}</td>
                                        <td>{{$scheduleCard['local']}}</td>
                                        <td>{{$scheduleCard['observation']}}</td>
                                        <td>
                                            <form method="POST">
                                                <input type="hidden" name="_method" value="DELETE" >
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                                                <input type="hidden" name="id" value = "{{$scheduleCard['id']}}">
                                                <input type="hidden" name="form_type" value = "deleteSchedule">
                                                <input
                                                    onclick="return confirm('Você tem certeza que quer deletar esse agendamento?');"
                                                    class="btn btn-danger"
                                                    value="Deletar"
                                                    style="cursor: pointer;"
                                                    type="submit"
                                                >
                                            </form>
                                        </td>
                                        <td>
                                            <form method="POST">
                                                <input type="hidden" name="_method" value="PUT" >
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                                                <input type="hidden" name="id" value = "{{$scheduleCard['id']}}">
                                                <input type="hidden" name="form_type" value = "updateSchedule">
                                                <input class="btn btn-success" value="Confirmar" style="cursor: pointer;" type="submit" >
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <hr/>
                <div class="form-horizontal">
                    <form method="POST" action="{{route('menu')}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" >
                        <input type="hidden" name="form_name" value="agendarVacina" />

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <label for="vaccine" class="control-label">Vacina</label>
                                <select class="form-control" id="vaccine" name="fk_vaccine">
                                    @foreach($vaccines as $vaccine)
                                        <option value="{{$vaccine['id']}}">{{$vaccine['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="local" class="control-label">Local</label>
                                <input type="text" id="local" class="form-control" name="local" required>
                            </div>
                            <div class="col-md-6">
                                <label for="observation" class="control-label">Observação</label>
                                <input type="text" id="observation" class="form-control" name="observation" required>
                            </div>
                            <div class="col-md-6">
                                <label for="dataVacina" class="control-label">Data da Vacina</label>
                                <input type="date" id="dataVacina" class="form-control" name="schedule_date" required>
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
</form>

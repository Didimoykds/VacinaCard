<form method="post">
    <div class="panel panel-default">
        <div class="panel-heading text-center"><b>Cadastro de Vacinas</b></div>
        <div class="panel-body">
            <h2 class="text-center">Tabela de Vacinas</h2>
            <div class="panel-body">
                <div class="col-md-12" style="max-height:250px;overflow-y:scroll;">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Descrição</th>
                                <th>Recorrência</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(isset($vaccines))
                                @foreach($vaccines as $vaccine)
                                    <tr>
                                        <td>{{$vaccine['name']}}</td>
                                        <td>{{$vaccine['description']}}</td>
                                        <td>{{$vaccine['recurrence']}}</td>
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
                        <input type="hidden" name="form_name" value="cadastrarVacina" />

                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}" />
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <label for="name" class="control-label">Nome</label>
                                <input type="text" id="name" class="form-control" name="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="description" class="control-label">Descrição</label>
                                <input type="text" id="description" class="form-control" name="description" required>
                            </div>
                            <div class="col-md-6">
                                <label for="recurrence" class="control-label">Recorrência</label>
                                <input type="text" id="recurrence" class="form-control" name="recurrence" required>
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

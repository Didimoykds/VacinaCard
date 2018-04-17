<form method="post">
    <div class="panel panel-default">
        <div class="panel-body">
            <h2 class="text-center">Cadastro de Vacinas</h2>
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
                                        <td>{{$vaccine['nome']}}</td>
                                        <td>{{$vaccine['descricao']}}</td>
                                        <td>{{$vaccine['recorrencia']}}</td>
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
                                <label for="nome" class="control-label">Nome</label>
                                <input type="text" id="nome" class="form-control" name="nome" required>
                            </div>
                            <div class="col-md-6">
                                <label for="descricao" class="control-label">Descrição</label>
                                <input type="text" id="descricao" class="form-control" name="descricao" required>
                            </div>
                            <div class="col-md-6">
                                <label for="recorrencia" class="control-label">Recorrência</label>
                                <input type="text" id="recorrencia" class="form-control" name="recorrencia" required>
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

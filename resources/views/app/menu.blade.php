@extends('layouts.app')

@section('content')
@if( null !== session('saveOrderCartao'))
    <script>
        alert('Salvo com sucesso!');
    </script>
@endif
@if( null !== session('saveOrderAgenda'))
    <script>
        alert('Agendado com sucesso!');
    </script>
@endif
@if( null !== session('saveOrderVacina'))
    <script>
        alert('Vacina salva com sucesso!');
    </script>
@endif
@if( null !== session('scheduleDeleteOrder'))
    <script>
        alert('Agendamento deletado!');
    </script>
@endif
@if( null !== session('scheduleUpdateOrder'))
    <script>
        alert('Agendamento Completado!');
    </script>
@endif

<div class="tab-content">
    <div class="container">
        <div class="panel panel-default" style="padding:0px">
            <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#vacinas">Cartão de Vacina</a></li>
                <li><a data-toggle="pill" href="#agendamento">Agendamento</a></li>
                <li><a data-toggle="pill" href="#vacina">Cadastrar Vacina</a></li>
            </ul>
        </div>
        <div class="panel panel-default" style="padding:0px">
            <div class="tab-content">
                <div id="vacinas" class="tab-pane active">
                    @include('app.cartao_vacina')
                </div>
                <div id="agendamento" class="tab-pane fade">
                    @include('app.agendamento_vacina')
                </div>
                <div id="vacina" class="tab-pane fade">
                    @include('app.cadastro_vacina')
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

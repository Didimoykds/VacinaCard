@extends('layouts.app')

@section('content')
@if( null !== session('saveOrder'))
    <script>
        alert('Salvo com sucesso!');
    </script>
@endif
<div class="tab-content">
    <div class="container">
        <div class="panel panel-default" style="padding:0px">
            <ul class="nav nav-pills">
                <li class="active"><a data-toggle="pill" href="#vacinas">Cartão de Vacina</a></li>
                <li><a data-toggle="pill" href="#agendamento">Agendamento</a></li>
            </ul>
        </div>
        <div class="panel panel-default" style="padding:0px">
            <div class="tab-content">
                <div id="vacinas" class="tab-pane active">
                    @include('app.cartao_vacina')
                </div>
                <div id="agendamento" class="tab-pane fade">
                    <h3>Menu 2</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

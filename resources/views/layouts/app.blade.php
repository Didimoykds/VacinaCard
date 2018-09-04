<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
    #app{
        min-height: 100%;
    }
    html {
        height: 100%;
    }
    body {
        height: 100%;
        margin: 0;
        background-repeat: no-repeat !important;
        background-attachment: fixed !important;
    }
    #footer{
        text-align:center;
        height:50px;
        width:100%;
        position:relative;
        margin:0px;
    }
    #logout-label:hover{
       background-color: WHITE;
       color:rgb(100,100,200);
    }
    @media (min-width : 768px)
    {
        #logo-img{
            width:170px;
        }
        #nav{
            height:90px;
        }
        #user1{
            display:none;
        }
        #app{
            padding-top:12%;
        }
    }
    @media (max-width : 768px)
    {
        /*#logo-img{
            display:none;
        }*/
        #logo-img{
            max-width: 80px;
            height: auto;
        }
        #user2{
            display:none;
        }
        #user1{
            float:right;
        }
        .logout-label{
            padding-top:0px !important;
            padding-bottom:0px !important;
            margin-top:0px !important;
            margin-bottom:0px !important;
        }

        #app{
            padding-top:28%;
        }
    }
    fieldset
    {
        border: 1px solid #ddd !important;
        margin: 0;
        xmin-width: 0;
        padding: 10px;
        position: relative;
        border-radius:4px;
        background-color:#f5f5f5;
        padding-left:10px!important;
    }

    legend
    {
        font-size:14px;
        font-weight:bold;
        margin-bottom: 0px;
        width: 35%;
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px 5px 5px 10px;
        background-color: #ffffff;
    }

    </style>

    <title>{{ config('app.name', 'VacinaCard') }}</title>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body style="background: linear-gradient(to bottom, rgba(179,220,237,1) 0%, rgba(223,238,242,1) 50%, rgba(188,224,238,1) 100%); !important;">
    <div id="app">
        <nav class="navbar navbar-default navbar-fixed-top" id="nav">
            <div class="container text-center">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('menu') }}">
                        <img src="{{asset('imgs/VacinaCard-logo.jpg')}}" id="logo-img" alt="VacinaCard"/>
                    </a>
                    @guest
                    @else
                    <a id="user1" href="#" class="navbar-brand text-center">
                        <i class="fa fa-user-o" aria-hidden="true"></i>
                        @if(substr(Auth::user()->nome, 0, strpos(Auth::user()->nome, ' ')))
                            {{substr(Auth::user()->nome, 0, strpos(Auth::user()->nome, ' '))}}
                        @else
                            {{Auth::user()->nome}}
                        @endif
                    </a>
                    @endguest
                </div>
                <div class="navbar-collapse text-center" id="app-navbar-collapse">
                    @guest
                    @else
                        <ul class="nav navbar-nav navbar-right logout-label">
                            <a id="user2" href="#" class="navbar-brand">
                                <i class="fa fa-user-o" aria-hidden="true"></i> {{ Auth::user()->nome }}
                            </a>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <strong>MENU</strong> <i class="fa fa-plus-circle" aria-hidden="true"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                <li class="text-center">
                                        <a href="#" data-toggle="modal" data-target="#exampleModalLong"><i class="fa fa-envelope" aria-hidden="true"></i>  Solicitar Nova Vacina</a>
                                    </li>
                                    <li class="text-center">
                                        <a href="{{ route('settings') }}"><i class="fa fa-cog" aria-hidden="true"></i>  Configurações</a>
                                    </li>
                                    <li class="text-center">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <b><i class="fa fa-sign-out" aria-hidden="true"></i>  Sair</b>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    @endguest
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            <h5 class="modal-title" id="exampleModalLongTitle">Título</h5>
            <input type="text" placeholder="Título"/>
        </div>
        <div class="modal-body">
            <h5 class="modal-title" id="exampleModalLongTitle">Descrição</h5>
            <textarea style="width:550px;"></textarea>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="alert('Enviado com Sucesso!')">Enviar</button>
        </div>
        </div>
    </div>
    </div>
    <footer id='footer' class="navbar-default">
        <br/>
        © Company 2017
    </footer>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

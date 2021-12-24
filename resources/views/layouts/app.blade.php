<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yapılacaklar</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
        {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    </head>
    <style>
        .navbar-default {
            background:#fff;
            border-bottom:none;
            box-shadow: rgb(172 172 172 / 24%) 0px 3px 8px;
            padding-bottom: 7.5px;
        }
        .btn-primary,.btn-primary:hover{
            background-color: #f15c28;
            border-color: #f15c28;
        }
    </style>
    <body id="app-layout">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- logo -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img style='display:inline-block' width='30px' src="https://www.webtures.com/assets/images/icons/webtures-180.png" alt="">
                        <span>Yapılacaklar</span>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication sayfaları -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Oturum aç</a></li>
                            <li><a href="{{ url('/register') }}">Hesap Oluştur</a></li>
                        @else

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Yapılacak İşler <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="{{ Request::is('tasks') ? 'active' : '' }}"><a href="{{ url('/tasks') }}">Anasayfa</a></li>
                                    <li class="{{ Request::is('tasks-all') ? 'active' : '' }}"><a href="{{ url('/tasks-all') }}">Görevleri listele</a></li>
                                    <li class="{{ Request::is('tasks-incomplete') ? 'active' : '' }}"><a href="{{ url('/tasks-incomplete') }}"><i class="fa fa-btn fa-square-o" aria-hidden="true"></i> Bitmeyenler</a></li>
                                    <li class="{{ Request::is('tasks-complete') ? 'active' : '' }}"><a href="{{ url('/tasks-complete') }}"><i class="fa fa-btn fa-check-square-o" aria-hidden="true"></i> Tamamlananlar</a></li>
                                    <li class="{{ Request::is('tasks/create') ? 'active' : '' }}"><a href="{{ url('/tasks/create') }}"><i class="fa fa-btn fa-plus" aria-hidden="true"></i> Yeni İş Ekle</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out" aria-hidden="true"></i>Çıkış yap</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

        {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

        @yield('scripts')

    </body>
</html>
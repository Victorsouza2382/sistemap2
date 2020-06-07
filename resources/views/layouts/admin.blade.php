<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Estoque Vendas</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
    <script src="https://kit.fontawesome.com/778c80b037.js" crossorigin="anonymous"></script>


</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">

        <!-- Logo -->
        <a href="/home" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>E</b>V</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Estoque Vendas</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Navegação</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- User Account: style can be found in dropdown.less -->

                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">

                            <p>
                                victorsouza2382.github.io - Desenvolvimento de Sistemas
                                Sistema atual 'Estoque Vendas'.
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">

                            <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Fechar</a>
                            </div>
                        </li>
                    </ul>
,,
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Sair') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->

            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header"></li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>Estoque</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/produtos"><i class="fa fa-circle-o"></i> Produtos</a></li>
                        <li><a href="/categorias"><i class="fa fa-circle-o"></i> Categorias</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fas fa-user-friends"></i>
                        <span>Pessoas</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/clientes"><i class="fa fa-circle-o"></i> Clientes</a></li>
                        <li><a href="/fornecedores"><i class="fa fa-circle-o"></i> Fornecedores</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Vendas</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/vendas"><i class="fa fa-circle-o"></i> Vendas</a></li>

                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fas fa-store-alt fa-1x"></i>
                        <span>Filiais</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Lojas</a></li>

                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Login</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="configuracao/usuario"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </aside>


    <!--Contedo-->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Sistema de Vendas</h3>
                            <div class="box-tools pull-right">
                                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                </button>

                                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <!--Conteudo-->
                                @yield('conteudo')

                                <!--Fim Conteudo-->
                                </div>
                            </div>
                        </div><!-- /.box -->
                    </div>
                </div><!-- /.row -->
            </div><!-- /.box-body -->
        </section>
    </div><!-- /.col -->

    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<!--Fim-Contenido-->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        AdminLTE
    </div>
    <strong>Copyright &copy; 2020 <a href="http://victorsouza2382.github.io">Victor Souza</a>.</strong> Todos os
    direitos reservados.
</footer>


<!-- jQuery -->
<script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
<!-- Bootstrap  -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/app.min.js')}}"></script>
<!-- Ajax -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"
        integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i"
        crossorigin="anonymous"></script>
</body>
</html>

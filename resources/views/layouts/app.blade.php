<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MenuNaNet</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('Backend/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('Backend/dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link" data-toggle="dropdown" href="{{ route('logout') }}">
                    SAIR
                </a>
            </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: one;">
                {{ csrf_field() }}
            </form>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="../../index3.html" class="brand-link">
{{--            <img src="../../dist/img/AdminLTELogo.png"--}}
{{--                 alt="AdminLTE Logo"--}}
{{--                 class="brand-image img-circle elevation-3"--}}
{{--                 style="opacity: .8">--}}
            <span class="brand-text font-weight-light">MenuNaNet</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{url("user.png")}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
{{--                    <li class="nav-item has-treeview">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="nav-icon fas fa-tachometer-alt"></i>--}}
{{--                            <p>--}}
{{--                                Dashboard--}}
{{--                                <i class="right fas fa-angle-left"></i>--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <ul class="nav nav-treeview">--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="../../index.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Dashboard v1</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="../../index2.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Dashboard v2</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="nav-item">--}}
{{--                                <a href="../../index3.html" class="nav-link">--}}
{{--                                    <i class="far fa-circle nav-icon"></i>--}}
{{--                                    <p>Dashboard v3</p>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    @if(\Illuminate\Support\Facades\Auth::user()->id == 1)
                    <li class="nav-item">
                        <a href="{{route('dashboard.index')}}" class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('dashboard.restaurants.create')}}" class="nav-link {{ (request()->is('dashboard/restaurants/newRestaurant')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Criar Restaurante
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('dashboard.restaurants.index')}}" class="nav-link {{ (request()->is('dashboard/restaurants')) ? 'active' : '' }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                Meus Restaurantes
                            </p>
                        </a>
                    </li>
                    @else
                        <li class="nav-item">
                            <a href="{{route('dashboard.index')}}" class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-chart-pie"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('dashboard.restaurants.index')}}" class="nav-link {{ (request()->is('dashboard/restaurants')) ? 'active' : '' }}">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Meus Restaurantes
                                </p>
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    @yield('content')

    <footer class="main-footer">
{{--        <div class="float-right d-none d-sm-block">--}}
{{--            <b>Version</b> 3.0.4--}}
{{--        </div>--}}
        <strong>Copyright &copy; 2020 . Rafael Pereira</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('Backend/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('Backend/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('Backend/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('Backend/dist/js/demo.js')}}"></script>

<div class="modal fade" id="update">
    <div class="modal-dialog">
        <form action="{{route('dashboard.restaurants.menusUpdate')}}" method="POST">
            @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar Menu</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <input value="" name="menuID" type="hidden" class="form-control">
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="nameEN">Nome EN</label>
                    <input name="nameen" type="text" class="form-control" id="nameEN" placeholder="Nome em Ingles">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

{{--ELIMINAR MENU--}}
<div class="modal fade" id="deleteMenu">
    <div class="modal-dialog">
        <form action="{{route('dashboard.restaurants.menusDelete')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Eliminar Menu</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input value="" name="menuID" type="hidden" class="form-control">
                <div class="modal-body">
                    Tem a certeza que deseja eliminar este menu?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

{{--INSERIR MENU--}}
<div class="modal fade" id="newMenu">
    <div class="modal-dialog">
        <form action="{{route('dashboard.restaurants.menusStore')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Novo Menu</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input value="" name="restaurantid" type="hidden" class="form-control">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input name="name" type="text" class="form-control" id="name" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label for="nameEN">Nome EN</label>
                        <input name="nameen" type="text" class="form-control" id="nameEN" placeholder="Nome em Ingles">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Criar</button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->







{{--INSERIR PRATO--}}
<div class="modal fade" id="newDish">
    <div class="modal-dialog">
        <form action="{{route('dashboard.restaurants.dishesStore')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Novo Prato</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input value="" name="menuid" type="hidden" class="form-control">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input required name="name" type="text" class="form-control" id="name" placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <label for="nameEN">Nome EN</label>
                        <input name="nameen" type="text" class="form-control" id="nameEN" placeholder="Nome em Ingles">
                    </div>
                    <div class="form-group">
                        <label for="description">Descrição</label>
                        <input name="description" type="text" class="form-control" id="description" placeholder="Descrição">
                    </div>
                    <div class="form-group">
                        <label for="descriptionEN">Descrição em Ingles</label>
                        <input name="descriptionEN" type="text" class="form-control" id="descriptionEN" placeholder="Descrição em Ingles">
                    </div>
                    <div class="form-group">
                        <label for="dishCode">Código do Prato</label>
                        <input name="dishCode" type="text" class="form-control" id="dishCode" placeholder="Código do Prato">
                    </div>
                    <div class="form-group">
                        <label for="price">Preço</label>
                        <input name="price" type="text" class="form-control" id="price" placeholder="Preço">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Criar</button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


{{--ELIMINAR DISH--}}
<div class="modal fade" id="deleteDish">
    <div class="modal-dialog">
        <form action="{{route('dashboard.restaurants.dishesDelete')}}" method="POST">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Eliminar Prato</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input value="" name="dishID" type="hidden" class="form-control">
                <div class="modal-body">
                    Tem a certeza que deseja eliminar este prato?
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<script>
    $('#update').on('show.bs.modal', function(e) {

        //get data-id attribute of the clicked element
        var name = $(e.relatedTarget).data('name');
        var nameEN = $(e.relatedTarget).data('nameen');
        var menuID = $(e.relatedTarget).data('menuid');

        //populate the textbox
        $(e.currentTarget).find('input[name="name"]').val(name);
        $(e.currentTarget).find('input[name="nameen"]').val(nameEN);
        $(e.currentTarget).find('input[name="menuID"]').val(menuID);

    });

    $('#deleteMenu').on('show.bs.modal', function(e) {

        //get data-id attribute of the clicked element
        var menuID = $(e.relatedTarget).data('menuid');

        //populate the textbox
        $(e.currentTarget).find('input[name="menuID"]').val(menuID);

    });

    $('#newMenu').on('show.bs.modal', function(e) {

        //get data-id attribute of the clicked element
        var restaurantID = $(e.relatedTarget).data('restaurantid');

        //populate the textbox
        $(e.currentTarget).find('input[name="restaurantid"]').val(restaurantID);

    });



    $('#newDish').on('show.bs.modal', function(e) {

        //get data-id attribute of the clicked element
        var menuID = $(e.relatedTarget).data('menuid');

        //populate the textbox
        $(e.currentTarget).find('input[name="menuid"]').val(menuID);

    });





    $('#deleteDish').on('show.bs.modal', function(e) {

        //get data-id attribute of the clicked element
        var dishID = $(e.relatedTarget).data('dishid');

        //populate the textbox
        $(e.currentTarget).find('input[name="dishID"]').val(dishID);

    });
</script>
</body>
</html>

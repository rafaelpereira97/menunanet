@extends('layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Menus</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listagem dos Menus</h3>
                    <a href="#" data-restaurantid="{{$restaurant}}" data-toggle="modal" data-target="#newMenu" class="btn btn-primary float-right">Novo Menu</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Nome - English</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($menus as $menu)
                            <tr>
                                <td>{{$menu->name}}</td>
                                <td>{{$menu->nameEN ?? "N/A"}}</td>
                                <td>
                                    <div class="float-right">
                                        <a href="{{route('dashboard.restaurants.dishesIndex',$menu->id)}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                        <a data-name="{{$menu->name}}" data-nameen="{{$menu->nameEN}}" data-menuid="{{$menu->id}}" href="#" data-toggle="modal" data-target="#update" class="btn btn-primary"><i class="fa fa-cog"></i></a>
                                        <a data-menuid="{{$menu->id}}" data-toggle="modal" data-target="#deleteMenu" href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

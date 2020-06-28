@extends('layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Pratos</h1>
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
                    <h3 class="card-title">Listagem dos Pratos do Menu "{{$menu->name}}"</h3>
                    <a href="#" data-menuid="{{$menu->id}}" data-toggle="modal" data-target="#newDish" class="btn btn-primary float-right">Novo Prato</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Nome - English</th>
                            <th>Descrição</th>
                            <th>Descrição - English</th>
                            <th>Preço</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dishes as $dish)
                            <tr>
                                <td>{{$dish->name}}</td>
                                <td>{{$dish->nameEN ?? "N/A"}}</td>
                                <td>{{$dish->description ?? "N/A"}}</td>
                                <td>{{$dish->descriptionEN ?? "N/A"}}</td>
                                <td>{{$dish->price}} €</td>
                                <td>
                                    <div class="float-right">
{{--                                        <a href="" class="btn btn-success"><i class="fa fa-eye"></i></a>--}}
                                        <a href="#" class="btn btn-primary"><i class="fa fa-cog"></i></a>
                                        <a data-dishid="{{$dish->id}}" data-toggle="modal" data-target="#deleteDish" href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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


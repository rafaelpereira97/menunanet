@extends('layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard</h1>
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
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Adicionar novo Restaurante</h3>
                </div>
            <!-- Default box -->
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route('dashboard.restaurants.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nome do Restaurante</label>
                                <input required name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Introduza o nome do Restaurante">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Logotipo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input required name="logo" type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Escolha o logotipo</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user">Associar Utilizador</label>
                                <select required name="user" class="form-control" id="user">
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Criar</button>
                        </div>
                    </form>
                </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

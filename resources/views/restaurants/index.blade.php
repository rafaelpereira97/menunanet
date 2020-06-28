@extends('layouts.app')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Os meus Restaurantes</h1>
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
                    <h3 class="card-title">Listagem dos meus restaurantes</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Logotipo</th>
                            <th>Restaurante</th>
                            <th>Dono</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($restaurants as $restaurant)
                        <tr>
                            <td><img width="100px" src="{{url("uploads/".$restaurant->logo)}}" alt="logo"></td>
                            <td>{{$restaurant->name}}</td>
                            <td>{{$restaurant->user->name}}</td>
                            <td>
                                <div class="float-right">
                                <a href="{{route('dashboard.restaurants.menusIndex',$restaurant->id)}}" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                <a href="" class="btn btn-primary"><i class="fa fa-cog"></i></a>
                                <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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


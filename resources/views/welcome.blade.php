@extends('layouts.plantilla')
@extends('layouts.base')
@section('title', 'Home')
@section('content')
@section('content1')
      <!-- header -->
      <!-- nav -->
      <nav>
        <h1>Logo</h1>
            <ul>
                <li><a href="">INICIO</a></li>
                <li><a href="">CONTACTOS</a></li>
                <li><a href="">SOBRE MI</a></li>
                <li><a href="">PORTAFOLIO</a></li>
            </ul>
    </nav>
    <h1>Bienvenido a la pagina principal</h1>
    <!-- footer-->  
    <!-- script-->  
   
    <div class="row">
        <div class="col-12">
            <div>
                <h2 class="text-white">CRUD de Tareas</h2>
            </div>
            <div>
                <a href="" class="btn btn-primary">Crear tarea</a>
            </div>
        </div>
    
        <div class="col-12 mt-4">
            <table class="table table-bordered text-white">
                <tr class="text-secondary">
                    <th>Tarea</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Estado</th>
                    <th>Acción</th>
                </tr>
                <tr>
                    <td class="fw-bold">Estudiar Laravel</td>
                    <td>Ver video: tu primer CRUD con laravel 10 en el canal de YouDevs</td>
                    <td>
                        31/03/23
                    </td>
                    <td>
                        <span class="badge bg-warning fs-6">Pendiente</span>
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">Editar</a>
    
                        <form action="" method="post" class="d-inline">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    @endsection
@endsection

    


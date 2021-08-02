@extends('layouts.template')

@section('title', 'HomeworkAPP')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-sm-12 center-content">
                <h2>Bienvenido a HomeworkAPP</h2>
                <p>La aplicación en la cual podras crear tus tareas para no olvidarlas.</p>
                <a class="btn btn-dark px-5 py-2" href="{{route('homework.create')}}">Crear Tarea</a>
            </div>
        </div>
    </div>
@endsection

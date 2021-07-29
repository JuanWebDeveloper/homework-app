@extends('layouts.template')

@section('title', 'HomeworkAPP - Tarea ' . $homework->name)

@section('content')
    <div class="container-fluid create">
        <div class="row">
            <div class="col-lg-9 col-sm-12 center-content">
                <div class="homework-content">
                    <h2>Tarea: {{$homework->name}}</h2>
                    <p><strong>Categoria de la tarea: </strong> {{$homework->category}}</p>
                    <p><strong>Descripción de la tarea: </strong> {{$homework->description}}</p>
                </div>
                <div class="buttons-container">
                    <a href="{{route('homework.index')}}" class="btn btn-success">⇽</a>
                    <a href="{{route('homework.edit', $homework)}}" class="btn btn-info">Editar Tarea</a>
                    <form action="{{route('homework.destroy', $homework)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Eliminar Tarea</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
@endsection
@extends('layouts.template')

@section('title', 'HomeworkAPP - Mis Tareas')

@section('content')
    <div class="container-fluid create">
        <div class="row">
            <div class="col-lg-9 col-sm-12 center-content">
                <h2>Tareas Pendientes</h2>
                <ul class="mt-5">
                    @foreach ($homeworks as $homework)
                        <li><a href="{{route('homework.show', $homework)}}">✏ {{$homework->name}}</a></li>
                    @endforeach
                    {{$homeworks->links()}}
                </ul>
            </div>
        </div>
    </div> 
@endsection

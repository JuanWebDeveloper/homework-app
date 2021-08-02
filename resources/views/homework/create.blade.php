@extends('layouts.template')

@section('title', 'HomeworkAPP - Crear Tarea')

@section('content')
    <div class="container-fluid create">
        <div class="row">
            <div class="col-lg-9 col-sm-12 center-content">
                <h2>Crear Tarea</h2>
                <form action="{{route('homework.store')}}" method="POST" class="w-50 mx-auto pt-4">
                    @csrf

                    <input type="text" class="form-control mb-2" name="name" placeholder="Nombre de la tarea" value="{{old('name')}}">
                    @error('name')
                        <div class="alert alert-danger py-1" role="alert">
                            {{$message}}
                        </div>
                    @enderror

                    <input type="hidden" name="slug">

                    <input type="text" class="form-control mb-2" name="category" placeholder="Nombre de la tarea" value="{{old('category')}}">
                    @error('category')
                        <div class="alert alert-danger py-1" role="alert">
                            {{$message}}
                        </div>
                    @enderror

                    <textarea name="description" class="form-control mb-3" placeholder="Descripción de la tarea">{{old('description')}}</textarea>
                    @error('description')
                        <div class="alert alert-danger py-1" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                    
                    <input type="submit" class="btn btn-dark w-75" value="Crear Tarea">
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.template')

@section('title', 'HomeworkAPP - Editar Tarea')

@section('content')
    <div class="container-fluid create">
        <div class="row">
            <div class="col-lg-9 col-sm-12 center-content">
                <h2>Editar Tarea</h2>
                <form action="{{route('homework.update', $homework)}}" method="POST" class="w-50 mx-auto pt-4">
                    @csrf
                    @method('put')

                    <input type="text" class="form-control mb-2" name="name" placeholder="Nombre de la tarea" value="{{old('name', $homework->name)}}">
                    @error('name')
                        <div class="alert alert-danger py-2" role="alert">
                            {{$message}}
                        </div>
                    @enderror

                    <input type="text" class="form-control mb-2" name="category" placeholder="Nombre de la tarea" value="{{old('category', $homework->category)}}">
                    @error('category')
                        <div class="alert alert-danger py-2" role="alert">
                            {{$message}}
                        </div>
                    @enderror

                    <textarea name="description" class="form-control mb-3" placeholder="Descripción de la tarea">{{old('description', $homework->description)}}</textarea>
                    @error('description')
                        <div class="alert alert-danger py-2" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                    
                    <input type="submit" class="btn btn-dark w-75" value="Editar Tarea">
                </form>
            </div>
        </div>
    </div>
@endsection
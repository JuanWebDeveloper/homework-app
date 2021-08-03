@extends('layouts.template')

@section('title', 'HomeworkAPP - Contactanos')

@section('content')
    <div class="container-fluid create">
        <div class="row">
            <div class="col-lg-9 col-sm-12 center-content">
                <h2>Contactanos</h2>
                <form action="{{route('contact.store')}}" method="POST" class="w-50 mx-auto pt-4">
                    @csrf

                    <input type="text" class="form-control mb-1" name="name" placeholder="Nombre" value="{{old('name')}}">
                    @error('name')
                        <div class="alert alert-danger py-1" role="alert">
                            {{$message}}
                        </div>
                    @enderror

                    <input type="text" class="form-control mb-1" name="matter" placeholder="Asunto:" value="{{old('matter')}}">
                    @error('matter')
                        <div class="alert alert-danger py-1" role="alert">
                            {{$message}}
                        </div>
                    @enderror

                    <input type="text" class="form-control mb-1" name="email" placeholder="Correo" value="{{old('email')}}">
                    @error('email')
                        <div class="alert alert-danger py-1" role="alert">
                            {{$message}}
                        </div>
                    @enderror

                    <textarea name="message" class="form-control mb-2" placeholder="Mensaje">{{old('message')}}</textarea>
                    @error('message')
                        <div class="alert alert-danger py-1" role="alert">
                            {{$message}}
                        </div>
                    @enderror
                    
                    <input type="submit" class="btn btn-dark w-75" value="Enviar">

                    
                    @if (session('info'))
                        <div class="alert alert-success py-2 mt-4" role="alert">
                            {{session('info')}}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navigation">
    <div class="container-fluid">
        <a class="navbar-brand logo" href="{{route('homework.home')}}">HomeworkAPP</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mx-5" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item px-5">
                    <a class="nav-link {{request()->routeIs('homework.home') ? "active" : ""}}" href="{{route('homework.home')}}">Inicio</a>
                </li>
                <li class="nav-item px-5">
                    <a class="nav-link {{request()->routeIs('homework.about') ? "active" : ""}}"  href="{{route('homework.about')}}">Nosotros</a>
                </li>
                <li class="nav-item px-5">
                    <a class="nav-link {{request()->routeIs('homework.index') ? "active" : ""}}"  href="{{route('homework.index')}}">Mis Tareas</a>
                </li>
                <li class="nav-item px-5">
                    <a class="nav-link {{request()->routeIs('homework.create') ? "active" : ""}}"  href="{{route('homework.create')}}">Crear Tarea</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
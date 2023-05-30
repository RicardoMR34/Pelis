@extends('layouts.plantillabase')
@section('contenido')
<h2>Crear Registro</h2>

  <form action="/AP" method="POST">
    @csrf
    
    <div class="col-md-4 mb-3">
    <label for="inputState" class="form-label">Pelicula</label>
    <select id="inputState" name="pelicula" class="form-select">
        @foreach ($peliculas as $pelicula)
            <option value="{{$pelicula->id}}">{{$pelicula->titulo}}</option>  
        @endforeach
    </select>
    </div>

    <div class="col-md-4 mb-3">
    <label for="inputState" class="form-label">Actor</label>
    <select id="inputState" name="actor" class="form-select">
        @foreach ($actores as $actor)
            <option value="{{$actor->id}}">{{$actor->nombre}}</option>  
        @endforeach
    </select>
    </div>
    
    <br>

    <a href="/AP" class="btn btn-secondary">Cancelar</a>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
    
@endsection('contenido')
@extends('layouts.default')
@section('estilos')

<link rel="stylesheet" href="/css/registro.css">

@endsection
@section('contenido')

<div class="super_container">
<div class="caja-registro">
  <h1>Registrate</h1>
    <form class="" action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="texto-registro">
        <label for="name"></label>
        <input id="name" type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nombre" autofocus>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>


      <div class="texto-registro">
        <label for="email"></label>
        <input id="email" type="text" class= "@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>


      <div class="texto-registro">
        <label for="password"></label>
        <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" placeholder="Contraseña" value="">
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        </div>


        <div class="texto-registro">
          <label for="password-confirm" class="texto-registro"></label>
          <input id="password-confirm" type="password" class="texto-registro" name="password_confirmation" placeholder="Confirmar contraseña" value="">
        </div>

       <div class="buton_registro">
                <button type="submit" class="btn btn-primary">
                    REGISTRAME
                </button>
            </div>

</form>
</div>
</div>
<script type="text/javascript" src="/js/auth/register.js"></script>
@endsection

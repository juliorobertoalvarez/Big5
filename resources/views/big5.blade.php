@extends('layout')

@section('content')



<section class="page-section bg-dark text-white" id="big5">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">Ingresa tus numeros!</h2>
                <hr class="divider light my-4" />
                <p class="text-white-50 mb-4">Puedes ingresarlos y con solo tocar un boton te los mostraremos en Orden!</p>
            
            <form method="post" name="myform">
                <p>Numero 1: <input type="text" name="numero1" id="numero1"></p>
                <p>Numero 2: <input type="text" name="numero2" id="numero2"></p>
                <p>Numero 3: <input type="text" name="numero3" id="numero3"></p>
                <p>Numero 4: <input type="text" name="numero4" id="numero4"></p>
                <p>Numero 5: <input type="text" name="numero5" id="numero5"></p>
                <input type="submit" name="submit" Value="submit"/>
            </form>




                <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Ordenar</a>
            </div>
        </div>
    </div>
</section>

<section class="page-section bg-primary" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">Ingresa tus nuemeros!</h2>
                <hr class="divider light my-4" />
                <p class="text-white-50 mb-4">Puedes ingresarlos y con solo tocar un boton te los mostraremos en Orden!</p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Empieza Ya!</a>
            </div>
        </div>
    </div>

<form  method="post" target="_blank">

    <p>Nombre: <input type="text" name="nombre" ></p>
  
    <p>Apellido: <input type="text" name="apellido"></p>
  
    <p>Deporte favorito: <input type="text" name="deporte" placeholder="Fútbol? Tenis? Hockey?"></p>
  
    <p>
  
      <input type="submit" value="Enviar datos">
  
      <input type="reset" value="Restaurar formulario">
  
    </p>
  
  </form>
</section>

@endsection
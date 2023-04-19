<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         @vite(['resources/css/app.css'])
         @vite(['resources/css/inicio.css'])
         @vite(['resources/js/inicioo.js'])
       
        <title>Metanoia</title>
        
        
    </head>


<!-- Canvas -->
<canvas class="orb-canvas"></canvas>
<!-- Overlay -->
<div class="overlay">
  <!-- Overlay inner wrapper -->
  <div class="overlay__inner">
    <!-- Title -->
    <h1 class="overlay__title">
      Hola, te doy la bienvenida a
      <br>
      <span class="text-gradient">METANOIA</span> disfruta tu estancia con nosotros.
    </h1>
    <!-- Description -->
    <p class="overlay__description">
    Ofrecemos a usuarios, un analisis para medir sus niveles de ansiedad y estres, ademas de brindar un apoyo con un pequeño test para conocer como te encutras emocianalmente, espero disfrutes tu estadi aqui.</strong>
    </p>
    <!-- Buttons -->
    <div class="overlay__btns">

      <button class="overlay__btn overlay__btn--transparent">

        <a href="{{ route('welcome.index') }}" target="_blank">Entrar
          Entrar
        </a>
      </button>

      <button class="overlay__btn overlay__btn--colors">
        <span>Cambiar color</span>
        <span class="overlay__btn-emoji">🎨</span>
      </button>
    </div>
  </div>
</div>
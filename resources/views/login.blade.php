<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         @vite(['resources/css/app.css'])
         @vite(['resources/css/login.css'])
         @vite(['resources/js/login.js'])
        <title>Metanoia</title>
        
        
    </head>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="#">
            
			<h1>Crear perfil</h1>
            
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			
			<input type="text" placeholder="Usuario" />
			<input type="email" placeholder="Correo" />
			<input type="password" placeholder="Contraseña" />
			<button>Registrarse</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
        @vite('foto')
      <center>  <img class="w-28" src="{{asset('meta.png')}}" > </center>
  
  
			<input type="email" placeholder="Correo" />
			<input type="password" placeholder="Contraseña" />
			<a href="#">¿Olvidaste tu contraseña?</a>
			<button>Iniciar sesion</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>¡Bienvenido de nuevo!</h1>
                
		
				<p>Para continuar conectado con nostros, inicia sesion con tus datos</p>
                
				<button class="ghost" id="signIn">Iniciar sesion</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>¡Hola amigo!</h1>
                
				<p>Ingresa tus datos para comenzar tu viaje con nosotros</p>
				<button class="ghost" id="signUp">Registrarse</button>
			</div>
		</div>
	</div>
</div>

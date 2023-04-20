<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         @vite(['resources/css/app.css'])
         @vite(['resources/js/app.js'])
         @vite(['resources/css/style.css'])
     
        <title>Metanoia</title>
        
        
    </head>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
        <!--<style>
       .contacto {
            background-image: url('{{ asset('cielo.jpeg') }}');
            background-size: cover;
        }
      </style>-->
      
    </head>
 <body>    
 <div class="bg-white">   
  <header class="absolute inset-x-0 top-0 z-50 ">
    <nav class="flex items-center justify-between p-6 lg:px-8 " aria-label="Global">
      <div class="flex lg:flex-1">
      </div>
      <div class="flex lg:hidden">
      </div>
      <div class="hidden lg:flex lg:gap-x-12">
        <br>
        <br>
        

        <a href="#download" class="text-sm font-semibold leading-6 text-gray-900">App Movil</a>

        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Ayuda</a>

        <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Nosotros</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <a href="{{ route('login.index') }}" class="text-sm font-semibold leading-6 text-gray-900">Iniciar Sesion <span aria-hidden="true">&rarr;</span></a>
      </div>
    </nav>
    @vite('foto')
      <center>  <img class="w-60" src="{{asset('meta.png')}}" > </center>
      <br>
      <br>
      <br>
      <br>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div class="lg:hidden" role="dialog" aria-modal="true">
    
      <!-- Background backdrop, show/hide based on slide-over state. -->
      <div class="fixed inset-0 z-50"></div>
      <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
       
        <br>
      <br>
      <br>
      <br>
         
        </div>
          </div>
        </div>
      </div>
    </div>
  </header>


  <div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
     
    </div>
    <br>
      <br>
      <br>
      <br><br>
   <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
      <br>
      <br>
      <div class="hidden sm:mb-8 sm:flex sm:justify-center">
        
        <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
          ¿Que significa Metania? <a href="#metanoia" class="font-semibold text-amber-400"><span class="absolute inset-0" aria-hidden="true"></span>Aprender mas <span aria-hidden="true">&rarr;</span></a>
        </div>
      </div>
      <div class="text-center">
    
        <p class="mt-6 text-lg leading-8 text-gray-600">Ofrecemos a usuarios, un analisis para medir sus niveles de ansiedad y estres, ademas de brindar un apoyo con un pequeño test y en caso de necesitarlo, agendarse una cita en la psciologia de la UTT. ❤️</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="{{ route('app.index') }}" class="rounded-md bg-amber-300 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-300">Realizar Test</a>
        </div>
        <br>
          <br>
          <br>
          <section class="acerca-de" id="metanoia">
            <div class="contenedor">
                    
              <div class="texto">
                <h3 class="titulo">¿Qué es Metanóia?</h3>
                <p>
                          La ansiedad y el estrés son problemas de salud mental comunes que pueden afectar la calidad de vida de las personas. Por fortuna, existen diversas herramientas que pueden ayudar a gestionar estos problemas, y una de ellas son las aplicaciones móviles.
                          <br><br>
                          Metanóia es una app de estrés y ansiedad podría tener varias funciones y características útiles para los usuarios. Por ejemplo, podría ofrecer técnicas de relajación y meditación guiadas, que ayuden a reducir la ansiedad y el estrés. Estas técnicas podrían ser de forma que cada usuario pueda adaptarlas a sus necesidades y preferencias.
                          <br><br>
                          Además, la app ofrece información sobre la ansiedad y el estrés, y consejos prácticos para gestionarlos. Podría incluir también recursos útiles, como contacto al area de psicología de la Universidad.
                          <br><br>
                          En resumen, una app de estrés y ansiedad podría ser una herramienta muy valiosa para quienes buscan manejar estos problemas de salud mental. Al ofrecer técnicas de relajación y meditación guiadas, seguimiento del estado de ánimo y la emociones, y recursos y consejos prácticos, podría ayudar a los usuarios a reducir su ansiedad y estrés y mejorar su bienestar emocional.               
                      </p>
      
      
              </div>
            </div>
          </section>
    <footer>
		<div class="contenedor" id="download">
			<section class="contacto">
				<h3 class="titulo">Descargas</h3>
               <center> 
                        <p class = "textDescarga">Da clic en el siguiente bontón para ir a la Play Store y decargar la aplicación móvil...</p>
                </center>
                <br><br><br>
				<form class="formulario" action=" "> <!--Aquí pon l link para descargar la app-->
				
					<input class="boton" type="submit" value="Descargar App Móvil">
				</form>
			</section>
		</div>
	</footer>
      </div>
      
    </div>
        
       
    <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
    
    </div>
  </div>
</div>-->

</html> </body> 

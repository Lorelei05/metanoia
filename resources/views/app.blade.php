<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/css/app.css'])
        @vite(['resources/css/test.css'])
    </head>

<div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
  <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
    <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
  </div>
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Test Metanoia</h2>
    <p class="mt-2 text-lg leading-8 text-gray-600">Te ayudamos a conocer tus niveles de ansiedad y estres.</p>
  </div>
  <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">¿Cómo te hace sentir este problema?</label>
      <div class="relative mt-2.5">
         <select id="country" name="country" class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
            <option>Triste 
                </option>
            <option>
                Enojado 
                </option>
            <option>
                Ansioso
                </option>
          </select>
            
          </div>
      </div>
      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">¿Qué podría mejorar el problema?</label>
      <div class="relative mt-2.5">
         <select id="country" name="country" class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
            <option>Realizar ejercicio 
                </option>
            <option>
                Hablar con un terapeuta o consejero  
                </option>
            <option>
                Aprender algunas técnicas del manejo de estrés o ansiedad 
                </option>
          </select>
            
          </div>
      </div>
      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">¿Cómo describirías tu estado de ánimo actualmente?</label>
      <div class="relative mt-2.5">
         <select id="country" name="country" class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
            <option>Nervioso 
                </option>
            <option>
                Temeroso 
                </option>
            <option>
                Preocupado 
                </option>
                <option>
                    Agitado  
                    </option>
          </select>
          </div> 
      </div>
      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">¿Qué se necesitaría para hacerte sentir más contento, más feliz y satisfecho?</label>
      <div class="relative mt-2.5">
         <select id="country" name="country" class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
           
            <option>
              Tener una vida social más activa
                </option>
            <option>
              Practicar actividades que me hagan sentir bien
                </option>
                <option>
                  Mejorar mi salud física y mental  
                    </option>
          </select>
          </div> 
      </div>

      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">¿Con qué frecuencia ha estado seguro sobre su capacidad para manejar sus problemas personales?
        </label>
      <div class="relative mt-2.5">
        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    
          </div> 
      </div>
      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">¿Con qué frecuencia ha sentido que no podía afrontar todas las cosas que tenía que hacer?
        </label>
      <div class="relative mt-2.5">
        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    
          </div> 
      </div>

      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">¿Con qué frecuencia ha sentido que las dificultades se acumulan tanto que no puede superarlas?
        </label>
      <div class="relative mt-2.5">
        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    
          </div> 
      </div>

      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">¿Con qué frecuencia ha estado enfadado porque las cosas que le han ocurrido estaban fuera de su control?
        </label>
      <div class="relative mt-2.5">
        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    
          </div> 
      </div>

      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">¿Te sientes abrumado o preocupado de manera frecuente?
        </label>
      <div class="relative mt-2.5">
        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    
          </div> 
      </div>

      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">¿Tienes dificultad para concentrarte o dormir debido a tus pensamientos y preocupaciones?
        </label>
      <div class="relative mt-2.5">
        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    
          </div> 
      </div>

      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">¿Experimentas síntomas físicos como sudoración, palpitaciones o tensión muscular debido a situaciones estresantes?
        </label>
      <div class="relative mt-2.5">
        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    
          </div> 
      </div>


      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">¿Evitas situaciones o actividades debido a tus sentimientos de ansiedad o estrés?

        </label>
      <div class="relative mt-2.5">
        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    
          </div> 
      </div>

      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">¿Qué sentimiento es el que más desea en su vida?
        </label>
      <div class="relative mt-2.5">
        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    
          </div> 
      </div>

      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">¿Reaccionas exageradamente en ciertas situaciones?
        </label>
      <div class="relative mt-2.5">
        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    
          </div> 
      </div>

      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">¿Experimentas fuertes temores sin causa aparente?
        </label>
      <div class="relative mt-2.5">
        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    
          </div> 
      </div>

      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">¿Tienes miedo o te sientes inseguro por casi todo?
        </label>
      <div class="relative mt-2.5">
        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    
          </div> 
      </div>

     
      
      
     
      
      
      <div class="flex gap-x-4 sm:col-span-2">
        <div class="flex h-6 items-center">
          <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
          <button type="button" class="bg-gray-200 flex w-8 flex-none cursor-pointer rounded-full p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-ambar-600" role="switch" aria-checked="false" aria-labelledby="switch-1-label">
            <span class="sr-only">Acepta las politicas de privacidad</span>
            <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
            <span aria-hidden="true" class="translate-x-0 h-4 w-4 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
          </button>
        </div>

        
        <label class="text-sm leading-6 text-gray-600" id="switch-1-label">
          Acepta las
          <a href="#" class="font-semibold text-indigo-600">politicas&nbsp;privacidad</a>.
        </label>
      </div>
    </div>
    <div class="mt-10">
      <button type="submit"  class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-amber-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-400">Terminar</button>
    </div>
  </form>
</div>

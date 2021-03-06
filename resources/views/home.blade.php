@extends('layouts.plantilla')

@section('title', 'Jorrifadi | Inicio')

@section('content')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

{{-- Seccion Imagenes y texto quienes somos  --}}

<section class="bg-gray-800 relative text-white  "> 
  <a class="class " href="/"  >
    <img class="absolute h-full inset-0 object-center object-cover w-full opacity-70 " src= "{{ url('recursos/Slaiders.jpg') }}" alt="fondo seccion"/>
     </a> 
     
 <div class="container mx-auto px-8 py-10 relative"> 
   <h1 class=" text-center font-bold mb-5 text-5xl">NOSOTROS CONSTRUIMOS TU SUEÑO</h1> 
      
   <div class="flex flex-wrap  -mx-1"> 

          <div class="py-20 px-7 w-full md:w-10/12 lg:w-7/12"> 

              <h4 class="mb-1 text-3xl font-semibold uppercase">¿QUIENES SOMOS?</h4> 
              <h4 class="mb-4  text-5xl text-yellow-600 uppercase">________</h4>
              <p class="mb-6 text-xl font-semibold">@foreach ($datos as $dato)
                  
                {{$dato->descripcion}}
              @endforeach</p> 
              
              

              <!--Inicia  Boton -->

     <div class="container justify-center ">
      <div class="relative h-32 w-90">
        <div class="absolute bottom-15 right-0 h-16 w-90">
          <button class="font-bold border-2 border-white uppercase px-8 py-3 rounded bg-yellow-500 hover:bg-blue-900 hover:text-white max-w-max shadow-sm hover:shadow-lg">CURRICULUM</button>
          <button class="font-bold border-2 border-white uppercase px-8 py-3 rounded hover:bg-blue-900 hover:text-white max-w-max shadow-sm hover:shadow-lg">CONÓCENOS</button>
        </div>
      </div>
    </div>

    
              <!-- Termina Boton -->
</div>
          </div>             
      </div>         
  </div>     
</section>

{{-- Termina Seccion Imagenes y texto quienes somos  --}}


{{-- Seccion principales servicios--}}

<section>

<div class="py-8 ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        
        <p class="mt-2 text-3xl leading-8  tracking-tight text-blue-900 sm:text-4xl">
          Principales servicios
        </p>
      </div>
  
      <div class="mt-10">
        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
          <div class="relative">
            <dt>
<!-- Inicia icono -->
                <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/globe-alt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                </svg>
              </div>
<!-- Termina icono -->

<!-- Inicia texto -->
              <p class="ml-16 text-lg leading-10 font-bold text-black">Proyectos ejecutivos</p>
            </dt>
            
          </div>
<!-- Termina texto -->

          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/scale -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-13 font-bold text-black">Construcción y/o remodelación general</p>
            </dt>
          </div>
  
          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/lightning-bolt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-10 font-bold text-black">Venta e instalación de material</p>
            </dt>
          </div>
  
          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/annotation -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-10 font-bold text-black">Ejecución y supervisión de obras.</p>
            </dt>
          </div>

          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/lightning-bolt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-10 font-bold text-black">Trámites ante entidades</p>
            </dt>
          </div>

          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/lightning-bolt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-10 font-bold text-black">Servicio de asesoría</p>
            </dt>
          </div>

        </dl>
      </div>
    </div>
    
     <!-- Boton -->

     <div class="container ">
        <div class="relative h-32 w-90 ...">
            <div class="absolute bottom-0 right-0 h-16 w-80 ...">
                <button class="uppercase px-8 py-4 rounded bg-yellow-500 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Ver mas</button>
            </div>
          </div>
            
    </div>
  </div>
</section>
{{-- Termina Seccion principales servicios--}}

  {{-- Nuestros clientes --}}
  <section class="bg-white ">

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">

    <div class="lg:text-center">
        
        <p class="mt-5 text-3xl leading-8  tracking-tight text-blue-900 sm:text-4xl">
          
            Nuestros clientes

        </p>
        <h4 class="mb-4  text-5xl text-yellow-600 uppercase">______</h4>
      </div>


  <div class="flex ">
    
    <div class="contents">
      <div class="flex-3 "> <img class="" src= "{{ url('recursos/logo-hotel-maroma.jpg')}}" alt="hotel-maroma"></div>
      <div class="flex-3 "> <img class="" src= "{{ url('recursos/logo-kaua.jpg') }}" alt="hotel-kaua"></div>
      <div class="flex-3 "> <img class="" src= "{{ url('recursos/logo-hotel-akumal.jpg') }}" alt="hotel-akumal"></div>
      <div class="flex-3 "> <img class="" src= "{{ url('recursos/logo-came.jpg') }}" alt="hotel-came"></div>
    
    </div>
  </div>
  

</div>
<br>

</section>
{{-- termina Nuestros clientes --}}

 

  {{-- Seccion Imagenes y texto  quienes somos --}}

<section class="bg-yellow-500 py-10 text-white">
  <div class="container mx-auto px-4 py-14 relative">
      <div class="flex flex-wrap">
          <div class="px-4 w-full">
              <h1 class="font-bold text-5xl text-center">¿Quienes somos?</h1>
          </div>
      </div>

      <div class="container ">
        <div class="relative h-32 w-90 ...">
            <div class="absolute bottom-0 right-0 h-16 w-80 ...">
                <button class="uppercase px-8 py-4 rounded  font-semibold bg-blue-700 text-blue-50 max-w-max shadow-sm hover:shadow-lg">Ver mas</button>
            </div>
          </div>
            
    </div>


  </div>
</section>


{{-- terminaSeccion Imagenes y texto  quienes somos --}}



{{-- Porque elegirnos  --}}
<section class="bg-white pg-lib-item py-20 text-center text-black"> 
  <div data-pg-class-style="container" class="container mx-auto px-4 relative pg-lib-item" data-pg-class-style-inline=""> 
      <div class="flex flex-wrap -mx-4  items-center mb-4" data-pg-class-style="column_parent" data-pg-class-style-inline=" items-center mb-4"> 
          <div class="mx-auto px-2 w-full lg:w-8/12"> 
              <h2 class="font-bold mb-1 text-2xl text-yellow-600"> JORRIFADI </h2> 
              <h2 class="font-bold mb-1 text-3xl text-blue-600"> ¿PORQUE ELEGIRNOS? </h2> 
              <h2 class="font-bold mb-1 text-4xl text-yellow-600"> _______  </h2> 
          </div>                                     
      </div>
      <div class="flex flex-wrap -mx-4" data-pg-class-style="column_parent">
          <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
              <div class="py-4"> 
                <span class="bg-blue-600 border-4 border-blue-600 inline-block mb-2 p-6 rounded-full text-red-600"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" class="h-12 w-12" fill="currentColor">
                  <path d="M24.85,10.126c2.018-4.783,6.628-8.125,11.99-8.125c7.223,0,12.425,6.179,13.079,13.543
                  c0,0,0.353,1.828-0.424,5.119c-1.058,4.482-3.545,8.464-6.898,11.503L24.85,48L7.402,32.165c-3.353-3.038-5.84-7.021-6.898-11.503
                  c-0.777-3.291-0.424-5.119-0.424-5.119C0.734,8.179,5.936,2,13.159,2C18.522,2,22.832,5.343,24.85,10.126z"></path>
              </svg></span>
                  <h5 class="font-bold mb-2 text-blue-800 text-xl"> PASION </h5> 
                  <p class="mb-4"> Competencia laboral, Optimización de recursos, Empeño, Seguridad. </p>
              </div>
          </div>
          <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
              <div class="py-4"> 
                <span class="bg-blue-600 border-4 border-blue-600 inline-block mb-2 p-6 rounded-full text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" class="h-12 w-12" fill="currentColor">
                  <g id="Filled_outline"><path d="m30 25h-5l-7-9v-13h12z" fill="#266035"></path><path d="m34 25h5l7-9v-13h-12z" fill="#266035"></path><path d="m22 3h-4v13l4 5.143z" fill="#dd3e46"></path><path d="m42 3h4v13l-4 5.143z" fill="#dd3e46"></path><path d="m43 44v-4l8-2v8z" fill="#ffd782"></path><path d="m21 40v4l-8 2v-8z" fill="#ffd782"></path><path d="m34 31h-4l-2-6h8z" fill="#ffd782"></path><path d="m30 53h4l2 8h-8z" fill="#ffd782"></path><circle cx="32" cy="42" fill="#f9bb4b" r="13"></circle><path d="m30 3h4v22h-4z" fill="#dd3e46"></path><g fill="#55b56a"><path d="m25 6h2v2h-2z"></path><path d="m25 10h2v2h-2z"></path><path d="m25 14h2v2h-2z"></path><path d="m25 18h2v2h-2z"></path><path d="m37 6h2v2h-2z"></path><path d="m37 10h2v2h-2z"></path><path d="m37 14h2v2h-2z"></path><path d="m37 18h2v2h-2z"></path>
                  </g><path d="m32 35 2 4 4 1-3 3 1 4-4-2.05-4 2.05 1-4-3-3 4-1z" fill="#fcf05a"></path><path d="m24.216 48.621 1.568-1.242a8.79 8.79 0 0 1 -1.784-5.379 8 8 0 0 1 16 0 8.79 8.79 0 0 1 -1.784 5.379l1.568 1.242a10.827 10.827 0 0 0 2.216-6.621 10 10 0 0 0 -20 0 10.827 10.827 0 0 0 2.216 6.621z"></path><path d="m38.964 39.733a1 1 0 0 0 -.721-.7l-3.554-.888-1.789-3.592a1.042 1.042 0 0 0 -1.79 0l-1.794 3.589-3.554.888a1 1 0 0 0 -.464 1.677l2.6 2.6-.863 3.451a1 1 0 0 0 1.426 1.132l3.539-1.816 3.544 1.816a1 1 0 0 0 1.426-1.132l-.863-3.451 2.6-2.6a1 1 0 0 0 .257-.974zm-4.671 2.56a1 1 0 0 0 -.263.949l.466 1.863-2.04-1.044a.992.992 0 0 0 -.912 0l-2.044 1.044.466-1.863a1 1 0 0 0 -.263-.949l-1.751-1.751 2.287-.572a1 1 0 0 0 .652-.523l1.109-2.211 1.1 2.211a1 1 0 0 0 .652.523l2.287.572z"></path><path d="m25 6h2v2h-2z"></path><path d="m25 10h2v2h-2z"></path><path d="m25 14h2v2h-2z"></path><path d="m25 18h2v2h-2z"></path><path d="m37 6h2v2h-2z"></path><path d="m37 10h2v2h-2z"></path><path d="m37 14h2v2h-2z"></path><path d="m37 18h2v2h-2z"></path><path d="m18.5 38.346-5.257-1.316a1 1 0 0 0 -1.243.97v8a1 1 0 0 0 1.243.97l5.257-1.316a14.034 14.034 0 0 0 9.846 9.846l-1.316 5.257a1 1 0 0 0 .97 1.243h8a1 1 0 0 0 .97-1.243l-1.316-5.257a14.034 14.034 0 0 0 9.846-9.846l5.257 1.316a1 1 0 0 0 1.243-.97v-8a1 1 0 0 0 -1.243-.97l-5.257 1.316a14.035 14.035 0 0 0 -9.634-9.791l.854-2.555h2.28a1 1 0 0 0 .79-.386l7-9a1 1 0 0 0 .21-.614v-13a1 1 0 0 0 -1-1h-28a1 1 0 0 0 -1 1v13a1 1 0 0 0 .21.614l7 9a1 1 0 0 0 .79.386h2.28l.854 2.555a14.035 14.035 0 0 0 -9.634 9.791zm-.388 5.344-4.112 1.029v-5.438l4.112 1.029a12.806 12.806 0 0 0 0 3.38zm27.776-3.38 4.112-1.029v5.438l-4.112-1.029a12.806 12.806 0 0 0 0-3.38zm-2.888-36.31h2v11.657l-2 2.571zm-22 14.228-2-2.571v-11.657h2zm8.281 41.772 1.03-4.112a12.791 12.791 0 0 0 3.378 0l1.03 4.112zm5.719-56h6v16.8l-2.489 3.2h-3.511zm-4 0h2v20h-2zm3.611 22-.711 2.144a12.554 12.554 0 0 0 -3.792 0l-.719-2.144zm-9.122-2-2.489-3.2v-16.8h6v20zm6.511 6a12 12 0 1 1 -12 12 12.013 12.013 0 0 1 12-12z"></path><path d="m27 50h2v2h-2z"></path><path d="m31 49h2v2h-2z"></path><path d="m35 50h2v2h-2z"></path>
                  </g>
                    </svg></span>
                  <h5 class="font-bold mb-2 text-blue-800 text-xl"> EXELENCIA </h5> 
                  <p class="mb-4"> Ejecución única, Anticipo de necesidades, Acciones innovadoras, Pensamiento flexible.. </p> 
              </div>
          </div>
          <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
              <div class="py-4"> 
                <span class="bg-blue-600 border-4 border-blue-600 inline-block mb-2 p-6 rounded-full text-blue-600"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-12 w-12" fill="currentColor">
                  <g><path d="m434.49 91v30h-57.59c-19.68 0-37.65 10.78-46.91 28.15l-72.74 136.38-48.77 91.44c-14.48 27.16-42.6 44.03-73.38 44.03h-55.1v-30h55.1c19.68 0 37.65-10.78 46.91-28.15l75.24-141.07 46.27-86.75c14.48-27.16 42.6-44.03 73.38-44.03z" fill="#4d5e80"></path><path d="m434.49 91v30h-57.59c-19.68 0-37.65 10.78-46.91 28.15l-72.74 136.38v-63.75l46.27-86.75c14.48-27.16 42.6-44.03 73.38-44.03z" fill="#3d4566"></path><g fill="#f8fcff"><path d="m32.5 288.5h30v85h-30z"></path><path d="m32.5 0h30v73.5h-30z"></path><path d="m32.5 138.5h30v85h-30z"></path><path d="m32.5 438.5h30v73.5h-30z"></path>
                  </g><path d="m449.5 288.5h30v85h-30z" fill="#d8eaef"></path><path d="m449.5 0h30v73.5h-30z" fill="#d8eaef"></path><path d="m449.5 138.5h30v85h-30z" fill="#d8eaef"></path><path d="m449.5 438.5h30v73.5h-30z" fill="#d8eaef"></path><path d="m432 241v30h-65.19c-23.69 0-46.26-8.92-63.55-25.13l-46.01-43.13-69.03-64.72c-11.71-10.98-26.99-17.02-43.03-17.02h-65.19v-30h65.19c23.69 0 46.26 8.92 63.55 25.13l48.51 45.48 66.53 62.37c11.71 10.98 26.99 17.02 43.03 17.02z" fill="#8ccc66"></path><path d="m432 391v30h-65.19c-23.69 0-46.26-8.92-63.55-25.13l-46.01-43.13-69.03-64.72c-11.71-10.98-26.99-17.02-43.03-17.02h-59.69v-30h59.69c23.69 0 46.26 8.92 63.55 25.13l48.51 45.48 66.53 62.37c11.71 10.98 26.99 17.02 43.03 17.02z" fill="#f4717d"></path><circle cx="47.5" cy="106" fill="#a3e281" r="47.5"></circle><circle cx="47.5" cy="256" fill="#f98288" r="47.5"></circle><circle cx="47.5" cy="406" fill="#73d0ff" r="47.5"></circle><circle cx="464.5" cy="106" fill="#6a90ef" r="47.5"></circle><path d="m432 241v30h-65.19c-23.69 0-46.26-8.92-63.55-25.13l-46.01-43.13v-41.13l66.53 62.37c11.71 10.98 26.99 17.02 43.03 17.02z" fill="#5bb228"></path><path d="m366.81 391h65.19v30h-65.19c-23.69 0-46.26-8.92-63.55-25.13l-46.01-43.13v-41.13l66.53 62.37c11.71 10.98 26.99 17.02 43.03 17.02z" fill="#d82745"></path><circle cx="464.5" cy="256" fill="#68ce32" r="47.5"></circle><circle cx="464.5" cy="406" fill="#f4384f" r="47.5"></circle>
                  </g>
                    </svg></span>
                  <h5 class="font-bold mb-2 text-blue-800 text-xl"> COMPROMISO </h5> 
                  <p class="mb-4"> Priorizar la seguridad, Actuar con apremio y eficiencia, Cumplimientos de normas vigentes, Trabajo en equipo, Planeación de actividades, Protección al medio ambiente. </p> 
              </div>
          </div>
          <div class="w-full p-4  xl:w-3/12 sm:w-6/12">
              <div class="py-4"> 
                <span class="bg-blue-600 border-4 border-blue-600 inline-block mb-2 p-6 rounded-full text-blue-600"><svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 512 512" class="h-12 w-12">
                  <g><g><g><g><g><path d="m445.099 175.091c-19.695 0-35.662 15.966-35.662 35.662v30.111l20.719 20.719 30.24-30.24v-40.954c0-8.449-6.849-15.298-15.297-15.298z" fill="#d68a5a"></path>
                  </g><g><path d="m486.672 218.557v-54.444c0-8.448-6.849-15.297-15.297-15.297-19.695 0-35.662 15.966-35.662 35.662v48.129c0 1.366-.543 2.676-1.509 3.642l-8.302 8.302 17.388 17.388z" fill="#f5a871"></path>
                  </g><g><g><path d="m496.703 123.488c-19.696 0-35.662 15.966-35.662 35.662v48.129c0 1.366-.543 2.676-1.509 3.642l-25.905 25.905c-1.82 1.82-4.695 2.002-6.751.454-17.015-12.806-41.293-11.471-56.784 4.02l-65.788 65.788c-9.404 9.404-14.686 22.157-14.686 35.456v101.915l101.813-9.317v-71.57c0-7.775 3.088-15.231 8.586-20.728l106.761-106.761c3.344-3.344 5.223-7.879 5.223-12.608v-84.69c-.001-8.449-6.85-15.297-15.298-15.297z" fill="#fdd1a7"></path><path d="m512 138.783v84.691c0 4.729-1.875 9.261-5.223 12.599l-106.758 106.768c-5.501 5.491-8.592 12.949-8.592 20.727v71.567l-33.615 13.279v-84.846c0-7.778 3.091-15.236 8.581-20.727l106.768-106.768c3.338-3.338 5.223-7.871 5.223-12.599v-84.691c0-3.152-.958-6.088-2.596-8.52 5.872-4.265 13.104-6.779 20.913-6.779 8.448.001 15.299 6.851 15.299 15.299z" fill="#ffbc8a"></path>
                  </g><g><path d="m413.304 506.832h-128.042c-5.69 0-10.302-4.612-10.302-10.302v-52.263c0-10.341 8.383-18.725 18.725-18.725h111.196c10.341 0 18.725 8.383 18.725 18.725v52.263c0 5.69-4.613 10.302-10.302 10.302z" fill="#1c96f9"></path><path d="m423.61 444.267v52.261c0 5.69-4.612 10.302-10.302 10.302h-23.313v-62.563c0-10.343-8.386-18.729-18.729-18.729h33.615c10.344.001 18.729 8.386 18.729 18.729z" fill="#1785f8"></path>
                  </g>
                  </g>
                  </g><g><g><path d="m66.901 175.091c19.696 0 35.662 15.966 35.662 35.662v30.111l-20.719 20.719-30.24-30.24v-40.954c0-8.449 6.849-15.298 15.297-15.298z" fill="#d68a5a"></path>
                  </g><g><path d="m25.328 218.557v-54.444c0-8.448 6.849-15.297 15.297-15.297 19.695 0 35.662 15.966 35.662 35.662v48.129c0 1.366.543 2.676 1.509 3.642l8.302 8.302-17.388 17.388z" fill="#f5a871"></path>
                  </g><g><g><path d="m15.297 123.488c19.696 0 35.662 15.966 35.662 35.662v48.129c0 1.366.543 2.676 1.509 3.642l25.905 25.905c1.82 1.82 4.695 2.002 6.751.454 17.015-12.806 41.293-11.471 56.784 4.02l65.788 65.788c9.404 9.404 14.686 22.157 14.686 35.456v101.915l-101.813-9.317v-71.57c0-7.775-3.088-15.231-8.586-20.728l-106.76-106.761c-3.344-3.344-5.223-7.88-5.223-12.609v-84.69c0-8.448 6.849-15.296 15.297-15.296z" fill="#fdd1a7"></path><path d="m222.385 342.547v101.916l-40.033-3.668v-98.248c0-13.3-5.285-26.053-14.68-35.459l-65.787-65.787c-3.235-3.235-6.851-5.851-10.704-7.84 16.359-8.499 36.994-5.893 50.726 7.84l65.787 65.787c9.406 9.406 14.691 22.16 14.691 35.459z" fill="#ffbc8a"></path><g><path d="m151.488 333.82c-1.514 1.535-3.503 2.297-5.501 2.297-1.957 0-3.925-.742-5.429-2.225l-71.68-70.65c-4.378-4.378-6.779-10.158-6.779-16.298s2.4-11.919 6.737-16.256c.567-.567 1.143-1.123 1.731-1.669l7.809 7.809c1.432 1.432 3.534 1.854 5.367 1.185-1.391 1.143-2.73 2.349-3.976 3.595-1.422 1.432-2.215 3.317-2.215 5.336s.793 3.904 2.215 5.336l71.639 70.609c3.039 2.999 3.08 7.892.082 10.931z" fill="#ffbc8a"></path>
                  </g><g><path d="m449.375 246.945c0 6.14-2.39 11.919-6.779 16.298l-71.68 70.65c-1.504 1.484-3.461 2.225-5.429 2.225-1.988 0-3.987-.762-5.501-2.297-2.998-3.039-2.957-7.932.082-10.93l71.639-70.609c1.432-1.432 2.215-3.317 2.215-5.336s-.783-3.904-2.215-5.336c-1.38-1.381-2.864-2.751-4.43-4.059 2.019 1.246 4.646.979 6.346-.721l7.551-7.551c.494.464.989.937 1.463 1.411 4.348 4.336 6.738 10.115 6.738 16.255z" fill="#ffbc8a"></path>
                  </g>
                  </g><g><path d="m98.696 506.832h128.041c5.69 0 10.302-4.612 10.302-10.302v-52.263c0-10.341-8.383-18.725-18.725-18.725h-111.195c-10.341 0-18.725 8.383-18.725 18.725v52.263c0 5.69 4.613 10.302 10.302 10.302z" fill="#1c96f9"></path><path d="m237.034 444.257v52.271c0 5.69-4.612 10.302-10.302 10.302h-23.312v-62.563c0-10.343-8.375-18.729-18.718-18.729h33.615c10.337.001 18.717 8.381 18.717 18.719z" fill="#1785f8"></path>
                  </g>
                  </g>
                  </g>
                  </g><g><g><g><g><path d="m255.999 295.512c-4.267 0-7.726-3.459-7.726-7.726v-236.769c0-4.267 3.459-7.726 7.726-7.726s7.726 3.459 7.726 7.726v236.769c.001 4.267-3.458 7.726-7.726 7.726z" fill="#92c932"></path>
                  </g><path d="m240.862 92.913c14.021 14.021 18.302 34.094 12.842 51.81-.503 1.631-1.784 2.913-3.415 3.416-17.711 5.464-37.788 1.179-51.81-12.843-13.136-13.136-17.726-31.586-13.761-48.428.901-3.827 3.889-6.815 7.716-7.715 16.845-3.962 35.292.624 48.428 13.76z" fill="#a3e440"></path><path d="m250.283 148.142c-11.134 3.43-23.198 3.01-34.1-1.246 3.719-.505 7.386-1.411 10.941-2.709 6.717-18.317 2.72-39.662-11.981-54.363-5.202-5.202-11.239-9.076-17.688-11.59 15.412-2.06 31.565 2.843 43.412 14.68 14.022 14.022 18.296 34.089 12.842 51.806-.504 1.637-1.791 2.919-3.426 3.422z" fill="#99d53b"></path>
                  </g><g><path d="m271.137 92.913c-14.021 14.021-18.302 34.094-12.842 51.81.503 1.631 1.784 2.913 3.415 3.416 17.711 5.464 37.788 1.179 51.81-12.843 13.136-13.136 17.726-31.586 13.761-48.428-.901-3.827-3.889-6.815-7.716-7.715-16.844-3.962-35.292.624-48.428 13.76z" fill="#bcea73"></path><path d="m313.525 135.297c-12.991 12.991-31.173 17.626-47.862 13.897 9.241-2.071 18.028-6.696 25.229-13.897 13.135-13.135 17.729-31.585 13.763-48.429-.896-3.832-3.884-6.809-7.716-7.716-.196-.041-.391-.093-.587-.124 7.644-1.71 15.587-1.669 23.21.124 3.832.907 6.82 3.884 7.716 7.716 3.966 16.844-.618 35.294-13.753 48.429z" fill="#a3e440"></path>
                  </g>
                  </g><g><g><path d="m239.14 186.424c15.695 15.695 20.432 38.198 14.211 58.001-.511 1.628-1.787 2.904-3.415 3.416-19.799 6.225-42.306 1.483-58.001-14.212-14.906-14.906-19.933-35.958-15.067-54.998.909-3.558 3.716-6.364 7.274-7.272 19.043-4.864 40.091.158 54.998 15.065z" fill="#a3e440"></path><path d="m249.939 247.836c-12.001 3.774-25 3.525-36.867-.764 4.656-.494 9.261-1.566 13.701-3.194 7.469-20.387 3.029-44.174-13.351-60.544-6.171-6.171-13.403-10.652-21.098-13.434 16.689-1.793 34.017 3.729 46.811 16.524 15.702 15.692 20.432 38.2 14.218 57.995-.511 1.629-1.786 2.905-3.414 3.417z" fill="#99d53b"></path>
                  </g><g><path d="m272.859 186.424c-15.695 15.695-20.432 38.198-14.211 58.001.511 1.628 1.787 2.904 3.415 3.416 19.799 6.225 42.306 1.483 58.001-14.212 14.906-14.906 19.933-35.958 15.067-54.998-.909-3.558-3.716-6.364-7.274-7.272-19.043-4.864-40.091.158-54.998 15.065z" fill="#bcea73"></path><path d="m320.067 233.628c-14.144 14.134-33.79 19.388-52.024 15.741 10.776-2.143 21.057-7.397 29.401-15.741 14.907-14.907 19.924-35.953 15.061-55.001-.907-3.554-3.719-6.356-7.273-7.263-.999-.258-2.009-.484-3.018-.68 8.468-1.69 17.256-1.463 25.641.68 3.564.907 6.366 3.709 7.273 7.263 4.873 19.047-.155 40.094-15.061 55.001z" fill="#a3e440"></path>
                  </g>
                  </g><g><g><path d="m244.475 16.694c10.5 10.5 13.825 25.458 9.975 38.781-.481 1.666-1.797 2.982-3.463 3.463-13.32 3.852-28.281.524-38.781-9.976-9.456-9.456-13.096-22.53-10.912-34.765.767-4.296 4.119-7.647 8.415-8.413 12.237-2.183 25.309 1.454 34.766 10.91z" fill="#a3e440"></path><path d="m250.957 58.949c-9.304 2.68-19.412 1.865-28.232-2.46 1.741-.381 3.472-.876 5.161-1.494 5.11-13.938 2.06-30.195-9.127-41.393-3.132-3.132-6.645-5.614-10.405-7.479.443-.144.896-.258 1.36-.34 12.228-2.184 25.301 1.453 34.758 10.91 10.505 10.505 13.829 25.461 9.983 38.779-.485 1.678-1.819 2.993-3.498 3.477z" fill="#99d53b"></path>
                  </g><g><path d="m267.524 16.694c-10.5 10.5-13.825 25.458-9.975 38.781.481 1.666 1.797 2.982 3.463 3.463 13.32 3.852 28.281.524 38.781-9.976 9.456-9.456 13.096-22.53 10.912-34.765-.767-4.296-4.119-7.647-8.415-8.413-12.237-2.183-25.309 1.454-34.766 10.91z" fill="#bcea73"></path><path d="m299.793 48.958c-10.59 10.601-25.724 13.887-39.126 9.869 6.037-1.813 11.734-5.099 16.504-9.869 9.457-9.447 13.094-22.53 10.91-34.758-.536-3.029-2.369-5.604-4.914-7.108 6.181-2.009 12.764-2.442 19.12-1.308 4.296.762 7.654 4.121 8.417 8.417 2.182 12.226-1.454 25.31-10.911 34.757z" fill="#a3e440"></path>
                  </g>
                  </g>
                  </g>
                  </g><g><g><circle cx="130.28" cy="471.361" fill="#eaf6ff" r="13.878"></circle>
                  </g><g><circle cx="381.72" cy="471.361" fill="#eaf6ff" r="13.878"></circle>
                  </g>
                  </g>
                  </g>
                    </svg></span>
                  <h5 class="font-bold mb-2 text-blue-800 text-xl"> VALORES </h5> 
                  <p class="mb-4">Ética, Respeto, Tolerancia, Puntualidad, Lealtad, Integridad, Responsabilidad.</p> 
              </div>
          </div>
      </div>                                 
  </div>                             
</section>

{{-- Termina Porque elegirnos  --}}

</body>
</html>

@endsection





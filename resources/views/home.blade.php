<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
     @vite('resources/css/app.css') 

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>

 <!-- Header -->
 <header class="bg-gray-800 text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-2xl font-bold">Go<b class="text-blue-500">CARS</b></h1>
      <a href="{{ route('exportar.participantes') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded inline-block">Descargar Participantes</a>
    </div>
  </header>

  <!-- Hero section -->
  <div class="relative bg-gray-900 text-white py-24 md:py-32 lg:py-40 px-6 md:px-12 lg:px-24 xl:px-48">
    <div class="max-w-6xl mx-auto text-center">
    <img src="{!! asset('img/renault-sandero.webp') !!}" alt="Carro a rifar" class="mx-auto mb-8 rounded-lg shadow-lg w-full md:w-auto max-h-96 md:max-h-full">
      <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">¡Bienvenido a GOCARS!</h1>
      <p class="text-lg md:text-xl lg:text-2xl mb-8">Descubre nuestras increíbles ofertas y servicios, Además participa en la rifa de este espectacular Renault Sandero ultimo modelo. </p>
      <a href="/register" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-8 rounded-full inline-block">Registrate</a>
    </div>
  </div>

  @if(Session::has('winner'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const winnerName = "{{ Session::get('winner')['nombre'] }}";
            const winnerLastName = "{{ Session::get('winner')['apellido'] }}";

            Swal.fire({
                icon: 'success',
                title: '¡Tenemos un ganador!',
                text: `El ganador es: ${winnerName} ${winnerLastName}`,
                showCloseButton: true,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Cerrar'
            });

            // Eliminar la variable de sesión después de mostrar el mensaje
            @php
                Session::forget('winner');
            @endphp
        });
    </script>
@endif
    <!--Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


    <title>Landing Page</title>

</head>
<body class="bg-gray-100">
<div class="min-h-screen flex flex-col justify-center items-center">
    <div class="max-w-lg w-full bg-white p-8 rounded shadow-md">
        <h2 class="text-2xl font-semibold mb-4">¡Participa en nuestro concurso!</h2>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Éxito:</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <button type="button" class="absolute top-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none'">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('nombre') border-red-500 @enderror px-3 py-2 placeholder-gray-400 text-gray-700 focus:outline-none focus:ring-1 focus:ring-indigo-500" value="{{ old('nombre') }}" required>
                @error('nombre')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="apellido" class="block text-sm font-medium text-gray-700">Apellido</label>
                <input type="text" id="apellido" name="apellido" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('apellido') border-red-500 @enderror px-3 py-2 placeholder-gray-400 text-gray-700 focus:outline-none focus:ring-1 focus:ring-indigo-500" value="{{ old('apellido') }}" required>
                @error('apellido')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="cedula" class="block text-sm font-medium text-gray-700">Cédula</label>
                <input type="number" id="cedula" name="cedula" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('cedula') border-red-500 @enderror px-3 py-2 placeholder-gray-400 text-gray-700 focus:outline-none focus:ring-1 focus:ring-indigo-500" value="{{ old('cedula') }}" required>
                @error('cedula')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="departamento" class="block text-sm font-medium text-gray-700">Departamento</label>
                <select id="departamento" name="departamento" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('departamento') border-red-500 @enderror px-3 py-2 text-gray-700 bg-white focus:outline-none focus:ring-1 focus:ring-indigo-500" required>
                    <option value="">Seleccione un departamento</option>
                    <!-- Aquí puedes cargar dinámicamente los departamentos desde la base de datos o utilizar una lista predefinida -->
                    @foreach($departamentos as $departamento)
                        <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                    @endforeach
                    <!-- Otros departamentos -->
                </select>
                @error('departamento')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="ciudad" class="block text-sm font-medium text-gray-700">Ciudad</label>
                <select id="ciudad" name="ciudad" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('ciudad') border-red-500 @enderror px-3 py-2 text-gray-700 bg-white focus:outline-none focus:ring-1 focus:ring-indigo-500" required>
                    <option value="">Seleccione una ciudad</option>
                    <!-- Aquí puedes cargar dinámicamente las ciudades según el departamento seleccionado -->
                </select>
                @error('ciudad')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="celular" class="block text-sm font-medium text-gray-700">Celular</label>
                <input type="tel" id="celular" name="celular" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('celular') border-red-500 @enderror px-3 py-2 placeholder-gray-400 text-gray-700 focus:outline-none focus:ring-1 focus:ring-indigo-500" value="{{ old('celular') }}" required>
                @error('celular')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Correo Electrónico</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 @error('email') border-red-500 @enderror px-3 py-2 placeholder-gray-400 text-gray-700 focus:outline-none focus:ring-1 focus:ring-indigo-500" value="{{ old('email') }}" required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <input type="checkbox" id="habeas_data" name="habeas_data" class="mr-2" required>
                <label for="habeas_data" class="text-sm text-gray-700">Autorizo el tratamiento de mis datos de acuerdo con la finalidad establecida en la política de protección de datos personales <a href="#" id="modalOpener" class="text-indigo-500">clic aqui</a></label>
            </div>
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-indigo-600">Registrarse</button>
            </div>
        </form>
    </div>
</div>

<!-- Contenido del modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Título: Aviso de Privacidad</h2>
        <p><strong>Introducción:</strong> Un breve párrafo que explique el propósito del aviso de privacidad y su importancia para los visitantes del sitio web.</p>
        <hr>
        <h3>Identidad del Responsable:</h3>
        <p>Nombre o razón social del responsable del tratamiento de datos.</p>
        <p>Dirección física y/o dirección de correo electrónico para comunicación relacionada con la privacidad.</p>
        <hr>
        <h3>Finalidad del Tratamiento:</h3>
        <p>Descripción de las razones por las cuales se recopilan y procesan los datos personales.</p>
        <hr>
        <h3>Datos Personales Recopilados:</h3>
        <p>Enumeración de los tipos de datos personales que se recopilan, como nombres, direcciones de correo electrónico, números de teléfono, etc.</p>
        <hr>
        <h3>Base Legal:</h3>
        <p>Explicación de la base legal para el tratamiento de datos, como el consentimiento del usuario, cumplimiento de un contrato, interés legítimo, etc.</p>
        <!-- Continuar con la información restante -->
    </div>
</div>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#departamento').change(function() {
                var departamento_id = $(this).val();
                if(departamento_id) {
                    $.ajax({
                        url: '/municipios/' + departamento_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#ciudad').empty();
                            $('#ciudad').append('<option value="">Selecciona un municipio</option>');
                            $.each(data, function(key, value) {
                                $('#ciudad').append('<option value="' + value.id + '">' + value.nombre + '</option>');
                            });
                            $('#ciudad').prop('disabled', false);
                        }
                    });
                } else {
                    $('#ciudad').empty();
                    $('#ciudad').prop('disabled', true);
                }
            });
        });

      
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("modalOpener");
        var span = document.getElementsByClassName("close")[0];

    
        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }



    </script>
</html>

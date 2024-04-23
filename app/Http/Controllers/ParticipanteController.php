<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Participante;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

use App\Exports\ParticipantesExport;
use Maatwebsite\Excel\Facades\Excel;


class ParticipanteController extends Controller
{



    public function exportarParticipantes()
    {
        return Excel::download(new ParticipantesExport, 'participantes.xlsx');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function cargarDepartamento(){

        $departamentos = Departamento::all();
        return view('register', compact('departamentos'));
    }

    public function municipiosPorDepartamento($departamento)
    {
        $municipios = Municipio::where('departamento_id', $departamento)->get();
        return response()->json($municipios);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // Validar los datos del formulario
        $request->validate([

            'nombre' => 'required|alpha|max:255',
            'apellido' => 'required|alpha|max:255',
            'cedula' => 'required|numeric',
            'departamento' => 'required',
            'ciudad' => 'required',
            'celular' => 'required|numeric',
            'email' => 'required|email|unique:participantes',

        ]);
        
    // Mostrar los datos recibidos para depuración
    Log::info('Datos del formulario:', $request->all());

    // Crear un nuevo participante
    Participante::create($request->all());

    // Verificar si hay al menos 5 participantes y seleccionar un ganador al azar
    $participantsCount = Participante::count();
    if ($participantsCount >= 5) {
        $winner = Participante::inRandomOrder()->first();
        $winnerData = [
            'nombre' => $winner->nombre,
            'apellido' => $winner->apellido
        ];

        Log::info('Ganador seleccionado:', ['nombre' => $winner->nombre , 'apellido' => $winner->apellido]);
        // Después de seleccionar al ganador
        Session::put('winner', $winnerData);
        return redirect('/');
    }

    // Notificar el registro exitoso con un mensaje en la vista
    return redirect()->route('register')->with('success', '¡Registro exitoso! Gracias por participar.');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmktController extends Controller
{
    public function index()
    {
        $habilidades = Candidate::getHabilidadesOptions();
        return view('emkt.index', compact('habilidades'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'edad' => 'required|integer|min:18|max:100',
            'email' => 'required|email|unique:candidates,email',
            'habilidades' => 'required|in:php,html,css,laravel,java,js,angular,node,linux,servidores'
        ], [
            'nombre.required' => 'El nombre es obligatorio',
            'apellido.required' => 'El apellido es obligatorio',
            'edad.required' => 'La edad es obligatoria',
            'edad.integer' => 'La edad debe ser un número entero',
            'edad.min' => 'La edad mínima es 18 años',
            'edad.max' => 'La edad máxima es 100 años',
            'email.required' => 'El email es obligatorio',
            'email.email' => 'El email debe tener un formato válido',
            'email.unique' => 'Este email ya está registrado',
            'habilidades.required' => 'Debe seleccionar una habilidad',
            'habilidades.in' => 'La habilidad seleccionada no es válida'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $candidate = Candidate::create($request->all());
            
            return response()->json([
                'success' => true,
                'message' => 'Candidato registrado exitosamente',
                'data' => $candidate
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al registrar el candidato',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}

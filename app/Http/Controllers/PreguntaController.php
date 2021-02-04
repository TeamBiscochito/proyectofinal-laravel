<?php

namespace App\Http\Controllers;

use App\Models\Pregunta;
use Exception;
use Illuminate\Http\Request;

class PreguntaController extends Controller {

    public function index() {
        return response()->json(Pregunta::all(), 200);

    }

    public function store(Request $request) {
        try {
            $pregunta = Pregunta::create($request->all());
            return response()->json(["pregunta" => $pregunta->id, 200]);
        } catch (Exception $e) {
            $resultado = -1;
            return response()->json(['resultado' => $resultado], 200);
        }
    }

    public function show($id) {
        //
    }

    public function update(Request $request, $id) {
        //
    }

    public function destroy($id) {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use Exception;
use Illuminate\Http\Request;

class CartaController extends Controller {

    public function index() { //GET, api/reparacion
        return response()->json(Carta::all(), 200);
    }

    public function store(Request $request) { //POST api/reparacion/id + datos json
        try {
            $carta = Carta::create($request->all());
            return response()->json(["carta" => $carta->id, 200]);
        } catch (Exception $e) {
            $resultado = -1;
            return response()->json(['resultado' => $resultado], 200);
        }
    }

    public function show($id) { //GET api/reparacion/id
        $carta = Carta::find($id);
        if ($carta != null) {
            $preguntas = $carta->preguntas;
        }
        return response()->json(['carta' => $carta], 200);
    }

    public function update(Request $request, $id) { //PUT api/reparacion/id + datos json
        $carta = Carta::find($id);
        try {
            $resultado = $carta->update($request->all());
        } catch (Exception $e) {
            $resultado = false;
        }
    }

    public function destroy($id) { //DELETE api/reparacion/id
        try {
            $resultado = Carta::destroy($id);
        } catch (Exception $e) {
            $resultado = false;
        }
        return response()->json(["resultado" => $resultado], 200);
    }
}

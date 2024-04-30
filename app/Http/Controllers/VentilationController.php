<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventilation;

class VentilationController extends Controller
{
    // List all courses ready to be used by students
    public function index()
    {
        $ventilations = Ventilation::all();
        return view('ventilations', ['ventilations' => $ventilations]);
    }

    // Get a course by id
    public function getVentilationById($id)
    {
        $ventilation = Ventilation::find($id);
        return view('ventilation', ['ventilation' => $ventilation]);
    }

    public function createVentilation(Request $request)
    {
        $ventilation = new Ventilation();
        $ventilation->type = $request->input('type');
        $ventilation->debit1 = $request->input('debit1');
        $ventilation->debit2 = $request->input('debit2');
        $ventilation->save();

        return redirect('ventilations');
    }

    public function delete($id)
    {
        $ventilation = Ventilation::find($id);
        $ventilation->delete();
        return view('ventilations');
    }
}

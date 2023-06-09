<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;
use Alert;
use Barryvdh\DomPDF\Facade\Pdf;


class ProyectoController extends Controller
{
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('proyectos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NombreProyecto' => 'required',
            'fuenteFondos' => 'required',
            'MontoPlanificado' => 'required',
            'MontoPatrocinado' => 'required',
            'MontoFondosPropios' => 'required',
        ]);

        Proyecto::create($request->all());
        Alert::success('Registro', 'El registro se registro satisfactoriamente.');
        return redirect()->route('proyectos.index');
    }

    public function edit(Proyecto $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));
    }

    public function update(Request $request, Proyecto $proyecto)
    {
        $request->validate([
            'NombreProyecto' => 'required',
            'fuenteFondos' => 'required',
            'MontoPlanificado' => 'required',
            'MontoPatrocinado' => 'required',
            'MontoFondosPropios' => 'required',
        ]);

        $proyecto->update($request->all());
        Alert::success('Actualización', 'El registro se modifico satisfactoriamente.');
        return redirect()->route('proyectos.index');
    }

    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        Alert::error('Eliminado', 'El registro se elimino satisfactoriamente.');
        return redirect()->route('proyectos.index');
    }

    public function generarPDF()
    {
        $proyectos = Proyecto::all();

        $data = [
            'proyectos' => $proyectos,
        ];

        $pdf = PDF::loadView('proyectos.pdf_view', $data);
        return $pdf->download('proyectos.pdf');
    }
}

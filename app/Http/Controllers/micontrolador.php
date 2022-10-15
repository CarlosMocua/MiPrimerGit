<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
use App\Models\Editor;

class micontrolador extends Controller
{
    public function vista4()
    {
        return view('vista4');
    }

    public function vista5()
    {
        return view('vista5');
    }

    public function vista6()
    {
        return view('vista6');
    }

    public function registralibro()
    {
        return view('registralibro');
    }
    public function guardarlibro(Request $request)
    {
        $libros = new Libro;
        $libros->nombre=$request->input('nombre');
        $libros->genero=$request->input('genero');
        $libros->editorial=$request->input('editorial');
        $libros->save();

        return redirect()->route('registrarlibro');
    }

    public function registraeditor()
    {
        return view('registraeditor');
    }
    public function guardareditor(Request $request)
    {
        $editores = new Editor;
        $editores->nombre=$request->input('nombre');
        $editores->apellido=$request->input('apellido');
        $editores->area=$request->input('area');
        $editores->edad=$request->input('edad');
        $editores->telefono=$request->input('telefono');
        $editores->direccion=$request->input('direccion');
        $editores->dpi=$request->input('dpi');
        $editores->nit=$request->input('nit');
        $editores->save();

        return redirect()->route('registrareditor');
    }
    
    public function consultalibros(){
        $libros = Libro::all();
        return view('consulta', compact('libros'));
    }

    public function eliminarLibro($id){
        $libro=Libro::find($id);
        $libro->delete();
        return redirect()->route('consultalibros');
    }

    public function consultaeditores(){
        $editores = Editor::all();
        return view('consulta2', compact('editores'));
    }

    public function eliminarEditor($id){
        $editor=Editor::find($id);
        $editor->delete();
        return redirect()->route('consultaeditores');
    }

    public function muestralibro($id){
        $libros=Libro::find($id);
        return view('muestralibro', compact('libros'));
    }
    public function editalibro(Request $request, $id){
        $libros=Libro::find($id);

        $libros->nombre=$request->input('nombre');
        $libros->genero=$request->input('genero');
        $libros->editorial=$request->input('editorial');
        $libros->save();
        return redirect()->route('consultalibros');
    }

    public function muestraeditor($id){
        $editor=Editor::find($id);
        return view('muestraeditor', compact('editor'));
    }
    public function editaeditor(Request $request, $id){
        $editores=Editor::find($id);

        $editores->nombre=$request->input('nombre');
        $editores->apellido=$request->input('apellido');
        $editores->area=$request->input('area');
        $editores->edad=$request->input('edad');
        $editores->telefono=$request->input('telefono');
        $editores->direccion=$request->input('direccion');
        $editores->dpi=$request->input('dpi');
        $editores->nit=$request->input('nit');
        $editores->save();
        return redirect()->route('consultaeditores');
    }
    
} 


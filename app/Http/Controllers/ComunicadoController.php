<?php

namespace App\Http\Controllers;

use App\Models\Comunicado;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ValidarComunicado;
use Illuminate\Support\Str;

class ComunicadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = User::find(Auth::user()->id);
        $comunicados = Comunicado::where('idPERSONAL_DE_PLANTA', $usuario->personal_de_planta->id)->orderBy('id', 'DESC')->paginate(12);
        return view('comunicados/admin/index', ['comunicados' => $comunicados]);
    }
    public function indexweb(Request $request)
    {
        $id = $request->get('buscar');
        $comunicados = Comunicado::orderBy('id', 'DESC')->where('ESTADO', 'PUBLICADO')->paginate(12);
        return view('comunicados/web/index', ['comunicados' => $comunicados]);
    }
    public function categoria($slug)
    {
        $comunicados = Comunicado::where('CATEGORIA', $slug)->orderBy('id', 'DESC')->where('ESTADO', 'PUBLICADO')->paginate(12);
        return view('comunicados/web/index', ['comunicados' => $comunicados]);
    }
    public function comunicado($slug)
    {
        $comunicado = Comunicado::where('slug', $slug)->first();
        return view('comunicados/web/comunicado', compact('comunicado'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comunicados/admin/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidarComunicado $comunicado)
    {
        $request = app('request');
        $usuario = User::find(Auth::user()->id);
        $slug = Str::slug($comunicado->TITULO);
        $foto = 'extras/tmp/comunicado.png';
        if (isset($request['FOTO']) == true) {
            $foto = $request->file('FOTO')->store('img/comunicados');
            $foto = 'storage/' . $foto;
        }
        $comunicado = Comunicado::create(
            [
                'TITULO' => $comunicado->TITULO,
                'DESCRIPCION' => $comunicado->DESCRIPCION,
                'CONTENIDO' => $comunicado->CONTENIDO,
                'CATEGORIA' => $comunicado->CATEGORIA,
                'ARCHIVO' => $foto,
                'ESTADO' => $comunicado->ESTADO,
                'FECHA' => now(),
                'slug' => $slug,
                'idPERSONAL_DE_PLANTA' => $usuario->personal_de_planta->id,

            ]
        );
        return redirect()->route('comunicados.edit', $comunicado->id)
            ->with('info', 'Comunicado guardado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comunicado  $comunicado
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $comunicado = Comunicado::where('slug', $slug)->first();
        return view('comunicados/admin/show', compact('comunicado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comunicado  $comunicado
     * @return \Illuminate\Http\Response
     */
    public function edit(Comunicado $comunicado)
    {
        return view('comunicados/admin/edit', compact('comunicado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comunicado  $comunicado
     * @return \Illuminate\Http\Response
     */
    public function update(ValidarComunicado $request, Comunicado $comunicado)
    {
        //$request = app('request');
        $foto = $comunicado->ARCHIVO;
        if (isset($request['FOTO']) == true) {
            $foto = $request->file('FOTO')->store('img/comunicados');
            $foto = 'storage/' . $foto;
        }
        $comunicado->update(
            [
                'TITULO' => $request->TITULO,
                'DESCRIPCION' => $request->DESCRIPCION,
                'CONTENIDO' => $request->CONTENIDO,
                'CATEGORIA' => $request->CATEGORIA,
                'ARCHIVO' => $foto,
                'ESTADO' => $request->ESTADO,
                'FECHA' => now(),

            ]
        );
        return redirect()->route('comunicados.edit', $comunicado->id)
            ->with('info', 'Comunicado Actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comunicado  $comunicado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $comunicado = Comunicado::find($id);

            if ($comunicado == false) {
                return back()->with('info', 'No existe el registro');
            } else {
                $comunicado->delete();
                return back()->with('info', 'Eliminado correctamente');
            }
        } catch (\Exception $ex) {
            return back()->with('info', 'Error inesperado al Eliminar (no se elimino)');
        }
    }
}

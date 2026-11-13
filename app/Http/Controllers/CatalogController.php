<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index(Request $request)
    {
        $section = $request->route('section');

        $sections = [
            'mujer' => 'Mujer',
            'hombre' => 'Hombre',
            'novedades' => 'Novedades',
            'ofertas' => 'Ofertas',
            'accesorios' => 'Accesorios'
        ];

        // Verificación adicional de la sección permitida.
        abort_unless(array_key_exists($section, $sections), 404);

        return view('catalog.index', [
            'section' => $section,
            'title' => $sections[$section],
        ]);
    }
}
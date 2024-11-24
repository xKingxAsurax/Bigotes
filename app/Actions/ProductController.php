<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function agregarProductos()
    {
        // Obtener productos de la base de datos con el campo Tipo incluido
        $products = DB::table('productos')
            ->select('IdProducto', 'Nombre', 'Tipo', 'Precio', 'Detalles', 'image1')  // Ahora también seleccionamos 'Tipo'
            ->get();

        // Depuración: verificar si hay productos
        if ($products->isEmpty()) {
            return response()->json(['error' => 'No se encontraron productos'], 404);
        }

        // Convertir las imágenes de BLOB a Base64
        foreach ($products as $product) {
            // Si la imagen existe y no es nula, convertirla a base64
            if ($product->image1) {
                $product->image1 = base64_encode($product->image1);
            } else {
                // Asignar un valor predeterminado o vacío si no hay imagen
                $product->image1 = null;
            }
        }

        // Devolver los productos en formato JSON
        return response()->json($products);
    }
}

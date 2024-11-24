<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{


    
    /**
     * Obtener todos los productos.
     */
    public function agregarProductos()
    {
        // Obtener productos de la base de datos incluyendo el campo Especie
        $products = DB::table('productos')
            ->select('IdProducto', 'Nombre', 'Tipo', 'Especie', 'Precio', 'Detalles', 'image1')
            ->get();

        // Verificar si hay productos
        if ($products->isEmpty()) {
            return response()->json(['error' => 'No se encontraron productos'], 404);
        }

        // Convertir las imágenes de BLOB a Base64
        foreach ($products as $product) {
            if ($product->image1) {
                $product->image1 = base64_encode($product->image1);
            } else {
                $product->image1 = null;
            }
        }

        return response()->json($products);
    }

    /**
     * Filtrar productos por especie.
     *
     * @param string $especie
     * @return \Illuminate\Http\JsonResponse
     */

    
     public function getProducto($id)
     {
         // Buscar el producto por ID
         $producto = DB::table('productos')
             ->select('IdProducto as id', 'Nombre', 'Tipo', 'Especie', 'Precio', 'Detalles', 'image1')
             ->where('IdProducto', $id)
             ->first(); // Utilizamos first() porque esperamos solo un producto
     
         // Verificar si el producto existe
         if (!$producto) {
             return response()->json(['error' => 'Producto no encontrado'], 404);
         }
     
         // Convertir la imagen a Base64 si existe
         if ($producto->image1) {
             $producto->image1 = base64_encode($producto->image1);
         } else {
             $producto->image1 = null;
         }
     
         return response()->json($producto);
     }
     

}

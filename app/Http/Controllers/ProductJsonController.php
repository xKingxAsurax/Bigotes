<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductJsonController extends Controller
{

    public function filtrarPorEspecie($especie)
    {
        // Obtener productos filtrados por la especie proporcionada
        $products = DB::table('productos')
            ->select('IdProducto', 'Nombre', 'Tipo', 'Especie', 'Precio', 'Detalles', 'image1')
            ->where('Especie', $especie)
            ->get();

        // Verificar si hay productos para esa especie
        if ($products->isEmpty()) {
            return view('products')->with('error', 'No se encontraron productos para esta especie.');
        }

        // Convertir las imágenes de BLOB a Base64
        foreach ($products as $product) {
            if ($product->image1) {
                $product->image1 = base64_encode($product->image1);
            } else {
                $product->image1 = null;
            }
        }

        // Pasar los productos a la vista Blade
        return view('products', compact('products', 'especie'));
    }
}


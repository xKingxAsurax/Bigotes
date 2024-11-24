<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    // Agregar producto al carrito
    public function agregar(Request $request, $productId)
    {
        // Obtener el carrito actual de la sesión
        $carrito = session()->get('carrito', []);

        // Verificar si el producto ya está en el carrito
        if (isset($carrito[$productId])) {
            // Si el producto ya está en el carrito, incrementamos la cantidad
            $carrito[$productId]['cantidad']++;
        } else {
            // Si no está, lo agregamos con cantidad 1
            $carrito[$productId] = [
                'product_id' => $productId,
                'cantidad' => 1
            ];
        }

        // Guardar el carrito actualizado en la sesión
        session()->put('carrito', $carrito);

        return response()->json($carrito);
    }

    // Eliminar producto del carrito
    public function eliminar(Request $request, $productId)
    {
        // Obtener el carrito actual de la sesión
        $carrito = session()->get('carrito', []);

        // Eliminar el producto del carrito
        if (isset($carrito[$productId])) {
            unset($carrito[$productId]);
        }

        // Guardar el carrito actualizado en la sesión
        session()->put('carrito', $carrito);

        return response()->json($carrito);
    }

    // Reducir la cantidad de un producto
    public function reducir(Request $request, $productId)
    {
        // Obtener el carrito actual de la sesión
        $carrito = session()->get('carrito', []);

        // Verificar si el producto está en el carrito
        if (isset($carrito[$productId])) {
            // Si la cantidad es mayor que 1, la reducimos
            if ($carrito[$productId]['cantidad'] > 1) {
                $carrito[$productId]['cantidad']--;
            } else {
                // Si la cantidad es 1, eliminamos el producto
                unset($carrito[$productId]);
            }
        }

        // Guardar el carrito actualizado en la sesión
        session()->put('carrito', $carrito);

        return response()->json($carrito);
    }

    // Aumentar la cantidad de un producto
    public function aumentar(Request $request, $productId)
    {
        // Obtener el carrito actual de la sesión
        $carrito = session()->get('carrito', []);

        // Verificar si el producto está en el carrito
        if (isset($carrito[$productId])) {
            // Aumentar la cantidad del producto
            $carrito[$productId]['cantidad']++;
        }

        // Guardar el carrito actualizado en la sesión
        session()->put('carrito', $carrito);

        return response()->json($carrito);
    }

    // Obtener el carrito actual
    public function obtenerCarrito(Request $request)
    {
        // Obtener el carrito de la sesión
        $carrito = session()->get('carrito', []);

        return response()->json($carrito);
    }
}

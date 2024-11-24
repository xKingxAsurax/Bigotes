document.addEventListener("DOMContentLoaded", function() {
    cargarCarrito();  // Cargar el carrito al cargar la página
});

// Función para cargar el carrito desde el backend
function cargarCarrito() {
    fetch('/carrito')
        .then(response => response.json())
        .then(carrito => {
            actualizarCarrito(carrito);
        })
        .catch(error => {
            console.error('Error al cargar el carrito:', error);
        });
}

// Función para actualizar la vista del carrito
function actualizarCarrito(carrito) {
    const cartCount = document.getElementById("cart-count");
    cartCount.textContent = Object.keys(carrito).length;  // Obtener el número de productos en el carrito

    const cartItems = document.getElementById("cart-items");
    cartItems.innerHTML = "";  // Limpiar el carrito antes de actualizar

    let total = 0;

    // Convertir el carrito (objeto) en un arreglo para poder iterar
    const carritoArray = Object.values(carrito); // Obtener los valores del objeto como un arreglo

    carritoArray.forEach(item => {
        total += item.Precio * item.cantidad;

        const itemHTML = document.createElement("li");
        itemHTML.classList.add("list-group-item", "d-flex", "justify-content-between", "lh-sm");

        itemHTML.innerHTML = `
            <div>
                <h6 class="my-0">${item.Nombre}</h6>
                <small class="text-body-secondary">Cantidad: ${item.cantidad}</small>
            </div>
            <span class="text-body-secondary">$${(item.Precio * item.cantidad).toFixed(2)}</span>

            <!-- Botones de eliminar, reducir y aumentar -->
            <div class="d-flex flex-column align-items-start mt-2">
                <!-- Botón de eliminar -->
                <button type="button" class="btn-remove btn btn-danger mb-2" data-product-id="${item.product_id}">Eliminar</button>

                <!-- Botones de restar y sumar -->
                <div class="btn-group btn-group-sm" role="group">
                    <button type="button" class="btn-reduce btn btn-warning me-2" data-product-id="${item.product_id}">-</button>
                    <button type="button" class="btn-increase btn btn-success" data-product-id="${item.product_id}">+</button>
                </div>
            </div>
        `;

        cartItems.appendChild(itemHTML);  // Agregar el producto al carrito en el offcanvas
    });

    const cartTotal = document.getElementById("cart-total");
    cartTotal.textContent = `$${total.toFixed(2)}`;  // Mostrar el total en el offcanvas

    // Agregar eventos a los botones de eliminar y cambiar cantidad
    document.querySelectorAll('.btn-remove').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-product-id');
            eliminarDelCarrito(productId);
        });
    });

    document.querySelectorAll('.btn-reduce').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-product-id');
            reducirCantidad(productId);
        });
    });

    document.querySelectorAll('.btn-increase').forEach(button => {
        button.addEventListener('click', function() {
            const productId = this.getAttribute('data-product-id');
            aumentarCantidad(productId);
        });
    });
}

// Función para eliminar un producto del carrito
function eliminarDelCarrito(productId) {
    console.log('Eliminando del carrito, ID:', productId);

    fetch(`/carrito/eliminar/${productId}`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(carrito => {
        console.log('Carrito actualizado tras eliminación:', carrito);
        actualizarCarrito(carrito);
    })
    .catch(error => {
        console.error('Error al eliminar el producto del carrito:', error);
    });
}

// Función para reducir la cantidad de un producto
function reducirCantidad(productId) {
    console.log('Reduciendo cantidad, ID:', productId);

    fetch(`/carrito/reducir/${productId}`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(carrito => {
        console.log('Carrito actualizado tras reducir cantidad:', carrito);
        actualizarCarrito(carrito);
    })
    .catch(error => {
        console.error('Error al reducir la cantidad:', error);
    });
}

// Función para aumentar la cantidad de un producto
function aumentarCantidad(productId) {
    console.log('Aumentando cantidad, ID:', productId);

    fetch(`/carrito/aumentar/${productId}`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json'
        }
    })
    .then(response => response.json())
    .then(carrito => {
        console.log('Carrito actualizado tras aumentar cantidad:', carrito);
        actualizarCarrito(carrito);
    })
    .catch(error => {
        console.error('Error al aumentar la cantidad:', error);
    });
}

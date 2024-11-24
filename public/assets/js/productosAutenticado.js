document.addEventListener("DOMContentLoaded", function() {
    cargarProductos();
});

// Función para cargar los productos desde la API
function cargarProductos() {
    fetch("/productos")  // Asegúrate de que esta ruta sea válida y esté devolviendo los productos
        .then(response => {
            if (!response.ok) {
                throw new Error('Error al obtener los productos');
            }
            return response.json();  // Convertir la respuesta a JSON
        })
        .then(productos => {
            console.log("Productos recibidos:", productos);
            // Filtramos y mostramos los productos en cada categoría
            mostrarProductosPorCategoria(productos, 'Ropa', 'ropa-contenedor');
            mostrarProductosPorCategoria(productos, 'Alimento', 'alimento-contenedor');
            mostrarProductosPorCategoria(productos, 'Medicina', 'medicina-contenedor');
        })
        .catch(error => {
            console.error('Hubo un problema con la carga de productos:', error);
        });
}

// Función para mostrar productos según la categoría
function mostrarProductosPorCategoria(productos, categoria, contenedorId) {
    const contenedor = document.getElementById(contenedorId);
    contenedor.innerHTML = '';  // Limpiar el contenedor antes de añadir nuevos productos

    contenedor.style.display = "flex";  // Organiza los productos en fila
    contenedor.style.flexWrap = "nowrap";  // Evita que los productos se acomoden en varias filas
    contenedor.style.overflowX = "auto";  // Muestra la barra de desplazamiento horizontal si es necesario
    contenedor.style.paddingBottom = "10px";  // Opcional: para agregar un poco de espacio si hay barra de desplazamiento

    // Filtramos los productos según la categoría
    const productosCategoria = productos.filter(producto => producto.Tipo === categoria);
    
    console.log(`Productos de la categoría ${categoria}:`, productosCategoria);

    productosCategoria.forEach(producto => {
        const tarjetaProducto = crearTarjetaProducto(producto);
        contenedor.appendChild(tarjetaProducto);  // Agregar el nodo de la tarjeta al contenedor
    });
}

function crearTarjetaProducto(producto) {
    console.log('Producto ID:', producto.IdProducto);  // Verifica el valor del ID
    const html = `
        <div class="card me-3 ms-3" style="min-width: 250px;">
            <a href="single-product.html">
                <img src="data:image/jpeg;base64,${producto.image1}" class="img-fluid rounded-4" alt="${producto.Nombre}" style="height: 250px; object-fit: cover; object-position: center;">
            </a>
            <div class="card-body p-0">
                <a href="single-product.html">
                    <h3 class="card-title pt-4 m-0">${producto.Nombre}</h3>
                </a>
                <div class="card-text">
                    <span class="rating secondary-font"></span>
                    <h3 class="secondary-font text-primary">$${producto.Precio}</h3>
                    <div class="d-flex flex-wrap mt-3">
                        <button type="button" class="btn-cart btn btn-primary d-block w-100 py-3 text-center" data-product-id="${producto.IdProducto}">
                            <h5 class="text-uppercase m-0">Agregar al Carrito</h5>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    `;
    const range = document.createRange();
    return range.createContextualFragment(html).firstElementChild;
}

// Evento para manejar el clic en el botón "Agregar al Carrito"
document.addEventListener("click", function(event) {
    // Verifica si el clic es en un botón con la clase 'btn-cart'
    if (event.target && event.target.classList.contains("btn-cart")) {
        console.log('Botón de agregar al carrito presionado');
        event.preventDefault();

        // Obtén el ID del producto
        const productId = event.target.getAttribute("data-product-id");
        console.log("Producto ID:", productId);  // Verifica si se obtiene el ID del producto

        if (productId) {
            agregarAlCarrito(productId);  // Llama a la función para agregar al carrito
        } else {
            console.error("ID de producto no encontrado.");
        }
    }
});

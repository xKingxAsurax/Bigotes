document.addEventListener("DOMContentLoaded", function() {
    fetchProductos();
});

function fetchProductos() {
    const currentPath = window.location.pathname; // Obtiene la ruta actual
    const especie = currentPath.split('/').pop(); // Extrae la especie de la URL

    let url = "/productos/json"; // Si no hay especie, obtener todos los productos

    // Si hay una especie en la URL, se filtran los productos por esa especie
    if (especie) {
        url = `/productos/${especie}/json`;
    }

    fetch(url)
        .then(response => {
            if (!response.ok) {
                console.error('Error al cargar los productos', response.statusText);
                return;
            }
            return response.json();
        })
        .then(data => {
            console.log("Productos recibidos:", data); // Verifica qué datos estás recibiendo
            renderProductos(data); // Llama a la función para renderizar los productos
        })
        .catch(error => {
            console.error("Error al obtener los productos:", error);
        });
}

function renderProductos(productos) {
    const contenedor = document.getElementById("productos-contenedor");
    contenedor.innerHTML = ""; // Limpiar el contenedor antes de agregar nuevos productos

    if (productos.length === 0) {
        contenedor.innerHTML = "<p class='text-center'>No hay productos disponibles para esta especie.</p>";
        return;
    }

    // Crear una fila para los productos
    const row = document.createElement("div");
    row.classList.add("d-flex", "gap-4", "flex-wrap");

    // Iterar sobre los productos y crear sus tarjetas
    productos.forEach(producto => {
        const productoCard = document.createElement("div");
        productoCard.classList.add("card", "me-3", "mb-4");
        productoCard.style.minWidth = "250px"; // Asegura que las tarjetas no sean demasiado pequeñas

        // Agregar contenido HTML a la tarjeta
        productoCard.innerHTML = `
            <a href="single-product.html">
                <img src="data:image/jpeg;base64,${producto.image1}" class="img-fluid rounded-4" alt="${producto.Nombre}" style="height: 250px; object-fit: cover; object-position: center;">
            </a>
            <div class="card-body p-0">
                <a href="single-product.html">
                    <h3 class="card-title pt-4 m-0">${producto.Nombre}</h3>
                </a>
                <div class="card-text">
                    <span class="rating secondary-font">
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        <iconify-icon icon="clarity:star-solid" class="text-primary"></iconify-icon>
                        5.0
                    </span>
                    <h3 class="secondary-font text-primary">$${producto.Precio}</h3>
                    <div class="d-flex flex-wrap mt-3">
                        <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                            <h5 class="text-uppercase m-0">Añadir al carrito</h5>
                        </a>
                        <a href="#" class="btn-wishlist px-4 pt-3">
                            <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                        </a>
                    </div>
                </div>
            </div>
        `;

        row.appendChild(productoCard);
    });

    // Añadir la fila de productos al contenedor
    contenedor.appendChild(row);
}

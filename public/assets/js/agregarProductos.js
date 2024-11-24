document.addEventListener("DOMContentLoaded", function() {
    fetchProductos();
});

function fetchProductos() {
    fetch("/productos") // Asegúrate de que esta ruta coincida con la definida en routes/web.php
        .then(response => {
            if (!response.ok) {
                console.error('Error al cargar los productos', response.statusText);
                return; // Detener ejecución si la respuesta no es exitosa
            }
            return response.json();
        })
        .then(data => {
            console.log("Productos recibidos:", data); // Verifica qué datos estás recibiendo
            renderProductos(data);
        })
        .catch(error => {
            console.error("Error al obtener los productos:", error);
        });
}

function renderProductos(productos) {
    const contenedorAlimentos = document.getElementById("alimento-contenedor");
    const contenedorRopa = document.getElementById("ropa-contenedor");
    const contenedorMedicina = document.getElementById("medicina-contenedor");
    const contenerdorOtros = document.getElementById("Otros-contenedor");
    // Limpiar los contenedores antes de agregar nuevos productos
    contenedorAlimentos.innerHTML = "";
    contenedorRopa.innerHTML = "";
    contenedorMedicina.innerHTML = "";
    contenerdorOtros.innerHTML = "";

    if (productos.length === 0) {
        console.log("No se encontraron productos.");
        return;
    }

    // Filtrar los productos por tipo
    const productosAlimento = productos.filter(producto => producto.Tipo === "Alimento");
    const productosRopa = productos.filter(producto => producto.Tipo === "Ropa");
    const productosMedicina = productos.filter(producto => producto.Tipo === "Medicina");
    const productosOtros = productos.filter(producto => producto.Tipo === "Otros")

    // Crear las filas para los productos de Alimento
    const rowAlimentos = document.createElement("div");
    rowAlimentos.classList.add("d-flex", "gap-4");

    // Agregar productos de Alimento
    if (productosAlimento.length > 0) {
        productosAlimento.forEach(producto => {
            const productoCard = document.createElement("div");
            productoCard.classList.add("card", "me-3"); // Añadir margen entre las tarjetas

            productoCard.style.minWidth = "250px"; // Para asegurarse de que las tarjetas no se hagan demasiado pequeñas

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
                            5.0</span>

                        <h3 class="secondary-font text-primary">$${producto.Precio}</h3>

                        <div class="d-flex flex-wrap mt-3">
                            <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                <h5 class="text-uppercase m-0">Add to Cart</h5>
                            </a>
                            <a href="#" class="btn-wishlist px-4 pt-3">
                                <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            `;

            rowAlimentos.appendChild(productoCard);
        });
        contenedorAlimentos.appendChild(rowAlimentos);
    }

    // Crear una fila para los productos de Ropa
    const rowRopa = document.createElement("div");
    rowRopa.classList.add("d-flex", "gap-4");

    if (productosRopa.length > 0) {
        productosRopa.forEach(producto => {
            const productoCard = document.createElement("div");
            productoCard.classList.add("card", "me-3");

            productoCard.style.minWidth = "250px"; // Para asegurarse de que las tarjetas no se hagan demasiado pequeñas

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
                            5.0</span>

                        <h3 class="secondary-font text-primary">$${producto.Precio}</h3>

                        <div class="d-flex flex-wrap mt-3">
                            <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                <h5 class="text-uppercase m-0">Add to Cart</h5>
                            </a>
                            <a href="#" class="btn-wishlist px-4 pt-3">
                                <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            `;

            rowRopa.appendChild(productoCard);
        });
        contenedorRopa.appendChild(rowRopa);
    }

    // Crear una fila para los productos de Medicina
    const rowMedicina = document.createElement("div");
    rowMedicina.classList.add("d-flex", "gap-4");

    if (productosMedicina.length > 0) {
        productosMedicina.forEach(producto => {
            const productoCard = document.createElement("div");
            productoCard.classList.add("card", "me-3");

            productoCard.style.minWidth = "250px"; // Para asegurarse de que las tarjetas no se hagan demasiado pequeñas

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
                            5.0</span>

                        <h3 class="secondary-font text-primary">$${producto.Precio}</h3>

                        <div class="d-flex flex-wrap mt-3">
                            <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                <h5 class="text-uppercase m-0">Add to Cart</h5>
                            </a>
                            <a href="#" class="btn-wishlist px-4 pt-3">
                                <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            `;

            rowMedicina.appendChild(productoCard);
        });
        contenedorMedicina.appendChild(rowMedicina);
    }


    // Crear una fila para los productos de Medicina
    const rowOtros = document.createElement("div");
    rowOtros.classList.add("d-flex", "gap-4");

    if (productosOtros.length > 0) {
        productosOtros.forEach(producto => {
            const productoCard = document.createElement("div");
            productoCard.classList.add("card", "me-3");

            productoCard.style.minWidth = "250px"; // Para asegurarse de que las tarjetas no se hagan demasiado pequeñas

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
                            5.0</span>

                        <h3 class="secondary-font text-primary">$${producto.Precio}</h3>

                        <div class="d-flex flex-wrap mt-3">
                            <a href="#" class="btn-cart me-3 px-4 pt-3 pb-3">
                                <h5 class="text-uppercase m-0">Add to Cart</h5>
                            </a>
                            <a href="#" class="btn-wishlist px-4 pt-3">
                                <iconify-icon icon="fluent:heart-28-filled" class="fs-5"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>
            `;

            rowOtros.appendChild(productoCard);
        });
        contenedorOtros.appendChild(rowOtros);
    }
}

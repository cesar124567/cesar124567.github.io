<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <style>
        body {
            background-color: #f0f5ff; /* Fondo en azul claro */
            color: #333; /* Texto en color oscuro */
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
        }

        h1 {
            color: #007acc; /* Color azul */
            margin-top: 20px;
        }

        /* Estilos para el formulario */
        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff; /* Fondo blanco */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            text-align: left;
            margin-bottom: 10px;
            color: #007acc; /* Color azul para etiquetas */
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        select {
            background-color: #f7f9fc; /* Fondo azul claro para select */
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #fff; /* Fondo blanco */
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content p {
            cursor: pointer;
            padding: 8px 16px;
        }

        .dropdown-content p:hover {
            background-color: #007acc; /* Cambiar el color de fondo al pasar el mouse */
            color: #fff; /* Cambiar el color del texto al pasar el mouse */
        }

        /* Estilos para los botones */
        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .fancy-button {
            background-color: #007acc; /* Fondo azul */
            border: none;
            color: #fff; /* Texto blanco */
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            margin: 5px;
            transition: background-color 0.3s ease-in-out;
        }

        .fancy-button:hover {
            background-color: #005c91; /* Cambiar el color de fondo al pasar el mouse */
        }

        /* Estilos para la tabla */
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff; /* Fondo blanco */
        }

        th, td {
            border: 1px solid #ccc; /* Borde gris claro */
            padding: 8px;
        }

        th {
            background-color: #007acc; /* Fondo azul */
            color: #fff; /* Texto blanco */
        }

        tr:nth-child(even) {
            background-color: #f7f9fc; /* Fondo azul claro para filas pares */
        }

        tr:hover {
            background-color: #d2e5ff; /* Fondo azul más claro al pasar el mouse */
        }
    </style>
</head>
<body>
    <h1>Agregar Producto</h1>
    <form id="productForm">
        <div>
            <label for="nombre">Nombre del Producto:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="color">Color:</label>
            <select id="color" name="color">
                <option value="azul">Azul</option>
                <option value="rojo">Rojo</option>
                <option value="negro">Negro</option>
                <option value="otro">Otro</option>
            </select>
            <input type="text" id="colorOtro" name="colorOtro" placeholder="Otro color">
        </div>
        <div>
            <label for="precio">Precio:</label>
            <select id="precio" name="precio">
                <option value="10">Q10</option>
                <option value="20">Q20</option>
                <option value="30">Q30</option>
                <option value="otro">Otro</option>
            </select>
            <input type="text" id="precioOtro" name="precioOtro" placeholder="Otro precio">
        </div>
        <div class="dropdown">
            <label for="proveedores">Proveedores:</label>
            <span>Seleccionar</span>
            <div class="dropdown-content">
                <p data-provider="Proveedor 1">Proveedor 1</p>
                <p data-provider="Proveedor 2">Proveedor 2</p>
                <p data-provider="Proveedor 3">Proveedor 3</p>
            </div>
        </div>
        <div class="button-container">
            <button type="button" class="fancy-button" id="agregarProducto">
                Agregar Producto
            </button>
        </div>        <!-- ... -->
    </form>
    <table>
        <thead>
            <tr>
                <th>Nombre del Producto</th>
                <th>Color</th>
                <th>Precio</th>
                <th>Proveedor</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody id="tablaProductos">
            <!-- Aquí se agregarán los productos -->
        </tbody>
    </table>
    <div class="button-container">
        <button type="button" class="fancy-button" id="restablecerTabla">
            Restablecer Tabla
        </button>
    </div>
    <script>
        // Obtener referencias a elementos del formulario
        const nombreInput = document.getElementById('nombre');
        const colorSelect = document.getElementById('color');
        const colorOtroInput = document.getElementById('colorOtro');
        const precioSelect = document.getElementById('precio');
        const precioOtroInput = document.getElementById('precioOtro');
        const tablaProductos = document.getElementById('tablaProductos');

        // Agregar un evento al botón "Agregar Producto"
        document.getElementById('agregarProducto').addEventListener('click', () => {
            const nombre = nombreInput.value;
            const color = colorSelect.value === 'otro' ? colorOtroInput.value : colorSelect.value;
            const precio = precioSelect.value === 'otro' ? precioOtroInput.value : precioSelect.value;
            const proveedor = document.querySelector('.dropdown-content p.active').getAttribute('data-provider');

            if (nombre && color && precio) {
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                    <td>${nombre}</td>
                    <td>${color}</td>
                    <td>$${precio}</td>
                    <td>${proveedor}</td>
                    <td><img src="imagen_${proveedor.toLowerCase()}.jpg" alt="${proveedor}"></td>
                `;
                tablaProductos.appendChild(newRow);

                // Líneas adicionales para agregar el producto a la lista en el primer código
                const listaProductos = document.getElementById('listaProductos');
                const nuevoProducto = document.createElement('li');
                nuevoProducto.textContent = `${nombre} - ${color} - $${precio} - ${proveedor}`;
                listaProductos.appendChild(nuevoProducto);

                // Limpiar los campos del formulario
                nombreInput.value = '';
                colorSelect.value = 'azul';
                colorOtroInput.value = '';
                precioSelect.value = '10';
                precioOtroInput.value = '';

                // Desactivar todos los elementos del menú desplegable
                document.querySelectorAll('.dropdown-content p').forEach((element) => {
                    element.classList.remove('active');
                });
                // Restablecer el texto del botón proveedores
                document.querySelector('.dropdown span').textContent = 'Seleccionar';
            } else {
                alert('Por favor, complete todos los campos.');
            }
        });

        // Restablecer tabla
        document.getElementById('restablecerTabla').addEventListener('click', () => {
            tablaProductos.innerHTML = ''; // Limpiar la tabla
            // Líneas adicionales para restablecer la lista en el primer código
            const listaProductos = document.getElementById('listaProductos');
            listaProductos.innerHTML = ''; // Limpiar la lista
        });
    </script>
</body>
</html>

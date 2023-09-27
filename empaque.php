<!DOCTYPE html>
<html>
<head>
  <title>Cuenta de Empaques</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #f5e9ff; /* Color de fondo morado claro */
    }

    header {
      background-color: #9c27b0; /* Color de fondo morado oscuro para el encabezado */
      color: #ffffff; /* Color del texto del encabezado */
      padding: 20px;
      text-align: center;
    }

    nav {
      background-color: #e1bee7; /* Color de fondo morado medio para la navegación */
      padding: 10px;
      text-align: center;
    }

    nav a {
      color: #ffffff; /* Color del texto de los enlaces de navegación */
      text-decoration: none;
      padding: 10px;
    }

    .opcion {
      background-color: #d1c4e9; /* Color de fondo morado claro para cada opción */
      color: #000000; /* Color del texto de las opciones */
      padding: 20px;
      text-align: center;
      margin: 20px;
      border-radius: 10px;
      transition: background-color 0.3s ease; /* Transición suave para el cambio de color */
    }

    .opcion:hover {
      background-color: #b39ddb; /* Color de fondo morado más oscuro al pasar el mouse */
    }
  </style>
</head>
<body>
  <header>
    <h1>Cuenta de Empaques</h1>
  </header>

  <nav>
    <a href="#inventarios">Inventarios</a>
    <a href="#cuentaempaque">Cuenta de Empaque</a>
    <a href="#vendedores">Vendedores</a>
    <a href="#empaquetadores">Empaquetadores</a>
  </nav>

  <div class="opcion" id="inventarios">
    <h2>Inventarios</h2>
    <p>Contenido de la opción de inventarios...</p>
  </div>

  <div class="opcion" id="cuentaempaque">
    <h2>Cuenta de Empaque</h2>
    <p>Contenido de la opción de cuenta de empaque...</p>
  </div>

  <div class="opcion" id="vendedores">
    <h2>Vendedores</h2>
    <p>Contenido de la opción de vendedores...</p>
  </div>

  <div class="opcion" id="empaquetadores">
    <h2>Empaquetadores</h2>
    <p>Contenido de la opción de empaquetadores...</p>
  </div>
</body>
</html>

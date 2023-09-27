<!DOCTYPE html>
<html>
<head>
<style>
  body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2; /* Color de fondo gris claro */
      }

      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      .form-container {
        max-width: 400px;
        width: 100%;
        background-color: #f0e5f2; /* Color de fondo morado claro */
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      }

      h1 {
        text-align: center;
        margin: 0 0 20px 0;
        color: #512da8; /* Color del texto morado */
      }

      form {
        margin-bottom: 20px;
      }

      label {
        display: block;
        margin-bottom: 5px;
        color: #512da8; /* Color del texto morado */
      }

      input[type="text"],
      input[type="password"],
      input[type="email"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
      }

      button[type="submit"] {
        background-color: #512da8; /* Color del botón morado */
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
      }

      button[type="submit"]:hover {
        background-color: #4527a0; /* Color del botón morado más oscuro al pasar el mouse */
      }

      select {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
      }

      option {
        color: #512da8; /* Color del texto morado en las opciones */
      }
</style>
</head>
<body>
  <div class="container">
    <div class="form-container">
      <h1>Crear cuenta</h1>
      <form id="registrationForm" action="registro_usuario_be.php" method="POST">
       <label for="userType">Tipo de usuario:</label>
          <select id="userType" name="tipo_usuario" required>
            <option value="">Seleccionar tipo de usuario</option>
            <option value="admin">Administrador</option>
            <option value="vendedor">Vendedor</option>
          </select>
          <label for="nombre_completo">Nombre completo:</label>
          <input type="text" id="nombre_completo" name="nombre_completo" required>

          <label for="correo">Correo electrónico:</label>
          <input type="email" id="correo" name="correo" required>

          <label for="contrasena">Contraseña:</label>
          <input type="password" id="contrasena" name="contrasena" required>


          <button type="submit" id="registerButton">Registrarse</button>
      </form>
    </div>
  </div>
  <script>
    document.getElementById("registrationForm").addEventListener("submit", function(event) {
      // Deja que el formulario se envíe normalmente con los datos
      
      // Aquí puedes agregar lógica adicional si es necesario antes de enviar el formulario
      
      // Por ejemplo, podrías hacer una solicitud AJAX al archivo registro_usuario_be.php para enviar los datos
      
       
      window.location.href = "hola_nomas.php"; // Asegúrate de que "hola_nomas.php" sea la URL correcta
    });
  </script>
</body>
</html>
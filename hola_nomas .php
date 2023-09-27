<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Document</title>
    <style>
     @import url( 'https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:ital,wght@1,600&family=Roboto+Mono:wght@700&display=swap');

*{
    margin: 0;
    padding: 0;
    letter-spacing: 1px;
    font-weight: 300;
    font-family: 'Roboto Mono', monospace;
 }

.wrapper {
    margin-top: 300px;
    margin-left: 300px;
    --input-focus: #2d8cf0;
    --font-color: #323232;
    --font-color-sub: #666;
    --bg-color: #fff;
    --bg-color-alt: #666;
    --main-color: #0a0db396;
      /* display: flex; */
      /* flex-direction: column; */
      /* align-items: center; */
  }
  /* switch card */
  .switch {
    transform: translateY(-200px);
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 30px;
    width: 50px;
    height: 20px;
  }
  
  .card-side::before {
    position: absolute;
    content: 'Iniciar';
    left: -70px;
    top: 0;
    width: 100px;
    color: var(--font-color);
    font-weight: 600;
    letter-spacing: 0.1px;
    text-decoration: underline;
  }
  
  .card-side::after {
    position: absolute;
    content: 'Nuevo';
    letter-spacing: 0.1px;
    left: 70px;
    top: 0;
    width: 100px;
    text-decoration: none;
    color: var(--font-color);
    font-weight: 600;
  }
  
  .toggle {
    opacity: 0;
    width: 0;
    height: 0;
  }
  
  .slider {
    box-sizing: border-box;
    border-radius: 5px;
    border: 2px solid var(--main-color);
    box-shadow: 4px 4px var(--main-color);
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: var(--bg-colorcolor);
    transition: 0.3s;
  }
  
  .slider:before {
    box-sizing: border-box;
    position: absolute;
    content: "";
    height: 20px;
    width: 20px;
    border: 2px solid var(--main-color);
    border-radius: 5px;
    left: -2px;
    bottom: 2px;
    background-color: var(--bg-color);
    box-shadow: 0 3px 0 var(--main-color);
    transition: 0.3s;
  }
  
  .toggle:checked + .slider {
    background-color: var(--input-focus);
  }
  
  .toggle:checked + .slider:before {
    transform: translateX(30px);
  }
  
  .toggle:checked ~ .card-side:before {
    text-decoration: none;
  }
  
  .toggle:checked ~ .card-side:after {
    text-decoration: underline;
  }
  
  /* card */ 
  
  .flip-card__inner {
    width: 300px;
    height: 350px;
    position: relative;
    background-color: transparent;
    perspective: 1000px;
      /* width: 100%;
      height: 100%; */
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
  }
  
  .toggle:checked ~ .flip-card__inner {
    transform: rotateY(180deg);
  }
  
  .toggle:checked ~ .flip-card__front {
    box-shadow: none;
  }
  
  .flip-card__front, .flip-card__back {
    padding: 20px;
    position: absolute;
    display: flex;
    flex-direction: column;
    justify-content: center;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    gap: 20px;
  }
  
  .flip-card__back {
    width: 100%;
    transform: rotateY(180deg);
  }
  
  .flip-card__form {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
  }
  
  .title {
    margin: 20px 0 20px 0;
    font-size: 25px;
    font-weight: 900;
    text-align: center;
    color: var(--main-color);
  }
  
  .flip-card__input {
    width: 250px;
    height: 40px;
    border-radius: 5px;
    border: 2px solid var(--main-color);
    background-color: var(--bg-color);
    box-shadow: 4px 4px var(--main-color);
    font-size: 15px;
    font-weight: 600;
    color: var(--font-color);
    padding: 5px 10px;
    outline: none;
  }
  
  .flip-card__input::placeholder {
    color: var(--font-color-sub);
    opacity: 0.8;
  }
  
  .flip-card__input:focus {
    border: 2px solid var(--input-focus);
  }
  
  .flip-card__btn:active, .button-confirm:active {
    box-shadow: 0px 0px var(--main-color);
    transform: translate(3px, 3px);
  }
  
  .flip-card__btn {
    margin: 20px 0 20px 0;
    width: 120px;
    height: 40px;
    border-radius: 5px;
    border: 2px solid var(--main-color);
    background-color: var(--bg-color);
    box-shadow: 4px 4px var(--main-color);
    font-size: 17px;
    font-weight: 600;
    color: var(--font-color);
    cursor: pointer;
  } 



  .login {
    color: #000;
    text-transform: uppercase;
    letter-spacing: 2px;
    display: block;
    font-weight: bold;
    font-size: x-large;
  }
  
  .card {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 350px;
    width: 320px;
    flex-direction: column;
    gap: 35px;
    background: linear-gradient(123deg, rgba(18, 37, 207, 0.582) 0%, rgba(13, 87, 185, 0.568) 35%, rgba(10, 173, 185, 0.534) 100%);;
    box-shadow: 16px 16px 32px #c8c8c8,
          -16px -16px 32px #fefefe;
    border-radius: 8px;
  }
  
  .inputBox {
    position: relative;
    width: 250px;
  }
  
  .inputBox input {
    width: 100%;
    padding: 10px;
    outline: none;
    border: none;
    color: #000000;
    font-size: 1em;
    background: transparent;
    border-left: 2px solid #000000;
    border-bottom: 2px solid #000;
    transition: 0.1s;
    border-bottom-left-radius: 8px;
  }
  
  .inputBox span {
    margin-top: 5px;
    position: absolute;
    left: 0;
    transform: translateY(-4px);
    margin-left: 10px;
    padding: 10px;
    pointer-events: none;
    font-size: 12px;
    color: #000000;
    text-transform: uppercase;
    transition: 0.5s;
    letter-spacing: 3px;
    border-radius: 8px;
  }
  
  .inputBox input:valid~span,
  .inputBox input:focus~span {
    transform: translateX(113px) translateY(-15px);
    font-size: 0.8em;
    padding: 5px 10px;
    background: #0719be;
    letter-spacing: 0.2em;
    color: #ffffff;
    border: 2px;
  }
  
  .inputBox input:valid,
  .inputBox input:focus {
    border: 2px solid #000;
    border-radius: 8px;
  }
  
  button {
    padding: 0.8em 1.8em;
    border: 2px solid #100dce;
    border-radius: 50px;
    position: relative;
    overflow: hidden;
    background-color: transparent;
    text-align: center;
    text-transform: uppercase;
    font-size: 16px;
    transition: .3s;
    z-index: 1;
    font-family: inherit;
    color: #100dce;
    margin-left: 10px;
   }
   
   button::before {
    content: '';
    width: 0;
    height: 305%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(45deg);
    background: #100dce;
    transition: .8s ease;
    display: block;
    z-index: -1;
   }
   
   button:hover::before {
    width: 110%;
   }
   
   button:hover {
    color: #ffffff;
   }

   .inputBox {
    margin-bottom: 20px;
}
.inputBox {
    margin-bottom: 30px; /* Agrega espaciado vertical entre los campos */
}


        .inputBox {
            margin-bottom: 30px; /* Espaciado vertical entre los campos */
        }

        /* Estilo para el campo "Tipo de Usuario" */
        .select-container {
            position: relative;
        }

        .select-container::before {
            content: '\f078'; /* Ícono de flecha hacia abajo */
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 1;
            color: var(--main-color); /* Usa el color principal definido en tu CSS */
            pointer-events: none;
        }

        select {
            appearance: none;
            padding: 10px;
            border: 2px solid var(--main-color); /* Utiliza el color principal */
            border-radius: 5px;
            background-color: transparent;
            color: var(--font-color);
            font-size: 15px;
            font-weight: 600;
            outline: none;
        }

        select:hover, select:focus {
            border-color: var(--input-focus); /* Utiliza el color de enfoque */
        }
        body{
background-color:rgba(120, 156, 233, 0.733) ;




        }
    </style>
</head>
<body>
  
    <div class="wrapper">
        <div class="card-switch">
            <label class="switch">
                <input type="checkbox" class="toggle">
                <span class="slider"></span>
                <span class="card-side"></span>
                <div class="flip-card__inner">
                    <div class="flip-card__front">
                        <div class="container">
                            <div class="card">
                                <form id="loginForm" action="login.php" method="POST">
                                    <a class="login">INICIO DE SESIÓN</a>
                                    <div class="inputBox">
                                        <input type="email" id="correo" name="correo" required>
                                        <span class="user">CORREO</span>
                                    </div>
                        
                                    <div class="inputBox">
                                        <input type="password" id="contrasena" name="contrasena" required>
                                        <span>CONTRASEÑA</span>
                                    </div>

                                    <div class="inputBox">
                                        <label for="tipo_usuario">Tipo de Usuario:</label>
                                        <div class="select-container">
                                            <select id="tipo_usuario" name="tipo_usuario" required>
                                                <option value="administrador">Administrador</option>
                                                <option value="vendedor">Vendedor</option>
                                                <option value="empaque">Empaque</option>
                                            </select>
                                        </div>
                                    </div>
                        
                                    <button type="submit">Iniciar sesión</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card__back">
                        <div class="container">
                            <div class="card">
                                <a class="login">CUENTA NUEVA</a>
                                <form id="registrationForm" action="registro_usuario_be.php" method="POST">
                                    <div class="inputBox">
                                        <input type="email" id="correo" name="correo" required>
                                        <span class="user">Correo Electrónico:</span>
                                    </div>
                        
                                    <div class="inputBox">
                                        <input type="password" id="contrasena" name="contrasena" required>
                                        <span>Contraseña:</span>
                                    </div>

                                    <div class="inputBox">
                                        <label for="userType">Tipo de Usuario:</label>
                                        <div class="select-container">
                                            <select id="userType" name="tipo_usuario" required>
                                                <option value="administrador">Administrador</option>
                                                <option value="vendedor">Vendedor</option>
                                                <option value="empaque">Empaque</option>
                                            </select>
                                        </div>
                                    </div>
                        
                                    <button type="submit">Crear cuenta</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </label>
        </div>   
    </div>
    <footer>
    </footer>


</body>
</html>

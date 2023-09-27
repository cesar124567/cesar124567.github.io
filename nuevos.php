<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>wasa</title>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

.sidebar {
  position: fixed;
  height: 100%;
  width: 260px;
  background-color: rgb(46, 66, 134);
  padding: 15px;
  z-index: 99;
}
.logo {
  font-size: 25px;
  padding: 0 15px;
}
.sidebar a {
  color: #d4eef0;
  text-decoration: none;
}
.menu-content {
  position: relative;
  height: 100%;
  width: 100%;
  margin-top: 40px;
  overflow-y: scroll;
}
.menu-content::-webkit-scrollbar {
  display: none;
}
.menu-items {
  height: 100%;
  width: 100%;
  list-style: none;
  transition: all 0.4s ease;
}
.submenu-active .menu-items {
  transform: translateX(-56%);
}
.menu-title {
  color: #ddf3f5;
  font-size: 14px;
  padding: 15px 20px;
}
.item a,
.submenu-item {
  padding: 16px;
  display: inline-block;
  width: 100%;
  border-radius: 12px;
}
.item i {
  font-size: 12px;
}
.item a:hover,
.submenu-item:hover,
.submenu .menu-title:hover {
  background: rgba(255, 255, 255, 0.1);
}
.submenu-item {
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #fff;
  cursor: pointer;
}
.submenu {
  position: absolute;
  height: 100%;
  width: 100%;
  top: 0;
  right: calc(-100% - 26px);
  height: calc(100% + 100vh);
  background-color: rgb(46, 66, 134);
  display: none;
}
.show-submenu ~ .submenu {
  display: block;
}
.submenu .menu-title {
  border-radius: 12px;
  cursor: pointer;
}
.submenu .menu-title i {
  margin-right: 10px;
}
.navbar,
.main-table {
  left: 260px;
  width: calc(100% - 260px);
  transition: all 0.5s ease;
  z-index: 1000;
}
.sidebar.close ~ .navbar,
.sidebar.close ~ .main-table {
  left: 0;
  width: 100%;
}
.navbar {
  position: fixed;
  color: #fff;
  padding: 15px 20px;
  font-size: 25px;
  background: linear-gradient(123deg, rgb(67, 181, 189)  0%, rgb(69, 95, 180) 35%, rgb(50, 87, 187) 100%);
  cursor: pointer;
}
.navbar #sidebar-close {
  cursor: pointer;
}

.main-table {
  padding-left: 60px;
  padding-top: 90px;
  position: absolute;
  display: block;
  align-items: center;
  justify-content: center;
  height: 100vh;
  z-index: 100;
  background-color: white;
  height: 125%;

}

/* Body */
.container {
  display: contents;
  grid-template-columns: auto;
  gap: 0px;
  width: 100%;
}

hr {
  height: 2px;
  background-color: #0c4abe;
  border: none;
}

.card {
  width: 95%;
  background: #97c0cc;
  box-shadow: 0px 187px 75px rgba(0, 0, 0, 0.01), 0px 105px 63px rgba(0, 0, 0, 0.05), 0px 47px 47px rgba(0, 0, 0, 0.09), 0px 12px 26px rgba(0, 0, 0, 0.1), 0px 0px 0px rgba(0, 0, 0, 0.1);
}

.title {
  width: 98.3%;
  height: 60px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 20px;
  border-bottom: 3px solid #116399;
  font-weight: 700;
  font-size: 40px;
  color: #030b6e;
}

/* Cart */
.cart {
  border-radius: 19px 19px 0px 0px;
}

.cart .steps {
  display: flex;
  flex-direction: column;
  padding: 20px;
}

.cart .steps .step {
  display: grid;
  gap: 10px;
}

.cart .steps .step span {
  font-size: 23px;
  font-weight: 600;
  color: #04424d;
  margin-bottom: 8px;
  display: block;
}

.cart .steps .step p {
  font-size: 17px;
  font-weight: 600;
  color: #5c5c5c;
}

/* Checkout */
.payments .details {
  display: grid;
  grid-template-columns: 10fr 1fr;
  padding: 0px;
  gap: 5px;
}

.checkout .footer {
  margin-top: 30px;
  padding-top: 30px;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 10px 10px 20px;
  background-color: #5b8ac0;
}

.cssbuttons-io-button {
  width: 300px;
    margin-left: 40%;
  background: #1b166b;
  color: rgb(255, 255, 255);
  font-family: inherit;
  padding: 0.35em;
  padding-left: 1.2em;
  font-size: 17px;
  font-weight: 500;
  border-radius: 0.9em;
  border: none;
  letter-spacing: 0.05em;
  display: flex;
  align-items: center;
  box-shadow: inset 0 0 1.6em -0.6em  #1b166b;
  overflow: hidden;
  position: relative;
  height: 2.8em;
  padding-right: 3.3em;
}


.cssbuttons-io-button .icon {
  background: rgb(199, 216, 235);
  margin-left: 1em;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 2.2em;
  width: 2.2em;
  border-radius: 0.7em;
  box-shadow: 0.1em 0.1em 0.6em 0.2em #1b166b;
  right: 0.3em;
  transition: all 0.3s;
}

.cssbuttons-io-button:hover .icon {
  width: calc(100% - 0.6em);
}

.cssbuttons-io-button .icon svg {
  width: 1.1em;
  transition: transform 0.3s;
  color: #ffffff;
}

.cssbuttons-io-button:hover .icon svg {
  transform: translateX(0.1em);
}

.cssbuttons-io-button:active .icon {
  transform: scale(0.95);
}

.item-card {
  margin: 5px;
  padding: 5px;
  border-radius: 15px;
  background-color: #cadcec;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.more {
  height: 35px;
  width: 35px;
  background: none;
  border: none;
  margin-left: 5px;
  border-radius: 100px;
  right: 3%;
}

.more:hover {
  background: rgba(45, 43, 167, 0.199);
  transition: 0.8s;
}

.more svg {
  color: #3619b6;
}

.button.more,
.modal-box {

  position: fixed;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
}

.section.active .more {
  display: none;
}

.section.active .overlay {
  top: 0;
  left: 0;
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.377);
  opacity: 1;
  pointer-events: auto;
}

.overlay {
  position: fixed;
  height: 100%;
  width: 100%;
  opacity: 0;
  pointer-events: none;
}

.modal-box {
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 580px;
  width: 100%;
  padding: 30px 20px;
  border-radius: 24px;
  background-color: #8ab2d3;
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s ease;
  transform: translate(-50%, -50%) scale(1.2);
}
.section.active .modal-box {
  opacity: 1;
  pointer-events: auto;
  transform: translate(-50%, -50%) scale(1);
}

.modal-box h2 {
  margin-top: 5px;
  margin-bottom: 13px;
  font-size: 25px;
  font-weight: 500;
  color: #333;
}
.modal-box h3 {
  font-size: 16px;
  font-weight: 400;
  color: #333;
  text-align: center;
}

.buttonn {
  width: 130px;
  height: 40px;
  border: none;
  border-radius: 10px;
  background: rgba(181, 224, 235, 0.8);
  cursor: pointer;
}

.close-btn{
  margin-right: 20px;
  width: 90px;
  height: 40px;
  border: none;
  border-radius: 10px;
  background: rgba(112, 141, 180, 0.8);
}
  </style>
  </head>
  <body>
    <nav class="sidebar">
      <a href="#" class="logo">Aconta</a>
      <div class="menu-content">
        <ul class="menu-items">
          <li class="item">
            <a href="#">Inventarios registrados</a>
          </li>
          <li class="item">
            <a href="#">Productos registrados</a>
          </li>
          <li class="item">
            <a href="vendedores..php">Distribuidoras de consumo frecuente</a>
          </li>
          <li class="item">
            <div class="submenu-item">
              <span>Crear inventario</span>
              <i class="fa-solid fa-chevron-right"></i>
            </div>
            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Crear inventario
              </div>
              <li class="item">
                <a href="#">Insumos de limpieza</a>
              </li>
              <li class="item">
                <a href="#">Insumos de oficina</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <nav class="navbar">
      <i class="fa-solid fa-bars" id="sidebar-close"></i>
    </nav>
    <main class="main-table">
        <div class="container">
          <div class="card cart">
            <label class="title">INSUMOS DE LIMPIEZA</label>
            <div class="steps">
              <div class="step">
                <div>
                  <div class="item-card">
                    Artículo 2 - Q30.00 <br>
              Distribuidora fulanos y menganos
                    <section class="section">
                        <span class="overlay"></span>
                        <div class="modal-box">
                          <h2>¿Deseas eliminar este producto de la lista?</h2>
                          <div class="buttons">
                            <button class="close-btn" class="buttonn">Cancelar</button>
                            <button class="buttonn">Eliminar</button>
                          </div>
                        </div>
                      </section>
                      <button class="more">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 12V17" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 12V17" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4 7H20" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6 10V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V10" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></button>
                        
                      </div>
                  </div>
                  <div class="item-card">
                    Artículo 2 - Q30.00 <br>
              Distribuidora fulanos y menganos
                    <section class="section">
                        <span class="overlay"></span>
                        <div class="modal-box">
                          <h2>¿Deseas eliminar este producto de la lista?</h2>
                          <div class="buttons">
                            <button class="close-btn" class="buttonn">Cancelar</button>
                            <button class="buttonn">Eliminar</button>
                          </div>
                        </div>
                      </section>
                      <button class="more">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 12V17" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 12V17" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4 7H20" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6 10V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V10" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></button>
                        
                      </div>
                  <div class="item-card">
                    Artículo 2 - Q30.00 <br>
              Distribuidora fulanos y menganos
                    <section class="section">
                        <span class="overlay"></span>
                        <div class="modal-box">
                          <h2>¿Deseas eliminar este producto de la lista?</h2>
                          <div class="buttons">
                            <button class="close-btn" class="buttonn">Cancelar</button>
                            <button class="buttonn">Eliminar</button>
                          </div>
                        </div>
                      </section>
                      <button class="more">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 12V17" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 12V17" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4 7H20" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6 10V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V10" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></button>
                        
                      </div>
                      <div class="item-card">
                        Artículo 2 - Q30.00 <br>
                  Distribuidora fulanos y menganos
                        <section class="section">
                            <span class="overlay"></span>
                            <div class="modal-box">
                              <h2>¿Deseas eliminar este producto de la lista?</h2>
                              <div class="buttons">
                                <button class="close-btn" class="buttonn">Cancelar</button>
                                <button class="buttonn">Eliminar</button>
                              </div>
                            </div>
                          </section>
                          <button class="more">
                            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M10 12V17" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M14 12V17" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M4 7H20" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M6 10V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V10" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#6f84c3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></button>
                            
                          </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card checkout">
            <div class="footer">
              <label class="price">¿Deseas agregar un producto nuevo?</label>
              <section class="section">
                <span class="overlay"></span>
                <div class="modal-box">
                  <h2>Agregar producto</h2>
                  <input type="text" id="email-id" name="text" class="input__email" placeholder="Nombre">
                  <input type="text" id="email-id" name="text" class="input__email" placeholder="Precio">
                  <input type="text" id="email-id" name="text" class="input__email" placeholder="Nombre de la distribuidora">
                  <div class="buttons">
                    <button class="close-btn">Confirmar</button>
                  </div>
                </div>
              </section>
              <button class="cssbuttons-io-button"> Agregar
                <div class="icon">
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M7 5C5.34315 5 4 6.34315 4 8V16C4 17.6569 5.34315 19 7 19H17C18.6569 19 20 17.6569 20 16V12.5C20 11.9477 20.4477 11.5 21 11.5C21.5523 11.5 22 11.9477 22 12.5V16C22 18.7614 19.7614 21 17 21H7C4.23858 21 2 18.7614 2 16V8C2 5.23858 4.23858 3 7 3H10.5C11.0523 3 11.5 3.44772 11.5 4C11.5 4.55228 11.0523 5 10.5 5H7Z" fill="#0c0f5a"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M18.8431 3.58579C18.0621 2.80474 16.7957 2.80474 16.0147 3.58579L11.6806 7.91992L11.0148 11.9455C10.8917 12.6897 11.537 13.3342 12.281 13.21L16.3011 12.5394L20.6347 8.20582C21.4158 7.42477 21.4158 6.15844 20.6347 5.37739L18.8431 3.58579ZM13.1933 11.0302L13.5489 8.87995L17.4289 5L19.2205 6.7916L15.34 10.6721L13.1933 11.0302Z" fill="#0c0f5a"></path> </g></svg>
                </div>
              </button>
            </div>
          </div>
        </div>
    </main>
    <script ></script>
  </body>
</html>

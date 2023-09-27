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
  border-radius: 19px;
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


.Btn {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 45px;
  height: 45px;
  border: none;
  border-radius: 50%;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition-duration: .3s;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
  background-color: rgb(56, 6, 138);

}

/* plus sign */
.sign {
  width: 100%;
  transition-duration: .3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

.sign svg {
  width: 25px;
  
}

.sign svg path {
  fill: rgb(214, 208, 248);
}
/* text */
.text-btn {
  position: absolute;
  right: 0%;
  width: 0;
  opacity: 0;
  color: white;
  font-size: 1.2em;
  font-weight: 600;
  transition-duration: .3s;
}
/* hover effect on button width */
.Btn:hover {
  width: 215px;
  border-radius: 40px;
  transition-duration: .3s;
}

.Btn:hover .sign {
  width: 30%;
  transition-duration: .3s;
  padding-left: 20px;
}
/* hover effect button's text */
.Btn:hover .text-btn {
  opacity: 1;
  width: 70%;
  transition-duration: .3s;
  padding-right: 10px;
}
/* button click effect*/
.Btn:active {
  transform: translate(2px ,2px);
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

.button {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 5.3em;
  height: 5.3em;
  border: none;
  border-radius: .4em;
  background: rgba(235, 252, 254, 0.8);
}

.container {
  position: relative;
  width: 3.5em;
  height: 3.1em;
  background: none;
  overflow: hidden;
}

.folder {
  content: '';
  position: absolute;
  /* box-shadow: 0 0 5px rgba(0, 0, 0, .3); */
}

.folder_one {
  bottom: 0;
  width: 100%;
  height: 88%;
  border-radius: 3px;
  border-top: 2px solid rgb(206, 167, 39);
  /* background-color: rgb(252, 212, 80); */
  background: linear-gradient(
    -35deg,
    rgb(238, 194, 47) 5%,
    rgb(255, 223, 118));
}

.folder_two {
  top: 5%;
  width: 38%;
  height: 19%;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  background-color: rgb(206, 167, 39);
  box-shadow: 0 1px 5px -2px rgba(0, 0, 0, .5);
}

.folder_two::before {
  content: '';
  position: absolute;
  display: inline;
  left: 88%;
  width: 0;
  height: 0;
  border-left: 7px solid rgb(206, 167, 39);
  border-top: .3em solid transparent;
  border-bottom: .3em solid transparent;
  /* background-color: rgb(206, 167, 39); */
}

.folder_three {
  display: flex;
  align-items: center;
  justify-content: center;
  left: .5em;
  bottom: 0;
  width: 2.5em;
  height: .9em;
  border-radius: 4px 4px 0 0;
  background: linear-gradient(
    -35deg,
    rgb(25, 102, 218),
    rgb(109, 165, 249));
  box-shadow: 0 0 5px rgba(0, 0, 0, .4);
}

.folder_four {
  left: 1em;
  bottom: .3em;
  width: 1.5em;
  height: .18em;
  border-radius: 1em;
  background-color: rgb(20, 77, 163);
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
}

.active_line {
  content: '';
  position: absolute;
  bottom: 0;
  width: .9em;
  height: .4em;
  background-color: #999;
  border: none;
  border-radius: 1em;
  transition: all .15s linear;
}

.button:active .active_line,
.button:focus .active_line {
  width: 2.3em;
  background-color: rgb(41, 126, 255);
}

.button:focus .container {
  animation: wow 1s forwards;
}

@keyframes wow {
  20% {
    scale: .8;
  }

  30% {
    scale: 1;
    transform: translateY(0);
  }

  50% {
    transform: translateY(-6px);
  }

  65% {
    transform: translateY(4px);
  }

  80% {
    transform: translateY(0);
  }

  100% {
    scale: 1;
  }
}

.text {
  content: '';
  position: absolute;
  top: -4.5em;
  width: 7.7em;
  height: 2.6em;
  background-color: #666;
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  border: none;
  border-radius: 5px;
  text-shadow: 0 0 10px rgb(0, 0, 0);
  opacity: 0;
  transition: all .25s linear;
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
            <a href="nuevos.php">Productos registrados</a>
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
            <label class="title">INVENTARIOS REGISTRADOS</label>
            <div class="steps">
              <div class="step">
                <div>
                  <span>En esta lista puedes encontrar todos los inventarios que se han registrado en Aconta, puedes desgargarlos en pdf tanto como en excel.</span>
                  <div class="item-card">
                    Creado el (fecha del inventario)
      
                    <button class="Btn">
                      <div class="sign"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5.625 15C5.625 14.5858 5.28921 14.25 4.875 14.25C4.46079 14.25 4.125 14.5858 4.125 15H5.625ZM4.875 16H4.125H4.875ZM19.275 15C19.275 14.5858 18.9392 14.25 18.525 14.25C18.1108 14.25 17.775 14.5858 17.775 15H19.275ZM11.1086 15.5387C10.8539 15.8653 10.9121 16.3366 11.2387 16.5914C11.5653 16.8461 12.0366 16.7879 12.2914 16.4613L11.1086 15.5387ZM16.1914 11.4613C16.4461 11.1347 16.3879 10.6634 16.0613 10.4086C15.7347 10.1539 15.2634 10.2121 15.0086 10.5387L16.1914 11.4613ZM11.1086 16.4613C11.3634 16.7879 11.8347 16.8461 12.1613 16.5914C12.4879 16.3366 12.5461 15.8653 12.2914 15.5387L11.1086 16.4613ZM8.39138 10.5387C8.13662 10.2121 7.66533 10.1539 7.33873 10.4086C7.01212 10.6634 6.95387 11.1347 7.20862 11.4613L8.39138 10.5387ZM10.95 16C10.95 16.4142 11.2858 16.75 11.7 16.75C12.1142 16.75 12.45 16.4142 12.45 16H10.95ZM12.45 5C12.45 4.58579 12.1142 4.25 11.7 4.25C11.2858 4.25 10.95 4.58579 10.95 5H12.45ZM4.125 15V16H5.625V15H4.125ZM4.125 16C4.125 18.0531 5.75257 19.75 7.8 19.75V18.25C6.61657 18.25 5.625 17.2607 5.625 16H4.125ZM7.8 19.75H15.6V18.25H7.8V19.75ZM15.6 19.75C17.6474 19.75 19.275 18.0531 19.275 16H17.775C17.775 17.2607 16.7834 18.25 15.6 18.25V19.75ZM19.275 16V15H17.775V16H19.275ZM12.2914 16.4613L16.1914 11.4613L15.0086 10.5387L11.1086 15.5387L12.2914 16.4613ZM12.2914 15.5387L8.39138 10.5387L7.20862 11.4613L11.1086 16.4613L12.2914 15.5387ZM12.45 16V5H10.95V16H12.45Z" fill="#ffffff"></path> </g></svg></div>
                      <div class="text-btn"> DESCARGAR
                      </div>
                    </button>
                      </div>
                  </div>
                  <div class="item-card">
                    Creado el (fecha del inventario)
      
                    <button class="Btn">
                      <div class="sign"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5.625 15C5.625 14.5858 5.28921 14.25 4.875 14.25C4.46079 14.25 4.125 14.5858 4.125 15H5.625ZM4.875 16H4.125H4.875ZM19.275 15C19.275 14.5858 18.9392 14.25 18.525 14.25C18.1108 14.25 17.775 14.5858 17.775 15H19.275ZM11.1086 15.5387C10.8539 15.8653 10.9121 16.3366 11.2387 16.5914C11.5653 16.8461 12.0366 16.7879 12.2914 16.4613L11.1086 15.5387ZM16.1914 11.4613C16.4461 11.1347 16.3879 10.6634 16.0613 10.4086C15.7347 10.1539 15.2634 10.2121 15.0086 10.5387L16.1914 11.4613ZM11.1086 16.4613C11.3634 16.7879 11.8347 16.8461 12.1613 16.5914C12.4879 16.3366 12.5461 15.8653 12.2914 15.5387L11.1086 16.4613ZM8.39138 10.5387C8.13662 10.2121 7.66533 10.1539 7.33873 10.4086C7.01212 10.6634 6.95387 11.1347 7.20862 11.4613L8.39138 10.5387ZM10.95 16C10.95 16.4142 11.2858 16.75 11.7 16.75C12.1142 16.75 12.45 16.4142 12.45 16H10.95ZM12.45 5C12.45 4.58579 12.1142 4.25 11.7 4.25C11.2858 4.25 10.95 4.58579 10.95 5H12.45ZM4.125 15V16H5.625V15H4.125ZM4.125 16C4.125 18.0531 5.75257 19.75 7.8 19.75V18.25C6.61657 18.25 5.625 17.2607 5.625 16H4.125ZM7.8 19.75H15.6V18.25H7.8V19.75ZM15.6 19.75C17.6474 19.75 19.275 18.0531 19.275 16H17.775C17.775 17.2607 16.7834 18.25 15.6 18.25V19.75ZM19.275 16V15H17.775V16H19.275ZM12.2914 16.4613L16.1914 11.4613L15.0086 10.5387L11.1086 15.5387L12.2914 16.4613ZM12.2914 15.5387L8.39138 10.5387L7.20862 11.4613L11.1086 16.4613L12.2914 15.5387ZM12.45 16V5H10.95V16H12.45Z" fill="#ffffff"></path> </g></svg></div>
                      <div class="text-btn"> DESCARGAR
                      </div>
                    </button>
                      </div>
                      <div class="item-card">
                        Creado el (fecha del inventario)
          
                        <button class="Btn">
                          <div class="sign"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5.625 15C5.625 14.5858 5.28921 14.25 4.875 14.25C4.46079 14.25 4.125 14.5858 4.125 15H5.625ZM4.875 16H4.125H4.875ZM19.275 15C19.275 14.5858 18.9392 14.25 18.525 14.25C18.1108 14.25 17.775 14.5858 17.775 15H19.275ZM11.1086 15.5387C10.8539 15.8653 10.9121 16.3366 11.2387 16.5914C11.5653 16.8461 12.0366 16.7879 12.2914 16.4613L11.1086 15.5387ZM16.1914 11.4613C16.4461 11.1347 16.3879 10.6634 16.0613 10.4086C15.7347 10.1539 15.2634 10.2121 15.0086 10.5387L16.1914 11.4613ZM11.1086 16.4613C11.3634 16.7879 11.8347 16.8461 12.1613 16.5914C12.4879 16.3366 12.5461 15.8653 12.2914 15.5387L11.1086 16.4613ZM8.39138 10.5387C8.13662 10.2121 7.66533 10.1539 7.33873 10.4086C7.01212 10.6634 6.95387 11.1347 7.20862 11.4613L8.39138 10.5387ZM10.95 16C10.95 16.4142 11.2858 16.75 11.7 16.75C12.1142 16.75 12.45 16.4142 12.45 16H10.95ZM12.45 5C12.45 4.58579 12.1142 4.25 11.7 4.25C11.2858 4.25 10.95 4.58579 10.95 5H12.45ZM4.125 15V16H5.625V15H4.125ZM4.125 16C4.125 18.0531 5.75257 19.75 7.8 19.75V18.25C6.61657 18.25 5.625 17.2607 5.625 16H4.125ZM7.8 19.75H15.6V18.25H7.8V19.75ZM15.6 19.75C17.6474 19.75 19.275 18.0531 19.275 16H17.775C17.775 17.2607 16.7834 18.25 15.6 18.25V19.75ZM19.275 16V15H17.775V16H19.275ZM12.2914 16.4613L16.1914 11.4613L15.0086 10.5387L11.1086 15.5387L12.2914 16.4613ZM12.2914 15.5387L8.39138 10.5387L7.20862 11.4613L11.1086 16.4613L12.2914 15.5387ZM12.45 16V5H10.95V16H12.45Z" fill="#ffffff"></path> </g></svg></div>
                          <div class="text-btn"> DESCARGAR
                          </div>
                        </button>
                          </div>
                          <div class="item-card">
                            Creado el (fecha del inventario)
              
                            <button class="Btn">
                              <div class="sign"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5.625 15C5.625 14.5858 5.28921 14.25 4.875 14.25C4.46079 14.25 4.125 14.5858 4.125 15H5.625ZM4.875 16H4.125H4.875ZM19.275 15C19.275 14.5858 18.9392 14.25 18.525 14.25C18.1108 14.25 17.775 14.5858 17.775 15H19.275ZM11.1086 15.5387C10.8539 15.8653 10.9121 16.3366 11.2387 16.5914C11.5653 16.8461 12.0366 16.7879 12.2914 16.4613L11.1086 15.5387ZM16.1914 11.4613C16.4461 11.1347 16.3879 10.6634 16.0613 10.4086C15.7347 10.1539 15.2634 10.2121 15.0086 10.5387L16.1914 11.4613ZM11.1086 16.4613C11.3634 16.7879 11.8347 16.8461 12.1613 16.5914C12.4879 16.3366 12.5461 15.8653 12.2914 15.5387L11.1086 16.4613ZM8.39138 10.5387C8.13662 10.2121 7.66533 10.1539 7.33873 10.4086C7.01212 10.6634 6.95387 11.1347 7.20862 11.4613L8.39138 10.5387ZM10.95 16C10.95 16.4142 11.2858 16.75 11.7 16.75C12.1142 16.75 12.45 16.4142 12.45 16H10.95ZM12.45 5C12.45 4.58579 12.1142 4.25 11.7 4.25C11.2858 4.25 10.95 4.58579 10.95 5H12.45ZM4.125 15V16H5.625V15H4.125ZM4.125 16C4.125 18.0531 5.75257 19.75 7.8 19.75V18.25C6.61657 18.25 5.625 17.2607 5.625 16H4.125ZM7.8 19.75H15.6V18.25H7.8V19.75ZM15.6 19.75C17.6474 19.75 19.275 18.0531 19.275 16H17.775C17.775 17.2607 16.7834 18.25 15.6 18.25V19.75ZM19.275 16V15H17.775V16H19.275ZM12.2914 16.4613L16.1914 11.4613L15.0086 10.5387L11.1086 15.5387L12.2914 16.4613ZM12.2914 15.5387L8.39138 10.5387L7.20862 11.4613L11.1086 16.4613L12.2914 15.5387ZM12.45 16V5H10.95V16H12.45Z" fill="#ffffff"></path> </g></svg></div>
                              <div class="text-btn"> DESCARGAR
                              </div>
                            </button>
                              </div>
                  </div>
                </div>
        </div>
    </main>
    <script src="main.js"></script>
  </body>
</html>

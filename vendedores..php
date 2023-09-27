<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Insumos de Limpieza</title>
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

.number-control {
  display: flex;
  align-items: right;
}

.number-quantity {
  background-color: #2b49ad75;
  padding: 0.25rem;
  border: 0;
  width: 50px;
  -moz-appearance: textfield;
  border-radius: 13px;
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

.button:hover .text {
  opacity: 1;
}

.more {
  height: 35px;
  width: 35px;
  background: none;
  border: none;
  margin-left: 20px;
  border-radius: 100px;
  left: 5px;
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

.input__email {
  margin-bottom: 20px;
  margin-left: 4%;
  width: 90%;
  padding: 10px 18px;
  font-size: 14px;
  font-family: inherit;
  box-shadow: 0 0 0 1px #b4b2b200;
  border: none;
  border-radius: 20px;
  background-color: #acc2db;
}

.input__email::placeholder {
  color: #5a548d;
  font-size: 12px;
}

.input__email:focus {
  
  outline: none;
  border: none;
}

.close-btn{
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 90px;
  height: 40px;
  border: none;
  border-radius: 10px;
  background: rgba(181, 224, 235, 0.8);
}
  </style>



</head>
<body>
<nav class="sidebar">
      <a href="#" class="logo">Aconta</a>
      <div class="menu-content">
        <ul class="menu-items">
          <li class="item">
            <a href="inventarios.php">Inventarios registrados</a>
          </li>
          <li class="item">
            <a href="#">Productos registrados</a>
          </li>
          <li class="item">
            <a href="#">Distribuidoras de consumo frecuente</a>
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
      <li class="item">
            <div class="submenu-item">
              <span>Producto</span>
              <i class="fa-solid fa-chevron-right"></i>

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
                  <span>Consumidos recurrentemete</span>
                  
                  <p>Selecciona los productos que has comprado en este mes y su cantidad, el precio se calculará automáticamente.</p>
                  <div class="item">
                  <div class="item-card">
                    Artículo 2 - Q30.00
                    <div class="number-control">
                      <input type="number" name="number" class="number-quantity">
                    </div>
                    <button class="Btn">
                      <div class="sign"><svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>ic_fluent_select_all_24_regular</title> <desc>Created with Sketch.</desc> <g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ic_fluent_select_all_24_regular" fill="#212121" fill-rule="nonzero"> <path d="M20.4961766,5.62668182 C21.3720675,5.93447702 22,6.76890777 22,7.75 L22,17.75 C22,20.0972102 20.0972102,22 17.75,22 L7.75,22 C6.76890777,22 5.93447702,21.3720675 5.62668182,20.4961766 L7.72396188,20.4995565 L17.75,20.5 C19.2687831,20.5 20.5,19.2687831 20.5,17.75 L20.5,7.75 L20.4960194,7.69901943 L20.4961766,5.62668182 Z M17.246813,2 C18.4894537,2 19.496813,3.00735931 19.496813,4.25 L19.496813,17.246813 C19.496813,18.4894537 18.4894537,19.496813 17.246813,19.496813 L4.25,19.496813 C3.00735931,19.496813 2,18.4894537 2,17.246813 L2,4.25 C2,3.00735931 3.00735931,2 4.25,2 L17.246813,2 Z M17.246813,3.5 L4.25,3.5 C3.83578644,3.5 3.5,3.83578644 3.5,4.25 L3.5,17.246813 C3.5,17.6610266 3.83578644,17.996813 4.25,17.996813 L17.246813,17.996813 C17.6610266,17.996813 17.996813,17.6610266 17.996813,17.246813 L17.996813,4.25 C17.996813,3.83578644 17.6610266,3.5 17.246813,3.5 Z M9.58114564,11.3581942 L13.4696699,7.46966991 C13.7625631,7.1767767 14.2374369,7.1767767 14.5303301,7.46966991 C14.7965966,7.73593648 14.8208027,8.15260016 14.6029482,8.44621165 L14.5303301,8.53033009 L10.0303301,13.0303301 C9.73449239,13.3261678 9.26134027,13.3189471 8.97360394,13.0344464 L8.9,12.95 L7.4,10.95 C7.15147186,10.6186292 7.21862915,10.1485281 7.55,9.9 C7.85124623,9.67406533 8.26714548,9.7090277 8.52699676,9.96621555 L8.6,10.05 L9.58114564,11.3581942 L13.4696699,7.46966991 L9.58114564,11.3581942 Z" id="🎨-Color"> </path> </g> </g> </g></svg></div>
                      <div class="text-btn"> seleccionar
                      </div>
                    </button>
                    <button class="more">
                      <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>ionicons-v5-f</title><circle cx="256" cy="256" r="32" style="fill:none;stroke:#3c5283;stroke-miterlimit:10;stroke-width:32px"></circle><circle cx="416" cy="256" r="32" style="fill:none;stroke:#3c5283;stroke-miterlimit:10;stroke-width:32px"></circle><circle cx="96" cy="256" r="32" style="fill:none;stroke:#3c5283;stroke-miterlimit:10;stroke-width:32px"></circle></g></svg></button>
                      <section class="section">
                        <span class="overlay"></span>
                        <div class="modal-box">
                          <h2>Editar producto</h2>
                          <input type="text" id="email-id" name="text" class="input__email" placeholder="Cambiar nombre">
                          <input type="text" id="email-id" name="text" class="input__email" placeholder="Cambiar precio">
                          <div class="buttons">
                            <button class="close-btn">Confirmar</button>
                          </div>
                        </div>
                      </section>
                      </div>
                  </div>
                  </div>
                  <div class="item">
                  <div class="item-card">
                    Artículo 2 - Q30.00
                    <div class="number-control">
                      <input type="number" name="number" class="number-quantity">
                    </div>
                    <button class="Btn">
                      <div class="sign"><svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>ic_fluent_select_all_24_regular</title> <desc>Created with Sketch.</desc> <g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ic_fluent_select_all_24_regular" fill="#212121" fill-rule="nonzero"> <path d="M20.4961766,5.62668182 C21.3720675,5.93447702 22,6.76890777 22,7.75 L22,17.75 C22,20.0972102 20.0972102,22 17.75,22 L7.75,22 C6.76890777,22 5.93447702,21.3720675 5.62668182,20.4961766 L7.72396188,20.4995565 L17.75,20.5 C19.2687831,20.5 20.5,19.2687831 20.5,17.75 L20.5,7.75 L20.4960194,7.69901943 L20.4961766,5.62668182 Z M17.246813,2 C18.4894537,2 19.496813,3.00735931 19.496813,4.25 L19.496813,17.246813 C19.496813,18.4894537 18.4894537,19.496813 17.246813,19.496813 L4.25,19.496813 C3.00735931,19.496813 2,18.4894537 2,17.246813 L2,4.25 C2,3.00735931 3.00735931,2 4.25,2 L17.246813,2 Z M17.246813,3.5 L4.25,3.5 C3.83578644,3.5 3.5,3.83578644 3.5,4.25 L3.5,17.246813 C3.5,17.6610266 3.83578644,17.996813 4.25,17.996813 L17.246813,17.996813 C17.6610266,17.996813 17.996813,17.6610266 17.996813,17.246813 L17.996813,4.25 C17.996813,3.83578644 17.6610266,3.5 17.246813,3.5 Z M9.58114564,11.3581942 L13.4696699,7.46966991 C13.7625631,7.1767767 14.2374369,7.1767767 14.5303301,7.46966991 C14.7965966,7.73593648 14.8208027,8.15260016 14.6029482,8.44621165 L14.5303301,8.53033009 L10.0303301,13.0303301 C9.73449239,13.3261678 9.26134027,13.3189471 8.97360394,13.0344464 L8.9,12.95 L7.4,10.95 C7.15147186,10.6186292 7.21862915,10.1485281 7.55,9.9 C7.85124623,9.67406533 8.26714548,9.7090277 8.52699676,9.96621555 L8.6,10.05 L9.58114564,11.3581942 L13.4696699,7.46966991 L9.58114564,11.3581942 Z" id="🎨-Color"> </path> </g> </g> </g></svg></div>
                      <div class="text-btn"> seleccionar
                      </div>
                    </button>
                    <button class="more">
                      <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>ionicons-v5-f</title><circle cx="256" cy="256" r="32" style="fill:none;stroke:#3c5283;stroke-miterlimit:10;stroke-width:32px"></circle><circle cx="416" cy="256" r="32" style="fill:none;stroke:#3c5283;stroke-miterlimit:10;stroke-width:32px"></circle><circle cx="96" cy="256" r="32" style="fill:none;stroke:#3c5283;stroke-miterlimit:10;stroke-width:32px"></circle></g></svg></button>
                      <section class="section">
                        <span class="overlay"></span>
                        <div class="modal-box">
                          <h2>Editar producto</h2>
                          <input type="text" id="email-id" name="text" class="input__email" placeholder="Cambiar nombre">
                          <input type="text" id="email-id" name="text" class="input__email" placeholder="Cambiar precio">
                          <div class="buttons">
                            <button class="close-btn">Confirmar</button>
                          </div>
                        </div>
                      </section>
                  </div>
                  </div>
                  <div class="item">
                  <div class="item-card">
                    Artículo 2 - Q30.00
                    <div class="number-control">
                      <input type="number" name="number" class="number-quantity">
                    </div>
                    <button class="Btn">
                      <div class="sign"><svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>ic_fluent_select_all_24_regular</title> <desc>Created with Sketch.</desc> <g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ic_fluent_select_all_24_regular" fill="#212121" fill-rule="nonzero"> <path d="M20.4961766,5.62668182 C21.3720675,5.93447702 22,6.76890777 22,7.75 L22,17.75 C22,20.0972102 20.0972102,22 17.75,22 L7.75,22 C6.76890777,22 5.93447702,21.3720675 5.62668182,20.4961766 L7.72396188,20.4995565 L17.75,20.5 C19.2687831,20.5 20.5,19.2687831 20.5,17.75 L20.5,7.75 L20.4960194,7.69901943 L20.4961766,5.62668182 Z M17.246813,2 C18.4894537,2 19.496813,3.00735931 19.496813,4.25 L19.496813,17.246813 C19.496813,18.4894537 18.4894537,19.496813 17.246813,19.496813 L4.25,19.496813 C3.00735931,19.496813 2,18.4894537 2,17.246813 L2,4.25 C2,3.00735931 3.00735931,2 4.25,2 L17.246813,2 Z M17.246813,3.5 L4.25,3.5 C3.83578644,3.5 3.5,3.83578644 3.5,4.25 L3.5,17.246813 C3.5,17.6610266 3.83578644,17.996813 4.25,17.996813 L17.246813,17.996813 C17.6610266,17.996813 17.996813,17.6610266 17.996813,17.246813 L17.996813,4.25 C17.996813,3.83578644 17.6610266,3.5 17.246813,3.5 Z M9.58114564,11.3581942 L13.4696699,7.46966991 C13.7625631,7.1767767 14.2374369,7.1767767 14.5303301,7.46966991 C14.7965966,7.73593648 14.8208027,8.15260016 14.6029482,8.44621165 L14.5303301,8.53033009 L10.0303301,13.0303301 C9.73449239,13.3261678 9.26134027,13.3189471 8.97360394,13.0344464 L8.9,12.95 L7.4,10.95 C7.15147186,10.6186292 7.21862915,10.1485281 7.55,9.9 C7.85124623,9.67406533 8.26714548,9.7090277 8.52699676,9.96621555 L8.6,10.05 L9.58114564,11.3581942 L13.4696699,7.46966991 L9.58114564,11.3581942 Z" id="🎨-Color"> </path> </g> </g> </g></svg></div>
                      <div class="text-btn"> seleccionar
                      </div>
                    </button>
                    <button class="more">
                      <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>ionicons-v5-f</title><circle cx="256" cy="256" r="32" style="fill:none;stroke:#3c5283;stroke-miterlimit:10;stroke-width:32px"></circle><circle cx="416" cy="256" r="32" style="fill:none;stroke:#3c5283;stroke-miterlimit:10;stroke-width:32px"></circle><circle cx="96" cy="256" r="32" style="fill:none;stroke:#3c5283;stroke-miterlimit:10;stroke-width:32px"></circle></g></svg></button>
                      <section class="section">
                        <span class="overlay"></span>
                        <div class="modal-box">
                          <h2>Editar producto</h2>
                          <input type="text" id="email-id" name="text" class="input__email" placeholder="Cambiar nombre">
                          <input type="text" id="email-id" name="text" class="input__email" placeholder="Cambiar precio">
                          <div class="buttons">
                            <button class="close-btn">Confirmar</button>
                          </div>
                        </div>
                      </section>
                    </div>
                  </div>
                  <div class="item">

                  <div class="item-card">
                    Artículo 2 - Q30.00
                    <div class="number-control">
                      <input type="number" name="number" class="number-quantity">
                    </div>
                    <button class="Btn">
                      <div class="sign"><svg viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools --> <title>ic_fluent_select_all_24_regular</title> <desc>Created with Sketch.</desc> <g id="🔍-Product-Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="ic_fluent_select_all_24_regular" fill="#212121" fill-rule="nonzero"> <path d="M20.4961766,5.62668182 C21.3720675,5.93447702 22,6.76890777 22,7.75 L22,17.75 C22,20.0972102 20.0972102,22 17.75,22 L7.75,22 C6.76890777,22 5.93447702,21.3720675 5.62668182,20.4961766 L7.72396188,20.4995565 L17.75,20.5 C19.2687831,20.5 20.5,19.2687831 20.5,17.75 L20.5,7.75 L20.4960194,7.69901943 L20.4961766,5.62668182 Z M17.246813,2 C18.4894537,2 19.496813,3.00735931 19.496813,4.25 L19.496813,17.246813 C19.496813,18.4894537 18.4894537,19.496813 17.246813,19.496813 L4.25,19.496813 C3.00735931,19.496813 2,18.4894537 2,17.246813 L2,4.25 C2,3.00735931 3.00735931,2 4.25,2 L17.246813,2 Z M17.246813,3.5 L4.25,3.5 C3.83578644,3.5 3.5,3.83578644 3.5,4.25 L3.5,17.246813 C3.5,17.6610266 3.83578644,17.996813 4.25,17.996813 L17.246813,17.996813 C17.6610266,17.996813 17.996813,17.6610266 17.996813,17.246813 L17.996813,4.25 C17.996813,3.83578644 17.6610266,3.5 17.246813,3.5 Z M9.58114564,11.3581942 L13.4696699,7.46966991 C13.7625631,7.1767767 14.2374369,7.1767767 14.5303301,7.46966991 C14.7965966,7.73593648 14.8208027,8.15260016 14.6029482,8.44621165 L14.5303301,8.53033009 L10.0303301,13.0303301 C9.73449239,13.3261678 9.26134027,13.3189471 8.97360394,13.0344464 L8.9,12.95 L7.4,10.95 C7.15147186,10.6186292 7.21862915,10.1485281 7.55,9.9 C7.85124623,9.67406533 8.26714548,9.7090277 8.52699676,9.96621555 L8.6,10.05 L9.58114564,11.3581942 L13.4696699,7.46966991 L9.58114564,11.3581942 Z" id="🎨-Color"> </path> </g> </g> </g></svg></div>
                      <div class="text-btn"> seleccionar
                      </div>
                    </button>
                    <button class="more">
                      <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><title>ionicons-v5-f</title><circle cx="256" cy="256" r="32" style="fill:none;stroke:#3c5283;stroke-miterlimit:10;stroke-width:32px"></circle><circle cx="416" cy="256" r="32" style="fill:none;stroke:#3c5283;stroke-miterlimit:10;stroke-width:32px"></circle><circle cx="96" cy="256" r="32" style="fill:none;stroke:#3c5283;stroke-miterlimit:10;stroke-width:32px"></circle></g></svg></button>
                      <section class="section">
                        <span class="overlay"></span>
                        <div class="modal-box">
                          <h2>Editar producto</h2>
                          <input type="text" id="email-id" name="text" class="input__email" placeholder="Cambiar nombre">
                          <input type="text" id="email-id" name="text" class="input__email" placeholder="Cambiar precio">
                          <div class="buttons">
                            <button class="close-btn">Confirmar</button>
                          </div>
                        </div>
                      </section>
                      </div>
                      </div>

                  </div>
                </div>
<!-- Agrega un elemento <ul> donde se mostrarán los productos -->



                    <hr>
                    <div>
                    <button id="toggleButton">Mostrar/Ocultar</button>
    <iframe id="iframe" src="nuevos.php" style="display: none;"></iframe>



</div>
                    <hr>
                    <div class="payments">
                      <span>Tabla simulada</span>
                      
                      <p>este es un ejemplo de lo que aparecerá en tu archivo de excel.</p>
                      <table>
                <thead>
                  <tr>
                    <th class="hol" >Producto</th>
                    <th class="hol" > Cantidad</th>
                    <th class="hol" >Precio Unitario</th>
                    <th class="hol" >Total</th>
                  </tr>
                </thead>
                <tbody class="hola" id="tablaBody">
                
                  <tbody id="tablaBody">
        </tbody>
    </table>
    <ul id="listaProductos">
  <!-- Los productos se agregarán aquí -->
</ul>
    
    <!-- Botón de impresión -->
    <button id="printInvoice" class="cssbuttons-io-button">Imprimir Factura
        <div class="icon">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff">
                <!-- Puedes agregar un icono de impresión aquí -->
            </svg>
        </div>
    </button>
</div>
        <div class="card checkout">
            <div class="footer">
                <label class="price">Cuando tu inventario esté listo, no olvides guardarlo.</label>
                <button id="exportToExcel" class="cssbuttons-io-button">Subir a Excel
                    <div class="icon">
                        <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
                            <!-- ... (Ícono de Excel) ... -->
                        </svg>
                    </div>
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>

    <script>
    // Obtener una referencia a la tabla
const tablaBody = document.getElementById('tablaBody');
const exportToExcelButton = document.getElementById('exportToExcel');

// Función para agregar un artículo a la tabla simulada
function agregarArticulo(nombre, cantidad, precioUnitario, total) {
    const fila = document.createElement('tr');
    fila.innerHTML = `
        <td>${nombre}</td>
        <td>${cantidad}</td>
        <td>Q${precioUnitario.toFixed(2)}</td>
        <td>Q${total}</td>
    `;
    tablaBody.appendChild(fila);
}



// Manejar el clic en el botón "Subir a Excel"
exportToExcelButton.addEventListener('click', function () {
    /* Crear un nuevo libro de Excel */
    var wb = XLSX.utils.book_new();

    /* Crear una hoja de trabajo */
    var ws = XLSX.utils.table_to_sheet(tablaBody);

    /* Agregar la hoja de trabajo al libro */
    XLSX.utils.book_append_sheet(wb, ws, 'Inventario');

    /* Guardar el libro como un archivo Excel */
    XLSX.writeFile(wb, 'inventario.xlsx');
});


// Obtener una referencia al botón de impresión
const printInvoiceButton = document.getElementById('printInvoice');

// Manejar el clic en el botón "Imprimir Factura"
printInvoiceButton.addEventListener('click', function () {
    // Obtener el contenido HTML de la tabla simulada
    const tablaSimuladaHTML = document.querySelector('.payments').innerHTML;

    // Abrir una nueva ventana para imprimir
    const ventanaImpresion = window.open('', '', 'height=600,width=800');
    
    // Agregar el contenido HTML a la ventana de impresión
    ventanaImpresion.document.write(`
        <html>
        <head>
            <title>Factura</title>
            <!-- Agrega aquí los estilos CSS si es necesario -->
        </head>
        <body>
            ${tablaSimuladaHTML}
        </body>
        </html>
    `);
    
    // Imprimir la ventana de impresión
    ventanaImpresion.document.close();
    ventanaImpresion.print();
    ventanaImpresion.close();
});

// Obtener una referencia a la lista de productos
const listaProductos = document.getElementById('listaProductos');

// Función para agregar un producto a la lista
function agregarProducto(nombreProducto, cantidad) {
  // Crear un elemento de lista (li) para el producto
  const productoItem = document.createElement('li');
  productoItem.textContent = `${nombreProducto} - Cantidad: ${cantidad}`;

  // Agregar el elemento de lista a la lista de productos
  listaProductos.appendChild(productoItem);
}

// Manejar el clic en el botón "seleccionar" de un artículo
const botonesSeleccionar = document.querySelectorAll('.Btn');
botonesSeleccionar.forEach((boton, index) => {
    boton.addEventListener('click', () => {
        // Obtener los datos del artículo (puedes ajustar esto según tu estructura)
        const item = boton.closest('.item'); // Obtener el elemento .item más cercano al botón
        const nombre = item.textContent.trim().split('-')[0].trim();
        const cantidad = parseInt(item.querySelector('.number-quantity').value, 10);
        const precioUnitario = parseFloat(item.textContent.match(/Q([\d.]+)/)[1]); // Extraer el precio unitario
        const total = (precioUnitario * cantidad).toFixed(2);

        // Agregar el artículo a la tabla simulada
        agregarArticulo(nombre, cantidad, precioUnitario, total);
    });
});

const toggleButton = document.getElementById('toggleButton');
        const iframe = document.getElementById('iframe');

        let isVisible = false;

        toggleButton.addEventListener('click', () => {
            isVisible = !isVisible;
            iframe.style.display = isVisible ? 'block' : 'none';
        });
    </script>
 
</body>
</html>

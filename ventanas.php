<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>wasa</title>
    <link rel="stylesheet" href="styles.css" />
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
.main {
  left: 260px;
  width: calc(100% - 260px);
  transition: all 0.5s ease;
  z-index: 1000;
}
.sidebar.close ~ .navbar,
.sidebar.close ~ .main {
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
.main {
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  z-index: 100;
  background: #ffffff;
}

.empty{
    color: #adadad;
    font-size: 40px;
    text-align: center;
}
.empty {
        display: none; /* Oculta el mensaje de "No hay contenido" inicialmente */
      }

      /* Estilo para la lista de proveedores */
      #proveedoresContainer ul {
        list-style-type: none;
        padding: 0;
      }

      #proveedoresContainer ul li {
        margin-bottom: 10px;
      }
    </style>
  </head>
  <body>
    <nav class="sidebar">
      <a href="#" class="logo">Aconta</a>
      <div class="menu-content">
        <ul class="menu-items">
          <div class="menu-title">Reportes</div>
          <li class="item">
            <a href="#">Inventarios registrados</a>
          </li>
          <li class="item">
            <div class="submenu-item">
              <span>Productos</span>
              <i class="fa-solid fa-chevron-right"></i>








              
            </div>
            <ul class="menu-items submenu">
              <div class="menu-title">
                <i class="fa-solid fa-chevron-left"></i>
                Productos
              </div>
              <li class="item">
                <a href="nuevos.php">Proveedores</a>
              </li>
              <li class="item">
                <a href="vendedores.php">Productos registrados</a>


              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <nav class="navbar">
      <i class="fa-solid fa-bars" id="sidebar-close"></i>
    </nav>
    <main class="main">

      <svg height="500px" viewBox="0 0 50 50" id="Message_And_Communication_Icons" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <g> <g> <polygon points="37.2,24.4 41.4,21.6 41.4,36.7 37.2,36.7 " style="fill:#c7c7c7;"></polygon> </g> </g> <g> <g> <polygon points="40.5,39.2 37.3,39.2 37.3,38 39.3,38 39.3,20 40.5,20 " style="fill:#b3b3b3;"></polygon> </g> </g> <g> <g> <polygon points="31.6,39.2 10,39.2 10,20 11.2,20 11.2,38 31.6,38 " style="fill:#b3b3b3;"></polygon> </g> </g> <g> <g> <path d="M19.2,26.2l-8.9-5.6C10.1,20.4,10,20.2,10,20c0-0.2,0.1-0.4,0.2-0.5L24.9,8.9 c0.2-0.2,0.5-0.2,0.7,0l14.6,10.6c0.2,0.1,0.3,0.3,0.2,0.5c0,0.2-0.1,0.4-0.3,0.5l-8.9,5.6l-0.6-1l8.1-5.2l-13.5-9.8L11.7,20 l8.1,5.2L19.2,26.2z" style="fill:#b3b3b3;"></path> </g> </g> </g> <g> <g> <g> <path d="M30.9,25.5c-0.8-0.8-1.7-1.3-2.6-1.6c2.2,2.6,2.1,6.5-0.4,8.9c-1.8,1.8-4.4,2.3-6.7,1.6 c0.1,0.1,0.2,0.3,0.4,0.4c2.6,2.6,6.7,2.6,9.3,0S33.5,28.1,30.9,25.5z" style="fill:#c7c7c7;"></path> </g> </g> <g> <g> <path d="M25.3,36.3c-1.8,0-3.7-0.7-5.1-2.1c-2.8-2.8-2.8-7.3,0-10.1c2.8-2.8,7.3-2.8,10.1,0 c2.8,2.8,2.8,7.3,0,10.1C29,35.6,27.1,36.3,25.3,36.3z M25.3,23.2c-1.5,0-3.1,0.6-4.2,1.7c-2.3,2.3-2.3,6.1,0,8.4 c2.3,2.3,6.1,2.3,8.4,0c2.3-2.3,2.3-6.1,0-8.4C28.3,23.8,26.8,23.2,25.3,23.2z" style="fill:#b3b3b3;"></path> </g> </g> <g> <g> <path d="M22.9,33.3c-0.4-0.2-0.7-0.5-1-0.7c-0.7-0.7-1.2-1.7-1.3-2.7l1.2-0.2c0.1,0.8,0.5,1.5,1,2 c0.2,0.2,0.5,0.4,0.7,0.6L22.9,33.3z" style="fill:#c7c7c7;"></path> </g> </g> <g> <g> <path d="M21.8,28.6l-1.2-0.2c0-0.1,0-0.3,0.1-0.4c0.1-0.4,0.3-0.8,0.5-1.2l1,0.6 c-0.2,0.3-0.3,0.6-0.3,0.9C21.8,28.4,21.8,28.5,21.8,28.6z" style="fill:#c7c7c7;"></path> </g> </g> <g> <g> <rect height="1.2" style="fill:#b3b3b3;" transform="matrix(0.7071 0.7071 -0.7071 0.7071 36.3131 -12.7724)" width="10.3" x="28.4" y="36.8"></rect> </g> </g> </g> <g> <g> <rect height="1.2" style="fill:#b3b3b3;" width="6.4" x="10.6" y="19.4"></rect> </g> </g> <g> <g> <rect height="1.2" style="fill:#b3b3b3;" width="6" x="33.6" y="19.4"></rect> </g> </g> <g> <g> <rect height="1.2" style="fill:#b3b3b3;" width="2.1" x="19.5" y="19.4"></rect> </g> </g> </g> </g></svg>
      <h1 class="empty">No hay contenido</h1>
    </main>

    <main class="main">
      <div id="proveedoresContainer" class="empty">
        <!-- Aquí se mostrarán los nombres de los proveedores -->
      </div>
    </main>






    
    <script >
        const sidebar = document.querySelector(".sidebar");
const sidebarClose = document.querySelector("#sidebar-close");
const menu = document.querySelector(".menu-content");
const menuItems = document.querySelectorAll(".submenu-item");
const subMenuTitles = document.querySelectorAll(".submenu .menu-title");
sidebarClose.addEventListener("click", () => sidebar.classList.toggle("close"));
menuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    menu.classList.add("submenu-active");
    item.classList.add("show-submenu");
    menuItems.forEach((item2, index2) => {
      if (index !== index2) {
        item2.classList.remove("show-submenu");
      }
    });
  });
});
subMenuTitles.forEach((title) => {
  title.addEventListener("click", () => {
    menu.classList.remove("submenu-active");
  });
});


  
      // Agrega un evento clic al elemento "Proveedores"
      const proveedoresLink = document.querySelector(".submenu-item span");

      proveedoresLink.addEventListener("click", () => {
        // Accede al contenedor de proveedores
        const proveedoresContainer = document.getElementById(
          "proveedoresContainer"
        );

        // Llena el contenedor con los nombres de los proveedores
        proveedoresContainer.innerHTML = `
          <ul>
            <li>Proveedor 1</li>
            <li>Proveedor 2</li>
            <li>Proveedor 3</li>
            <li>Proveedor 4</li>
            <li>Proveedor 5</li>
            <li>Proveedor 6</li>
            <li>Proveedor 7</li>
            <li>Proveedor 8</li>
            <li>Proveedor 9</li>
            <li>Proveedor 10</li>
          </ul>
        `;

        // Muestra el contenedor de proveedores y oculta el mensaje "No hay contenido"
        proveedoresContainer.style.display = "block";
        const emptyMessage = document.querySelector(".empty");
        emptyMessage.style.display = "none";
      });
    </script>








  </body>
</html>


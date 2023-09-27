  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Dancing+Script&family=Poppins:ital,wght@0,700;1,600&family=Roboto+Mono:wght@700&display=swap');
  *{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      letter-spacing: 1px;
      font-weight: 300;
      font-family: 'Roboto Mono', monospace;
  }
  body{
      overflow-x: hidden;
  }

  .wave-header{
    min-height: 100vh;
    width: 100%;
      position: absolute;
  }

  html{
    scroll-behavior: smooth;
  }


  nav{
      height: 4.5rem;
      width: 100vw;
      background: rgba(0, 0, 0, 0);
      display: flex;
      position: fixed;
      z-index: 10;
  }
  
  /*Styling logo*/
  .logo{
      padding:1vh 1vw;
      text-align: left;
      cursor: pointer

  }
  .logo img {
      height: 4rem;
      width: 5rem;
  }
  
  /*Styling Links*/
  .nav-links{
      display: flex;
      list-style: none; 
      width: 88vw;
      padding: 0 0.7vw;
      padding-right: 80px;
      justify-content: space-evenly;
      align-items: center;
      text-transform: uppercase; 
  }

  .nav-links li a{
      text-decoration: none;
      margin: 0 0.7vw;
      letter-spacing: 1px;
      color: rgb(6, 25, 109)
  }

  .nav-links li a:hover::after{
      width: 100%; 
  }

  .nav-links li a:hover{
      color: rgb(21, 37, 182);
  }

  .nav-links li a::after{
      content: "";
      position: absolute;
      background-color: rgb(27, 27, 209);
      height: 3px;
      width: 0;
      left: 0;
      bottom: -10px;
      transition: 0.5s;
  }

  .account{
    cursor: pointer;
  }

  .nav-links li {
      position: relative;
  }
  .nav-links li a:hover::before{
      width: 80%;

  }

  
  /*Styling Hamburger Icon*/
  .hamburger div{
      width: 30px;
      height:3px;
      background:  #000000;
      margin: 5px;
      transition: all 0.3s ease;
  }
  .hamburger{
      display: none;
  }
  
  /*Stying for small screens*/
  @media screen and (max-width: 800px){
      nav{
          position: fixed;
          z-index: 3;
      }
      .hamburger{
          display:block;
          position: absolute;
          cursor: pointer;
          right: 5%;
          top: 50%;
          transform: translate(-5%, -50%);
          z-index: 2;
          transition: all 0.7s ease;
      }
      .nav-links{
          position: fixed;
          background: #fff8ef;
          height: 100vh;
          width: 100%;
          flex-direction: column;
          clip-path: circle(50px at 90% -20%);
          -webkit-clip-path: circle(50px at 90% -10%);
          transition: all 1s ease-out;
          pointer-events: none;
      }
      .nav-links.open{
          clip-path: circle(1000px at 90% -10%);
          -webkit-clip-path: circle(1000px at 90% -10%);
          pointer-events: all;
      }
      .nav-links li{
          opacity: 0;
      }
      .nav-links li:nth-child(1){
          transition: all 0.5s ease 0.2s;
      }
      .nav-links li:nth-child(2){
          transition: all 0.5s ease 0.4s;
      }
      .nav-links li:nth-child(3){
          transition: all 0.5s ease 0.6s;
      }
      .nav-links li:nth-child(4){
          transition: all 0.5s ease 0.7s;
      }
      .nav-links li:nth-child(5){
          transition: all 0.5s ease 0.8s;
      }
      .nav-links li:nth-child(6){
          transition: all 0.5s ease 0.9s;
          margin: 0;
      }
      .nav-links li:nth-child(7){
          transition: all 0.5s ease 1s;
          margin: 0;
      }
      li.fade{
          opacity: 1;
      }
  }
  /*Animating Hamburger Icon on Click*/
  .toggle .line1{
      transform: rotate(-45deg) translate(-5px,6px);
  }
  .toggle .line2{
      transition: all 0.7s ease;
      width:0;
  }
  .toggle .line3{
      transform: rotate(45deg) translate(-5px,-6px);
  }
  
  .logo :hover{   
      animation: rotate624 0.7s ease-in-out both;
      animation: storm1261 0.7s ease-in-out both;
      animation-delay: 0.06s;
  }

  @keyframes rotate624 {
      0% {
        transform: rotate(0deg) translate3d(0, 0, 0);
      }
    
      25% {
        transform: rotate(3deg) translate3d(0, 0, 0);
      }
    
      50% {
        transform: rotate(-3deg) translate3d(0, 0, 0);
      }
    
      75% {
        transform: rotate(1deg) translate3d(0, 0, 0);
      }
    
      100% {
        transform: rotate(0deg) translate3d(0, 0, 0);
      }
    }
    
    @keyframes storm1261 {
      0% {
        transform: translate3d(0, 0, 0) translateZ(0);
      }
    
      25% {
        transform: translate3d(4px, 0, 0) translateZ(0);
      }
    
      50% {
        transform: translate3d(-3px, 0, 0) translateZ(0);
      }
    
      75% {
        transform: translate3d(2px, 0, 0) translateZ(0);
      }
    
      100% {
        transform: translate3d(0, 0, 0) translateZ(0);
      }
    }
    
    .shine {
      overflow: hidden;
      position: relative;
    }
    
    .shine:after {
      background: #fffff8;
      content: "";
      height: 155px;
      left: -75px;
      opacity: 0.4;
      position: absolute;
      top: -50px;
      transform: rotate(35deg);
      transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
      width: 50px;
      z-index: -10;
    }
    
    .shine:hover:after {
      left: 120%;
      transition: all 550ms cubic-bezier(0.19, 1, 0.22, 1);
    }

    .home__img-bg {
    width: 5%;
    height: 5%;
    padding-left: 73%;
    padding-top: 18%;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    justify-self: flex-end;
    transform: translateX(1.5rem);
    position: absolute;
  }

  .column {
    left: 15px;
    position: absolute;
    top: 25%;
    width: 50%;
  }


  .home-title{
    font-size: 45px;
    font-family: 'Poppins', sans-serif;
    color: #4b088a;
    margin-bottom: 20px;
  }

  .home-title:hover{
    cursor: pointer;
  }

  .home-text{
    font-size: 20px;
    text-align: left;
    color: #26207c;
  }

  .button {
    top: 110%;
    left: 40px;
    cursor: pointer;
    position: absolute;
    padding: 10px 24px;
    font-size: 18px;
    color: rgb(20, 63, 204);
    border: 2px solid rgb(20, 63, 204);
    border-radius: 34px;
    background-color: transparent;
    font-weight: 600;
    transition: all 0.3s cubic-bezier(0.23, 1, 0.320, 1);
    overflow: hidden;
  }
  
  .button::before {
    content: '';
    position: absolute;
    inset: 0;
    margin: auto;
    width: 60px;
    height: 50px;
    border-radius: inherit;
    scale: 0;
    z-index: -1;
    background-color: rgb(20, 63, 204);
    transition: all 0.6s cubic-bezier(0.23, 1, 0.320, 1);
  }
  
  .button:hover::before {
    scale: 3;
  }
  
  .button:hover {
    color: #212121;
    scale: 1.1;
    box-shadow: 0 0px 20px rgba(193, 163, 98,0.4);
  }
  
  .button:active {
    scale: 1;
  }
  
  
  .cards {
    top: 100%;
    position: absolute;
    margin-top: 5px;
    margin-left: 50px;
    display: flex;
      flex-direction: column;
      gap: 15px;
    }
    
    .cards .red {
      background: linear-gradient(123deg, rgb(10, 42, 184) 0%, rgb(25, 142, 209) 35%, rgb(0, 255, 221) 100%);
    }
    
    .cards .white {
          background: linear-gradient(123deg, rgb(10, 42, 184) 0%, rgb(25, 142, 209) 35%, rgb(0, 255, 221) 100%);
    }
    
    .cards .blue {
          background: linear-gradient(123deg, rgb(10, 42, 184) 0%, rgb(25, 142, 209) 35%, rgb(0, 255, 221) 100%);
    }
    
    .cards .card {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      text-align: center;
      height: 200px;
      width: 300px;
      border-radius: 10px;
      color: rgb(1, 1, 1);
      cursor: pointer;
      transition: 400ms;
    }
    
    .cards .card p.tip {
      font-size: 1em;
      font-weight: 700;
    }
    
    .cards .card p.second-text {
      font-size: .7em;
    }
    
    .cards .card:hover {
      transform: scale(1.1, 1.1);
    }
    
    .cards:hover > .card:not(:hover) {
      filter: blur(5px);
      transform: scale(0.9, 0.9);
    }

    .servicios{
        height: 100%;
    }
    
    .service-img{
      position: absolute;
      left: 150%;
      height: 700px;
      height: 700px;
      cursor: pointer;
    }

    footer{
      position: absolute;
      background: #140B5C;
      top: 230%;
      width: 100%;
      left: 0;
    }
    footer::before{
      content: '';
      position: absolute;
      left: 0;
      top: 100px;
      height: 1px;
      width: 100%;
      background: #AFAFB6;
    }
    footer .content{
      max-width: 1250px;
      margin: auto;
      padding: 30px 40px 40px 40px;
    }
    footer .content .top{
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 50px;
    }
    .content .top .logo-details{
      color: #fff;
      font-size: 30px;
    }
    .content .top .media-icons{
      display: flex;
    }
    .content .top .media-icons a{
      height: 40px;
      width: 40px;
      margin: 0 8px;
      border-radius: 50%;
      text-align: center;
      line-height: 40px;
      color: #fff;
      font-size: 17px;
      text-decoration: none;
      transition: all 0.4s ease;
    }
    .top .media-icons a:nth-child(1){
      background: #4267B2;
    }
    .top .media-icons a:nth-child(1):hover{
      color: #4267B2;
      background: #fff;
    }
    .top .media-icons a:nth-child(2){
      background: #1DA1F2;
    }
    .top .media-icons a:nth-child(2):hover{
      color: #1DA1F2;
      background: #fff;
    }
    .top .media-icons a:nth-child(3){
      background: #E1306C;
    }
    .top .media-icons a:nth-child(3):hover{
      color: #E1306C;
      background: #fff;
    }
    .top .media-icons a:nth-child(4){
      background: #0077B5;
    }
    .top .media-icons a:nth-child(4):hover{
      color: #0077B5;
      background: #fff;
    }
    .top .media-icons a:nth-child(5){
      background: #FF0000;
    }
    .top .media-icons a:nth-child(5):hover{
      color: #FF0000;
      background: #fff;
    }
    footer .content .link-boxes{
      width: 100%;
      display: flex;
      justify-content: space-between;
    }
    footer .content .link-boxes .box{
      width: calc(100% / 5 - 10px);
    }
    .content .link-boxes .box .link_name{
      color: #fff;
      font-size: 18px;
      font-weight: 400;
      margin-bottom: 10px;
      position: relative;
    }
    .link-boxes .box .link_name::before{
      content: '';
      position: absolute;
      left: 0;
      bottom: -2px;
      height: 2px;
      width: 35px;
      background: #fff;
    }
    .content .link-boxes .box li{
      margin: 6px 0;
      list-style: none;
    }
    .content .link-boxes .box li a{
      color: #fff;
      font-size: 14px;
      font-weight: 400;
      text-decoration: none;
      opacity: 0.8;
      transition: all 0.4s ease
    }
    .content .link-boxes .box li a:hover{
      opacity: 1;
      text-decoration: underline;
    }
    .content .link-boxes .input-box{
      margin-right: 55px;
    }
    .link-boxes .input-box input{
      height: 40px;
      width: calc(100% + 55px);
      outline: none;
      border: 2px solid #AFAFB6;
      background: #140B5C;
      border-radius: 4px;
      padding: 0 15px;
      font-size: 15px;
      color: #fff;
      margin-top: 5px;
    }
    .link-boxes .input-box input::placeholder{
      color: #AFAFB6;
      font-size: 16px;
    }
    .link-boxes .input-box input[type="button"]{
      background: #fff;
      color: #140B5C;
      border: none;
      font-size: 18px;
      font-weight: 500;
      margin: 4px 0;
      opacity: 0.8;
      cursor: pointer;
      transition: all 0.4s ease;
    }
    .input-box input[type="button"]:hover{
      opacity: 1;
    }
    footer .bottom-details{
      width: 100%;
      background: #0F0844;
    }
    footer .bottom-details .bottom_text{
      max-width: 1250px;
      margin: auto;
      padding: 20px 40px;
      display: flex;
      justify-content: space-between;
    }
    .bottom-details .bottom_text span,
    .bottom-details .bottom_text a{
      font-size: 14px;
      font-weight: 300;
      color: #fff;
      opacity: 0.8;
      text-decoration: none;
    }
    .bottom-details .bottom_text a:hover{
      opacity: 1;
      text-decoration: underline;
    }
    .bottom-details .bottom_text a{
      margin-right: 10px;
    }
    @media (max-width: 900px) {
      footer .content .link-boxes{
        flex-wrap: wrap;
      }
      footer .content .link-boxes .input-box{
        width: 40%;
        margin-top: 10px;
      }
    }
    @media (max-width: 700px){
      footer{
        position: absolute;
        top: 230%;
      }
      .content .top .logo-details{
        font-size: 26px;
      }
      .content .top .media-icons a{
        height: 35px;
        width: 35px;
        font-size: 14px;
        line-height: 35px;
      }
      footer .content .link-boxes .box{
        width: calc(100% / 3 - 10px);
      }
      footer .content .link-boxes .input-box{
        width: 60%;
      }
      .bottom-details .bottom_text span,
      .bottom-details .bottom_text a{
        font-size: 12px;
      }
    }
    @media (max-width: 520px){
      footer::before{
        top: 145px;
      }
      footer .content .top{
        flex-direction: column;
      }
      .content .top .media-icons{
        margin-top: 16px;
      }
      footer .content .link-boxes .box{
        width: calc(100% / 2 - 10px);
      }
      footer .content .link-boxes .input-box{
        width: 100%;
      }
    }
    /*   <svg id="wave-footer" style="transform:rotate(0deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(92.964, 87.346, 199.468, 1)" offset="0%"></stop><stop stop-color="rgba(125.655, 182.121, 240.45, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,245L34.3,220.5C68.6,196,137,147,206,106.2C274.3,65,343,33,411,49C480,65,549,131,617,179.7C685.7,229,754,261,823,253.2C891.4,245,960,196,1029,179.7C1097.1,163,1166,180,1234,179.7C1302.9,180,1371,163,1440,138.8C1508.6,114,1577,82,1646,114.3C1714.3,147,1783,245,1851,245C1920,245,1989,147,2057,155.2C2125.7,163,2194,278,2263,343C2331.4,408,2400,425,2469,416.5C2537.1,408,2606,376,2674,302.2C2742.9,229,2811,114,2880,81.7C2948.6,49,3017,98,3086,155.2C3154.3,212,3223,278,3291,318.5C3360,359,3429,376,3497,359.3C3565.7,343,3634,294,3703,302.2C3771.4,310,3840,376,3909,367.5C3977.1,359,4046,278,4114,269.5C4182.9,261,4251,327,4320,343C4388.6,359,4457,327,4526,334.8C4594.3,343,4663,392,4731,375.7C4800,359,4869,278,4903,236.8L4937.1,196L4937.1,490L4902.9,490C4868.6,490,4800,490,4731,490C4662.9,490,4594,490,4526,490C4457.1,490,4389,490,4320,490C4251.4,490,4183,490,4114,490C4045.7,490,3977,490,3909,490C3840,490,3771,490,3703,490C3634.3,490,3566,490,3497,490C3428.6,490,3360,490,3291,490C3222.9,490,3154,490,3086,490C3017.1,490,2949,490,2880,490C2811.4,490,2743,490,2674,490C2605.7,490,2537,490,2469,490C2400,490,2331,490,2263,490C2194.3,490,2126,490,2057,490C1988.6,490,1920,490,1851,490C1782.9,490,1714,490,1646,490C1577.1,490,1509,490,1440,490C1371.4,490,1303,490,1234,490C1165.7,490,1097,490,1029,490C960,490,891,490,823,490C754.3,490,686,490,617,490C548.6,490,480,490,411,490C342.9,490,274,490,206,490C137.1,490,69,490,34,490L0,490Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(53.843, 51.741, 181.253, 1)" offset="0%"></stop><stop stop-color="rgba(106.383, 217.682, 191.291, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,49L34.3,40.8C68.6,33,137,16,206,40.8C274.3,65,343,131,411,138.8C480,147,549,98,617,89.8C685.7,82,754,114,823,155.2C891.4,196,960,245,1029,285.8C1097.1,327,1166,359,1234,326.7C1302.9,294,1371,196,1440,147C1508.6,98,1577,98,1646,81.7C1714.3,65,1783,33,1851,40.8C1920,49,1989,98,2057,106.2C2125.7,114,2194,82,2263,81.7C2331.4,82,2400,114,2469,114.3C2537.1,114,2606,82,2674,57.2C2742.9,33,2811,16,2880,16.3C2948.6,16,3017,33,3086,32.7C3154.3,33,3223,16,3291,49C3360,82,3429,163,3497,171.5C3565.7,180,3634,114,3703,89.8C3771.4,65,3840,82,3909,98C3977.1,114,4046,131,4114,122.5C4182.9,114,4251,82,4320,57.2C4388.6,33,4457,16,4526,81.7C4594.3,147,4663,294,4731,318.5C4800,343,4869,245,4903,196L4937.1,147L4937.1,490L4902.9,490C4868.6,490,4800,490,4731,490C4662.9,490,4594,490,4526,490C4457.1,490,4389,490,4320,490C4251.4,490,4183,490,4114,490C4045.7,490,3977,490,3909,490C3840,490,3771,490,3703,490C3634.3,490,3566,490,3497,490C3428.6,490,3360,490,3291,490C3222.9,490,3154,490,3086,490C3017.1,490,2949,490,2880,490C2811.4,490,2743,490,2674,490C2605.7,490,2537,490,2469,490C2400,490,2331,490,2263,490C2194.3,490,2126,490,2057,490C1988.6,490,1920,490,1851,490C1782.9,490,1714,490,1646,490C1577.1,490,1509,490,1440,490C1371.4,490,1303,490,1234,490C1165.7,490,1097,490,1029,490C960,490,891,490,823,490C754.3,490,686,490,617,490C548.6,490,480,490,411,490C342.9,490,274,490,206,490C137.1,490,69,490,34,490L0,490Z"></path></svg>
  */


  </style>



      <title>Webleb</title>
  </head>
  <body>
      <nav class="nav__menu" id="nav-menu">
          <div class="logo" style="display: flex;align-items: center;">
          <img src="pisa.jpeg"> <span style="color:#116bbb; font-size:26px; font-weight:bold; letter-spacing: 1px;margin-left: 20px; font-family: 'Poppins', sans-serif;" class="shine">ACONTA</span>
          </div>
          <div class="hamburger">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
          </div>
          <ul class="nav-links">
              <li><a href="#">INICIO</a></li>
              <li><a href="#servicio">SERVICIOS</a></li>
              <li><a href="#">CONTACTOS</a></li>
              <svg  class="account" height="50px" width="50px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#273B7A;" cx="256" cy="256" r="256"></circle> <path style="fill:#121149;" d="M186.635,353.537l146.596,146.596c91.698-28.982,161.078-108.187,175.847-205.343L363.887,149.599 L186.635,353.537z"></path> <path style="fill:#4486F4;" d="M256,400.013c102.938-47.509,106.803-108.115,107.887-155.396c0.545-23.749,0-95.02,0-95.02 C293.612,134.751,256,111.987,256,111.987s-37.612,22.766-107.887,37.612c0,0-0.545,71.271,0,95.02 C149.197,291.899,153.062,352.504,256,400.013z"></path> <circle style="fill:#426FC2;" cx="256" cy="247.622" r="71.266"></circle> <g> <circle style="fill:#FFFFFF;" cx="256" cy="220.608" r="30.436"></circle> <path style="fill:#FFFFFF;" d="M256,262.559c-23.659,0-44.813,9.673-59.108,24.888c12.805,18.968,34.501,31.442,59.108,31.442 c24.609,0,46.304-12.472,59.108-31.441C300.813,272.232,279.659,262.559,256,262.559z"></path> </g> </g></svg>
          </ul>
      </div>
      </nav>
      <div class="wave-header">
          <svg id="wave" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg"><defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(30.461, 88.708, 211.065, 1)" offset="0%"></stop><stop stop-color="rgba(27.674, 174.147, 238.387, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,98L60,89.8C120,82,240,65,360,49C480,33,600,16,720,49C840,82,960,163,1080,196C1200,229,1320,212,1440,220.5C1560,229,1680,261,1800,285.8C1920,310,2040,327,2160,343C2280,359,2400,376,2520,318.5C2640,261,2760,131,2880,122.5C3000,114,3120,229,3240,269.5C3360,310,3480,278,3600,269.5C3720,261,3840,278,3960,302.2C4080,327,4200,359,4320,343C4440,327,4560,261,4680,269.5C4800,278,4920,359,5040,343C5160,327,5280,212,5400,138.8C5520,65,5640,33,5760,32.7C5880,33,6000,65,6120,98C6240,131,6360,163,6480,163.3C6600,163,6720,131,6840,138.8C6960,147,7080,196,7200,179.7C7320,163,7440,82,7560,81.7C7680,82,7800,163,7920,171.5C8040,180,8160,114,8280,114.3C8400,114,8520,180,8580,212.3L8640,245L8640,490L8580,490C8520,490,8400,490,8280,490C8160,490,8040,490,7920,490C7800,490,7680,490,7560,490C7440,490,7320,490,7200,490C7080,490,6960,490,6840,490C6720,490,6600,490,6480,490C6360,490,6240,490,6120,490C6000,490,5880,490,5760,490C5640,490,5520,490,5400,490C5280,490,5160,490,5040,490C4920,490,4800,490,4680,490C4560,490,4440,490,4320,490C4200,490,4080,490,3960,490C3840,490,3720,490,3600,490C3480,490,3360,490,3240,490C3120,490,3000,490,2880,490C2760,490,2640,490,2520,490C2400,490,2280,490,2160,490C2040,490,1920,490,1800,490C1680,490,1560,490,1440,490C1320,490,1200,490,1080,490C960,490,840,490,720,490C600,490,480,490,360,490C240,490,120,490,60,490L0,490Z"></path><defs><linearGradient id="sw-gradient-1" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(118.237, 210.338, 233.833, 1)" offset="0%"></stop><stop stop-color="rgba(74.108, 152.691, 206.512, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 50px); opacity:0.9" fill="url(#sw-gradient-1)" d="M0,343L60,351.2C120,359,240,376,360,392C480,408,600,425,720,392C840,359,960,278,1080,277.7C1200,278,1320,359,1440,343C1560,327,1680,212,1800,187.8C1920,163,2040,229,2160,253.2C2280,278,2400,261,2520,228.7C2640,196,2760,147,2880,130.7C3000,114,3120,131,3240,138.8C3360,147,3480,147,3600,155.2C3720,163,3840,180,3960,220.5C4080,261,4200,327,4320,351.2C4440,376,4560,359,4680,318.5C4800,278,4920,212,5040,163.3C5160,114,5280,82,5400,130.7C5520,180,5640,310,5760,334.8C5880,359,6000,278,6120,220.5C6240,163,6360,131,6480,171.5C6600,212,6720,327,6840,359.3C6960,392,7080,343,7200,277.7C7320,212,7440,131,7560,147C7680,163,7800,278,7920,302.2C8040,327,8160,261,8280,196C8400,131,8520,65,8580,32.7L8640,0L8640,490L8580,490C8520,490,8400,490,8280,490C8160,490,8040,490,7920,490C7800,490,7680,490,7560,490C7440,490,7320,490,7200,490C7080,490,6960,490,6840,490C6720,490,6600,490,6480,490C6360,490,6240,490,6120,490C6000,490,5880,490,5760,490C5640,490,5520,490,5400,490C5280,490,5160,490,5040,490C4920,490,4800,490,4680,490C4560,490,4440,490,4320,490C4200,490,4080,490,3960,490C3840,490,3720,490,3600,490C3480,490,3360,490,3240,490C3120,490,3000,490,2880,490C2760,490,2640,490,2520,490C2400,490,2280,490,2160,490C2040,490,1920,490,1800,490C1680,490,1560,490,1440,490C1320,490,1200,490,1080,490C960,490,840,490,720,490C600,490,480,490,360,490C240,490,120,490,60,490L0,490Z"></path><defs><linearGradient id="sw-gradient-2" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(115.066, 198.057, 211.065, 1)" offset="0%"></stop><stop stop-color="rgba(112.48, 140.496, 222.449, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 100px); opacity:0.8" fill="url(#sw-gradient-2)" d="M0,0L60,49C120,98,240,196,360,228.7C480,261,600,229,720,212.3C840,196,960,196,1080,179.7C1200,163,1320,131,1440,147C1560,163,1680,229,1800,269.5C1920,310,2040,327,2160,285.8C2280,245,2400,147,2520,89.8C2640,33,2760,16,2880,32.7C3000,49,3120,98,3240,98C3360,98,3480,49,3600,57.2C3720,65,3840,131,3960,204.2C4080,278,4200,359,4320,351.2C4440,343,4560,245,4680,204.2C4800,163,4920,180,5040,204.2C5160,229,5280,261,5400,253.2C5520,245,5640,196,5760,163.3C5880,131,6000,114,6120,163.3C6240,212,6360,327,6480,334.8C6600,343,6720,245,6840,212.3C6960,180,7080,212,7200,212.3C7320,212,7440,180,7560,155.2C7680,131,7800,114,7920,155.2C8040,196,8160,294,8280,351.2C8400,408,8520,425,8580,432.8L8640,441L8640,490L8580,490C8520,490,8400,490,8280,490C8160,490,8040,490,7920,490C7800,490,7680,490,7560,490C7440,490,7320,490,7200,490C7080,490,6960,490,6840,490C6720,490,6600,490,6480,490C6360,490,6240,490,6120,490C6000,490,5880,490,5760,490C5640,490,5520,490,5400,490C5280,490,5160,490,5040,490C4920,490,4800,490,4680,490C4560,490,4440,490,4320,490C4200,490,4080,490,3960,490C3840,490,3720,490,3600,490C3480,490,3360,490,3240,490C3120,490,3000,490,2880,490C2760,490,2640,490,2520,490C2400,490,2280,490,2160,490C2040,490,1920,490,1800,490C1680,490,1560,490,1440,490C1320,490,1200,490,1080,490C960,490,840,490,720,490C600,490,480,490,360,490C240,490,120,490,60,490L0,490Z"></path><defs><linearGradient id="sw-gradient-3" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(77.316, 183.119, 222.449, 1)" offset="0%"></stop><stop stop-color="rgba(24.546, 96.133, 170.083, 1)" offset="100%"></stop></linearGradient></defs><path style="transform:translate(0, 150px); opacity:0.7" fill="url(#sw-gradient-3)" d="M0,98L60,89.8C120,82,240,65,360,122.5C480,180,600,310,720,351.2C840,392,960,343,1080,334.8C1200,327,1320,359,1440,343C1560,327,1680,261,1800,269.5C1920,278,2040,359,2160,392C2280,425,2400,408,2520,334.8C2640,261,2760,131,2880,130.7C3000,131,3120,261,3240,334.8C3360,408,3480,425,3600,416.5C3720,408,3840,376,3960,318.5C4080,261,4200,180,4320,163.3C4440,147,4560,196,4680,220.5C4800,245,4920,245,5040,236.8C5160,229,5280,212,5400,196C5520,180,5640,163,5760,196C5880,229,6000,310,6120,351.2C6240,392,6360,392,6480,383.8C6600,376,6720,359,6840,302.2C6960,245,7080,147,7200,106.2C7320,65,7440,82,7560,114.3C7680,147,7800,196,7920,196C8040,196,8160,147,8280,130.7C8400,114,8520,131,8580,138.8L8640,147L8640,490L8580,490C8520,490,8400,490,8280,490C8160,490,8040,490,7920,490C7800,490,7680,490,7560,490C7440,490,7320,490,7200,490C7080,490,6960,490,6840,490C6720,490,6600,490,6480,490C6360,490,6240,490,6120,490C6000,490,5880,490,5760,490C5640,490,5520,490,5400,490C5280,490,5160,490,5040,490C4920,490,4800,490,4680,490C4560,490,4440,490,4320,490C4200,490,4080,490,3960,490C3840,490,3720,490,3600,490C3480,490,3360,490,3240,490C3120,490,3000,490,2880,490C2760,490,2640,490,2520,490C2400,490,2280,490,2160,490C2040,490,1920,490,1800,490C1680,490,1560,490,1440,490C1320,490,1200,490,1080,490C960,490,840,490,720,490C600,490,480,490,360,490C240,490,120,490,60,490L0,490Z"></path>
          </svg>
          <div class="home__img-bg">
              <img src="acr.png"alt="" class="home__img">
          </div>
          <div class="column">
              <h2 class="home-title">Soluciones a la medida de tu negocio</h2>
              <p class="home-text">Con Aconta, tus registros de inventario se vuelven más fáciles y seguros que nunca. Te ofrecemos accesibilidad y seguridad de uso.</p>
              <button class="button">
              <a href="hola_nomas .php"> REGISTRATE</a>  
                </button>
          </div>
      </div>

  <section class="servicios" id="servicio">
      <div class="cards">
          <div class="card red">
              <p class="tip">SERVICiO</p>
              <p class="second-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ad, sapiente quia ut minima distinctio accusantium quasi. Alias, sed accusamus. Accusamus laboriosam quisquam beatae animi consequuntur quibusdam aut, praesentium optio?</p>       
          </div>
          <div class="card white">
              <p class="tip">SERVICIO</p>
              <p class="second-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt vitae beatae illo fugit tempora atque dolor quis facere, alias cumque libero architecto, a tempore, laborum mollitia cum amet ipsa pariatur.</p>
          </div>
          <div class="card blue">
              <p class="tip">SERVICIO</p>
              <p class="second-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium necessitatibus dicta officiis inventore, dolorum molestiae deserunt minima, hic iste voluptas saepe eum quaerat asperiores non debitis commodi exercitationem! Hic, exercitationem!</p>
          </div>
          <img src="mtr.png" class="service-img">
      </div>
  </section>
  <section class="footer" id="footer">
  </section>
  <footer>
      <div class="content">
        <div class="top">
          <div class="logo-details">
            <i class="fab fa-slack"></i>
            <span class="logo_name">Aconta</span>
          </div>
        </div>
        <div class="link-boxes">
          <ul class="box">
            <li class="link_name">índice</li>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Servicios</a></li>
            <li><a href="#">Iniciar sesión</a></li>
          </ul>
          <ul class="box">
            <li class="link_name">Servicios</li>
            <li><a href="#">Base de datos segura</a></li>
            <li><a href="#">Interfaz fácil de utilizar</a></li>
            <li><a href="#">Los archivos se guardan en excel</a></li>
          </ul>
          <ul class="box">
            <li class="link_name">Cuenta</li>
            <li><a href="hola_nomas .php">Iniciar sesión</a></li>
            <li><a href="hola_nomas .php">Crear cuenta</a></li>
          </ul>
          <ul class="box input-box">
            <li class="link_name">Registrate</li>
            <li><input type="button" value="Subscribe"></li>
          </ul>
        </div>
      </div>
      <div class="bottom-details">
        <div class="bottom_text">
          <span class="copyright_text">Copyright © 2023 <a href="#">PressMark.</a>Todos los derechos reservados.</span>
          <span class="policy_terms">
          </span>
        </div>
      </div>
    </footer>

  </body>
      <script > 
    const hamburger = document.querySelector(".hamburger");
  const navLinks = document.querySelector(".nav-links");
  const links = document.querySelectorAll(".nav-links li");

  hamburger.addEventListener('click', ()=>{
    //Animate Links
      navLinks.classList.toggle("open");
      links.forEach(link => {
          link.classList.toggle("fade");
      });

      //Hamburger Animation
      hamburger.classList.toggle("toggle");
  });
    
    
    </script>
  </html>
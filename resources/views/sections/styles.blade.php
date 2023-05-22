<style>
.img-link-up{
    position:relative;
    bottom:50px;

}
.effect-portfolio figcaption {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .effect-portfolio:hover figcaption {
        opacity: 1;
    }

    .effect-portfolio .link {
        display: none;
        color: #fff;
        font-size: 24px;
    }

    .effect-portfolio:hover .link {
        display: block;
    }
.icon-portfolio{
    background-color: #005597;
    width:80px;
    height:80px;
    border-radius:1000px;
    position:relative;
    top:50px;
}
.fa-link-portfolio{
    font-size:50px;
    margin-top:20%;
}
/* Estilos para los SVG */
.portfolio-view-item{
    background: #fff;
    width:450px; 
    height: 500px;
}
.div-light-bulb{
    position:relative;
    bottom:80px;
    background-color:#005597;
    border-radius: 1000px;
    height: 150px;
    width: 150px;
}
.button-skill-nav{
    background-color: #323232 !important;
}
.button-skill-nav.active{
    background-color: #005597 !important;
}
.mx-6{
    margin-right: 4rem!important;
    margin-left: 4rem!important;
}
.svg-item {
    cursor: pointer; /* Cambia el cursor a una mano para indicar que es interactivo */
}
.dial{
    position: relative !important;
    bottom: 40px;
}

.svg-item.active path {
    fill: #2AF7FE; /* Cambia el color de fondo al hacer clic */
    transition: fill 0.5s ease;
}
.bold-size{
    font-weight: 700;
}
.scrollable-container {
        max-height: 130px;
        overflow-y: auto;
        padding-right: 10px;
    }

    .scrollable-container::-webkit-scrollbar {
        width: 8px;
    }

    .scrollable-container::-webkit-scrollbar-track {
        background-color: #f1f1f1;
    }

    .scrollable-container::-webkit-scrollbar-thumb {
        background-color: #888;
    }

    .scrollable-container::-webkit-scrollbar-thumb:hover {
        background-color: #555;
    }
    .scrollable-container-area {
        max-height: 400px;
        overflow-y: auto;
        padding-right: 10px;
    }

    .scrollable-container-area::-webkit-scrollbar {
        width: 8px;
    }

    .scrollable-container-area::-webkit-scrollbar-track {
        background-color: #f1f1f1;
    }

    .scrollable-container-area::-webkit-scrollbar-thumb {
        background-color: #888;
    }

    .scrollable-container-area::-webkit-scrollbar-thumb:hover {
        background-color: #555;
    }

@media only screen and (min-width: 769px) and (max-width: 991px) {
    .div-light-bulb{
    position:relative;
    bottom:40px;
    }
    .navbarAjustResponsive{
        width:98%;
    }
    .responsiveAjustAbout{
        text-align:center;
    }
    .margin-hr-responsive{
        padding-right: 50px;
    }
    .navbar-collapse.collapse{
        display: none !important;
    }
    .height-responsive-modal{
        height: 25%;
    }
    .modalAjustResponsive{
        text-align: start;
    }
  }

@media (min-width:300px) and (max-width:992px) {
    .div-light-bulb{
    position:relative;
    bottom:40px;
    }
    .mx-6{
    margin-right: 0rem!important;
    margin-left: 0rem!important;
}
    .navbarAjustResponsive{
        width:98%;
    }
    .responsiveAjustAbout{
        text-align:center;
    }
    .margin-hr-responsive{
        padding-right: 50px;
    }
    .modalAjustResponsive{
        text-align: start;
        position: static;
    }
    .height-responsive-modal{
        height: auto;
    }
.modal-responsive-width{
    width: 100%;
}
.owl-next {
    top: 40% !important;
}

.owl-prev {
    top: 40% !important;
}
}


h1 {
    font-weight: 900;

    font-family: 'Lato';
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

h2 {
    font-family: 'Lato';
    font-weight: 900;

    text-transform: uppercase;
    letter-spacing: 0.5px;
}

h3 {
    font-family: 'Lato';

    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

h4 {
    font-family: 'Lato';
    font-weight: 900;

    text-transform: uppercase;
    letter-spacing: 0.5px;
}

h5 {
    font-family: 'Lato';
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

h6 {
    font-family: 'Lato';
    font-weight: 900;

    text-transform: uppercase;
    letter-spacing: 0.5px;
}


ul.navbar-nav > li > a {
    font-family: 'Lato';
}

* {
    list-style: none;
}

.photo {
    z-index: 99999999;
}


.item {
    height: 400px;
    position: relative;
}

.team {
    height: 0px;
    position: relative;
}

.photo {
    top: 50px;
    position: fixed;
    transition: all 1s;
}


@media (min-width:1400px) {
    .contact-section{
        position: relative;
        bottom:140px;
    }
    .responsiveAjustAbout{
        text-align: start;
    }
    .margin-hr-responsive{
        margin-right: auto;
        margin-left: auto;
    }
    .modalAjustResponsive{
        text-align: center;
        position: relative;
        right: 5px;
    }
    .height-responsive-modal{
        height: 25%;
    }
.margin-contactUs{
    margin-left: 50px;
}
.img-responsive{
    width: 90px;
    height: 90px;
    top: -4px;
    position: fixed;
}
.padding-menu{
    padding-left: 9%;
}
.our-team {
    padding-top:90px;
}

#contact-us-navbar {
    margin-left:10px; margin-top:15px;
}



.photo:hover {
    top: 100px;
    transition: all 1s;

}



iframe {
    width: 450px;
    height: 315px;
}

}

.details {
    height: 0px;
    width: 100%;
    position: absolute;
    top: 0px;
    background: linear-gradient(to bottom, #3E4043, #045A97);
    transition: all 0.5s;
    visibility: hidden;
    z-index: -9999999;
}

@media (min-width:992px) and (max-width:1399px) {
    .contact-section{
        position: relative;
        bottom:140px;
    }
    .responsiveAjustAbout{
        text-align: start;
    }
    .margin-hr-responsive{
        margin-right: auto;
        margin-left: auto;
    }
    .modalAjustResponsive{
        text-align: center;
        position: relative;
        right: 5px;
    }
    .height-responsive-modal{
        height: 25%;
    }
.margin-contactUs{
    margin-left: 50px;
}
.img-responsive{
    width: 90px;
    height: 90px;
    top: -4px;
    position: fixed;
}
.padding-menu{
    padding-left: 4%;
}

.our-team {
    padding-top:90px;
}

#contact-us-navbar {
    margin-left:10px; margin-top:15px;
}


.photo:hover {
    top: 100px;
    transition: all 1s;

}



iframe {
    width: 450px;
    height: 315px;
}

}

.details {
    height: 0px;
    width: 100%;
    position: absolute;
    top: 0px;
    background: linear-gradient(to bottom, #3E4043, #045A97);
    transition: all 0.5s;
    visibility: hidden;
    z-index: -9999999;
}


@media (min-width:300px) and (max-width:992px) {
.margin-contactUs{
    margin-left: 0;
}
.nav-margin-responsive{
    margin-top: 60px;
}
.img-responsive{
    width: 30%;
    top: -9px;
    position: fixed;
    padding-left: 25px; 
    left: 33%;
    display: none;
}
.pe-sm-4{
    position: relative;
    right: 15px;
}
.home-responsive{
    margin-top: 80px;
}
.nav-responsive-fixed{
    Animation: none;
    background-color: #045A97 ;
}

.our-team {
    padding-left:0px;
    margin-top: 60px;
}

#contact-us-navbar {
    margin-left: -5px;
    margin-top:   3px;
}

#navbar-villar {
    padding-left: 25px;
}


.navbar-collapse { 
    background-color: #045A97;
}

.navbar-nav {
    background-color: #045A97;
}

.details {
    width: 100%;
    height: 300px;
    visibility: visible;
}


.owl-carousel .owl-wrapper-outer {
    overflow: hidden;
}

.photo {
    top: 194px;
    position: fixed;
    transition: all 1s;
}

}

@media (min-width:992px) {

.close {
    position: absolute;
    left: 98%;
}

.team:hover .details {
    width: 100%;
    height: 300px;
    position: fixed;
    top: -200px;
    visibility: visible;
    z-index: 99999999;
}

.close {
    position: absolute;
    left: 98%;
}

.team:hover .details {
    width: 100%;
    height: 300px;
    position: fixed;
    top: -200px;
    visibility: visible;
    z-index: 99999999;
}

}
.details * {
    z-index: 0;
}


.owl-carousel .owl-wrapper-outer {
    overflow: initial;
}

.owl-next {
    position: absolute !important;
    top: 30%;
    font-size: 20px;
    right: 0%;
    background-color: white;
}

.owl-prev {
    position: absolute !important;
    top: 30%;
    font-size: 20px;
    left: 0%;
    background-color: white;

}

/* aboutUs*/ 


.animated7{
  margin-top:5rem;
}

.dashboard-aboutUs-img{
  height: 30rem;
}

.img-aboutUs {
    height: 55rem;
    width: 21rem;
    object-fit: cover;
  }



  .text-aboutUs{
    margin-left:3rem
  }

  @media (max-width: 767.98px) {
    .text-aboutUs{
    margin-left: 0;
    margin-bottom: 2rem;
    }
  }

  
  #ourCompany-aboutUs{
    background-color:#2E2E2E;
    color:white;
    padding-bottom:117px;
    position: relative;
    padding-top:13rem;
  }
  
  .logo-aboutUs{
    width:16rem;
    height:16rem;
    border-radius:50%;
    background-color:#005397;
    position: relative;
    margin-bottom:-6rem;

  }

@media (max-width: 768px) {
  .logo-aboutUs {
    position: relative;
    margin-top: -40px;
    margin-right: 100px;
  }
}

  .img-cards{
  border-radius:50%;
  background-color:#005397;
  padding: 60px;
  height: 7rem;
  width: 7rem;
  margin: 0px 60px 30px 70px;
}

.img-cards svg {
  fill: white;
}

  .card-aboutUs{
    padding-top: 40px;
    background-color:#F9F9F9;
    margin-top:-80px;
    margin-left:11%;
    margin-bottom:70px;

  }

@media only screen and (max-width: 768px) {
  .card-aboutUs {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-left:7rem;
    margin-top:4rem;
  }
}


.card-hover:hover {
  box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
}


.card-body{
  text-align:center;
}



.img-redirect{
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }
  
.img-redirect2{
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }

@media (max-width: 768px) {
  .img-redirect2 {
    margin-top: 40px;
    padding-left: 3rem;
    margin-bottom: 4rem;
  }
}

</style>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"/>
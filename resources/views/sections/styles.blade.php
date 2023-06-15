<style>
    .button-contactUs{
        font-size: 14px; 
        text-align: center; 
        background-color: #045197; 
        border-radius: 8px; 
        width: 150px
    }
    .section-links-portfolio{
        height:320px;
    }
    .margin-ul-portfolio{
        margin-right: 13rem!important;
        margin-left: 13rem!important;
    }
    .margin-section-portfolio{
        margin-bottom:12rem;
    }
.padding-dinamic-show{
    padding-right:13rem;
}
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
    height: 455px;
}
.div-light-bulb{
    position:relative;
    bottom:120px;
    background-color:#005597;
    border-radius: 1000px;
    height: 210px;
    width: 210px;
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
    .div-detail-team-gray{
    margin-top:200px;
}
    .margin-section-deatil-responsive{
        margin-top:100px;
    }

    .img-responsive-nav {
    width: 13%;
    top: 21px;
    position: fixed;
    padding-left: 25px;
    left: 70%;
    display: block;
}
    .position-details{
        position: relative;
        left: 40%;
        top: -367px;
    }

    .button-navbar-responsive{
        width:700px;
    }
    .div-navbarBlack{
        height:60px;
        background:#323232;
        width:100%;
    }
    .button-contactUs{
        padding:15px 0;
        background:#323232;
    }
    .margin-ul-portfolio{
        margin-right: 0.5rem!important;
        margin-left: 0.5rem!important;
    }
    .section-links-portfolio{
        height:450px;
    }
    .img-link-up {
    position: relative;
    bottom: 0;
    left: 10%;
    }
    .margin-section-portfolio{
        margin-bottom:18rem;
    }
    .padding-dinamic-show{
        padding-right:0.5rem;
    }
    .margin-portfolio-section{
        margin-left: 3rem;
        margin-right: 3rem;
        margin-top: 10rem;
        margin-bottom: 3rem;
    }
    .div-light-bulb{
    position:relative;
   bottom:0;
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

@media (min-width:300px) and (max-width:768px) {
    .height-gray-div-responsive{
        height:570px !important;
    }
    .corrections-postition-responsive-team{
        margin-top:200px !important;
    }
    .div-detail-team-gray{
    margin-top:100px;
}
    #team-carousel{
        overflow-x: hidden;
    }
    .margin-section-deatil-responsive{
        margin-top:70px;
    }
    .img-responsive-nav {
    width: 23%;
    top: 21px;
    position: fixed;
    padding-left: 25px;
    left: 70%;
    display: block;
    }
    .position-details{
        position: relative;
        left: 30%;
        top: -380px;
    }

    .button-navbar-responsive{
        width:700px;
    }
    .div-navbarBlack{
        height:60px;
        background:#323232;
        width:100%;
    }
    .button-contactUs{
        padding:15px 0;
        background:#323232;
    }
    .margin-ul-portfolio{
        margin-right: 0.5rem!important;
        margin-left: 0.5rem!important;
    }
    .section-links-portfolio{
        height:650px;
    }
    .img-link-up {
    position: relative;
    bottom: 250px;
    left: 25%;
    }
    .margin-section-portfolio{
        margin-bottom:18rem;
    }
    .padding-dinamic-show{
    padding-right:0.5rem;
    }
    .margin-portfolio-section{
        margin-left: 3rem;
        margin-right: 3rem;
        margin-top: 10rem;
        margin-bottom: 3rem;
    }
    .div-light-bulb{
    position:relative;
    bottom:610px;
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
    .position-details{
        position: relative;
        top: -296px;
        left: 808px;
    }

    .displayNoneDesktop{
        display:none;
    }
    .img-link-up2{
        position: relative;
        left:10%;
        bottom:70px;
    }
    .img-link-up1{
        position: relative;
        left:50%;
        bottom:150px;
    }
    .margin-portfolio-section{
        margin-left: 3rem;
        margin-right: 19rem;
        margin-top: 3rem;
        margin-bottom: 3rem;
    }
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
    .position-details{
        position: relative;
        top: -296px;
        left: 608px;
    }
    .displayNoneDesktop{
        display:none;
    }
    .img-link-up2{
        position: relative;
        left:10%;
        bottom:70px;
    }
    .img-link-up1{
        position: relative;
        left:50%;
        bottom:150px;
    }
    .margin-portfolio-section{
        margin-left: 3rem;
        margin-right: 19rem;
        margin-top: 3rem;
        margin-bottom: 3rem;
    }
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
    width: 5.5%;
    top: 25px;
    position: fixed;
    padding-left: 25px;
    left: 17%;
    display: block;
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

#content-aboutUs{
  background-color: #F9F9F9;
}

.animated7{
  margin-top:5rem;
}

.dashboard-aboutUs-img{
  height: 37rem;
}

.img-aboutUs {
    height: 61rem;
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
    padding-bottom:120px;
    position: relative;
    padding-top:13rem;
    padding-bottom:20rem;
  }

  .our-company{
    font-size:25px;
    font-family:'Lato';
    font-weight:900;
    text-transform:uppercase;
    letter-spacing:0.5px;
  }
  
  .logo-aboutUs{
    top: 1075px;
    border-radius:1000px;
    background-color:#005397;
    position: relative;
    height:210px; 
    width:210px;
  }

@media (max-width: 768px) {
  .logo-aboutUs {
    margin-top: -40px;
    margin-right: 155px;
  }
}



  .img-cards{
  border-radius:50%;
  background-color:#005397;
  padding: 70px;
  width: 74px;
  height: 63px;
  margin: 40px 20px 30px 33%;;
}

@media (max-width: 768px) {
  .img-cards {
     margin: 0px 60px 0px 70px;
  }
}

.img-cards svg {
  fill: white;
}

  .card-aboutUs{
    padding-top: 40px;
    background-color:#F9F9F9;
    margin-top:-80px;
    margin-bottom:70px;

  }

@media only screen and (max-width: 768px) {
  .card-aboutUs {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;

    margin-top:4rem;
  }
}



.card-hover {

  box-shadow: rgba(40, 40, 40, 0.06) 2px 0px 40px 5px;
  transition: box-shadow 0.3s ease;
}

.card-hover:hover {
  box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
}


.card-body{
  text-align:center;
  margin-top:-3rem;
  padding:3rem;
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
    padding-left: 5rem;
    margin-bottom: 4rem;
  }
}


/* contactUs*/ 

.container-contactInfo {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  height: 400vh; /* Esto es opcional, ajusta la altura según tus necesidades */
  margin-top: -4.5rem; /* Ajusta el valor según tus necesidades */
  font-size:2rem;
}

@media (max-width: 768px) {
  .container-contactInfo {
    height: 10vh;
  }
}

.centered {
  text-align: center;
  font-size:25px; 
  font-weight: 1000; 
  font-family: 'Barlow', sans-serif; 
  font-family: 'Lato', sans-serif;
  
}



.text-contactUs {
    margin-left: -3rem;
}

@media (max-width: 768px) {
  .text-contactUs {
    margin-left: 0rem;
  }
}


.img-contactUs {
  position: relative;
}


.black{
  background-color:#2E2E2E;
  height: 40rem;
  color:white;
}

.section-form-contactUs{
  margin-top:-5em;
  padding-top:0rem;
}


#contact-form{
  background-color:white;
  padding:4rem;
}

.title-contact{
  font-size:25px; 
  font-weight: 1000; 
  font-family: 'Barlow', sans-serif; 
  font-family: 'Lato', sans-serif;
  margin-top: 2rem;
}


.subtitle-contact{
  font-size:17px; 
  font-weight: 1000 !important;
  font-family: 'Barlow', sans-serif;
  font-family: 'Lato', sans-serif;
}

.text-contact{
  font-weight: 400; 
  font-size:18px; 
  font-family: 'Lato', sans-serif;
  line-height: 1.6em;
}

.text-cards{
  font-size:18px; 
  line-height: 1.8em;
  font-family: 'Lato', sans-serif;
  margin-top: 2rem;
}

::placeholder {
  font-size: 16px;
  font-family: 'Lato', sans-serif;
}


@media (max-width: 768px) {
  .cards-contactUs {
    padding-top:20rem;
  }
}

.form-control {
    border: 0.5px solid #F1F1F1;
}

.headerEmail{
  background-color: #045A97;
  height:4rem;
  margin-bottom:25rem;
}

#hola-como-vas2 {
  position: relative;
  left: 44%;
  top: -220px;
  width: 12rem;
  height:12rem;
}

.circle {
  width: 130px;
  height: 130px;
  background-color: #005397;
  border-radius: 50%;
  margin-bottom: 10px;
}

/*#img-email {
  position: relative;
}

      @media (min-width:760px) and (max-width:1800px) {
            #img-email {
              position: relative;
              left: 70%;
              top: -140px;
              width: 211px;
              height: 211px;
            }
          }

        .circle {
            width: 130px;
            height: 130px;
            background-color: #005397;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .svg {
            padding-left: 15px;
            padding-top: 35px;
        }*/

/*.container-black{
  background-color:#2E2E2E;
  height:20rem;
  margin-bottom:4rem;
}

@media (max-width: 768px) {
  .cards-contactUs {
    padding-top:20rem;
  }
}*/

.card-text{
  text-align: left;
  font-size:18px;
  font-family: 'Lato', sans-serif;
}

::placeholder {
  font-size: 16px;
  font-family: 'Lato', sans-serif;
}


@media (max-width: 768px) {
  .cards-contactUs {
    padding-top:20rem;
  }
}

.form-control {
    border: 0.5px solid #F1F1F1;
}

.headerEmail{
  background-color: #045A97;
  height:4rem;
  margin-bottom:25rem;
}

#hola-como-vas2 {
  position: relative;
  left: 44%;
  top: -220px;
  width: 12rem;
  height:12rem;
}

.circle {
  width: 130px;
  height: 130px;
  background-color: #005397;
  border-radius: 50%;
  margin-bottom: 10px;
}

/*#img-email {
  position: relative;
}

      @media (min-width:760px) and (max-width:1800px) {
            #img-email {
              position: relative;
              left: 70%;
              top: -140px;
              width: 211px;
              height: 211px;
            }
          }

        .circle {
            width: 130px;
            height: 130px;
            background-color: #005397;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .svg {
            padding-left: 15px;
            padding-top: 35px;
        }*/

/*.container-black{
  background-color:#2E2E2E;
  height:20rem;
  margin-bottom:4rem;
}

@media (max-width: 768px) {
  .cards-contactUs {
    padding-top:20rem;
  }
}*/

</style>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"/>
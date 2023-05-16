<style>

/* Estilos para los SVG */
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
</style>


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css"/>
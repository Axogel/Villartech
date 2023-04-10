<!-- SVG 1 -->
<svg id="svg1" class="svg" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
    <rect width="100" height="100" fill="#2AF7FE"/>
  </svg>
  
  <!-- SVG 2 -->
  <svg id="svg2" class="svg" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
    <rect width="100" height="100" fill="#FFFFFF"/>
  </svg>
  
  <!-- SVG 3 -->
  <svg id="svg3" class="svg" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
    <rect width="100" height="100" fill="#FFFFFF"/>
  </svg>
  
  <!-- SVG 4 -->
  <svg id="svg4" class="svg" xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
    <rect width="100" height="100" fill="#FFFFFF"/>
  </svg>




  <style>
    /* Estilos para los SVG */
.svg {
  cursor: pointer; /* Cambia el cursor a una mano para indicar que es interactivo */
}

.svg.active rect {
  fill: #2AF7FE; /* Cambia el color de fondo al hacer clic */
}

    *{ background-color: black}

  </style>


<script>
    // Obtén los elementos de SVG
var svg1 = document.getElementById('svg1');
var svg2 = document.getElementById('svg2');
var svg3 = document.getElementById('svg3');
var svg4 = document.getElementById('svg4');

// Agrega eventos de clic a los SVG
svg1.addEventListener('click', function() {
  svg1.classList.add('active'); // Agrega la clase 'active' al SVG clicado
  svg2.classList.remove('active'); // Remueve la clase 'active' de los otros SVGs
  svg3.classList.remove('active');
  svg4.classList.remove('active');
});

svg2.addEventListener('click', function() {
  svg2.classList.add('active');
  svg1.classList.remove('active');
  svg3.classList.remove('active');
  svg4.classList.remove('active');
});

svg3.addEventListener('click', function() {
  svg3.classList.add('active');
  svg1.classList.remove('active');
  svg2.classList.remove('active');
  svg4.classList.remove('active');
});

svg4.addEventListener('click', function() {
  svg4.classList.add('active');
  svg1.classList.remove('active');
  svg2.classList.remove('active');
  svg3.classList.remove('active');
});
</script>
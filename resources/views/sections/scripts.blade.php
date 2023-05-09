
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"
        integrity="sha512-NhRZzPdzMOMf005Xmd4JonwPftz4Pe99mRVcFeRDcdCtfjv46zPIi/7ZKScbpHD/V0HB1Eb+ZWigMqw94VUVaw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>


    <script>
        $('.dial').knob({
            'min': 10,
            'max': 100,
            'width': 70,
            'height': 70,
            'displayInput': true,
            'fgColor': "#045A97",


        });

        $(document).ready(function() {
            $("#team-carousel").owlCarousel({
                margin: 0,
                responsive: true,
                navigation: true,
                pagination: false,
                responsiveRefreshRate: 0,
                navigationText: [
                    '<i class="fa fa-chevron-left" style= "color:#045A97; font-size:20px;"></i>',
                    '<i class="fa fa-chevron-right" style= "color:#045A97; font-size:20px;"></i>'
                ],
                itemsCustom: [
                    [0, 1],
                    [375, 1],
                    [600, 1],
                    [700, 1],
                    [1000, 5]
                ],
            });
        });



        $(document).ready(function() {
            $("#testimonial-carousel").owlCarousel({
                margin: 0,
                responsive: true,
                navigation: true,
                pagination: false,
                responsiveRefreshRate: 0,
                navigationText: [
                    '<i class="fa fa-chevron-left" style= "color:#045A97; font-size:20px;"></i>',
                    '<i class="fa fa-chevron-right" style= "color:#045A97; font-size:20px;"></i>'
                ],
                itemsCustom: [
                    [0, 1],
                    [375, 1],
                    [600, 1],
                    [700, 1],
                    [1000, 5]
                ],
            });
        });
    </script>

<script>
  document.addEventListener("click", function(event) {
  var navbarMenu = document.getElementById("navbarNavAltMarkup");
  var targetElement = event.target; 

  do {
      if (targetElement == navbarMenu) {
          return;
      }
      targetElement = targetElement.parentNode;
  } while (targetElement);

  navbarMenu.classList.remove("show");
});
var navbarLinks = document.querySelectorAll("#navbarNavAltMarkup a");
for (var i = 0; i < navbarLinks.length; i++) {
  navbarLinks[i].addEventListener("click", function() {
    var navbarMenu = document.getElementById("navbarNavAltMarkup");
    navbarMenu.classList.remove("show");
  });
}
$(document).ready(function() {
  $('.navbar-toggler').click(function() {
    $('#navbar-modalTeam').slideToggle();
  });
});

</script>

    <script>
          document.addEventListener("click", function(event) {
          var navbarMenu = document.getElementById("navbarModalTeam");
         var targetElement = event.target; 

        do {
            if (targetElement == navbarMenu) {
                 return;
         }
             targetElement = targetElement.parentNode;
         } while (targetElement);

        navbarMenu.classList.remove("show");
        });
    var navbarLinks = document.querySelectorAll("#navbarModalTeam a");
    for (var i = 0; i < navbarLinks.length; i++) {
        navbarLinks[i].addEventListener("click", function() {
        var navbarMenu = document.getElementById("navbarModalTeam");
        navbarMenu.classList.remove("show");
    });
    }
    </script>
<script>
  // Selecciona todos los elementos "a" que contienen el atributo "data-svg"
  const svgLinks = document.querySelectorAll('a[data-svg]');

  // Agrega un "event listener" para el evento "click" en cada elemento "a"
  svgLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault(); // Evita que el enlace realice su acción predeterminada
      const svgId = link.dataset.svg; // Obtiene el ID del SVG del atributo "data-svg"
      const svg = document.getElementById(svgId); // Encuentra el elemento SVG con el ID correspondiente
      if (svg) {
        // Quita la clase "active" de todos los elementos SVG
        const activeSvgs = document.querySelectorAll('.svg-item.active');
        activeSvgs.forEach(activeSvg => activeSvg.classList.remove('active'));
        // Agrega la clase "active" al elemento SVG correspondiente
        svg.classList.add('active');
      }
    });
  });
  

  // Obtén todos los elementos SVG
  const svgs = document.querySelectorAll('.svg-item');

// Agrega manejadores de eventos de clic a cada SVG
svgs.forEach(svg => {
    svg.addEventListener('click', () => {
        // Remueve la clase de estilo de todos los SVGs
        svgs.forEach(s => s.classList.remove('active'));
        
        // Agrega la clase de estilo al hacer clic
        svg.classList.add('active');
    });
});

</script>

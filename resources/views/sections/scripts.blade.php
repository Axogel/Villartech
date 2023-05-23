
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
            $("#portfolio-carousel").owlCarousel({
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
    var navbarMenu = document.querySelector(".navbar-collapse.show");
    var targetElement = event.target;
    
    do {
      if (targetElement == navbarMenu) {
        return;
      }
      targetElement = targetElement.parentNode;
    } while (targetElement);
    
    navbarMenu.classList.remove("show");
  });
  var navbarLinks = document.querySelectorAll(".navbar-collapse a");
  navbarLinks.forEach(function(link) {
    link.addEventListener("click", function() {
      var navbarMenu = this.closest(".navbar-collapse");
      navbarMenu.classList.remove("show");
    });
  });
    </script>

<script>
  const svgLinks = document.querySelectorAll('a[data-svg]');

  svgLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault(); 
      const svgId = link.dataset.svg;
      const svg = document.getElementById(svgId); 
      if (svg) {
        const activeSvgs = document.querySelectorAll('.svg-item.active');
        activeSvgs.forEach(activeSvg => activeSvg.classList.remove('active'));
        svg.classList.add('active');
        const navbarLinks = link.parentNode.parentNode.querySelectorAll('a');
        navbarLinks.forEach(navbarLink => navbarLink.classList.remove('active'));

       
        link.classList.add('active');
      }
    });
  });

  
  const svgs = document.querySelectorAll('.svg-item');

  svgs.forEach(svg => {
    svg.addEventListener('click', () => {
      svgs.forEach(s => s.classList.remove('active'));
      svg.classList.add('active');

     
      const navbarLinks = svg.parentNode.parentNode.querySelectorAll('a');
      navbarLinks.forEach(navbarLink => navbarLink.classList.remove('active'));
      svg.parentNode.classList.add('active');
    });
  });

 
  const activeLink = document.querySelector('a.active[data-svg]');
  if (activeLink) {
    const activeSvgId = activeLink.dataset.svg;
    const activeSvg = document.getElementById(activeSvgId);
    if (activeSvg) {
      activeSvg.classList.add('active');
    }
  }
</script>


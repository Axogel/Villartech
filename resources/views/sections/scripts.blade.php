<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-Knob/1.2.13/jquery.knob.min.js"
        integrity="sha512-NhRZzPdzMOMf005Xmd4JonwPftz4Pe99mRVcFeRDcdCtfjv46zPIi/7ZKScbpHD/V0HB1Eb+ZWigMqw94VUVaw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
<script src="{{ config('app.url') }}/assets/js/jquery.js"></script>
    <script src="{{ config('app.url') }}/assets/js/popper.min.js"></script>
    <script src="{{ config('app.url') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ config('app.url') }}/assets/js/owl.js"></script>
    <script src="{{ config('app.url') }}/assets/js/wow.js"></script>
    <script src="{{ config('app.url') }}/assets/js/validation.js"></script>
    <script src="{{ config('app.url') }}/assets/js/jquery.fancybox.js"></script>
    <script src="{{ config('app.url') }}/assets/js/appear.js"></script>
    <script src="{{ config('app.url') }}/assets/js/scrollbar.js"></script>
    <script src="{{ config('app.url') }}/assets/js/isotope.js"></script>
    <script src="{{ config('app.url') }}/assets/js/jquery-ui.js"></script>
    <!-- main-js -->
    <script src="{{ config('app.url') }}/assets/js/script.js"></script>
    <script>
        $("#decfont").click(function() {
            $("span").css("font-size", parseInt($("span").css("font-size")) - 2);
            $("a").css("font-size", parseInt($("a").css("font-size")) - 2);
            $("p").css("font-size", parseInt($("p").css("font-size")) - 2);
            $("h6").css("font-size", parseInt($("h6").css("font-size")) - 2);
            $("h5").css("font-size", parseInt($("h5").css("font-size")) - 2);
            $("h4").css("font-size", parseInt($("h4").css("font-size")) - 2);
            $("h3").css("font-size", parseInt($("h3").css("font-size")) - 2);
            $("h2").css("font-size", parseInt($("h2").css("font-size")) - 2);
            $("h1").css("font-size", parseInt($("h1").css("font-size")) - 2);
        });
        $("#incfont").click(function() {
            $("span").css("font-size", parseInt($("span").css("font-size")) + 2);
            $("a").css("font-size", parseInt($("a").css("font-size")) + 2);
            $("p").css("font-size", parseInt($("p").css("font-size")) + 2);
            $("h6").css("font-size", parseInt($("h6").css("font-size")) + 2);
            $("h5").css("font-size", parseInt($("h5").css("font-size")) + 2);
            $("h4").css("font-size", parseInt($("h4").css("font-size")) + 2);
            $("h3").css("font-size", parseInt($("h3").css("font-size")) + 2);
            $("h2").css("font-size", parseInt($("h2").css("font-size")) + 2);
            $("h1").css("font-size", parseInt($("h1").css("font-size")) + 2);
        });
    </script>

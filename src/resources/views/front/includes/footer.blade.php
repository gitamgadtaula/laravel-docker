<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
<footer class="footer mt-3" style="padding:0; margin-top:10rem">
<div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Travels</a></li>
                            <li><a href="#">Tours</a></li>
                            <li><a href="#">Packages</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Udipur Kalika Tours And Travel</h3>
                        <p style="color:white">Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="fab fa-facebook"></i></a><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fab fa-snapchat"></i></a><a href="#"><i class="fab fa-instagram"></i></a></div>
                </div>
                <p class="copyright" style="color:white">Udipur Kalika Tours And Travel © 2023</p>
            </div>
</footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/holder.min.js')}}"></script>
    <script src="{{asset('js/lightslider.min.js')}}"></script>
    <script src="{{asset('css/summernote/summernote-bs4.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
    {{--  <script src="{{asset('css/summernote/summernote.css')}}"></script>  --}}
    @stack('footer_js')
    <script >
        Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });

      $(document).ready(function(){
            // $('.tourPhotos').slick({
            //     autoplay: true,
            //     autoplaySpeed: 2000,        
            //     infinite: true,
            //     slidesToShow: 1,
            //     slidesToScroll: 1
            // });

            $("#lightSlider").lightSlider({
                item: 1,
                auto: true,
                loop: true,
                pause: 2000,
            }); 
        });
    </script>
    
</body>
</html>

    <footer id="site-footer" class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                    <div class="widget-footer">
                        <img src="{{ asset($common->icon2) }}" class="footer-logo" alt="Haus Luxury">
                        <p>We provides a full range of interior design, architectural design.</p>
                        <div class="footer-social list-social">
                            <ul>

                                @if($contact->wp !== null)
                                <li><a href="https:://wa.me/{{ $contact->wp }}" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                    @endif
                                    @if($contact->fb !== null)
                                <li><a href="{{ $contact->fb }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                @endif
                                @if($contact->linkedin !== null)
                                <li><a href="{{ $contact->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                @endif
                                @if($contact->insta !== null)
                                <li><a href="{{ $contact->insta }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                  @endif

                            </ul>

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-xl-0">
                    <div class="widget-footer">
                        <h6>Contacts</h6>
                        <ul class="footer-list">
                            <li class="footer-list-item">
                                <span class="list-item-icon"><i class="ot-flaticon-place"></i></span>
                                <span class="list-item-text">{!! $contact->address !!}</span>
                            </li>
                         <li class="footer-list-item">
                            <a href="mailto:{{ $contact->email }}"> 
                                <span class="list-item-icon"><i class="ot-flaticon-mail"></i></span>
                                <span class="list-item-text">{{ $contact->email }}</span>
                            </a> 
                            </li>
                    
                     
                            <li class="footer-list-item">
                                <a href="tel:{{ $contact->phone }}">
                                <span class="list-item-icon"><i class="ot-flaticon-phone-call"></i></span>
                                <span class="list-item-text">{{ $contact->phone }}</span>
                            </a>
                            </li>
                       
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 mb-4 mb-md-0">
                    <div class="widget-footer widget-contact">
                        <h6>Latest Projects</h6>
                        <ul>
                            @foreach($all_brands as $brand)
                            <li><a href="{{ route('category',$brand->slug) }}" >{{ $brand->name }}</a></li>
                   
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                    <div class="widget-footer footer-widget-subcribe">
                        <h6>Subscribe</h6>
                        <form class="mc4wp-form" action="{{ route('subscribe') }}" method="post">
                            @csrf
                            <div class="mc4wp-form-fields">
                                <div class="subscribe-inner-form">
                                    <input type="email" name="email" placeholder="YOUR EMAIL" required="">
                                    <button type="submit" class="subscribe-btn-icon"><i class="ot-flaticon-send"></i></button>
                                </div>
                            </div>
                        </form>
                        <p>Follow our newsletter to stay updated about agency.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- #site-footer -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                    <p>Copyright © 2022 Haus Luxury İnteriors by <a class="text-light" href="#">Markup</a>. All Rights Reserved.</p>
                </div>
                <div class="col-lg-5 col-md-12 align-self-center">
                    <ul class="icon-list-items inline-items justify-content-lg-end">
                        <li class="icon-list-item inline-item">
                            <a href="#"><span class="icon-list-text">Terms of use</span></a>
                        </li>
                        <li class="icon-list-item inline-item">
                            <a href="#"><span class="icon-list-text">Privacy Environmental Policy</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!-- #page -->
<a id="back-to-top" href="#" class="show"><i class="ot-flaticon-left-arrow"></i></a>


@yield('js')



  <script src="{{ asset('/front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('/front/js/mousewheel.min.js') }}"></script>
    <script src="{{ asset('/front/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('/front/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('/front/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('/front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/front/js/easypiechart.min.js') }}"></script>
    <script src="{{ asset('/front/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('/front/js/scripts.js') }}"></script>
    <script src="{{ asset('/front/js/royal_preloader.min.js') }}"></script>
    <!-- REVOLUTION JS FILES -->

    <script  src="{{ asset('/front/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script  src="{{ asset('/front/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    
    <script  src="{{ asset('/front/plugins/revolution/revolution/js/extensions/revolution-plugin.js') }}"></script>

    <!-- REVOLUTION SLIDER SCRIPT FILES -->
    <script  src="{{ asset('/front/js/rev-script-7.js') }}"></script>
    <script>
        window.jQuery = window.$ = jQuery;  
        (function($) { "use strict";
            //Preloader
            Royal_Preloader.config({
                mode           :   'progress',
                background     :   '#1a1a1a',
            });
        })(jQuery);
    </script>
    
        
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6TBMDT"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

</body>

</html>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 mb-5">
                <div class="footer-body">
                    <div class="logo">
                        <div class="logo-img">
                            <img src="{{ asset('/images/logo-sq.jpg') }}" alt="">
                        </div>
                        <span class="logo-text">INAI.KG</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mb-5">
                <div class="footer-title">{{ trans('t.contacts') }}</div>
                <div class="footer-divider"></div>
                <div class="footer-body">
                    <ul>
                        <li><a href="tel:+996557312711"><i class="fa fa-phone"></i> +996 557 312 711</a></li>
                        <li><a href="tel:+996312549238"><i class="fa fa-phone"></i> +996 312 549 238</a></li>
                        <li><a href="mailto:info@inai.kg"><i class="fa fa-envelope"></i> info@inai.kg</a></li>
                        <li><a href="geo:42.84036863922435,74.60068702697755"><i class="fa fa-map"></i>Малдыбыаева 34 Б<br>Бишкек 720000</a></li>
                    </ul>

                    <div class="social-links">
                        <ul>
                            <li><a class="fab fa-facebook-f fb" href="//www.facebook.com/kgiaibishkek" target="_blank"></a></li>
                            <li><a class="fab fa-youtube youtube" href="#" target="_blank"></a></li>
                            <li><a class="fab fa-twitter twitter" href="#" target="_blank"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="footer-title">{{ trans('t.links') }}</div>
                <div class="footer-divider"></div>
                <div class="footer-body">
                    <ul>
                        <li><i class="fa fa-mobile-alt"></i> {{ trans('t.career_fair_app') }}</li>
                    </ul>
                    <a target="_blank" href="#" class="btn mb-2 btn-slink">
                        <img class="hover-no" src="{{ asset('/images/apple-app-store-white.svg') }}" alt="">                        
                        <img class="hover-on" src="{{ asset('/images/apple-app-store.svg') }}" alt="">                        
                    </a>
                    <a target="_blank" href="#" class="btn mb-2 btn-slink">
                        <img class="hover-no" src="{{ asset('/images/google-app-store-white.svg') }}" alt="">
                        <img class="hover-on" src="{{ asset('/images/google-app-store.svg') }}" alt="">
                    </a>
                    <ul>
                        <li><a href="#"><i class="fa fa-envelope"></i> {{ trans('t.login_to_email') }}</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer>
<div class="bottom-panel">
    <div class="text-center">
        <p>{{ date('Y') }} {{ trans('t.all_rights_reserved') }}</p>
    </div>
</div>
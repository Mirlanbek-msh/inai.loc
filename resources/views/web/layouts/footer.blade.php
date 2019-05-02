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
                        @isset($contact_data['phone_1'])
                        <li>
                            <a href="tel:{{preg_replace("/\s+/","", $contact_data['phone_1'])}}">
                                <i class="fa fa-phone"></i> {{$contact_data['phone_1']}}
                            </a>
                        </li>
                        @endif
                        @isset($contact_data['phone_2'])
                        <li>
                            <a href="tel:{{preg_replace("/\s+/","", $contact_data['phone_2'])}}">
                                <i class="fa fa-phone"></i> {{$contact_data['phone_2']}}
                            </a>
                        </li>
                        @endif
                        @isset($contact_data['email'])
                        <li><a href="mailto:{{$contact_data['email']}}"><i class="fa fa-envelope"></i> {{$contact_data['email']}}</a></li>
                        @endif
                        @isset($contact_data['address'])
                        <li><a href="geo:42.84036863922435,74.60068702697755"><i class="fa fa-map"></i>{{$contact_data['address']}}</a></li>
                        @endif
                    </ul>

                    <div class="social-links">
                        <ul>
                            @isset($contact_data['fb'])
                            <li><a class="fab fa-facebook-f fb" href="{{$contact_data['fb']}}" target="_blank"></a></li>
                            @endif
                            @isset($contact_data['tw'])
                            <li><a class="fab fa-twitter twitter" href="{{$contact_data['tw']}}" target="_blank"></a></li>
                            @endif
                            @isset($contact_data['yt'])
                            <li><a class="fab fa-youtube youtube" href="{{$contact_data['yt']}}" target="_blank"></a></li>
                            @endif
                            @isset($contact_data['wa'])
                            <li><a class="fab fa-whatsapp whatsapp" href="https://wa.me/{{preg_replace("/\s+|[+]/","", $contact_data['wa'])}}" target="_blank"></a></li>
                            @endif
                            @isset($contact_data['instagram'])
                            <li><a class="fab fa-instagram instagram" href="{{$contact_data['instagram']}}" target="_blank"></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="footer-title">{{ trans('t.links') }}</div>
                <div class="footer-divider"></div>
                <div class="footer-body">
                    <ul>
                        <li>
                            <a href="https://prezi.com/view/gH9mVYXNNf1NG2ltNZt6/" target="_blank">
                                <i class="fa fa-file-powerpoint"></i> {{ trans('t.inai_presentation') }}
                            </a>
                        </li>
                    </ul>
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
                    {{-- <ul>
                        <li><a href="#"><i class="fa fa-envelope"></i> {{ trans('t.login_to_email') }}</a></li>
                    </ul> --}}
                </div>

            </div>
        </div>
    </div>
</footer>
<div class="bottom-panel">
    <div class="text-center">
        <p>&copy; INAI.KG {{ date('Y') }}</p>
        <span class="onoi-logo" title="Разработка - легко!"><a target="_blank" href="https://www.onoi.dev"><span class="left">With <i class="fa fa-heart"></i> by </span><img class="onoi-logo-img" src="{{ asset('/images/onoi-logo.svg') }}" alt=""><span class="right onoi-text">onoi.dev</span></a></span>
    </div>
</div>
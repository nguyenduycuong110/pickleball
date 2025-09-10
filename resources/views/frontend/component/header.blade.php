<div id="header" class="pc-header uk-visible-large">
    <div class="header-upper">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
            <a href="/" title="Logo" class="image img-cover logo wow fadeInUp" data-wow-delay="0.2s">
                <img src="{{ $system['homepage_logo'] }}" alt="logo">
            </a>
            @include('frontend.component.navigation')
            <div class="register-now wow fadeInDown" data-wow-delay="0.4S">
                <div class="uk-flex uk-flex-middle">
                    <div class="toolbox mr20">
                        <div class="uk-flex uk-flex-middle uk-flex-space-between">
                            <a href="{{ write_url('gio-hang') }}" title="" class="toolbox-item cart wow fadeInUp" data-wow-delay="0.35s">
                                <img src="/frontend/resources/img/cart.svg" alt="">
                                <span class="count">0</span>
                            </a>
                        </div>
                    </div>
                    <a href="{{ write_url('lien-he') }}" class="register-button uk-flex uk-flex-middle">
                        <span>Đăng ký ngay</span>
                        <span class="icon"><img src="{{ asset('frontend/resources/img/project/baseball.png') }}" alt="icon"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('frontend.component.mobile-menu')

@include('frontend.auth.index')

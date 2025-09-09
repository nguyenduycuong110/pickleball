<div id="header" class="pc-header uk-visible-large">
    <div class="header-upper">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
            <a href="/" title="Logo" class="image img-cover logo wow fadeInUp" data-wow-delay="0.2s">
                <img src="{{ $system['homepage_logo'] }}" alt="logo">
            </a>
            @include('frontend.component.navigation')
            <div class="register-now">
                <a href="" class="register-button uk-flex uk-flex-middle">
                    <span>Đăng ký ngay</span>
                    <span class="icon"><img src="{{ asset('frontend/resources/img/project/baseball.png') }}" alt="icon"></span>
                </a>
            </div>
        </div>
    </div>
</div>

@include('frontend.component.mobile-menu')

@include('frontend.auth.index')
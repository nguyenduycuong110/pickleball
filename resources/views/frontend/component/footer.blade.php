<footer id="footer" class="footer">
    <div class="footer-upper">
        <div class="footer-join-program">
            <div class="uk-container uk-container-center">
                <div class="footer-description">
                    <div class="heading-1 style-2 wow fadeInLeft" data-wow-delay="0.3s"><span>Take your tennis game to the next level with us</span></div>
                    <div class="description wow fadeInDown" data-wow-delay="0.5s">
                        Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua utenim ad minim veniam.
                    </div>
                    <x-button title="Tham gia chương trình của chúng tôi" canonical="{{ write_url('lien-he') }}" />
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle">
        <div class="uk-container uk-container-center">
            <div class="uk-grid uk-grid-large">
                <div class="uk-width-large-1-3">
                    <div class="footer-logo">
                        <span>{{ $system['homepage_company'] }}</span>
                    </div>
                    <div class="location-container">
                        <div class="address-item">- Địa chỉ: {{ $system['contact_office'] }}</div>
                        <div class="address-item">- Email: {{ $system['contact_email'] }}</div>
                        <div class="address-item">- Số điện thoại: {{ $system['contact_hotline'] }} - {{ $system['contact_phone']}}</div>
                        <div class="address-item">- Website: {{ $system['contact_website'] }}</div>
                    </div>
                </div>
                <div class="uk-width-large-1-3">
                    <div class="footer-menu">
                        <div class="uk-grid uk-grid-medium">
                            @if($menu['footer-menu'])
                            @foreach($menu['footer-menu'] as $key => $val)
                                @php
                                    $name = $val['item']->languages->first()->pivot->name;
                                    $canonical = write_url($val['item']->languages->first()->pivot->canonical);
                                @endphp
                                <div class="uk-width-medium-1-2">
                                    <div class="footer-menu__item wow fadeInDown" data-wow-delay="0.3s">
                                        <h3 class="heading-2"><span>{{ $name }}</span></h3>
                                        @if($val['children'])
                                        <ul class="uk-list uk-clearfix">
                                            @foreach($val['children'] as $children)
                                            @php
                                                $nameC = $children['item']->languages->first()->pivot->name;
                                                $canonicalC = write_url($children['item']->languages->first()->pivot->canonical);
                                            @endphp
                                            <li>
                                                <a href="{{ $canonicalC }}" title="{{ $nameC }}" >- {{ $nameC }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        </div>
                    </div>
                </div>
                <div class="uk-width-large-1-3">
                    <div class="footer-form">
                        <form action="" class="uk-form form uk-flex uk-flex-column uk-flex-space-between uk-height-1-1">
                            <div class="form-heading">Đăng ký nhận thông tin</div>
                            <div class="form-body">
                                <div class="form-row">
                                    <input type="text" placeholder="Nhập vào email của bạn.." value="" class="input-text">
                                </div>
                                <button type="submit" value="" name="submit">Đăng ký ngay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-lower uk-text-center">
        <div class="copyright uk-container uk-container-center">
            {{ $system['homepage_copyright'] }}
        </div>
    </div>
    
</footer>
{{-- <div class="contact-fixed">
    <ul>
        <li>
            <a href="{{ $system['social_messenger'] }}" title="Messenger" target="_blank" class="messenger image img-scaledown">
                <img src="/userfiles/image/slide/messenger%20(1).png" alt="Messenger">
                <span>(8 - 21h)</span>
            </a>
        </li>
        <li>
            <a href="https://zalo.me/{{ $system['social_zalo'] }}" title="Zalo" target="_blank" class="zalo image img-scaledown">
                <img src="/userfiles/image/slide/icons8-zalo-96.png" alt="Zalo">
                <span>(8 - 21h)</span>
            </a>
        </li>
        <li>
            <a href="tel:{{ $system['contact_hotline'] }}" title="Phone" target="_blank" class="phone image img-scaledown">
                <img src="/userfiles/image/slide/31e1db46a01a8bfbacce603d73f98e36a94fcc9b.png" alt="Phone">
                <span>(8 - 21h)</span>
            </a>
        </li>
        
    </ul>
</div> --}}

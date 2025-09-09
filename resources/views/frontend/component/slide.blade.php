@php
    $slideKeyword = App\Enums\SlideEnum::MAIN;
@endphp
@if(count($slides[$slideKeyword]['item']))
    <div class="panel-slide page-setup" data-setting="{{ json_encode($slides[$slideKeyword]['setting']) }}">
        <div class="uk-container uk-container-center">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($slides[$slideKeyword]['item'] as $key => $val )
                        <div class="swiper-slide">
                            <a href="{{ $val['canonical'] }}" title="" class="image img-cover wow fadeInRight" data-wow-delay="0.8s">
                                <img src="{{ $val['image'] }}" alt="{{ $val['name'] }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif
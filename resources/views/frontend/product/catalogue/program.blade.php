@extends('frontend.homepage.layout')
@section('content')
    <div class="program-container">
        <div class="panel-head">
            <div class="program-intro bg-black uk-flex uk-flex-column uk-flex-space-between">
                <div class="info">
                    <h2 class="heading-1 style-2"><span>{!! $productCatalogue->description !!}</span></h2>
                    <div class="description">{!! $productCatalogue->content !!}</div>
                </div>
                <x-button title="Đăng ký ngay" canonical="lien-he.html" />
            </div>
            <div class="program-sidebar">
                <div class="program-image img-cover img-zoomin">
                    <img src="{{ $productCatalogue->image }}" alt="{{ $productCatalogue->name }}">
                </div>
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-width-medium-1-2 uk-width-large-1-2">
                        @if(isset($widgets['feedback']) && !is_null($widgets['feedback']->object) )
                        @foreach($widgets['feedback']->object as $feedback)
                        <div class="customer-feedback">
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                @foreach($feedback->posts as $post)
                                @php
                                    $name = $post->languages[0]->name;
                                    $description = $post->languages[0]->description;
                                    $content = $post->languages[0]->content;
                                    $image = $post->image;
                                @endphp
                                    <div class="swiper-slide">
                                        <div class="customer-item">
                                            <div class="uk-flex uk-flex-column uk-flex-space-between uk-height-1-1">
                                                <div class="description">{!! $content !!}</div>
                                                <div class="content">
                                                    <div class="uk-flex uk-flex-middle">
                                                        <span class="image avatar"><img src="{{ $image }}" alt="{{ $name }}"></span>
                                                    <div>
                                                        <div class="fullname">{{ $name }}</div>
                                                        <div class="position">{!! $description !!}</div>
                                                    </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="uk-width-medium-1-2 uk-width-large-1-2">
                        <div class="count-number-box uk-flex uk-flex-column uk-flex-space-between bg-black">
                            <div class="student-count">
                                <div class="number">{{ $system['intro_section_2_number'] }}</div>
                                <div class="description">Học viên đăng ký</div>
                            </div>
                            <div class="student-count">
                                <div class="number">{{ $system['intro_section_2_coach'] }}</div>
                                <div class="description">Huấn luyện viên chuyên nghiệp</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('frontend.component.program')
    </div>
    <div class="mb200">
        @include('frontend.component.price')
    </div>
@endsection

@extends('frontend.homepage.layout')
@section('content')
    <div class="panel-intro">
        <div class="uk-grid uk-grid-small">
            <div class="uk-width-1-2 uk-width-small-1-2 uk-width-medium-1-3">
                <div class="section-1">
                    <div class="section-1-overlay uk-flex uk-flex-column uk-height-1-1 uk-flex-space-between">
                        <div class="title wow fadeInLeft" data-wow-delay="1s">{{ $system['intro_section_1_text'] }}</div>
                        <div class="join-button">
                            <a href="{{ $system['intro_section_1_link'] }}" class="register-button uk-flex uk-flex-middle">
                                <span>Tham gia chương trình</span>
                                <span class="icon"><img src="{{ asset('frontend/resources/img/project/baseball.png') }}" alt="icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-3">
                <div class="section-2">
                    @include('frontend.component.slide')
                    <div class="section-2-item">
                        <div class="uk-grid uk-grid-small mt10">
                            <div class="uk-width-1-2 uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-2">
                                <div class="rate-item">
                                    <div class="uk-flex uk-flex-column uk-height-1-1 uk-flex-space-between">
                                        <div class="uk-flex uk-flex-center uk-flex-middle">
                                            @for($i = 1; $i<=3; $i++)
                                            <span class="image image-{{ $i }}"><img src="{{ asset('frontend/resources/img/project/testimonial-'.$i.'.jpg') }}" alt="icon"></span>
                                            @endfor
                                            <span class="count">2K+</span>
                                        </div>
                                        <div>
                                            <div class="rate-start uk-text-center">
                                                ★★★★★
                                            </div>
                                            <div class="review-text uk-text-center uk-flex uk-flex-center uk-flex-middle">
                                                <span class="mr10">Đánh giá trung bình</span>
                                                <span class="count-averate">4.9/5</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2 uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-2">
                                <div class="number-item">
                                    <div class="uk-flex uk-flex-column uk-flex-space-between uk-height-1-1">
                                        <div class="number-item_row uk-text-center">
                                            <div class="c-number">{{ $system['intro_section_2_number'] }}</div>
                                            <div class="c-text">Học viên đăng ký</div>
                                        </div>
                                        <div class="number-item_row uk-text-center">
                                            <div class="c-number">{{ $system['intro_section_2_coach'] }}</div>
                                            <div class="c-text">Huấn luyện viên</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2 uk-width-small-1-2 uk-width-medium-1-3">
                <div class="section-3 video-intro" style="background:url({{ $system['intro_section_3_image'] }});background-repeat:no-repeat;background-size:cover;background-position: center center;">
                    <div class="section-3-overlay uk-flex uk-flex-column uk-flex-space-between uk-height-1-1">
                        <div></div>
                        <div class="video-button uk-flex uk-flex-middle">
                            <a href="" class="preview-v">
                                <i class="fa fa-play"></i>
                            </a>
                            <div class="video-text">
                                <div>{{ $system['intro_section_3_title'] }}</div>
                                <div>{{ $system['intro_section_3_description'] }}</div>
                            </div>
                        </div>
                    </div>
                    <div class="background-overlay"></div>
                </div>
            </div>
        </div>
    </div>
    @include('frontend.component.about-us')
    @include('frontend.component.program')

    @if(!is_null($widgets['feedback']->object))
        @foreach($widgets['feedback']->object as $feedback)
        @php
            $descriptionC = strip_tags($feedback->languages->description);
            $contentC = $feedback->languages->content;
        @endphp
        <div class="panel-feedback">
            <div class="uk-container uk-container-center">
                <div class="panel-head uk-text-center">
                    <h2 class="heading-1 wow fadeInLeft" data-wow-delay="0.4s"><span>{!! $descriptionC !!}</span></h2>
                    <div class="description wow fadeInLeft" data-wow-delay="0.6s">{!! $contentC !!}</div>
                </div>
                <div class="panel-body">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <div></div>
                        <div class="image background-image">
                            <img src="{{ asset('frontend/resources/img/project/tennis-player-N79XUC8.png') }}" alt="image">
                        </div>
                        @if(isset($feedback->posts) && count($feedback->posts))
                        <div class="feedback-container">
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
                                        <div class="feedback-item">
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
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @endif
    <div class="panel-video" style="background: url({{$system['homepage_video_background']}});background-position:top center;background-size:cover;background-repeat:no-repeat;background-attachment:fixed">
        <div class="video-container">
            <a href="#video-modal" class="preview-v" data-uk-modal>
                <i class="fa fa-play"></i>
            </a>
           
        </div>
        <div id="video-modal" class="uk-modal">
            <div class="uk-modal-dialog">
                <a class="uk-modal-close uk-close"></a>
                {!! $system['homepage_video_youtube_pc'] !!}
            </div>     
        </div>
    </div>

    @include('frontend.component.price')

    @if(isset($widgets['news']) && !is_null($widgets['news']))
        @foreach($widgets['news']->object as $key => $val)
        @php
            $catCanonical = write_url($val->languages->canonical);
            $catName = $val->languages->name;
        @endphp
        <div class="panel-news">
            <div class="uk-container uk-container-center">
                <div class="panel-head uk-flex uk-flex-middle uk-flex-space-between">
                    <h2 class="heading-1 style-2 wow fadeInLeft" data-wow-delay="0.4s"><span>{{ $catName }}</span></h2>
                    <x-button title="Xem tất cả tin tức" canonical="{{ $catCanonical }}" />
                </div>
                <div class="panel-body">
                    @if(isset($val->posts) && count($val->posts))
                        @php
                            $time = 0.2;
                        @endphp
                        <div class="uk-grid uk-grid-medium">
                            @foreach($val->posts as $keyPost => $post)
                                @if ($keyPost > 3) @break @endif
                                @php
                                    $name = $post->languages[0]->name;
                                    $canonical = write_url($post->languages[0]->canonical);
                                    $image = $post->image;
                                @endphp
                                <div class="uk-width-small-1-1 uk-width-medium-1-2">
                                    <div class="news-item wow fadeInDown" data-wow-delay="{{ $time * ($keyPost + 1) }}s">
                                        <a href="{{ $canonical }}" class="image img-cover"><img src="{{ $image }}" alt="{{ $name }}"></a>
                                        <div class="info">
                                            <div class="category-name">{{ $catName }}</div>
                                            <h3 class="title"><a href="{{ $canonical }}" title="{{ $name }}">{{ $name }} </a></h3>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    @endif

    @if(isset($widgets['question']->object))
        @foreach($widgets['question']->object as $key => $val)
            @php
                $catName = $val->languages->name;
                $image = $val->image;
            @endphp
            <div class="panel-question">
                <div class="uk-container uk-container-center">
                    <div class="uk-grid uk-grid-large">
                        <div class="uk-width-medium-1-2">
                            <div class="image wow fadeInLeft" data-wow-delay="0.4s">
                                <img src="{{ $image }}" alt="{{ $catName }}">
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2">
                            @if(isset($val->posts) && count($val->posts))
                                <div class="question-container">
                                    <h2 class="heading-1"><span>{{ $catName }}</span></h2>
                                    <div class="panel-body">
                                        <div class="uk-accordion" data-uk-accordion>
                                            @php
                                                $time = 0.2;
                                            @endphp
                                            @foreach($val->posts as $k => $question)
                                                @php
                                                    $name = $question->languages[0]->name;
                                                    $description = $question->languages[0]->description;
                                                @endphp
                                                <div class="question-item wow fadeInDown" data-wow-delay="{{ $time * ($k + 1) }}s">
                                                    <h3 class="uk-accordion-title">{{ $name }}</h3>
                                                    <div class="uk-accordion-content">{!! $description !!}</div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    

@endsection

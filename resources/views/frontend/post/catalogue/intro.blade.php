@extends('frontend.homepage.layout')
@section('content')
    <div class="page-intro">
        <div class="section-1 intro-description" style="background:url({{ $introduce['block_1_background'] }});background-size:100%;">
            <div class="heading-1"><span>{!! $introduce['block_1_title'] !!}</span></div>    
            <div class="description">{!! $introduce['block_1_description'] !!}</div>
            <x-button title="Giới thiệu về chúng tôi" />
        </div>     
        <div class="section-2 about">
            @include('frontend.component.about-us')
        </div>
        <div class="section-3 intro-description" style="background:url({{ $introduce['block_2_background'] }});background-size:100%;">
            <div class="uk-container uk-container-center">
                <div class="uk-grid uk-grid-meidum mb30">
                    <div class="uk-width-medium-1-2">
                        <div class="vision-container">
                            <div class="uk-grid uk-grid-medium">
                                @for($i = 1; $i <= 2; $i++)
                                <div class="uk-width-small-1-2 uk-width-medium-1-2">
                                    <div class="about-children-item style-2">
                                        <span class="icon mb20"><img src="{{ $introduce['block_2_image_'.$i] }}" alt="icon"></span>
                                        <div class="info">
                                            <div class="title"><span>{{ $introduce['block_2_title_'.$i] }}</span></div>
                                            <div class="description">
                                                <p>{{ $introduce['block_2_description_'.$i] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-medium-1-2">
                        <div class="info">
                            <div class="heading-1 style-2"><span>{{ $introduce['block_2_title'] }}</span></div>
                            <div class="description">{!! $introduce['block_2_description'] !!}</div>
                        </div>
                    </div>
                </div>
                <div class="uk-grid uk-grid-medium">
                    @for($i = 1; $i<=3; $i++)
                    <div class="uk-width-small-1-1 uk-width-medium-1-3">
                        <div class="skill-item">
                            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                                <div class="title">{{ $introduce['block_2_skill_'.$i.'_title'] }}</div>
                                <div class="percent">{{ $introduce['block_2_skill_'.$i.'_percent'] }}%</div>
                            </div>
                            <div class="uk-progress">
                                <div class="uk-progress-bar" style="width: {{ $introduce['block_2_skill_'.$i.'_percent'] }}%;"></div>
                            </div>
                            <div class="description">
                                {{ $introduce['block_2_skill_'.$i.'_description'] }}
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="section-4">
            <div class="uk-container uk-container-center">
                <div class="uk-grid uk-grid-large">
                    <div class="uk-width-medium-1-3">
                        <div class="panel-head">
                            <div class="heading-1"><span>{{ $introduce['block_3_title'] }}</span></div>
                            <div class="description">'
                                {{ $introduce['block_3_description'] }}
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-medium-2-3">
                        <div class="coach-list">
                            @if(isset($lectures) && count($lectures))
                            <div class="uk-grid uk-grid-medium">
                                @foreach($lectures as $key => $val)
                                <div class="uk-width-medium-1-2 mb20">
                                    <div class="coach-item">
                                        <span class="image img-cover img-zoomin"><img src="{{ $val->image }}" alt="{{ $val->name }}"></span>
                                        <div class="info">
                                            <div class="title">{{ $val->name }}</div>
                                            <div class="description">
                                                {{ $val->position }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
@endsection


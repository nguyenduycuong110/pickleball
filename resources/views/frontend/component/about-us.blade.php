@if(!is_null($widgets['intro']->object))
    @foreach($widgets['intro']->object as $key => $val)
    @php
        $name = $val->languages->name;
        $description = $val->languages->description;
        $content = $val->languages->content;
        $album = json_decode($val->album, true);
    @endphp
    <div class="panel-aboutus">
        <div class="uk-container uk-container-center">
            <div class="panel-head">
                <div class="uk-grid uk-grid-medium">
                    <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-2-3 uk-width-large-2-3">
                        <h2 class="heading-1 wow fadeInLeft" data-wow-delay="1s">
                            <span>{!! $description !!}</span>
                        </h2>
                    </div>
                    <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3">
                        <div class="description wow fadeInDown" data-wow-delay="1.2s">
                            {!! $content !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-body mt50">
                <div class="uk-grid uk-grid-large uk-flex uk-flex-middle">
                    <div class="uk-width-small-1-1 uk-width-medium-1-2">
                        <div class="image-list">
                            @if(count($album))
                                @php
                                    $time  = 0.2;
                                @endphp
                                @foreach($album as $k => $a)
                                    <span class="image img-cover img-zoomin wow fadeInDown" data-wow-delay="{{ $time * ($k + 1) }}s"><img src="{{ $a }}" alt="image"></span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="uk-width-small-1-1 uk-width-medium-1-2">
                        @if(!is_null($widgets['intro-children']->object))
                            <div class="about-children">
                                <div class="uk-grid uk-grid-medium">
                                    @php
                                        $time  = 0.2;
                                    @endphp
                                    @foreach($widgets['intro-children']->object  as $j => $children)
                                        <div class="uk-width-1-2 uk-width-small-1-2 uk-width-medium-1-2">
                                            <div class="about-children-item wow fadeInDown" data-wow-delay="{{ $time * ( $j + 1) }}s">
                                                <span class="icon mb20"><img src="{{ asset('frontend/resources/img/project/icon-'.($j+1).'.png' ) }}" alt="icon"></span>
                                                <div class="info">
                                                    <div class="title"><span>{{ $children->languages->name }}</span></div>
                                                    <div class="description">
                                                        {!! $children->languages->description !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <div class="join-button">
                            <a href="{{ write_url('gioi-thieu') }}" class="register-button uk-flex uk-flex-middle wow fadeInLeft" data-wow-delay="0.4s">
                                <span>Tìm hiểu thêm về chúng tôi</span>
                                <span class="icon"><img src="{{ asset('frontend/resources/img/project/baseball.png') }}" alt="icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endif
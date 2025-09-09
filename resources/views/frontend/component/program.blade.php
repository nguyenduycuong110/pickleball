@if(!is_null($widgets['program']->object))
    @foreach($widgets['program']->object as $program)
    @php
        $nameC = $program->languages->name;
        $descriptionC = $program->languages->description;
    @endphp
    <div class="panel-program">
        <div class="uk-container uk-container-center">
            <h2 class="heading-1 uk-text-center"><span>{!! strip_tags($descriptionC) !!}</span></h2>
            <div class="panel-body">
                @if(isset($program->posts) && count($program->posts))
                <div class="uk-grid uk-grid-small">
                    @foreach($program->posts as $post)
                    @php
                        $name = $post->languages[0]->name;
                        $image = $post->image;
                        $description = $post->languages[0]->description;
                        $canonical = write_url($post->languages[0]->canonical, true);
                    @endphp
                    <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-3">
                        <div class="program-item">
                            <a href="{{ $canonical }}" class="image img-cover"><img src="{{ $image }}" alt="{{ $name }}"></a>
                            <div class="info">
                                <div class="title"><a href="{{ $canonical }}" title="{{ $name }}">{{ $name }}</a></div>
                                <div class="description">
                                    {!! $description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
            <div class="panel-foot">
                <div class="join-button ">
                    <a href="{{ write_url($program->languages->canonical) }}" class="register-button style-2 uk-flex uk-flex-middle">
                        <span>Xem tất cả các chương trình đào tạo</span>
                        <span class="icon"><img src="{{ asset('frontend/resources/img/project/baseball.png') }}" alt="icon"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endif
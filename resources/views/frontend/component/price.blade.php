@if(!is_null($widgets['products']->object))
    @foreach($widgets['products']->object as $key => $val)
    @php
        $descriptionC = strip_tags($val->languages->description);
        $contentC = strip_tags($val->languages->content);
    @endphp
    <div class="panel-product">
        <div class="uk-container uk-container-center">
            <div class="panel-product-grid">
                <div class="panel-head">
                    <h2 class="heading-1 wow fadeInLeft" data-wow-delay="0.4s"><span>{!! $descriptionC !!}</span></h2>
                    <div class="description wow fadeInDown" data-wow-delay="0.6s">{!! $contentC !!}</div>
                </div>
                <div class="panel-body">
                    @if(isset($val->products) && count($val->products))
                        @php
                           $time = 0.3;
                        @endphp
                        @foreach($val->products as $k => $product)
                            @php
                                $name = $product->languages[0]->name;
                                $courseContent = explode(',', $product->lession_content);
                                $price = $product->price;
                                $description = $product->languages[0]->description;
                            @endphp
                            <div class="price-item wow fadeInDown" data-wow-delay="{{ $time * ($k + 1) }}s">
                                <div class="uk-grid uk-grid-medium">
                                    <div class="uk-width-1-2 uk-width-small-1-2 uk-width-medium-1-2">
                                        <div class="info uk-height-1-1 uk-flex uk-flex-column uk-flex-space-between">
                                            <div class="title"><span>{{ $name }}</span></div>
                                            <div class="description">{!! $description !!}</div>
                                            <div class="price uk-flex uk-flex-bottom"><span>{{ convert_price($price, true); }}<span class="currency">đ</span></span>/ tháng</div>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-2 uk-width-small-1-2 uk-width-medium-1-2">
                                        <div class="course-info uk-height-1-1 uk-flex uk-flex-column uk-flex-space-between">
                                            
                                            <div class="course-content">
                                                @if(count($courseContent) && !empty($courseContent[0]) && $courseContent[0] != '')
                                                <ul class="uk-list uk-clearfix">
                                                    @foreach($courseContent as $key => $val)
                                                    <li><span>{{ $val }}</span></li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                            </div>
                                            
                                            <div class="join-button ">
                                                <a class="register-button style-2 uk-flex uk-flex-middle order-course" href="{{ write_url('lien-he') }}">
                                                    <span>Đăng ký ngay</span>
                                                    <span class="icon"><img src="{{ asset('frontend/resources/img/project/baseball.png') }}" alt="icon"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endif
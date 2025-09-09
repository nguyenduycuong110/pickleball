@php
    $modelName = $model->languages->first()->pivot->name;
@endphp
<div class="page-breadcrumb bg-black">      
    <div class="uk-container uk-container-center">
        <div class="page-breadcrumb-content">
            <ul class="uk-list uk-clearfix uk-flex uk-flex-middle">
                <li>
                    <a href="/">{{ __('frontend.home') }}</a>
                </li>
                <li>
                    <span class="slash">/</span>
                </li>
                @if(!is_null($breadcrumb))
                    @foreach($breadcrumb as $key => $val)
                        @php
                            $name = $val->languages->first()->pivot->name;
                            $canonical = write_url($val->languages->first()->pivot->canonical, true, true);
                        @endphp
                        <li>
                            <a href="{{ $canonical }}" title="{{ $name }}">{{ $name }}</a>
                        </li>
                    @endforeach
                @endif
            </ul>
            <h1 class="heading-1 style-2"><span>{{ $model->name }}</span></h1>
            <div class="description">
                {!! $model->description !!}
            </div>
        </div>
    </div>
</div>
@extends('frontend.homepage.layout')
@section('content')
    <div class="post-catalogue-container">
        @include('frontend.component.breadcrumb', ['model' => $postCatalogue])
        <div class="post-list">
            <div class="uk-grid uk-grid-small">
                @if(!is_null($posts) && count($posts))
                @foreach($posts as $post)
                @php
                    $name = $post->name;
                    $canonical = write_url($post->canonical);
                    $image = $post->image;
                @endphp
                <div class="uk-width-1-1 uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-3">
                    <div class="news-item">
                        <a href="{{ $canonical }}" class="image img-cover"><img src="{{ $image }}" alt="{{ $name }}"></a>
                        <div class="info">
                            <div class="category-name">{{ $postCatalogue->languages->first()->pivot->name }}</div>
                            <h3 class="title"><a href="{{ $canonical }}" title="{{ $name }}">{{ $name }} </a></h3>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
            <div class="paginate">
                @include('frontend.component.pagination', ['model' => $posts])
            </div>
        </div>
    </div>
@endsection


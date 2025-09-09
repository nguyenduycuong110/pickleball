@php
    // dd($product);
    $name = $product->name;
    // dd($name);
    $canonical = write_url($product->canonical);
    $image = image($product->image);
    $price = getPrice($product);    
    $review['star'] = ($product->review_count == 0) ? '0' : $product->review_average/5*100;
@endphp
<div class="product-item">
    <a href="{{ $canonical }}" title="{{ $name }}" class="image img-scaledown img-zoomin">
        <div class="skeleton-loading"></div>
        <img class="lazy-image" data-src="{{ $image }}" alt="{{ $name }}">
    </a>
    <div class="info">
        <h3 class="title">
            <a href="{{ $canonical }}" title="{{ $name }}">{{ $name }}</a>
        </h3>
        <div class="product-price">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                {!! $price['html'] !!}
            </div>
        </div>
    </div>
</div>
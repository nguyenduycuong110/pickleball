<div class="product-info">
    <h1 class="title product-main-title"><span>{{ $name }}</span>
    </h1>
    <div class="rating">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
            <div>
                <div class="star-rating">
                    <div class="stars" style="--star-width: {{ $review['star'] }}%"></div>
                </div>
            </div>
            <div class="spec-row">Code: <strong>{{ $product->code }}</strong></div>
        </div>
    </div>
    <div class="product-detail__description">
        {!! $product->description !!}
    </div>

    <div class="product-info__detail mb20">
        <div class="product-info__price mb10">
            {!! $price['html'] !!}
            @if($price['price']  != $price['priceSale'] && $price['percent'] > 0)
            <div class="price-save">
                Tiết kiệm: <strong>{{ convert_price($price['price'] - $price['priceSale'], true) }}</strong> (<span style="color:red">-{{ $price['percent'] }}%</span>)
            </div>
            @endif
        </div>
        @include('frontend.product.product.component.gift')
        @include('frontend.product.product.component.voucher')
        @include('frontend.product.product.component.variant')
        <div class="quantity">
            <div class="mb10">Số lượng:</div>
            <div class="uk-flex uk-flex-middle">
                <div class="quantitybox uk-flex uk-flex-middle">
                    <div class="minus quantity-button">-</div>
                    <input type="text" name="" value="1" class="quantity-text">
                    <div class="plus quantity-button">+</div>
                </div>
            </div>
        </div>
        <div class="product-button__group">
            <div class="uk-grid uk-grid-small">
                <div class="uk-width-large-1-2">
                    <button class="btn-product-button addToCart" data-id="{{ $product->id }}">Thêm vào giỏ hàng</button>
                </div>
                <div class="uk-width-large-1-2">
                    <button class="btn-product-button addToWishlist" data-id="{{ $product->id }}">Thêm vào yêu thích</button>
                </div>
            </div>
            <div class="product-button__buynow mt10">
                <button class="btn-product-button addToCart" data-redirect="redirect" data-id="{{ $product->id }}">Mua ngay sản phẩm này</button>
            </div>
        </div>
    </div>
    <div class="product-detail__buyed">
       <div class="uk-flex uk-flex-middle">
            <i class="fi-rs-eye"></i> 
            <span class="ml10"> {{ rand(1,100) }} customers are viewing this product</span>
       </div>
    </div>
    <div class="product-detail__hotline">
        <div class="uk-grid uk-grid-small">
            <div class="uk-width-large-1-2 mb30">
                <div class="technical-item">
                    <div class="strong">Holtline</div>
                    <div class="technical-item__phone">{{ $system['contact_hotline'] }}</div>
                </div>
            </div>
            <div class="uk-width-large-1-2 mb30">
                <div class="technical-item">
                    <div class="strong">Kỹ thuật</div>
                    <div class="technical-item__phone">{{ $system['contact_technical_phone'] }}</div>
                </div>
            </div>
            <div class="uk-width-large-1-2">
                <div class="technical-item">
                    <div class="strong">Bán hàng</div>
                    <div class="technical-item__phone">{{ $system['contact_sell_phone'] }}</div>
                </div>
            </div>
            <div class="uk-width-large-1-2">
                <div class="technical-item">
                    <div class="strong">Chăm sóc khách hàng</div>
                    <div class="technical-item__phone">{{ $system['contact_sell_phone'] }}</div>
                </div>
            </div>
        </div>
    </div>
    @if($seller)
    <div class="mt30 shop-preview">
        <a href="{{ route('seller.shop', $seller->phone) }}">Truy cập shop của {{ $seller->name }}</a>
    </div>
    @endif

</div>
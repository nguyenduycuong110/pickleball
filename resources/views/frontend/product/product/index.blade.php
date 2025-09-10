@php
    $name = $product->name;
    $canonical = write_url($product->canonical);
    $image = image($product->image, $name);
    $price = getPrice($product);
    $catName = $productCatalogue->name;
    $review = getReview($product);
    $description = $product->description;
    $attributeCatalogue = $product->attributeCatalogue;
    $gallery = json_decode($product->album);
@endphp

@extends('frontend.homepage.layout')
@section('content')


<div class="product-container">
    @include('frontend.component.breadcrumb', ['model' => $productCatalogue, 'breadcrumb' => $breadcrumb])

    <div class="uk-container uk-container-center product-container-1260">
        <div class="panel-head">
          
            <div class="uk-grid uk-grid-small">
                <div class="uk-width-large-1-10">
                    @include('frontend.product.product.component.extra')
                </div>
                <div class="uk-width-large-5-10">
                    @include('frontend.product.product.component.gallery')
                </div>
                <div class="uk-width-large-4-10">
                    @include('frontend.product.product.component.info',['voucher_product' => $voucher_product])
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="uk-grid uk-grid-medium">
                <div class="uk-width-large-1-1">
                    @include('frontend.product.product.component.general')
                    @include('frontend.product.product.component.review', ['model' => $product, 'reviewable' => 'App\Models\Product'])
                </div>
                {{-- <div class="uk-width-large-1-4">
                    @include('frontend.product.aside')
                </div> --}}
            </div>
        </div>
    </div>
</div>
@include('frontend.product.product.component.modal')
@include('frontend.product.product.component.hidden')

@endsection

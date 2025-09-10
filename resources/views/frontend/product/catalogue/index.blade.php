@extends('frontend.homepage.layout')
@section('content')
    <div class="product-catalogue-container">   
        @include('frontend.component.breadcrumb', ['model' => $productCatalogue])
        <div class="panel-body">
            <div class="uk-container uk-container-center">
                @if(!is_null($products) && count($products))
                    <div class="uk-grid uk-grid-medium">
                        @foreach($products as $key => $product)
                            <div class="uk-width-large-1-5 uk-width-medium-1-4 uk-width-small-1-2 uk-width-1-1">
                                @include('frontend.component.p-item', ['product' => $product])
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('content')
<section class="featured-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titie-section wow fadeInDown animated ">
                    <h1>FEATURED PRODUCTS</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="filter-menu">
                    <ul class="button-group sort-button-group">
                        <li class="button active" data-category="all">All<span>8</span></li>
                        <li class="button" data-category="cat-1">Dresses and Suits<span>2</span></li>
                        <li class="button" data-category="cat-2">Accessories<span>2</span></li>
                        <li class="button" data-category="cat-3">Miscellaneous<span>4</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured isotope">
            @foreach ($products as $product)
            <div class="col-md-3 col-sm-6 col-xs-12 cat-3 featured-items isotope-item">
                <div class="product-item">
                    <img src="{{ asset($product->gallery) }}" class="img-responsive" width="255" height="322" alt="">
                    <div class="sell-meta">
                        <a href="#" class="new-item">New</a>
                        <a href="#" class="sell-item">Sell</a>
                    </div>
                    <div class="product-hover">
                        <div class="product-meta">
                            <a href="#"><i class="pe-7s-like"></i></a>
                            <a href="#"><i class="pe-7s-shuffle"></i></a>
                            <a href="#"><i class="pe-7s-clock"></i></a>
                            <a href="#"><i class="pe-7s-cart"></i>Add to Cart</a>
                        </div>
                    </div>
                    <div class="product-title">
                        <a href="#">
                            <h3>Cool lingerie</h3>
                            <span>${{ $product->price }}</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
    
</section>

@endsection
 


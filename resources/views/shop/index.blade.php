@extends('layouts.master')

    @section('title')
        Fresh Deals: Where Quality Laptops Sell
    @endsection

    @section('content')
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnails">
                        <img src="{{$product->imagePath}}" alt="dell">
                        <div class="caption">
                            <h3>MAC PRO</h3>
                            <p class="description">HDD: 3TR, RAM: 12GB, SCREEN SIZE: 14"</p>
                            <div class="clearfix">
                                <div class="pull-left price">$4000</div>
                            <a href="#" class="btn btn-default btn-success pull-right" role="button">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    @endforeach
    @endsection


@section('')
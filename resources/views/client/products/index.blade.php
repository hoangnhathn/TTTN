@extends('client.layout.master')
@section('title', 'Shop')

@section('search')
    <div class="col-sm-3">
        <form acction="products">
            <div class="search_box pull-right">
                <input name="search" value="{{request('search')}}" type="text" placeholder="Tìm kiếm"/>
                <button type="submit"><img href="./products" src="client/images/searchicon.png" alt="" /></button>
            </div>
        </form>
    </div>
@endsection
@section('content')

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Sản Phẩm</h2>
                    @foreach($allProducts as $Product)
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="client/images/{{$Product->productImages[0]->path}}" alt="" />
                                        @if($Product->discount != null)
                                            <h2>Sale {{$Product->discount}}</h2>
                                        @else
                                            <h2>{{$Product->price}}</h2>
                                        @endif
                                        <p>{{$Product->product_name}}</p>
                                        <a href="products/product/{{$Product->id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div><!--features_items-->
                <ul class="pagination">
                    {{$allProducts->links()}}
                </ul>
@endsection

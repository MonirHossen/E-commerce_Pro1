<div class="media">

    <div class="media-left">
        @if(isset($product->product_images[0]))
        <a href="{{ route('product.details',$product->id) }}"><img src="{{ asset($product->product_images[0]->image) }}" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
        @else
        <a href="{{ route('product.details',$product->id) }}"><img src="{{ asset('images/custome/no-image.png') }}" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
        @endif
    </div>

    <div class="media-body">
        <div class="caption">
            <h4><a href="{{ route('product.details',$product->id) }}">{{ $product->name }}</a></h4>


            <div class="ratings">
                <div class="rating-box">
                    <span class=""><i class="fa fa-star "></i></span>
                    <span class=""><i class="fa fa-star "></i></span>
                    <span class=""><i class="fa fa-star "></i></span>
                    <span class=""><i class="fa fa-star "></i></span>
                    <span class=""><i class="fa fa-star "></i></span>
                </div>
            </div>
            <div class="price">
                <span class="price-new">{{ $product->unit_price }} Tk </span>
            </div>
        </div>

    </div>

</div>

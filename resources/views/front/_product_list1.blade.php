<div class="product-layout">
    <div class="product-item-container">
        <div class="left-block">
            <div class="product-image-container  second_img ">
                <a href="{{ route('product.details',$product->id) }}" class="product-img">
                    <img style="height: 300px;" src="{{ asset($product->product_images[0]->image) }}" alt="">
                </a>
                <!--Sale Label-->
                <span class="new">New</span>

                <div class="hover">
                    <ul>
                        <li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                        <li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
                        <li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="right-block">
            <div class="caption">
                <h4><a href="product.html">{{ $product->name }}</a></h4>
                <div class="ratings">
                    <div class="rating-box">
                        <span class=""><i class="fa fa-star "></i></span>
                        <span class=""><i class="fa fa-star "></i></span>
                        <span class=""><i class="fa fa-star "></i></span>
                        <span class=""><i class="fa fa-star "></i></span>
                        <span class="gray"><i class="fa fa-star "></i></span>
                    </div>
                </div>

                <div class="price">
                    <span class="price-new">{{ $product->unit_price }} Tk</span>
                </div>
                <div class="description item-desc hidden">
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                </div>
            </div>

            <div class="button-group">
                <button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
            </div>
        </div><!-- right block -->


    </div>
</div>

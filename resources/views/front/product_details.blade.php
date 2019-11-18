@extends('layouts.front.master')
@section('title','Product Details')

@section('content')
    <div class="main-container container">
        <ul class="header-main type-1">
            <li class="home"><a href="#">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li class="home"><a href="#">Smartphone &amp; Tablets<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
            <li><a href="#">Bint Beef</a></li>
        </ul>

        <div class="row">
            <!--Middle Part Start-->
            <div id="content " class="col-md-12 col-sm-12 type-1">

                <div class="product-view row">
                    <div class="left-content-product col-lg-9 col-xs-12">
                        <div class="row">
                            <div class="content-product-left class-honizol col-md-6 col-sm-12 col-xs-12 ">
                                <div class="large-image  ">
                                    <img itemprop="image" class="product-image-zoom" src="{{ asset($product_images[0]->image) }}" data-zoom-image="{{ asset($product_images[0]->image) }}" title="Bint Beef" alt="Bint Beef">
                                </div>
                                <div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider owl-carousel " data-nav='yes' data-loop="yes" data-margin="10" data-items_xs="2" data-items_sm="3" data-items_md="4">
                                    @foreach($product_images as $key=>$image)
                                        <a data-index="{{ $key }}" class="img thumbnail " data-image="{{ asset($image->image) }}" title="Bint Beef">
                                            <img src="{{ asset($image->image) }}" title="Bint Beef" alt="Bint Beef">
                                        </a>
                                    @endforeach
                                </div>

                            </div>

                            <div class="content-product-right col-md-6 col-sm-12 col-xs-12">
                                <div class="title-product">
                                    <h1>Bint Beef</h1>
                                </div>
                                <!-- Review -->
                                <div class="box-review form-group">
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star gray"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-box-desc">
                                    <ul>
                                        <li>45 inch HD Touch Screen (1280 x 720)</li>
                                        <li>Android 4.4 KitKat OS</li>
                                        <li>1.4 GHz Quad Core™ Processor</li>
                                        <li>20 MP front and 28 megapixel CMOS rear camera</li>
                                    </ul>
                                </div>
                                <div class="product-label form-group">
                                    <div class="stock">
                                        <span>Availability:</span> <span class="instock">In Stock</span>
                                        <p>SKU: 3721 -Vlk</p>
                                    </div>
                                    <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                        <span class="price-new" itemprop="price">$114.00</span>
                                        <span class="price-old">$122.00</span>
                                    </div>

                                </div>
                                <div id="product">
                                    <div class="form-group box-info-product">
                                        <div class="option quantity">
                                            <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                                <label>Qty:  </label>
                                                <input class="form-control" type="text" name="quantity" value="1">
                                                <input type="hidden" name="product_id" value="50">
                                                <span class="input-group-addon product_quantity_down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                                <span class="input-group-addon product_quantity_up"><i class="fa fa-angle-up" aria-hidden="true"></i></span>

                                            </div>
                                        </div>
                                        <div class="info-product-right">
                                            <div class="cart">
                                                <input type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" onclick="cart.add('42', '1');" data-original-title="Add to Cart">
                                            </div>
                                            <div class="add-to-links wish_comp">
                                                <ul class="blank list-inline">
                                                    <li class="wishlist">
                                                        <a class="icon" data-toggle="tooltip" title="" onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a class="icon" data-toggle="tooltip" title="" onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <!-- end box info product -->
                                <div class="share">
                                    <p>Share This:</p>
                                    <div class="share-icon">
                                        <ul>
                                            <li class="facebook"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="twitter"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="google"><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            <li class="skype"><a href=""><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>					</div>
                        <div class="row">
                            <div class="col-sx-12">
                                <div class="producttab ">
                                    <div class="tabsslider  col-xs-12">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                                            <li class="item_nonactive "><a data-toggle="tab" href="#tab-review">Reviews (1)</a></li>
                                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
                                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a></li>
                                        </ul>
                                        <div class="tab-content col-xs-12">
                                            <div id="tab-1" class="tab-pane fade active in">
                                                <p>
                                                    The 30-inch Apple Cinema HD Display delivers an amazing 2560 x 1600 pixel resolution. Designed specifically for the creative professional, this display provides more space for easier access to all the tools and palettes needed to edit, format and composite your work. Combine this display with a Mac Pro, MacBook Pro, or PowerMac G5 and there's no limit to what you can achieve. <br>
                                                    <br>
                                                    The Cinema HD features an active-matrix liquid crystal display that produces flicker-free images that deliver twice the brightness, twice the sharpness and twice the contrast ratio of a typical CRT display. Unlike other flat panels, it's designed with a pure digital interface to deliver distortion-free images that never need adjusting. With over 4 million digital pixels, the display is uniquely suited for scientific and technical applications such as visualizing molecular structures or analyzing geological data. <br>
                                                    <br>
                                                    Offering accurate, brilliant color performance, the Cinema HD delivers up to 16.7 million colors across a wide gamut allowing you to see subtle nuances between colors from soft pastels to rich jewel tones. A wide viewing angle ensures uniform color from edge to edge. Apple's ColorSync technology allows you to create custom profiles to maintain consistent color onscreen and in print. The result: You can confidently use this display in all your color-critical applications. <br>
                                                    <br>
                                                    Housed in a new aluminum design, the display has a very thin bezel that enhances visual accuracy. Each display features two FireWire 400 ports and two USB 2.0 ports, making attachment of desktop peripherals, such as iSight, iPod, digital and still cameras, hard drives, printers and scanners, even more accessible and convenient. Taking advantage of the much thinner and lighter footprint of an LCD, the new displays support the VESA (Video Electronics Standards Association) mounting interface standard. Customers with the optional Cinema Display VESA Mount Adapter kit gain the flexibility to mount their display in locations most appropriate for their work environment. <br>
                                                    <br>
                                                    The Cinema HD features a single cable design with elegant breakout for the USB 2.0, FireWire 400 and a pure digital connection using the industry standard Digital Video Interface (DVI) interface. The DVI connection allows for a direct pure-digital connection.<br>
                                                </p>


                                            </div>
                                            <div id="tab-review" class="tab-pane fade  in">
                                                <form>
                                                    <div id="review">
                                                        <table class="table table-striped table-bordered">
                                                            <tbody>
                                                            <tr>
                                                                <td style="width: 50%;"><strong>Super Administrator</strong></td>
                                                                <td class="text-right">29/07/2015</td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2">
                                                                    <p>Best this product opencart</p>
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star gray"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="text-right"></div>
                                                    </div>
                                                    <h2 id="review-title">Write a review</h2>
                                                    <div class="contacts-form">
                                                        <div class="form-group"> <span class="icon icon-user"></span>
                                                            <input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}">
                                                        </div>
                                                        <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                                            <textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
                                                        </div>
                                                        <span style="font-size: 11px;"><span class="text-danger">Note:</span>						HTML is not translated!</span>

                                                        <div class="form-group">
                                                            <b>Rating</b> <span>Bad</span>&nbsp;
                                                            <input type="radio" name="rating" value="1"> &nbsp;
                                                            <input type="radio" name="rating" value="2"> &nbsp;
                                                            <input type="radio" name="rating" value="3"> &nbsp;
                                                            <input type="radio" name="rating" value="4"> &nbsp;
                                                            <input type="radio" name="rating" value="5"> &nbsp;<span>Good</span>

                                                        </div>
                                                        <div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div id="tab-4" class="tab-pane fade">
                                                <a href="#">Monitor</a>,
                                                <a href="#">Apple</a>
                                            </div>
                                            <div id="tab-5" class="tab-pane fade">
                                                <p>Lorem ipsum dolor sit amet, consetetur
                                                    sadipscing elitr, sed diam nonumy eirmod
                                                    tempor invidunt ut labore et dolore
                                                    magna aliquyam erat, sed diam voluptua.
                                                    At vero eos et accusam et justo duo
                                                    dolores et ea rebum. Stet clita kasd
                                                    gubergren, no sea takimata sanctus est
                                                    Lorem ipsum dolor sit amet. Lorem ipsum
                                                    dolor sit amet, consetetur sadipscing
                                                    elitr, sed diam nonumy eirmod tempor
                                                    invidunt ut labore et dolore magna aliquyam
                                                    erat, sed diam voluptua. </p>
                                                <p>At vero eos et accusam et justo duo dolores
                                                    et ea rebum. Stet clita kasd gubergren,
                                                    no sea takimata sanctus est Lorem ipsum
                                                    dolor sit amet. Lorem ipsum dolor sit
                                                    amet, consetetur sadipscing elitr.</p>
                                                <p>Sed diam nonumy eirmod tempor invidunt
                                                    ut labore et dolore magna aliquyam erat,
                                                    sed diam voluptua. At vero eos et accusam
                                                    et justo duo dolores et ea rebum. Stet
                                                    clita kasd gubergren, no sea takimata
                                                    sanctus est Lorem ipsum dolor sit amet.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="col-lg-3 hidden-sm hidden-md hidden-xs slider-products">
                        <div class="module latest-product titleLine">
                            <h3 class="modtitle">Latest Product</h3>
                            <hr>
                            <hr>
                            <hr>
                            <div class="modcontent ">
                                <div class="product-latest-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="product.html"><img src="img/demo/shop/product/product-3.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="caption">
                                                <h4><a href="product.html">Sunt Molup</a></h4>

                                                <div class="price">
                                                    <span class="price-new">$100.00</span>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="product-latest-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="product.html"><img src="img/demo/shop/product/product-1.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="caption">
                                                <h4><a href="product.html">Et Spare</a></h4>

                                                <div class="price">
                                                    <span class="price-new">$99.00</span>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class="gray"><i class="fa fa-star "></i></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="product-latest-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="product.html"><img src="img/demo/shop/product/product-2.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="caption">
                                                <h4><a href="product.html">Cisi Chicken</a></h4>

                                                <div class="price">
                                                    <span class="price-new">$59.00</span>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class="gray"><i class="fa fa-star"></i></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="product-latest-item transition">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="product.html"><img src="img/demo/shop/product/product-4.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height:104px;"></a>
                                        </div>
                                        <div class="media-body">
                                            <div class="caption">
                                                <h4><a href="product.html">Kevin Labor</a></h4>
                                                <div class="price">
                                                    <span class="price-new">$245.00</span>
                                                </div>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class=""><i class="fa fa-star "></i></span>
                                                        <span class="gray"><i class="fa fa-star"></i></span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                        <div class="module">
                            <div class="modcontent clearfix">
                                <div class="banners">
                                    <div>
                                        <a href="#"><img src="img/demo/cms/left-image-static.png" alt="left-image"></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
                <!-- Related Products -->
                <div class="related-product ">
                    <h3 class="modtitle">Related Products  </h3>
                    <hr>
                    <hr>
                    <hr>
                    <div class="related-product-owl">
                        <div class=" owl-carousel related-owl " data-nav="yes" data-loop="yes" data-margin="30" data-items_xs="1" data-items_sm="4" data-items_md="5">
                            <div class="product-layout">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container  second_img ">
                                            <a href="product.html" class="product-img"><img src="img/demo/shop/product/product-1.jpg" alt=""></a>
                                            <!--Sale Label-->

                                            <span class="sale">-25%</span>
                                            <div class="hover">
                                                <ul>
                                                    <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                                                    <li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
                                                    <li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <h4><a href="product.html">Dummy product #01</a></h4>
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
                                                <span class="price-new">$43.00</span>
                                                <span class="price-old">$75.00</span>
                                            </div>
                                            <div class="description item-desc hidden">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                            </div>
                                        </div>

                                        <div class="button-group">
                                            <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                        </div>
                                    </div><!-- right block -->
                                </div>
                            </div>


                            <div class="product-layout">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container  second_img ">
                                            <a href="product.html" class="product-img"><img src="img/demo/shop/product/product-3.jpg" alt=""></a>
                                            <!--Sale Label-->

                                            <span class="sale">-25%</span>
                                            <div class="hover">
                                                <ul>
                                                    <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                                                    <li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
                                                    <li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <h4><a href="product.html">Dummy product #02</a></h4>
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
                                                <span class="price-new">$74.00</span>
                                                <span class="price-old">$122.00</span>
                                            </div>
                                            <div class="description item-desc hidden">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                            </div>
                                        </div>

                                        <div class="button-group">
                                            <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                        </div>
                                    </div><!-- right block -->
                                </div>
                            </div>


                            <div class="product-layout">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container  second_img ">
                                            <a href="product.html" class="product-img"><img src="img/demo/shop/product/product-2.jpg" alt=""></a>
                                            <!--Sale Label-->

                                            <span class="sale">-50%</span>
                                            <div class="hover">
                                                <ul>
                                                    <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                                                    <li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
                                                    <li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <h4><a href="product.html">Dummy product #03</a></h4>
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
                                                <span class="price-new">$78.00</span>
                                                <span class="price-old">$154.00</span>
                                            </div>
                                            <div class="description item-desc hidden">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                            </div>
                                        </div>

                                        <div class="button-group">
                                            <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                        </div>
                                    </div><!-- right block -->
                                </div>
                            </div>


                            <div class="product-layout">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container  second_img ">
                                            <a href="product.html" class="product-img"><img src="img/demo/shop/product/product-5.jpg" alt=""></a>
                                            <!--Sale Label-->

                                            <div class="hover">
                                                <ul>
                                                    <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                                                    <li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
                                                    <li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <h4><a href="product.html">Dummy product #04</a></h4>
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
                                                <span class="price-new">$78.00</span>

                                            </div>
                                            <div class="description item-desc hidden">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                            </div>
                                        </div>

                                        <div class="button-group">
                                            <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                        </div>
                                    </div><!-- right block -->
                                </div>
                            </div>

                            <div class="product-layout">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container  second_img ">
                                            <a href="product.html" class="product-img"><img src="img/demo/shop/product/product-4.jpg" alt=""></a>
                                            <!--Sale Label-->

                                            <div class="hover">
                                                <ul>
                                                    <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                                                    <li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
                                                    <li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <h4><a href="product.html">Dummy product #05</a></h4>
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
                                                <span class="price-new">$85.00</span>

                                            </div>
                                            <div class="description item-desc hidden">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                            </div>
                                        </div>

                                        <div class="button-group">
                                            <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                        </div>
                                    </div><!-- right block -->
                                </div>
                            </div>


                            <div class="product-layout">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container  second_img ">
                                            <a href="product.html" class="product-img"><img src="img/demo/shop/product/product-7.jpg" alt=""></a>
                                            <!--Sale Label-->

                                            <div class="hover">
                                                <ul>
                                                    <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                                                    <li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
                                                    <li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <h4><a href="product.html">Dummy product #06</a></h4>
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
                                                <span class="price-new">$68.00</span>

                                            </div>
                                            <div class="description item-desc hidden">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                            </div>
                                        </div>

                                        <div class="button-group">
                                            <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                        </div>
                                    </div><!-- right block -->
                                </div>
                            </div>


                            <div class="product-layout">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container  second_img ">
                                            <a href="product.html" class="product-img"><img src="img/demo/shop/product/product-6.jpg" alt=""></a>
                                            <!--Sale Label-->
                                            <span class="new">New</span>

                                            <div class="hover">
                                                <ul>
                                                    <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                                                    <li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
                                                    <li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <h4><a href="product.html">Dummy product #07</a></h4>
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
                                                <span class="price-new">$58.00</span>

                                            </div>
                                            <div class="description item-desc hidden">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                            </div>
                                        </div>

                                        <div class="button-group">
                                            <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                        </div>
                                    </div><!-- right block -->
                                </div>
                            </div>


                            <div class="product-layout">
                                <div class="product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container  second_img ">
                                            <a href="product.html" class="product-img"><img src="img/demo/shop/product/product-6.jpg" alt=""></a>
                                            <!--Sale Label-->

                                            <div class="hover">
                                                <ul>
                                                    <li class="icon-heart"><a class="wishlist" type="button" data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                                                    <li class="icon-exchange"><a class="compare" type="button" data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
                                                    <li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <h4><a href="product.html">Dummy product #08</a></h4>
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
                                                <span class="price-new">$74.00</span>

                                            </div>
                                            <div class="description item-desc hidden">
                                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                            </div>
                                        </div>

                                        <div class="button-group">
                                            <button class="addToCart btn btn-default " type="button" data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                        </div>
                                    </div><!-- right block -->
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- end Related  Products-->


            </div>


        </div>
        <!--Middle Part End-->
    </div>
@endsection
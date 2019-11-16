$(function () {
    // localStorage.clear();
    cartDetails();
    $('.addToCart').click(function () {
        // localStorage.clear();
        let productId       = $(this).attr('cus-product-id');
        let productName     = $(this).attr('cus-product-name');
        let productPrice    = $(this).attr('cus-product-price');
        let productImage    = $(this).attr('cus-product-image');

        let product = {
            productId:productId,
            productName:productName,
            productPrice:productPrice,
            productQuantity:1,
            productImage:productImage,
        };

        let cart = [];
        if (localStorage.getItem('cart') === null)
        {

        }
        else
        {
            cart = JSON.parse(localStorage.getItem('cart'));
        }
        let index = checkCart(product);
        if (index == -1){
            addToCart(cart,product);
        }
        else {
            updateCart(product,index)
        }
        cartDetails();

    });

    function checkCart(product) {
        let res = -1;
        if (localStorage.getItem('cart') === null) {
            return -1;
        }
        else {
            let cartData = JSON.parse(localStorage.getItem('cart'));
            let i;
            for (i=0;i<cartData.length;i++)
            {
                if (cartData[i].productId == product.productId){
                    res = i;
                    break;
                }
            }
        }
        return res;
    }

    function cartDetails() {
        let cartHtml = '';
        let totalPrice = 0;
        if (localStorage.getItem('cart') === null)
        {
            $('.number-shopping-cart').html(0);
        }
        else {
            let cartData = JSON.parse(localStorage.getItem('cart'));
            $('.number-shopping-cart').html(cartData.length);

            cartData.forEach(function (data,index) {
                cartHtml += ' <tr>\n' +
'                                        <td class="text-center" style="width:70px">\n' +
'                                            <a href="#">\n' +
'                                                <img src="' + data.productImage + '"  style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview">\n' +
'                                            </a>\n' +
'                                        </td>\n' +
'                                        <td class="text-left"> <a class="cart_product_name" href="product.html">' + data.productName + '</a> </td>\n' +
'                                        <td class="text-center"> x' + data.productQuantity + ' </td>\n' +
'                                        <td class="text-center"> $' + data.productQuantity * data.productPrice + ' </td>\n' +
'                                        <td class="text-right">\n' +
'                                            <a href="product.html" class="fa fa-edit"></a>\n' +
'                                        </td>\n' +
'                                        <td class="text-right">\n' +
'                                            <a  class="fa fa-times fa-delete removeCartItem" cus-pro-id="'+data.productId+'" cus-cart-item-no="'+index+'"></a>\n' +
'                                        </td>\n' +
'                                    </tr>'
                totalPrice += (data.productPrice * data.productQuantity);
            });

            $('.cart-table').html(cartHtml);
            $('.total-price').html(totalPrice);
        }
    }

    function addToCart(cart,product) {
        cart.push(product);
        localStorage.setItem("cart",JSON.stringify(cart));
    }
    function updateCart(product,index) {
        let cart = JSON.parse(localStorage.getItem('cart'));
        cart[index].productQuantity +=1;
        localStorage.setItem("cart",JSON.stringify(cart));
    }

    $(document).on('click','.removeCartItem',function () {
        let productId = $(this).attr('cus-pro-id');
        let cartNo    = $(this).attr('cus-cart-item-no');
        // console.log(productId);
        // console.log(cartNo);
        let cart = JSON.parse(localStorage.getItem('cart'));
        if (productId == cart[cartNo].productId){
            cart.splice(cartNo,1);
        }
        localStorage.setItem("cart",JSON.stringify(cart));
        cartDetails();
    });

});





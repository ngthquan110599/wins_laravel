<html>
<!-- BEGIN: Head-->
@include('frontend.base.head')
<link rel="stylesheet" type="text/css" href="/access/css/home/style.css">
<link rel="stylesheet" type="text/css" href="/access/css/cart/cartpage.css">
<link rel="stylesheet" type="text/css" href="/access/css/cart/cartbought.css">
<!-- END: Head-->

<!-- BEGIN: Body-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<body>
<div id="main">
    @include('frontend.base.header')
    <h3>{{$title ?? ''}}</h3>
    <div class="main_cart">
        <div class="cart_topbar">
            <div class="logo_cover">
                <img src="/images/logo/logo.png" alt="">
            </div>
            <span id="ff"></span><span id="gh" class="font">Giỏ hàng</span>
            <div class="search_bar">
                <div class="input_serach_cover">
                    <input type="text" name="search" id="" placeholder="Tìm kiếm trong shop"><img src="/images/search (2) 1.png" alt="">
                </div>    
            </div>
        </div>
        
        <div class="bouth_control align_content">
            <div id="ml" class="font"> <span>Mua lẻ</span> </div><div id="kd" class="font"><span>Kinh doanh</span></div>
        </div>
        <div class="menu_bought align_content">
            <div class="menu_bought_content font">
               <ul>
                   <li class="li_border nav-cart">Mua chung</li>
                   <li class="li_border nav-cart">Chờ xác nhận</li>
                   <li class="li_border nav-cart">Chờ lấy hàng</li>
                   <li class="li_border nav-cart active">Đang giao</li>
                   <li class="li_border nav-cart">Đã giao</li>
                   <li class="li_border nav-cart">Đã hủy</li>
                   <li class="li_border nav-cart">Đã trả</li>
                </ul> 
                
            </div>
        </div>
        <div class="cart padd" id="container-cart">
            <div class="cart_buy_together">
                <div class="cart_line_1">
                    <div class="shop_name_cover">
                        <img src="/images/logo/shop1.png" alt="" style="width: auto; margin: 10px;"> <span class="shop_name font">Hải Xồm Shop</span>
                    </div>
                    <div class="shop_group" style="border: none;">                       
                    </div>
                    <div class="wait_accept font">
                        <span>ĐANG GIAO</span>
                    </div>
                </div>
                <div class="cart_line_2">
                    <div class="img_product_cover">
                        <img src="/images/anh2.png" alt="">
                    </div>
                    <div class="details_product_cover">
                        <div class="details_product">
                            <span class="name_description font">Áo khoác nữ lót lông hottrend 2020, hàng chuẩn quảng châu loại 1 sẵn DN</span>  <br>
                            <span class="d">Phân loại: Xanh - M</span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="d">x1</span> <br>
                            <span class="d">Thương hiệu: ABC</span>
                        </div>                       
                    </div>
                    <div class="price_product_cover">
                        <div class="price_product">
                            <span class="price_product_num"><del>1.400.000đ</del></span> <br>
                            <span class="price_product_num2 font"><del>700.000đ</del></span>
                        </div>                      
                    </div>
                </div>
                <div class="cart_line_3">
                    <div class="amount_money_cover">
                        <div class="amount-money">
                            <span class="abc2 font">Tổng số tiền</span>
                            <span class="abc font">700.000đ</span>
                        </div>
                    </div>
                </div>
                <div class="options_line_4">
                    <div class="id_oder_cover" style="width: 100%">
                        <span class="qr_id">Mã QR vận đơn : KD20192322 </span> <br>
                        <span class="date_id">Ngày tạo đơn : 16: 20 21/12/2020</span>
                    </div>
                    <div class="options_order">
                        <button class="btn_view_rced">Đã nhận được hàng</button>
                        <button class="btn_view_pr">Xem chi tiết đơn hàng</button>
                    </div>
                </div>
                
            </div>    
            <div class="cart_buy_together">
                <div class="cart_line_1">
                    <div class="shop_name_cover">
                        <img src="/images/logo/shop1.png" alt="" style="width: auto; margin: 10px;"> <span class="shop_name font">Hải Xồm Shop</span> 
                    </div>
                    <div class="shop_group" style="border: none;">                       
                    </div>
                    <div class="wait_accept font">
                        <span>ĐANG GIAO</span>
                    </div>
                </div>
                <div class="cart_line_2">
                    <div class="img_product_cover">
                        <img src="/images/anh2.png" alt="">
                    </div>
                    <div class="details_product_cover">
                        <div class="details_product">
                            <span class="name_description font">Áo khoác nữ lót lông hottrend 2020, hàng chuẩn quảng châu loại 1 sẵn DN</span>  <br>
                            <span class="d">Phân loại: Xanh - M</span>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<span class="d">x1</span> <br>
                            <span class="d">Thương hiệu: ABC</span>
                        </div>                       
                    </div>
                    <div class="price_product_cover">
                        <div class="price_product">
                            <span class="price_product_num"><del>1.400.000đ</del></span> <br>
                            <span class="price_product_num2 font"><del>700.000đ</del></span>
                        </div>                      
                    </div>
                </div>
                <div class="cart_line_3">
                    <div class="amount_money_cover">
                        <div class="amount-money">
                            <span class="abc2 font">Tổng số tiền</span>
                            <span class="abc font">700.000đ</span>
                        </div>
                    </div>
                </div>
                <div class="options_line_4">
                    <div class="id_oder_cover" style="width: 100%">
                        <span class="qr_id">Mã QR vận đơn : KD20192322 </span> <br>
                        <span class="date_id">Ngày tạo đơn : 16: 20 21/12/2020</span>
                    </div>
                    <div class="options_order">
                        <button class="btn_view_rced">Đã nhận được hàng</button>
                        <button class="btn_view_pr">Xem chi tiết đơn hàng</button>
                    </div>
                </div>
                
            </div> 
        </div>

    </div>
    @include('frontend.base.footer')
</div>
@include('frontend.base.script')
</body>
<script>
    $(document).ready(function(){
        $('.nav-cart').click(function(){
            $('.nav-cart').removeClass('active');
            $(this).addClass('active');
            /* let url = 'https://www.youtube.com/watch?v=yO2hR7eP6ww';
            $.ajax({
                url: url,
                type:'GET',
                dataType: 'html',
                success: function(data){
                    $('#container-cart').html(data);
                },
            }) */
        });
    });
</script>
</html>
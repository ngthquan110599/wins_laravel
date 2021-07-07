<html>
<!-- BEGIN: Head-->
@include('frontend.base.head')

<!-- END: Head-->

<!-- BEGIN: Body-->
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
                <div id="ml" class="font switch_content not_chose_this"> <span>Mua lẻ</span> </div><div id="kd" class="font chose_this switch_content "><span>Kinh doanh</span></div>
            </div>

            <div class="shop_details_container align_content">
                <div class="shop_details_content">
                    <div class="shop_avt_cover">
                        <img src="/images/avtshop1.png" alt="">
                    </div>
                    <div class="shop_information">
                        <div class="shop_name font-bold">
                            <span>Shop áo Office </span>
                        </div>
                        <div class="shop_des">
                            <span class="font-normal pink" style="font-size : 12px; line-height: 30px;">Đại lý online</span> <br>
                            <span class="font-normal sliver" style="line-height: 15px;">Bạn đang mua buôn với tư cách nhà phân phối của chúng tôi <br>
                                Sản phẩm sẽ tự động về kho và hiển thị bán hàng trên sàn</span>
                        </div>                       
                    </div>
                    <div class="shop_selection">
                        <button class="btn-hide-shop2 font-bold">Ẩn shop đi </button>
                    </div>
                </div>
            </div>
            <div class="menu_bought align_content">
                <div class="menu_bought_content font">
                   <ul>
                       <li class="li_border2 nav-cart ">Chờ xác nhận</li>
                       <li class="li_border2 nav-cart active">Chờ lấy hàng</li>
                       <li class="li_border2 nav-cart">Đang giao</li>
                       <li class="li_border2 nav-cart">Đã giao</li>
                       <li class="li_border2 nav-cart">Đã hủy</li>
                       <li class="li_border2 nav-cart">Đã trả</li>
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
                            <span>CHỜ LẤY HÀNG</span>
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
                                <span class="abc2 font">Tổng <span class="abc2 font">16</span> sản phẩm số tiền</span>
                                <span class="abc font">700.000đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="options_line_4">
                        <div class="id_oder_cover">
                            <span class="qr_id">Mã QR vận đơn : KD20192322 </span> <br>
                            <span class="date_id">Ngày tạo đơn : 16: 20 21/12/2020</span>
                        </div>
                        <div class="options_order">
                            <button class="btn_add_prcs">Đang xử lý</button>
                            <button class="btn_view_pr">Xem chi tiết đơn hàng</button>
                            <button class="btn_abort_od">Hủy đơn hàng</button>
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
                            <span>CHỜ LẤY HÀNG</span>
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
                                <span class="abc2 font">Tổng <span class="abc2 font">16</span> sản phẩm số tiền</span>
                                <span class="abc font">700.000đ</span>
                            </div>
                        </div>
                    </div>
                    <div class="options_line_4">
                        <div class="id_oder_cover">
                            <span class="qr_id">Mã QR vận đơn : KD20192322 </span> <br>
                            <span class="date_id">Ngày tạo đơn : 16: 20 21/12/2020</span>
                        </div>
                        <div class="options_order">
                            <button class="btn_add_prcs">Đang xử lý</button>
                            <button class="btn_view_pr">Xem chi tiết đơn hàng</button>
                            <button class="btn_abort_od">Hủy đơn hàng</button>
                        </div>
                    </div>
                    
                </div> 
            </div>
        
    </div>
    @include('frontend.base.footer')
</div>
@include('frontend.base.script')
</body>
</html>
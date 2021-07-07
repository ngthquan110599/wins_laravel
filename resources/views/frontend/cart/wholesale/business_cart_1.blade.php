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
                        <button class="btn-come-shop font-bold">Đến kênh bán hàng</button> <br>
                        <button class="btn-hide-shop font-bold">Ẩn shop đi </button>
                    </div>
                </div>
            </div>
        <div class="cart">    
            <div class="cart_div">
                <div class="product">
                    <div class="product_detail">
                        <table style="width: 100%" cellpadding="15px">
                            <tr >
                                <td style="width: 8%;text-align: center"> <div class="checkbox_cover"><input type="checkbox" class='checkbox' name="check_all_product" id=""></div></td>
                                <td colspan="6"><img src="/images/logo/shop1.png" alt="" style="width: auto; margin: 10px;"> <span class="shop_name font">Hải Xồm Shop</span> | <span id="shop">Shop</span>
                                <div class="close">
                                    <button type="button" class="close" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                </td>
                            </tr>
                            <tr style="border-top: #DFDFDF 1px solid;border-bottom: #DFDFDF 1px solid">
                                <td style="text-align: center"><div class="checkbox_cover"><input type="checkbox" class='checkbox' name="check_product" id=""></div></td>
                                <td style="width: 10%">
                                    <div class="img_cover">
                                        <img src="/images/anh1.png" alt="">
                                    </div>
                                </td>
                                <td>
                                    <div class="product_name">
                                        <span class="font">Áo khoác bông dài quá gối</span>
                                    </div>
                                </td>
                                <td style="width: 15%">
                                    <div class="product_details">
                                        <span>
                                            Phân loại: <br>
                                            Xanh - M <br><br>
                                        </span>
                                        <span>
                                            Thương hiệu: <br>
                                            ABC
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="price">
                                        <span class="prices">
                                            Đơn giá: <br>
                                            <span class="font">700.000đ </span> <br>
                                            <del class="prices">1.400.000đ</del>
                                        </span>
                                    </div>
                                </td>
                                <td style="width: 14%">
                                    <div class="button_cover">
                                        <div class="quantity">
                                            <span class="font">1</span>
                                        </div>
                                        <div class="option">
                                            <div class="up">
                                                <span class="font">+</span>
                                            </div>
                                            <div class="down">
                                                <span class="font">--</span>
                                            </div>
                                        </div>
                                    </div>


                                </td>
                                <td style="width: 15%">
                                    
                                    <div class="finaly_price">
                                        <div class="close_button">
                                            <button type="button" class="close" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <span>700.000đ</span> 
                                    </div>
                                    
                                </td>
                            </tr>
                            <tr style="border-top: #DFDFDF 1px solid;border-bottom: #DFDFDF 1px solid">
                                <td style="text-align: center"><div class="checkbox_cover"><input type="checkbox" class='checkbox' name="check_product" id=""></div></td>
                                <td style="width: 10%">
                                    <div class="img_cover">
                                        <img src="/images/anh1.png" alt="">
                                    </div>
                                </td>
                                <td>
                                    <div class="product_name">
                                        <span class="font">Áo khoác bông dài quá gối</span>
                                    </div>
                                </td>
                                <td style="width: 15%">
                                    <div class="product_details">
                                        <span>
                                            Phân loại: <br>
                                            Xanh - M <br><br>
                                        </span>
                                        <span>
                                            Thương hiệu: <br>
                                            ABC
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="price">
                                        <span class="prices">
                                            Đơn giá: <br>
                                            <span class="font">700.000đ </span> <br>
                                            <del class="prices">1.400.000đ</del>
                                        </span>
                                    </div>
                                </td>
                                <td style="width: 14%">
                                    <div class="button_cover">
                                        <div class="quantity">
                                            <span class="font">1</span>
                                        </div>
                                        <div class="option">
                                            <div class="up">
                                                <span class="font">+</span>
                                            </div>
                                            <div class="down">
                                                <span class="font">--</span>
                                            </div>
                                        </div>
                                    </div>


                                </td>
                                <td style="width: 15%">
                                    
                                    <div class="finaly_price">
                                        <div class="close_button">
                                            <button type="button" class="close" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <span>700.000đ</span> 
                                    </div>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="4">
                                    <div class="mpvc">
                                        <img src="/images/logo/delivery 1.png" alt="" style="width: auto">
                                        <span class="vc">
                                        Miễn phí vận chuyển: Đơn hàng trên 200.000đ <br>
                                        Miễn phí tối đa: 30.000đ
                                    </span>
                                    </div>

                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="product_detail">
                        <table style="width: 100%" cellpadding="15px">
                            <tr >
                                <td style="width: 8%;text-align: center"> <div class="checkbox_cover"><input type="checkbox" class='checkbox' name="check_all_product" id=""></div></td>
                                <td colspan="6"><img src="/images/logo/shop1.png" alt="" style="width: auto; margin: 10px;"> <span class="shop_name font">Hải Xồm Shop</span> | <span id="shop">Shop</span>
                                <div class="close">
                                    <button type="button" class="close" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                </td>
                            </tr>
                            <tr style="border-top: #DFDFDF 1px solid;border-bottom: #DFDFDF 1px solid">
                                <td style="text-align: center"><div class="checkbox_cover"><input type="checkbox" class='checkbox' name="check_product" id=""></div></td>
                                <td style="width: 10%">
                                    <div class="img_cover">
                                        <img src="/images/anh1.png" alt="">
                                    </div>
                                </td>
                                <td>
                                    <div class="product_name">
                                        <span class="font">Áo khoác bông dài quá gối</span>
                                    </div>
                                </td>
                                <td style="width: 15%">
                                    <div class="product_details">
                                        <span>
                                            Phân loại: <br>
                                            Xanh - M <br><br>
                                        </span>
                                        <span>
                                            Thương hiệu: <br>
                                            ABC
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="price">
                                        <span class="prices">
                                            Đơn giá: <br>
                                            <span class="font">700.000đ </span> <br>
                                            <del class="prices">1.400.000đ</del>
                                        </span>
                                    </div>
                                </td>
                                <td style="width: 14%">
                                    <div class="button_cover">
                                        <div class="quantity">
                                            <span class="font">1</span>
                                        </div>
                                        <div class="option">
                                            <div class="up">
                                                <span class="font">+</span>
                                            </div>
                                            <div class="down">
                                                <span class="font">--</span>
                                            </div>
                                        </div>
                                    </div>


                                </td>
                                <td style="width: 15%">
                                    
                                    <div class="finaly_price">
                                        <div class="close_button">
                                            <button type="button" class="close" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <span>700.000đ</span> 
                                    </div>
                                    
                                </td>
                            </tr>
                            <tr style="border-top: #DFDFDF 1px solid;border-bottom: #DFDFDF 1px solid">
                                <td style="text-align: center"><div class="checkbox_cover"><input type="checkbox" class='checkbox' name="check_product" id=""></div></td>
                                <td style="width: 10%">
                                    <div class="img_cover">
                                        <img src="/images/anh1.png" alt="">
                                    </div>
                                </td>
                                <td>
                                    <div class="product_name">
                                        <span class="font">Áo khoác bông dài quá gối</span>
                                    </div>
                                </td>
                                <td style="width: 15%">
                                    <div class="product_details">
                                        <span>
                                            Phân loại: <br>
                                            Xanh - M <br><br>
                                        </span>
                                        <span>
                                            Thương hiệu: <br>
                                            ABC
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <div class="price">
                                        <span class="prices">
                                            Đơn giá: <br>
                                            <span class="font">700.000đ </span> <br>
                                            <del class="prices">1.400.000đ</del>
                                        </span>
                                    </div>
                                </td>
                                <td style="width: 14%">
                                    <div class="button_cover">
                                        <div class="quantity">
                                            <span class="font">1</span>
                                        </div>
                                        <div class="option">
                                            <div class="up">
                                                <span class="font">+</span>
                                            </div>
                                            <div class="down">
                                                <span class="font">--</span>
                                            </div>
                                        </div>
                                    </div>


                                </td>
                                <td style="width: 15%">
                                    
                                    <div class="finaly_price">
                                        <div class="close_button">
                                            <button type="button" class="close" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <span>700.000đ</span> 
                                    </div>
                                    
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="4">
                                    <div class="mpvc">
                                        <img src="/images/logo/delivery 1.png" alt="" style="width: auto">
                                        <span class="vc">
                                        Miễn phí vận chuyển: Đơn hàng trên 200.000đ <br>
                                        Miễn phí tối đa: 30.000đ
                                    </span>
                                    </div>

                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="minicart">
                    <div class="minicart_payment">
                        <div class="chosed">
                            <input type="checkbox" name="check" id=""> <span>Chọn tất cả</span>( <span id="soluong">4</span> )
                        </div>
                        <div class="payment">
                            <div class="sum_pay">
                                <span class="font amount_pay">Tổng thanh toán</span><br>
                                <div class="cover_amount_pay_number2">
                                    <span class="finaly_price2">2.100.000đ</span> <br>
                                    <span id="nhanxu">Nhận được 200.000 xu à.xu</span>
                                </div>
                                
                            </div>
                            <div class="button_pay">
                                <form action="">
                                    <button style="background: #6D44E0">Thanh toán</button>
                                </form>
                            </div>
                        </div>
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
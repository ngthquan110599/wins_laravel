<html>
<!-- BEGIN: Head-->
@include('frontend.base.head')
<link rel="stylesheet" type="text/css" href="/access/css/home/style.css">
<link rel="stylesheet" type="text/css" href="/access/css/cart/cartpage.css">
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
                <div id="ml" class="font"> <span>Mua lẻ</span> </div><div id="kd" class="font"><span>Kinh doanh</span></div>
            </div>

            <div class="address_receive align_content">
                <div class="address_receive_content">
                    <div class="receive_title">
                        <img src="/images/place_24px.png" alt="" style="width:auto; margin: auto 0;"><span class="font">Địa chỉ nhận hàng:</span>
                    </div>
                    <div class="user_address_infor">
                        <div class="user_name font">
                            <span>Nguyễn Linh Đan:</span>
                        </div>
                        <div class="user_address_detail">
                            <span class="user_address">Số 12, Trần Quốc Vượng, Phường Dịch Vọng Hậu, Quận Cầu Giấy, Hà Nội</span><br>
                            <span class="user_phone">0385 994 382</span>
                        </div>
                        <div class="button_change_address">
                            <button class="btn_default">Mặc định</button>
                            <button class="btn_change">Thay đổi</button>
                        </div>
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
                    <div class="amount_of_product">
                        <div class="amount_of_item">
                            <table cellpadding="10px">
                                <tr>
                                    <td style="width: 40%;"><span>Tổng cửa hàng</span></td>
                                    <td style="width: 60%;"><span class="font">2</span></td>
                                </tr>
                                <tr>
                                    <td><span>Tổng sản phẩm</span></td>
                                    <td><span class="font">10</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="amount_of_money">
                            <table style="width: 100%" cellpadding="8px"  class="font">
                                <tr>
                                    <td style="width: 50%; text-align: left"><span>Tổng tiền hàng</span></td>
                                    <td style="width: 50%; text-align: right"><span>3.900.000đ</span></td>
                                </tr>
                                <tr>
                                    <td><span>Tổng tiền ưu đãi</span></td>
                                    <td style="width: 50%; text-align: right"><span>-30.000đ</span></td>
                                    
                                </tr>
                                <tr>
                                    <td><span>Tổng tiền vận chuyển</span></td>
                                    <td style="width: 50%; text-align: right"><span>+30.000đ</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="minicart">
                    <div class="table_payment">
                        <div class="chosed2">
                            <input type="checkbox" name="check" id=""> <span class='font'>Chọn tất cả </span>( <span class='font' id="soluong">2</span> )
                        </div>
                        <div class="transfered">
                            <table style='width:100%;'>
                                <tr>
                                    <td style='text-align: left; width:50%;'><span>Phương thức vận chuyển</span></td>
                                    <td style='text-align: center; width:50%;'><button>Chọn phương thức</button></td>
                                </tr>
                                <tr>
                                    <td style='text-align: left; width:50%;'><span>Phương thức ưu đãi</span></td>
                                    <td style='text-align: center; width:50%;'><button>Chọn ưu đãi</button></td>
                                </tr>
                            </table>
                        </div>
                        <div class="am_product_minicart">
                            <table style='width:100%;'>
                                <tr>
                                    <td style='text-align: left; width:50%;'><span>Tổng sản phẩm</span></td>
                                    <td style='text-align: right; width:50%;'><span class="font nub_product">2</span></td>
                                </tr>
                                <tr>
                                    <td style='text-align: left; width:50%;'><span>Tiền hàng</span></td>
                                    <td style='text-align: right; width:50%;'><span class="font nub_product">3.500.000đ</span></td>
                                </tr>
                                <tr>
                                    <td style='text-align: left; width:50%;'><span>Tiền vận chuyển</span></td>
                                    <td style='text-align: right; width:50%;'><span class="font nub_product">+30.000đ</span></td>
                                </tr>
                                <tr>
                                    <td style='text-align: left; width:50%;'><span>Tiền trừ ưu đãi</span></td>
                                    <td style='text-align: right; width:50%;'><span class="font nub_product">+30.000đ</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="note_for_shop">
                            <textarea name="text_note" id="" cols="30" rows="10" placeholder="Lưu ý dành cho chủ shop"></textarea>
                        </div>
                    </div>
                    <div class="table_payment">
                        <div class="chosed2">
                            <input type="checkbox" name="check" id=""> <span class='font'>Chọn tất cả </span>( <span class='font' id="soluong">2</span> )
                        </div>
                        <div class="transfered">
                            <table style='width:100%;'>
                                <tr>
                                    <td style='text-align: left; width:50%;'><span>Phương thức vận chuyển</span></td>
                                    <td style='text-align: center; width:50%;'><button>Chọn phương thức</button></td>
                                </tr>
                                <tr>
                                    <td style='text-align: left; width:50%;'><span>Phương thức ưu đãi</span></td>
                                    <td style='text-align: center; width:50%;'><button>Chọn ưu đãi</button></td>
                                </tr>
                            </table>
                        </div>
                        <div class="am_product_minicart">
                            <table style='width:100%;'>
                                <tr>
                                    <td style='text-align: left; width:50%;'><span>Tổng sản phẩm</span></td>
                                    <td style='text-align: right; width:50%;'><span class="font nub_product">2</span></td>
                                </tr>
                                <tr>
                                    <td style='text-align: left; width:50%;'><span>Tiền hàng</span></td>
                                    <td style='text-align: right; width:50%;'><span class="font nub_product">3.500.000đ</span></td>
                                </tr>
                                <tr>
                                    <td style='text-align: left; width:50%;'><span>Tiền vận chuyển</span></td>
                                    <td style='text-align: right; width:50%;'><span class="font nub_product">+30.000đ</span></td>
                                </tr>
                                <tr>
                                    <td style='text-align: left; width:50%;'><span>Tiền trừ ưu đãi</span></td>
                                    <td style='text-align: right; width:50%;'><span class="font nub_product">+30.000đ</span></td>
                                </tr>
                            </table>
                        </div>
                        <div class="note_for_shop">
                            <textarea name="text_note" id="" cols="30" rows="10" placeholder="Lưu ý dành cho chủ shop"></textarea>
                        </div>
                    </div>
                    <div class="minicart_payment_2">
                        <div class="chosed3">
                            <input type="checkbox" name="check" id=""> <span>Chọn tất cả</span>( <span id="soluong">4</span> )
                        </div>
                        <div class="payment_2">
                            <div class="sum_pay_2">
                                <span class="font amount_pay">Tổng thanh toán</span><br>
                                <div class="cover_amount_pay_number2">
                                    <span class="finaly_price2">2.100.000đ</span> <br>
                                    <span id="nhanxu">Nhận được 200.000 xu à.xu</span>
                                </div>
                                
                            </div>
                            <div class="button_pay2">
                                <form action="">
                                    <button>Thanh toán</button>
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
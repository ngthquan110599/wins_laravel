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
            <span id="ff"></span><span id="gh" class="font">Mua buôn</span>
            <div class="search_bar">
                <div class="input_serach_cover">
                    <input type="text" name="search" id="" placeholder="Tìm kiếm trong shop"><img src="/images/search (2) 1.png" alt="">
                </div>    
            </div>
        </div>
        <div class="cart_wholesale_container">
            <div class="cart_wholesale_content">
                <div class="cart_wholesale_left_option">
                    <div class="wholesale_product_content">
                        <div class="wholesale_product_img_cover">
                            <img src="/images/anh3.png" alt="">
                        </div>
                        <div class="wholesale_product_dt">
                            <div class="whl_pro_name">
                                <span class="font-bold">Quần sọc vàng</span>
                            </div>
                            <div class="whl_pro_info">
                                <span class="font-normal">
                                    Nhà phân phối: &nbsp<span class="blue2 font-bold underlined">Tên nhà phân phối</span> <br>
                                    Thương hiệu: &nbsp <span class="blue2 font-bold underlined">Nike</span> <br>
                                    Giá buôn thấp nhất: <span class="pink">1.750.000 đ</span> <br>
                                    Mã sản phẩm: <span class="blue2">GK3467898</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="option_wholesale_1">
                        <div class="option_line_1">
                            <table width="100%">
                                <tr>
                                    <td width='50%' height='30px' align='center' class="opt_by bypro selected">Mua buôn theo sản phẩm</td>
                                    <td width='50%' height='30px' align='center' class="opt_by mtly ">Mua buôn theo tháng</td>
                                </tr>
                                <tr height='25px' style='background: #DDE1E7; border-bottom: 1px solid #273D90' align='center'>
                                    <td colspan="2"><span style='font-weight: normal;font-size: 12px;line-height: 14px;text-align: center;color: #333333;'>Giá bán chưa chiết khấu: <span class="font-bold">300.000đ</span></span> </td>
                                </tr>
                            </table>
                        </div>
                        <div class="option_line_2">
                            <div id="monthly" class="opt_by_ct hidden">
                                <table width="100%" cellpadding ="7px" style="border: 1px #CDCDCD; background: #fff">
                                    <tr align="center">
                                        <td width="36%" class="border"><span class="font-bold blue">Tổng doanh số <span class="pink">*</span></span></td>
                                        <td width="30%" class="border"><span class="font-bold blue">Chiết khấu </span></td>
                                        <td width="33%" class="border"><span class="font-bold blue">Giá còn </span></td>
                                    </tr>
                                    <tr align="center">
                                        <td class="border"><span class="font-bold">10.000.000 đ</span></td>
                                        <td class="border"><span class="font-bold">20%</span></td>
                                        <td class="border"><span class="font-bold">200.000 đ</span></td>
                                    </tr>
                                    <tr align="center">
                                        <td class="border"><span class="font-bold">20.000.000 đ</span></td>
                                        <td class="border"><span class="font-bold">30%</span></td>
                                        <td class="border"><span class="font-bold">100.000 đ</span></td>
                                    </tr>
                                    <tr align="center">
                                        <td class="border"><span class="font-bold">30.000.000 đ</span></td>
                                        <td class="border"><span class="font-bold">50%</span></td>
                                        <td class="border"><span class="font-bold">50.000 đ</span></td>
                                    </tr>
                                </table>
                            </div>
                            <div id="by_prod" class='opt_by_ct '>
                                <table width="100%" cellpadding ="7px" style="border: 1px #CDCDCD; background: #fff">
                                    <tr align="center">
                                        <td width="36%" class="border"><span class="font-bold blue">Tổng SL </span></td>
                                        <td width="30%" class="border"><span class="font-bold blue">Chiết khấu </span></td>
                                        <td width="33%" class="border"><span class="font-bold blue">Giá còn </span></td>
                                    </tr>
                                    <tr align="center">
                                        <td class="border"><span class="font-bold">3-5</span></td>
                                        <td class="border"><span class="font-bold">20%</span></td>
                                        <td class="border"><span class="font-bold">2.700.000 đ</span></td>
                                    </tr>
                                    <tr align="center">
                                        <td class="border"><span class="font-bold">6-10</span></td>
                                        <td class="border"><span class="font-bold">30%</span></td>
                                        <td class="border"><span class="font-bold">2.300.000 đ</span></td>
                                    </tr>
                                    <tr align="center">
                                        <td class="border"><span class="font-bold">11-100</span></td>
                                        <td class="border"><span class="font-bold">50%</span></td>
                                        <td class="border"><span class="font-bold">1.750.000 đ</span></td>
                                    </tr>
                                    <tr align="center">
                                        <td class="bg-pink"><span class="font-bold white ">110</span></td>
                                        <td class="bg-pink"><span class="font-bold white">50%</span></td>
                                        <td class="bg-pink"><span class="font-bold white">30.000.000 đ</span></td>
                                    </tr>
                                </table>
                            </div>
                        </div>     
                    </div>
                    <div class="option_wholesale_btn_line2">
                        <button class="btn-cmt"><img src="/images/comment.png" alt=""></button>
                        <button class="btn-buy font-bold">Mua buôn</button>
                        <button class="btn-add-to-cart font-bold">Thêm vào giỏ buôn</button>
                    </div>
                </div>
                <div class="cart_wholesale_right_option">
                    <div class="wholesale_table_opt">
                        <table width="100%" cellpadding ="20px">
                            <tr align="center">
                                <td width="25%" class="border2"><span class='font-bold' style="font-size:24px; line-height: 120%">Lựa chọn 1</span></td>
                                <td width="25%" class="border2"><span class='font-bold' style="font-size:24px; line-height: 120%">Lựa chọn 2</span></td>
                                <td width="25%" class="border2"><span class='font-bold' style="font-size:24px; line-height: 120%">Tồn kho</span></td>
                                <td width="25%" class="border2"><span class='font-bold' style="font-size:24px; line-height: 120%">Số lượng</span></td>
                            </tr>
                            <tr align="center">
                                <td class="border2">
                                    <div class="option1_cover">
                                        <div class="option1_cover_img">
                                            <img src="/images/anh4.png" alt="">
                                        </div>
                                        <div class="option1_cover_inf">
                                            <div class="option_color">
                                                <div class="color">
                                                    <div class="color_inner bg-blue"></div>
                                                </div>
                                                <div class="color_text">
                                                    <span>Nâu</span>
                                                </div>
                                            </div>
                                            <span class="font-bold pink" style="font-size: 14px">
                                                300.000 đ
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="border2"><span class="font-bold" style="font-size:24px; line-height: 120%">S</span></td>
                                <td class="border2"><span class="font-bold" style="font-size:24px; line-height: 120%">200</span></td>
                                <td class="border2">
                                    <div class="select_quantity">
                                        <button class="btn-reduction"><img src="/images/Group 88.png"></button>
                                        <span class="quantity_value" class="font-bold set_value" style="font-size:24px; line-height: 120%">100</span>
                                        <button class="btn-increase"><img src="/images/Group 12371.png"></button>
                                    </div>
                                </td>                            
                            </tr>
                            <tr align="center">
                                <td class="border2">
                                    <div class="option1_cover">
                                        <div class="option1_cover_img">
                                            <img src="/images/anh4.png" alt="">
                                        </div>
                                        <div class="option1_cover_inf">
                                            <div class="option_color">
                                                <div class="color">
                                                    <div class="color_inner bg-brown"></div>
                                                </div>
                                                <div class="color_text">
                                                    <span>Nâu</span>
                                                </div>
                                            </div>
                                            <span class="font-bold pink" style="font-size: 14px">
                                                300.000 đ
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="border2"><span class="font-bold" style="font-size:24px; line-height: 120%">M</span></td>
                                <td class="border2"><span class="font-bold" style="font-size:24px; line-height: 120%">01</span></td>
                                <td class="border2">
                                    <div class="select_quantity">
                                        <button class="btn-reduction"><img src="/images/Group 88.png"></button>
                                        <span class="quantity_value" class="font-bold set_value" style="font-size:24px; line-height: 120%">0</span>
                                        <button class="btn-increase"><img src="/images/Group 12371.png"></button>
                                    </div>
                                </td>                            
                            </tr>
                            <tr align="center">
                                <td class="border2">
                                    <div class="option1_cover">
                                        <div class="option1_cover_img">
                                            <img src="/images/anh4.png" alt="">
                                        </div>
                                        <div class="option1_cover_inf">
                                            <div class="option_color">
                                                <div class="color">
                                                    <div class="color_inner bg-pink"></div>
                                                </div>
                                                <div class="color_text">
                                                    <span>Nâu</span>
                                                </div>
                                            </div>
                                            <span class="font-bold pink" style="font-size: 14px">
                                                300.000 đ
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="border2"><span class="font-bold" style="font-size:24px; line-height: 120%">S</span></td>
                                <td class="border2"><span class="font-bold" style="font-size:24px; line-height: 120%">01</span></td>
                                <td class="border2">
                                    <div class="select_quantity">
                                        <button class="btn-reduction"><img src="/images/Group 88.png"></button>
                                        <span class="quantity_value" class="font-bold set_value" style="font-size:24px; line-height: 120%">0</span>
                                        <button class="btn-increase"><img src="/images/Group 12371.png"></button>
                                    </div>
                                </td>                            
                            </tr>
                            <tr align="center">
                                <td class="border3">
                                    <div class="option1_cover">
                                        <div class="option1_cover_img">
                                            <img src="/images/anh4.png" alt="">
                                        </div>
                                        <div class="option1_cover_inf">
                                            <div class="option_color">
                                                <div class="color">
                                                    <div class="color_inner "></div>
                                                </div>
                                                <div class="color_text">
                                                    <span>Nâu</span>
                                                </div>
                                            </div>
                                            <span class="font-bold pink" style="font-size: 14px">
                                                300.000 đ
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="border3"><span class="font-bold" style="font-size:24px; line-height: 120%">L</span></td>
                                <td class="border3"><span class="font-bold" style="font-size:24px; line-height: 120%">01</span></td>
                                <td class="border3">
                                    <div class="select_quantity">
                                        <button class="btn-reduction"><img src="/images/Group 88.png"></button>
                                        <span class="quantity_value" class="font-bold set_value" style="font-size:24px; line-height: 120%">0</span>
                                        <button class="btn-increase"><img src="/images/Group 12371.png"></button>
                                    </div>
                                </td>                            
                            </tr>
                        </table>
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
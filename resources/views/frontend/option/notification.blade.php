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
            <span id="ff"></span><span id="gh" class="font">Thông báo</span>
            <div class="search_bar">
                <div class="input_serach_cover">
                    <input type="text" name="search" id="" placeholder="Tìm kiếm trong shop"><img src="/images/search (2) 1.png" alt="">
                </div>    
            </div>
        </div>
        <div class="banner_container">
            <div class="banner_content">
                <img src="/images/banner1.png" alt="" style='width: 100%'>
            </div>
        </div>
        <div class="notification_cover_box align_content">
            <div class="notification_content ">
                <div class="left_notifi_container">
                    <div class="left_notifi">
                        <div class="notification_cat_case">
                            <div class="notifi_cat">
                                <span class="font-bold cat pink">Đơn hàng</span>
                            </div>
                            <div class="notifi_qtt">
                                <span>19</span>
                            </div>
                            <div class="notifi_btn">
                                <img src="/images/vector2.png" alt="">
                            </div>
                        </div>
                        <div class="notification_cat_case">
                            <div class="notifi_cat">
                                <span class="font-bold cat">Đầu tư</span>
                            </div>
                            <div class="notifi_qtt">
                                
                            </div>
                            <div class="notifi_btn">
                                <img src="/images/vector2.png" alt="">
                            </div>
                        </div>
                        <div class="notification_cat_case">
                            <div class="notifi_cat">
                                <span class="font-bold cat">Cộng đồng</span>
                            </div>
                            <div class="notifi_qtt">
                                <span>19</span>
                            </div>
                            <div class="notifi_btn">
                                <img src="/images/vector2.png" alt="">
                            </div>
                        </div>
                        <div class="notification_cat_case">
                            <div class="notifi_cat">
                                <span class="font-bold cat">Ví tiền</span>
                            </div>
                            <div class="notifi_qtt">
                                <span>19</span>
                            </div>
                            <div class="notifi_btn">
                                <img src="/images/vector2.png" alt="">
                            </div>
                        </div>
                        <div class="notification_cat_case">
                            <div class="notifi_cat">
                                <span class="font-bold cat">Ưu đãi</span>
                            </div>
                            <div class="notifi_qtt">
                                
                            </div>
                            <div class="notifi_btn">
                                <img src="/images/vector2.png" alt="">
                            </div>
                        </div>
                        <div class="notification_cat_case">
                            <div class="notifi_cat">
                                <span class="font-bold cat">Quà tặng</span>
                            </div>
                            <div class="notifi_qtt">
                                <span>19</span>
                            </div>
                            <div class="notifi_btn">
                                <img src="/images/vector2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="right_notifi_container">
                    <div class="right_notifi">
                        <div class="notifi_details_case">
                            <div class="notifi_img">
                                <img src="/images/img1.png" alt="">
                            </div>
                            <div class="notifi_details">
                                <div class="notifi_details_title">
                                    <span class="font-bold">xác nhận đã nhận hàng </span>
                                </div>
                                <div class="notifi_details_content">
                                    <span class="font-normal">
                                        Vui lòng chọn ‘Đã nhận hàng” cho đơn 76358JHBR60G. Nếu bạn hài lòng tất cả sản phẩm và không có nhu cầu trả hàng/Hoàn tiền. Đánh giá ngay và nhận 100 xu 
                                    </span>
                                </div>
                                <div class="notifi_details_timestamp">
                                    <div class="timestamp_time">19:36</div>
                                    <div class="timestamp_day">19-11-2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="notifi_details_case">
                            <div class="notifi_img">
                                <img src="/images/img1.png" alt="">
                            </div>
                            <div class="notifi_details">
                                <div class="notifi_details_title">
                                    <span class="font-bold">xác nhận đã nhận hàng </span>
                                </div>
                                <div class="notifi_details_content">
                                    <span class="font-normal">
                                        Vui lòng chọn ‘Đã nhận hàng” cho đơn 76358JHBR60G. Nếu bạn hài lòng tất cả sản phẩm và không có nhu cầu trả hàng/Hoàn tiền. Đánh giá ngay và nhận 100 xu 
                                    </span>
                                </div>
                                <div class="notifi_details_timestamp">
                                    <div class="timestamp_time">19:36</div>
                                    <div class="timestamp_day">19-11-2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="notifi_details_case">
                            <div class="notifi_img">
                                <img src="/images/img1.png" alt="">
                            </div>
                            <div class="notifi_details">
                                <div class="notifi_details_title">
                                    <span class="font-bold">xác nhận đã nhận hàng </span>
                                </div>
                                <div class="notifi_details_content">
                                    <span class="font-normal">
                                        Vui lòng chọn ‘Đã nhận hàng” cho đơn 76358JHBR60G. Nếu bạn hài lòng tất cả sản phẩm và không có nhu cầu trả hàng/Hoàn tiền. Đánh giá ngay và nhận 100 xu 
                                    </span>
                                </div>
                                <div class="notifi_details_timestamp">
                                    <div class="timestamp_time">19:36</div>
                                    <div class="timestamp_day">19-11-2020</div>
                                </div>
                            </div>
                        </div>
                        <div class="notifi_details_case">
                            <div class="notifi_img">
                                <img src="/images/img1.png" alt="">
                            </div>
                            <div class="notifi_details">
                                <div class="notifi_details_title">
                                    <span class="font-bold">xác nhận đã nhận hàng </span>
                                </div>
                                <div class="notifi_details_content">
                                    <span class="font-normal">
                                        Vui lòng chọn ‘Đã nhận hàng” cho đơn 76358JHBR60G. Nếu bạn hài lòng tất cả sản phẩm và không có nhu cầu trả hàng/Hoàn tiền. Đánh giá ngay và nhận 100 xu 
                                    </span>
                                </div>
                                <div class="notifi_details_timestamp">
                                    <div class="timestamp_time">19:36</div>
                                    <div class="timestamp_day">19-11-2020</div>
                                </div>
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
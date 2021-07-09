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
        <div class="banner_container" style="padding-bottom: 0;">
            <div class="banner_content">
                <img src="/images/banner1.png" alt="" style='width: 100%'>
            </div>
        </div>
        <div class="filter_container align_content">
            <div class="filter_1">
                <div class="filter_1_content">
                    <select name="" id="">
                        <option value="">Bộ lọc</option>
                    </select>
                    <input type="checkbox" class="inp-check" name="" id=""> <span class="font-normal span-input">Vip</span>
                    <input type="checkbox" class="inp-check" name="" id=""> <span class="font-normal span-input">Doanh nghiệp</span>
                    <input type="checkbox" class="inp-check" name="" id=""> <span class="font-normal span-input">Đã chứng nhận</span>
                    <span class="font-normal compare">Sắp xếp theo</span>
                    <select name="" id="sel-comp">
                        <option value="">Bán chạy nhất</option>
                        <option value="">Mới nhất</option>
                        <option value="">Giá giảm dần</option>
                        <option value="">Giá tăng dần</option>
                        <option value="">Giảm giá</option>
                        <option value="">Còn hàng</option>
                        <option value="">Hết hàng</option>
                    </select>
                    <button>Bỏ chọn</button>
                </div>
            </div>
            <div class="filter_2">
                <div class="filter_2_content">
                    <span class="font-normal" style="color: #000; padding-right: 40px">Tìm thấy 30 sản phẩm</span>
                    <span class="font-normal"><span class="pink">1</span>/11</span>
                    <button><img src="/images/back.png" alt=""></button>
                    <button><img src="/images/next.png" alt=""></button>
                </div>  
            </div>
        </div>
        <div class="favourite_main align_content">
            <div class="category_container">
                <div class="category_container_content">
                    <div class="cate_case">
                <div class="name_cate">
                    Danh mục
                </div>
                <div class="img_cate">
                    <img src="/images/vector3.png" alt="">
                </div>
            </div>
            <div class="cate_case">
                <div class="name_cate">
                    Thương hiệu
                </div>
                <div class="img_cate">
                    <img src="/images/vector3.png" alt="">
                </div>
            </div>
            <div class="cate_case">
                <div class="name_cate">
                    Màu sắc
                </div>
                <div class="img_cate">
                    <img src="/images/vector3.png" alt="">
                </div>
            </div>
            <div class="cate_case">
                <div class="name_cate">
                    Đánh giá
                </div>
                <div class="img_cate">
                    <img src="/images/vector3.png" alt="">
                </div>
            </div>
            <div class="cate_case">
                <div class="name_cate">
                    Giá
                </div>
                <div class="img_cate">
                    <img src="/images/vector3.png" alt="">
                </div>
            </div>
            <div class="cate_case">
                <div class="name_cate">
                    Buôn lẻ
                </div>
                <div class="img_cate">
                    <img src="/images/vector3.png" alt="">
                </div>
            </div>
            <div class="cate_case">
                <div class="name_cate">
                    Hàng về ngày
                </div>
                <div class="img_cate">
                    <img src="/images/vector3.png" alt="">
                </div>
            </div>
            <div class="cate_case">
                <div class="name_cate">
                    Dòng sản phẩm
                </div>
                <div class="img_cate">
                    <img src="/images/vector3.png" alt="">
                </div>
            </div>
            <div class="cate_case">
                <div class="name_cate">
                    Nhà phân phối
                </div>
                <div class="img_cate">
                    <img src="/images/vector3.png" alt="">
                </div>
            </div>
            <div class="cate_case">
                <div class="name_cate">
                    Nơi phân phối
                </div>
                <div class="img_cate">
                    <img src="/images/vector3.png" alt="">
                </div>
            </div>
                </div>
            
        </div>

        <div class="product_favourite">
            <div class="product_favourite_content">
                <div class="favourite_notthing">
                    <img src="/images/Group1.png" alt="">
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
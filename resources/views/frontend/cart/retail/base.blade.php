<html>
<!-- BEGIN: Head-->
@include('frontend.base.head')

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
            <div id="ml" class="font switch_content chose_this"> <span>Mua lẻ</span> </div><div id="kd" class="font not_chose_this switch_content "><span>Kinh doanh</span></div>
        </div>
        <div class="menu_bought align_content">
            <div class="menu_bought_content font">
               <ul> 
                   <li class="li_border nav-cart active" data-url= {{ route('buy-together')}}>Mua chung</li>
                   <li class="li_border nav-cart" data-url= {{ route('wait-accept')}}>Chờ xác nhận</li>
                   <li class="li_border nav-cart" data-url= {{ route('wait-get-product')}}>Chờ lấy hàng</li>
                   <li class="li_border nav-cart" data-url= {{ route('delivery')}}>Đang giao</li>
                   <li class="li_border nav-cart" data-url= {{ route('delivered')}}>Đã giao</li>
                   <li class="li_border nav-cart" data-url= {{ route('aborted')}}>Đã hủy</li>
                   <li class="li_border nav-cart" data-url= {{ route('paid')}}>Đã trả</li>
                </ul>   
            </div>
        </div>
        <div class="cart padd" id="container-cart">
            @include('frontend.cart.retail.buytogether')
        </div>
        
    </div>
    @include('frontend.base.footer')
</div>
@include('frontend.base.script')
</body>
</html>
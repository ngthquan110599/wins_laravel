<html>
<!-- BEGIN: Head-->
@include('frontend.base.head')
<link rel="stylesheet" type="text/css" href="css/home/style.css">
<!-- END: Head-->

<!-- BEGIN: Body-->
<body>
<div id="main">
    @include('frontend.base.header')
    <h3>{{$title ?? ''}}</h3>
    <div class="cart">
        <img src="public/" alt="">
    </div>
    @include('frontend.base.footer')
</div>
@include('frontend.base.script')
</body>
</html>
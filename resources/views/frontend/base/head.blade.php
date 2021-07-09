<head>
      <title><?= $title ?? '' ?></title>
      <base href="{{url('assets/frontend')}}/"/>
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="csrf-token" content="{{ csrf_token() }}"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name='viewport' content='width=device-width, initial-scale=1'>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="/access/css/base/header.css">
      <link rel="stylesheet" type="text/css" href="/access/css/base/footer.css">
      <link rel="stylesheet" type="text/css" href="/access/css/base/style.css">
      <link rel="stylesheet" type="text/css" href="/access/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="/access/css/cart/frame.css">
      <link rel="stylesheet" type="text/css" href="/access/css/home/style.css">
      <link rel="stylesheet" type="text/css" href="/access/css/cart/cartpage.css">
      <link rel="stylesheet" type="text/css" href="/access/css/cart/cartbought.css">
      <link rel="stylesheet" type="text/css" href="/access/css/cart/cart_wholesale.css">
      <link rel="stylesheet" type="text/css" href="/access/css/option/option.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

      <!-- Add the slick-theme.css if you want default styling -->
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

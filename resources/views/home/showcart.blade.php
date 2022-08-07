<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="home/images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <script src="https://kit.fontawesome.com/45e54b9293.js" crossorigin="anonymous"></script>
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->

         @if(session()->has('message'))

                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                    {{session()->get('message')}}

                </div>

            @endif
      
        <div style="margin-top: 80px; margin-bottom: 80px;">

<table class="table" style="width: 80%; margin: auto; text-align: center;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Product Title</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php $totalprice=0; ?>

  @foreach($cart as $cart)

    <tr>
        <th scope="col">{{$cart->product_title}}</th>
        <th scope="col">{{$cart->quantity}}</th>
        <th scope="col">{{$cart->price}}</th>
        <th scope="col"> <center> <img src="/product/{{$cart->image}}" style="width: 250px; height: 250px;"> </center> </th>
        <th scope="col"> <center> <a class="btn btn-danger" onclick="return confirm('Are you sure to remove this product ?')" href="{{url('/remove_cart',$cart->id)}}">Remove Product</a> </center> </th>
    </tr>

    <?php $totalprice=$totalprice + $cart->price ?>

    @endforeach

<table class="table table-dark" style="width: 80%; margin: auto; margin-top: 100px; text-align: center;">
  <thead>
    <tr>
        <center>
      <th scope="col">Total Price: ₾{{$totalprice}}</th>
        </center>
    </tr>
  </thead>
</table>

<br>
<br>
<br>
<br>

<table class="table" style="width: 80%; margin: auto; text-align: center;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Proceed to Order:</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"> <a href="{{url('cash_order')}}" class="btn btn-danger" style="margin-right: 100px;">Cash On Delivery</a> <a href="{{url('stripe',$totalprice)}}" class="btn btn-danger">Pay Using Card</a> </th>
    </tr>
  </tbody>
</table>

  </tbody>
</table>

        </div>

      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p>© 2021 All Rights Reserved By <a href="#">Tsotne Muzashvili</a></p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
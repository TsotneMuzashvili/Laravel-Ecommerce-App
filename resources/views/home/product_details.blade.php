<!DOCTYPE html>
<html>
   <head>

    <base href="/public">

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

         <br>
         <br>
         <br>

<div class="card mb-3" style="margin-left: 500px; margin-right: 500px;">
  <center><img class="card-img-top" style="width: 300px; height: 300px;" src="product/{{$product->image}}" alt="Card image cap"></center>
  <div class="card-body">
    <h5 class="card-title">Product Title: {{$product->title}}</h5>
    <h6>Product Description: {{$product->description}}</h6>

    <br>
    
    @if($product->discount_price!=null)

        <h6 style="color: red;">
            Discount Price: ₾{{$product->discount_price}}
        </h6>

        <h6 style="text-decoration: line-through;">
            Price: ₾{{$product->price}}
        </h6>

            @else

        <h6>
            ₾{{$product->price}}
        </h6>

    @endif

    <br>

    <h6>Product Catagory: {{$product->catagory}}</h6>

    <h6>Product Quantity: {{$product->quantity}}</h6>

    <br>

    <form action="{{url('add_cart',$product->id)}}" method="Post">

      @csrf

      <div class="row">

        <div class="col-md-4">

          <input type="number" name="quantity" value="1" min="1" style="width: 100px; border-radius: 25px;">

        </div>

        <div class="col-md-4">

          <input type="submit" value="Add To Cart" style="border-radius: 25px;">

        </div>

      </div>

    </form>

  </div>
</div>

        <br>
        <br>
        <br>

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
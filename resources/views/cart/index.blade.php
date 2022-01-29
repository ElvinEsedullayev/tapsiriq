<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('front')}}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/fontawesome.css">
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="{{asset('front')}}/assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="{{route('home')}}"><h2>Test <em>Tapşırıq</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('cart.list')}}"><i class="fas fa-cart-plus"></i> Cart {{Cart::getContent()->count()}}
                 
                </a>
              </li> 
             
            
             
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <br><br><br><br><br>
     @if(Session::has('success'))
                    <div class="alert alert-success">
                      {{Session::get('success')}}
                      <button class="close" data-dismiss="alert" type="button">x</button>
                    </div>
                    @endif
            <h1>Cart Item</h1>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product title</th>
      <th scope="col">Price</th>
    
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <form action="" method="POST">
      @csrf
      @php
       $eded =1;   
      @endphp
    @foreach(Cart::getContent() as $cartItem)
    <tr>
      <th scope="row">{{$eded++}}</th>
      <td>{{$cartItem->name}}</td>
      <td>{{$cartItem->price}} $</td>
     
      <td>      
        <a href="{{route('cart.remove',$cartItem->id)}}" class="btn btn-danger">Delete</a>
      </td>
    
    </tr>
  @endforeach
  </tbody>
 
</table>
<a  style="margin-left: 500px;" href="{{route('cart.clear')}}" class="btn btn-success">Remove All Cart</a>



    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('front')}}/vendor/jquery/jquery.min.js"></script>
    <script src="{{asset('front')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="{{asset('front')}}/assets/js/custom.js"></script>
    <script src="{{asset('front')}}/assets/js/owl.js"></script>
    <script src="{{asset('front')}}/assets/js/slick.js"></script>
    <script src="{{asset('front')}}/assets/js/isotope.js"></script>
    <script src="{{asset('front')}}/assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>

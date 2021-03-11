<!DOCTYPE html>
<html>
<head>
	<title>Airline</title>
	<meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">

             <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            <link rel="stylesheet" type="text/css" href="{{asset('/css/index_style.css')}}" media="all"/>


</head>
<body>


<header>
    <nav>
        <div class="container-fluid top ">
            <div class="row">
                <div class="col-7">

                    <a href="#" class="text-decoration-none text-white ">Airline Flight and Reservation System</a>
                    

                </div>

                <div class="col-5 text-end text-white">
                        <i class="fab fa-facebook  "></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-google"></i>
                        <i class="fab fa-youtube"></i>
                </div>

            </div>    
        </div>

        
    </nav>
</header>

<!----header ends-->

<!----menu section-->
<section class="banner" id="home">
<header class="main-header">	
<nav class="navbar navbar-expand-lg top1 sticky-top">
    <div class="container">
    	 <img src="img/logo.png" class="logo">
        <a href="" class="text-decoration-none text-white">TRAVEL KITE</a>
        
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto ">
                <li class="nav-item">
                    <a href="#home" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#travel" class="nav-link text-white" >Travel Blog</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Sign In</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link text-white" >Sign Up</a>
                </li>

                <li class="nav-item">
                    <a href="#contact" class="nav-link text-white">Contact Us</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
</header>
   
    
</section>

@yield('content')

</br>

</br></br>

<footer>
	<div class="container-fluid  ">
     <div class="row top3 text-white text-center">
        <p> Travel Kite &copy 2020-2021</p>
         
     </div>
       
   </div>
</footer>







<!---Jquery--->
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js"></script>
</body>
</html>


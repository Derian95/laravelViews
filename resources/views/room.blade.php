<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="{{asset('css/general/bootstrap.min.css')}}"> -->
    <!-- style css -->
    <link rel="stylesheet" href="{{asset('css/general/style.css')}}">
    <!-- Responsive-->
    <!-- <link rel="stylesheet" href=" {{asset('css/general/responsive.min.css')}}"> -->

    <!-- <link rel="stylesheet" href="./css/carousel/carousel.css"> -->
    <link rel="stylesheet" href="{{asset('css/carousel/carousel.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   
   

    <!-- DAtatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" />
    <title>Document</title>
</head>
<body>

<div class="loader_bg">
         <div class="loader"><img src="{{ asset('images/logoWin.png') }}" alt="#" /></div>
      </div>


<div>sdsd</div>

@include('header')


<div class="choose">
        <div class="container">
           

            <div class="row"  style="display: flex;justify-content: center;align-items: center;">
                <div class="col-md-5">
                    <div class="choose_box">

                        <img src="../images/ss.jpg" alt="" >
                    </div>
                </div>

                <div class="col-md-7 " >
                    <div class="choose_box" >
                        <div class="titlepage">
                            <h4><span class="text_norlam">ROOM 2</span> </h4>
                        </div>
                        
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit </p>
                        
                            <div style="height: 1px;width: 100%; background-color: orange;margin-bottom: 15px;">

                            </div>
                            <!-- <img src="../images/shower.png" alt="" class="card-icon">
                            <img src="../images/shower.png" alt="" class="card-icon">
                            <img src="../images/shower.png" alt="" class="card-icon"> -->
                            <div style="height: 1px;width: 100%; background-color: orange;margin-top: 15px;">
                        
                               
                        </div>
                        <p>from $115/ nigth <br/>Comentario</p>
                        
                    <div>
                    </div>

                </div>
            </div>

           
        </div>
    </div>
    </div>




</div>

<!-- <script src="{{asset('js/carousel/carousel.js')}}"></script> -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script src="{{asset('js/general/jquery.min.js')}}"></script>
      <!-- <script src=" {{asset('js/general/popper.min.js')}}"></script> -->
      <!-- <script src="{{asset('js/general/bootstrap.bundle.min.js')}}"></script> -->
      <script src="{{asset('js/general/jquery-3.0.0.min.js')}}"></script>
      <!-- <script src=" {{asset('js/fetch/users.js')}}"></script> -->
      <!-- sidebar -->
      <script src=" {{asset('js/general/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src=" {{asset('js/general/custom.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

       <!-- JS DATATABLE-->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
</body>
</html>
<!DOCTYPE html>

<head>
    <title> First Task- @yield('title') </title>

    @include ("website.layout.css")
  
</head>


<body>  


    
 
    <div class="container-fluid">  


            @section ("navbar")

              @include ("website.layout.navbar")

            @show

            @yield("body")




    </div>

</body>


</html>
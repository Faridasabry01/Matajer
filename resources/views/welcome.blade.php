<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- <title>Laravel</title> --}}
        <link rel="stylesheet" href={{ asset('/css/stylesheet.css')}}>
        <link rel="icon" href="{{asset('/storage/LOGO/LOGO.png')}}">
         <title>MATAJER</title>


        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    </head>
    <body class="antialiased landingg">
        <div id="loader"><img src="{{asset("/storage/Landing_page/load.gif")}}" alt="" style="width: 100%;height:100%"></div>

        <div>
          <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="landing-main" >
                <h1 >
                  Matajer
                </h1>
                <div class="para1">
                <p >
                  More than
                  <br> just beauty products.<br>



                </p>
            </div>
            <div class="para2">
                <p>Discover Products for a life well lived.<br>
                    So let's get started to have the most unique, <br>
                    easy, fun online shopping experience.</p>
                    <a href="{{route('register')}}"><button class="btn1" >Get started</button></a>

                    <a href="{{ route('login') }}"> <button class="btn2" >login</button></a>


            </div>

            </div>
            </div>
        </div>


        <script>
        document.onreadystatechange = function() {
          if(document.readyState=="complete")
          {
            setTimeout(()=>{
                document.querySelector("#loader").style.display = "none";
                document.querySelector("body").style.visibility = "visible";
                document.body.style.overflow = "visible";

            }, 3000)
          }
        else if (document.readyState !== "complete") {
            document.querySelector("body").style.visibility = "hidden";
            document.querySelector("#loader").style.visibility = "visible";
            document.body.style.overflow = "visible";
        }
        document.body.style.overflow = "hidden";
        };

    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    </body>
</html>

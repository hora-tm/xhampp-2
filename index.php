<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
    body {
        /* background-color: rgb(113, 114, 114); */
        font-size: 17px;
    }




    /* Increase all font sizes on mobile */
    @media (max-width: 1200px) {

        .h4 {
            /* default is 1rem or 16px */
            font-size: 26px;
        }

        body {
            /* default is 1rem or 16px */
            font-size: 16px;
        }

    }

    @media (max-width: 992px) {
        body {
            /* default is 1rem or 16px */
            font-size: 15px;
        }


        .h4 {
            /* default is 1rem or 16px */
            font-size: 26px;
        }

    }


    /* Increase all font sizes on mobile */
    @media (max-width: 768px) {

        h4 {
            /* default is 1rem or 16px */
            font-size: 25px;
        }

        body {

            /* default is 1rem or 16px */
            font-size: 14px;
        }

    }
    </style>

</head>

<?php
include("navbar.php")
?>

<body class=" justify-content-around bg-secondary text-white" style="font-family :sans-serif ">



    <div style="height: 450px; " class=" shadow shadow-dark rounded-lg   mt-2 mx-3">
        <img class="img-fluid w-100" style="height: 450px; " src="4.jpeg">
    </div>



    <div class=" row container-fluid d-flex justify-content-center mt-2 mb-3 mx-2">

        <!-- horacart -->


        <div class="col-12 col-lg-5 col-xl-4 col-md-6 col-sm-7 d-flex justify-content-center  mt-2  mr-3 shadow shadow-dark rounded-lg mx-sm-2 mx-2"
            style="border-image: url(border.png) 30 stretch; background-color: #444;height: 250px;">

            <!-- leftside-->
            <div class="col-4 col-lg-5 col-xl-5 col-sm-5 col-md-5 justify-content-start align-self-center pl-1">
                <img style="" class="img-fluid rounded-circle pl-2"
                    src="https://image.freepik.com/free-vector/flat-design-young-girl-programmer-working_23-2148267156.jpg" />
            </div>
            <!-- rightside -->
            <div class="col-8 col-lg-8 col-xl-8 col-sm-8 col-md-8 align-self-center  ">
                <div class="row  h-100 py-4 d-block  align-items-center ">
                    <h5 class=' font-weight-bold text-warning'> Hora Taghaddomi</h5>
                    <div class=''> WebDeveloper, Programmer, Designer,& Part Writer</div></br>
                    <div><span class="text-warning">Email: </span> horataqadomi@gmail.com</div>
                    <div><span class="text-warning">ID: </span>9512762276</div>
                    <button class="btn btn-warning btn-sm mt-2 py-0"
                        onclick="document.location = 'Hora-profile.html' ; ">See Profile </a></button>
                </div>
            </div>
        </div>




        <!-- Laya -->


        <div class="col-12 col-lg-5 col-xl-4 col-md-6 col-sm-7 d-flex justify-content-center  mt-2  shadow shadow-dark rounded-lg   mr-2 mx-sm-2 mx-2"
            style="border-image: url(border.png) 30 stretch; background-color: #444;height:250px;">

            <!-- leftside-->
            <div class="col-4 col-lg-5 col-xl-5 col-sm-5 col-md-5 justify-content-start align-self-center">
                <img style="" class="img-fluid rounded-circle" src="me2.png" />
            </div>
            <!-- rightside -->
            <div class="col-6 col-lg-8 col-xl-8 col-sm-7 col-md-8 align-self-center ">
                <div class="row  h-100 py-4  d-block  align-items-center ">
                    <h5 class=' font-weight-bold text-warning'> Laya Nikkhah </h5>
                    <div class=''> A Programmer
                        enjoy books, cooking, teaching, programming ,...</div></br>
                    <div><span class="text-warning">Email: </span>laya1998niki@gmail.com</div>
                    <div><span class="text-warning">ID: </span></div>
                    <button class="btn btn-warning btn-sm py-0 mt-2"
                        onclick="document.location = 'laya-profile.html'">See Profile </a></button>
                </div>
            </div>
        </div>



    </div>
</body>

</html>
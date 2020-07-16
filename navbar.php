<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <style>
    /* body {
        /* background-color: rgb(113, 114, 114); */
    /* font-size: 17px; */
    /* } */



    /* @media screen and (max-width: 768px) {

        body {
            font-size: 12px;
        }

    } */

    html {
        font-size: 1rem;
    }

    @media (max-width: 576px) {
        html {
            font-size: 0.5rem;
        }
    }

    @media (min-width: 576px) {
        html {
            font-size: 0.75rem;
        }
    }

    @media (min-width: 768px) {
        html {
            font-size: 0.75rem;
        }
    }

    @media (min-width: 992px) {
        html {
            font-size: 0.75rem;
        }
    }

    @media (min-width: 1200px) {
        html {
            font-size: 1rem;
        }
    }


    li {
        font-weight: bold;
    }


    /* @media screen and (min-width: 1201px) {

        body,
        h5 {
            font-size: 17px;
        }
    }



    @media screen and (max-width: 1200px) {

        body {
            font-size: 16px;
        }


    } */
    /* #818380 */
    /* #777B7E */

    table {
        background-color: #d0d0d0;
        /* color: #eceff1; */
        /* border-radius: 20px; */
    }

    thead {
        background-color: #333333;
        color: #d0d0d0;
    }

    .container {
        background-color: white;
        /* border: solid 10px; */

        /* box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.2), 0 10px 20px 20px rgba(0, 0, 0, 0.19); */
    }

    body {
        background-color: #d0d0d0;
        color: #d0d0d0;
    }

    .navbar {
        background-color: #333333;
    }

    .btn {
        background-color: #333333;
        color: #d0d0d0;
    }

    #mainH {
        /* text-shadow: 2px 2px 5px #cfd8dc; */
        color: #333333;
    }

    .h1 {
        color: #333333;
    }

    .h5 {
        color: #333333;
    }
    </style>
</head>


<body>




    <nav class="navbar navbar-expand navbar-dark fixed-top mb-5 ">
        <div class="container-floid">
            <ul class="navbar-nav col-5 col-md-12" id="nav">

                <li class="nav-item ">
                    <div class="row d-flex ">
                        <div class="col-2"> <a class="nav-link" id="home" href="index.php">Home</a></div>

                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="masterView.php">MastersPage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="active(this)" href=" studentsView.php">StudentsPage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="course_view.php">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SelectUnit.html">SelectUnit</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- <div id="topheader">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="studentsView.php">Brand</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#home">home<span class="sr-only">(current)</span></a></li>
                        <li><a href="#page1">page 1</a></li>
                        <li><a href="#page2">page 2</a></li>
                        <li><a href="#page3">page 3</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
 -->
    <script>
    // var num = 0;
    // $('#topheader .navbar-nav a').on('click', function() {
    //     $('#topheader .navbar-nav').find('li.active').removeClass('active');
    //     $(this).parent('li').addClass('active');
    // }); -->

    // function active(e) {
    // $$('.active').each(function(i) {
    //         i.removeClassName('active');
    //     });
    //     e.addClassName('active');
    // };
    // $(".nav .nav-link").on("click", function() {
    //     $(".nav").find(".active").removeClass("active");
    //     $(this).addClass("active");
    // });


    $(function() {
        $('#nav li a').click(function() {
            $('#nav li').removeClass();
            $($(this).attr('href')).addClass('active');
        });
    });
    </script>



</html>
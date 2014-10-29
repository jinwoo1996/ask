<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ask for JinWoo</title>



    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand" href="#page-top">ask for jinwoo</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll">
                        <a href="#ask">ASK</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#reply">REPLY</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile2.jpg" width = 256 heught = 256>
                    <div class="intro-text">
                        <span class="name">이진우</span><a href="https://www.facebook.com/profile.php?id=100000544730099" class="btn-social btn-outline" target = "_blank"><i class="fa fa-fw fa-facebook"></i></a>
                        <hr class="star-light">
                        <span class="information">선린인터넷고등학교 웹운영과 3학년</span><br>
                        <span class="information">나이 - 19</span><br>
                        <span class="information"></span><br>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ask -->
    <section id="ask">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>ASK</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <form class="form-horizontal" role="search" action = "db_board.php" method = "post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="input-group">
                            <input type = "text" class="form-control" placeholder="Ask" name = "content">
                            <span class="input-group-btn">
                                <input class="btn btn-default" type="submit" value = "Send">
                             </span>
                        </div><!-- /input-group -->
                    </div><!-- /.col-lg-12 -->
                </div><!-- /.row -->
    </section>

    <!-- reply -->
    <section id="reply">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>REPLY</h2>
                    <!-- <a href = "admin_login.php">
                        <button type="button" class="btn btn-default btn-lg">
                            <h4>답변하기</h4>
                        </button>
                    </a> -->
                    <hr class="star-primary">
                </div>
            </div>
        </div>
    </section>


    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
   <!--  // <script src="js/jqBootstrapValidation.js"></script>
    // <script src="js/contact_me.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>


</body>

</html>


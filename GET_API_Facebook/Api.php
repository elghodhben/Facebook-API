<?php

$con = mysqli_connect('localhost', 'root', '', 'api');
$res = mysqli_query($con, "select * from faccebook_api_test order by id asc");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="./Api.css">
    <link href="https://fonts.googleapis.com/css?family=Rokkitt" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

    <!-- ==============================================
	    Hero
	    =============================================== -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <?php while ($row = mysqli_fetch_assoc($res)) { ?>
                    <div class="col-lg-6 ">

                        <div class="cardbox shadow-lg bg-white">

                            <div class="cardbox-heading">
                                <!-- START dropdown-->
                                <div class="dropdown float-right">
                                    <button class="btn btn-flat btn-flat-icon" type="button" data-toggle="dropdown" aria-expanded="false">
                                        <em class="fa fa-ellipsis-h"></em>
                                    </button>
                                    <div class="dropdown-menu dropdown-scale dropdown-menu-right" role="menu" style="position: absolute; transform: translate3d(-136px, 28px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a class="dropdown-item" href="#">Hide post</a>
                                        <a class="dropdown-item" href="#">Stop following</a>
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </div>
                                <!--/ dropdown -->
                                <div class="media m-0">
                                    <div class="d-flex mr-3">
                                        <a href=""><img class="img-fluid rounded-circle" src="<?php echo $row['page_picture'] ?>" alt="User"></a>
                                    </div>
                                    <div class="media-body">
                                        <p class="m-0"><?php echo $row['page_name'] ?></p>
                                        <small><span><i class="icon ion-md-pin"></i> <?php echo $row['message'] ?></span></small>
                                        <small><span><i class="icon ion-md-time"></i> <?php echo $row['created_time']; ?></span></small>
                                    </div>
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ cardbox-heading -->

                            <div class="cardbox-item">
                                <img class="img-fluid" src="<?php echo $row['full_picture'] ?>" alt="Image">
                            </div>
                            <!--/ cardbox-item -->
                            <div class="cardbox-base">
                                <ul class="float-right">
                                    <li><a><i class="fa fa-comments"></i></a></li>
                                    <li><a><em class="mr-5">12</em></a></li>
                                    <li><a><i class="fa fa-share-alt"></i></a></li>
                                    <li><a><em class="mr-3">03</em></a></li>
                                </ul>
                                <ul>
                                    <li><a><i class="fa fa-thumbs-up"></i></a></li>
                                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/3.jpeg" class="img-fluid rounded-circle" alt="User"></a></li>
                                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/1.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/5.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                                    <li><a href="#"><img src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/2.jpg" class="img-fluid rounded-circle" alt="User"></a></li>
                                    <li><a><span>242 Likes</span></a></li>
                                </ul>
                            </div>
                            <!--/ cardbox-base -->
                            <div class="cardbox-comments">
                                <span class="comment-avatar float-left">
                                    <a href=""><img class="rounded-circle" src="http://www.themashabrand.com/templates/bootsnipp/post/assets/img/users/6.jpg" alt="..."></a>
                                </span>
                                <div class="search">
                                    <input placeholder="Write a comment" type="text">
                                    <button><i class="fa fa-camera"></i></button>
                                </div>
                                <!--/. Search -->
                            </div>
                            <!--/ cardbox-like -->

                        </div>
                        <!--/ cardbox -->

                    </div>
                <?php } ?>
                <!--/ col-lg-6 -->
                <div class="col-lg-3">
                    <div class="shadow-lg p-4 mb-2 bg-white author">
                        <a href="http://www.themashabrand.com/">Get more from themashabrand.com</a>
                        <p>Bootstrap 4.1.0</p>
                    </div>
                </div>
                <!--/ col-lg-3 -->

            </div>
            <!--/ row -->
        </div>
        <!--/ container -->
    </section>
</body>

</html>
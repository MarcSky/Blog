<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/blog-post.css'?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/">Главная</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1><?php echo $information['title'];?></h1>
                <p class="lead">
                    от <a href="#"><?php echo $information['author'];?></a>
                </p>
                <hr>
                <p><span class="glyphicon glyphicon-time"></span> Опубликовано <?php echo @date('Y-m-d',$information['date_create']);?></p>
                <hr>
                <img class="img-responsive" src="<?php echo base_url().'assets/img/'.$information['image'];?>" alt="">
                <hr>
                <?php echo $information['text'];?>
                <hr>
            </div>
            <div class="col-md-4">
                <div class="well">
                    <h4>Blog Search</h4>
                    <form class="" role="search" action="/blog/search" method="post">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="поиск..." name="search">
                            </div>
                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Блог создан Гогохия Леваном и Варибрусом Сергеем 2015</p>
                </div>
            </div>
        </footer>
    </div>

    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Блог про образование</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/blog-post.css'?>">
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
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Поиск</h3>
        </div>
        <div class="panel-body">
            <form class="navbar-form navbar-left" role="search" action="/blog/search" method="post">
                <div class="col-lg-12">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="поиск..." name="search">
                    </div>
                    <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                </div>
            </form>
        </div>
    </div>
    <?php foreach($information as $i):?>
        <div class="row">
            <div class="col-lg-12">
                <h1><a href="<?php echo "/blog/page/".$i['id'];?>"><?php echo $i['title'];?></a></h1>
                <p class="lead">
                    от <a href="#"><?php echo $i['author'];?></a>
                </p><hr>
                <p><span class="glyphicon glyphicon-time"></span> Опубликовано <?php echo @date('Y-m-d',$i['date_create']);?></p>
                <hr>
                <img class="img-responsive" src="<?php echo base_url().'assets/img/'.$i['image'];?>" alt="">
                <hr>
                    <?php echo $i['text'];?>
                <hr>
            </div>
        </div>
    <?php endforeach;?>
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

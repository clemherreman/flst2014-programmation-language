<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Howdy fellow, and welcome to Uncle Stew's secret recipes website!!</title>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Howdy fellow, and welcome to Uncle Stew's secret recipes website!!</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/blog.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
</head>
<body>
    <div class="container">

        <div class="blog-header">
            <h1 class="blog-title">The Recipe Blog</h1>
            <p class="lead blog-description">The official list of delicious dishes recipes.</p>
        </div>

        <div class="row">

            <div class="col-sm-10 blog-main">
                <form action="create.php" method="post">
                    <label for="title">Title :</label>
                    <input type="text" id="title" name="title">
                    <br />
                    <label for="text">Text :</label>
                    <textarea cols="60" rows="10" name="text" id="text"></textarea>

                    <br />
                    <input type="submit" value="Creer le billet" />
                </form>
            </div><!-- /.blog-main -->

        </div><!-- /.row -->

    </div><!-- /.container -->

    <footer class="blog-footer">
        <p>FLST 2014 - Blog HTML skeleton - Clement Herreman.</p>
        <p>Shamefully taken from the blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<nav class="navbar navbar-inverse navbar-fixed-top wet-asphalt " role="banner">
            <div class="container">
            
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
<!--                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +0123 456 70 90</p></div>-->
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a target="blank" href="https://www.facebook.com/0813548aje?fref=ts"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="blank" href="https://www.linkedin.com/in/adrielwalter"><i class="fa fa-linkedin"></i></a></li> 
                            </ul>
<!--                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>-->
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->



                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   <a class="navbar-brand" href="index.php"><img src="images/ico/p-57-precomposed.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li <?php if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'class="active"';?> ><a href="index.php">Home</a></li>
                        <li <?php if (strpos($_SERVER['PHP_SELF'], 'about.php')) echo 'class="active"';?>><a href="about.php">About Me</a></li>
                        <li <?php if (strpos($_SERVER['PHP_SELF'], 'project.php')) echo 'class="active"';?>><a href="project.php">Projecten</a></li>
                        <li <?php if (strpos($_SERVER['PHP_SELF'], 'cv.php')) echo 'class="active"';?>><a href="cv.php">Mijn Cv</a></li>
                        <li <?php if (strpos($_SERVER['PHP_SELF'], 'contact.php')) echo 'class="active"';?>><a href="contact.php">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->


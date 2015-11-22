<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        Portfolio | 
            <?php 
                if (strpos($_SERVER['PHP_SELF'], 'index.php')) echo 'HOME';
                else
                   if (strpos($_SERVER['PHP_SELF'], 'about.php')) echo 'ABOUT';
                   else
                      if (strpos($_SERVER['PHP_SELF'], 'project.php')) echo 'PROJECTEN';
                      else
                        if (strpos($_SERVER['PHP_SELF'], 'project_1.php')) echo 'PROJECT 1';
                      else
                        if (strpos($_SERVER['PHP_SELF'], 'project_2.php')) echo 'PROJECT 2';
                      else
                        if (strpos($_SERVER['PHP_SELF'], 'project_3.php')) echo 'PROJECT 3';
                      else
                        if (strpos($_SERVER['PHP_SELF'], 'project_4.php')) echo 'PROJECT 4';
                      else
                        if (strpos($_SERVER['PHP_SELF'], 'project_5_6.php')) echo 'PROJECT 5&6';
                      else
                        if (strpos($_SERVER['PHP_SELF'], 'project_7_8.php')) echo 'PROJECT 7&8';
                      else
                          if (strpos($_SERVER['PHP_SELF'], 'cv.php')) echo 'Mijn Cv';
                          else
                              if (strpos($_SERVER['PHP_SELF'], 'contact.php')) echo 'CONTACT';
            ?>
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <script type="text/javascript">
//$(window).scroll(function(){
//    if ( $(window).scrollTop() > 0 ) {
//       $('#menu-list').animate({"width": minWidth },500);
//       $(this).addClass('top-bar');
//      }
//    else
//     {
//        $('#menu-list').animate({"width": maxWidth },500);
//        $(this).removeleClass('top-bar');
//       }
//});
//</script>
    <link rel="shortcut icon" href="images/ico/p_icon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/p-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/p-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/p-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/p-57-precomposed.png">
</head><!--/head-->
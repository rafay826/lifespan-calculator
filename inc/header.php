<?php define('ROOT_PATH', 'http://' . $_SERVER['HTTP_HOST'] ); ?>
<!DOCTYPE html>
<html ng-app="surveyApp">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
        <!--------CSS---------->
        <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>/survey-form/css/style.css">
        
        <!--------SCRIPTS---------->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.15/angular-ui-router.min.js"></script>
        <script src="https://code.angularjs.org/1.4.0/angular-animate.min.js"></script>
        <script src="https://code.angularjs.org/1.4.0/angular-route.min.js"></script>
        <script src="<?php echo ROOT_PATH; ?>/lifespan-calculator/js/app.js"></script>
        <script src="<?php echo ROOT_PATH; ?>/lifespan-calculator/js/controllers.js"></script>
        
        <!--------FONT SCRIPTS---------->
<!--        <script src="https://use.typekit.net/jtg2mvx.js"></script>-->
<!--        <script>try{Typekit.load({ async: true });}catch(e){}</script>-->

    </head>
    
    <body>
        
        <div id="wrapper">
            <header>
            <h1>Live Cell Research Lifespan Calculator</h1>
            </header>
<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();

    //Twig path
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
            'twig.path' => __DIR__.'/../views'
    ));

    //Linking twig to files per route link
    $app->get("/", function () use ($app) {
        return $app['twig']->render('index.html.twig');
    });


    $app->get("/results", function() use($app) {
        $my_RockPaperScissors = new RockPaperScissors;
        $my_RockPaperScissors_results = $my_RockPaperScissors->playGame($_GET['playerone'], $_GET['playertwo']);
        return $app['twig']->render('results.html.twig', array('result' => $my_RockPaperScissors_results));
    });

    return $app;

 ?>

<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Allergen.php";

    $app = new Silex\Application();

    $app->register( new Silex\Provider\TwigServiceProvider(), array('twig.path'=>__DIR__."/../views"));

    $app['debug'] = true;

    $app->get("/",function() use ($app) {
        return $app['twig']->render('input.html.twig');
    });

    $app->post("/results", function() use ($app) {
        $allergen = new Allergen;

        return $app['twig']->render('results.html.twig', array('allergens'=> $allergen->findAllergen($_POST['input'])));
    });

    return $app;
?>

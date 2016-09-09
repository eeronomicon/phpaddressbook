<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/contact.php';

    session_start();

    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    // $_SESSION['list_of_contacts'] = array();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('addressbook.html.twig', array('my_contacts'=>$_SESSION['list_of_contacts']));
    });

    $app->post('/create_contact', function() use ($app) {
        $contact = new Contact($_POST['input_name'], $_POST['input_address'], $_POST['input_phone']);
        $contact->saveContact();
        return $app['twig']->render('create_contact.html.twig', array('new_contact'=>$contact));
    });

    return $app;
 ?>

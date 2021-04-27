<?php

    require __DIR__ . '/vendor/autoload.php';

    require __DIR__ . '/inc/db.php';

    use Twig\Environment;
    use Twig\Loader\FilesystemLoader;

    $loader = new FilesystemLoader(__DIR__ . '/templates');
    $twig = new Environment($loader);

    $daftar_paket = $db->query("SELECT * FROM `paket`");

    /* $arr_data [];
    if($daftar_paket){
        foreach ($daftar_paket as $key => $val) {
            $arr_data[$key] = 
        }
    } */

    echo $twig->render('second.html.twig', [
        'name' => 'Mirza Purnandi',
        'occupation' => 'gardener',
        'result' => $daftar_paket
    ]);

?>
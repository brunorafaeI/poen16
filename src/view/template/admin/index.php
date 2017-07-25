<?php

if (!$_SESSION) :
    header('Location: ./');
else :
    include(_VIEWPATH_.'template'._DS_.'header.php');

    include('dashboard.php');



    echo '<h1 style="color: white;">Welcome ' . $_SESSION['user_nom'] .'</h1>';
endif;

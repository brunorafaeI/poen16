<?php

if (!$_SESSION) :
    header('Location: ./');
else :
    include_once(_VIEWPATH_.'template'._DS_.'header.php');
    include_once('product.php');
    include_once(_VIEWPATH_.'template'._DS_.'footer.php');

endif;

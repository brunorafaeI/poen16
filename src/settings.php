<?php

namespace src;

ini_set('display_errors', 1);

define('_DS_', DIRECTORY_SEPARATOR);
define('_VIEWPATH_', __DIR__._DS_.'view'._DS_);
define('_CTRLPATH_', __DIR__._DS_.'controller'._DS_);
define('_PUBPATH_',str_replace('src','',__DIR__).'public'._DS_);
define('_SRCPATH_', dirname(__FILE__)._DS_);

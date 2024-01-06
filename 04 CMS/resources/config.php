<?php
    // echo DIRECTORY_SEPARATOR;
    // echo "/";
    defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);

    // ⚡⚡ RUTAS RELATIVAS ⚡⚡
    // echo __DIR__;
    defined("VIEW_FRONT") ? null : define("VIEW_FRONT", __DIR__ . DS . "views" . DS . "front");
    // echo VIEW_FRONT;
    defined("VIEW_BACK") ? null : define("VIEW_BACK", __DIR__ . DS . "views" . DS . "back");
    // echo VIEW_BACK;

?>
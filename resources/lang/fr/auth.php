<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */
    'failed'   => mb_convert_encoding('Ces identifiants ne correspondent pas à nos enregistrements', "UTF-8", "HTML-ENTITIES"),
    'throttle' => mb_convert_encoding('Tentatives de connexion trop nombreuses. Veuillez essayer de nouveau dans :seconds secondes.', "UTF-8", "HTML-ENTITIES"),
];
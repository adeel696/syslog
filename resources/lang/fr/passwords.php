<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Password Reminder Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */
    'password' => mb_convert_encoding('Les mots de passe doivent contenir au moins six caract�res et �tre identiques.', "UTF-8", "HTML-ENTITIES"),
    'reset'    => mb_convert_encoding('Votre mot de passe a �t� r�initialis� !', "UTF-8", "HTML-ENTITIES")
    'sent'     => mb_convert_encoding('Nous vous avons envoy� par email le lien de r�initialisation du mot de passe !', "UTF-8", "HTML-ENTITIES"),
    'token'    => mb_convert_encoding("Ce jeton de r�initialisation du mot de passe n'est pas valide.", "UTF-8", "HTML-ENTITIES"),
    'user'     => mb_convert_encoding("Aucun utilisateur n'a �t� trouv� avec cette adresse email.", "UTF-8", "HTML-ENTITIES"),
];
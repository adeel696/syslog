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
    'password' => mb_convert_encoding('Les mots de passe doivent contenir au moins six caractères et être identiques.', "UTF-8", "HTML-ENTITIES"),
    'reset'    => mb_convert_encoding('Votre mot de passe a été réinitialisé !', "UTF-8", "HTML-ENTITIES")
    'sent'     => mb_convert_encoding('Nous vous avons envoyé par email le lien de réinitialisation du mot de passe !', "UTF-8", "HTML-ENTITIES"),
    'token'    => mb_convert_encoding("Ce jeton de réinitialisation du mot de passe n'est pas valide.", "UTF-8", "HTML-ENTITIES"),
    'user'     => mb_convert_encoding("Aucun utilisateur n'a été trouvé avec cette adresse email.", "UTF-8", "HTML-ENTITIES"),
];
<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages.
    |
    */
    'accepted'             => mb_convert_encoding('Le champ :attribute doit être accepté.', "UTF-8", "HTML-ENTITIES"),
    'active_url'           => mb_convert_encoding("Le champ :attribute n'est pas une URL valide.", "UTF-8", "HTML-ENTITIES"),
    'after'                => mb_convert_encoding('Le champ :attribute doit être une date postérieure au :date.', "UTF-8", "HTML-ENTITIES"),
    'after_or_equal'       => mb_convert_encoding('Le champ :attribute doit être une date postérieure ou égale au :date.', "UTF-8", "HTML-ENTITIES"),
    'alpha'                => mb_convert_encoding('Le champ :attribute doit contenir uniquement des lettres.', "UTF-8", "HTML-ENTITIES"),
    'alpha_dash'           => mb_convert_encoding('Le champ :attribute doit contenir uniquement des lettres, des chiffres et des tirets.', "UTF-8", "HTML-ENTITIES"),
    'alpha_num'            => mb_convert_encoding('Le champ :attribute doit contenir uniquement des chiffres et des lettres.', "UTF-8", "HTML-ENTITIES"),
    'array'                => mb_convert_encoding('Le champ :attribute doit être un tableau.', "UTF-8", "HTML-ENTITIES"),
    'before'               => mb_convert_encoding('Le champ :attribute doit être une date antérieure au :date.', "UTF-8", "HTML-ENTITIES"),
    'before_or_equal'      => mb_convert_encoding('Le champ :attribute doit être une date antérieure ou égale au :date.', "UTF-8", "HTML-ENTITIES"),
    'between'              => [
        'numeric' => mb_convert_encoding('La valeur de :attribute doit être comprise entre :min et :max.', "UTF-8", "HTML-ENTITIES"),
        'file'    => mb_convert_encoding('La taille du fichier de :attribute doit être comprise entre :min et :max kilo-octets.', "UTF-8", "HTML-ENTITIES"),
        'string'  => mb_convert_encoding('Le texte :attribute doit contenir entre :min et :max caractères.', "UTF-8", "HTML-ENTITIES"),
        'array'   => mb_convert_encoding('Le tableau :attribute doit contenir entre :min et :max éléments.', "UTF-8", "HTML-ENTITIES"),
    ],
    'boolean'              => mb_convert_encoding('Le champ :attribute doit être vrai ou faux.', "UTF-8", "HTML-ENTITIES"),
    'confirmed'            => mb_convert_encoding('Le champ de confirmation :attribute ne correspond pas.', "UTF-8", "HTML-ENTITIES"),
    'date'                 => mb_convert_encoding("Le champ :attribute n'est pas une date valide.", "UTF-8", "HTML-ENTITIES"),
    'date_equals'          => mb_convert_encoding('Le champ :attribute doit être une date égale à :date.', "UTF-8", "HTML-ENTITIES"),
    'date_format'          => mb_convert_encoding('Le champ :attribute ne correspond pas au format :format.', "UTF-8", "HTML-ENTITIES"),
    'different'            => mb_convert_encoding('Les champs :attribute et :other doivent être différents.', "UTF-8", "HTML-ENTITIES"),
    'digits'               => mb_convert_encoding('Le champ :attribute doit contenir :digits chiffres.', "UTF-8", "HTML-ENTITIES"),
    'digits_between'       => mb_convert_encoding('Le champ :attribute doit contenir entre :min et :max chiffres.', "UTF-8", "HTML-ENTITIES"),
    'dimensions'           => mb_convert_encoding("La taille de l'image :attribute n'est pas conforme.", "UTF-8", "HTML-ENTITIES"),
    'distinct'             => mb_convert_encoding('Le champ :attribute a une valeur en double.', "UTF-8", "HTML-ENTITIES"),
    'email'                => mb_convert_encoding('Le champ :attribute doit être une adresse email valide.', "UTF-8", "HTML-ENTITIES"),
    'exists'               => mb_convert_encoding('Le champ :attribute sélectionné est invalide.', "UTF-8", "HTML-ENTITIES"),
    'file'                 => mb_convert_encoding('Le champ :attribute doit être un fichier.', "UTF-8", "HTML-ENTITIES"),
    'filled'               => mb_convert_encoding('Le champ :attribute doit avoir une valeur.', "UTF-8", "HTML-ENTITIES"),
    'gt'                   => [
        'numeric' => mb_convert_encoding('La valeur de :attribute doit être supérieure à :value.', "UTF-8", "HTML-ENTITIES"),
        'file'    => mb_convert_encoding('La taille du fichier de :attribute doit être supérieure à :value kilo-octets.', "UTF-8", "HTML-ENTITIES"),
        'string'  => mb_convert_encoding('Le texte :attribute doit contenir plus de :value caractères.', "UTF-8", "HTML-ENTITIES"),
        'array'   => mb_convert_encoding('Le tableau :attribute doit contenir plus de :value éléments.', "UTF-8", "HTML-ENTITIES"),
    ],
    'gte'                  => [
        'numeric' => mb_convert_encoding('La valeur de :attribute doit être supérieure ou égale à :value.', "UTF-8", "HTML-ENTITIES"),
        'file'    => mb_convert_encoding('La taille du fichier de :attribute doit être supérieure ou égale à :value kilo-octets.', "UTF-8", "HTML-ENTITIES"),
        'string'  => mb_convert_encoding('Le texte :attribute doit contenir au moins :value caractères.', "UTF-8", "HTML-ENTITIES"),
        'array'   => mb_convert_encoding('Le tableau :attribute doit contenir au moins :value éléments.', "UTF-8", "HTML-ENTITIES"),
    ],
    'image'                => mb_convert_encoding('Le champ :attribute doit être une image.', "UTF-8", "HTML-ENTITIES"),
    'in'                   => mb_convert_encoding('Le champ :attribute est invalide.', "UTF-8", "HTML-ENTITIES"),
    'in_array'             => mb_convert_encoding("Le champ :attribute n'existe pas dans :other.", "UTF-8", "HTML-ENTITIES"),
    'integer'              => mb_convert_encoding('Le champ :attribute doit être un entier.', "UTF-8", "HTML-ENTITIES"),
    'ip'                   => mb_convert_encoding('Le champ :attribute doit être une adresse IP valide.', "UTF-8", "HTML-ENTITIES"),
    'ipv4'                 => mb_convert_encoding('Le champ :attribute doit être une adresse IPv4 valide.', "UTF-8", "HTML-ENTITIES"),
    'ipv6'                 => mb_convert_encoding('Le champ :attribute doit être une adresse IPv6 valide.', "UTF-8", "HTML-ENTITIES"),
    'json'                 => mb_convert_encoding('Le champ :attribute doit être un document JSON valide.', "UTF-8", "HTML-ENTITIES"),
    'lt'                   => [
        'numeric' => mb_convert_encoding('La valeur de :attribute doit être inférieure à :value.', "UTF-8", "HTML-ENTITIES"),
        'file'    => mb_convert_encoding('La taille du fichier de :attribute doit être inférieure à :value kilo-octets.', "UTF-8", "HTML-ENTITIES"),
        'string'  => mb_convert_encoding('Le texte :attribute doit contenir moins de :value caractères.', "UTF-8", "HTML-ENTITIES"),
        'array'   => mb_convert_encoding('Le tableau :attribute doit contenir moins de :value éléments.', "UTF-8", "HTML-ENTITIES"),
    ],
    'lte'                  => [
        'numeric' => mb_convert_encoding('La valeur de :attribute doit être inférieure ou égale à :value.', "UTF-8", "HTML-ENTITIES"),
        'file'    => mb_convert_encoding('La taille du fichier de :attribute doit être inférieure ou égale à :value kilo-octets.', "UTF-8", "HTML-ENTITIES"),
        'string'  => mb_convert_encoding('Le texte :attribute doit contenir au plus :value caractères.', "UTF-8", "HTML-ENTITIES"),
        'array'   => mb_convert_encoding('Le tableau :attribute doit contenir au plus :value éléments.', "UTF-8", "HTML-ENTITIES"),
    ],
    'max'                  => [
        'numeric' => mb_convert_encoding('La valeur de :attribute ne peut être supérieure à :max.', "UTF-8", "HTML-ENTITIES"),
        'file'    => mb_convert_encoding('La taille du fichier de :attribute ne peut pas dépasser :max kilo-octets.', "UTF-8", "HTML-ENTITIES"),
        'string'  => mb_convert_encoding('Le texte de :attribute ne peut contenir plus de :max caractères.', "UTF-8", "HTML-ENTITIES"),
        'array'   => mb_convert_encoding('Le tableau :attribute ne peut contenir plus de :max éléments.', "UTF-8", "HTML-ENTITIES"),
    ],
    'mimes'                => mb_convert_encoding('Le champ :attribute doit être un fichier de type : :values.', "UTF-8", "HTML-ENTITIES"),
    'mimetypes'            => mb_convert_encoding('Le champ :attribute doit être un fichier de type : :values.', "UTF-8", "HTML-ENTITIES"),
    'min'                  => [
        'numeric' => mb_convert_encoding('La valeur de :attribute doit être supérieure ou égale à :min.', "UTF-8", "HTML-ENTITIES"),
        'file'    => mb_convert_encoding('La taille du fichier de :attribute doit être supérieure à :min kilo-octets.', "UTF-8", "HTML-ENTITIES"),
        'string'  => mb_convert_encoding('Le texte :attribute doit contenir au moins :min caractères.', "UTF-8", "HTML-ENTITIES"),
        'array'   => mb_convert_encoding('Le tableau :attribute doit contenir au moins :min éléments.', "UTF-8", "HTML-ENTITIES"),
    ],
    'not_in'               => mb_convert_encoding("Le champ :attribute sélectionné n'est pas valide.", "UTF-8", "HTML-ENTITIES"),
    'not_regex'            => mb_convert_encoding("Le format du champ :attribute n'est pas valide.", "UTF-8", "HTML-ENTITIES"),
    'numeric'              => mb_convert_encoding('Le champ :attribute doit contenir un nombre.', "UTF-8", "HTML-ENTITIES"),
    'present'              => mb_convert_encoding('Le champ :attribute doit être présent.', "UTF-8", "HTML-ENTITIES"),
    'regex'                => mb_convert_encoding('Le format du champ :attribute est invalide.', "UTF-8", "HTML-ENTITIES"),
    'required'             => mb_convert_encoding('Le champ :attribute est obligatoire.', "UTF-8", "HTML-ENTITIES"),
    'required_if'          => mb_convert_encoding('Le champ :attribute est obligatoire quand la valeur de :other est :value.', "UTF-8", "HTML-ENTITIES"),
    'required_unless'      => mb_convert_encoding('Le champ :attribute est obligatoire sauf si :other est :values.', "UTF-8", "HTML-ENTITIES"),
    'required_with'        => mb_convert_encoding('Le champ :attribute est obligatoire quand :values est présent.', "UTF-8", "HTML-ENTITIES"),
    'required_with_all'    => mb_convert_encoding('Le champ :attribute est obligatoire quand :values sont présents.', "UTF-8", "HTML-ENTITIES"),
    'required_without'     => mb_convert_encoding("Le champ :attribute est obligatoire quand :values n'est pas présent.", "UTF-8", "HTML-ENTITIES"),
    'required_without_all' => mb_convert_encoding("Le champ :attribute est requis quand aucun de :values n'est présent.", "UTF-8", "HTML-ENTITIES"),
    'same'                 => mb_convert_encoding('Les champs :attribute et :other doivent être identiques.', "UTF-8", "HTML-ENTITIES"),
    'size'                 => [
        'numeric' => mb_convert_encoding('La valeur de :attribute doit être :size.', "UTF-8", "HTML-ENTITIES"),
        'file'    => mb_convert_encoding('La taille du fichier de :attribute doit être de :size kilo-octets.', "UTF-8", "HTML-ENTITIES"),
        'string'  => mb_convert_encoding('Le texte de :attribute doit contenir :size caractères.', "UTF-8", "HTML-ENTITIES"),
        'array'   => mb_convert_encoding('Le tableau :attribute doit contenir :size éléments.', "UTF-8", "HTML-ENTITIES"),
    ],
    'starts_with'          => mb_convert_encoding('Le champ :attribute doit commencer avec une des valeurs suivantes : :values', "UTF-8", "HTML-ENTITIES"),
    'string'               => mb_convert_encoding('Le champ :attribute doit être une chaîne de caractères.', "UTF-8", "HTML-ENTITIES"),
    'timezone'             => mb_convert_encoding('Le champ :attribute doit être un fuseau horaire valide.', "UTF-8", "HTML-ENTITIES"),
    'unique'               => mb_convert_encoding('La valeur du champ :attribute est déjà utilisée.', "UTF-8", "HTML-ENTITIES"),
    'uploaded'             => mb_convert_encoding("Le fichier du champ :attribute n'a pu être téléversé.", "UTF-8", "HTML-ENTITIES"),
    'url'                  => mb_convert_encoding("Le format de l'URL de :attribute n'est pas valide.", "UTF-8", "HTML-ENTITIES"),
    'uuid'                 => mb_convert_encoding('Le champ :attribute doit être un UUID valide', "UTF-8", "HTML-ENTITIES"),
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    'custom' => [
        'attribute-name' => [
            'rule-name' => mb_convert_encoding('custom-message', "UTF-8", "HTML-ENTITIES"),
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => [
        'name'                  => mb_convert_encoding('nom', "UTF-8", "HTML-ENTITIES"),
        'username'              => mb_convert_encoding("nom d'utilisateur", "UTF-8", "HTML-ENTITIES"),
        'email'                 => mb_convert_encoding('adresse email', "UTF-8", "HTML-ENTITIES"),
        'first_name'            => mb_convert_encoding('prénom', "UTF-8", "HTML-ENTITIES"),
        'last_name'             => mb_convert_encoding('nom', "UTF-8", "HTML-ENTITIES"),
        'password'              => mb_convert_encoding('mot de passe', "UTF-8", "HTML-ENTITIES"),
        'password_confirmation' => mb_convert_encoding('confirmation du mot de passe', "UTF-8", "HTML-ENTITIES"),
        'city'                  => mb_convert_encoding('ville', "UTF-8", "HTML-ENTITIES"),
        'country'               => mb_convert_encoding('pays', "UTF-8", "HTML-ENTITIES"),
        'address'               => mb_convert_encoding('adresse', "UTF-8", "HTML-ENTITIES"),
        'phone'                 => mb_convert_encoding('téléphone', "UTF-8", "HTML-ENTITIES"),
        'mobile'                => mb_convert_encoding('portable', "UTF-8", "HTML-ENTITIES"),
        'age'                   => mb_convert_encoding('âge', "UTF-8", "HTML-ENTITIES"),
        'sex'                   => mb_convert_encoding('sexe', "UTF-8", "HTML-ENTITIES"),
        'gender'                => mb_convert_encoding('genre', "UTF-8", "HTML-ENTITIES"),
        'day'                   => mb_convert_encoding('jour', "UTF-8", "HTML-ENTITIES"),
        'month'                 => mb_convert_encoding('mois', "UTF-8", "HTML-ENTITIES"),
        'year'                  => mb_convert_encoding('année', "UTF-8", "HTML-ENTITIES"),
        'hour'                  => mb_convert_encoding('heure', "UTF-8", "HTML-ENTITIES"),
        'minute'                => mb_convert_encoding('minute', "UTF-8", "HTML-ENTITIES"),
        'second'                => mb_convert_encoding('seconde', "UTF-8", "HTML-ENTITIES"),
        'title'                 => mb_convert_encoding('titre', "UTF-8", "HTML-ENTITIES"),
        'content'               => mb_convert_encoding('contenu', "UTF-8", "HTML-ENTITIES"),
        'description'           => mb_convert_encoding('description', "UTF-8", "HTML-ENTITIES"),
        'excerpt'               => mb_convert_encoding('extrait', "UTF-8", "HTML-ENTITIES"),
        'date'                  => mb_convert_encoding('date', "UTF-8", "HTML-ENTITIES"),
        'time'                  => mb_convert_encoding('heure', "UTF-8", "HTML-ENTITIES"),
        'available'             => mb_convert_encoding('disponible', "UTF-8", "HTML-ENTITIES"),
        'size'                  => mb_convert_encoding('taille', "UTF-8", "HTML-ENTITIES"),
    ],
];
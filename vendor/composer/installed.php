<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => '__root__',
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'components/jquery' => array(
            'pretty_version' => '3.0.0',
            'version' => '3.0.0.0',
            'type' => 'component',
            'install_path' => __DIR__ . '/../components/jquery',
            'aliases' => array(),
            'reference' => '69e381248f3bb12d8e5814abe16ac172758c714d',
            'dev_requirement' => false,
        ),
        'twbs/bootstrap' => array(
            'pretty_version' => 'v4.4.1',
            'version' => '4.4.1.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twbs/bootstrap',
            'aliases' => array(),
            'reference' => 'dca1ab7d877bc4b664b43604657a2b5fbe2b4ecb',
            'dev_requirement' => false,
        ),
        'twitter/bootstrap' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => 'v4.4.1',
            ),
        ),
    ),
);

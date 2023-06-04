<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link https://skeeks.com/
 * @copyright (c) 2010 SkeekS
 * @date 10.11.2017
 */
return [

    "name" => "SkeekS CMS",
    'id' => 'skeeks-cms-app',
    
    'language' => 'ru',
    
    'timeZone' => 'UTC',
    
    'aliases'     => [
        '@common'   => '@root/common',
        '@frontend' => '@root/frontend',
        '@console'  => '@root/console',
    ],
    
    'components' => [
        
        'formatter' => [
            'defaultTimeZone' => 'UTC',
            'timeZone'        => 'Europe/Moscow',
        ],
        
        'urlManager' => [
            'rules' => [
                '~search' => 'cmsSearch/result/index',
                'content-element' => [
                    'class' => \skeeks\cms\components\urlRules\UrlRuleContentElement::class,
                ],
                'tree' => [
                    'class' => \skeeks\cms\components\urlRules\UrlRuleTree::class,
                ]
            ]
        ],
        'db' => [
            'class' => \yii\db\Connection::class,
            'dsn' => 'mysql:host=' . $params['db']['host'] . ';dbname=' . $params['db']['dbname'],
            'username' => $params['db']['username'],
            'password' => $params['db']['password'],
            
            'charset'             => 'utf8mb4', //чтобы работали символы 🌿
            'enableSchemaCache' => true,
            'schemaCacheDuration' => 3600,
        ],
        'assetManager' => [
            'linkAssets' => true,
        ],
        'cmsAgent'     => [
            'onHitsEnabled' => false,
        ],
    ]

];
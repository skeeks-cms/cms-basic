<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link https://skeeks.com/
 * @copyright (c) 2010 SkeekS
 * @date 10.11.2017
 */
return [

    'aliases'     => [
        '@common'   => '@root/common',
        '@frontend' => '@root/frontend',
        '@console'  => '@root/console',
    ],
    
    'components' => [
        'urlManager' => [
            'rules' => [
                'search' => 'cmsSearch/result',
                'content-element' => [
                    'class' => \skeeks\cms\components\urlRules\UrlRuleContentElement::class,
                ],
                'tree' => [
                    'class' => \skeeks\cms\components\urlRules\UrlRuleTree::class,
                ]
            ]
        ],
        'assetManager' => [
            'linkAssets' => true,
        ],
        'cmsAgent'     => [
            'onHitsEnabled' => true,
        ],
    ]

];
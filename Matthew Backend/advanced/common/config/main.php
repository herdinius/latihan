<?php
return [
  'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
  'components' => [
      'cache' => [
          'class' => 'yii\caching\FileCache',
      ],

      'urlManager' => [

       ],
       'urlManagerFrontEnd' => [
              'enablePrettyUrl' => true,
              'enableStrictParsing' => true,
              'showScriptName' => false,
              'rules' => [
                  [
                      'class' => 'yii\rest\UrlRule',
                      'controller' => 'frontend/controller/test'
                  ],
              ],

        ],

  ],
];

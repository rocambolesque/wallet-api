<?php

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'WalletApi\Controller\Index',
                    ),
                ),
            ),
            'exchangeRate' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/exchangeRate[/:id]',
                    'constraints' => array(
                        'id'     => '[a-z]+',
                    ),
                    'defaults' => array(
                        'controller' => 'WalletApi\Controller\ExchangeRate',
                    ),
                ),
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'WalletApi\Controller\Index' => 'WalletApi\Controller\IndexController',
            'WalletApi\Controller\ExchangeRate' => 'WalletApi\Controller\ExchangeRateController',
        ),
    ),
    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
);

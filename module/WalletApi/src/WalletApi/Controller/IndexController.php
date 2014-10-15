<?php
namespace WalletApi\Controller;

use WalletApi\Controller\AbstractRestfulJsonController;
use Zend\View\Model\JsonModel;

class IndexController extends AbstractRestfulJsonController
{
    public function getList()
    {
        return new JsonModel(array('data' => "Welcome to the Zend Framework Wallet API example"));
    }
}

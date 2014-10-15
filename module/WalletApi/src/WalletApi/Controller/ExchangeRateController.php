<?php
namespace WalletApi\Controller;

use WalletApi\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;

class ExchangeRateController extends AbstractRestfulJsonController
{
    public function get($id)
    {
        return new JsonModel(array('exchangeRate' => rand(1, 10)));
    }
}

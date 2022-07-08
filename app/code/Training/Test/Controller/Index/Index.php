<?php

declare(strict_types=1);

namespace Training\Test\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $this->getResponse()->appendBody('simple text');
    }
}

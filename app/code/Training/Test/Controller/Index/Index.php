<?php

declare(strict_types=1);

namespace Training\Test\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{
    private $resultRawFactory;

    public function __construct(
        \Magento\Framework\Controller\Result\RawFactory $resultRawFactory
    ){
        $this->resultRawFactory = $resultRawFactory;
    }
    public function execute()
    {
        $resultRaw = $this->resultRawFactory->create();
        $resultRaw->setContents('simple text');
        return $resultRaw;
    }
}

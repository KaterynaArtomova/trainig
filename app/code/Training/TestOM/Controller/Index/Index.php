<?php

namespace Training\TestOM\Controller\Index;

use Training\TestOM\Model\PlayWithTest;

class Index implements \Magento\Framework\App\ActionInterface
{

    private $playWithTest;

    public function __construct(
        PlayWithTest $playWithTest
    ) {
        $this->playWithTest = $playWithTest;
    }
    public function execute()
    {
        $this->playWithTest->run();
        exit();
    }
}

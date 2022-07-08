<?php

declare(strict_types=1);

namespace Training\Test\App;

use \Magento\Framework\App\FrontController as FrontGeneral;

class FrontController extends FrontGeneral
{
    private $logger;
    /**
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Magento\Framework\App\RouterListInterface $routerList,
        \Magento\Framework\App\ResponseInterface $response,
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->logger = $logger;
        $this->routerList = $routerList;
        $this->response = $response;
        parent::__construct($this->routerList, $this->response);
    }
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        foreach ($this->_routerList as $router) {
            $this->logger->info(get_class($router));
        }
        return parent::dispatch($request);
    }
}

<?php

namespace Training\Test\Controller\Product;

use Magento\Framework\App\Action\Context;
use \Magento\Catalog\Helper\Product\View as ViewHelper;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\View\Result\PageFactory;

class View extends \Magento\Catalog\Controller\Product\View
{
    private $customerSession;
    private $redirectFactory;

    public function __construct(
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory,
        Context $context,
        ViewHelper $viewHelper,
        ForwardFactory $resultForwardFactory,
        PageFactory $resultPageFactory
    )
    {
        $this->customerSession = $customerSession;
        $this->redirectFactory = $redirectFactory;
        parent::__construct($context, $viewHelper, $resultForwardFactory, $resultPageFactory);

    }

    public function execute()
    {
        if (!$this->customerSession->isLoggedIn()) {
            return $this->redirectFactory->create()->setPath('customer/account/login');
        }
        return parent::execute();
    }

}

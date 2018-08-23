<?php

namespace Learning\FirstModule\Controller\Page;

use Magento\Framework\App\ResponseInterface;

class View extends \Magento\Framework\App\Action\Action
{
    protected $resultJsonFactory;

    /**
     * View constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory)
    {
        $this->resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $result = $this->resultJsonFactory->create();
        $data = ['message' => 'My First Module!'];
        return $result->setData($data);
    }
}
<?php
namespace Son\HelloWorld\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;

	protected $_registry;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\Framework\Registry $registry)
	{
		$this->_pageFactory = $pageFactory;
		$this->_registry = $registry;
		return parent::__construct($context);



	}

	public function getCategory() {
		return $this->_registry->registry('Trung');
	}

	public function execute()
	{
		
		echo "Hello World";
	}
}
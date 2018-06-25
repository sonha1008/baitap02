<?php
namespace Son\HelloWorld\Block;
 
class Helloworld extends \Magento\Framework\View\Element\Template
{
	protected $_registry;

	public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->_registry = $registry;
        $this->_catalogSession = $catalogSession;
        parent::__construct($context, $data);
   	}
    public function getHelloWorldTxt()
    {
        return 'Hello world!'.$this->_registry->registry('custom_var');
    }
    public function getCatalogSession() 
    {
        return $this->_catalogSession;
    }
}
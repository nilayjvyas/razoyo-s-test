<?php
namespace Razoyo\CarProfile\Block;
use Razoyo\CarProfile\Model\RazoyoCarprofileDetailsFactory;


class MyCarInfo extends \Magento\Framework\View\Element\Template
{

    protected $razoyoModalFactory;
     protected $customerSession;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
         \Magento\Customer\Model\Session $customerSession,
       RazoyoCarprofileDetailsFactory $razoyoModalFactory,
        array $data = []
    ) {
         $this->customerSession = $customerSession;
        $this->razoyoModalFactory = $razoyoModalFactory;
        parent::__construct($context, $data);
    }
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }


  public function getMyProfileCarList()
    {
$email = $this->getCustomerEmail();

return $this->razoyoModalFactory->create()->getCollection()->addFieldToFilter('customer_email', ['eq' => $email])->load()->getData(); 

    }

   public function getCustomerEmail()
    {
      return $this->customerSession->getCustomer()->getData('email');

    }



}
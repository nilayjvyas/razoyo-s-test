<?php
namespace Razoyo\CarProfile\Block;
use Razoyo\CarProfile\Model\AllCars;

class CarInfo extends \Magento\Framework\View\Element\Template
{

 protected $customerSession;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        AllCars $allCars,
        \Magento\Customer\Model\Session $customerSession,
        array $data = []
    ) {
         $this->allCars = $allCars;
         $this->customerSession = $customerSession;
         parent::__construct($context, $data);
    }
    
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }


     public function getCarList()
    {
        $carsList  = $this->allCars->getAllCarList();
        return $carsList;
    }


     public function getCarImageById($carId)
    {
        $carsDetail  = $this->allCars->getCarDetailsById($carId);
        return $carsDetail['image'];
    }

   public function getCustomerEmail()
    {
      return $this->customerSession->getCustomer()->getData('email');
    }

}
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
        $newCarData =[];
        $carsList  = $this->allCars->getAllCarList();

        list($header, $body) = explode("\r\n\r\n", $carsList, 2);
        preg_match('/your-token: (.*)\b/', $header, $matches);
        if (isset($matches[1])) {
           $token = $matches[1];
        }

        $data = json_decode($body, true);
         if (isset($data['cars'])) {
                $cars = $data['cars'];
            }

        $newCarData['token'] = $token;
        $newCarData['carlist'] = $cars;
        return $newCarData;
    }


     public function getCarImageById($carId ,$token) 
    {
        $carsDetail  = $this->allCars->getCarDetailsById($carId , $token);
        return $carsDetail['car']['image'];
    }

   public function getCustomerEmail()
    {
      return $this->customerSession->getCustomer()->getData('email');
    }

}
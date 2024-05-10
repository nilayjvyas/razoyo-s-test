<?php
namespace Razoyo\CarProfile\Controller\Account;

use Magento\Framework\App\Action\Context;
use Razoyo\CarProfile\Model\AllCars;
use Razoyo\CarProfile\Model\RazoyoCarprofileDetailsFactory;
use Magento\Framework\App\Action\Action;

class SaveCarDetails extends Action

{
    protected $allCarModal;

    protected $razoyoModalFactory;

    protected $resultJsonFactory;

    public function __construct(
     AllCars $allCarModal,
    RazoyoCarprofileDetailsFactory $razoyoModalFactory,
    \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
    Context $context

    ) {
     $this->allCarModal = $allCarModal;
     $this->razoyoModalFactory = $razoyoModalFactory;
     $this->resultJsonFactory = $resultJsonFactory;
     parent::__construct($context);

    }


    public function execute()
    {
        $params = $this->getRequest()->getParam('checkedCarsData');

            try {
            $resultJson = $this->resultJsonFactory->create();

                foreach($params as $row){
                $rozoyo = $this->razoyoModalFactory->create(); 
                $rozoyo->setCustomerEmail($row['email']);
                $rozoyo->setCarId($row['id']);
                $rozoyo->setYear($row['year']);
                $rozoyo->setMake($row['make']);
                $rozoyo->setModel($row['model']);
                $rozoyo->setImage($row['imageUrl']);
                $rozoyo->save();
                }
                $response = ['success'=>'true','message'=>'Car is Saved in My Car Profile.'];
            } catch (\Exception $e) 
            {
                            $response = ['success'=>'false','message'=>'Error :: '.$e->getMessage()];
                
            }
    return $resultJson->setData($response);;

    }


}
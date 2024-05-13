<?php
namespace Razoyo\CarProfile\Model;

class AllCars 
{

    public function getAllCarList()
    {
        $carApiUrl = 'https://exam.razoyo.com/api/cars';
        try
        {
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => $carApiUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HEADER => true,
            ));

            return $response = curl_exec($curl);

        }catch (\Exception $e){
               throw new NoSuchEntityException( __($e->getMessage()));
        }
    }



    public function getCarDetailsById($carId , $token)
    {

 
        $carDetailUrl = 'https://exam.razoyo.com/api/cars/'.$carId;

        try
        {
            $curl = curl_init();

            curl_setopt_array($curl, array(
              CURLOPT_URL => $carDetailUrl,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Bearer ' . $token,
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($curl);
            $responseArray = json_decode($response,true);
            curl_close($curl);

            return $responseArray;

        }catch (\Exception $e){
             throw new NoSuchEntityException( __($e->getMessage()));
        }
    
    }

}



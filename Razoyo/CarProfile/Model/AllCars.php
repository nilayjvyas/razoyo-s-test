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
            ));

            $response = curl_exec($curl);

            curl_close($curl);
                return (array)json_decode($response);

        }catch (\Exception $e){
               throw new NoSuchEntityException( __($e->getMessage()));
        }
    }

    public function getCarDetailsById($carId)
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
            ));

            // $response = curl_exec($curl);

            // curl_close($curl);

           $response='{
              "id": "abcdefghijklmnop",
              "year": 2024,
              "make": "Ford",
              "model": "Focus",
              "price": 11000.99,
              "seats": 5,
              "mpg": 30,
              "image": "https://media.istockphoto.com/id/1468178137/photo/close-up-side-view-of-an-orange-luxury-sports-car.jpg?s=2048x2048&w=is&k=20&c=m1ih238W2fDS6IEzeRFAx_8GiiH7WA3wstGVjpTw8EQ="
            }';

 return (array)json_decode($response);

        }catch (\Exception $e){
             throw new NoSuchEntityException( __($e->getMessage()));
        }
    
    }

}



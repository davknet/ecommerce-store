<?php 
namespace Incl\Abs; 








abstract class ProductFetcher {
    /**
     * The base URL for the REST API.
     * @var string
     */
    protected string $apiBaseUrl;
    protected string $token ;
    protected string $end_point ;

    /**
     * Constructor to set the base URL.
     *
     * @param string $apiBaseUrl
     */
    public function __construct( string $apiBaseUrl ) {
        $this->apiBaseUrl = $apiBaseUrl;
        $this->token      =  $this->getToken();
    }





   public function  getToken():string  
   {
      return '' ;
   }



    /**
     * Abstract method to fetch products.
     * Subclasses must implement this method to fetch products from a specific API.
     *
     * @return array
     */
    abstract public function fetchProducts();

    /**
     * Helper method to perform a GET request to the API.
     *
     * @param string $endpoint
     * @return array
     */
    protected function getApiData($end_point  ) 
    {
        $url      = $this->apiBaseUrl . $end_point;
        $response = file_get_contents($url);

        if ($response === FALSE) {
            throw new Exception("Error fetching data from API");
        }

        return json_decode($response, true);
    }


     

    protected getToken()
    {
        $userInfo  = get_userdata(1); 
        $email     =  $userInfo->user_email ;
        $password  =  REST_API_PASSWORD ;
        $data      = array(
             'email'     =>  $email ,
             'password'  =>  $password 
        ); 
        $token     =  $this->generateToken(  '/store-json/v1/token' ,  $data ) ; 

    }






    protected function getProductByData( string $end_point , array $data  )
    {
        $url  = $this->apiBaseUrl . $end_point ; 
        $json_data = json_encode($data) ;
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => $url ,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $json_data  ,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->token 
        ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response, true);
    }



     private  function generateToken( string $end_point , array $data )
     {
           $data = json_encode($data) ;
           $curl = curl_init();
                curl_setopt_array($curl, array(
                CURLOPT_URL => $this->apiBaseUrl . $end_point ,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $data ,
                CURLOPT_HTTPHEADER => array(
                    'someKey: adfsgdtrebdkshgsdh3uyuyyd',
                    'Content-Type: application/json'
                ),
                ));

                $response = curl_exec($curl);

                curl_close($curl);
                return  $response;
     }

}


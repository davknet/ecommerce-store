<?php 
namespace Incl\Cls;
use Incl\Abs\ProductFetcher ;














class GetProductRestApi extends ProductFetcher 
{

    public function __construct(string $apiBaseUrl = ''  ) 
    {
        $token        = '' ;
        $apiBaseUrl   = empty($apiBaseUrl) ?  REST_API_BASE_URL : $apiBaseUrl ;
        parent::__construct( , $token  ) ;
    }


   public function fetchProducts(string $end_point , array $data )
   {  
      $products =  $this->getProductByData(  $end_point ,  $data  ) ;
      return $products ;
   }






}

<?php 
namespace Incl\Cls;
use Incl\Abs\ProductFetcher ;














class GetProductRestApi extends ProductFetcher 
{

    public function __construct(string $apiBaseUrl, string $token) 
    {
        parent::__construct($apiBaseUrl , $token  ) ;
    }


    
}

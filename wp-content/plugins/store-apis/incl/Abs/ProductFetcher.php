<?php 
namespace Incl\Abs; 








abstract class ProductFetcher {
    /**
     * The base URL for the REST API.
     * @var string
     */
    protected $apiBaseUrl;

    /**
     * Constructor to set the base URL.
     *
     * @param string $apiBaseUrl
     */
    public function __construct($apiBaseUrl) {
        $this->apiBaseUrl = $apiBaseUrl;
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
    protected function getApiData($endpoint) {
        $url = $this->apiBaseUrl . $endpoint;
        $response = file_get_contents($url);

        if ($response === FALSE) {
            throw new Exception("Error fetching data from API");
        }

        return json_decode($response, true);
    }




    protected function getProductByData()
    {
        
    }
}


<?php

namespace Williams\WholesaleBundle\Service;

use GuzzleHttp\Client;
use Williams\WholesaleBundle\Repository\CategoryRepository;
use Williams\WholesaleBundle\Repository\ManufacturerRepository;
use Williams\WholesaleBundle\Repository\ProductImageRepository;
use Williams\WholesaleBundle\Repository\ProductRepository;
use Williams\WholesaleBundle\Repository\ProductTypeRepository;

class WholesaleService {
    
    private $wholesaleUrl;
    
    public function __construct($wholesaleUrl) {        
        $this->wholesaleUrl = $wholesaleUrl;
    }
    
    public function getCategoryRepository() {
        return new CategoryRepository(new Client(['base_uri' => $this->wholesaleUrl]));
    }
    
    public function getManufacturerRepository() {
        return new ManufacturerRepository(new Client(['base_uri' => $this->wholesaleUrl]));
    }
    
    public function getProductImageRepository() {
        return new ProductImageRepository(new Client(['base_uri' => $this->wholesaleUrl]));
    }
    
    public function getProductRepository() {
        return new ProductRepository(new Client(['base_uri' => $this->wholesaleUrl]));
    }
    
    public function getProductTypeRepository() {
        return new ProductTypeRepository(new Client(['base_uri' => $this->wholesaleUrl]));
    }
    
}
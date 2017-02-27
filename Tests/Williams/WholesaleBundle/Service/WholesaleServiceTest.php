<?php

use PHPUnit\Framework\TestCase;
use Williams\WholesaleBundle\Repository\CategoryRepository;
use Williams\WholesaleBundle\Repository\ManufacturerRepository;
use Williams\WholesaleBundle\Repository\ProductImageRepository;
use Williams\WholesaleBundle\Repository\ProductRepository;
use Williams\WholesaleBundle\Repository\ProductTypeRepository;
use Williams\WholesaleBundle\Service\WholesaleService;

class WholesaleServiceTest extends TestCase {
    
    private $testUrl = "test";

    public function testGetCategoryRepository() {

        $service = new WholesaleService($this->testUrl);

        $repo = $service->getCategoryRepository();

        $this->assertInstanceOf(CategoryRepository::class, $repo);
    }

    public function testGetManufacturerRepository() {

        $service = new WholesaleService($this->testUrl);

        $repo = $service->getManufacturerRepository();

        $this->assertInstanceOf(ManufacturerRepository::class, $repo);
        
    }

    public function testGetProductImageRepository() {

        $service = new WholesaleService($this->testUrl);

        $repo = $service->getProductImageRepository();

        $this->assertInstanceOf(ProductImageRepository::class, $repo);
    }

    public function testGetProductRepository() {

        $service = new WholesaleService($this->testUrl);

        $repo = $service->getProductRepository();

        $this->assertInstanceOf(ProductRepository::class, $repo);
    }

    public function testGetProductTypeRepository() {

        $service = new WholesaleService($this->testUrl);

        $repo = $service->getProductTypeRepository();

        $this->assertInstanceOf(ProductTypeRepository::class, $repo);
    }

}

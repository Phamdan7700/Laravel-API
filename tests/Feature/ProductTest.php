<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_products()
    {
        $response = $this->getJson('/products');
        $response->assertStatus(200);
    }

    public function test_featured_products()
    {
        $response = $this->getJson('/featured-products');

        $response->assertStatus(200);
    }

    public function test_products_by_category()
    {
        $response = $this->getJson('/category/1/products');

        $response->assertStatus(200);
    }

    public function test_detail_product()
    {
        $response = $this->getJson('/product/1');

        $response->assertStatus(200);
    }
}

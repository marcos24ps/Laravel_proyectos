<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Clases\Box;

class BoxTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_box():void{

        $box=new Box('cajita');
        $this->assertTrue($box->getNombre('cajita'));
        $this->assertFalse($box->getNombre('avion'));
    }

    
}

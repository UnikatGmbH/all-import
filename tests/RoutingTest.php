<?php

namespace Unikat\AllImport\Tests;

class RoutingTest extends TestCase
{
    
    /** @test */
    public function can_see_index_page()
    {
        $response = $this->get('/all-import');
        
        $response->assertSee('All Import');
    }
}
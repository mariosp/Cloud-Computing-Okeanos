<?php
// test bench

class TestBench
{
    public function benchMd5()
    {
        for($x = 0; $x <= 100000; $x++)
        {
        hash('md5', 'Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test Test Test Test');
        }
    }

    public function benchSha1()
    {
        for($x = 0; $x <= 100000; $x++)
        {
        hash('sha1', 'Test Test Test Test Test Test Test
        Test Test Test Test Test Test Test Test Test
        Test Test Test Test Test Test Test Test Test Test Test Test
        Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test
        Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test
        Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test
        Test Test Test Test Test Test Test Test Test
        Test Test Test Test Test Test Test Test Test Test Test Test
        Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test
        Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test
        Test Test Test Test Test Test Test Test Test Test Test Test
        Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test
         Test Test Test Test Test Test Test Test Test Test Test Test');
        }
    }

    public function benchforLoop()
    {
        for ($x = 0; $x <= 100000000; $x++) {
            
        }  
    }

    public function benchWhileLoop()
    {
        $i = 0;
        while ($i <= 100000000) {
            $i++;
        }
    }

    public function benchMulty()
    {   $sum = 0;
        for ($x = 0; $x <= 100000000; $x++) {
            $sum *= $x;
        }  
    }
}

?>
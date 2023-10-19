//Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
//Butuh FrameWork PHPUnit
<?php

use PHPUnit\Framework\TestCase;

//Class yang mau di TEST.
require_once "WordCount.php";

//Class untuk run Testing.  
class SimpleTest extends TestCase
{
    public function testCountWords()
    {
        //Kita pakai class yang mau kita test
        $Wc = new WordCount();

        //Kita masukkan parameter 4 kata, yang harusnya dapat output 4. 
        $TestSentence = "My name is Joko Widodo"; //4 Kata ..
        $WordCount = $Wc->countWords($TestSentence);

        //Kita assert equal, ekspetasinya harus 4, jika benar berarti  WordCount berfungsi dengan baik.
        $this->assertEquals(5, $WordCount);
    }
}
?>
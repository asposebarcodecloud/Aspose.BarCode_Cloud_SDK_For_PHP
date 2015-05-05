<?php

use Aspose\Barcode\BarcodeApi;

class BarcodeApiTest extends PHPUnit_Framework_TestCase {
    
    protected $barcode;

    protected function setUp()
    {        
        $this->barcode = new BarcodeApi();
    }
             
    public function testGetBarcodeRecognize()
    {  
        $name = 'barcode.png';
        $type = 'Code39Standard';
        $result = $this->barcode->GetBarcodeRecognize($name, $type, $checksumValidation = null, $stripFnc = null, $rotationAngle = null, $barcodesCount = null, $rectX = null, $rectY = null, $rectWidth = null, $rectHeight = null, $storage = null, $folder = null);
        $this->assertInternalType('array', $result->Barcode);
    }
    
    public function testPostBarcodeRecognizeFromUrlorContent()
    {  
        $file = 'barcode-swagger.png';
        $url = "http://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Code_3_of_9.svg/262px-Code_3_of_9.svg.png";
        $result = $this->barcode->PostBarcodeRecognizeFromUrlorContent($type = 'Code39Standard', $checksumValidation = null, $stripFnc = null, $rotationAngle = null, $url, $file);
        $this->assertInternalType('array', $result->Barcode);
    }
        
}    
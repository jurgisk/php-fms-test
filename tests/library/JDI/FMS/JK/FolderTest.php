<?php

namespace tests\JDI\FMS\JK;
chdir(__DIR__);
require_once('../../../../../library/JDI/FMS/FolderInterface.php');
require_once('../../../../../library/JDI/FMS/JK/Folder.php');

class FolderTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var \JDI\FMS\JK\Folder
     */
    protected $folder;

    public function setUp()
    {
        $this->folder = new \JDI\FMS\JK\Folder();
    }

    public function testName()
    {
        $this->assertSame(null, $this->folder->getName());
        $this->folder->setName('big_photos');
        $this->assertSame('big_photos', $this->folder->getName());
        $this->folder->setName(123123);
        $this->assertSame('123123', $this->folder->getName());
    }

    public function testCreatedTime()
    {
        $this->assertSame(null, $this->folder->getCreatedTime());
        $newTime = new \DateTime('2013-01-01 21:20:11');
        $this->folder->setCreatedTime($newTime);
        $this->assertSame($newTime, $this->folder->getCreatedTime());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidObjectPasset()
    {
        $this->folder->setCreatedTime(new \ArrayObject());
    }

    public function testPath()
    {
        $this->assertSame(null, $this->folder->getPath());
        $this->folder->setPath('/tmp/folder1');
        $this->assertSame('/tmp/folder1', $this->folder->getPath());
        $this->folder->setPath(42534522);
        $this->assertSame('42534522', $this->folder->getPath());
    }

}

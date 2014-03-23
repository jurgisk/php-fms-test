<?php

namespace tests\JDI\FMS\JK;
chdir(__DIR__);
require_once('../../../../../library/JDI/FMS/FolderInterface.php');
require_once('../../../../../library/JDI/FMS/FileInterface.php');
require_once('../../../../../library/JDI/FMS/JK/Folder.php');
require_once('../../../../../library/JDI/FMS/JK/File.php');

use JDI\FMS\JK\Folder;

class FileTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var \JDI\FMS\JK\File
     */
    protected $file;

    public function setUp()
    {
        $this->file = new \JDI\FMS\JK\File();
    }

    public function testName()
    {
        $this->assertSame(null, $this->file->getName());
        $this->file->setName('big_photos');
        $this->assertSame('big_photos', $this->file->getName());
        $this->file->setName(123123);
        $this->assertSame('123123', $this->file->getName());
    }

    public function testSize()
    {
        $this->assertSame(null, $this->file->getSize());
        $this->file->setSize(1231255555);
        $this->assertSame(1231255555, $this->file->getSize());
        $this->file->setSize('Some string');
        $this->assertSame(0, $this->file->getSize());
    }

    public function testCreatedTime()
    {
        $this->assertSame(null, $this->file->getCreatedTime());
        $newTime = new \DateTime('2013-01-01 21:20:11');
        $this->file->setCreatedTime($newTime);
        $this->assertSame($newTime, $this->file->getCreatedTime());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidCreatedTime()
    {
        $this->file->setCreatedTime(new \ArrayObject());
    }

    public function testModifiedTime()
    {
        $this->assertSame(null, $this->file->getModifiedTime());
        $newTime = new \DateTime('2013-02-02 21:20:11');
        $this->file->setModifiedTime($newTime);
        $this->assertSame($newTime, $this->file->getModifiedTime());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidModifiedTime()
    {
        $this->file->setModifiedTime('This is not the right parameter');
    }

    public function testParentFolder()
    {
        $this->assertSame(null, $this->file->getParentFolder());
        $parentFolder = new Folder();
        $parentFolder->setCreatedTime(new \DateTime())
            ->setName('HolidayPhotos')
            ->setPath('/home/jurgis/holiday_photos');
        $this->file->setParentFolder($parentFolder);
        $this->assertSame($parentFolder, $this->file->getParentFolder());
    }

    public function testPath()
    {
        $this->assertSame(null, $this->file->getPath());
        $this->file->setName('Some_Document.txt');
        $this->assertSame(null, $this->file->getPath());

        $parentFolder = new Folder();
        $parentFolder->setCreatedTime(new \DateTime())
            ->setName('HolidayPhotos')
            ->setPath('/home/jurgis/holiday_photos');
        $this->file->setParentFolder($parentFolder);
        $this->assertSame('/home/jurgis/holiday_photos'.DIRECTORY_SEPARATOR.'Some_Document.txt', $this->file->getPath());
    }

}
<?php

namespace JDI\FMS\JK;

use JDI\FMS\FolderInterface;

class Folder implements FolderInterface {

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $createdTime;

    /**
     * @var string
     */
    private $path;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var null|FolderInterface
     */
    private $parentFolder;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = (string) $name;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * @param \DateTime $created
     * @return $this
     * @throws \InvalidArgumentException
     */
    public function setCreatedTime($created)
    {
        if (!$created instanceof \DateTime) {
            throw new \InvalidArgumentException('Created time must be an instance of DateTime object');
        }
        $this->createdTime = $created;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = (string) $path;
        return $this;
    }

    /**
     * @param int|null $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param \JDI\FMS\FolderInterface|null $parentFolder
     */
    public function setParentFolder($parentFolder)
    {
        $this->parentFolder = $parentFolder;
    }

    /**
     * @return \JDI\FMS\FolderInterface|null
     */
    public function getParentFolder()
    {
        return $this->parentFolder;
    }

} 
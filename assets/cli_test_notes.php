<?php

//Below I've tested multi folder creation, which would be nice to cover by a proper unit test


//CREATION OF ROOT, CHILD AND ANOTHER CHILD FOLDERS
/*$root = new JDI\FMS\JK\Folder();
$root->setPath('/root')->setName('Root Folder')->setCreatedTime(new \DateTime());

$child1 = new JDI\FMS\JK\Folder();
$child1->setPath('/root/folder1')
->setName('Child 1')
->setCreatedTime(new \DateTime())
->setParentFolder($root);

$child2 = new JDI\FMS\JK\Folder();
$child2->setPath('/root/folder1/subfolder1')
->setName('Sub Child 1')
->setCreatedTime(new \DateTime())
->setParentFolder($child1);

$child2 = $fs->createFolder($child2, $child1);
echo 'Parent Folder with id: '.$child1->getId().' created and child folder with id: '.$child2->getId().' created + root folder as well (can do root-get id)';*/



//TODO - HAVE A RIDICULOUS SCENARIO WHERE YOU CREATE LIKE 50 DOWN THE LINE :D



//CREATE A FILE WITH A SUBFOLDER
/*$root = new JDI\FMS\JK\Folder();
$root->setPath('/root_3')->setName('Root Folder 3')->setCreatedTime(new \DateTime());

$child1 = new JDI\FMS\JK\Folder();
$child1->setPath('/root_3/folder_3')
->setName('Child 3')
->setCreatedTime(new \DateTime())
->setParentFolder($root);

$file = new JDI\FMS\JK\File();
$file->setCreatedTime(new \DateTime())
->setName('DocumentFile.txt')
->setSize(100);
$file = $fs->createFile($file, $child1);

echo 'Parent Folder with id: '.$root->getId().' created and child folder with id: '.$child1->getId().' and a file with '.$file->getId().' created'.chr(10);*/


//Load folder which loads 2 higher level folders - Do a nice test at some point
/*$folder = $fs->loadFolder(11);
echo $folder->getId().chr(10).
$folder->getParentFolder()->getId().chr(10).
$folder->getParentFolder()->getParentFolder()->getId().chr(10);*/


//Load a file with subfolder and folder
/*$file = $fs->loadFile(3);
echo $file->getName().chr(10)
.$file->getParentFolder()->getPath().chr(10)
.$file->getParentFolder()->getParentFolder()->getPath().chr(10);*/



//-------------------------------------------------------


<?php

 namespace Mihail\SearchBundle\Entity;
 
 use Symfony\Component\Validator\Constraints as Assert;


 class FileSearch
 {
/**
 * @Assert\NotBlank()
 * @var string
 */
 	protected $searchFor;
/**
 * @var string
 */
 	protected $fileType;
/**
 * @var string
 */
 	protected $searchDir;

     //protected $depth;
 
 	public function getsearchFor()
     {
         return $this->searchFor;
     }
 
     public function setsearchFor($searchFor)
     {
         $this->searchFor = $searchFor;
     }
 
     public function getFileType()
     {
     	return $this->fileType;
     }
 
     public function setFileType($fileType)
     {
     	$this->fileType = $fileType;
     }

     public function getSearchDir()
     {
     	return $this->searchDir;
     }
 
     public function setSearchDir($searchDir)
     {
     	$this->searchDir = $searchDir;
     }
 } 

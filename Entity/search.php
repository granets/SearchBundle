<?php
// Mihail/SearchBundle/Entity/Search.php
namespace Mihail\SearchBUndle\Entity

use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is the Entity class that stores parameters
 * that are used for the search of files.
 */
class Search
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

	/**
	 * Getting and setting the search parameters
	 * for searched text, searche in type of documents
	 * and search in directory respectively
	 */
	public function getSearchFor()
	{
		return $this->searchFor;
	}

	public function setSearchFor($searchFor)
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
?>
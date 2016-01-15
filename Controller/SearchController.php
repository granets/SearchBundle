<?php

 namespace Mihail\SearchBundle\Controller;
 
 use Symfony\Bundle\FrameworkBundle\Controller\Controller;
 use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
 use Mihail\SearchBundle\Entity\FileSearch;
 use Symfony\Component\Finder\Finder;
 use Symfony\Component\HttpFoundation\Request;
 use Mihail\SearchBundle\Form\Type\SearchType;
 
 class SearchController extends Controller
 {
     /**
      * @Route("/search")
      */
     public function searchAction(Request $request)
     {
         $search = new FileSearch();
 
 		$dirList = $this->generateDirList();
 
         $form = $this->createForm(SearchType::class, $search, array('dir_list' => $dirList));
 
         $form->handleRequest($request);
 
 	    if ($form->isSubmitted() && $form->isValid()) {
 	    	$searchFor = $form->get('searchFor')->getData();
 	    	$fileType = $form->get('fileType')->getData();
 	    	$searchDir = $form->get('searchDir')->getData();
 
 	    	$finder = new Finder();
 	    	if(isset($fileType))
 	    	{
 	    		$finder->files()->name("*.$fileType");
 	    	}
 
 	    	if(isset($searchDir))
 	    	{
 	    		$finder->files()->in($searchDir);
 	    	}else{
 	    		$finder->files()->in(__DIR__);
 	    	}
 
 	    	if(isset($searchFor))
 	    	{
 	    		$finder->contains($searchFor);
 	    	}
 
 	    	if(isset($finder) && count($finder)>0)
 	    	{
 	    		echo "<h3>Found results in $searchDir: </h3><br/>";
 	    		foreach ($finder as $key => $value) {
 					echo "<h4> $value contains '$searchFor' </h4>";
 				}
 	    	}else{
 	    		echo "No content '$searchFor' in '$searchDir'";
 	    	}
 	    }
 	    
         return $this->render('MihailSearchBundle:randomsearch:search_form.html.twig', array(
             'form' => $form->createView(),
         ));
     }

     public function generatedirList()
     {
     	$path = $this->container->getParameter('kernel.root_dir') . "/../";
     	$finder = new Finder();
     	
 		$iterator = $finder
 			->ignoreUnreadableDirs()
 			->directories()
 			->depth('< 2')
 			->in($path);
 		
 		$dirList = array();
 		foreach ($iterator as $key => $value) {
 			$dirList["$value"] = "$value";
 		}
 
 		return $dirList;
     }
 }
<?php
namespace SearchBundle\Tests\Form\Type;

use Mihail\SearchBundle\Entity\FileSearch;
use Mihail\SearchBundle\Form\Type\SearchType;
use Symfony\Component\Form\Test\TypeTestCase;
/*
 * Run tests by executing command: 'phpunit -c app src/Mihail'
 * Should return 'OK (2 test, 12 assertions)'
 */
class SearchTypeTest extends TypeTestCase
{
    public function testSubmitValidData()
    {
        $formData = array(
            'searchFor' => 'Arasfgasergfj80aif',
            'fileType' => 'php',
        );
        $type = new SearchType();
        $form = $this->factory->create($type);

        $object = new FileSearch($formData);
        $object->setsearchFor('Arasfgasergfj80aif');
        $object->setFileType('php');

        $form->submit($formData);

        $this->assertTrue($form->isSynchronized());
        $this->assertEquals($object, $form->getData());

        $view = $form->createView();
        $children = $view->children;

        foreach (array_keys($formData) as $key) {
            $this->assertArrayHasKey($key, $children);
        }
    }
}

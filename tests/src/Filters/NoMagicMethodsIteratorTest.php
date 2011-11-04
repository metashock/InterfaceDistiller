<?php
require_once 'FilterIteratorTestCase.php';
class NoMagicMethodsIteratorTest extends FilterIteratorTestCase
{
    public function testIteratorWillFilterMagicMethods()
    {
        $this->assertFilterIteratorContains(
            $this->addTraitMethodWhenSupported(
                array(
                    $this->getTestClassMethod('foo'),
                    $this->gettestClassMethod('TestClass'),
                    $this->getTestClassMethod('implementedMethod'),
                    $this->getTestClassMethod('inheritedMethod'),
                    $this->gettestClassMethod('SomeClass')
                )
            )
        );
    }
}
<?php
interface DistillWithExtendingInterfacesOptionSetInterface extends Foo, Bar
{
    /**
     * @return void
     */
    public function __construct();
    public function publicFunction();
    public function publicFunctionWithParameters($a, $b, \stdClass $c, &$d, $e = array(0=>1,1=>2,2=>3,));
    public static function publicStaticFunction();
    public function __call($method, $args);
    public function publicBaseClassFunction();
}
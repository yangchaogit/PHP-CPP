<?php

/**
  *  For debugging tests
  *  
  */









var_dump( TestBaseClass\MyClass::CONSTANT1 );
var_dump( TestBaseClass\MyClass::EXP );
var_dump( TestBaseClass\MyClass::CONSTANT2 );
var_dump( TestBaseClass\MyClass::CONSTANT3 );

var_dump( TestBaseClass\MyClass::$StatProp1 );
var_dump( TestBaseClass\MyClass::$Exp );
var_dump( TestBaseClass\MyClass::$StatProp2 );
var_dump( TestBaseClass\MyClass::$StatProp3 );
TestBaseClass\MyClass::$StatProp2 = "otherval";
var_dump( TestBaseClass\MyClass::$StatProp2 );

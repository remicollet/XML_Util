--TEST--
XML_Util::splitQualifiedName() basic tests
--FILE--
<?php
require_once 'XML' . DIRECTORY_SEPARATOR . 'Util.php';

echo "TEST:  basic usage without namespace" . PHP_EOL;
$return = XML_Util::splitQualifiedName("xslt:stylesheet");
echo "namespace => " . $return['namespace'] . PHP_EOL;
echo "localPart => " . $return['localPart'] . PHP_EOL;
echo PHP_EOL;

echo "TEST:  basic usage with namespace" . PHP_EOL;
$return = XML_Util::splitQualifiedName("stylesheet", "myNs");
echo "namespace => " . $return['namespace'] . PHP_EOL;
echo "localPart => " . $return['localPart'] . PHP_EOL;
echo PHP_EOL;
?>
--EXPECT--
TEST:  basic usage without namespace
namespace => xslt
localPart => stylesheet

TEST:  basic usage with namespace
namespace => myNs
localPart => stylesheet

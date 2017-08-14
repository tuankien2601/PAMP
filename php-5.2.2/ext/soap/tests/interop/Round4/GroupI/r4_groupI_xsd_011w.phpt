--TEST--
SOAP Interop Round4 GroupI XSD 011 (php/wsdl): echoFloatMultiOccurs
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
$client = new SoapClient(dirname(__FILE__)."/round4_groupI_xsd.wsdl",array("trace"=>1,"exceptions"=>0));
$client->echoFloatMultiOccurs(array("inputFloatMultiOccurs"=>array(22.5,12.345)));
echo $client->__getlastrequest();
$HTTP_RAW_POST_DATA = $client->__getlastrequest();
include("round4_groupI_xsd.inc");
echo "ok\n";
?>
--EXPECT--
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://soapinterop.org/"><SOAP-ENV:Body><ns1:echoFloatMultiOccurs><ns1:inputFloatMultiOccurs><ns1:float>22.5</ns1:float><ns1:float>12.345</ns1:float></ns1:inputFloatMultiOccurs></ns1:echoFloatMultiOccurs></SOAP-ENV:Body></SOAP-ENV:Envelope>
<?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://soapinterop.org/"><SOAP-ENV:Body><ns1:echoFloatMultiOccursResponse><ns1:return>22.5</ns1:return><ns1:return>12.345</ns1:return></ns1:echoFloatMultiOccursResponse></SOAP-ENV:Body></SOAP-ENV:Envelope>
ok

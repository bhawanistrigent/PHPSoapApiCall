<?php 
$WSDL_PATH = '';
$soap_obj = new soapclient($WSDL_PATH); 

$params = array();
$response =  $soap_obj->WebServiceMethodNameWillComeHere($params);

if (is_soap_fault($response)) {
    return false;   
}else{
    print_r($response->WebServiceMethodNameWillComeHereReturn);
}
?>
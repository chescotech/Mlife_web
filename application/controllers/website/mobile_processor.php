<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($customersPhoneNumber)){

}else{
    
}

function process_payment($amount, $reference, $customersPhoneNumber) {
        $soap_request = '<?xml version="1.0" encoding="UTF-8"?>
                            <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:kon="http://konik.cgrate.com">
                                <soapenv:Header>
                                    <wsse:Security soapenv:mustUnderstand="1" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
                                        <wsse:UsernameToken wsu:Id="UsernameToken-1" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
                                        <wsse:Username>1510325294778</wsse:Username>
                                        <wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">G5icP8UR</wsse:Password>
                                        </wsse:UsernameToken>
                                    </wsse:Security>
                            </soapenv:Header>
                            <soapenv:Body>
                                <kon:processCustomerPayment>
                                    <transactionAmount>' . $amount . '</transactionAmount>
                                    <customerMobile>'.$customersPhoneNumber.'</customerMobile>
                                        <paymentReference>' . $reference . '</paymentReference>
                                    </kon:processCustomerPayment>
                                </soapenv:Body>
                                </soapenv:Envelope>
                                ';

        $headers = array(
            "Content-type: text/xml",
            "Accept: text/xml",
            "Cache-Control: no-cache",
           "SOAPAction: http://test.543.cgrate.co.zm:55555/Konik/KonikWs",
            "Content-length: " . strlen($soap_request),
        );

        $url = "http://test.543.cgrate.co.zm:55555/Konik/KonikWs";
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $soap_request);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        $output = curl_exec($ch);
        curl_close($ch);

       $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $output);
        return $response;
    }

    function check_payment_status($reference) {
        $soap_request = '<?xml version="1.0" encoding="UTF-8"?>
        <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:kon="http://konik.cgrate.com">
          <soapenv:Header>
              <wsse:Security soapenv:mustUnderstand="1" xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">
                 <wsse:UsernameToken wsu:Id="UsernameToken-1" xmlns:wsu="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd">
                    <wsse:Username>1510325294778</wsse:Username>
                    <wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">G5icP8UR</wsse:Password>
                 </wsse:UsernameToken>
              </wsse:Security>
        </soapenv:Header>
        <soapenv:Body>
           <kon:queryCustomerPayment>
              <paymentReference>' . $reference . '</paymentReference>
         </kon:queryCustomerPayment> 
        </soapenv:Body>
     </soapenv:Envelope>
     ';

        $headers = array(
            "Content-type: text/xml",
            "Accept: text/xml",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: http://test.543.cgrate.co.zm:55555/Konik/KonikWs",
            "Content-length: " . strlen($soap_request),
        );

        $url = "http://test.543.cgrate.co.zm:55555/Konik/KonikWs";
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $soap_request);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        $output = curl_exec($ch);
        curl_close($ch);

        $response = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $output);
        $xml = new SimpleXMLElement($response);
        $transactionStatus = $xml->xpath('//responseMessage')[0];
        //$transactionStatus = strip_tags($output);

        return $transactionStatus;
    }
    $time = time();
    $number = (int)0975704991;
    $amount =1;
    $reference = $number . date("his");
    print_r(process_payment($amount,$reference ,$number ));
    
    //echo check_payment_status($reference);
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VisaDAo
 *
 * @author choolwen
 */
class VisaDAo {

    public function generateToken($amount, $description) {
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        
        $ServiceDate = date("Y/m/d H:i:s");
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://secure.3gdirectpay.com/API/v6/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => '<?xml version="1.0" encoding="utf-8"?>
                <API3G>
                <CompanyToken>9F416C11-127B-4DE2-AC7F-D5710E4C5E0A</CompanyToken>
                <Request>createToken</Request>
                <Transaction>
                <PaymentAmount>' . $amount . '</PaymentAmount>
                <PaymentCurrency>ZMW</PaymentCurrency>
                <CompanyRef>49FKEOA</CompanyRef>
                <RedirectURL>https://mibs-test.mlife.co.zm:10443/dti_visa/website/appointment/visaPaymentRedirect/</RedirectURL>
                <BackURL>https://mibs-test.mlife.co.zm:10443/dti_visa/website/appointment/visaPaymentRedirect/</BackURL>
                <CompanyRefUnique>0</CompanyRefUnique>
                <PTL>5</PTL>
                </Transaction>
                <Services>
                  <Service>
                    <ServiceType>5525</ServiceType>
                    <ServiceDescription>' . $description . '</ServiceDescription>
                    <ServiceDate>' . $ServiceDate . '</ServiceDate>
                  </Service>
                </Services>
                </API3G>',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/xml'
            ),
        ));

        $response = curl_exec($curl);

        $oXML = new SimpleXMLElement($response);
        $TransToken = (string) $oXML->TransToken;
        return $TransToken;
    }

    public function redirectToken($token) {
        //header("https://secure.3gdirectpay.com/dpopayment.php?ID=8A334C9A-7AEB-4F6C-B4B9-C1EE71CED87A");
        echo "<script type='text/javascript'>document.location='https://secure.3gdirectpay.com/dpopayment.php?ID=" . $token . " '</script>";
    }

}

<?php

   
    function concase($select, $amount){
        
        // Define exchange rates
        $usd = 120.12;
        $euro = 131.78;
        $gbp = 157.47;
        
        // Initialize the message variable
        $msg = '';
        
        // Validate amount
        if(!is_numeric($amount) || $amount <= 0 ){
            return "Amount must be a positive number.";
        }
        
        
        
        // Check the selected currency and perform the conversion
        switch ($select){
            
            case "Select":
                return $msg = "Select a currency";
            break;
            case "USD":
              $tusd = ($amount * $usd);
             return $amount. " USD to BDT is " .$tusd;
            break;
            case "EURO":
              $teuro = ($amount * $euro);
             return $amount. " EURO to BDT is " .$teuro;
            break;
            case "GBP":
              $tgbp = ($amount * $gbp);
             return $amount. " GBP to BDT is " .$tgbp;
            break;
            default :
                return "Please select a valid currency."; // Return a message for invalid selection
        }
       
        
    }
    
   
?>
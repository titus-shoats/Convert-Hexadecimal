<?php

 
/****
@ Encode decimal to hexadecimal
@param $decimal
@ return decimal to hexadecimal conversion
***/
function encode_dec_hex($decimal){
       
      
         //Adds 8192 to the raw value, so its range is translated to [0 - 16383]

       $raw_value = $decimal;
       $range  = $raw_value + 8192;
       if($range > 0 && $range < 16383){
       	  
            return dechex($range);

       }else{
       	    return "Integer is not in the 14 bit range of  [0 - 16383] - Please Try Again ";

       }    
}



/****
@ Encode  hexadecimal to decimal - checks ranges of bytes within [0x00 - 0x7F] - then checks for range between [0 - 16383]
@param $hexadecimal
@ return hexadecimal to  decimal conversion
***/
function decode_hex_dec($hex){
       
  

       /*****Splits hexadecimal into seperate characters ****/
       
       $hex = str_split($hex);

       /*****Seperate high byte  & low byte ****/
       
       $high_byte =$hex[0].$hex[1];
       $low_byte = $hex[2].$hex[3];


     
       /*****Checks both high byte and low byte to see if bytes are within range [0x00 - 0x7F]  ****/

       $high_byte_range = preg_match('/^[0-7][a-f]/im', $high_byte, $high_byte_range_matches);
       $low_byte_range = preg_match('/^[0-7][a-f]/im', $low_byte, $low_byte_range_matches);

           /*****If bytes are within range, convert hexadecimal to decimal****/
      
       if(count($high_byte_range_matches) && count($low_byte_range_matches)){

       	      $integer = hexdec($high_byte_range_matches[0].$low_byte_range_matches[0]);
       	     


               /*****Since we are decoding, subtract 8192 from the raw value to get new converted decimal ****/

       	      $raw_value = $integer - 8192;

       	        /*****Make sure our new interger is within the range of [0 - 16383]  ****/

       	       if( $raw_value < 16383 &&  $raw_value> 0){

                      return  $raw_value;
       	         }else{
       	         	 return"Integer is not in the 14 bit range of  [0 - 16383] - Please Try Again";

       	         }

       }else{
       	   return "Hexidecimal bytes is not in the range of [0x00..0x7F] - Please Try Again";
       }
            
}




?>
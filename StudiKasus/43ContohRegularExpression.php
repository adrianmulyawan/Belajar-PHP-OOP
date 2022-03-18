<?php

# Regex Match
$matches = [];
// preg_match_all("pattern", "subject(string dicari)", "menyimpan_hasilnya")
$result = preg_match_all("/adrian|mul|awan|muhammad/i", "Muhammad Adrian Mulyawan", $matches);

var_dump($result);
// Hasil: 4
var_dump($matches);
// Hasil
/*
    array(1) {                    
        [0]=>                       
        array(4) {                  
            [0]=>                     
            string(8) "Muhammad"      
            [1]=>                     
            string(6) "Adrian"        
            [2]=>                     
            string(3) "Mul"           
            [3]=>                     
            string(4) "awan"          
        }                           
    }                             
*/

# Regex Replace
// preg_replace("pattern", "kata_pengganti", "subject")
$result = preg_replace("/anjing|memek|kontol|bangsat/i", "***", "bangsat kau cupu nd pandai main ya memek kontol bangsat");
var_dump($result);

# Regex Split
// preg_split("pattern", "subject");
$result = preg_split("/[\s,-]/", "kura-kura dalam perahu, i love you");
var_dump($result);
// Hasil
/*
    array(8) {           
        [0]=>              
        string(4) "kura"   
        [1]=>              
        string(4) "kura"   
        [2]=>              
        string(5) "dalam"  
        [3]=>              
        string(6) "perahu" 
        [4]=>              
        string(0) ""       
        [5]=>              
        string(1) "i"      
        [6]=>              
        string(4) "love"   
        [7]=>              
        string(3) "you"    
    }                                
*/
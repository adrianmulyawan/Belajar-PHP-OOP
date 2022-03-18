<?php

$dateTime = new DateTime();
# var_dump($dateTime);
# Hasil : Mengikuti waktu dari file php (php.ini)
/* 
    object(DateTime)#1 (3) {
        ["date"]=>
        string(26) "2022-03-18 07:25:37.106176"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(13) "Europe/Berlin"
    }
*/

// =================================================================================================

# Mengatur Tanggal DateTime
$dateTime->setDate(1997, 11, 1);
# Mengatur Jam DateTime
$dateTime->setTime(15, 21, 00);
var_dump($dateTime);
# Hasil
/*
    object(DateTime)#1 (3) {   
        ["date"]=>               
        string(26) "1997-11-01 15
        ["timezone_type"]=>      
        int(3)                   
        ["timezone"]=>           
        string(12) "Asia/Jakarta"
    }                          
*/

// =================================================================================================

# Menambah Satu Tahun (Dari 1997 -> 1998)
$dateTime->add(new DateInterval("P1Y"));
var_dump($dateTime);
# Hasil
/*
    object(DateTime)#1 (3) {                    
        ["date"]=>                                
        string(26) "1998-11-01 15:21:00.000000"   
        ["timezone_type"]=>                       
        int(3)                                    
        ["timezone"]=>                            
        string(12) "Asia/Jakarta"                 
    }                                                             
*/

# Mengurangkan 1 Bulan
$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);
var_dump($dateTime);
# Hasil
/*
    object(DateTime)#1 (3) {                  
        ["date"]=>                              
        string(26) "1998-10-01 15:21:00.000000" 
        ["timezone_type"]=>                     
        int(3)                                  
        ["timezone"]=>                          
        string(12) "Asia/Jakarta"               
    }                                                                                              
*/  

// =================================================================================================

# Merubah Time Zone
$now = new DateTime();
$now->setTimezone(new DateTimeZone("Europe/London"));
var_dump($now);
# Hasil:
/*
    object(DateTime)#3 (3) {
        ["date"]=>
        string(26) "2022-03-18 07:01:01.155513"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(13) "Europe/London"
    }
*/

// =================================================================================================

# Format DateTime
$formatTimeLondon = new DateTime();
$formatTimeLondon->setTimezone(new DateTimeZone("Europe/London"));
echo "Waktu dan Tangal London : " . $formatTimeLondon->format('d M Y H:i:s') . PHP_EOL;
# Hasil: Waktu dan Tangal London : 18 Mar 2022 07:10:50

// =================================================================================================

# Implementasi Format DateTime
$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 10:10:10", new DateTimeZone(
    "Asia/Jakarta"
));
var_dump($date);
# Hasil
/*
    object(DateTime)#6 (3) {
        ["date"]=>
        string(26) "2020-10-10 10:10:10.000000"
        ["timezone_type"]=>
        int(3)
        ["timezone"]=>
        string(12) "Asia/Jakarta"
    }
*/
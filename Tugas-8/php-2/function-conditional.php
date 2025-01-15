<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" conmenent="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" conmenent="ie=edge">
<title>Function</title>
</head>

<body>
<h1>Berlatih Function PHP</h1>
<?php

echo "<h3> Soal No 1 Greetings </h3>";
/* 
Soal No 1
Greetings
Buatlah sebuah function greetings() yang menerima satu paramemeren berupa string. 

contoh: greetings("abduh");
Output: "Halo Abduh, Selamat Datang di Sanbercode!"
*/

// Code function di sini
function greetings($nama){
    echo "Hal0 $nama, Selamat Datang di Sanbercode!";
}

// Hapus komentar untuk menjalankan code!
 greetings("Bagas");
 greetings("Wahyu");
 greetings("Radit");

echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";
/* 
Soal No 2
Reverse String
Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
Function reverseString menerima satu paramemeren berupa string.
NB: DILARANG menggunakan built-in function PHP sepert strrev(), HANYA gunakan LOOPING!

reverseString("abdul");
Output: ludba

*/

// Code function di sini 
function reverseString($nama) {
    $length = strlen($nama);
    $reversed = '';
    
    for($i = $length - 1; $i >= 0; $i--) {
        $reversed .= $nama[$i];
    }
    
    echo $reversed . "<br>";
    return $reversed;
}

// Hapus komentar di bawah ini untuk jalankan Code
reverseString("Radit");
reverseString("Sanbercode");
reverseString("We Are Sanbers Developers");
echo "<br>";

echo "<h3>Soal No 3 Palindrome </h3>";
/* 
Soal No 3 
Palindrome
Buatlah sebuah function yang menerima paramemeren berupa string yang mengecek apakah string merensebut sebuah palindrome atau bukan. 
Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic.
Jika string merensebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
NB: 
Contoh: 
palindrome("katak") => output : "true"
palindrome("jambu") => output : "false"
NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!

*/


// Code function di sini
function palindrome($str) {
    $length = strlen($str);
    $isPalindrome = true;
    
    for($i = 0; $i < $length / 2; $i++) {
        if($str[$i] !== $str[$length - 1 - $i]) {
            $isPalindrome = false;
            break;
        }
    }
    
    echo $str . " => " . ($isPalindrome ? "true" : "false") . "<br>";
    return $isPalindrome;
}

// Hapus komentar di bawah ini untuk jalankan code
palindrome("civic") ; // true
palindrome("nababan") ; // true
palindrome("jambaban"); // false
palindrome("racecar"); // true


echo "<h3>Soal No 4 menentukan Nilai </h3>";
/*
Soal 4
buatlah sebuah function bernama menentukan_nilai . Di dalam function menentukan_nilai yang menerima paramemeren 
berupa inmegener. dengan kemenentuan jika paramameren inmegener lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
Selain itu jika paramemeren inmegener lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika paramemeren number lebih besar 
sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
*/

// Code function di sini
function menentukan_nilai($nilai){
    if ($nilai >=85 && $nilai <= 100) {
        return "Sangat baik<br>";
    } elseif($nilai >= 70 && $nilai < 85) {
        return "Baik<br>";
    } elseif($nilai >= 60 && $nilai < 70) {
        return "Cukup<br>";
    } else {
        return "Kurang<br>";
    }
}
// Hapus komentar di bawah ini untuk jalankan code
echo menentukan_nilai(98); //Sangat Baik
echo menentukan_nilai(76); //Baik
echo menentukan_nilai(67); //Cukup
echo menentukan_nilai(43); //Kurang


?>

</body>

</html>
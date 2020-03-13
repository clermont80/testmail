<?php
    
    $token= 'hjaNFJzpjznzjfzlgMPZnbaiI*$kbzjwqqlaaf_("azsqqa&NBVX9876';
    $token = str_shuffle($token);
    $token = substr($token,0,10);
  
    mail("istox.minecraft@gmail.com", "Sujet", "<a href='confirmation.php?token=$token'>cliquez ici</a>");
    
    ?>

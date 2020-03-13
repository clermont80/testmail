<?php

    ?>

    <form action="test.php" method="POST">
            <label>name:</label>
            <input type="text" name="username"  />
            <p></p>
            <label>mail :</label>
            <input type="text" name="mail"  />
            <p></p>
            <label>password :</label>
            <input type="text" name="password"  />
            <p></p>
            <input type="submit"></input>
    </form>

    <?php

    

        try
        {
            $base = new PDO('mysql:host=localhost; dbname=base_jeutest; charset=utf8','root','root');
        }
        catch(Exception $bernard)
        {
            echo "erreur";
        }
        
        $keyconfirm =0;
        $token= 'hjaNFJzpjznzjfzlgMPZnbaiI*$kbzjwqqlaaf_("azsqqa&NBVX9876';
        $token = str_shuffle($str);
        substr($token,0,10);

        $base->query('INSERT INTO User (nom,email,password,key_mail,token) VALUES ("'.$_POST['username'].'","'.$_POST['mail'].'","'.$_POST['password'].'","'.$keyconfirm.'","'.$token.'")');

        
    






?>
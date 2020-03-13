<?php
    use PHPMailer\PHPMailer\PHPMailer;
?>

   <!-- <form action="test.php" method="POST">
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
    </form>-->

    <?php
    /*
        if(isset($_POST['username'])&&isset($_POST['mail'])&&isset($_POST['password']))
        {
            $name = $_POST['username'];
            $mail = $_POST['mail'];
            $pwd = $_POST['password'];
        
            

            try
            {
                $base = new PDO('mysql:host=localhost; dbname=base_jeutest; charset=utf8','root','root');
            }
            catch(Exception $bernard)
            {
                echo "erreur";
            }
        */
            
            $token= 'hjaNFJzpjznzjfzlgMPZnbaiI*$kbzjwqqlaaf_("azsqqa&NBVX9876';
            $token = str_shuffle($token);
            $token = substr($token,0,10);

           // $base->query('INSERT INTO User (nom,email,password,key_mail,token) VALUES ("'.$name.'","'.$mail.'","'.$pwd.'","'.$keyconfirm.'","'.$token.'")');
    
            

                <a href='confirmation.php?mail=$mail&token=$token'>cliquez ici</a>
            ";
        
            if($email->send())
            {
                echo "ok";
            }
            else
            {
                echo "nop";
            }
            ;
            
        }
            
    

        

        
    






?>
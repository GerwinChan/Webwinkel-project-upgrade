<?php


if (isset($_POST['submit_btn']))
    
{
 $username = $_POST['name'];  
 $password = $_POST['pwd'];  
    
$userData = file_get_contents('accounts.txt');
    
    $inputUser = $username . "||" . $password;
    
$isItThere = strpos($userData, $inputUser);//zoek naar een match
    
    if ($isItThere === false) {
     echo "$inputUser staat niet in de lijst<br>";
        session_start();
        
        $_SESSION['user'] = "";
        //remove all session var
        session_unset();
        //destroy the session
        session_destroy();
    }
    
    else{
     echo "$inputUser komt voor op positie $isItThere<br>";
        session_start();
        $_SESSION['user'] = $username;
        
    }
    
    
    
}

?>

<form action="" method="POST">
    <h1> Please enter your information to login</h1>
 <p>
     <label>Login Name:</label><input type="text" name="name" />
     <label>Password:</label><input type="password" name="pwd" />
    <br/>
    <br/>
</p>
    
    <p>SUBMIT FIRST AND THEN CHECK YOUR ACCOUNT!</p>
    
   
        <input type="submit" name="submit_btn" id="submit" value="Submit"/>
       
    <input type="reset" id="reset" value="reset"/>
    <br>
    <br>
     <a href="loggedIn.php"><input type="button" id="button1" value="Check you account"</a>
</form>

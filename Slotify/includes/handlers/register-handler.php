<?php 

function sanitizeFormUsername($inputText)
{
    $inputText = strip_tags($inputText); // usuwanie tagow html z formularzy
    $inputText = str_replace(" ", "_", $inputText);

    return $inputText;
}

function sanitizeFormString($inputText)
{
    $inputText = strip_tags($inputText); // usuwanie tagow html z formularzy
    $inputText = str_replace(" ", "_", $inputText);
    $inputText = ucfirst(strtolower($inputText));

    return $inputText;
}

function sanitizeFormPassword($inputText)
{
    $inputText = strip_tags($inputText); // usuwanie tagow html z formularzy

    return $inputText;
}



if (isset($_POST['registerButton'])) 
{ //isset - sprawdza czy zmienna nie ejst pusta, w tym przypadku tablica POST
     $username = sanitizeFormUsername($_POST['username']);
     $firstName = sanitizeFormString($_POST['firstName']);
     $lastName = sanitizeFormString($_POST['lastName']);
     $email = sanitizeFormString($_POST['email']);
     $email2 = sanitizeFormString($_POST['email2']);
     $password = sanitizeFormPassword($_POST['password']);
     $password2 = sanitizeFormPassword($_POST['password2']);

     $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

     if($wasSuccessful == true){
        $_SESSION['userLoggedIn'] = $username;
         
         header("Location: index.php");
     }
}

?>
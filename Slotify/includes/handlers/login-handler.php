<?php
//check if login button is pressed
if (isset($_POST['loginButton'])) {
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];
    
    //Login function
    $result = $account->login($username, $password);
    if($result == true){
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
    }
}

?>
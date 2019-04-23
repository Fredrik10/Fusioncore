<?php 
/**
 * 
 */
class users
{
    public static function verify_login($username, $password, PDO $dbh, &$errorinfo)
    {
        $sql = "SELECT password FROM users  WHERE username=:username";
        $stmt = $dbh->prepare($sql);
        $stmt -> bindParam(":username", $username);
        $stmt->execute();
        $hash =$stmt->fetchColumn();
        if(empty($hash)){
            $errorinfo =" Felaktig användarnamn";
            return false;
        }
        if(!password_verify($password, $hash)){
            $errorinfo = "Felaktig lösenord";
            return false;
        }
        return true;
    
    }
}
?>
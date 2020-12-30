<?php
@session_start();
include("admin/include/connect.php");
$db=new Database();
?>


<?php
if (isset($POST['reset-password-submit'])){

  $selector = $_POST["selector"];
  $validator = $_POST["validator"];
  $passwordRepeat = $_POST["pwd-repeat"];

  if(empty($password) || empty($paswordRepeat)){
    header("Location:../create-new-password.php?newpwd=empty");
    exit();

  }else if($password != $passwordRepeat){
    header("Location:../create-new-password.php?newpwd=pwdnotsame");
    exit();

  }

  $currentDate =date("U");

  $sql ="SELECT * FROM 'pwdReset' WHERE pwdResetSelector=? AND pwdResetExpires>=?";
  $stmt = mysqli_stmt_init($con);
  if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "There was an error!";
    exit();
  }else{
    mysqli_stmt_bind_param($stmt, "s", $selector);
    mysqli_stmt_execute($stmt);
    $result =mysqli_stmt_get_result($stmt);
    if(!$row=mysqli_fetch_assoc($result)){
      echo "you need to re-submit your reset request.";
      exit();
    }else{

      $tokenBin = hex2bin($validator);
      $tokenCheck =password_verify($tokenbin,$row["pwdResetToken"]);
      if($tokenCheck === false){
        echo "you need to re-submit your reset request.";
        exit();
      }elseif ($tokenCheck === true) {
        $tokenEmail = $row['pwdResetEmail'];

        $sql = "SELECT * FROM users WHERE emailUsers=?;";
        $stmt = mysqli_stmt_init($con);
        if(!mysqli_stmt_prepare($stmt,$sql)){
          echo "There was an error!";
          exit();
        }else{

          mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
          mysqli_stmt_execute($stmt);
          $result =mysqli_stmt_get_result($stmt);
          if(!$row=mysqli_fetch_assoc($result)){
            echo "There was an error!";
            exit();
          }else{

            $sql ="UPDATE users SET pwdUsers=? WHERE emailUsers=?";
            $stmt = mysqli_stmt_init($con);
            if(!mysqli_stmt_prepare($stmt,$sql)){
              echo "There was an error!";
              exit();
            }else{
              $newpwdHash= password_hash($password,PASSWORD_DEFAULT);
              mysqli_stmt_bind_param($stmt,"ss",$newpwdHash,$tokenEmail);
              mysqli_stmt_execute($stmt);

              $sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?;";
              $stmt = mysqli_stmt_init($conn);
              if(!mysqli_stmt_prepare($stmt,$sql)){
                echo "There was an error!";
                exit();
              }else{

                mysqli_stmt_bind_param($stmt,"s",$tokenEmail);
                mysqli_stmt_execute($stmt);
                header("Location: LLong.php?newpwd=passwordupdated");
              }


          }

        }


      }
    }
  }


}else{

  header("Location:index.php")
}

}
?>


?>

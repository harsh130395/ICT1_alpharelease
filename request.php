<?php
session_start();
include("include/connect.php");
$db=new Database();
?>

<?php

if(isset($_POST['reset-request'])){
  $selector= bin2hex(random_bytes(8));
  $token = random_bytes(32);

  $herf = "create-new-password.php?selector=" . $selector .  "&validator=" . bin2hex($token);

  $expires = date("U") + 1800;

  $userEmail= $_POST["email"];

  $sql = "DELETE FROM 'pwdReset' WHERE  pwdResetEmail=?";
  $stmt = mysqli_stmp_init($con);

  if(!mysqli_stmt_prepare($stmt,$sql)){
    echo "There was an error!";
    exit();

}else{
  $hashedToken = password_hash($token,PASSWORD_DEFAULT);

  mysqli_statement_bind_param($stmt,"ssss",$userEmail,$selector,$ashedToken,$expires);
  mysqli_stmt_execute($stmt);

}

$sql = "INSERT INTO pwdReset (pwdResetEmail,pwdResetSelector,pwdResetToken,pwdResetExpires) VALUES (?,?,?,?); ";

mysqli_statement_close($stmt);
mysqli_close($conn);
$to = $userEmail;
$subject = 'Reset Your Password for YOT';

$message ='<p>We recieved a password reset request.The link to reset your password is below.If you did not made this request you can ignore this email</p>';
$message .= '<p> Here is your pssword reset link:</br>';
$message .= '<a herf ="' .$url . ' ">' .$url . '</a></p>';

$headers = "From YOT <rajat_roy91@yahoo.com>\r\n";
$headers .= "Reply-To: rajat_roy91@yahoo.com\r\n";
$headers.= "Content-type: text-html\r\n";

mail($to,$subject,$message,$headers );

header("Location: LLong.php? reset = success");




}else {
  header("Location:index.php");
}

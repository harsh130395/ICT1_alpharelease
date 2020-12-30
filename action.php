<?php
@session_start();
include("admin/include/connect.php");
$db=new Database();
echo "A";
?>

<?php
/*if(isset($_POST['M_data']))
{
	extract($_POST);

									echo	$query="INSERT INTO `user_detail`(`name`, `email`, `phone`, `password`) VALUES ('$user_name','$user_email','$user_phone','$user_pass')";
										$run=$db->insert($query);
										if($run)
										{
											echo '<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Success !</strong> Data Has Been Submitted
									</div>
									';
										}
										else
										{
											echo '<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Oh snap!</strong> Something Went Wrong Please Try Agian... 
									</div>';
											
										}
										
	
}
*/



?>
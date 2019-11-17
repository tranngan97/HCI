<?php 
if (isset ($_POST['email'])){
	if (strpos($_POST['email'], 'boss') !== false) {
		header('Location: ../index-boss.php');
	}
	else if (strpos($_POST['email'], 'staff') !== false) {
		header('Location: ../index-staff.php');
	}
	else if (strpos($_POST['email'], 'leader') !== false) {
		header('Location: ../index-leader.php');
	} else{
		echo('Xin Lỗi tài khoản email của bạn không hợp lệ');
	}
}

?>
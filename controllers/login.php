<?php 
if (isset ($_POST['username'])){
	if (strpos($_POST['username'], 'boss') !== false) {
		header('Location: ../index-boss.php');
	}
	else if (strpos($_POST['username'], 'staff') !== false) {
		header('Location: ../index-staff.php');
	}
	else if (strpos($_POST['username'], 'leader') !== false) {
		header('Location: ../index-leader.php');
	} else{
		echo('Xin Lỗi tài khoản username của bạn không hợp lệ');
	}
}

?>
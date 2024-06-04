<?php require 'header.php'; ?>
<div align="center">アカウントを削除しますか？</div>
<?php
echo '<div align="center"><button><a href="account_delete.php?delete_id=',$_GET['id'],'">はい</a></button>';
echo '<button><a href="mypage.php">いいえ</a></button></div>';
?>
<?php require 'footer.php'; ?> 
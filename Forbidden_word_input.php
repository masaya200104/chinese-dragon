<?php require 'header.php'; ?>
<?php
    echo'<form action="Forbidden_word_add.php" method="post">';
    echo'<table align="center">';
    echo '<tr><td><div align="center">チャイニーズドラゴン</div></td></tr>';
    
    echo'<tr><td>追加する禁止ワード';
    echo'<input type="text" name="word1"></td></tr>';
    
    echo'<tr><td>追加する禁止ワード';
    echo'<input type="text" name="word2"></td></tr>';
    
    echo'<tr><td>追加する禁止ワード';
    echo'<input type="text" name="word3"></td></tr>';
    
    echo'<tr><td>';
    echo'<div align="center"><input type="submit" value="登録"></div>';
    echo'</form>';
    echo'</td></tr>';
    
    ?>
    </table>
    <div align="center"><button><a href="Forbidden_word.php#sample">戻る</a></button>
<?php require 'footer.php'; ?>
<?php
 mb_regex_encoding('UTF-8');
 $p = filter_input(INPUT_GET, 'p');
 if (mb_ereg('\A[a-zA-Z0-9]{1,5}\z',$p) === false)   {
  die('1文字以上5文字以下の英数字を入力してください');
}
?>

<?php
 $id = filter_input(INPUT_POST, 'id');
 $pwd = filter_input(INPUT_POST, 'pwd');
 $url = filter_input(INPUT_POST, 'url');
if (! empty($id) && ! empty($pwd)) {
header('Location: ' . $url);
exit();
}
?><body>
<a href="47-001.php">再ログイン</a>
</body>

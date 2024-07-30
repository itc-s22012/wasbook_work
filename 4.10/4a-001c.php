<?php
 define('TMPLDIR', '/var/www/html/work/4.10/tmpl/');
 $tmpl = filter_input(INPUT_GET, 'template');
 if (preg_match('/\A[a-z0-9]+\z/ui', $tmpl) !== 1) {
 die('templateは英数字のみ指定できます');
}
?>
<body>
<?php readfile(TMPLDIR .$tmpl . '. html'); ?>
メニュー(以下略)
</body>


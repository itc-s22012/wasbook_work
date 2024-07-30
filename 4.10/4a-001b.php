<?php
 define('TMPLDIR', '/var/www/html/work/4.10/tmpl/');
 $tmpl = basename(filter_input(INPUT_GET, 'template'));
?>
<body>
<?php readfile(TMPLDIR . $tmpl . '.html'); ?>
メニュー(以下略)
</body>

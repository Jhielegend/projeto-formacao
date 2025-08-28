<?php
define('HOST','127.0.0.1');
define('USUARIO','jebis');
define('SENHA','Seq098@$');
define('DB','coopagro');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Conexao com o banco falhou');
?>
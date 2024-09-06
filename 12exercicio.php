<?php

$cadastro = [];

$cadastro ['nome'] = ['daniel', 'pablo', 'vinizin', 'angelo', 'maycon'];

$cadastro ['email'] = ['daniel@gmail.com', 'pablo@gmail.com', 'vinizin@gmail.com', 'angelo@gmail.com', 'maycon@gmail.com'];

echo '<pre>';
print_r($cadastro);
echo '<pre>';

$cadastro ['nome'][1] = 'senai';
$cadastro ['email']['0'] = 'aluno@senai.com';
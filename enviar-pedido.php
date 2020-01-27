<?php

require('./sendgrid-php/sendgrid-php.php');

$email_site = 'samirymattos@gmail.com';
$nome_site = 'Minions Store';

$email_user = $_GET['emailPedido'];
$nome_user = $_GET['nomePedido'];

$body_content = 'Novo e-mail';
foreach ($_GET as $field => $value) {
  if ($field !== 'leaveblank' && $field !== 'dontchange' && $field !== 'enviar') {
    $sanitize_value = filter_var($value, FILTER_SANITIZE_STRING);
    $body_content .= $field . ': ' . $value . '\n';
  }
}

$email = new \SendGrid\Mail\Mail();
$email->setFrom($email_site, $nome_site);
$email->addTo($email_site, $nome_site);

$email->setReplyTo($email_user, $nome_user);

$email->setSubject('Formulário de Pedido Minions Store');
$email->addContent('text/plain', $body_content);

$apiKey = getenv('SENDGRID_API_KEY');
$sendgrid = new \SendGrid($apiKey);

try {
  $response = $sendgrid->send($email);
  print $response->statusCode() . "\n";
  print_r($response->headers());
  print $response->body() . "\n";
} catch (Exception $e) {
  echo 'Caught exception: ' . $e->getMessage() . "\n";
}

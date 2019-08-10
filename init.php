<?php
require 'vendor/autoload.php';

DEFINE('PAGSEGURO_CREDENTIALS', [
	'EMAIL' => 'YOUR_EMAIL_ACCOUNT',
	'TOKEN' => 'YOUR_TOKEN_ACCOUNT',
	'CLIENT_EMAIL' => 'YOUR_CLIENT_EMAIL'
]);

\PagSeguro\Library::initialize();
\PagSeguro\Library::cmsVersion()->setName('Teste')->setRelease('1.0.0');
\PagSeguro\Library::moduleVersion()->setName('Teste')->setRelease('1.0.0');

\PagSeguro\Configuration\Configure::setEnvironment('sandbox');
\PagSeguro\Configuration\Configure::setAccountCredentials(PAGSEGURO_CREDENTIALS['EMAIL'], PAGSEGURO_CREDENTIALS['TOKEN']);

\PagSeguro\Configuration\Configure::setCharset('UTF-8');
\PagSeguro\Configuration\Configure::setLog(true, 'pagseguro.log');

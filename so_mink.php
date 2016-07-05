<?php

require __DIR__ . '/vendor/autoload.php';

use Behat\Mink\Driver\Selenium2Driver,
	Behat\Mink\Session,
	Behat\Mink\Mink,
	Behat\MinkExtension\Context\MinkContext;

// Cria o Driver Selenium
$driver = new Selenium2Driver;

// Cria sessão para trabalhar com o navegador
$session = new Session($driver);

// Adiciona ao Mink as funcionalidades
$mink = new Mink([
	'selenium' => $session
]);

// Define selenium drive como default
$mink->setDefaultSessionName('selenium');

$context = new MinkContext;
$context->setMink($mink);

$context->visit('http://www.google.com.br');

$context->fillField('q', 'behat php');

sleep(5);

$context->clickLink('Behat Documentation');

$context->assertPageContainsText('Behat Documentation');
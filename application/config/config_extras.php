<?php
defined('BASEPATH') OR exit('Přímý přístup k tomuto skriptu není povolen.');

date_default_timezone_set("Europe/Prague");

// Version
$config['version'] = '1.0.0.0';

// Now
$config['YmdHis']  = date('Y-m-d H:i:s'); // date('Y-m-d H:i:s', strtotime('+2 hours'));

// Email
/*
$config['email_smtp_host'] = 'smtp.sendgrid.net';
$config['email_smtp_user'] = 'apikey';
$config['email_smtp_pass'] = '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';
$config['email_smtp_port'] = '587';
*/
$config['email_smtp_host'] = '';
$config['email_smtp_user'] = '';
$config['email_smtp_pass'] = '';
$config['email_smtp_port'] = '';

$config['email_smtp_user_name'] = 'Prsteny Baroň';
$config['email'] = 'info@prstenybaron.cz'; 

// Recaptcha
$config['recaptcha_sitekey'] = '6LfQBrQUAAAAAGcHc-JDI4y39VOtUrXlQ4fz4aVj';
$config['recaptcha_secret'] = '6LfQBrQUAAAAAB3CIXuFCwmK1QX7IAyNxb9H7rv6';

// Blogs
$config['content_list_num_characters_home'] = 100;
$config['content_list_num_characters_blog'] = 250;
$config['content_list_num_characters_blog_post'] = 250;



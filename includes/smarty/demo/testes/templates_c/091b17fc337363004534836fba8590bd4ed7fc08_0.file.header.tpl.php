<?php /* Smarty version 3.1.27, created on 2015-10-20 13:39:03
         compiled from "/home/admin/web/pap.cyber-panel.org/public_html/includes/smarty/demo/testes/templates/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:49001240562643f7bc2755_31676723%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '091b17fc337363004534836fba8590bd4ed7fc08' => 
    array (
      0 => '/home/admin/web/pap.cyber-panel.org/public_html/includes/smarty/demo/testes/templates/header.tpl',
      1 => 1445348318,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49001240562643f7bc2755_31676723',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_562643f7bcb2d1_89746775',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_562643f7bcb2d1_89746775')) {
function content_562643f7bcb2d1_89746775 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '49001240562643f7bc2755_31676723';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> 
		<meta name="description" content="Gestor de Servidor Jogo">
		<meta name="author" content="João Reis">
		<meta name="author" content="Hugo Rocha">
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		
		<!-- JQuery -->
		<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		
		<!-- Tema -->
		<link href="css/dashboard.css" rel="stylesheet">
		
		<!-- Latest compiled and minified JavaScript -->
		<?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<link rel="shortcut icon" type="image/ico" href="imagens/cyber.ico"/>
		
	</head>
	<body>
	<?php }
}
?>
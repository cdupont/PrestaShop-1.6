<?php /* Smarty version Smarty-3.1.19, created on 2016-12-27 10:41:16
         compiled from "/opt/enginecube/webdomains/maschere.it/home/htdocs/modules/twenga/views/templates/admin/layout/layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11324812995862373c0d1579-39348815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c52f5541fe5e72dda413d2f2c4462ca1cc8a176' => 
    array (
      0 => '/opt/enginecube/webdomains/maschere.it/home/htdocs/modules/twenga/views/templates/admin/layout/layout.tpl',
      1 => 1482831673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11324812995862373c0d1579-39348815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bodyContent' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5862373c0d95a2_12078041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5862373c0d95a2_12078041')) {function content_5862373c0d95a2_12078041($_smarty_tpl) {?>
<div class="tw-module-wrap">
    <div class="tw-module container-fluid">
        <?php echo $_smarty_tpl->getSubTemplate ("./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->tpl_vars['bodyContent']->value;?>

        <?php echo $_smarty_tpl->getSubTemplate ("./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
</div>
<?php }} ?>

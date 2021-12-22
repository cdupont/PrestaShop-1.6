<?php /* Smarty version Smarty-3.1.19, created on 2016-12-27 10:41:16
         compiled from "/opt/enginecube/webdomains/maschere.it/home/htdocs/modules/twenga/views/templates/admin/configure/step1.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6488492285862373c058f54-29279800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8d17d26ce60e3810f1f815c0a247d21a82f5da3' => 
    array (
      0 => '/opt/enginecube/webdomains/maschere.it/home/htdocs/modules/twenga/views/templates/admin/configure/step1.tpl',
      1 => 1482831673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6488492285862373c058f54-29279800',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'formSignUp' => 0,
    'formLogin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5862373c066488_14978670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5862373c066488_14978670')) {function content_5862373c066488_14978670($_smarty_tpl) {?>
<div class="tw-step tw-step1 step-wait" data-step="1">
    <p class="tw-title tw-padding">
        <b><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>84927,'step'=>1)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>84927,'step'=>1), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Etape %step% :<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>84927,'step'=>1), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</b> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>84557)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>84557), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Configurer votre compte<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>84557), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>

    <!-- ETAPE AVEC PAS DE COMPTE CREE -->
    <div class="tw-step-content tw-step-form-signup">
        <?php echo $_smarty_tpl->tpl_vars['formSignUp']->value;?>

    </div>

    <!-- ETAPE AVEC COMPTE EXISTANT -->
    <div class="tw-step-content tw-step-form-login">
        <?php echo $_smarty_tpl->tpl_vars['formLogin']->value;?>

    </div>
</div>
<?php }} ?>

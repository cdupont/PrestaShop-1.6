<?php /* Smarty version Smarty-3.1.19, created on 2016-12-27 10:41:16
         compiled from "/opt/enginecube/webdomains/maschere.it/home/htdocs/modules/twenga/views/templates/admin/layout/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7082290995862373c0dc8e1-17004733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b716b3d4a760de9bd91e4b46facced909d27952c' => 
    array (
      0 => '/opt/enginecube/webdomains/maschere.it/home/htdocs/modules/twenga/views/templates/admin/layout/header.tpl',
      1 => 1482831673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7082290995862373c0dc8e1-17004733',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlLogoHeader' => 0,
    '_basepath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5862373c0ff6e4_69686348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5862373c0ff6e4_69686348')) {function content_5862373c0ff6e4_69686348($_smarty_tpl) {?>
<div class="tw-banner">
    <div>
        <a class="tw-logo" target="_blank"
           href="<?php $_smarty_tpl->smarty->_tag_stack[] = array('addUtm', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addUtm'][0][0]->addUtm(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['urlLogoHeader']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addUtm'][0][0]->addUtm(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
            <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['_basepath']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/views/img/logo.png" alt="Twenga Solutions" class="img-responsive" width="259"
                 height="25"/>
        </a>

        <p class="banner-title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>69507)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>69507), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Référencez votre site Twenga<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>69507), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
    </div>
    <ul class="tw-list row list-unstyled">
        <li class="col-sm-4">
            <div class="tw-def tw-def1">
                <strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>69517)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>69517), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Attirez de nouveau clients<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>69517), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong><br/><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>71967)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>71967), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Plus de 30 millions d'e-consommateurs chaque mois<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>71967), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </li>
        <li class="col-sm-4">
            <div class="tw-def tw-def2">
                <strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>71977)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>71977), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Augmentez vos Ventes<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>71977), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong><br/><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>71987)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>71987), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Un trafic performant piloté pour convertir et maximiser votre revenu<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>71987), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </li>
        <li class="col-sm-4">
            <div class="tw-def tw-def3">
                <strong><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>71997)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>71997), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Optimisez vos Coûts<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>71997), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong><br/><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>72007)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>72007), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Des CPC dynamiques ajustés en temps réel selon le potentiel de conversion<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>72007), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </li>
    </ul>
</div>
<?php }} ?>

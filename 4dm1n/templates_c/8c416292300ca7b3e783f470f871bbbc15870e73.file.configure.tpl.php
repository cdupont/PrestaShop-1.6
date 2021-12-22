<?php /* Smarty version Smarty-3.1.19, created on 2016-12-27 10:41:15
         compiled from "/opt/enginecube/webdomains/maschere.it/home/htdocs/modules/twenga/views/templates/admin/configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14311526325862373bf10516-42269490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c416292300ca7b3e783f470f871bbbc15870e73' => 
    array (
      0 => '/opt/enginecube/webdomains/maschere.it/home/htdocs/modules/twenga/views/templates/admin/configure.tpl',
      1 => 1482831673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14311526325862373bf10516-42269490',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'stepClass' => 0,
    'productStatus' => 0,
    'formSignUpUrl' => 0,
    'formLoginUrl' => 0,
    'lostPasswordUrl' => 0,
    'currentStepDone' => 0,
    'currentAccountType' => 0,
    'merchantInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5862373c0530c2_19625258',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5862373c0530c2_19625258')) {function content_5862373c0530c2_19625258($_smarty_tpl) {?>
<div class="tw-install tw-box <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['stepClass']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 tw-onboarding-<?php echo mb_strtolower(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['productStatus']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'), 'UTF-8');?>
" id="tw-step-container">
    <div class="tw-box-title tw-box-content">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>84537)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>84537), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Installer Twenga Solutions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>84537), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("./configure/step1.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo $_smarty_tpl->getSubTemplate ("./configure/step2.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>

<!-- POPIN MOT DE PASSE OUBLIE -->
<?php echo $_smarty_tpl->getSubTemplate ("./configure/popin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<script type="text/javascript">
    var tw_formSignUpUrl = "<?php echo strtr($_smarty_tpl->tpl_vars['formSignUpUrl']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
    var tw_formLoginUrl = "<?php echo strtr($_smarty_tpl->tpl_vars['formLoginUrl']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
    var tw_lostPasswordUrl = "<?php echo strtr($_smarty_tpl->tpl_vars['lostPasswordUrl']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
    var tw_currentStepDone = <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currentStepDone']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
    var tw_currentAccountType = "<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['currentAccountType']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
";

    <?php if (isset($_smarty_tpl->tpl_vars['merchantInfo']->value)) {?>
    var tw_merchantInfo = <?php echo json_encode($_smarty_tpl->tpl_vars['merchantInfo']->value);?>
;
    <?php } else { ?>
    var tw_merchantInfo = null;
    <?php }?>
</script>
<?php }} ?>

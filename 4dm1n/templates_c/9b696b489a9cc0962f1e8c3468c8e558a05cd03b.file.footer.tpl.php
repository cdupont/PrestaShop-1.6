<?php /* Smarty version Smarty-3.1.19, created on 2016-12-27 10:41:16
         compiled from "/opt/enginecube/webdomains/maschere.it/home/htdocs/modules/twenga/views/templates/admin/layout/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16679676855862373c105056-14843615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b696b489a9cc0962f1e8c3468c8e558a05cd03b' => 
    array (
      0 => '/opt/enginecube/webdomains/maschere.it/home/htdocs/modules/twenga/views/templates/admin/layout/footer.tpl',
      1 => 1482831673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16679676855862373c105056-14843615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_basepath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5862373c119285_75128625',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5862373c119285_75128625')) {function content_5862373c119285_75128625($_smarty_tpl) {?>
<div class="tw-customers tw-box tw-box-content">
    <p class="tw-title "><b><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>85297)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>85297), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Clients :<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>85297), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</b> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>7445)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>7445), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Ils nous font déjà confiance<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>7445), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>

    <div class="row tw-padding">
        <div class="col-lg-5">
            <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['_basepath']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/views/img/logo-client.jpg" alt="Clients" width="383"
                 height="88" class="img-responsive"/>
        </div>
        <div class="col-lg-7">
            <div class="row priceminister">
                <div class="col-sm-5 col-md-4 col-lg-5">
                    <div class="tw-client-prems">
                        <span><em>COS</em><br/> <b>-50%</b></span>
                        <img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['_basepath']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
/views/img/priceminister1.png" alt="Priceminister"
                             width="165" height="104"/>
                    </div>
                </div>
                <div class="col-sm-7 col-md-8 col-lg-7 tw-padding-bottom">
                    <div class="tw-testimony"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>81937)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>81937), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Since activating Smart LEADS, our campaign’s Cost of Sales has been halved. This result has convinced us of the relevancy of this algorithm and played a role in our decision to invest further with Twenga.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>81937), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
                    <b><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>81947)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>81947), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Shani Nomber Search<br/>Price Comparison & Facebook Manager - PriceMinister<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>81947), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</b>
                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2016-12-27 10:41:16
         compiled from "/opt/enginecube/webdomains/maschere.it/home/htdocs/modules/twenga/views/templates/admin/configure/popin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2331659415862373c0bc531-43685725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5a97d34af7b1e908b8f4d59e7a5695d99e05182' => 
    array (
      0 => '/opt/enginecube/webdomains/maschere.it/home/htdocs/modules/twenga/views/templates/admin/configure/popin.tpl',
      1 => 1482831673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2331659415862373c0bc531-43685725',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5862373c0cb192_00079881',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5862373c0cb192_00079881')) {function content_5862373c0cb192_00079881($_smarty_tpl) {?>
<div class="modal fade" id="tw-form-lostpassword" tabindex="-1" role="dialog" aria-labelledby="popinMdp">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <p class="modal-title"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>7441)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>7441), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mot de passe oublié ?<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>7441), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
            </div>
            <div class="modal-body">
                <div id="lostPasswordMessage" style="display: none;">
                    <div class="alert alert-success" role="alert">
                        <ul class="fa-ul">
                            <li>
                                <i class="fa-tw-alert fa-tw-success fa-li"></i>

                                <p></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <form method="post" id="lostPasswordForm" action="/lostpassword/sendnewpassword">
                    <div class="form-group">
                        <label for="EMAIL"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>7519)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>7519), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Veuillez saisir votre adresse email :<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>7519), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
                        <input type="email" name="EMAIL" class="email form-control" required="required"
                               placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>43662)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>43662), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Email<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>43662), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/>
                    </div>
                    <div class="text-right"><input type="submit" id="tw-form-lostpassword-submit"
                                                   class="btn btn-red btn-lg" value="<?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>7521)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>7521), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Valider<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>7521), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"/></div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php }} ?>

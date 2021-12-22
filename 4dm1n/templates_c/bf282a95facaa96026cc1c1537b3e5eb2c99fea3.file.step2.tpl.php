<?php /* Smarty version Smarty-3.1.19, created on 2016-12-27 10:41:16
         compiled from "/opt/enginecube/webdomains/maschere.it/home/htdocs/modules/twenga/views/templates/admin/configure/step2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13790126555862373c06ab34-39826043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf282a95facaa96026cc1c1537b3e5eb2c99fea3' => 
    array (
      0 => '/opt/enginecube/webdomains/maschere.it/home/htdocs/modules/twenga/views/templates/admin/configure/step2.tpl',
      1 => 1482831673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13790126555862373c06ab34-39826043',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'twengaFeedUrl' => 0,
    'twsDomain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5862373c0b4c85_78004435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5862373c0b4c85_78004435')) {function content_5862373c0b4c85_78004435($_smarty_tpl) {?>
<div class="tw-step tw-step2 step-wait" data-step="2">
    <p class="tw-title tw-padding">
        <b><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>84927,'step'=>2)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>84927,'step'=>2), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Etape %s :<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>84927,'step'=>2), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</b> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>84577)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>84577), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Finaliser l'installation du module Twenga Solutions<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>84577), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

    </p>

    <!-- ETAPE VALIDATION SI NOUVEAU COMPTE -->
    <div class="tw-step-content tw-step-final-ongoing">
        <div class="tw-alert tw-padding-bottom tw-step-margin">
            <p>
                <i class="tw-icon tw-icon-success"></i>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>84697)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>84697), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Votre url de flux catalogue a bien été généré :<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>84697), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <a target="'_blank"
                   href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['twengaFeedUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['twengaFeedUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
            </p>
        </div>
        <div class="tw-alert tw-padding-bottom tw-step-margin">
            <div>
                <i class="tw-icon tw-icon-warning"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>84627)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>84627), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Attention : Nous avons bien pris en compte votre demande, afin de bénéficier de nos services vous devez finaliser votre inscription.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>84627), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </div>
        </div>
        <div class="button-wrap tw-padding">
            <a class="btn btn-red btn-lg tw-autolog-link" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['twsDomain']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
               target="_blank"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>84637)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>84637), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Finalisez votre inscription<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>84637), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
        </div>
    </div>

    <!-- ETAPE VALIDATION SI COMPTE EXISTANT -->
    <div class="tw-step-content tw-step-final-completed">
        <div class="tw-alert tw-padding-bottom tw-step-margin">
            <p>
                <i class="tw-icon tw-icon-success"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>84647)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>84647), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Félicitation, vous avez bien installé le Tracking Twenga !<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>84647), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </p>

            <p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>84657)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>84657), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Avec le Tracking Twenga<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>84657), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
            <ul>
                <li><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>84667)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>84667), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Je mesure la qualité de mon trafic en suivant mes taux de conversion et mes coûts d’acquisitions par catégorie.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>84667), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
                <li><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>84677)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>84677), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
J’optimise mon budget en privilégiant les offres les plus performantes grâce aux règles automatiques Twenga.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>84677), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
                <li><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>84687)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>84687), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Je sécurise ma performance grâce au suivi proactif et aux recommandations des équipes Twenga.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>84687), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</li>
            </ul>
        </div>
        <div class="tw-alert tw-padding-bottom tw-step-margin">
            <p>
                <i class="tw-icon tw-icon-success"></i>
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>84697)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>84697), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Votre url de flux catalogue a bien été généré :<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>84697), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <a target="'_blank"
                   href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['twengaFeedUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['twengaFeedUrl']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
            </p>
        </div>
        <div class="tw-alert tw-padding-bottom tw-step-margin">
            <p>
                <i class="tw-icon tw-icon-success"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>64107)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>64107), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Votre catalogue sera référencé sous 72H environ.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>64107), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </p>

            <p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>64117)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>64117), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Une fois vos produits publiés, vous recevrez un apport régulier et qualifié d’acheteurs qui vous sera facturé au CPC (Coût par Clic).<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>64117), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>

            <p><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>84737)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>84737), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Vous bénéficierez depuis votre compte Twenga solutions d’une suite complète d’outils marketing et analytiques.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>84737), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</p>
        </div>
        <div class="button-wrap tw-padding">
            <a class="btn btn-red btn-lg tw-autolog-link" href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['twsDomain']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
               target="_blank"><?php $_smarty_tpl->smarty->_tag_stack[] = array('tr', array('_id'=>84727)); $_block_repeat=true; echo Twenga_Services_Lang::trans(array('_id'=>84727), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Accéder à votre interface<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Twenga_Services_Lang::trans(array('_id'=>84727), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</a>
        </div>
    </div>
</div>
<?php }} ?>

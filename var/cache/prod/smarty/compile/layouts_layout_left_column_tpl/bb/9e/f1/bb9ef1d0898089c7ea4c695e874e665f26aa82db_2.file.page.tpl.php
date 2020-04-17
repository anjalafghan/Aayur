<?php
/* Smarty version 3.1.33, created on 2020-04-16 16:48:58
  from '/home/aayurshoppy/public_html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e983f22d15a61_33007122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb9ef1d0898089c7ea4c695e874e665f26aa82db' => 
    array (
      0 => '/home/aayurshoppy/public_html/themes/classic/templates/page.tpl',
      1 => 1587018587,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e983f22d15a61_33007122 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8850268375e983f22d0f796_90180953', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_14909018875e983f22d10153_49850583 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_21099532745e983f22d0fc04_62148158 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14909018875e983f22d10153_49850583', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_16942489865e983f22d13ee6_76612321 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_3209890995e983f22d14484_29248191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12100644055e983f22d13aa7_74214408 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16942489865e983f22d13ee6_76612321', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3209890995e983f22d14484_29248191', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_11437035745e983f22d15068_63911312 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_11986398805e983f22d14cc7_23799429 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11437035745e983f22d15068_63911312', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_8850268375e983f22d0f796_90180953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8850268375e983f22d0f796_90180953',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_21099532745e983f22d0fc04_62148158',
  ),
  'page_title' => 
  array (
    0 => 'Block_14909018875e983f22d10153_49850583',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_12100644055e983f22d13aa7_74214408',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16942489865e983f22d13ee6_76612321',
  ),
  'page_content' => 
  array (
    0 => 'Block_3209890995e983f22d14484_29248191',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_11986398805e983f22d14cc7_23799429',
  ),
  'page_footer' => 
  array (
    0 => 'Block_11437035745e983f22d15068_63911312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21099532745e983f22d0fc04_62148158', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12100644055e983f22d13aa7_74214408', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11986398805e983f22d14cc7_23799429', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}

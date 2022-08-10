<?php
/* Smarty version 3.1.43, created on 2022-08-09 14:46:58
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62f26552bfe0b7_89054388',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1659957226,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_62f26552bfe0b7_89054388 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Sliderbehållare">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-IT&amp;utm_content=download">
            <figure>
              <img src="http://localhost/prestashop_prod/modules/ps_imageslider/images/6d002dc6d564627a4245024c527d9aab1befbefc_Frame 1.png" alt="sample-1" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">HYDRAULIC COMPONENTS</h2>
                  <div class="caption-description"><p>Wide range of pumps, motors, valves, cylinders and customized manifolds. Components and System solutions.</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://www.prestashop.com/?utm_source=back-office&amp;utm_medium=v17_homeslider&amp;utm_campaign=back-office-IT&amp;utm_content=download">
            <figure>
              <img src="http://localhost/prestashop_prod/modules/ps_imageslider/images/fea8f40757e29869923fbbbd07f136b30b6dfeeb_Frame 2.png" alt="sample-2" loading="lazy" width="1110" height="340">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">HYDRAULIC &amp; INDUSTRIAL HOSES</h2>
                  <div class="caption-description"><p>Hoses and fittings for all applications. Manipulated tubes and hybrid solutions. Own R&amp;D, manufacturing with premium quality.</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Karusellknappar">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Föregående">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Nästa">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}

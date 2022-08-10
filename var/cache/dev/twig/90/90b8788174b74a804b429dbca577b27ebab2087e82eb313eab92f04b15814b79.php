<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__1b923b154ef959a72eb5e99799b18d6bac509c8405064aefbe3e27f1c1a7573e */
class __TwigTemplate_442dec3ebdfffa736904aba6530a653813bcd01b6374fa81cf3e6df553a7dca8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__1b923b154ef959a72eb5e99799b18d6bac509c8405064aefbe3e27f1c1a7573e"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__1b923b154ef959a72eb5e99799b18d6bac509c8405064aefbe3e27f1c1a7573e"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"it\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop_prod/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop_prod/img/app_icon.png\" />

<title>Valute • Test</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminCurrencies';
    var iso_user = 'it';
    var lang_is_rtl = '0';
    var full_language_code = 'it';
    var full_cldr_language_code = 'it-IT';
    var country_iso_code = 'IT';
    var _PS_VERSION_ = '1.7.8.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'È stato effettuato un nuovo ordine nel tuo negozio.';
    var order_number_msg = 'Numero dell\\'ordine: ';
    var total_msg = 'Totale: ';
    var from_msg = 'Da: ';
    var see_order_msg = 'Vedi quest\\'ordine';
    var new_customer_msg = 'Un nuovo cliente si è registrato nel tuo negozio.';
    var customer_name_msg = 'Nome cliente: ';
    var new_msg = 'Al tuo negozio è stato inviato un nuovo messaggio.';
    var see_msg = 'Leggi questo messaggio';
    var token = 'd3e2d74d865fdbfa4f4f60c907ebf066';
    var token_admin_orders = tokenAdminOrders = '246469da49bc114f1df8f52ecde254a5';
    var token_admin_customers = '6c833b5b4f1791bf24431d15b1536bab';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '1f62631f077a49b258b024e7f1932ce5';
    var currentIndex = 'index.php?controller=AdminCurrencies';
    var employee_token = '331a58288d5d511fc558a23f6d0eacc2';
    var choose_language_translate = 'Scegli la lingua:';
    var default_language = '1';
    var admin_modules_link = '/prestashop_prod/admin493gjdi3u/index.php/improve/modules/catalog/recommended?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU';
    var admin_notification_get_link = '/prestashop_prod/admin493gjdi3u/index.p";
        // line 42
        echo "hp/common/notifications?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop_prod/admin493gjdi3u/index.php/common/notifications/ack?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU';
    var tab_modules_list = '';
    var update_success_msg = 'Aggiornato con successo';
    var errorLogin = 'PrestaShop non ha potuto accedere ad Addons. Si prega di controllare le tue credenziali e la tua connessione Internet.';
    var search_product_msg = 'Cerca un prodotto';
  </script>

      <link href=\"/prestashop_prod/admin493gjdi3u/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/admin493gjdi3u/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/modules/ps_checkout/views/css/incompatible-banner.css?version=2.20.1\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/prestashop_prod\\/admin493gjdi3u\\/\";
var baseDir = \"\\/prestashop_prod\\/\";
var changeFormLanguageUrl = \"\\/prestashop_prod\\/admin493gjdi3u\\/index.php\\/configure\\/advanced\\/emp";
        // line 64
        echo "loyees\\/change-form-language?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop_prod/admin493gjdi3u/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/js/admin.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/admin493gjdi3u/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/js/tools.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/admin493gjdi3u/themes/default/js/vendor/nv.d3.min.js\"";
        // line 82
        echo "></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop_prod/admin493gjdi3u/index.php/common/notifications?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop_prod\\/admin493gjdi3u\\/index.php?controller=AdminGamification&token=ab7bcbe955bd5ca2b4f6dc046bc08516\";
            var current_id_tab = 70;
        </script>

";
        // line 106
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-it admincurrencies\"
  data-base-url=\"/prestashop_prod/admin493gjdi3u/index.php\"  data-token=\"pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminDashboard&amp;token=961634f2f16e1aaa7fe1e5112adf868a\"></a>
      <span id=\"shop_version\">1.7.8.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accesso Veloce
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php/improve/modules/manage?token=d0cfaf0ce0ce22617e5c5c46c2da2c6a\"
                 data-item=\"Moduli installati\"
      >Moduli installati</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php/sell/catalog/categories/new?token=d0cfaf0ce0ce22617e5c5c46c2da2c6a\"
                 data-item=\"Nuova categoria\"
      >Nuova categoria</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php/sell/catalog/products/new?token=d0cfaf0ce0ce22617e5c5c46c2da2c6a\"
                 data-item=\"Nuovo prodotto\"
      >Nuovo prodotto</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=c1a221726f293a1946174b58391ccfd0\"
                 data-item=\"Nuovo voucher\"
 ";
        // line 142
        echo "     >Nuovo voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminOrders&amp;token=246469da49bc114f1df8f52ecde254a5\"
                 data-item=\"Ordini\"
      >Ordini</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=a73e54b1edd8d62cb08a92103f6c0145\"
                 data-item=\"Valutazione catalogo\"
      >Valutazione catalogo</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"148\"
        data-icon=\"icon-AdminParentLocalization\"
        data-method=\"add\"
        data-url=\"index.php/improve/international/currencies\"
        data-post-link=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminQuickAccesses&token=3a56d63028739239c700c29c2097a398\"
        data-prompt-text=\"Da\\' un nome a questo shortcut:\"
        data-link=\"Valute - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Aggiungi a QuickAccess la pagina corrente
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminQuickAccesses&token=3a56d63028739239c700c29c2097a398\">
      <i class=\"material-icons\">settings</i>
      Gestisci gli accessi rapidi
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop_prod/admin493gjdi3u/index.php?controller=AdminSearch&amp;token=9a1593418363ecc8d5a2912cb38c2627\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"t";
        // line 181
        echo "ext\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Ricerca (es. riferimento prodotto, nome cliente...)\" aria-label=\"Barra di ricerca\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Ovunque
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Ovunque\" href=\"#\" data-value=\"0\" data-placeholder=\"Cosa hai bisogno di trovare?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Ovunque</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome prodotto, riferimento, ecc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogo</a>
        <a class=\"dropdown-item\" data-item=\"Clienti per nome\" href=\"#\" data-value=\"2\" data-placeholder=\"Nome\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clienti per nome</a>
        <a class=\"dropdown-item\" data-item=\"Clienti per indirizzo IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clienti per indirizzo IP</a>
        <a class=\"dropdown-item\" data-item=\"Ordini\" href=\"#\" data-value=\"3\" data-placeholder=\"ID ordine\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Ordini</a>
        <a class=\"dropdown-item\" data-item=\"Fatture\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero fattura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Fatture</a>
        <a class=\"dropdown-item\" data-item=\"Carrelli\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrello\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrelli</a>
        <a class=\"dropdown-item\" data-item=\"Moduli\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome modu";
        // line 195
        echo "lo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduli</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CERCA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class='text-left'><strong>Il tuo negozio si trova in modalità debug.</strong></p><p class='text-left'>Verranno mostrati tutti gli errori e i messaggi PHP. Quando non ne avrai più bisogno, <strong>escludi</strong> questa modalità.</p>\"
             href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/performance/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Modalità di debug</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop_prod/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Vai al negozio</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div";
        // line 240
        echo " class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Ordini<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clienti<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messaggi<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Per ora nessun nuovo ordine :(<br>
              Hai consultato i tuoi <strong><a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=4fd8be6f084eba5b30d63b14e7c4ee05\">carrelli abbandonati</a></strong>?<br>Il tuo prossimo ordine potrebbe essere nascosto lì!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  ";
        // line 290
        echo "empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Per ora nessun nuovo cliente :(<br>
              Sei stato attivo sui social media in questi giorni?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Per ora non ci sono nuovi messaggi.<br>
              Sembra che tutti i tuoi clienti siano felici :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      da <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrato <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http:";
        // line 341
        echo "//localhost/prestashop_prod/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Bentornato, Andrea</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/employees/1/edit?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\">
      <i class=\"material-icons\">edit</i>
      <span>Il tuo profilo</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Risorse</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Addestramento</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Trova un Esperto</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Marketplace di PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centro Assistenza</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminLogin&amp;logout=1&amp;to";
        // line 356
        echo "ken=2c5b3214fed9520af3bac0b3953bf8d7\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Esci</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/employees/toggle-navigation?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminDashboard&amp;token=961634f2f16e1aaa7fe1e5112adf868a\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pannello di controllo</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendi</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/orders/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Ordini
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                     ";
        // line 404
        echo "               keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/orders/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Ordini
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/orders/invoices/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Fatture
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/orders/credit-slips/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Buoni sconto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                             ";
        // line 435
        echo " <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/orders/delivery-slips/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Bolle di consegna
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminCarts&amp;token=4fd8be6f084eba5b30d63b14e7c4ee05\" class=\"link\"> Carrello della spesa
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/catalog/products?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                               ";
        // line 465
        echo "                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/catalog/products?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Prodotti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/catalog/categories?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Categorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/catalog/monitoring/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Monitoraggio
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminAttributesGroups&amp;token=47f98bde4b7bad94a813c1b2d";
        // line 493
        echo "2fde70b\" class=\"link\"> Attributi e Funzionalità
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/catalog/brands/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Marche &amp; Fornitori
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/attachments/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> File
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminCartRules&amp;token=c1a221726f293a1946174b58391ccfd0\" class=\"link\"> Buoni sconto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"";
        // line 524
        echo "23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/stocks/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Magazzino
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/customers/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clienti
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/customers/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Clienti
                                </a>
                              </li>

                                                                                  
                              
       ";
        // line 556
        echo "                                                     
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/addresses/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Indirizzi
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminCustomerThreads&amp;token=1f62631f077a49b258b024e7f1932ce5\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servizio clienti
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminCustomerThreads&amp;token=1f62631f077a49b258b024e7f1";
        // line 583
        echo "932ce5\" class=\"link\"> Servizio clienti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/customer-service/order-messages/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Messaggi d&#039;ordine
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminReturn&amp;token=9a9cd1e9790059b6b57ca18ee06688ff\" class=\"link\"> Restituzione Prodotto
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/modules/metrics/legacy/stats?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiche
                      </span>
                                                    <i class=\"materia";
        // line 615
        echo "l-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/modules/metrics/legacy/stats?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Statistiche
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/modules/metrics?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Migliora</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone ha";
        // line 652
        echo "s_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/modules/manage?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduli
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/modules/manage?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Gestione Moduli
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/modules/addons/modules/catalog?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Catalogo Moduli
                                </a>
                              </li>

                                                                                                                                                      ";
        // line 679
        echo "                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/design/themes/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/design/themes/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Tema &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/modules/addons";
        // line 708
        echo "/themes/catalog?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Catalogo dei Temi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/design/mail_theme/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/design/cms-pages/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Pagine
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/design/modules/positions/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Posizioni
                                </a>
                              </li>

                                                                                  
                              
                                                            
                      ";
        // line 739
        echo "        <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminImages&amp;token=4953b74bd1ab1ae036f1162d834ae783\" class=\"link\"> Impostazioni immagine
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/modules/link-widget/list?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Elenco Link
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminCarriers&amp;token=7f84999bebe8610a65c38f91cafd822e\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Spedizione
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-";
        // line 768
        echo "collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminCarriers&amp;token=7f84999bebe8610a65c38f91cafd822e\" class=\"link\"> Mezzi di spedizione
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/shipping/preferences/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Impostazioni
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/payment/payment_methods?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pagamento
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                  ";
        // line 799
        echo "                          </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/payment/payment_methods?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Metodi di Pagamento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/payment/preferences?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Impostazioni
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/localization/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internazion";
        // line 828
        echo "ale
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/localization/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Localizzazione
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/zones/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Località
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/taxes/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Tasse
                     ";
        // line 856
        echo "           </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/translations/settings?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Traduzioni
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminPsfacebookModule&amp;token=4ddba6f2afb5715b5bfc65305988304c\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                          ";
        // line 888
        echo "      <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminPsfacebookModule&amp;token=4ddba6f2afb5715b5bfc65305988304c\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=73366f884a038cf0e5d7200a87bfbcb4\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configura</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/shop/preferences/preferences?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parametri Negozio
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
        ";
        // line 924
        echo "                                                    </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/shop/preferences/preferences?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Generale
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/shop/order-preferences/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Impostazioni Ordine
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/shop/product-preferences/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Prodotti
                                </a>
                              </li>

                                                                                  
                              
                                      ";
        // line 953
        echo "                      
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/shop/customer-preferences/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Impostazioni clienti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/shop/contacts/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Contatto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/shop/seo-urls/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Traffico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminSearchConf&amp;token=1a2f2716b1b6186b3bfd6174ebc8fcad\" class=\"link\"> Cerca
                     ";
        // line 980
        echo "           </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminGamification&amp;token=ab7bcbe955bd5ca2b4f6dc046bc08516\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/system-information/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parametri Avanzati
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-A";
        // line 1011
        echo "dminInformation\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/system-information/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Informazioni
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/performance/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Prestazioni
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/administration/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Amministrazione
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/emails/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Email
                                </a>
                              </li>

                                                                      ";
        // line 1040
        echo "            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/import/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Importa
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/employees/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Dipendenti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/sql-requests/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/logs/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=";
        // line 1068
        echo "\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/webservice-keys/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/feature-flags/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Funzionalità Sperimentali
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Localizzazione</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/currencies/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" aria-current=\"page\">Valute</a>
 ";
        // line 1109
        echo "           </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Valute          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/currencies/new?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\"                  title=\"Aggiungi nuova valuta\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Aggiungi nuova valuta
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aiuto\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop_prod/admin493gjdi3u/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fit%252Fdoc%252FAdminCurrencies%253Fversion%253D1.7.8.7%2526country%253Dit/Aiuto?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\"
                   id=\"product_form_open_help\"
                >
                  Aiuto
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                ";
        // line 1150
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/localization/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" id=\"subtab-AdminLocalization\" class=\"nav-link tab \" data-submenu=\"68\">
                      Localizzazione
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/languages/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" id=\"subtab-AdminLanguages\" class=\"nav-link tab \" data-submenu=\"69\">
                      Lingue
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/currencies/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" id=\"subtab-AdminCurrencies\" class=\"nav-link t";
        // line 1167
        echo "ab active current\" data-submenu=\"70\">
                      Valute
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/geolocation/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" id=\"subtab-AdminGeolocation\" class=\"nav-link tab \" data-submenu=\"71\">
                      Geolocalizzazione
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add\"";
        // line 1193
        echo "
              href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/currencies/new?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\"              title=\"Aggiungi nuova valuta\"            >
              Aggiungi nuova valuta
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aiuto\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop_prod/admin493gjdi3u/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fit%252Fdoc%252FAdminCurrencies%253Fversion%253D1.7.8.7%2526country%253Dit/Aiuto?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\"
            >
              Aiuto
            </a>
                        </div>
    </div>
  </div>
  <!-- begin C:\\wamp64\\www\\prestashop_prod/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Moduli e Servizi raccomandati',
        'Close': 'Chiudi',
      },
      recommendedModulesUrl: '/prestashop_prod/admin493gjdi3u/index.php/modules/addons/modules/recommended?tabClassName=AdminCurrencies&_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end C:\\wamp64\\www\\prestashop_prod/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1239
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    La versione mobile di questa pagina non è ancora disponibile.
  </p>
  <p class=\"mt-2\">
    Si prega di utilizzare un computer desktop per accedere a questa pagina, fin quando non sarà stata adattata ai dispositivi mobili.
  </p>
  <p class=\"mt-2\">
    Grazie.
  </p>
  <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminDashboard&amp;token=961634f2f16e1aaa7fe1e5112adf868a\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Indietro
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-IT&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/it/login?email=andrea%40alfagomma.dev&amp;firstname=Andrea&amp;lastname=Fiorino&amp;website=http%3A%2F%2Flocalhost%2Fprestashop_prod%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-IT&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop_prod/admin493gjdi3u/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Collega il tuo negozio al marketplace di PrestaShop al fine di importare auto";
        // line 1285
        echo "maticamente tutti i tuoi acquisti di Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Non hai ancora un account?</h4>
\t\t\t\t\t\t<p class='text-justify'>Scopri la potenza di PrestaShop Addons! Esplora il Market Ufficiale di PrestaShop e trovi oltre 3500 moduli innovativi e temi che ottimizzano i rapporti di conversione, incrementano il traffico, fidelizzano il cliente e massimizzano i tuoi ritorni.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Collegati con PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/it/forgot-your-password\">Ho dimenticato la mia password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/it/login?email=andrea%40alfagomma.dev&amp;firstname=Andrea&amp;lastname=Fiorino&amp;website=http%3A%2F%2Flocalhost%2Fprestashop_prod%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-IT&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrea un account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-";
        // line 1325
        echo "6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Accedi
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1347
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 106
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1239
    public function block_content_header($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 1347
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__1b923b154ef959a72eb5e99799b18d6bac509c8405064aefbe3e27f1c1a7573e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1595 => 1347,  1530 => 1239,  1497 => 106,  1482 => 1347,  1458 => 1325,  1416 => 1285,  1364 => 1239,  1316 => 1193,  1288 => 1167,  1269 => 1150,  1226 => 1109,  1183 => 1068,  1153 => 1040,  1122 => 1011,  1089 => 980,  1060 => 953,  1029 => 924,  991 => 888,  957 => 856,  927 => 828,  896 => 799,  863 => 768,  832 => 739,  799 => 708,  768 => 679,  739 => 652,  700 => 615,  666 => 583,  637 => 556,  603 => 524,  570 => 493,  540 => 465,  508 => 435,  475 => 404,  425 => 356,  408 => 341,  355 => 290,  303 => 240,  256 => 195,  240 => 181,  199 => 142,  158 => 106,  132 => 82,  112 => 64,  88 => 42,  45 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"it\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop_prod/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop_prod/img/app_icon.png\" />

<title>Valute • Test</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminCurrencies\\';
    var iso_user = \\'it\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'it\\';
    var full_cldr_language_code = \\'it-IT\\';
    var country_iso_code = \\'IT\\';
    var _PS_VERSION_ = \\'1.7.8.7\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'È stato effettuato un nuovo ordine nel tuo negozio.\\';
    var order_number_msg = \\'Numero dell\\\\\\'ordine: \\';
    var total_msg = \\'Totale: \\';
    var from_msg = \\'Da: \\';
    var see_order_msg = \\'Vedi quest\\\\\\'ordine\\';
    var new_customer_msg = \\'Un nuovo cliente si è registrato nel tuo negozio.\\';
    var customer_name_msg = \\'Nome cliente: \\';
    var new_msg = \\'Al tuo negozio è stato inviato un nuovo messaggio.\\';
    var see_msg = \\'Leggi questo messaggio\\';
    var token = \\'d3e2d74d865fdbfa4f4f60c907ebf066\\';
    var token_admin_orders = tokenAdminOrders = \\'246469da49bc114f1df8f52ecde254a5\\';
    var token_admin_customers = \\'6c833b5b4f1791bf24431d15b1536bab\\';
    var token_admin_customer_threads = tokenAdminCustomerThreads = \\'1f62631f077a49b258b024e7f1932ce5\\';
    var currentIndex = \\'index.php?controller=AdminCurrencies\\';
    var employee_token = \\'331a58288d5d511fc558a23f6d0eacc2\\';
    var choose_language_translate = \\'Scegli la lingua:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/prestashop_prod/admin493gjdi3u/index.php/improve/modules/catalog/recommended?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\\';
    var admin_notification_get_link = \\'/prestashop_prod/admin493gjdi3u/index.p' | raw }}{{ 'hp/common/notifications?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/prestashop_prod/admin493gjdi3u/index.php/common/notifications/ack?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Aggiornato con successo\\';
    var errorLogin = \\'PrestaShop non ha potuto accedere ad Addons. Si prega di controllare le tue credenziali e la tua connessione Internet.\\';
    var search_product_msg = \\'Cerca un prodotto\\';
  </script>

      <link href=\"/prestashop_prod/admin493gjdi3u/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/admin493gjdi3u/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/modules/ps_mbo/views/css/recommended-modules.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/modules/ps_checkout/views/css/incompatible-banner.css?version=2.20.1\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop_prod/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\\\/prestashop_prod\\\\/admin493gjdi3u\\\\/\";
var baseDir = \"\\\\/prestashop_prod\\\\/\";
var changeFormLanguageUrl = \"\\\\/prestashop_prod\\\\/admin493gjdi3u\\\\/index.php\\\\/configure\\\\/advanced\\\\/emp' | raw }}{{ 'loyees\\\\/change-form-language?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\\\u20ac\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\\\u00a0\\\\u00a4\",\"negativePattern\":\"-#,##0.00\\\\u00a0\\\\u00a4\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/prestashop_prod/admin493gjdi3u/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/js/admin.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/admin493gjdi3u/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/js/tools.js?v=1.7.8.7\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/admin493gjdi3u/themes/default/js/vendor/nv.d3.min.js\"' | raw }}{{ '></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/modules/ps_mbo/views/js/recommended-modules.js?v=2.0.1\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop_prod/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/prestashop_prod/admin493gjdi3u/index.php/common/notifications?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\\',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script>
            var admin_gamification_ajax_url = \"http:\\\\/\\\\/localhost\\\\/prestashop_prod\\\\/admin493gjdi3u\\\\/index.php?controller=AdminGamification&token=ab7bcbe955bd5ca2b4f6dc046bc08516\";
            var current_id_tab = 70;
        </script>

' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-it admincurrencies\"
  data-base-url=\"/prestashop_prod/admin493gjdi3u/index.php\"  data-token=\"pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminDashboard&amp;token=961634f2f16e1aaa7fe1e5112adf868a\"></a>
      <span id=\"shop_version\">1.7.8.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accesso Veloce
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php/improve/modules/manage?token=d0cfaf0ce0ce22617e5c5c46c2da2c6a\"
                 data-item=\"Moduli installati\"
      >Moduli installati</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php/sell/catalog/categories/new?token=d0cfaf0ce0ce22617e5c5c46c2da2c6a\"
                 data-item=\"Nuova categoria\"
      >Nuova categoria</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php/sell/catalog/products/new?token=d0cfaf0ce0ce22617e5c5c46c2da2c6a\"
                 data-item=\"Nuovo prodotto\"
      >Nuovo prodotto</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=c1a221726f293a1946174b58391ccfd0\"
                 data-item=\"Nuovo voucher\"
 ' | raw }}{{ '     >Nuovo voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminOrders&amp;token=246469da49bc114f1df8f52ecde254a5\"
                 data-item=\"Ordini\"
      >Ordini</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=a73e54b1edd8d62cb08a92103f6c0145\"
                 data-item=\"Valutazione catalogo\"
      >Valutazione catalogo</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"148\"
        data-icon=\"icon-AdminParentLocalization\"
        data-method=\"add\"
        data-url=\"index.php/improve/international/currencies\"
        data-post-link=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminQuickAccesses&token=3a56d63028739239c700c29c2097a398\"
        data-prompt-text=\"Da\\\\\\' un nome a questo shortcut:\"
        data-link=\"Valute - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Aggiungi a QuickAccess la pagina corrente
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminQuickAccesses&token=3a56d63028739239c700c29c2097a398\">
      <i class=\"material-icons\">settings</i>
      Gestisci gli accessi rapidi
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop_prod/admin493gjdi3u/index.php?controller=AdminSearch&amp;token=9a1593418363ecc8d5a2912cb38c2627\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"t' | raw }}{{ 'ext\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Ricerca (es. riferimento prodotto, nome cliente...)\" aria-label=\"Barra di ricerca\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Ovunque
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Ovunque\" href=\"#\" data-value=\"0\" data-placeholder=\"Cosa hai bisogno di trovare?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Ovunque</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nome prodotto, riferimento, ecc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogo</a>
        <a class=\"dropdown-item\" data-item=\"Clienti per nome\" href=\"#\" data-value=\"2\" data-placeholder=\"Nome\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clienti per nome</a>
        <a class=\"dropdown-item\" data-item=\"Clienti per indirizzo IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clienti per indirizzo IP</a>
        <a class=\"dropdown-item\" data-item=\"Ordini\" href=\"#\" data-value=\"3\" data-placeholder=\"ID ordine\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Ordini</a>
        <a class=\"dropdown-item\" data-item=\"Fatture\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero fattura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Fatture</a>
        <a class=\"dropdown-item\" data-item=\"Carrelli\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrello\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carrelli</a>
        <a class=\"dropdown-item\" data-item=\"Moduli\" href=\"#\" data-value=\"7\" data-placeholder=\"Nome modu' | raw }}{{ 'lo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Moduli</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">CERCA</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
  });
});
</script>
      </div>

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=\\'text-left\\'><strong>Il tuo negozio si trova in modalità debug.</strong></p><p class=\\'text-left\\'>Verranno mostrati tutti gli errori e i messaggi PHP. Quando non ne avrai più bisogno, <strong>escludi</strong> questa modalità.</p>\"
             href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/performance/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Modalità di debug</span>
          </a>
        </div>
      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop_prod/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Vai al negozio</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div' | raw }}{{ ' class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Ordini<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Clienti<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messaggi<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Per ora nessun nuovo ordine :(<br>
              Hai consultato i tuoi <strong><a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=4fd8be6f084eba5b30d63b14e7c4ee05\">carrelli abbandonati</a></strong>?<br>Il tuo prossimo ordine potrebbe essere nascosto lì!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  ' | raw }}{{ 'empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Per ora nessun nuovo cliente :(<br>
              Sei stato attivo sui social media in questi giorni?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Per ora non ci sono nuovi messaggi.<br>
              Sembra che tutti i tuoi clienti siano felici :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      da <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrato <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
        </div>
      
      <div class=\"component\" id=\"header-employee-container\">
        <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http:' | raw }}{{ '//localhost/prestashop_prod/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Bentornato, Andrea</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/employees/1/edit?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\">
      <i class=\"material-icons\">edit</i>
      <span>Il tuo profilo</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Risorse</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Addestramento</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Trova un Esperto</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Marketplace di PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centro Assistenza</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminLogin&amp;logout=1&amp;to' | raw }}{{ 'ken=2c5b3214fed9520af3bac0b3953bf8d7\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Esci</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/employees/toggle-navigation?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminDashboard&amp;token=961634f2f16e1aaa7fe1e5112adf868a\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Pannello di controllo</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vendi</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/orders/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Ordini
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                     ' | raw }}{{ '               keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/orders/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Ordini
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/orders/invoices/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Fatture
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/orders/credit-slips/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Buoni sconto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                             ' | raw }}{{ ' <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/orders/delivery-slips/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Bolle di consegna
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminCarts&amp;token=4fd8be6f084eba5b30d63b14e7c4ee05\" class=\"link\"> Carrello della spesa
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/catalog/products?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                               ' | raw }}{{ '                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/catalog/products?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Prodotti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/catalog/categories?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Categorie
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/catalog/monitoring/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Monitoraggio
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminAttributesGroups&amp;token=47f98bde4b7bad94a813c1b2d' | raw }}{{ '2fde70b\" class=\"link\"> Attributi e Funzionalità
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/catalog/brands/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Marche &amp; Fornitori
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/attachments/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> File
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminCartRules&amp;token=c1a221726f293a1946174b58391ccfd0\" class=\"link\"> Buoni sconto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"' | raw }}{{ '23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/stocks/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Magazzino
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/customers/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clienti
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/customers/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Clienti
                                </a>
                              </li>

                                                                                  
                              
       ' | raw }}{{ '                                                     
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/addresses/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Indirizzi
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminCustomerThreads&amp;token=1f62631f077a49b258b024e7f1932ce5\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servizio clienti
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminCustomerThreads&amp;token=1f62631f077a49b258b024e7f1' | raw }}{{ '932ce5\" class=\"link\"> Servizio clienti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/sell/customer-service/order-messages/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Messaggi d&#039;ordine
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminReturn&amp;token=9a9cd1e9790059b6b57ca18ee06688ff\" class=\"link\"> Restituzione Prodotto
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/modules/metrics/legacy/stats?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Statistiche
                      </span>
                                                    <i class=\"materia' | raw }}{{ 'l-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/modules/metrics/legacy/stats?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Statistiche
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"145\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/modules/metrics?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Migliora</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone ha' | raw }}{{ 's_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/modules/manage?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Moduli
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/modules/manage?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Gestione Moduli
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/modules/addons/modules/catalog?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Catalogo Moduli
                                </a>
                              </li>

                                                                                                                                                      ' | raw }}{{ '                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/design/themes/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/design/themes/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Tema &amp; Logo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/modules/addons' | raw }}{{ '/themes/catalog?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Catalogo dei Temi
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/design/mail_theme/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/design/cms-pages/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Pagine
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/design/modules/positions/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Posizioni
                                </a>
                              </li>

                                                                                  
                              
                                                            
                      ' | raw }}{{ '        <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminImages&amp;token=4953b74bd1ab1ae036f1162d834ae783\" class=\"link\"> Impostazioni immagine
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/modules/link-widget/list?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Elenco Link
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminCarriers&amp;token=7f84999bebe8610a65c38f91cafd822e\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Spedizione
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-' | raw }}{{ 'collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminCarriers&amp;token=7f84999bebe8610a65c38f91cafd822e\" class=\"link\"> Mezzi di spedizione
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/shipping/preferences/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Impostazioni
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/payment/payment_methods?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pagamento
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                  ' | raw }}{{ '                          </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/payment/payment_methods?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Metodi di Pagamento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/payment/preferences?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Impostazioni
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/localization/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internazion' | raw }}{{ 'ale
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/localization/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Localizzazione
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/zones/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Località
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/taxes/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Tasse
                     ' | raw }}{{ '           </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/translations/settings?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Traduzioni
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"146\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminPsfacebookModule&amp;token=4ddba6f2afb5715b5bfc65305988304c\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-146\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsfacebookModule\">
                          ' | raw }}{{ '      <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminPsfacebookModule&amp;token=4ddba6f2afb5715b5bfc65305988304c\" class=\"link\"> Facebook
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=73366f884a038cf0e5d7200a87bfbcb4\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configura</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/shop/preferences/preferences?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parametri Negozio
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
        ' | raw }}{{ '                                                    </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/shop/preferences/preferences?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Generale
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/shop/order-preferences/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Impostazioni Ordine
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/shop/product-preferences/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Prodotti
                                </a>
                              </li>

                                                                                  
                              
                                      ' | raw }}{{ '                      
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/shop/customer-preferences/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Impostazioni clienti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/shop/contacts/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Contatto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/shop/seo-urls/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Traffico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminSearchConf&amp;token=1a2f2716b1b6186b3bfd6174ebc8fcad\" class=\"link\"> Cerca
                     ' | raw }}{{ '           </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminGamification&amp;token=ab7bcbe955bd5ca2b4f6dc046bc08516\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/system-information/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parametri Avanzati
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-A' | raw }}{{ 'dminInformation\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/system-information/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Informazioni
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/performance/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Prestazioni
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/administration/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Amministrazione
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/emails/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Email
                                </a>
                              </li>

                                                                      ' | raw }}{{ '            
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/import/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Importa
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/employees/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Dipendenti
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/sql-requests/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/logs/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=' | raw }}{{ '\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/webservice-keys/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop_prod/admin493gjdi3u/index.php/configure/advanced/feature-flags/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" class=\"link\"> Funzionalità Sperimentali
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Localizzazione</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/currencies/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" aria-current=\"page\">Valute</a>
 ' | raw }}{{ '           </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Valute          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/currencies/new?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\"                  title=\"Aggiungi nuova valuta\"                >
                  <i class=\"material-icons\">add_circle_outline</i>                  Aggiungi nuova valuta
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aiuto\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop_prod/admin493gjdi3u/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fit%252Fdoc%252FAdminCurrencies%253Fversion%253D1.7.8.7%2526country%253Dit/Aiuto?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\"
                   id=\"product_form_open_help\"
                >
                  Aiuto
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                ' | raw }}{{ '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/localization/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" id=\"subtab-AdminLocalization\" class=\"nav-link tab \" data-submenu=\"68\">
                      Localizzazione
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/languages/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" id=\"subtab-AdminLanguages\" class=\"nav-link tab \" data-submenu=\"69\">
                      Lingue
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/currencies/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" id=\"subtab-AdminCurrencies\" class=\"nav-link t' | raw }}{{ 'ab active current\" data-submenu=\"70\">
                      Valute
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/geolocation/?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\" id=\"subtab-AdminGeolocation\" class=\"nav-link tab \" data-submenu=\"71\">
                      Geolocalizzazione
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-add\"' | raw }}{{ '
              href=\"/prestashop_prod/admin493gjdi3u/index.php/improve/international/currencies/new?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\"              title=\"Aggiungi nuova valuta\"            >
              Aggiungi nuova valuta
              <i class=\"material-icons\">add_circle_outline</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Aiuto\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop_prod/admin493gjdi3u/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fit%252Fdoc%252FAdminCurrencies%253Fversion%253D1.7.8.7%2526country%253Dit/Aiuto?_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\"
            >
              Aiuto
            </a>
                        </div>
    </div>
  </div>
  <!-- begin C:\\\\wamp64\\\\www\\\\prestashop_prod/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
<script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        \\'Recommended Modules and Services\\': \\'Moduli e Servizi raccomandati\\',
        \\'Close\\': \\'Chiudi\\',
      },
      recommendedModulesUrl: \\'/prestashop_prod/admin493gjdi3u/index.php/modules/addons/modules/recommended?tabClassName=AdminCurrencies&_token=pdlhj_y6lhW8a5tzzhy2NNFCEW44z8ywgVIv16FREwU\\',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedModulesButton: 1,
      shouldUseLegacyTheme: 0,
    });
  }
</script>
<!-- end C:\\\\wamp64\\\\www\\\\prestashop_prod/modules/ps_mbo/views/templates/hook/recommended-modules.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    La versione mobile di questa pagina non è ancora disponibile.
  </p>
  <p class=\"mt-2\">
    Si prega di utilizzare un computer desktop per accedere a questa pagina, fin quando non sarà stata adattata ai dispositivi mobili.
  </p>
  <p class=\"mt-2\">
    Grazie.
  </p>
  <a href=\"http://localhost/prestashop_prod/admin493gjdi3u/index.php?controller=AdminDashboard&amp;token=961634f2f16e1aaa7fe1e5112adf868a\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Indietro
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-IT&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/it/login?email=andrea%40alfagomma.dev&amp;firstname=Andrea&amp;lastname=Fiorino&amp;website=http%3A%2F%2Flocalhost%2Fprestashop_prod%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-IT&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/prestashop_prod/admin493gjdi3u/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Collega il tuo negozio al marketplace di PrestaShop al fine di importare auto' | raw }}{{ 'maticamente tutti i tuoi acquisti di Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Non hai ancora un account?</h4>
\t\t\t\t\t\t<p class=\\'text-justify\\'>Scopri la potenza di PrestaShop Addons! Esplora il Market Ufficiale di PrestaShop e trovi oltre 3500 moduli innovativi e temi che ottimizzano i rapporti di conversione, incrementano il traffico, fidelizzano il cliente e massimizzano i tuoi ritorni.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Collegati con PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/it/forgot-your-password\">Ho dimenticato la mia password</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/it/login?email=andrea%40alfagomma.dev&amp;firstname=Andrea&amp;lastname=Fiorino&amp;website=http%3A%2F%2Flocalhost%2Fprestashop_prod%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-IT&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrea un account
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-' | raw }}{{ '6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Accedi
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__1b923b154ef959a72eb5e99799b18d6bac509c8405064aefbe3e27f1c1a7573e", "");
    }
}

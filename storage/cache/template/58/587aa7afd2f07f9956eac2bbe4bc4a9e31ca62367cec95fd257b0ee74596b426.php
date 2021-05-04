<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/checkout/cart.twig */
class __TwigTemplate_e09674307e9bcf1d7d0d1806aea31d85edb75ed3cfd239707858aae4238dbaff extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"checkout-cart\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["attention"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 14
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 18
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 23
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 24
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 25
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 27
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 32
        echo ($context["heading_title"] ?? null);
        echo "
        ";
        // line 33
        if (($context["weight"] ?? null)) {
            // line 34
            echo "        &nbsp;(";
            echo ($context["weight"] ?? null);
            echo ")
        ";
        }
        // line 35
        echo " </h1>
        <i class=\"fa fa-trash delete\" aria-hidden=\"true\"></i>
      <form action=\"";
        // line 37
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">

            ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 40
            echo "              <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                  <thead>
                    <tr class=\"store-name\"><td colspan=7> <a style=\"color:white;\" href=\"";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["store"], "link", [], "any", false, false, false, 43);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 43);
            echo " </a></td></tr>
                    <tr>
                      <td> </td>
                      <td class=\"text-center\">";
            // line 46
            echo ($context["column_image"] ?? null);
            echo "</td>
                      <td class=\"text-left\">";
            // line 47
            echo ($context["column_name"] ?? null);
            echo "</td>
                      <td class=\"text-left\">";
            // line 48
            echo ($context["column_model"] ?? null);
            echo "</td>
                      <td class=\"text-left\">";
            // line 49
            echo ($context["column_quantity"] ?? null);
            echo "</td>
                      <td class=\"text-right\">";
            // line 50
            echo ($context["column_price"] ?? null);
            echo "</td>
                      <td class=\"text-right\">";
            // line 51
            echo ($context["column_total"] ?? null);
            echo "</td>
                    </tr>
                  </thead>
                  <tbody>
              ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 56
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "store_id", [], "any", false, false, false, 56) == twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 56))) {
                    // line 57
                    echo "              <tr>
                <td class=\"text-center\"> <input type=\"checkbox\" class=\"item-checkbox\" data-value=\"";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 58);
                    echo "\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 58);
                    echo "\"></td>
                <td class=\"text-center\">";
                    // line 59
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 59)) {
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 59);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 59);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 59);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 59);
                        echo "\" class=\"img-thumbnail\" /></a> ";
                    }
                    echo "</td>
                <td class=\"text-left\"><a href=\"";
                    // line 60
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 60);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 60);
                    echo "</a> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 60)) {
                        echo " <span class=\"text-danger\">***</span> ";
                    }
                    // line 61
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "variation", [], "any", false, false, false, 61)) {
                        // line 62
                        echo "                    ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "variation", [], "any", false, false, false, 62));
                        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                            echo " <br />
                    <small>";
                            // line 63
                            echo $context["k"];
                            echo ": ";
                            echo $context["v"];
                            echo "</small> 
                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 65
                        echo "                  ";
                    }
                    // line 66
                    echo "                  ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 66)) {
                        echo " <br />
                  <small>";
                        // line 67
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 67);
                        echo "</small> ";
                    }
                    // line 68
                    echo "                </td>
                <td class=\"text-left\">";
                    // line 69
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 69);
                    echo "</td>
                <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                    <input type=\"text\" name=\"quantity[";
                    // line 71
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 71);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 71);
                    echo "\" size=\"1\" class=\"form-control\" />
                    <span class=\"input-group-btn\">
                    <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
                    // line 73
                    echo ($context["button_update"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                    // line 74
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 74);
                    echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                    </span></div></td>
                <td class=\"text-right\">";
                    // line 76
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 76);
                    echo "</td>
                <td class=\"text-right\">";
                    // line 77
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 77);
                    echo "</td>
              </tr>
              ";
                }
                // line 80
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "            
            
            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 85
            echo "            <tr>
              <td></td>
              <td class=\"text-left\">";
            // line 87
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 87);
            echo "</td>
              <td class=\"text-left\"></td>
              <td class=\"text-left\"><div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                  <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 92
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 92);
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                  </span></div></td>
              <td class=\"text-right\">";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 94);
            echo "</td>
              <td class=\"text-right\">";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 95);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "              </tbody>
            
          </table>
        </div>
      </form>
      ";
        // line 103
        if (($context["modules"] ?? null)) {
            // line 104
            echo "      <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
      <p>";
            // line 105
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
      <div class=\"panel-group\" id=\"accordion\"> ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 107
                echo "        ";
                echo $context["module"];
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo " </div>
      ";
        }
        // line 109
        echo " <br />
      <div class=\"row\">
        <div class=\"col-sm-4 col-sm-offset-8\">
          <table class=\"table table-bordered\">
            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 114
            echo "            <tr>
              <td class=\"text-right\"><strong>";
            // line 115
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 115);
            echo ":</strong></td>
              <td class=\"text-right\">";
            // line 116
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 116);
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "          </table>
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"pull-left\"><a href=\"";
        // line 123
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
        <div class=\"pull-right\"><a class=\"btn btn-primary checkout\">";
        // line 124
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 126
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 127
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 129
        echo ($context["footer"] ?? null);
        echo " 

<script>
\$( document ).ready(function() {

  \$('.total_currency').text(\$('#form-currency .btn-link > strong').text());

  \$('.check-all').on('change', function(e){
    if (\$(this).is(\":checked\")){
      \$('.check-all').prop('checked', true);
      \$('.item-checkbox').prop('checked', true);
    } else {
      \$('.check-all').prop('checked', false);
      \$('.item-checkbox').prop('checked', false);
    }

    calculate_total();
  });

  \$('.item-checkbox').click(function(){
      calculate_total();
  });
  
  \$('.checkout').on('click', function(e){
    var checked = \$('.item-checkbox:checked').map(function(){
      return \$(this).val();
    }).get();

    console.log(checked.length);

    if (checked.length > 0) {
       \$.ajax({
          url: 'index.php?route=checkout/cart/addCartItemToPay',
          type: 'post',
          data: {items: checked},
          dataType: 'json',
          beforeSend: function() {
            \$('.btn .checkout').prop('disabled', true);
          },
          complete: function() {
            \$('.btn .checkout').prop('disabled', false);
          },
          success: function(json) {
            if (json.success == true) {
              window.location.replace(json.checkout_page);
            } else {
              alert('Something went wrong with checking out');
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });

    } else {
      alertify.error('Please select item to remove');
    }
  });

  //delete
  \$('.delete').on(\"click\", function(){
    var checked = \$('.item-checkbox:checked').map(function(){
      return \$(this).val();
    }).get();
      
    if(checked.length > 0){
      alertify.confirm('";
        // line 195
        echo ($context["text_delete"] ?? null);
        echo "', \"";
        echo ($context["text_delete_confirmation"] ?? null);
        echo "\",
      function(){
        // Confirmed
          \$.ajax({
              url: 'index.php?route=checkout/cart/remove',
              type: 'post',
              data: {key: checked},
              dataType: 'json',
              beforeSend: function() {
                \$('.fa-trash.delete').removeClass('delete');
              },
              complete: function() {
                \$('.fa-trash').addClass('delete');
              },
              success: function(json) {
                console.log(json);
                if (json.success) {
                  location.reload();
                } else {
                  alertify.error('";
        // line 214
        echo ($context["error_failed_remove"] ?? null);
        echo "')
                }
              },
              error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
              }
          });
      },
      function(){
        // Canceled
        // alertify.error('Cancel');
      }).set('labels', {ok:'";
        // line 225
        echo ($context["text_confirm"] ?? null);
        echo "', cancel:'";
        echo ($context["text_cancel"] ?? null);
        echo "'});
    }else{
      \$('.alertify-notifier').html('');
      alertify.error('";
        // line 228
        echo ($context["error_select_required"] ?? null);
        echo "');
    }
  });
});

function calculate_total(){
    var checked = \$('.item-checkbox:checked'),
        price = 0;

    checked.each(function(){
      price += parseFloat(\$(this).data('value').replace(/[^\\d.-]/g, ''));
    })

    \$('.total_amount').text(price.toFixed(2).toLocaleString());
}
</script>

<style>
.fa-trash.delete {
    font-size: 24px;
    cursor: pointer;
    color: rgba(153, 153, 153, 0.82);
    display: block;
    text-align: right;
    margin-bottom: 5px;
}

.fa-trash.delete:hover {
  color: black;
}

img.img-thumbnail {
  width: 85px;
  height: 85px;
}

.table{
  margin-bottom: 30px;
}

.table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
    border-bottom-width: 1px;
}

tr.store-name {
    background-color: #2199c6;
    color: white;
}
</style>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 228,  542 => 225,  528 => 214,  504 => 195,  435 => 129,  430 => 127,  426 => 126,  421 => 124,  415 => 123,  409 => 119,  400 => 116,  396 => 115,  393 => 114,  389 => 113,  383 => 109,  379 => 108,  370 => 107,  366 => 106,  362 => 105,  357 => 104,  355 => 103,  348 => 98,  339 => 95,  335 => 94,  328 => 92,  320 => 87,  316 => 85,  312 => 84,  308 => 82,  302 => 81,  296 => 80,  290 => 77,  286 => 76,  279 => 74,  275 => 73,  268 => 71,  263 => 69,  260 => 68,  256 => 67,  251 => 66,  248 => 65,  238 => 63,  231 => 62,  228 => 61,  220 => 60,  206 => 59,  200 => 58,  197 => 57,  194 => 56,  190 => 55,  183 => 51,  179 => 50,  175 => 49,  171 => 48,  167 => 47,  163 => 46,  155 => 43,  150 => 40,  146 => 39,  141 => 37,  137 => 35,  131 => 34,  129 => 33,  125 => 32,  118 => 31,  115 => 30,  112 => 29,  109 => 28,  106 => 27,  103 => 26,  100 => 25,  98 => 24,  93 => 23,  85 => 19,  82 => 18,  74 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/cart.twig", "");
    }
}

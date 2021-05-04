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

/* default/template/checkout/checkout.twig */
class __TwigTemplate_0513796ea61e8d65bf7ffef8bd1bb2b851af6ae4b1432f1e8e8bd22de52ed587 extends \Twig\Template
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
<div id=\"checkout-checkout\" class=\"container\">
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
        if (($context["error_warning"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <div class=\"panel-group\" id=\"accordion\">
        
        <div class=\"card card-default\">
          <div class=\"card-header\">
            <h4 class=\"card-title\">";
        // line 27
        echo ($context["text_delivery_address"] ?? null);
        echo " <button type=\"button\" class=\"btn btn-info btn-lg btn-add-address\" style=\"float:right\" data-toggle=\"modal\" data-target=\"#add_address\">+ ";
        echo ($context["text_address_new"] ?? null);
        echo "</button></h4>
          </div>
          <div class=\"card-body bg_white\">
            ";
        // line 30
        if (($context["addresses"] ?? null)) {
            // line 31
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["sa"]) {
                // line 32
                echo "                  ";
                if ((($context["default_address_id"] ?? null) == twig_get_attribute($this->env, $this->source, $context["sa"], "address_id", [], "any", false, false, false, 32))) {
                    // line 33
                    echo "                    <div class=\"address\" style=\"display:block\">
                      <input type=\"radio\" name=\"shipping_address\" id=\"shipping_id_";
                    // line 34
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "address_id", [], "any", false, false, false, 34);
                    echo "\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "address_id", [], "any", false, false, false, 34);
                    echo "\" checked> &nbsp;
                      <label for=\"shipping_id_";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "address_id", [], "any", false, false, false, 35);
                    echo "\">
                      ";
                    // line 36
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "firstname", [], "any", false, false, false, 36);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "lastname", [], "any", false, false, false, 36);
                    echo " -&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "address_1", [], "any", false, false, false, 36);
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "address_2", [], "any", false, false, false, 36);
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "postcode", [], "any", false, false, false, 36);
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "city", [], "any", false, false, false, 36);
                    echo "&nbsp; ";
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "zone", [], "any", false, false, false, 36);
                    echo "
                      </label>
                      ";
                    // line 38
                    if ((twig_length_filter($this->env, ($context["addresses"] ?? null)) > 1)) {
                        // line 39
                        echo "                      <span class=\"change-address\" style=\"cursor:pointer; margin-left: 20px; text-decoration:underline; color: #ff5808; text-transform: uppercase;\">";
                        echo ($context["text_change"] ?? null);
                        echo "</span>
                      ";
                    }
                    // line 41
                    echo "                      <br/>
                    </div>
                  ";
                } else {
                    // line 44
                    echo "                    <div class=\"address hidden-address\" style=\"display:none\">
                      <input type=\"radio\" name=\"shipping_address\" id=\"shipping_id_";
                    // line 45
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "address_id", [], "any", false, false, false, 45);
                    echo "\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "address_id", [], "any", false, false, false, 45);
                    echo "\" style=\"display:hidden;\"> &nbsp;
                      <label for=\"shipping_id_";
                    // line 46
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "address_id", [], "any", false, false, false, 46);
                    echo "\">
                        ";
                    // line 47
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "firstname", [], "any", false, false, false, 47);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "lastname", [], "any", false, false, false, 47);
                    echo " -&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "address_1", [], "any", false, false, false, 47);
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "address_2", [], "any", false, false, false, 47);
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "postcode", [], "any", false, false, false, 47);
                    echo "&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "city", [], "any", false, false, false, 47);
                    echo "&nbsp; ";
                    echo twig_get_attribute($this->env, $this->source, $context["sa"], "zone", [], "any", false, false, false, 47);
                    echo "
                        </label><br/>
                    </div>
                  ";
                }
                // line 51
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            ";
        }
        // line 53
        echo "
            ";
        // line 54
        if ((($context["has_shipping_address"] ?? null) == 0)) {
            // line 55
            echo "            <p style=\"color:red\">";
            echo ($context["text_at_least_shipping"] ?? null);
            echo "</p>
            ";
        }
        // line 57
        echo "          </div>
        </div>

        <div class=\"check-shipping-address\">
        <div class=\"card card-default product-info\">

          ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 64
            echo "          <table class=\"table special_table checkout_table\">
            <thead>
              <tr class=\"store-name\"><td colspan=7> ";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 66);
            echo " </td></tr>
              <tr>
                <td class=\"text-left\">";
            // line 68
            echo ($context["column_image"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 69
            echo ($context["column_name"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 70
            echo ($context["column_model"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 71
            echo ($context["column_quantity"] ?? null);
            echo "</td>
                <td class=\"text-right\">";
            // line 72
            echo ($context["column_price"] ?? null);
            echo "</td>
                <td class=\"text-right\">";
            // line 73
            echo ($context["column_total"] ?? null);
            echo "</td>
              </tr>
            </thead>
            <tbody>
            ";
            // line 77
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 78
                echo "              ";
                if ((twig_get_attribute($this->env, $this->source, $context["product"], "store_id", [], "any", false, false, false, 78) == twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 78))) {
                    // line 79
                    echo "                <tr>
                  <td class=\"text-left\" data-label=\"";
                    // line 80
                    echo ($context["column_image"] ?? null);
                    echo "\">";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 80)) {
                        echo " <a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 80);
                        echo "\"><img src=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 80);
                        echo "\" alt=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                        echo "\" title=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 80);
                        echo "\" class=\"img-thumbnail\" /></a> ";
                    }
                    echo "</td>
                  <td class=\"text-left\" data-label=\"";
                    // line 81
                    echo ($context["column_name"] ?? null);
                    echo "\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 81);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 81);
                    echo "</a> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 81)) {
                        echo " <span class=\"text-danger\">***</span> ";
                    }
                    // line 82
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "variation", [], "any", false, false, false, 82)) {
                        // line 83
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "variation", [], "any", false, false, false, 83));
                        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                            echo " <br />
                        <small>";
                            // line 84
                            echo $context["k"];
                            echo ": ";
                            echo $context["v"];
                            echo "</small> 
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 86
                        echo "                    ";
                    }
                    // line 87
                    echo "                    ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 87)) {
                        echo " <br />
                    <small>";
                        // line 88
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 88);
                        echo "</small> 
                    ";
                    }
                    // line 90
                    echo "                  </td>
                  <td class=\"text-left\" data-label=\"";
                    // line 91
                    echo ($context["column_model"] ?? null);
                    echo "\"><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "model", [], "any", false, false, false, 91);
                    echo "</span></td>
                  <td class=\"text-center\" data-label=\"";
                    // line 92
                    echo ($context["column_quantity"] ?? null);
                    echo "\">
                      <div>";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 93);
                    echo "</div>
                  </td>
                  <td class=\"text-right\" data-label=\"";
                    // line 95
                    echo ($context["column_price"] ?? null);
                    echo "\"><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 95);
                    echo "</span></td>
                  <td class=\"text-right\" data-label=\"";
                    // line 96
                    echo ($context["column_total"] ?? null);
                    echo "\"><span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 96);
                    echo "</span></td>
                </tr>
              ";
                }
                // line 99
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "            <tr>
              <td colspan=3 class=\"text-left\">
                ";
            // line 102
            echo ($context["text_message"] ?? null);
            echo ":
                <textarea name=\"comment\" rows=\"4\" class=\"form-control\">";
            // line 103
            echo ($context["comment"] ?? null);
            echo "</textarea>
              </td>
              <td colspan=2 class=\"text-left\">
                <p class=\"mb-0\">";
            // line 106
            echo ($context["text_shipping_option"] ?? null);
            echo ": </p>
                ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, $context["store"], "default_shipping", [], "any", false, false, false, 107)) {
                // line 108
                echo "                  <p class=\"selected-shipping-name\"> ";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["store"], "default_shipping", [], "any", false, false, false, 108), "title", [], "any", false, false, false, 108);
                echo "(";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["store"], "default_shipping", [], "any", false, false, false, 108), "code", [], "any", false, false, false, 108);
                echo ")</p>
                ";
            }
            // line 110
            echo "                <button type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#shipping_modal\">";
            echo ($context["text_change"] ?? null);
            echo "</button>
              </td>
              <td class=\"text-right\">
                ";
            // line 113
            if (twig_get_attribute($this->env, $this->source, $context["store"], "default_shipping", [], "any", false, false, false, 113)) {
                // line 114
                echo "                  <p class=\"selected-shipping-cost\">";
                echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["store"], "default_shipping", [], "any", false, false, false, 114), "text", [], "any", false, false, false, 114);
                echo "</p>
                ";
            }
            // line 116
            echo "              </td>
            </tr>
            <tr>
              <td colspan=5 style=\"border:none\" class=\"text-right\">";
            // line 119
            echo ($context["column_total"] ?? null);
            echo "</td>
              <td class=\"text-right\"><b><span class=\"total-price\">";
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["store"], "total_price_with_currency", [], "any", false, false, false, 120);
            echo "</span></b></td>
            </tr>
            </tbody>
          </table>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "          
          
        </div>
          </div>

          <p style=\"text-align:right; margin-right:10px\"><span>Grand Total: <b>";
        // line 130
        echo ($context["grand_total_price_with_currency"] ?? null);
        echo "</b></span></p>
        </div>

        <div class=\"card card-defaul choose-payment\">
          <div class=\"card-header\">
            <h4 class=\"card-title\">";
        // line 135
        echo ($context["text_payment_method"] ?? null);
        echo "</h4>
          </div>
          <div class=\"card-body bg_white\">
            ";
        // line 138
        if (($context["payment_methods"] ?? null)) {
            // line 139
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["pm"]) {
                // line 140
                echo "                    <input type=\"radio\" name=\"payment_method\" id=\"payment_code_";
                echo twig_get_attribute($this->env, $this->source, $context["pm"], "code", [], "any", false, false, false, 140);
                echo "\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["pm"], "code", [], "any", false, false, false, 140);
                echo "\"> &nbsp;
                    <label for=\"payment_code_";
                // line 141
                echo twig_get_attribute($this->env, $this->source, $context["pm"], "code", [], "any", false, false, false, 141);
                echo "\" class=\"mb-0\">";
                echo twig_get_attribute($this->env, $this->source, $context["pm"], "title", [], "any", false, false, false, 141);
                echo "</label><br/>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 143
            echo "            ";
        }
        // line 144
        echo "          </div>
        </div>
        <button class=\"btn btn-lg place-order\">";
        // line 146
        echo ($context["text_place_order"] ?? null);
        echo "</button>
      </div>


      </div>
      ";
        // line 151
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 152
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>

";
        // line 155
        if (($context["new_shipping_address_modal"] ?? null)) {
            // line 156
            echo "  ";
            echo ($context["new_shipping_address_modal"] ?? null);
            echo "
";
        }
        // line 158
        echo "
";
        // line 159
        if (($context["shipping_method_modal"] ?? null)) {
            // line 160
            echo "  ";
            echo ($context["shipping_method_modal"] ?? null);
            echo "
";
        }
        // line 162
        echo "
<script type=\"text/javascript\">

\$('button.place-order').on('click', function(e) {
    if (!\$('input[name=\"shipping_address\"]:checked').val()) {
      alert('You have no shipping address. Please add at least one to proceed.');
    } else {
      \$.ajax({
        url: 'index.php?route=checkout/checkout/placeOrder',
        type: 'post',
        data: { 
          shippingAddressId: \$('input[name=\"shipping_address\"]:checked').val(),
          shippingComment: \$('textarea[name=\"comment\"]').val(),
          paymentMethod: \$('input[name=\"payment_method\"]:checked').val(),
        },
        dataType: 'json',
        beforeSend: function() {
          \$('.place-order').prop('disabled', true);
        },
        complete: function() {
          \$('.place-order').prop('disabled', false);
        },
        success: function(json) {
          console.log(json);
          if (json.redirect) {
            window.location.href = json.redirect;
          }
          
          if (Object.keys(json.error).length > 0) {
            var msg = '';
            \$.each(json.error, function( i, v ) {
              msg+= v;
            });
            alertify.alert(\"Warning\", msg);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
    }
  });
  
  \$('.choose-shipping-method').on('click', function(e) {
      \$.ajax({
        url: 'index.php?route=checkout/shipping_method/save',
        type: 'post',
        data: \$('#shipping_modal input[type=\\'radio\\']:checked'),
        dataType: 'json',
        beforeSend: function() {
          \$('.choose-shipping-method').prop('disabled', true);
        },
        complete: function() {
          \$('.choose-shipping-method').prop('disabled', false);
        },
        success: function(json) {
          if (json && json.shipping_method) {
            console.log(json);
            \$('p.selected-shipping-name').html(json.shipping_method.title + \"(\" + json.shipping_method.code + \")\");
            \$('p.selected-shipping-cost').html(json.shipping_method.text);
            \$('#shipping_modal').modal('hide');
            countTotalPrice(json.shipping_method.cost);
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
     });
  });

</script>
";
        // line 233
        echo ($context["footer"] ?? null);
        echo "

<style>
tr.store-name {
    border: 1px solid #e9e9e9;
    background-color: #df603f;
    color: white;
}

.checkout_table {
  margin: 30px 0;
  border: 1px solid #df603f;
  border-collapse: unset;
}
</style>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  604 => 233,  531 => 162,  525 => 160,  523 => 159,  520 => 158,  514 => 156,  512 => 155,  506 => 152,  502 => 151,  494 => 146,  490 => 144,  487 => 143,  477 => 141,  470 => 140,  465 => 139,  463 => 138,  457 => 135,  449 => 130,  442 => 125,  431 => 120,  427 => 119,  422 => 116,  416 => 114,  414 => 113,  407 => 110,  399 => 108,  397 => 107,  393 => 106,  387 => 103,  383 => 102,  379 => 100,  373 => 99,  365 => 96,  359 => 95,  354 => 93,  350 => 92,  344 => 91,  341 => 90,  336 => 88,  331 => 87,  328 => 86,  318 => 84,  311 => 83,  308 => 82,  298 => 81,  282 => 80,  279 => 79,  276 => 78,  272 => 77,  265 => 73,  261 => 72,  257 => 71,  253 => 70,  249 => 69,  245 => 68,  240 => 66,  236 => 64,  232 => 63,  224 => 57,  218 => 55,  216 => 54,  213 => 53,  210 => 52,  204 => 51,  185 => 47,  181 => 46,  175 => 45,  172 => 44,  167 => 41,  161 => 39,  159 => 38,  142 => 36,  138 => 35,  132 => 34,  129 => 33,  126 => 32,  121 => 31,  119 => 30,  111 => 27,  103 => 22,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  76 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/checkout.twig", "");
    }
}

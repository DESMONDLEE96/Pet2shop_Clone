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

/* default/template/checkout/shipping_address.twig */
class __TwigTemplate_6c3dd677292aa9d2c13f0cba535b7d46c4eb1295a8c5c0b61d8478e6792909bd extends \Twig\Template
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
        // line 11
        echo "
<!-- New Address Modal -->
<div id=\"add_address\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\" style=\"max-width: 800px;margin: 0 auto;\">
      <div class=\"modal-header\">
        <button type=\"button\" style=\"font-size: 25px;\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">";
        // line 20
        echo ($context["text_add_new_ship_address"] ?? null);
        echo "</h4>
      </div>
      <div class=\"modal-body\">
        <div class=\"form-group row required\">
          <label class=\"col-sm-3 col-form-label\" for=\"input-shipping-firstname\">";
        // line 24
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 26
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-shipping-firstname\" class=\"form-control\" />
          </div>
        </div>
        <div class=\"form-group row required\">
          <label class=\"col-sm-3 col-form-label\" for=\"input-shipping-lastname\">";
        // line 30
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 32
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-shipping-lastname\" class=\"form-control\" />
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"col-sm-3 col-form-label\" for=\"input-shipping-company\">";
        // line 36
        echo ($context["entry_company"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 38
        echo ($context["entry_company"] ?? null);
        echo "\" id=\"input-shipping-company\" class=\"form-control\" />
          </div>
        </div>
        <div class=\"form-group row required\">
          <label class=\"col-sm-3 col-form-label\" for=\"input-shipping-address-1\">";
        // line 42
        echo ($context["entry_address_1"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 44
        echo ($context["entry_address_1"] ?? null);
        echo "\" id=\"input-shipping-address-1\" class=\"form-control\" />
          </div>
        </div>
        <div class=\"form-group row\">
          <label class=\"col-sm-3 col-form-label\" for=\"input-shipping-address-2\">";
        // line 48
        echo ($context["entry_address_2"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 50
        echo ($context["entry_address_2"] ?? null);
        echo "\" id=\"input-shipping-address-2\" class=\"form-control\" />
          </div>
        </div>
        <div class=\"form-group row required\">
          <label class=\"col-sm-3 col-form-label\" for=\"input-shipping-city\">";
        // line 54
        echo ($context["entry_city"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 56
        echo ($context["entry_city"] ?? null);
        echo "\" id=\"input-shipping-city\" class=\"form-control\" />
          </div>
        </div>
        <div class=\"form-group row required\">
          <label class=\"col-sm-3 col-form-label\" for=\"input-shipping-postcode\">";
        // line 60
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <input type=\"text\" name=\"postcode\" value=\"\" placeholder=\"";
        // line 62
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-shipping-postcode\" class=\"form-control\" />
          </div>
        </div>
        <div class=\"form-group row required\">
          <label class=\"col-sm-3 col-form-label\" for=\"input-shipping-country\">";
        // line 66
        echo ($context["entry_country"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <select name=\"country_id\" id=\"input-shipping-country\" class=\"form-control\">
              <option value=\"\">";
        // line 69
        echo ($context["text_select"] ?? null);
        echo "</option>
              ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 71
            echo "              <option value=\"\">aaaa</option>
              ";
            // line 72
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 72) == ($context["country_id"] ?? null))) {
                // line 73
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 73);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 73);
                echo "</option>
              ";
            } else {
                // line 75
                echo "              <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 75);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 75);
                echo "</option>
              ";
            }
            // line 77
            echo "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "            </select>
          </div>
        </div>
        <div class=\"form-group row required\">
          <label class=\"col-sm-3 col-form-label\" for=\"input-shipping-zone\">";
        // line 82
        echo ($context["entry_zone"] ?? null);
        echo "</label>
          <div class=\"col-sm-9\">
            <select name=\"zone_id\" id=\"input-shipping-zone\" class=\"form-control\">
            </select>
          </div>
        </div>
        <div class=\"form-group row\">
          <div class=\"col-sm-2\"></div>
          <div class=\"col-sm-9\">
            <input type=\"checkbox\" name=\"default\" id=\"input-default-address\" class=\"form-control\" style=\"width: 20px; display: inline-block;\" value=\"1\">
            <label for=\"input-default-address\">";
        // line 92
        echo ($context["text_address_default"] ?? null);
        echo "</label>
          </div>
        </div>
      </div>

      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default save-new-address\">";
        // line 98
        echo ($context["text_add"] ?? null);
        echo "</button>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 99
        echo ($context["text_cancel"] ?? null);
        echo "</button>
      </div>
    </div>
    
  </div>
</div>

<script>
  \$(document).on('click', '.save-new-address' , function() {
    \$.ajax({
        url: 'index.php?route=checkout/shipping_address/addNewAddress',
        type: 'post',
        data: \$('#add_address input[type=\\'text\\'], #add_address textarea, #add_address select, #add_address input[type=\\'checkbox\\']'),
        dataType: 'json',
        beforeSend: function() {
          \$('.btn-add-address').prop('disabled', true);
          \$('#add_address').find('.text-danger').remove();
        },
        complete: function() {
          \$('.btn-add-address').prop('disabled', false);
        },
        success: function(json) {
          if (json.error && Object.keys(json.error).length > 0) {
            \$.each(json.error, function(i,v) {
              \$('#add_address input[name=\"' + i + '\"]').after('<div class=\"text-danger\">' + v + '</div>');
              \$('#add_address select[name=\"' + i + '\"]').after('<div class=\"text-danger\">' + v + '</div>');
            });

\t\t\t\t\t} else {
              alert('Address Successfully added');
              location.reload();
              \$('#add_address').modal('hide');
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
     });
});
</script>

<script type=\"text/javascript\"><!--
\$('#add_address select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#add_address select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#add_address select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#add_address input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('#add_address input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 158
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 164
        echo ($context["zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 171
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#add_address select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#add_address select[name=\\'country_id\\']').trigger('change');
//--></script>

<style>
.close {
  display: block;
  position: absolute;
  right: 20px;
  top: 10px;
}
</style>";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/shipping_address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 171,  283 => 164,  274 => 158,  212 => 99,  208 => 98,  199 => 92,  186 => 82,  180 => 78,  174 => 77,  166 => 75,  158 => 73,  156 => 72,  153 => 71,  149 => 70,  145 => 69,  139 => 66,  132 => 62,  127 => 60,  120 => 56,  115 => 54,  108 => 50,  103 => 48,  96 => 44,  91 => 42,  84 => 38,  79 => 36,  72 => 32,  67 => 30,  60 => 26,  55 => 24,  48 => 20,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/shipping_address.twig", "");
    }
}

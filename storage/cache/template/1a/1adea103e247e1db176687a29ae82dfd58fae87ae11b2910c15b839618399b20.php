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

/* default/template/checkout/shipping_method.twig */
class __TwigTemplate_84382ff831efad89e6d27f7110018f4967df947658aa74df8bb7d4cd223017d9 extends \Twig\Template
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
        echo "<!-- Choose Shipping Modal -->
<div id=\"shipping_modal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title\">";
        // line 8
        echo ($context["text_shipping_method"] ?? null);
        echo "</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
        ";
        // line 12
        if (($context["shipping_methods"] ?? null)) {
            // line 13
            echo "        <p>";
            echo ($context["text_shipping_method"] ?? null);
            echo " - ";
            echo ($context["text_total_weight"] ?? null);
            echo ": ";
            echo ($context["total_weight"] ?? null);
            echo "KG</p>
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["shipping_method"]) {
                // line 15
                echo "        <div class=\"form-check\">
          ";
                // line 16
                if ((twig_get_attribute($this->env, $this->source, ($context["default_shipping"] ?? null), "shipping_courier_id", [], "any", false, false, false, 16) == twig_get_attribute($this->env, $this->source, $context["shipping_method"], "shipping_courier_id", [], "any", false, false, false, 16))) {
                    // line 17
                    echo "            <input class=\"form-check-input\" id=\"shipping-courier-id-";
                    echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "shipping_courier_id", [], "any", false, false, false, 17);
                    echo "\" type=\"radio\" name=\"shipping_method\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "code", [], "any", false, false, false, 17);
                    echo "\" checked>
          ";
                } else {
                    // line 19
                    echo "            <input class=\"form-check-input\" id=\"shipping-courier-id-";
                    echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "shipping_courier_id", [], "any", false, false, false, 19);
                    echo "\" type=\"radio\" name=\"shipping_method\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "code", [], "any", false, false, false, 19);
                    echo "\"> 
          ";
                }
                // line 21
                echo "          <label for=\"shipping-courier-id-";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "shipping_courier_id", [], "any", false, false, false, 21);
                echo "\" class=\"form-check-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "title", [], "any", false, false, false, 21);
                echo " (";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "code", [], "any", false, false, false, 21);
                echo ") - ";
                echo twig_get_attribute($this->env, $this->source, $context["shipping_method"], "text", [], "any", false, false, false, 21);
                echo "</label>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
        }
        // line 25
        echo "      </div>  

      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default choose-shipping-method\">";
        // line 28
        echo ($context["text_confirm"] ?? null);
        echo "</button>
      </div>
    </div>
    
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/shipping_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 28,  108 => 25,  105 => 24,  89 => 21,  81 => 19,  73 => 17,  71 => 16,  68 => 15,  64 => 14,  55 => 13,  53 => 12,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/checkout/shipping_method.twig", "");
    }
}

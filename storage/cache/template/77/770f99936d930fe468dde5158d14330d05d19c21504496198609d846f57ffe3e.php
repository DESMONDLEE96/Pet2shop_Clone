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

/* default/template/store/store.twig */
class __TwigTemplate_843546c7cb2ee3936a2b59bc8a1a8454d7a60a3dc1fab7a86c182c09e766b048 extends \Twig\Template
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
<div id=\"product-compare\" class=\"container\">
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
        if (($context["success"] ?? null)) {
            // line 9
            echo "  <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
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

      ";
        // line 24
        if (($context["store"] ?? null)) {
            // line 25
            echo "        <div class=\"store-info\">
          <div class=\"store-img\" style=\"background-image: url(";
            // line 26
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["store"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["image"] ?? null) : null);
            echo ")\">
          </div>
          <div class=\"store-desc\">
            <h1> Store ";
            // line 29
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["store"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["name"] ?? null) : null);
            echo " </h1>
            <p>";
            // line 30
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["store"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["description"] ?? null) : null);
            echo "</p>
          </div>
        </div>
        <h1 class=\"middle-p\">All Products</h1>
        <div class>
          ";
            // line 35
            if (($context["products"] ?? null)) {
                // line 36
                echo "            <div class=\"row\">
              ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 38
                    echo "                <div class=\"product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12\">
                  <div class=\"product-thumb transition\">
                    <div class=\"image\"><a href=\"";
                    // line 40
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 40);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 40);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 40);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 40);
                    echo "\" class=\"img-responsive\" /></a></div>
                    <div class=\"caption\">
                      <h4><a href=\"";
                    // line 42
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 42);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 42);
                    echo "</a></h4>
                      <p>";
                    // line 43
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 43);
                    echo "</p>
                      ";
                    // line 44
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 44)) {
                        // line 45
                        echo "                      <p class=\"price\">
                        ";
                        // line 46
                        if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 46)) {
                            // line 47
                            echo "                        ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 47);
                            echo "
                        ";
                        } else {
                            // line 49
                            echo "                        <span class=\"price-new\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 49);
                            echo "</span> <span class=\"price-old\">";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 49);
                            echo "</span>
                        ";
                        }
                        // line 51
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 51)) {
                            // line 52
                            echo "                        <span class=\"price-tax\">";
                            echo ($context["text_tax"] ?? null);
                            echo " ";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 52);
                            echo "</span>
                        ";
                        }
                        // line 54
                        echo "                      </p>
                      ";
                    }
                    // line 56
                    echo "                    </div>
                   
                  </div>
                </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "              </div>
          ";
            } else {
                // line 63
                echo "          <p>No product for this store</p>
          ";
            }
            // line 65
            echo "        </div>
      ";
        }
        // line 67
        echo "

     
      ";
        // line 70
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 71
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 73
        echo ($context["footer"] ?? null);
        echo " 

<style>
.store-info {
    width: 100%;
    height: 200px;
}

.store-img {
  background-size: contain;
  background-position: center;
  width: 200px;
  height: 200px;
  border: 1px solid #ddd;
  display: inline-block;
  float: left;
  margin-right: 50px;
}

.store-desc {
    display: inline-block;
    height: 100%;
    min-width: 400px;
}

h1.middle-p {
    text-align: center;
}
</style>";
    }

    public function getTemplateName()
    {
        return "default/template/store/store.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 73,  232 => 71,  228 => 70,  223 => 67,  219 => 65,  215 => 63,  211 => 61,  201 => 56,  197 => 54,  189 => 52,  186 => 51,  178 => 49,  172 => 47,  170 => 46,  167 => 45,  165 => 44,  161 => 43,  155 => 42,  144 => 40,  140 => 38,  136 => 37,  133 => 36,  131 => 35,  123 => 30,  119 => 29,  113 => 26,  110 => 25,  108 => 24,  103 => 22,  96 => 21,  93 => 20,  90 => 19,  87 => 18,  84 => 17,  81 => 16,  78 => 15,  76 => 14,  71 => 13,  63 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/store/store.twig", "");
    }
}

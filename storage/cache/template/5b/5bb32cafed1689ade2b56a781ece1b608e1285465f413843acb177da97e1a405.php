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

/* catalog/product_form.twig */
class __TwigTemplate_1253e2517936b4863e3db7ba5cd4af436ee35af6fc6776ebc6cb33abf1eca6d9 extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        ";
        // line 6
        if ((($context["product_id"] ?? null) == 0)) {
            // line 7
            echo "          <button class=\"btn btn-primary add-product\">Add Product</button>  
        ";
        } else {
            // line 9
            echo "          <button class=\"btn btn-primary edit-product\">Edit Product</button>
        ";
        }
        // line 11
        echo "        <a href=\"";
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\"> 
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 23
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 26
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 28
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-links\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_links"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-discount\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_discount"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-special\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_special"] ?? null);
        echo "</a></li>            
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 38
            echo "                  <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 38);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 38);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 38);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 38);
            echo "\"/> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 38);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "              </ul>
              <div class=\"tab-content\">";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 42
            echo "                  <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 42);
            echo "\">
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["product_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["product_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46)] ?? null) : null), "name", [], "any", false, false, false, 46)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46);
            echo "\" class=\"form-control\"/>
                        ";
            // line 47
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 47)] ?? null) : null)) {
                // line 48
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 49
            echo " </div>
                    </div>
                    <div class=\"form-group\">
                      <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 52);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <textarea name=\"product_description[";
            // line 54
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["product_description"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["product_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 54)] ?? null) : null), "description", [], "any", false, false, false, 54)) : (""));
            echo "</textarea>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 58
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 58);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                      <div class=\"col-sm-10\">
                        <input type=\"text\" name=\"product_description[";
            // line 60
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["product_description"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["product_description"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60)] ?? null) : null), "meta_title", [], "any", false, false, false, 60)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 60);
            echo "\" class=\"form-control\"/>
                        ";
            // line 61
            if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["error_meta_title"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61)] ?? null) : null)) {
                // line 62
                echo "                          <div class=\"text-danger\">";
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["error_meta_title"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 62)] ?? null) : null);
                echo "</div>
                        ";
            }
            // line 63
            echo " </div>
                    </div>
                  </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "</div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group required\">
                <label class=\"col-sm-2 control-label\" for=\"input-model\">";
        // line 70
        echo ($context["entry_model"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"model\" value=\"";
        // line 72
        echo ($context["model"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_model"] ?? null);
        echo "\" id=\"input-model\" class=\"form-control\"/>
                  ";
        // line 73
        if (($context["error_model"] ?? null)) {
            // line 74
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_model"] ?? null);
            echo "</div>
                  ";
        }
        // line 75
        echo "</div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sku\"><span data-toggle=\"tooltip\" title=\"";
        // line 78
        echo ($context["help_sku"] ?? null);
        echo "\">";
        echo ($context["entry_sku"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sku\" value=\"";
        // line 80
        echo ($context["sku"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sku"] ?? null);
        echo "\" id=\"input-sku\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 84
        echo ($context["entry_location"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"location\" value=\"";
        // line 86
        echo ($context["location"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_location"] ?? null);
        echo "\" id=\"input-location\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-price\">";
        // line 90
        echo ($context["entry_price"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"price\" value=\"";
        // line 92
        echo ($context["price"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_price"] ?? null);
        echo "\" id=\"input-price\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-quantity\">";
        // line 96
        echo ($context["entry_quantity"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"quantity\" value=\"";
        // line 98
        echo ($context["quantity"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_quantity"] ?? null);
        echo "\" id=\"input-quantity\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-variation\">Variation</label>
                <div class=\"col-sm-10\">
                  <p class=\"enable-variation\" style=";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation1Name", [], "any", false, false, false, 104)) {
            echo " \"display:none\" ";
        } else {
            echo " \"display:block\" ";
        }
        echo ">Enable Variation</p>
                  <p class=\"disable-variation\" style=";
        // line 105
        if (twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation1Name", [], "any", false, false, false, 105)) {
            echo " \"display:block\" ";
        } else {
            echo " \"display:none\" ";
        }
        echo ">Disable Variation</p>

                  <div class=\"variation-container\" style=";
        // line 107
        if (twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation1Name", [], "any", false, false, false, 107)) {
            echo " \"display:block\" ";
        } else {
            echo " \"display:none\" ";
        }
        echo ">

                    <div class=\"variation-1\">
                      <label class=\"control-label\" for=\"input-variation\">Variation 1</label>
                      <table class=\"table table-v1\">
                        <tr class=\"variation-name\">
                          <td>Name</td>
                          <td><input type=\"text\" placeholder=\"Variation Name\" value=\"";
        // line 114
        echo twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation1Name", [], "any", false, false, false, 114);
        echo "\" name=\"v1-name\" class=\"form-control\" maxlength=\"14\" /></td><td></td>
                        </tr>
                        <tr class=\"v1-option-tr\">
                          <td>Options</td>
                          <td><input type=\"text\" placeholder=\"Enter Options. Eg:Red\" value=\"";
        // line 118
        echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation1Options", [], "any", false, false, false, 118)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[0] ?? null) : null);
        echo "\" class=\"form-control\" maxlength=\"14\"/></td>
                          <td>
                            <i class=\"fa fa-arrow-circle-up\" aria-hidden=\"true\"></i> 
                            <i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i>
                            <i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i>
                          </td>
                        </tr>
                        ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation1Options", [], "any", false, false, false, 125), 1, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation1Options", [], "any", false, false, false, 125))));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 126
            echo "                          <tr class=\"v1-option-tr\">
                            <td></td>
                            <td><input type=\"text\" placeholder=\"Enter Options. Eg:Red\" value=\"";
            // line 128
            echo $context["n"];
            echo "\" class=\"form-control\" maxlength=\"14\"/></td>
                            <td>
                              <i class=\"fa fa-arrow-circle-up\" aria-hidden=\"true\"></i> 
                              <i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i>
                              <i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "                        <tr class=\"add-options\">
                          <td></td>
                          <td><p class=\"add-opt\">+ Add Option</p></td><td></td>
                        </tr>
                      </table>
                    </div>

                    <p class=\"show-variation-2\" style=";
        // line 143
        if (twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Name", [], "any", false, false, false, 143)) {
            echo " \"display:none\" ";
        } else {
            echo " \"display:block\" ";
        }
        echo ">Enable Variation 2</p>
                    <p class=\"disable-variation-2\" style=";
        // line 144
        if (twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Name", [], "any", false, false, false, 144)) {
            echo " \"display:block\" ";
        } else {
            echo " \"display:none\" ";
        }
        echo ">Disable Variation 2</p>
                    <div class=\"variation-2\" style=";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Name", [], "any", false, false, false, 145)) {
            echo " \"display:block\" ";
        } else {
            echo " \"display:none\" ";
        }
        echo ">
                      <label class=\"control-label\" for=\"input-variation\">Variation 2</label>
                        <table class=\"table\">
                        <tr class=\"variation-name\">
                          <td>Name</td>
                          <td><input type=\"text\" placeholder=\"Variation Name\" value=\"";
        // line 150
        echo twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Name", [], "any", false, false, false, 150);
        echo "\" name=\"v2-name\" class=\"form-control\" maxlength=\"14\"/></td><td></td>
                        </tr>
                        <tr class=\"v2-option-tr\">
                          <td>Options</td>
                          <td><input type=\"text\" placeholder=\"Enter Options. Eg:Red\" value=\"";
        // line 154
        echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Options", [], "any", false, false, false, 154)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[0] ?? null) : null);
        echo "\" class=\"form-control\" maxlength=\"14\"/></td>
                          <td>
                            <i class=\"fa fa-arrow-circle-up\" aria-hidden=\"true\"></i> 
                            <i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i>
                            <i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i>
                          </td>
                        </tr>
                          ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Options", [], "any", false, false, false, 161), 1, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Options", [], "any", false, false, false, 161))));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            // line 162
            echo "                          <tr class=\"v2-option-tr\">
                            <td></td>
                            <td><input type=\"text\" placeholder=\"Enter Options. Eg:Red\" value=\"";
            // line 164
            echo $context["n"];
            echo "\" class=\"form-control\" maxlength=\"14\"/></td>
                            <td>
                              <i class=\"fa fa-arrow-circle-up\" aria-hidden=\"true\"></i> 
                              <i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i>
                              <i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i>
                            </td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                        <tr class=\"add-options\">
                          <td></td>
                          <td><p class=\"add-opt\">+ Add Option</p></td><td></td>
                        </tr>
                        </table>
                    </div>

                    <label class=\"control-label\">Variation Information</label>
                    <div class=\"vi-container\">
                      <div class=\"vi-price cell\"><input type=\"number\" placeholder=\"Price\" name=\"o-price\" min=\"0\" maxlength=\"7\"></div>
                      <div class=\"vi-stock cell\"><input type=\"number\" placeholder=\"Stock\" min=\"0\" maxlength=\"4\"></div>
                      <div class=\"vi-sku cell\"><input type=\"text\" placeholder=\"SKU\" maxlength=\"12\" ></div>
                      <div class=\"vi-apply-button cell\">APPLY ALL</div>
                    </div>

                    <label class=\"control-label\">Variation List</label>
                    ";
        // line 188
        if (twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variationList", [], "any", false, false, false, 188)) {
            // line 189
            echo "                    <div class=\"variation-list-container ";
            if (twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Name", [], "any", false, false, false, 189)) {
                echo " v2-enabled ";
            }
            echo "\">
                      <div class=\"vl-header vl-row\">
                        <div class=\"vl-1-name cell\">";
            // line 191
            echo twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation1Name", [], "any", false, false, false, 191);
            echo "</div>
                        ";
            // line 192
            if (twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Name", [], "any", false, false, false, 192)) {
                // line 193
                echo "                          <div class=\"vl-2-name cell\">";
                echo twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Name", [], "any", false, false, false, 193);
                echo "</div>
                        ";
            }
            // line 195
            echo "                        <div class=\"cell\">Price</div>
                        <div class=\"cell\">Stock</div>
                        <div class=\"cell\">SKU</div>
                      </div>

                      ";
            // line 200
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variationList", [], "any", false, false, false, 200)) > 0)) {
                // line 201
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variationList", [], "any", false, false, false, 201));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 202
                    echo "                      <div class=\"vl-content vl-row\">
                        <div class=\"vl-1-option cell\">";
                    // line 203
                    echo $context["key"];
                    echo "</div>
                        <div class=\"vl-info-container\">
                        
                          ";
                    // line 206
                    if ((twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Name", [], "any", false, false, false, 206) && (twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Options", [], "any", false, false, false, 206) > 0))) {
                        // line 207
                        echo "                            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["value"]);
                        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                            // line 208
                            echo "                            <div class=\"vl-ic-row\">
                              <div class=\"vl-2-option cell\">";
                            // line 209
                            echo $context["k"];
                            echo "</div>
                              <div class=\"vl-price cell\"><input type=\"number\" placeholder=\"Price\" value=\"";
                            // line 210
                            echo twig_get_attribute($this->env, $this->source, $context["v"], "price", [], "any", false, false, false, 210);
                            echo "\" step=\"1\" maxlength=\"7\"></div>
                              <div class=\"vl-stock cell\"><input type=\"number\" placeholder=\"Stock\" value=\"";
                            // line 211
                            echo twig_get_attribute($this->env, $this->source, $context["v"], "stock", [], "any", false, false, false, 211);
                            echo "\" min=\"0\" maxlength=\"4\"></div>
                              <div class=\"vl-sku cell\"><input type=\"text\" placeholder=\"SKU\" value=\"";
                            // line 212
                            echo twig_get_attribute($this->env, $this->source, $context["v"], "sku", [], "any", false, false, false, 212);
                            echo "\" maxlength=\"12\"></div>
                            </div>
                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 215
                        echo "                          ";
                    } else {
                        // line 216
                        echo "                            <div class=\"vl-ic-row\">
                              <div class=\"vl-price cell\"><input type=\"number\" placeholder=\"Price\" value=\"";
                        // line 217
                        echo twig_get_attribute($this->env, $this->source, $context["value"], "price", [], "any", false, false, false, 217);
                        echo "\" step=\"1\" maxlength=\"7\"></div>
                              <div class=\"vl-stock cell\"><input type=\"number\" placeholder=\"Stock\" value=\"";
                        // line 218
                        echo twig_get_attribute($this->env, $this->source, $context["value"], "stock", [], "any", false, false, false, 218);
                        echo "\" min=\"0\" maxlength=\"4\"></div>
                              <div class=\"vl-sku cell\"><input type=\"text\" placeholder=\"SKU\" value=\"";
                        // line 219
                        echo twig_get_attribute($this->env, $this->source, $context["value"], "sku", [], "any", false, false, false, 219);
                        echo "\" maxlength=\"12\"></div>
                            </div>
                          ";
                    }
                    // line 222
                    echo "
                        </div>
                      </div>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 226
                echo "                      ";
            } else {
                // line 227
                echo "                      <div class=\"vl-content vl-row\">
                        <div class=\"vl-1-option cell\">Option</div>
                        <div class=\"vl-info-container\">
                          <div class=\"vl-ic-row\">
                            <div class=\"vl-price cell\"><input type=\"number\" placeholder=\"Price\" name=\"o-price\" min=\"0\" maxlength=\"7\"></div>
                            <div class=\"vl-stock cell\"><input type=\"number\" placeholder=\"Stock\" min=\"0\" max=\"999\"></div>
                            <div class=\"vl-sku cell\"><input type=\"text\" placeholder=\"SKU\" maxlength=\"12\"></div>
                          </div>
                        </div>
                      </div>
                      ";
            }
            // line 238
            echo "                    </div>  

                    ";
        } else {
            // line 241
            echo "                    <div class=\"variation-list-container\">
                      <div class=\"vl-header vl-row\">
                        <div class=\"vl-1-name cell\">Name</div>
                        <div class=\"cell\">Price</div>
                        <div class=\"cell\">Stock</div>
                        <div class=\"cell\">SKU</div>
                      </div>
                      <div class=\"vl-content vl-row\">
                        <div class=\"vl-1-option cell\">Option</div>
                        <div class=\"vl-info-container\">
                          <div class=\"vl-ic-row\">
                            <div class=\"vl-price cell\"><input type=\"number\" placeholder=\"Price\" name=\"o-price\" min=\"0\" maxlength=\"7\"></div>
                            <div class=\"vl-stock cell\"><input type=\"number\" placeholder=\"Stock\" min=\"0\" max=\"999\"></div>
                            <div class=\"vl-sku cell\"><input type=\"text\" placeholder=\"SKU\" maxlength=\"12\"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    ";
        }
        // line 260
        echo "                    
                  </div>
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 266
        echo ($context["help_minimum"] ?? null);
        echo "\">Media Management</span></label>
                <div class=\"col-sm-10\">
                  <label><span>Product Image</span></label>
                  <div class=\"drop-image-container product-img\">
                    <div class=\"img-box-container\"> <div class=\"img-box\"></div> <input type=\"file\" name=\"prod-img[]\" multiple=\"multiple\" accept=\"image/*\"> <div class=\"delete-img\">&#10006;</div> </div>
                    <div class=\"img-box-container\"> <div class=\"img-box\"></div> <input type=\"file\" name=\"prod-img[]\" multiple=\"multiple\" accept=\"image/*\"> <div class=\"delete-img\">&#10006;</div> </div>
                    <div class=\"img-box-container\"> <div class=\"img-box\"></div> <input type=\"file\" name=\"prod-img[]\" multiple=\"multiple\" accept=\"image/*\"> <div class=\"delete-img\">&#10006;</div> </div>
                    <div class=\"img-box-container\"> <div class=\"img-box\"></div> <input type=\"file\" name=\"prod-img[]\" multiple=\"multiple\" accept=\"image/*\"> <div class=\"delete-img\">&#10006;</div> </div>
                    <div class=\"img-box-container\"> <div class=\"img-box\"></div> <input type=\"file\" name=\"prod-img[]\" multiple=\"multiple\" accept=\"image/*\"> <div class=\"delete-img\">&#10006;</div> </div>
                    <div class=\"img-box-container\"> <div class=\"img-box\"></div> <input type=\"file\" name=\"prod-img[]\" multiple=\"multiple\" accept=\"image/*\"> <div class=\"delete-img\">&#10006;</div> </div>
                    <div class=\"img-box-container\"> <div class=\"img-box\"></div> <input type=\"file\" name=\"prod-img[]\" multiple=\"multiple\" accept=\"image/*\"> <div class=\"delete-img\">&#10006;</div> </div>
                    <div class=\"img-box-container\"> <div class=\"img-box\"></div> <input type=\"file\" name=\"prod-img[]\" multiple=\"multiple\" accept=\"image/*\"> <div class=\"delete-img\">&#10006;</div> </div>
                    <div class=\"img-box-container\"> <div class=\"img-box\"></div> <input type=\"file\" name=\"prod-img[]\" multiple=\"multiple\" accept=\"image/*\"> <div class=\"delete-img\">&#10006;</div> </div>
                  </div>

                  <div class=\"variation-img-wrapper\" style=\"margin-top:30px\">
                    ";
        // line 282
        if ((twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation1Options", [], "any", false, false, false, 282) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation1Options", [], "any", false, false, false, 282)) > 0))) {
            // line 283
            echo "                    <label><span>Variation 1</span></label>
                    <div class=\"drop-image-container var-img\">
                        ";
            // line 285
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation1Options", [], "any", false, false, false, 285));
            foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                // line 286
                echo "                          <div class=\"img-box-container\"> 
                            <div class=\"img-box\"></div> <input type=\"file\" name=\"var-img[]\" multiple=\"multiple\" accept=\"image/*\">
                            <p class=\"img-p\">";
                // line 288
                echo $context["v"];
                echo "</p>
                            <div class=\"delete-img\">&#10006;</div>
                          </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 292
            echo "                    </div>
                    ";
        }
        // line 294
        echo "                  </div>  
                </div>
              </div>

              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-minimum\"><span data-toggle=\"tooltip\" title=\"";
        // line 299
        echo ($context["help_minimum"] ?? null);
        echo "\">";
        echo ($context["entry_minimum"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"minimum\" value=\"";
        // line 301
        echo ($context["minimum"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_minimum"] ?? null);
        echo "\" id=\"input-minimum\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-subtract\">";
        // line 305
        echo ($context["entry_subtract"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"subtract\" id=\"input-subtract\" class=\"form-control\">


                    ";
        // line 310
        if (($context["subtract"] ?? null)) {
            // line 311
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 313
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 314
            echo ($context["text_no"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 318
            echo "

                      <option value=\"1\">";
            // line 320
            echo ($context["text_yes"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 321
            echo ($context["text_no"] ?? null);
            echo "</option>


                    ";
        }
        // line 325
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-stock-status\"><span data-toggle=\"tooltip\" title=\"";
        // line 331
        echo ($context["help_stock_status"] ?? null);
        echo "\">";
        echo ($context["entry_stock_status"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"stock_status_id\" id=\"input-stock-status\" class=\"form-control\">


                    ";
        // line 336
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stock_statuses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["stock_status"]) {
            // line 337
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 337) == ($context["stock_status_id"] ?? null))) {
                // line 338
                echo "

                        <option value=\"";
                // line 340
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 340);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 340);
                echo "</option>


                      ";
            } else {
                // line 344
                echo "

                        <option value=\"";
                // line 346
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "stock_status_id", [], "any", false, false, false, 346);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["stock_status"], "name", [], "any", false, false, false, 346);
                echo "</option>


                      ";
            }
            // line 350
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stock_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 351
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 357
        echo ($context["entry_shipping"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <label class=\"radio-inline\"> ";
        // line 359
        if (($context["shipping"] ?? null)) {
            // line 360
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\" checked=\"checked\"/>
                      ";
            // line 361
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        } else {
            // line 363
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"1\"/>
                      ";
            // line 364
            echo ($context["text_yes"] ?? null);
            echo "
                    ";
        }
        // line 365
        echo " </label> <label class=\"radio-inline\"> ";
        if ( !($context["shipping"] ?? null)) {
            // line 366
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\" checked=\"checked\"/>
                      ";
            // line 367
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        } else {
            // line 369
            echo "                      <input type=\"radio\" name=\"shipping\" value=\"0\"/>
                      ";
            // line 370
            echo ($context["text_no"] ?? null);
            echo "
                    ";
        }
        // line 371
        echo " </label>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-date-available\">";
        // line 375
        echo ($context["entry_date_available"] ?? null);
        echo "</label>
                <div class=\"col-sm-3\">
                  <div class=\"input-group date\">
                    <input type=\"text\" name=\"date_available\" value=\"";
        // line 378
        echo ($context["date_available"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_available"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-available\" class=\"form-control\"/> <span class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                    </span></div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length\">";
        // line 384
        echo ($context["entry_dimension"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"row\">
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"length\" value=\"";
        // line 388
        echo ($context["length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_length"] ?? null);
        echo "\" id=\"input-length\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"width\" value=\"";
        // line 391
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\"/>
                    </div>
                    <div class=\"col-sm-4\">
                      <input type=\"text\" name=\"height\" value=\"";
        // line 394
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\"/>
                    </div>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-length-class\">";
        // line 400
        echo ($context["entry_length_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"length_class_id\" id=\"input-length-class\" class=\"form-control\">


                    ";
        // line 405
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["length_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["length_class"]) {
            // line 406
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 406) == ($context["length_class_id"] ?? null))) {
                // line 407
                echo "

                        <option value=\"";
                // line 409
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 409);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 409);
                echo "</option>


                      ";
            } else {
                // line 413
                echo "

                        <option value=\"";
                // line 415
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "length_class_id", [], "any", false, false, false, 415);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["length_class"], "title", [], "any", false, false, false, 415);
                echo "</option>


                      ";
            }
            // line 419
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['length_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 420
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight\">";
        // line 426
        echo ($context["entry_weight"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"weight\" value=\"";
        // line 428
        echo ($context["weight"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_weight"] ?? null);
        echo "\" id=\"input-weight\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-weight-class\">";
        // line 432
        echo ($context["entry_weight_class"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"weight_class_id\" id=\"input-weight-class\" class=\"form-control\">


                    ";
        // line 437
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["weight_classes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["weight_class"]) {
            // line 438
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 438) == ($context["weight_class_id"] ?? null))) {
                // line 439
                echo "

                        <option value=\"";
                // line 441
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 441);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 441);
                echo "</option>


                      ";
            } else {
                // line 445
                echo "

                        <option value=\"";
                // line 447
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "weight_class_id", [], "any", false, false, false, 447);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["weight_class"], "title", [], "any", false, false, false, 447);
                echo "</option>


                      ";
            }
            // line 451
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['weight_class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 452
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 458
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">


                    ";
        // line 463
        if (($context["status"] ?? null)) {
            // line 464
            echo "

                      <option value=\"1\" selected=\"selected\">";
            // line 466
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 467
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        } else {
            // line 471
            echo "

                      <option value=\"1\">";
            // line 473
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 474
            echo ($context["text_disabled"] ?? null);
            echo "</option>


                    ";
        }
        // line 478
        echo "

                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 484
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 486
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\"/>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-links\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
        // line 492
        echo ($context["help_manufacturer"] ?? null);
        echo "\">";
        echo ($context["entry_manufacturer"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"manufacturer\" value=\"";
        // line 494
        echo ($context["manufacturer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_manufacturer"] ?? null);
        echo "\" id=\"input-manufacturer\" class=\"form-control\"/> <input type=\"hidden\" name=\"manufacturer_id\" value=\"";
        echo ($context["manufacturer_id"] ?? null);
        echo "\"/>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 498
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"category\" value=\"\" placeholder=\"";
        // line 500
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\"/>
                  <div id=\"product-category\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 501
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_category"]) {
            // line 502
            echo "                      <div id=\"product-category";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 502);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "name", [], "any", false, false, false, 502);
            echo "
                        <input type=\"hidden\" name=\"product_category[]\" value=\"";
            // line 503
            echo twig_get_attribute($this->env, $this->source, $context["product_category"], "category_id", [], "any", false, false, false, 503);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 505
        echo "</div>
                </div>
              </div>
    
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 510
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"related\" value=\"\" placeholder=\"";
        // line 512
        echo ($context["entry_related"] ?? null);
        echo "\" id=\"input-related\" class=\"form-control\"/>
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 513
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_relateds"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 514
            echo "                      <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 514);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 514);
            echo "
                        <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 515
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 515);
            echo "\"/>
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 517
        echo "</div>
                </div>
              </div>
            </div>

            <div class=\"tab-pane\" id=\"tab-discount\">
              <div class=\"table-responsive\">
                <table id=\"discount\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 527
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 528
        echo ($context["entry_quantity"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 529
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 530
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 531
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 532
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 538
        $context["discount_row"] = 0;
        // line 539
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_discounts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_discount"]) {
            // line 540
            echo "                      <tr id=\"discount-row";
            echo ($context["discount_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_discount[";
            // line 541
            echo ($context["discount_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">
                            ";
            // line 542
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 543
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 543) == twig_get_attribute($this->env, $this->source, $context["product_discount"], "customer_group_id", [], "any", false, false, false, 543))) {
                    // line 544
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 544);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 544);
                    echo "</option>
                              ";
                } else {
                    // line 546
                    echo "                                <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 546);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 546);
                    echo "</option>
                              ";
                }
                // line 548
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 549
            echo "                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 550
            echo ($context["discount_row"] ?? null);
            echo "][quantity]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "quantity", [], "any", false, false, false, 550);
            echo "\" placeholder=\"";
            echo ($context["entry_quantity"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 551
            echo ($context["discount_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "priority", [], "any", false, false, false, 551);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_discount[";
            // line 552
            echo ($context["discount_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "price", [], "any", false, false, false, 552);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 555
            echo ($context["discount_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_start", [], "any", false, false, false, 555);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_discount[";
            // line 561
            echo ($context["discount_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_discount"], "date_end", [], "any", false, false, false, 561);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#discount-row";
            // line 565
            echo ($context["discount_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 567
            $context["discount_row"] = (($context["discount_row"] ?? null) + 1);
            // line 568
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_discount'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 569
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"6\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addDiscount();\" data-toggle=\"tooltip\" title=\"";
        // line 574
        echo ($context["button_discount_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-special\">
              <div class=\"table-responsive\">
                <table id=\"special\" class=\"table table-striped table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 585
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 586
        echo ($context["entry_priority"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 587
        echo ($context["entry_price"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 588
        echo ($context["entry_date_start"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 589
        echo ($context["entry_date_end"] ?? null);
        echo "</td>
                      <td></td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 595
        $context["special_row"] = 0;
        // line 596
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["product_specials"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product_special"]) {
            // line 597
            echo "                      <tr id=\"special-row";
            echo ($context["special_row"] ?? null);
            echo "\">
                        <td class=\"text-left\"><select name=\"product_special[";
            // line 598
            echo ($context["special_row"] ?? null);
            echo "][customer_group_id]\" class=\"form-control\">


                            ";
            // line 601
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 602
                echo "                              ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 602) == twig_get_attribute($this->env, $this->source, $context["product_special"], "customer_group_id", [], "any", false, false, false, 602))) {
                    // line 603
                    echo "

                                <option value=\"";
                    // line 605
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 605);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 605);
                    echo "</option>


                              ";
                } else {
                    // line 609
                    echo "

                                <option value=\"";
                    // line 611
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 611);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 611);
                    echo "</option>


                              ";
                }
                // line 615
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 616
            echo "

                          </select></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 619
            echo ($context["special_row"] ?? null);
            echo "][priority]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "priority", [], "any", false, false, false, 619);
            echo "\" placeholder=\"";
            echo ($context["entry_priority"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_special[";
            // line 620
            echo ($context["special_row"] ?? null);
            echo "][price]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "price", [], "any", false, false, false, 620);
            echo "\" placeholder=\"";
            echo ($context["entry_price"] ?? null);
            echo "\" class=\"form-control\"/></td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 623
            echo ($context["special_row"] ?? null);
            echo "][date_start]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_start", [], "any", false, false, false, 623);
            echo "\" placeholder=\"";
            echo ($context["entry_date_start"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\" style=\"width: 20%;\">
                          <div class=\"input-group date\">
                            <input type=\"text\" name=\"product_special[";
            // line 629
            echo ($context["special_row"] ?? null);
            echo "][date_end]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product_special"], "date_end", [], "any", false, false, false, 629);
            echo "\" placeholder=\"";
            echo ($context["entry_date_end"] ?? null);
            echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\"/> <span class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                        </span></div>
                        </td>
                        <td class=\"text-left\"><button type=\"button\" onclick=\"\$('#special-row";
            // line 633
            echo ($context["special_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
                      </tr>
                      ";
            // line 635
            $context["special_row"] = (($context["special_row"] ?? null) + 1);
            // line 636
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_special'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 637
        echo "                  </tbody>

                  <tfoot>
                    <tr>
                      <td colspan=\"5\"></td>
                      <td class=\"text-left\"><button type=\"button\" onclick=\"addSpecial();\" data-toggle=\"tooltip\" title=\"";
        // line 642
        echo ($context["button_special_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-reward\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-points\"><span data-toggle=\"tooltip\" title=\"";
        // line 650
        echo ($context["help_points"] ?? null);
        echo "\">";
        echo ($context["entry_points"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"points\" value=\"";
        // line 652
        echo ($context["points"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_points"] ?? null);
        echo "\" id=\"input-points\" class=\"form-control\"/>
                </div>
              </div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 659
        echo ($context["entry_customer_group"] ?? null);
        echo "</td>
                      <td class=\"text-right\">";
        // line 660
        echo ($context["entry_reward"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 665
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 666
            echo "                      <tr>
                        <td class=\"text-left\">";
            // line 667
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 667);
            echo "</td>
                        <td class=\"text-right\"><input type=\"text\" name=\"product_reward[";
            // line 668
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 668);
            echo "][points]\" value=\"";
            echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["product_reward"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 668)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["product_reward"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 668)] ?? null) : null), "points", [], "any", false, false, false, 668)) : (""));
            echo "\" class=\"form-control\"/></td>
                      </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 671
        echo "                  </tbody>

                </table>
              </div>
            </div>
            
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\"/>
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\"/>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  <script type=\"text/javascript\"><!--
  // Manufacturer
  \$('input[name=\\'manufacturer\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/manufacturer/autocomplete&user_token=";
        // line 696
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  json.unshift({
\t\t\t\t\t  manufacturer_id: 0,
\t\t\t\t\t  name: '";
        // line 701
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t  });

\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['manufacturer_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'manufacturer\\']').val(item['label']);
\t\t  \$('input[name=\\'manufacturer_id\\']').val(item['value']);
\t  }
  });

  // Category
  \$('input[name=\\'category\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 723
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['category_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'category\\']').val('');

\t\t  \$('#product-category' + item['value']).remove();

\t\t  \$('#product-category').append('<div id=\"product-category' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_category[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-category').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Filter
  \$('input[name=\\'filter\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 752
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['filter_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'filter\\']').val('');

\t\t  \$('#product-filter' + item['value']).remove();

\t\t  \$('#product-filter').append('<div id=\"product-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-filter').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Downloads
  \$('input[name=\\'download\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/download/autocomplete&user_token=";
        // line 781
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['download_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'download\\']').val('');

\t\t  \$('#product-download' + item['value']).remove();

\t\t  \$('#product-download').append('<div id=\"product-download' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_download[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-download').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });

  // Related
  \$('input[name=\\'related\\']').autocomplete({
\t  'source': function(request, response) {
\t\t  \$.ajax({
\t\t\t  url: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 810
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\t  dataType: 'json',
\t\t\t  success: function(json) {
\t\t\t\t  response(\$.map(json, function(item) {
\t\t\t\t\t  return {
\t\t\t\t\t\t  label: item['name'],
\t\t\t\t\t\t  value: item['product_id']
\t\t\t\t\t  }
\t\t\t\t  }));
\t\t\t  }
\t\t  });
\t  },
\t  'select': function(item) {
\t\t  \$('input[name=\\'related\\']').val('');

\t\t  \$('#product-related' + item['value']).remove();

\t\t  \$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');
\t  }
  });

  \$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t  \$(this).parent().remove();
  });
  //--></script>


  //--></script>
  <script type=\"text/javascript\"><!--
  var discount_row = ";
        // line 839
        echo ($context["discount_row"] ?? null);
        echo ";

  function addDiscount() {
\t  html = '<tr id=\"discount-row' + discount_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_discount[' + discount_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 844
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 845
            echo "\t  html += '    <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 845);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 845), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 847
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][quantity]\" value=\"\" placeholder=\"";
        // line 848
        echo ($context["entry_quantity"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][priority]\" value=\"\" placeholder=\"";
        // line 849
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_discount[' + discount_row + '][price]\" value=\"\" placeholder=\"";
        // line 850
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 851
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_discount[' + discount_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 852
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#discount-row' + discount_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 853
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#discount tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  pickTime: false
\t  });

\t  discount_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  var special_row = ";
        // line 867
        echo ($context["special_row"] ?? null);
        echo ";

  function addSpecial() {
\t  html = '<tr id=\"special-row' + special_row + '\">';
\t  html += '  <td class=\"text-left\"><select name=\"product_special[' + special_row + '][customer_group_id]\" class=\"form-control\">';
    ";
        // line 872
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 873
            echo "\t  html += '      <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 873);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 873), "js");
            echo "</option>';
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 875
        echo "\t  html += '  </select></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][priority]\" value=\"\" placeholder=\"";
        // line 876
        echo ($context["entry_priority"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-right\"><input type=\"text\" name=\"product_special[' + special_row + '][price]\" value=\"\" placeholder=\"";
        // line 877
        echo ($context["entry_price"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_start]\" value=\"\" placeholder=\"";
        // line 878
        echo ($context["entry_date_start"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\" style=\"width: 20%;\"><div class=\"input-group date\"><input type=\"text\" name=\"product_special[' + special_row + '][date_end]\" value=\"\" placeholder=\"";
        // line 879
        echo ($context["entry_date_end"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div></td>';
\t  html += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#special-row' + special_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 880
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\t  html += '</tr>';

\t  \$('#special tbody').append(html);

\t  \$('.date').datetimepicker({
\t\t  language: '";
        // line 886
        echo ($context["datepicker"] ?? null);
        echo "',
\t\t  pickTime: false
\t  });

\t  special_row++;
  }

  //--></script>
  <script type=\"text/javascript\"><!--
  \$('.date').datetimepicker({
\t  language: '";
        // line 896
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickTime: false
  });

  \$('.time').datetimepicker({
\t  language: '";
        // line 901
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: false
  });

  \$('.datetime').datetimepicker({
\t  language: '";
        // line 906
        echo ($context["datepicker"] ?? null);
        echo "',
\t  pickDate: true,
\t  pickTime: true
  });
  //--></script>
  <script type=\"text/javascript\"><!--
  \$('#language a:first').tab('show');
  \$('#option a:first').tab('show');
  //--></script>
</div>
";
        // line 916
        echo ($context["footer"] ?? null);
        echo " 

//add on code
<script type=\"text/javascript\">

  var variation1 = ";
        // line 921
        if (twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation1Name", [], "any", false, false, false, 921)) {
            echo " 1 ";
        } else {
            echo " 0 ";
        }
        echo ";
  var variation2 = ";
        // line 922
        if (twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Name", [], "any", false, false, false, 922)) {
            echo " 1 ";
        } else {
            echo " 0 ";
        }
        echo ";

  \$('.enable-variation, .disable-variation').on('click', function() {
\t  \$('.variation-container, .disable-variation, .enable-variation').toggle();
    if (\$(this).hasClass('enable-variation')) {
      enableVariation();
    }
  });

  
\$('.edit-product').on('click', function() {
      var data = \$(\"#form-product\").serialize();
      var product_id = ";
        // line 934
        echo ($context["product_id"] ?? null);
        echo ";
      var variation = generateVariation();

      \$.ajax({
        url: 'index.php?route=catalog/product/editProduct&user_token=";
        // line 938
        echo ($context["user_token"] ?? null);
        echo "',
        type: 'post',
        data: {data:data, product_id:product_id, variation: variation},
        dataType: 'json',
        beforeSend: function() {
          \$('.success-message, .error-message').css(\"display\", \"none\");
\t\t    },
        success: function(json) {
          if (json.success) {
            console.log(variation);
            uploadProductImages(variation);
            console.log(json);
          } else {
            \$('.error-message').find('span').text(json.error);
            \$('.error-message').toggle();
          }
\t\t   },
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      }); 

});

\$('.add-product').on('click', function() {
      var data = \$(\"#form-product\").serialize();
      var variation = generateVariation();

      \$.ajax({
          url: 'index.php?route=catalog/product/addProduct&user_token=";
        // line 967
        echo ($context["user_token"] ?? null);
        echo "',
          type: 'post',
          data: {data:data,variation:variation},
          dataType: 'json',
          beforeSend: function() {
            \$('.success-message, .error-message').css(\"display\", \"none\");
          },
          success: function(json) {
              if (json.success && json.product_id) {
                uploadProductImages(json.product_id);
              } else {
                var warning = json.error.warning;
                var text = \"\";
                \$.each( warning, function( k, v) {
                  text+= \"- \"+v+\"</br>\";
                });
                alertify.alert(\"Warning\", text);
              }
        },
          error: function(xhr, ajaxOptions, thrownError) {
              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
          }
      });
});

function uploadProductImages(new_product_id = 0) {
  var formImage = new FormData();
  var product_id = new_product_id > 0 ? new_product_id : ";
        // line 994
        echo ($context["product_id"] ?? null);
        echo ";
  \$.each(uploadImages, function( i, value ) {
    var filetype = value.name.split('.')[1];
    formImage.append('file[]', value, 'img_' + i + '.' + filetype);
  });

  \$.each(variationImages, function(i, value) {
    var filetype = value.name.split('.')[1];
    formImage.append('file[]', value, 'var_' + i + '.' + filetype);
  });

  \$.ajax({
    url: 'index.php?route=common/filemanager/uploadProductImages&user_token=";
        // line 1006
        echo ($context["user_token"] ?? null);
        echo "&product_id='+ product_id,
    type: 'post',
    data: formImage,
    dataType: 'json',
    cache: false,
    contentType: false,
    processData: false,
    beforeSend: function() {
      
    },
    success: function(json) {
      if (json.success) {
        if (new_product_id > 0) {
          alertify.alert(\"Product Added Succesfully\", function(){ 
            var url = \"index.php?route=catalog/product/edit&user_token=";
        // line 1020
        echo ($context["user_token"] ?? null);
        echo "&product_id=\" + product_id;
            window.location.replace(url);
          });
        } else {
          alertify.alert(\"Product Updated\", function(){ 
            window.location.reload();
          });
        }
      } else {
        alertify.alert(\"Warning\", json.error);
      }
  },
    error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
    }
  });
}


\$('.show-variation-2, .disable-variation-2').on('click', function() {
  \$('.variation-2, .show-variation-2, .disable-variation-2').toggle();
  if (variation2 == 0) {
    enableVariation2();
    variation2 = 1;  
  } else {
    disableVariation2();
    variation2 = 0;  
  }
  
});

  function enableVariation() {
    \$('.var-img').html('<div class=\"img-box-container\"> <div class=\"img-box\"></div> <input type=\"file\" name=\"var-img[]\" multiple=\"multiple\" accept=\"image/*\"> </div>');
  }

  function enableVariation2() {
    \$('.vl-header.vl-row .vl-1-name').after('<div class=\"vl-2-name cell\">Name</div>');
    \$('.vl-ic-row').prepend('<div class=\"vl-2-option cell\">Option</div>');
    \$('.variation-list-container').addClass('v2-enabled');
    addVariation2Row();
  }

  function disableVariation2() {
    \$('.v2-option-tr:not(:first)').remove();
    \$('.variation-2').find('input').val(\"\");

    \$('div.vl-2-name, div.vl-2-option').remove();
    \$('.variation-list-container').removeClass('v2-enabled');
    \$('.vl-info-container').find('.vl-ic-row:not(:first)').remove();
  }

  \$('p.add-opt').on('click', function() {
    var tb = \$(this).closest('table').hasClass('table-v1') ? 1 : 2;

    \$(this).closest('tr').before('<tr class=\"v'+tb+'-option-tr\"><td></td><td><input type=\"text\" placeholder=\"Enter Options. Eg:Red\" class=\"form-control\" maxlength=\"14\"></td><td>'
                            +' <i class=\"fa fa-arrow-circle-up\" aria-hidden=\"true\"></i>'
                            +' <i class=\"fa fa-arrow-circle-down\" aria-hidden=\"true\"></i>'
                            +' <i class=\"fa fa-times-circle\" aria-hidden=\"true\"></i> </td></tr>');

    if (tb == 1) {
      addVariation1Row();
    } else if (tb == 2) {
      addVariation2Row();
    }
  });

  function addVariation1Row() {
    var html = '<div class=\"vl-ic-row\">'
                + '<div class=\"vl-price cell\"><input type=\"number\" placeholder=\"Price\" step=\"1\" maxlength=\"7\"></div>'
                + '<div class=\"vl-stock cell\"><input type=\"number\" placeholder=\"Stock\" min=\"0\" maxlength=\"4\"></div>'
                + '<div class=\"vl-sku cell\"><input type=\"text\" placeholder=\"SKU\" maxlength=\"12\"></div>'
              + '</div>';

    if (variation2 == 1) { //got variation 2 
      html = \"\";
      \$.each(\$('.v2-option-tr'), function() {
        html+= '<div class=\"vl-ic-row\">'
                + '<div class=\"vl-2-option cell\">Option</div>'
                + '<div class=\"vl-price cell\"><input type=\"number\" placeholder=\"Price\" step=\"1\" maxlength=\"7\"></div>'
                + '<div class=\"vl-stock cell\"><input type=\"number\" placeholder=\"Stock\" min=\"0\" maxlength=\"4\"></div>'
                + '<div class=\"vl-sku cell\"><input type=\"text\" placeholder=\"SKU\" maxlength=\"12\"></div>'
              + '</div>';
      });
    }              

    \$('.variation-list-container').append('<div class=\"vl-content vl-row\">'
                      + '<div class=\"vl-1-option cell\">Option</div>'
                      + '<div class=\"vl-info-container\">' + html + '</div> </div>');
  }

  function addVariation2Row() { 
      if (\$('.v2-option-tr').length > 1) {
        \$('.vl-info-container').append('<div class=\"vl-ic-row\">'
                                        + '<div class=\"vl-2-option cell\">Option</div>'
                                        + '<div class=\"vl-price cell\"><input type=\"number\" placeholder=\"Price\" step=\"1\" maxlength=\"7\"></div>'
                                        + '<div class=\"vl-stock cell\"><input type=\"number\" placeholder=\"Stock\" min=\"0\" max=\"999\"></div>'
                                        + '<div class=\"vl-sku cell\"><input type=\"text\" placeholder=\"SKU\" maxlength=\"12\"></div>'
                                      + '</div>');
      }
  }

  function deleteVariation1Row() {
    
  }

  //delete row
  \$(document).on('click', '.variation-container .fa-times-circle', function() { 
    var trs = \$(this).closest('table').find('tr:not(.variation-name, .add-options)');
    var tr = \$(this).closest('tr');

    var index = \$(this).closest('table').find('.fa-times-circle').index(this); //get which row is this
    var variation = \$(this).closest('tr').hasClass('v1-option-tr') ? 'v1' : (\$(this).closest('tr').hasClass('v2-option-tr') ? 'v2' : 0);

    if (trs[0] == tr[0]) {

      if (trs.length > 1) {
        
        tr.find('input').val(\$(trs[1]).find('input').val());
        \$(trs[1]).remove();

        //variation list
        if (variation == 'v1') {
          \$('.vl-content.vl-row').eq(index).remove();
        } else if (variation == 'v2') {
          \$('.vl-info-container').each(function() {
            \$(this).find('.vl-ic-row').eq(index).remove();
          });
        }

      } else {
        tr.find('input').val('');
      }
    } else {

      tr.remove();

      //variation list
      if (variation == 'v1') {
        \$('.vl-content.vl-row').eq(index).remove();
      } else if (variation == 'v2') {
        \$('.vl-info-container').each(function(){
            \$(this).find('.vl-ic-row').eq(index).remove();
        });
      }
    }
  });

  //go down function
  \$(document).on('click', '.variation-container .fa-arrow-circle-down', function() {
    var trs = \$(this).closest('table').find('tr:not(.variation-name, .add-options)');
    var tr = \$(this).closest('tr');
    var index = \$(this).closest('table').find('.fa-arrow-circle-down').index(this); //get which row is this
    var variation = \$(this).closest('tr').hasClass('v1-option-tr') ? 'v1' : (\$(this).closest('tr').hasClass('v2-option-tr') ? 'v2' : 0);

    if (trs.length > 1 && (tr[0] != trs[trs.length - 1]) ) {
      var tmp1 = tr.find('input').val();
      var tmp2 = tr.next('tr').find('input').val();
      tr.find('input').val(tmp2);
      tr.next('tr').find('input').val(tmp1);

      if (variation == 'v2') {
        \$('.vl-info-container').each(function(){
          var row = \$(this).find('.vl-ic-row').eq(index);
          row.next().insertBefore(row);
        });
      } else {
        var row = \$('.variation-list-container').find('.vl-content.vl-row').eq(index);
        row.next().insertBefore(row);
      }
      
    }
  });

  // go up function
  \$(document).on('click', '.variation-container .fa-arrow-circle-up', function() {
    var trs = \$(this).closest('table').find('tr:not(.variation-name, .add-options)');
    var tr = \$(this).closest('tr');
    var index = \$(this).closest('table').find('.fa-arrow-circle-up').index(this); //get which row is this
    var variation = \$(this).closest('tr').hasClass('v1-option-tr') ? 'v1' : (\$(this).closest('tr').hasClass('v2-option-tr') ? 'v2' : 0);

    if (trs.length > 1 && (tr[0] != trs[0]) ) {
      var tmp1 = tr.find('input').val();
      var tmp2 = tr.prev('tr').find('input').val();
      tr.find('input').val(tmp2);
      tr.prev('tr').find('input').val(tmp1);

      if (variation == 'v2') {
        \$('.vl-info-container').each(function(){
          var row = \$(this).find('.vl-ic-row').eq(index);
          row.prev().insertAfter(row);
        });
      } else {
        var row = \$('.variation-list-container').find('.vl-content.vl-row').eq(index);
        row.next().insertAfter(row);
      }
    }
  });

  \$(document).on('input', 'input[name=\"v1-name\"], input[name=\"v2-name\"]', function() {
    if (this.name == 'v1-name') {
      \$('.vl-1-name').text(\$(this).val());
    } else {
      \$('.vl-2-name').text(\$(this).val());
    }
  });

  \$(document).on('input', '.v1-option-tr input, .v2-option-tr input', function() {
    var index = \"\";
    if (\$(this).closest('tr').hasClass('v1-option-tr')) {
      index = \$(this).closest('table').find('tr.v1-option-tr input').index(this);
      \$('.variation-list-container').find('.vl-1-option').eq(index).text(\$(this).val());
    } else {
      var text = \$(this).val();
      index = \$(this).closest('table').find('tr.v2-option-tr input').index(this);
      \$('.vl-info-container').each(function() {
          \$(this).find('.vl-ic-row').eq(index).find('.vl-2-option').text(text);
      });
    }
      //\$('.vl-1-option').text(\$(this.));
  });

  \$(document).on('focusin', '.vi-container input', function() {
    var dv = \$(this).closest('div.cell');
    if (dv.hasClass('vi-price')) {
      \$('.vl-price').addClass('highlight');
    } else if (dv.hasClass('vi-stock')) {
      \$('.vl-stock').addClass('highlight');
    } else if (dv.hasClass('vi-sku')) {
      \$('.vl-sku').addClass('highlight');
    }
  });

  \$(document).on('focusout', '.vi-container input', function() {
    \$('.vl-info-container .cell').removeClass('highlight');
  });

  \$(document).on('click', '.vi-apply-button', function() {
    if (\$('.vi-price input').val()) {
      \$('.vl-price input').val(\$('.vi-price input').val());
    } 
    
    if (\$('.vi-stock input').val()) {
      \$('.vl-stock input').val(\$('.vi-stock input').val());
    }
    
    if (\$('.vi-sku input').val()) {
      \$('.vl-sku input').val(\$('.vi-sku input').val());
    }
  });

  function generateVariation() {
    var tmpObj = {};

    \$('.vl-content.vl-row').each(function() {
      tmpObj.variation1Name = \$('input[name=\"v1-name\"]').val();
      tmpObj.variation1Options = [];
      \$('tr.v1-option-tr').each(function() {
        tmpObj.variation1Options.push(\$(this).find('input').val());
      });

      if (variation2 == 0) {
        var tmp = {};
        \$('.vl-content.vl-row').each(function() {
          tmp[\$(this).find('.vl-1-option').text()] = {
            'price' : \$(this).find('.vl-price input').val(),
            'stock' : \$(this).find('.vl-stock input').val(),
            'sku' : \$(this).find('.vl-sku input').val()
          }
        });
        tmpObj.variationList = tmp;
      }
      else {
        tmpObj.variation2Name = \$('input[name=\"v2-name\"]').val();
        tmpObj.variation2Options = [];
        \$('tr.v2-option-tr').each(function() {
          tmpObj.variation2Options.push(\$(this).find('input').val());
        });
        var tmp = {};
        \$('.vl-content.vl-row').each(function() {
          var tmp2 = {};
          \$(this).find('.vl-ic-row').each(function() {
            tmp2[\$(this).find('.vl-2-option').text()] = {
              'price' : \$(this).find('.vl-price input').val(),
              'stock' : \$(this).find('.vl-stock input').val(),
              'sku' : \$(this).find('.vl-sku input').val()
            }
          });
          tmp[\$(this).find('.vl-1-option').text()] = tmp2;
        });
        tmpObj.variationList = tmp; 
      }
    });

    console.log(tmpObj);
    return tmpObj;
  };

//for max input
  \$(document).on('input', '.vi-container input[type=\"number\"]', function() {
    this.value=this.value.slice(0,this.maxLength);
    if (this.name == \"o-price\") {
      this.value = this.value.match(/^\\d+\\.?\\d{0,2}/); //only allow 2 decimal
    } else {
      \$(this).val(\$(this).val().replace(/\\./g, \"\")); //only allow integer
    }
  });

  //images
  var productImages = \"";
        // line 1328
        echo twig_join_filter(($context["product_images"] ?? null), ",");
        echo "\";
  var productImagesArr = productImages.split(',');
  var variation = ";
        // line 1330
        echo json_encode(($context["variation"] ?? null), twig_constant("JSON_PRETTY_PRINT"));
        echo " ;
  console.log(variation);

  \$(productImagesArr).each(function(i) {
    var filename = productImagesArr[i].split('/').pop();
    var boxNo = parseInt(productImagesArr[i].split('.')[0].slice(-1)) - 1; //img number

    if (filename.split('_')[0] == 'img') {
      \$('.product-img .img-box-container:eq('+ boxNo +')').find('.img-box').addClass('inserted').css(\"background-image\", 'url('+ productImagesArr[i] +')');
    } else if (filename.split('_')[0] == 'var' && variation.variation1Options[boxNo]) {
      \$('.var-img .img-box-container:eq('+ boxNo +')').find('.img-box').addClass('inserted').css(\"background-image\", 'url('+ productImagesArr[i] +')');
    }
  });

  \$(\".img-box\").on('dragenter', function(e) {
    e.preventDefault();
  });

  \$(\".img-box\").on('dragover', function(e) {
    e.preventDefault();
  });

  var uploadImages = {};
  var variationImages = {};
  \$(\".img-box\").on('drop', function(e) {
    e.preventDefault();

    var input = \$(this);
    var type = \$(this).closest('.drop-image-container').hasClass('product-img') ? 'product' : 'variation';
    var currentBox = parseInt(\$(this).closest('.img-box-container').prevAll().length) + 1;
    var allowInputNo = parseInt(\$(this).closest('.img-box-container').nextAll().length) + 1;
    var image = e.originalEvent.dataTransfer.files;
    var error = false;

    \$(image).each(function(i, file) {
      var imageType = /image.*/;
      if (!file.type.match(imageType)) {
        error = true;
      }
    });

    if (error == true) {
      alert('Only allow images');
    } else {
      if (image.length > allowInputNo) {
        alert('Only allow to input '+ allowInputNo + ' pictures from this box');
      } else {
        var next = input;
        \$(image).each(function(i, file) {
          var tmppath = URL.createObjectURL(file);
          //formImage.append('file[]',file);

          if (type == \"product\") {
            uploadImages[counter] = file;
          } else {
            variationImages[counter] = file;
          }

          next.closest('.img-box-container').find('.img-box').addClass('inserted').css(\"background-image\", 'url('+ tmppath +')');
          next = next.closest('.img-box-container').next();
        });
      }
    }
  });

  \$(\"input[name='prod-img[]'], input[name='var-img[]']\").on('change', function(e) {
    var input = \$(this);
    var type = \$(this).closest('.drop-image-container').hasClass('product-img') ? 'product' : 'variation';
    console.log(type);
    var currentBox = parseInt(\$(this).closest('.img-box-container').prevAll().length) + 1;
    var allowInputNo = parseInt(\$(this).closest('.img-box-container').nextAll().length) + 1;

    if (e.target.files.length > allowInputNo) {
      alert('Only allow to input '+ allowInputNo + ' pictures from this box');
    } else {
      var next = input;
      var counter = parseInt(currentBox);
      \$(e.target.files).each(function(i, file) {
        var tmppath = URL.createObjectURL(file);
        //formImage.append('file[]',file);

        if (type == \"product\") {
          uploadImages[counter] = file;
        } else {
          variationImages[counter] = file;
        }

        next.closest('.img-box-container').find('.img-box').addClass('inserted').css(\"background-image\", 'url('+ tmppath +')');
        next = next.closest('.img-box-container').next();
        counter = counter + 1;
      });
      console.log(uploadImages);
      console.log(variationImages);
    }
  });

  \$(\".img-box\").on('click', function(e) {
    \$(this).closest('.img-box-container').find('input[type=\"file\"]').trigger('click');
  });

  //delete image
  \$('.delete-img').on('click', function(e) {
    var div = \$(this).closest('.img-box-container').find('.img-box');
    if (div.hasClass('inserted')) {
      alertify.confirm('Delete Image', 'Are you sure to delete this image?', 
                function(){ 
                  var type = div.closest('.drop-image-container').hasClass('product-img') ? \"product\" : \"variation\";
                  var boxNo = parseInt(div.closest('.img-box-container').prevAll().length) + 1;
                  var image = type == 'product' ? \"img_\" + boxNo : \"var_\" + boxNo;

                  if (type == \"product\" && uploadImages[boxNo]) {
                    delete uploadImages[boxNo];
                    div.css(\"background-image\", \"\").removeClass('inserted');
                  } else if (type == \"variation\" && variationImages[boxNo]) {
                    delete variationImages[boxNo];
                    div.css(\"background-image\", \"\").removeClass('inserted');
                  } else {
                    
                    \$(productImagesArr).each(function(i) {
                      var filename = productImagesArr[i].split('/').pop();
                      if (filename.split('.')[0] == \"img_1\") { //cover image not allow to delete
                        alertify.alert(\"Cover Image is not allowed to delete, you can only change image\");
                      }
                      else {
                        if (filename.split('.')[0] == image) { 
                          \$.ajax({
                            url: 'index.php?route=common/filemanager/deleteProductImage&user_token=";
        // line 1456
        echo ($context["user_token"] ?? null);
        echo "&product_id='+ ";
        echo ($context["product_id"] ?? null);
        echo ",
                            type: 'post',
                            dataType: 'json',
                            data: {filename:filename},
                            success: function(json) {
                              if (json['error']) {
                                alertify.alert(json['error']);
                              }

                              if (json['success']) {
                                alertify.alert(json['success']);
                                div.css(\"background-image\", \"\").removeClass('inserted');
                              }
                            },
                            error: function(xhr, ajaxOptions, thrownError) {
                              alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
                            }
                          });
                        }
                      }


                    });

                  }

                } , 
                function(){}

      );
    }
  });

</script>

<style>
.alert {
  display: none;
}

.add-opt {
  cursor: pointer;
  color: #1e91cf;
}

.variation-container .fa {
  cursor: pointer;
  font-size: 18px;
}

.variation-container .fa-times-circle {
  color: red;
  font-size: 19px;
}

.vi-container {
  margin-bottom: 25px;
}

.vi-apply-button.cell {
  background-color: #1e91cf;
  color: white;
  margin-left: 10px;
  cursor: pointer;
}

.variation-list-container {
  border: 1px solid #ddd;
  border-top-width: 0;
  border-left-width: 0;
}

.vl-header.vl-row {
  background-color: #f5f5f5;
}

.vi-container, .vl-header.vl-row, .vl-content.vl-row {
  display: flex;
  margin-left: 0;
}

.vl-1-option.cell {
  flex: 25%;
  align-items: center;
  justify-content: center;
  display: flex;
}

.v2-enabled .vl-1-option.cell {
  flex: 20%;
}

.vl-info-container {
  flex: 4 1 75%;
}

.v2-enabled .vl-info-container {
  flex: 4 1 80%;
}

.vl-ic-row {
    display: flex;
}

.variation-list-container .cell {
  border-bottom-width: 0;
  border-right-width: 0;
}

.variation-list-container .cell.highlight, .variation-list-container .cell.highlight input {
  background-color: #ffe2de;
}

.cell {
  webkit-box-flex: 3;
  flex: 3;
  padding: 10px;
  border: 1px solid #ddd;
  text-align: center;
  color: grey;
  word-break: break-word;
}

.cell input {
    border-top: none;
    border-left: none;
    border-right: none;
    width: 100%;
    text-align: center;
}

.cell input:focus{
    outline: none;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

.drop-image-container {
\t
}

.img-p {
  text-align:center;
}

.img-box-container {
    display: inline-block;
    position: relative;
}

.img-box {
  width: 100px;
  height: 100px;
  margin: 5px;
  border: 2px dashed #07c6f1;
  display: inline-block;
  background-size: contain;
  background-position: center;
  background-repeat: no-repeat;
}

.img-box.inserted:hover {
  
}

.img-box.inserted:before {
  opacity: 0;
}

.img-box:before {
    content: '+';
    color: #07c6f1;
    font-size: 50px;
    display: flex;
    font-family: none;
    width: 100%;
    height: 100%;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    opacity: 1;
}

.drop-image-container input[type=\"file\"] {
  display: none;
}

.drop-image {
\tdisplay: none;
}

.delete-img {
    display: none;
    position: absolute;
    top: 0;
    right: 0;
    width: 20px;
    height: 20px;
    background-color: red;
    border-radius: 20px;
    text-align: center;
    line-height: 20px;
    cursor: pointer;
    color: white;
}

.img-box-container:hover > .delete-img {
    display: block;
}

.preview {
\tmargin: 20px;
    width: 150px;
    height: 150px;
    display: inline-block;
}

.enable-variation, .disable-variation {
    display: inline-block;
    padding: 5px 12px;
    border-radius: 2px;
    cursor: pointer;
}

.enable-variation {
    color: rgb(7, 198, 241);
    border: 1px solid rgb(7, 198, 241);
}

.disable-variation {
    color: red;
    border: 1px solid red;
}

.show-variation-2 {
    color: green;
    text-decoration: underline;
    cursor: pointer;
}

.disable-variation-2 {
    color: red;
    text-decoration: underline;
    cursor: pointer;
}

</style>";
    }

    public function getTemplateName()
    {
        return "catalog/product_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2519 => 1456,  2390 => 1330,  2385 => 1328,  2074 => 1020,  2057 => 1006,  2042 => 994,  2012 => 967,  1980 => 938,  1973 => 934,  1954 => 922,  1946 => 921,  1938 => 916,  1925 => 906,  1917 => 901,  1909 => 896,  1896 => 886,  1887 => 880,  1883 => 879,  1879 => 878,  1875 => 877,  1871 => 876,  1868 => 875,  1857 => 873,  1853 => 872,  1845 => 867,  1828 => 853,  1824 => 852,  1820 => 851,  1816 => 850,  1812 => 849,  1808 => 848,  1805 => 847,  1794 => 845,  1790 => 844,  1782 => 839,  1750 => 810,  1718 => 781,  1686 => 752,  1654 => 723,  1629 => 701,  1621 => 696,  1594 => 671,  1583 => 668,  1579 => 667,  1576 => 666,  1572 => 665,  1564 => 660,  1560 => 659,  1548 => 652,  1541 => 650,  1530 => 642,  1523 => 637,  1517 => 636,  1515 => 635,  1508 => 633,  1497 => 629,  1484 => 623,  1474 => 620,  1466 => 619,  1461 => 616,  1455 => 615,  1446 => 611,  1442 => 609,  1433 => 605,  1429 => 603,  1426 => 602,  1422 => 601,  1416 => 598,  1411 => 597,  1406 => 596,  1404 => 595,  1395 => 589,  1391 => 588,  1387 => 587,  1383 => 586,  1379 => 585,  1365 => 574,  1358 => 569,  1352 => 568,  1350 => 567,  1343 => 565,  1332 => 561,  1319 => 555,  1309 => 552,  1301 => 551,  1293 => 550,  1290 => 549,  1284 => 548,  1276 => 546,  1268 => 544,  1265 => 543,  1261 => 542,  1257 => 541,  1252 => 540,  1247 => 539,  1245 => 538,  1236 => 532,  1232 => 531,  1228 => 530,  1224 => 529,  1220 => 528,  1216 => 527,  1204 => 517,  1195 => 515,  1188 => 514,  1184 => 513,  1180 => 512,  1173 => 510,  1166 => 505,  1157 => 503,  1150 => 502,  1146 => 501,  1142 => 500,  1135 => 498,  1124 => 494,  1117 => 492,  1106 => 486,  1101 => 484,  1093 => 478,  1086 => 474,  1082 => 473,  1078 => 471,  1071 => 467,  1067 => 466,  1063 => 464,  1061 => 463,  1053 => 458,  1045 => 452,  1039 => 451,  1030 => 447,  1026 => 445,  1017 => 441,  1013 => 439,  1010 => 438,  1006 => 437,  998 => 432,  989 => 428,  984 => 426,  976 => 420,  970 => 419,  961 => 415,  957 => 413,  948 => 409,  944 => 407,  941 => 406,  937 => 405,  929 => 400,  918 => 394,  910 => 391,  902 => 388,  895 => 384,  884 => 378,  878 => 375,  872 => 371,  867 => 370,  864 => 369,  859 => 367,  856 => 366,  853 => 365,  848 => 364,  845 => 363,  840 => 361,  837 => 360,  835 => 359,  830 => 357,  822 => 351,  816 => 350,  807 => 346,  803 => 344,  794 => 340,  790 => 338,  787 => 337,  783 => 336,  773 => 331,  765 => 325,  758 => 321,  754 => 320,  750 => 318,  743 => 314,  739 => 313,  735 => 311,  733 => 310,  725 => 305,  716 => 301,  709 => 299,  702 => 294,  698 => 292,  688 => 288,  684 => 286,  680 => 285,  676 => 283,  674 => 282,  655 => 266,  647 => 260,  626 => 241,  621 => 238,  608 => 227,  605 => 226,  596 => 222,  590 => 219,  586 => 218,  582 => 217,  579 => 216,  576 => 215,  567 => 212,  563 => 211,  559 => 210,  555 => 209,  552 => 208,  547 => 207,  545 => 206,  539 => 203,  536 => 202,  531 => 201,  529 => 200,  522 => 195,  516 => 193,  514 => 192,  510 => 191,  502 => 189,  500 => 188,  482 => 172,  468 => 164,  464 => 162,  460 => 161,  450 => 154,  443 => 150,  431 => 145,  423 => 144,  415 => 143,  406 => 136,  392 => 128,  388 => 126,  384 => 125,  374 => 118,  367 => 114,  353 => 107,  344 => 105,  336 => 104,  325 => 98,  320 => 96,  311 => 92,  306 => 90,  297 => 86,  292 => 84,  283 => 80,  276 => 78,  271 => 75,  265 => 74,  263 => 73,  257 => 72,  252 => 70,  246 => 66,  237 => 63,  231 => 62,  229 => 61,  219 => 60,  212 => 58,  197 => 54,  190 => 52,  185 => 49,  179 => 48,  177 => 47,  167 => 46,  160 => 44,  154 => 42,  150 => 41,  147 => 40,  130 => 38,  126 => 37,  118 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  97 => 26,  91 => 23,  83 => 17,  72 => 15,  68 => 14,  63 => 12,  56 => 11,  52 => 9,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/product_form.twig", "");
    }
}

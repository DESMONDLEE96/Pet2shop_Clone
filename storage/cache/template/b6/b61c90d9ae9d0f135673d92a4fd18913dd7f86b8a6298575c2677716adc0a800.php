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

/* default/template/product/product.twig */
class __TwigTemplate_cd37d96e7f1e77697bfb78512461c82a51adeca041b951b71245712de3d8c8cf extends \Twig\Template
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
<div id=\"product-product\" class=\"container\">
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
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <div class=\"row\"> ";
        // line 17
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "        ";
            $context["class"] = "col-sm-8";
            // line 21
            echo "        ";
        }
        // line 22
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\"> ";
        if ((($context["cover_image"] ?? null) || ($context["images"] ?? null))) {
            // line 23
            echo "          <ul class=\"thumbnails\">
            ";
            // line 24
            if (($context["cover_image"] ?? null)) {
                // line 25
                echo "            <li class=\"image-display\"><a class=\"thumbnail\" href=\"";
                echo ($context["cover_image"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"><img src=\"";
                echo ($context["cover_image"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" /></a></li>
            ";
            }
            // line 27
            echo "            ";
            if (($context["images"] ?? null)) {
                // line 28
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 29
                    echo "            <li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                    echo $context["image"];
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\"> <img src=\"";
                    echo $context["image"];
                    echo "\" title=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" alt=\"";
                    echo ($context["heading_title"] ?? null);
                    echo "\" /></a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "            ";
            }
            // line 32
            echo "          </ul>
          ";
        }
        // line 34
        echo "          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_description"] ?? null);
        echo "</a></li>
            ";
        // line 36
        if (($context["attribute_groups"] ?? null)) {
            // line 37
            echo "            <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo ($context["tab_attribute"] ?? null);
            echo "</a></li>
            ";
        }
        // line 39
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 40
            echo "            <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo ($context["tab_review"] ?? null);
            echo "</a></li>
            ";
        }
        // line 42
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 44
        echo ($context["description"] ?? null);
        echo "</div>
            ";
        // line 45
        if (($context["attribute_groups"] ?? null)) {
            // line 46
            echo "            <div class=\"tab-pane\" id=\"tab-specification\">
              <table class=\"table table-bordered\">
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 49
                echo "                <thead>
                  <tr>
                    <td colspan=\"2\"><strong>";
                // line 51
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", [], "any", false, false, false, 51);
                echo "</strong></td>
                  </tr>
                </thead>
                <tbody>
                ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", [], "any", false, false, false, 55));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 56
                    echo "                <tr>
                  <td>";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", [], "any", false, false, false, 57);
                    echo "</td>
                  <td>";
                    // line 58
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "text", [], "any", false, false, false, 58);
                    echo "</td>
                </tr>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                  </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "              </table>
            </div>
            ";
        }
        // line 66
        echo "            ";
        if (($context["review_status"] ?? null)) {
            // line 67
            echo "            <div class=\"tab-pane\" id=\"tab-review\">
              <form class=\"form-horizontal\" id=\"form-review\">
                <div id=\"review\"></div>
                <h2>";
            // line 70
            echo ($context["text_write"] ?? null);
            echo "</h2>
                ";
            // line 71
            if (($context["review_guest"] ?? null)) {
                // line 72
                echo "                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-name\">";
                // line 74
                echo ($context["entry_name"] ?? null);
                echo "</label>
                    <input type=\"text\" name=\"name\" value=\"";
                // line 75
                echo ($context["customer_name"] ?? null);
                echo "\" id=\"input-name\" class=\"form-control\" />
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\" for=\"input-review\">";
                // line 80
                echo ($context["entry_review"] ?? null);
                echo "</label>
                    <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                    <div class=\"help-block\">";
                // line 82
                echo ($context["text_note"] ?? null);
                echo "</div>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <div class=\"col-sm-12\">
                    <label class=\"control-label\">";
                // line 87
                echo ($context["entry_rating"] ?? null);
                echo "</label>
                    &nbsp;&nbsp;&nbsp; ";
                // line 88
                echo ($context["entry_bad"] ?? null);
                echo "&nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"1\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"2\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"3\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"4\" />
                    &nbsp;
                    <input type=\"radio\" name=\"rating\" value=\"5\" />
                    &nbsp;";
                // line 98
                echo ($context["entry_good"] ?? null);
                echo "</div>
                </div>
                ";
                // line 100
                echo ($context["captcha"] ?? null);
                echo "
                <div class=\"buttons clearfix\">
                  <div class=\"pull-right\">
                    <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 103
                echo ($context["text_loading"] ?? null);
                echo "\" class=\"btn btn-primary\">";
                echo ($context["button_continue"] ?? null);
                echo "</button>
                  </div>
                </div>
                ";
            } else {
                // line 107
                echo "                ";
                echo ($context["text_login"] ?? null);
                echo "
                ";
            }
            // line 109
            echo "              </form>
            </div>
            ";
        }
        // line 111
        echo "</div>
        </div>
        ";
        // line 113
        if ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 114
            echo "        ";
            $context["class"] = "col-sm-6";
            // line 115
            echo "        ";
        } else {
            // line 116
            echo "        ";
            $context["class"] = "col-sm-4";
            // line 117
            echo "        ";
        }
        // line 118
        echo "        <div class=\"";
        echo ($context["class"] ?? null);
        echo "\">
          <div class=\"btn-group\">
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 120
        echo ($context["button_wishlist"] ?? null);
        echo "\" onclick=\"wishlist.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-heart\"></i></button>
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 121
        echo ($context["button_compare"] ?? null);
        echo "\" onclick=\"compare.add('";
        echo ($context["product_id"] ?? null);
        echo "');\"><i class=\"fa fa-exchange\"></i></button>
          </div>
          <h1>";
        // line 123
        echo ($context["heading_title"] ?? null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 125
        if (($context["manufacturer"] ?? null)) {
            // line 126
            echo "            <li>";
            echo ($context["text_manufacturer"] ?? null);
            echo " <a href=\"";
            echo ($context["manufacturers"] ?? null);
            echo "\">";
            echo ($context["manufacturer"] ?? null);
            echo "</a></li>
            ";
        }
        // line 128
        echo "            <li>";
        echo ($context["text_model"] ?? null);
        echo " ";
        echo ($context["model"] ?? null);
        echo "</li>
            ";
        // line 129
        if (($context["reward"] ?? null)) {
            // line 130
            echo "            <li>";
            echo ($context["text_reward"] ?? null);
            echo " ";
            echo ($context["reward"] ?? null);
            echo "</li>
            ";
        }
        // line 132
        echo "            <li>";
        echo ($context["text_stock"] ?? null);
        echo " <span class=\"stock-number\">";
        echo ($context["stock"] ?? null);
        echo "</span></li>
          </ul>
          ";
        // line 134
        if (($context["price_range"] ?? null)) {
            // line 135
            echo "            <ul class=\"list-unstyled\">
              <li>
              <h2 class=\"price\"> ";
            // line 137
            echo ($context["currency_symbol"] ?? null);
            echo ($context["lowest_price"] ?? null);
            echo " - ";
            echo ($context["currency_symbol"] ?? null);
            echo ($context["highest_price"] ?? null);
            echo " </h2>
              </li>
            </ul>
            
          ";
        }
        // line 142
        echo "          ";
        // line 167
        echo "          <div id=\"product\"> ";
        if (($context["variation"] ?? null)) {
            // line 168
            echo "            <hr>
            <h3>";
            // line 169
            echo ($context["text_option"] ?? null);
            echo "</h3>
              ";
            // line 170
            if ((twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation1Name", [], "any", false, false, false, 170) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation1Options", [], "any", false, false, false, 170)) > 0))) {
                // line 171
                echo "              <div class=\"variation-1-container\" style=\"margin:15px 0 10px\">
                <p>";
                // line 172
                echo twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation1Name", [], "any", false, false, false, 172);
                echo "</p>
                ";
                // line 173
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation1Options", [], "any", false, false, false, 173));
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 174
                    echo "                  ";
                    if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variationList", [], "any", false, false, false, 174)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[$context["v"]] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["stock"] ?? null) : null) == 0)) {
                        // line 175
                        echo "                    <div class=\"v1-opts opt-box\" data-val=\"";
                        echo $context["v"];
                        echo "\" disabled> ";
                        echo $context["v"];
                        echo " </div>
                  ";
                    } else {
                        // line 177
                        echo "                    <div class=\"v1-opts opt-box got-stock\" data-val=\"";
                        echo $context["v"];
                        echo "\" > ";
                        echo $context["v"];
                        echo " </div>
                  ";
                    }
                    // line 179
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 180
                echo "              </div>
              ";
            }
            // line 182
            echo "
              ";
            // line 183
            if ((twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Name", [], "any", false, false, false, 183) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Options", [], "any", false, false, false, 183)) > 0))) {
                // line 184
                echo "              <div class=\"variation-2-container\" style=\"margin:20px 0 10px;\">
                <p>";
                // line 185
                echo twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Name", [], "any", false, false, false, 185);
                echo "</p>
                ";
                // line 186
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["variation"] ?? null), "variation2Options", [], "any", false, false, false, 186));
                foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
                    // line 187
                    echo "                  <div class=\"v2-opts opt-box\" data-val=\"";
                    echo $context["v"];
                    echo "\"> ";
                    echo $context["v"];
                    echo " </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 189
                echo "              </div>
              ";
            }
            // line 191
            echo "            
            ";
        }
        // line 193
        echo "            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 194
        echo ($context["entry_qty"] ?? null);
        echo "</label>
              <input type=\"text\" name=\"quantity\" value=\"";
        // line 195
        echo ($context["minimum"] ?? null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\" />
              <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 196
        echo ($context["product_id"] ?? null);
        echo "\" />
              <br />
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 198
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo ($context["button_cart"] ?? null);
        echo "</button>
              <button type=\"button\" id=\"button-now\" data-loading-text=\"";
        // line 199
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary btn-lg btn-block button-now\" style=\"font-size:14px\">";
        echo ($context["button_now"] ?? null);
        echo "</button>
            </div>
            ";
        // line 201
        if ((($context["minimum"] ?? null) > 1)) {
            // line 202
            echo "            <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["text_minimum"] ?? null);
            echo "</div>
            ";
        }
        // line 203
        echo "</div>

            ";
        // line 205
        if (($context["store"] ?? null)) {
            // line 206
            echo "            <div class=\"store-link\">
            <p class=\"store\">Store:  <a href=\"";
            // line 207
            echo ($context["store_url"] ?? null);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["store"] ?? null), "name", [], "any", false, false, false, 207);
            echo "</a></p>
            </div>
            ";
        }
        // line 210
        echo "          ";
        if (($context["review_status"] ?? null)) {
            // line 211
            echo "          <div class=\"rating\">
            <p>";
            // line 212
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 213
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 214
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["reviews"] ?? null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo ($context["text_write"] ?? null);
            echo "</a></p>
            <hr>
            <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
            // line 217
            echo ($context["share"] ?? null);
            echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script> 
            <!-- AddThis Button END --> 
          </div>
          ";
        }
        // line 221
        echo " </div>
      </div>
      ";
        // line 223
        if (($context["products"] ?? null)) {
            // line 224
            echo "      <h3>";
            echo ($context["text_related"] ?? null);
            echo "</h3>
      <div class=\"row\"> ";
            // line 225
            $context["i"] = 0;
            // line 226
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 227
                echo "        ";
                if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
                    // line 228
                    echo "        ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 229
                    echo "        ";
                } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
                    // line 230
                    echo "        ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 231
                    echo "        ";
                } else {
                    // line 232
                    echo "        ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 233
                    echo "        ";
                }
                // line 234
                echo "        <div class=\"";
                echo ($context["class"] ?? null);
                echo "\">
          <div class=\"product-thumb transition\">
            <div class=\"image\"><a href=\"";
                // line 236
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 236);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 236);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 236);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 236);
                echo "\" class=\"img-responsive\" /></a></div>
            <div class=\"caption\">
              <h4><a href=\"";
                // line 238
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 238);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 238);
                echo "</a></h4>
              <p>";
                // line 239
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", [], "any", false, false, false, 239);
                echo "</p>
              ";
                // line 240
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 240)) {
                    // line 241
                    echo "              <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 242
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 242) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 243
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
              ";
                }
                // line 245
                echo "              ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 245)) {
                    // line 246
                    echo "              <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 246)) {
                        // line 247
                        echo "                ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 247);
                        echo "
                ";
                    } else {
                        // line 248
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 248);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 248);
                        echo "</span> ";
                    }
                    // line 249
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 249)) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", [], "any", false, false, false, 249);
                        echo "</span> ";
                    }
                    echo " </p>
              ";
                }
                // line 250
                echo " </div>
            <div class=\"button-group\">
              <button type=\"button\" onclick=\"cart.add('";
                // line 252
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 252);
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 252);
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo ($context["button_cart"] ?? null);
                echo "</span> <i class=\"fa fa-shopping-cart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 253
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 253);
                echo "');\"><i class=\"fa fa-heart\"></i></button>
              <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 254
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 254);
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
            </div>
          </div>
        </div>
        ";
                // line 258
                if (((($context["column_left"] ?? null) && ($context["column_right"] ?? null)) && (((($context["i"] ?? null) + 1) % 2) == 0))) {
                    // line 259
                    echo "        <div class=\"clearfix visible-md visible-sm\"></div>
        ";
                } elseif ((                // line 260
($context["column_left"] ?? null) || (($context["column_right"] ?? null) && (((($context["i"] ?? null) + 1) % 3) == 0)))) {
                    // line 261
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                } elseif ((((                // line 262
($context["i"] ?? null) + 1) % 4) == 0)) {
                    // line 263
                    echo "        <div class=\"clearfix visible-md\"></div>
        ";
                }
                // line 265
                echo "        ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 266
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
        ";
        }
        // line 268
        echo "        ";
        if (($context["tags"] ?? null)) {
            // line 269
            echo "        <p>";
            echo ($context["text_tags"] ?? null);
            echo "
        ";
            // line 270
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, ($context["tags"] ?? null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 271
                echo "        ";
                if (($context["i"] < (twig_length_filter($this->env, ($context["tags"] ?? null)) - 1))) {
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tags"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 271);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tags"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 271);
                    echo "</a>,
        ";
                } else {
                    // line 272
                    echo " <a href=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["tags"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[$context["i"]] ?? null) : null), "href", [], "any", false, false, false, 272);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["tags"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[$context["i"]] ?? null) : null), "tag", [], "any", false, false, false, 272);
                    echo "</a> ";
                }
                // line 273
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </p>
        ";
        }
        // line 275
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 276
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function(){
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#button-cart, #button-now').on('click', function() {
  var button = \$(this);

\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: {product_id:";
        // line 305
        echo ($context["product_id"] ?? null);
        echo ", variation:variationChosen, quantity:\$('input[name=\"quantity\"]').val() } ,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
      if (json['redirect']) {
        console.log(json['redirect']);
        ";
        // line 317
        echo "      } else {
        
        if (json['error']) {
          alertify.alert(\"Error\", json['error']);
        }

        if (json['success']) {
          if (button.hasClass('button-now')) {
            window.location.replace('index.php?route=checkout/cart');
            
          } else {
            \$('.breadcrumb').after('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

            \$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

            \$('html, body').animate({ scrollTop: 0 }, 'slow');

            \$('#cart > ul').load('index.php?route=common/cart/info ul li');
          }
        }
      } 

\t\t},
    error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
    }
\t});
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlanguage: '";
        // line 348
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlanguage: '";
        // line 353
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlanguage: '";
        // line 359
        echo ($context["datepicker"] ?? null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar node = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(node).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(node).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(node).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(node).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    \$('#review').fadeOut('slow');

    \$('#review').load(this.href);

    \$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 426
        echo ($context["product_id"] ?? null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 430
        echo ($context["product_id"] ?? null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

var variation = ";
        // line 458
        echo json_encode(($context["variation"] ?? null), twig_constant("JSON_PRETTY_PRINT"));
        echo " ;
var variationNeeded = variation.variation2Name && variation.variation2Options.length > 0 ? 2 : 1;
var variationList = variation.variationList;
var variationChosen = {};

//image
var images = ";
        // line 464
        echo json_encode(($context["images"] ?? null), twig_constant("JSON_PRETTY_PRINT"));
        echo ";

console.log(variation);
console.log(images);

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype:'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});

  \$('.opt-box.got-stock').on('click', function(){
    if (\$(this).hasClass('selected')) { 
      \$(this).removeClass('selected');
    } 
    else {

      if (\$(this).hasClass('v1-opts')) {
        \$('.v1-opts').removeClass('selected');
        var pic = 'var_' + (parseInt(\$(this).index('.v1-opts')) + 1);
        if (images[pic]) {
          \$('.image-display').find('.thumbnail').attr('href', images[pic]);
          \$('.image-display').find('img').attr('src', images[pic]);
        }
        
      } else {
        \$('.v2-opts').removeClass('selected');
      }

      \$(this).addClass('selected');
    }
    chooseViariation();
  });

  //function that get the variation variable
  function chooseViariation() {
    if (variationNeeded == 2) {
      var v1 = \$('.v1-opts.selected').data('val');
      var v2 = \$('.v2-opts.selected').data('val');
      if (v1 && v2 && variationList[v1][v2]['stock'] > 0) {
        \$('h2.price').text( \"";
        // line 507
        echo ($context["currency_symbol"] ?? null);
        echo "\" + parseFloat(variationList[v1][v2]['price']).toFixed(2));
        \$('.stock-number').text(variationList[v1][v2]['stock']);
        variationChosen[variation.variation1Name] = v1;
        variationChosen[variation.variation2Name] = v2;
      } else {
        variationChosen = {};
      }
    } else if (variationNeeded == 1) {
      var v1 = \$('.v1-opts.selected').data('val');
      if (v1 && variationList[v1]['stock'] > 0) {
        \$('h2.price').text(\"";
        // line 517
        echo ($context["currency_symbol"] ?? null);
        echo "\" + parseFloat(variationList[v1]['price']).toFixed(2));
        \$('.stock-number').text(variationList[v1]['stock']);
        variationChosen[variation.variation1Name] = v1;
      } else {
        variationChosen = {};
      }
    }
      console.log(variationChosen);
  }

});
//--></script> 

<style>
.image-additional .thumbnail>img {
    height: 70px;
    width: 70px;
}

.opt-box {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 5px 15px;
    margin-right: 8px;
    border-radius: 2px;
    cursor: pointer;
}

.opt-box.got-stock:hover, .opt-box.got-stock.selected {
  border-color: orange;
}
</style>
";
        // line 549
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1142 => 549,  1107 => 517,  1094 => 507,  1048 => 464,  1039 => 458,  1008 => 430,  1001 => 426,  931 => 359,  922 => 353,  914 => 348,  881 => 317,  867 => 305,  835 => 276,  830 => 275,  821 => 273,  814 => 272,  804 => 271,  800 => 270,  795 => 269,  792 => 268,  783 => 266,  780 => 265,  776 => 263,  774 => 262,  771 => 261,  769 => 260,  766 => 259,  764 => 258,  755 => 254,  749 => 253,  741 => 252,  737 => 250,  725 => 249,  718 => 248,  712 => 247,  709 => 246,  706 => 245,  697 => 243,  690 => 242,  685 => 241,  683 => 240,  679 => 239,  673 => 238,  662 => 236,  656 => 234,  653 => 233,  650 => 232,  647 => 231,  644 => 230,  641 => 229,  638 => 228,  635 => 227,  630 => 226,  628 => 225,  623 => 224,  621 => 223,  617 => 221,  609 => 217,  595 => 214,  588 => 213,  584 => 212,  581 => 211,  578 => 210,  570 => 207,  567 => 206,  565 => 205,  561 => 203,  555 => 202,  553 => 201,  546 => 199,  540 => 198,  535 => 196,  531 => 195,  527 => 194,  524 => 193,  520 => 191,  516 => 189,  505 => 187,  501 => 186,  497 => 185,  494 => 184,  492 => 183,  489 => 182,  485 => 180,  479 => 179,  471 => 177,  463 => 175,  460 => 174,  456 => 173,  452 => 172,  449 => 171,  447 => 170,  443 => 169,  440 => 168,  437 => 167,  435 => 142,  423 => 137,  419 => 135,  417 => 134,  409 => 132,  401 => 130,  399 => 129,  392 => 128,  382 => 126,  380 => 125,  375 => 123,  368 => 121,  362 => 120,  356 => 118,  353 => 117,  350 => 116,  347 => 115,  344 => 114,  342 => 113,  338 => 111,  333 => 109,  327 => 107,  318 => 103,  312 => 100,  307 => 98,  294 => 88,  290 => 87,  282 => 82,  277 => 80,  269 => 75,  265 => 74,  261 => 72,  259 => 71,  255 => 70,  250 => 67,  247 => 66,  242 => 63,  235 => 61,  226 => 58,  222 => 57,  219 => 56,  215 => 55,  208 => 51,  204 => 49,  200 => 48,  196 => 46,  194 => 45,  190 => 44,  186 => 42,  180 => 40,  177 => 39,  171 => 37,  169 => 36,  165 => 35,  162 => 34,  158 => 32,  155 => 31,  138 => 29,  133 => 28,  130 => 27,  116 => 25,  114 => 24,  111 => 23,  106 => 22,  103 => 21,  100 => 20,  97 => 19,  94 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/product.twig", "");
    }
}

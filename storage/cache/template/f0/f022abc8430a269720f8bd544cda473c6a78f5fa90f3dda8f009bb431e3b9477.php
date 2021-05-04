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

/* catalog/store.twig */
class __TwigTemplate_790c0da8080983c21a9477eec07c3b65ecebebd2180fb995fb8104cb707be4dd extends \Twig\Template
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
        <button data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn save-store btn-primary\"><i class=\"fa fa-save\"></i></button>
      
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 12);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 12);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "      </ul>
    </div>
  </div>

  <div class=\"container-fluid\"> ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 23
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 25
        echo ($context["text_store"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body form-horizontal\">

          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 30
        echo ($context["entry_store_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 32
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_store_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
           </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 37
        echo ($context["help_minimum"] ?? null);
        echo "\">Store Image</span></label>
            <div class=\"col-sm-10 image-input\">
                <div class=\"img-box\"></div> <input type=\"file\" name=\"store-img\" accept=\"image/*\">
            </div>
          </div>


          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-text\">";
        // line 45
        echo ($context["entry_description"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"description\" cols=\"60\" rows=\"8\" placeholder=\"";
        // line 47
        echo ($context["entry_description"] ?? null);
        echo "\" id=\"input-text\" class=\"form-control\">";
        echo ($context["description"] ?? null);
        echo "</textarea>
            </div>
          </div>

          ";
        // line 56
        echo "
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-text\">";
        // line 58
        echo ($context["entry_store_address"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <textarea name=\"address\" cols=\"60\" rows=\"8\" placeholder=\"";
        // line 60
        echo ($context["entry_store_address"] ?? null);
        echo "\" id=\"input-text\" class=\"form-control\">";
        echo ($context["address"] ?? null);
        echo "</textarea>
            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-date-added\">";
        // line 65
        echo ($context["text_date_added"] ?? null);
        echo "</label>
            <div class=\"col-sm-3\">
              ";
        // line 67
        echo ($context["date_joined"] ?? null);
        echo "
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 71
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                
                ";
        // line 75
        if ((($context["status"] ?? null) == 1)) {
            // line 76
            echo "                
                <option value=\"1\" selected=\"selected\">";
            // line 77
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 78
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                
                ";
        } else {
            // line 81
            echo "                
                <option value=\"1\">";
            // line 82
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 83
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                
                ";
        }
        // line 86
        echo "              
              </select>
            </div>
          </div>
      </div>
    </div>
  </div>
  
</div>
  
";
        // line 96
        echo ($context["footer"] ?? null);
        echo "

<script>
  var savedImg = '";
        // line 99
        echo ($context["image"] ?? null);
        echo "';
  if (savedImg) {
    \$(document).ready(function(){
      \$('.img-box').addClass('inserted').css(\"background-image\", 'url('+ savedImg +')');
    });
  }

  var storeImg = '';

  \$('.save-store').on('click', function() {
    console.log(storeImg);
    var formData = new FormData();
    formData.append('image', storeImg, storeImg.Name);
    formData.append('name', \$('input[name=\"name\"]').val());
    formData.append('description', \$('textarea[name=\"description\"]').val());
    formData.append('address', \$('textarea[name=\"address\"]').val());
    formData.append('status', \$('select[name=\"status\"]').val());

     \$.ajax({
        url: 'index.php?route=catalog/store/save&user_token=";
        // line 118
        echo ($context["user_token"] ?? null);
        echo "',
        type: 'post',
        data: formData,
        dataType: 'json',
        processData: false,
        contentType: false,
        beforeSend: function() {
          \$('.save-store').prop('disabled', true);
        },
        complete: function() {
          \$('.save-store').prop('disabled', false);
        },
        success: function(json) {
          console.log(json);
          ";
        // line 143
        echo "        },
        error: function(xhr, ajaxOptions, thrownError) {
          alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
      });
  });

  \$(\"input[name='store-img']\").on('change', function(e) {
    var tmppath = URL.createObjectURL(e.target.files[0]);
    \$('.img-box').addClass('inserted').css(\"background-image\", 'url('+ tmppath +')');

    storeImg = e.target.files[0];
  });

  \$(\".img-box\").on('click', function(e) {
    \$('.image-input').find('input[type=\"file\"]').trigger('click');
  });
</script>

<style>
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

.image-input input[type=file] {
  display: none;
}
</style>";
    }

    public function getTemplateName()
    {
        return "catalog/store.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 143,  246 => 118,  224 => 99,  218 => 96,  206 => 86,  200 => 83,  196 => 82,  193 => 81,  187 => 78,  183 => 77,  180 => 76,  178 => 75,  171 => 71,  164 => 67,  159 => 65,  149 => 60,  144 => 58,  140 => 56,  131 => 47,  126 => 45,  115 => 37,  105 => 32,  100 => 30,  92 => 25,  88 => 23,  80 => 19,  78 => 18,  72 => 14,  61 => 12,  57 => 11,  52 => 9,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/store.twig", "");
    }
}

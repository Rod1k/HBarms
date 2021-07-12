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

/* extension/module/latest_information.twig */
class __TwigTemplate_fae359aaff384bc954e66259f9cc8d510df1b822499731c84ff78e0a1aa6d8d7 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-module\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo " ";
        echo ($context["version"] ?? null);
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
  <div class=\"container-fluid\">
    ";
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
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 28
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-module\" class=\"form-horizontal\">
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">";
        // line 30
        echo ($context["entry_name"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"name\" value=\"";
        // line 32
        echo ($context["name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              ";
        // line 33
        if (($context["error_name"] ?? null)) {
            // line 34
            echo "              <div class=\"text-danger\">";
            echo ($context["error_name"] ?? null);
            echo "</div>
              ";
        }
        // line 36
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-title\"><span data-toggle=\"tooltip\" title=\"";
        // line 39
        echo ($context["help_title"] ?? null);
        echo "\">";
        echo ($context["entry_title"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 42
            echo "              <div class=\"input-group\">
                <span class=\"input-group-addon\"><img src=\"language/";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 43);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 43);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 43);
            echo "\" /></span>
                <input type=\"text\" name=\"title[";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44);
            echo "]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["title"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44)] ?? null) : null)) ? ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["title"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44)] ?? null) : null)) : (""));
            echo "\"  placeholder=\"";
            echo ($context["entry_title"] ?? null);
            echo "\" id=\"input-title\" class=\"form-control\" />
              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-category\"><span data-toggle=\"tooltip\" title=\"";
        // line 50
        echo ($context["help_category"] ?? null);
        echo "\">";
        echo ($context["entry_category"] ?? null);
        echo "</span></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"category\" value=\"";
        // line 52
        echo ($context["category"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-category\" class=\"form-control\" />
              <input type=\"hidden\" name=\"category_id\" value=\"";
        // line 53
        echo ($context["category_id"] ?? null);
        echo "\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-limit\">";
        // line 57
        echo ($context["entry_limit"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"limit\" value=\"";
        // line 59
        echo ($context["limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_limit"] ?? null);
        echo "\" id=\"input-limit\" class=\"form-control\" />
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-width\">";
        // line 63
        echo ($context["entry_width"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"width\" value=\"";
        // line 65
        echo ($context["width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-width\" class=\"form-control\" />
              ";
        // line 66
        if (($context["error_width"] ?? null)) {
            // line 67
            echo "              <div class=\"text-danger\">";
            echo ($context["error_width"] ?? null);
            echo "</div>
              ";
        }
        // line 69
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-height\">";
        // line 72
        echo ($context["entry_height"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"height\" value=\"";
        // line 74
        echo ($context["height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" id=\"input-height\" class=\"form-control\" />
              ";
        // line 75
        if (($context["error_height"] ?? null)) {
            // line 76
            echo "              <div class=\"text-danger\">";
            echo ($context["error_height"] ?? null);
            echo "</div>
              ";
        }
        // line 78
        echo "            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 81
        echo ($context["entry_author"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 83
        if (($context["author"] ?? null)) {
            // line 84
            echo "                <input type=\"radio\" name=\"author\" value=\"1\" checked=\"checked\" />
                ";
            // line 85
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 87
            echo "                <input type=\"radio\" name=\"author\" value=\"1\" />
                ";
            // line 88
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 89
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 90
        if ( !($context["author"] ?? null)) {
            // line 91
            echo "                <input type=\"radio\" name=\"author\" value=\"0\" checked=\"checked\" />
                ";
            // line 92
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 94
            echo "                <input type=\"radio\" name=\"author\" value=\"0\" />
                ";
            // line 95
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 96
        echo " </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 100
        echo ($context["entry_date"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 102
        if (($context["date"] ?? null)) {
            // line 103
            echo "                <input type=\"radio\" name=\"date\" value=\"1\" checked=\"checked\" />
                ";
            // line 104
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 106
            echo "                <input type=\"radio\" name=\"date\" value=\"1\" />
                ";
            // line 107
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 108
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 109
        if ( !($context["date"] ?? null)) {
            // line 110
            echo "                <input type=\"radio\" name=\"date\" value=\"0\" checked=\"checked\" />
                ";
            // line 111
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 113
            echo "                <input type=\"radio\" name=\"date\" value=\"0\" />
                ";
            // line 114
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 115
        echo " </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 119
        echo ($context["entry_review"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 121
        if (($context["review"] ?? null)) {
            // line 122
            echo "                <input type=\"radio\" name=\"review\" value=\"1\" checked=\"checked\" />
                ";
            // line 123
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 125
            echo "                <input type=\"radio\" name=\"review\" value=\"1\" />
                ";
            // line 126
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 127
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 128
        if ( !($context["review"] ?? null)) {
            // line 129
            echo "                <input type=\"radio\" name=\"review\" value=\"0\" checked=\"checked\" />
                ";
            // line 130
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 132
            echo "                <input type=\"radio\" name=\"review\" value=\"0\" />
                ";
            // line 133
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 134
        echo " </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 138
        echo ($context["entry_rating"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <label class=\"radio-inline\"> ";
        // line 140
        if (($context["rating"] ?? null)) {
            // line 141
            echo "                <input type=\"radio\" name=\"rating\" value=\"1\" checked=\"checked\" />
                ";
            // line 142
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        } else {
            // line 144
            echo "                <input type=\"radio\" name=\"rating\" value=\"1\" />
                ";
            // line 145
            echo ($context["text_yes"] ?? null);
            echo "
                ";
        }
        // line 146
        echo " </label>
              <label class=\"radio-inline\"> ";
        // line 147
        if ( !($context["rating"] ?? null)) {
            // line 148
            echo "                <input type=\"radio\" name=\"rating\" value=\"0\" checked=\"checked\" />
                ";
            // line 149
            echo ($context["text_no"] ?? null);
            echo "
                ";
        } else {
            // line 151
            echo "                <input type=\"radio\" name=\"rating\" value=\"0\" />
                ";
            // line 152
            echo ($context["text_no"] ?? null);
            echo "
                ";
        }
        // line 153
        echo " </label>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 157
        echo ($context["entry_status"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 160
        if (($context["status"] ?? null)) {
            // line 161
            echo "                <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 162
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 164
            echo "                <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 165
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 167
        echo "              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'category\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 178
        echo ($context["user_token"] ?? null);
        echo "&filter_information=1&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcategory_id: 0,
\t\t\t\t\tname: '";
        // line 183
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'category\\']').val(item['label']);
\t\t\$('input[name=\\'category_id\\']').val(item['value']);
\t}
});
//--></script> 
</div>
";
        // line 202
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/module/latest_information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  527 => 202,  505 => 183,  497 => 178,  484 => 167,  479 => 165,  474 => 164,  469 => 162,  464 => 161,  462 => 160,  456 => 157,  450 => 153,  445 => 152,  442 => 151,  437 => 149,  434 => 148,  432 => 147,  429 => 146,  424 => 145,  421 => 144,  416 => 142,  413 => 141,  411 => 140,  406 => 138,  400 => 134,  395 => 133,  392 => 132,  387 => 130,  384 => 129,  382 => 128,  379 => 127,  374 => 126,  371 => 125,  366 => 123,  363 => 122,  361 => 121,  356 => 119,  350 => 115,  345 => 114,  342 => 113,  337 => 111,  334 => 110,  332 => 109,  329 => 108,  324 => 107,  321 => 106,  316 => 104,  313 => 103,  311 => 102,  306 => 100,  300 => 96,  295 => 95,  292 => 94,  287 => 92,  284 => 91,  282 => 90,  279 => 89,  274 => 88,  271 => 87,  266 => 85,  263 => 84,  261 => 83,  256 => 81,  251 => 78,  245 => 76,  243 => 75,  237 => 74,  232 => 72,  227 => 69,  221 => 67,  219 => 66,  213 => 65,  208 => 63,  199 => 59,  194 => 57,  187 => 53,  181 => 52,  174 => 50,  169 => 47,  156 => 44,  148 => 43,  145 => 42,  141 => 41,  134 => 39,  129 => 36,  123 => 34,  121 => 33,  115 => 32,  110 => 30,  105 => 28,  99 => 25,  95 => 23,  87 => 19,  85 => 18,  79 => 14,  68 => 12,  64 => 11,  57 => 9,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/latest_information.twig", "");
    }
}

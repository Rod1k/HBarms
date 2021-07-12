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

/* extension/information/optimblog.twig */
class __TwigTemplate_d7153e34b5e548a0fdc429ad7e026de5433b63073cad9a904ff9bea64cc0b1e1 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-theme\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo " v";
        echo ($context["information_optimblog_version"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-theme\" class=\"form-horizontal\">
          <input type=\"hidden\" name=\"information_optimblog_version\" value=\"";
        // line 28
        echo ($context["information_optimblog_version"] ?? null);
        echo "\" />
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-article\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_article"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-category\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_category"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-image\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_image"] ?? null);
        echo "</a></li>
<!--
            <li><a href=\"#tab-module\" data-toggle=\"tab\">";
        // line 35
        echo ($context["tab_module"] ?? null);
        echo "</a></li>
-->
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <fieldset>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 42
        echo ($context["entry_status"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"information_optimblog_status\" id=\"input-status\" class=\"form-control\">
                      ";
        // line 45
        if (($context["information_optimblog_status"] ?? null)) {
            // line 46
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 47
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 49
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 50
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 52
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 57
        echo ($context["text_seo"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-canonical-category-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 59
        echo ($context["help_canonical_category"] ?? null);
        echo "\">";
        echo ($context["entry_canonical_category_product"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"information_optimblog_canonical_category_product\" id=\"input-canonical-category-product\" class=\"form-control\">
                      ";
        // line 62
        if (($context["information_optimblog_canonical_category_product"] ?? null)) {
            // line 63
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 64
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 66
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 67
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 69
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-canonical-category-information\"><span data-toggle=\"tooltip\" title=\"";
        // line 73
        echo ($context["help_canonical_category"] ?? null);
        echo "\">";
        echo ($context["entry_canonical_category_information"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"information_optimblog_canonical_category_information\" id=\"input-canonical-category-information\" class=\"form-control\">
                      ";
        // line 76
        if (($context["information_optimblog_canonical_category_information"] ?? null)) {
            // line 77
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 78
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 80
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 81
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 83
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-canonical-information\"><span data-toggle=\"tooltip\" title=\"";
        // line 87
        echo ($context["help_canonical_information"] ?? null);
        echo "\">";
        echo ($context["entry_canonical_information"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"information_optimblog_canonical_information\" id=\"input-canonical-information\" class=\"form-control\">
                      ";
        // line 90
        if (($context["information_optimblog_canonical_information"] ?? null)) {
            // line 91
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 92
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 94
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 95
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 97
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-breadcrumbs-category-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 101
        echo ($context["help_breadcrumbs_category"] ?? null);
        echo "\">";
        echo ($context["entry_breadcrumbs_category_product"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"information_optimblog_breadcrumbs_category_product\" id=\"input-breadcrumbs-category-product\" class=\"form-control\">
                      ";
        // line 104
        if (($context["information_optimblog_breadcrumbs_category_product"] ?? null)) {
            // line 105
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 106
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 108
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 109
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 111
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-breadcrumbs-category-information\"><span data-toggle=\"tooltip\" title=\"";
        // line 115
        echo ($context["help_breadcrumbs_category"] ?? null);
        echo "\">";
        echo ($context["entry_breadcrumbs_category_information"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"information_optimblog_breadcrumbs_category_information\" id=\"input-breadcrumbs-category-information\" class=\"form-control\">
                      ";
        // line 118
        if (($context["information_optimblog_breadcrumbs_category_information"] ?? null)) {
            // line 119
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 120
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 122
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 123
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 125
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-breadcrumbs-product\"><span data-toggle=\"tooltip\" title=\"";
        // line 129
        echo ($context["help_breadcrumbs_product"] ?? null);
        echo "\">";
        echo ($context["entry_breadcrumbs_product"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"information_optimblog_breadcrumbs_product\" id=\"input-breadcrumbs-product\" class=\"form-control\">
                      ";
        // line 132
        if (($context["information_optimblog_breadcrumbs_product"] ?? null)) {
            // line 133
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 134
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 136
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 137
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 139
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-breadcrumbs-information\"><span data-toggle=\"tooltip\" title=\"";
        // line 143
        echo ($context["help_breadcrumbs_information"] ?? null);
        echo "\">";
        echo ($context["entry_breadcrumbs_information"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"information_optimblog_breadcrumbs_information\" id=\"input-breadcrumbs-information\" class=\"form-control\">
                      ";
        // line 146
        if (($context["information_optimblog_breadcrumbs_information"] ?? null)) {
            // line 147
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 148
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 150
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 151
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 153
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 158
        echo ($context["text_backup"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 160
        echo ($context["help_backup"] ?? null);
        echo "\">";
        echo ($context["entry_backup"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <a href=\"";
        // line 162
        echo ($context["download"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_download"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-download\"></i> ";
        echo ($context["button_export"] ?? null);
        echo "</a>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 166
        echo ($context["help_restore"] ?? null);
        echo "\">";
        echo ($context["entry_restore"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <button type=\"button\" id=\"button-import\" data-toggle=\"tooltip\" title=\"";
        // line 168
        echo ($context["button_upload"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
        echo ($context["button_import"] ?? null);
        echo "</button>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-article\">
              <fieldset>
                <legend>";
        // line 175
        echo ($context["text_exclusion"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-exclusion-information\"><span data-toggle=\"tooltip\" title=\"";
        // line 177
        echo ($context["help_exclusion_information"] ?? null);
        echo "\">";
        echo ($context["entry_exclusion_information"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"information_optimblog_exclusion_informations\" value=\"\" placeholder=\"";
        // line 179
        echo ($context["entry_information"] ?? null);
        echo "\" id=\"input-exclusion-information\" class=\"form-control\" />
                    <div id=\"information-optimblog-exclusion-information\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["information_optimblog_exclusion_informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information_optimblog_exclusion_information"]) {
            // line 182
            echo "                      <div id=\"information-optimblog-exclusion-information";
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_information"], "information_id", [], "any", false, false, false, 182);
            echo "\"><i class=\"fa fa-minus-circle\"></i> 
                        ";
            // line 183
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_information"], "title", [], "any", false, false, false, 183);
            echo "
                        <input type=\"hidden\" name=\"information_optimblog_exclusion_information[]\" value=\"";
            // line 184
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_information"], "information_id", [], "any", false, false, false, 184);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information_optimblog_exclusion_information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 187
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 192
        echo ($context["text_author"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 194
        echo ($context["entry_information_author"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 196
        if (($context["information_optimblog_information_author"] ?? null)) {
            // line 197
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_author\" value=\"1\" checked=\"checked\" />
                      ";
            // line 198
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 200
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_author\" value=\"1\" />
                      ";
            // line 201
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 202
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 203
        if ( !($context["information_optimblog_information_author"] ?? null)) {
            // line 204
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_author\" value=\"0\" checked=\"checked\" />
                      ";
            // line 205
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 207
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_author\" value=\"0\" />
                      ";
            // line 208
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 209
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-exclusion-category-author-information\"><span data-toggle=\"tooltip\" title=\"";
        // line 213
        echo ($context["help_exclusion_category"] ?? null);
        echo "\">";
        echo ($context["entry_exclusion_category_author_information"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"information_optimblog_exclusion_categories_author_information\" value=\"\" placeholder=\"";
        // line 215
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-exclusion-category-author-information\" class=\"form-control\" />
                    <div id=\"information-optimblog-exclusion-category-author-information\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["information_optimblog_exclusion_categories_author_information"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information_optimblog_exclusion_category_author_information"]) {
            // line 218
            echo "                      <div id=\"information-optimblog-exclusion-category-author-information";
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_author_information"], "category_id", [], "any", false, false, false, 218);
            echo "\"><i class=\"fa fa-minus-circle\"></i> 
                        ";
            // line 219
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_author_information"], "name", [], "any", false, false, false, 219);
            echo "
                        <input type=\"hidden\" name=\"information_optimblog_exclusion_category_author_information[]\" value=\"";
            // line 220
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_author_information"], "category_id", [], "any", false, false, false, 220);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information_optimblog_exclusion_category_author_information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-exclusion-information-author\"><span data-toggle=\"tooltip\" title=\"";
        // line 227
        echo ($context["help_exclusion_information"] ?? null);
        echo "\">";
        echo ($context["entry_exclusion_information_author"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"information_optimblog_exclusion_informations_author\" value=\"\" placeholder=\"";
        // line 229
        echo ($context["entry_information"] ?? null);
        echo "\" id=\"input-exclusion-information-author\" class=\"form-control\" />
                    <div id=\"information-optimblog-exclusion-information-author\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 231
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["information_optimblog_exclusion_informations_author"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information_optimblog_exclusion_information_author"]) {
            // line 232
            echo "                      <div id=\"information-optimblog-exclusion-information-author";
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_information_author"], "information_id", [], "any", false, false, false, 232);
            echo "\"><i class=\"fa fa-minus-circle\"></i> 
                        ";
            // line 233
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_information_author"], "title", [], "any", false, false, false, 233);
            echo "
                        <input type=\"hidden\" name=\"information_optimblog_exclusion_information_author[]\" value=\"";
            // line 234
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_information_author"], "information_id", [], "any", false, false, false, 234);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information_optimblog_exclusion_information_author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 242
        echo ($context["text_date"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 244
        echo ($context["entry_information_date"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 246
        if (($context["information_optimblog_information_date"] ?? null)) {
            // line 247
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_date\" value=\"1\" checked=\"checked\" />
                      ";
            // line 248
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 250
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_date\" value=\"1\" />
                      ";
            // line 251
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 252
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 253
        if ( !($context["information_optimblog_information_date"] ?? null)) {
            // line 254
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_date\" value=\"0\" checked=\"checked\" />
                      ";
            // line 255
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 257
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_date\" value=\"0\" />
                      ";
            // line 258
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 259
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-exclusion-category-date-information\"><span data-toggle=\"tooltip\" title=\"";
        // line 263
        echo ($context["help_exclusion_category"] ?? null);
        echo "\">";
        echo ($context["entry_exclusion_category_date_information"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"information_optimblog_exclusion_categories_date_information\" value=\"\" placeholder=\"";
        // line 265
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-exclusion-category-date-information\" class=\"form-control\" />
                    <div id=\"information-optimblog-exclusion-category-date-information\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["information_optimblog_exclusion_categories_date_information"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information_optimblog_exclusion_category_date_information"]) {
            // line 268
            echo "                      <div id=\"information-optimblog-exclusion-category-date-information";
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_date_information"], "category_id", [], "any", false, false, false, 268);
            echo "\"><i class=\"fa fa-minus-circle\"></i> 
                        ";
            // line 269
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_date_information"], "name", [], "any", false, false, false, 269);
            echo "
                        <input type=\"hidden\" name=\"information_optimblog_exclusion_category_date_information[]\" value=\"";
            // line 270
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_date_information"], "category_id", [], "any", false, false, false, 270);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information_optimblog_exclusion_category_date_information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-exclusion-information-date\"><span data-toggle=\"tooltip\" title=\"";
        // line 277
        echo ($context["help_exclusion_information"] ?? null);
        echo "\">";
        echo ($context["entry_exclusion_information_date"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"information_optimblog_exclusion_informations_date\" value=\"\" placeholder=\"";
        // line 279
        echo ($context["entry_information"] ?? null);
        echo "\" id=\"input-exclusion-information-date\" class=\"form-control\" />
                    <div id=\"information-optimblog-exclusion-information-date\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["information_optimblog_exclusion_informations_date"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information_optimblog_exclusion_information_date"]) {
            // line 282
            echo "                      <div id=\"information-optimblog-exclusion-information-date";
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_information_date"], "information_id", [], "any", false, false, false, 282);
            echo "\"><i class=\"fa fa-minus-circle\"></i> 
                        ";
            // line 283
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_information_date"], "title", [], "any", false, false, false, 283);
            echo "
                        <input type=\"hidden\" name=\"information_optimblog_exclusion_information_date[]\" value=\"";
            // line 284
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_information_date"], "information_id", [], "any", false, false, false, 284);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information_optimblog_exclusion_information_date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 292
        echo ($context["text_manufacturer"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 294
        echo ($context["entry_information_manufacturer"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 296
        if (($context["information_optimblog_information_manufacturer"] ?? null)) {
            // line 297
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_manufacturer\" value=\"1\" checked=\"checked\" />
                      ";
            // line 298
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 300
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_manufacturer\" value=\"1\" />
                      ";
            // line 301
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 302
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 303
        if ( !($context["information_optimblog_information_manufacturer"] ?? null)) {
            // line 304
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_manufacturer\" value=\"0\" checked=\"checked\" />
                      ";
            // line 305
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 307
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_manufacturer\" value=\"0\" />
                      ";
            // line 308
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 309
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-exclusion-category-manufacturer-information\"><span data-toggle=\"tooltip\" title=\"";
        // line 313
        echo ($context["help_exclusion_category"] ?? null);
        echo "\">";
        echo ($context["entry_exclusion_category_manufacturer_information"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"information_optimblog_exclusion_categories_manufacturer_information\" value=\"\" placeholder=\"";
        // line 315
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-exclusion-category-manufacturer-information\" class=\"form-control\" />
                    <div id=\"information-optimblog-exclusion-category-manufacturer-information\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["information_optimblog_exclusion_categories_manufacturer_information"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information_optimblog_exclusion_category_manufacturer_information"]) {
            // line 318
            echo "                      <div id=\"information-optimblog-exclusion-category-manufacturer-information";
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_manufacturer_information"], "category_id", [], "any", false, false, false, 318);
            echo "\"><i class=\"fa fa-minus-circle\"></i> 
                        ";
            // line 319
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_manufacturer_information"], "name", [], "any", false, false, false, 319);
            echo "
                        <input type=\"hidden\" name=\"information_optimblog_exclusion_category_manufacturer_information[]\" value=\"";
            // line 320
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_manufacturer_information"], "category_id", [], "any", false, false, false, 320);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information_optimblog_exclusion_category_manufacturer_information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 323
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-exclusion-information-manufacturer\"><span data-toggle=\"tooltip\" title=\"";
        // line 327
        echo ($context["help_exclusion_information"] ?? null);
        echo "\">";
        echo ($context["entry_exclusion_information_manufacturer"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"information_optimblog_exclusion_informations_manufacturer\" value=\"\" placeholder=\"";
        // line 329
        echo ($context["entry_information"] ?? null);
        echo "\" id=\"input-exclusion-information-manufacturer\" class=\"form-control\" />
                    <div id=\"information-optimblog-exclusion-information-manufacturer\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 331
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["information_optimblog_exclusion_informations_manufacturer"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information_optimblog_exclusion_information_manufacturer"]) {
            // line 332
            echo "                      <div id=\"information-optimblog-exclusion-information-manufacturer";
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_information_manufacturer"], "information_id", [], "any", false, false, false, 332);
            echo "\"><i class=\"fa fa-minus-circle\"></i> 
                        ";
            // line 333
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_information_manufacturer"], "title", [], "any", false, false, false, 333);
            echo "
                        <input type=\"hidden\" name=\"information_optimblog_exclusion_information_manufacturer[]\" value=\"";
            // line 334
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_information_manufacturer"], "information_id", [], "any", false, false, false, 334);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information_optimblog_exclusion_information_manufacturer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 342
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 344
        echo ($context["help_review"] ?? null);
        echo "\">";
        echo ($context["entry_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 346
        if (($context["information_optimblog_review_status"] ?? null)) {
            // line 347
            echo "                      <input type=\"radio\" name=\"information_optimblog_review_status\" value=\"1\" checked=\"checked\" />
                      ";
            // line 348
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 350
            echo "                      <input type=\"radio\" name=\"information_optimblog_review_status\" value=\"1\" />
                      ";
            // line 351
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 352
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 353
        if ( !($context["information_optimblog_review_status"] ?? null)) {
            // line 354
            echo "                      <input type=\"radio\" name=\"information_optimblog_review_status\" value=\"0\" checked=\"checked\" />
                      ";
            // line 355
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 357
            echo "                      <input type=\"radio\" name=\"information_optimblog_review_status\" value=\"0\" />
                      ";
            // line 358
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 359
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 363
        echo ($context["help_review_guest"] ?? null);
        echo "\">";
        echo ($context["entry_review_guest"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 365
        if (($context["information_optimblog_review_guest"] ?? null)) {
            // line 366
            echo "                      <input type=\"radio\" name=\"information_optimblog_review_guest\" value=\"1\" checked=\"checked\" />
                      ";
            // line 367
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 369
            echo "                      <input type=\"radio\" name=\"information_optimblog_review_guest\" value=\"1\" />
                      ";
            // line 370
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 371
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 372
        if ( !($context["information_optimblog_review_guest"] ?? null)) {
            // line 373
            echo "                      <input type=\"radio\" name=\"information_optimblog_review_guest\" value=\"0\" checked=\"checked\" />
                      ";
            // line 374
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 376
            echo "                      <input type=\"radio\" name=\"information_optimblog_review_guest\" value=\"0\" />
                      ";
            // line 377
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 378
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 382
        echo ($context["help_captcha"] ?? null);
        echo "\">";
        echo ($context["entry_captcha"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"information_optimblog_captcha\" id=\"input-captcha\" class=\"form-control\">
                      <option value=\"\">";
        // line 385
        echo ($context["text_none"] ?? null);
        echo "</option>
                      ";
        // line 386
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["captchas"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["captcha"]) {
            // line 387
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 387) == ($context["information_optimblog_captcha"] ?? null))) {
                // line 388
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 388);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 388);
                echo "</option>
                      ";
            } else {
                // line 390
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "value", [], "any", false, false, false, 390);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["captcha"], "text", [], "any", false, false, false, 390);
                echo "</option>
                      ";
            }
            // line 392
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['captcha'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 393
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 397
        echo ($context["entry_information_review"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 399
        if (($context["information_optimblog_information_review"] ?? null)) {
            // line 400
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_review\" value=\"1\" checked=\"checked\" />
                      ";
            // line 401
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 403
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_review\" value=\"1\" />
                      ";
            // line 404
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 405
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 406
        if ( !($context["information_optimblog_information_review"] ?? null)) {
            // line 407
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_review\" value=\"0\" checked=\"checked\" />
                      ";
            // line 408
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 410
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_review\" value=\"0\" />
                      ";
            // line 411
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 412
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-exclusion-category-review-information\"><span data-toggle=\"tooltip\" title=\"";
        // line 416
        echo ($context["help_exclusion_category"] ?? null);
        echo "\">";
        echo ($context["entry_exclusion_category_review_information"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"information_optimblog_exclusion_categories_review_information\" value=\"\" placeholder=\"";
        // line 418
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-exclusion-category-review-information\" class=\"form-control\" />
                    <div id=\"information-optimblog-exclusion-category-review-information\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 420
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["information_optimblog_exclusion_categories_review_information"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information_optimblog_exclusion_category_review_information"]) {
            // line 421
            echo "                      <div id=\"information-optimblog-exclusion-category-review-information";
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_review_information"], "category_id", [], "any", false, false, false, 421);
            echo "\"><i class=\"fa fa-minus-circle\"></i> 
                        ";
            // line 422
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_review_information"], "name", [], "any", false, false, false, 422);
            echo "
                        <input type=\"hidden\" name=\"information_optimblog_exclusion_category_review_information[]\" value=\"";
            // line 423
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_review_information"], "category_id", [], "any", false, false, false, 423);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information_optimblog_exclusion_category_review_information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 426
        echo "                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-exclusion-information-review\"><span data-toggle=\"tooltip\" title=\"";
        // line 430
        echo ($context["help_exclusion_information"] ?? null);
        echo "\">";
        echo ($context["entry_exclusion_information_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"information_optimblog_exclusion_informations_review\" value=\"\" placeholder=\"";
        // line 432
        echo ($context["entry_information"] ?? null);
        echo "\" id=\"input-exclusion-information-review\" class=\"form-control\" />
                    <div id=\"information-optimblog-exclusion-information-review\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["information_optimblog_exclusion_informations_review"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information_optimblog_exclusion_information_review"]) {
            // line 435
            echo "                      <div id=\"information-optimblog-exclusion-information-review";
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_information_review"], "information_id", [], "any", false, false, false, 435);
            echo "\"><i class=\"fa fa-minus-circle\"></i> 
                        ";
            // line 436
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_information_review"], "title", [], "any", false, false, false, 436);
            echo "
                        <input type=\"hidden\" name=\"information_optimblog_exclusion_information_review[]\" value=\"";
            // line 437
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_information_review"], "information_id", [], "any", false, false, false, 437);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information_optimblog_exclusion_information_review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 440
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 445
        echo ($context["text_share"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-share\">";
        // line 447
        echo ($context["entry_share"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <textarea name=\"information_optimblog_share\" id=\"input-share\" rows=\"5\" placeholder=\"";
        // line 449
        echo ($context["entry_share"] ?? null);
        echo "\" class=\"form-control\">";
        echo ($context["information_optimblog_share"] ?? null);
        echo "</textarea>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 454
        echo ($context["text_image"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-thumb\">";
        // line 456
        echo ($context["entry_thumb"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"information_optimblog_information_thumb\" id=\"input-thumb\" class=\"form-control\">
                      ";
        // line 459
        if (($context["information_optimblog_information_thumb"] ?? null)) {
            // line 460
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 461
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 463
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 464
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 466
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-style\">";
        // line 470
        echo ($context["entry_style"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <table id=\"style\" class=\"table table-striped table-bordered table-hover\">
                      <tbody>
                        ";
        // line 474
        $context["style_row"] = 0;
        // line 475
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["information_optimblog_information_style"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information_style"]) {
            // line 476
            echo "                        <tr id=\"style-row";
            echo ($context["style_row"] ?? null);
            echo "\">
                          <td>
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"information_optimblog_information_style[]\" value=\"";
            // line 479
            echo $context["information_style"];
            echo "\" placeholder=\"";
            echo ($context["entry_link"] ?? null);
            echo "\" class=\"form-control input-sm\"/>
                              <div class=\"input-group-btn\">
                                <button type=\"button\" onclick=\"\$('#style-row";
            // line 481
            echo ($context["style_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-minus-circle\"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        ";
            // line 486
            $context["style_row"] = (($context["style_row"] ?? null) + 1);
            // line 487
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information_style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 488
        echo "                      </tbody>
                      <tfoot>
                        <tr>
                          <td>
                            <div class=\"input-group\">
                              <input type=\"text\" placeholder=\"";
        // line 493
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control input-sm\" disabled />
                              <div class=\"input-group-btn\">
                                <button type=\"button\" onclick=\"addStyle();\" data-toggle=\"tooltip\" title=\"";
        // line 495
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-script\">";
        // line 505
        echo ($context["entry_script"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <table id=\"script\" class=\"table table-striped table-bordered table-hover\">
                      <tbody>
                        ";
        // line 509
        $context["script_row"] = 0;
        // line 510
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["information_optimblog_information_script"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["position"]) {
            // line 511
            echo "                        ";
            if (($context["key"] == "header")) {
                // line 512
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["position"]);
                foreach ($context['_seq'] as $context["_key"] => $context["information_script"]) {
                    // line 513
                    echo "                        <tr id=\"script-row";
                    echo ($context["script_row"] ?? null);
                    echo "\">
                          <td>
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"information_optimblog_information_script[header][]\" value=\"";
                    // line 516
                    echo $context["information_script"];
                    echo "\" placeholder=\"";
                    echo ($context["entry_link"] ?? null);
                    echo "\" class=\"form-control input-sm\"/>
                              <div class=\"input-group-btn\">
                                <button type=\"button\" onclick=\"rePosition(this, ";
                    // line 518
                    echo ($context["script_row"] ?? null);
                    echo ");\" class=\"btn btn-sm btn-default\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_position"] ?? null);
                    echo "\">header</button>
                                <button type=\"button\" onclick=\"\$('#script-row";
                    // line 519
                    echo ($context["script_row"] ?? null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-minus-circle\"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        ";
                    // line 524
                    $context["script_row"] = (($context["script_row"] ?? null) + 1);
                    // line 525
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information_script'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 526
                echo "                        ";
            } elseif (($context["key"] == "footer")) {
                // line 527
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["position"]);
                foreach ($context['_seq'] as $context["_key"] => $context["information_script"]) {
                    // line 528
                    echo "                        <tr id=\"script-row";
                    echo ($context["script_row"] ?? null);
                    echo "\">
                          <td>
                            <div class=\"input-group\">
                              <input type=\"text\" name=\"information_optimblog_information_script[footer][]\" value=\"";
                    // line 531
                    echo $context["information_script"];
                    echo "\" placeholder=\"";
                    echo ($context["entry_link"] ?? null);
                    echo "\" class=\"form-control input-sm\"/>
                              <div class=\"input-group-btn\">
                                <button type=\"button\" onclick=\"rePosition(this, ";
                    // line 533
                    echo ($context["script_row"] ?? null);
                    echo ");\" class=\"btn btn-sm btn-default\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_position"] ?? null);
                    echo "\">footer</button>
                                <button type=\"button\" onclick=\"\$('#script-row";
                    // line 534
                    echo ($context["script_row"] ?? null);
                    echo "').remove();\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_remove"] ?? null);
                    echo "\" class=\"btn btn-danger btn-sm\"><i class=\"fa fa-minus-circle\"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>
                        ";
                    // line 539
                    $context["script_row"] = (($context["script_row"] ?? null) + 1);
                    // line 540
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information_script'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 541
                echo "                        ";
            }
            // line 542
            echo "                        ";
            $context["script_row"] = (($context["script_row"] ?? null) + 1);
            // line 543
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['position'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 544
        echo "                      </tbody>
                      <tfoot>
                        <tr>
                          <td>
                            <div class=\"input-group\">
                              <input type=\"text\" placeholder=\"";
        // line 549
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control input-sm\" disabled />
                              <span class=\"input-group-btn\">
                                <button type=\"button\" onclick=\"addScript();\" data-toggle=\"tooltip\" title=\"";
        // line 551
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary btn-sm\"><i class=\"fa fa-plus-circle\"></i></button>
                              </span>
                            </div>
                          </td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-category\">
              <fieldset>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-information-category-show\">";
        // line 565
        echo ($context["entry_information_show"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"information_optimblog_information_show\" id=\"input-information-category-show\" class=\"form-control\">
                      ";
        // line 568
        if (($context["information_optimblog_information_show"] ?? null)) {
            // line 569
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 570
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 572
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 573
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 575
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-information-description-length\"><span data-toggle=\"tooltip\" title=\"";
        // line 579
        echo ($context["help_information_description_length"] ?? null);
        echo "\">";
        echo ($context["entry_information_description_length"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"information_optimblog_information_description_length\" value=\"";
        // line 581
        echo ($context["information_optimblog_information_description_length"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_information_description_length"] ?? null);
        echo "\" id=\"input-information-description-length\" class=\"form-control\" />
                    ";
        // line 582
        if (($context["error_description_length"] ?? null)) {
            // line 583
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_description_length"] ?? null);
            echo "</div>
                    ";
        }
        // line 585
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"";
        // line 588
        echo ($context["help_information_count"] ?? null);
        echo "\">";
        echo ($context["entry_information_count"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 590
        if (($context["information_optimblog_information_count"] ?? null)) {
            // line 591
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_count\" value=\"1\" checked=\"checked\" />
                      ";
            // line 592
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 594
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_count\" value=\"1\" />
                      ";
            // line 595
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 596
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 597
        if ( !($context["information_optimblog_information_count"] ?? null)) {
            // line 598
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_count\" value=\"0\" checked=\"checked\" />
                      ";
            // line 599
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 601
            echo "                      <input type=\"radio\" name=\"information_optimblog_information_count\" value=\"0\" />
                      ";
            // line 602
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 603
        echo " </label>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 608
        echo ($context["text_author"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 610
        echo ($context["entry_category_author"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 612
        if (($context["information_optimblog_category_author"] ?? null)) {
            // line 613
            echo "                      <input type=\"radio\" name=\"information_optimblog_category_author\" value=\"1\" checked=\"checked\" />
                      ";
            // line 614
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 616
            echo "                      <input type=\"radio\" name=\"information_optimblog_category_author\" value=\"1\" />
                      ";
            // line 617
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 618
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 619
        if ( !($context["information_optimblog_category_author"] ?? null)) {
            // line 620
            echo "                      <input type=\"radio\" name=\"information_optimblog_category_author\" value=\"0\" checked=\"checked\" />
                      ";
            // line 621
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 623
            echo "                      <input type=\"radio\" name=\"information_optimblog_category_author\" value=\"0\" />
                      ";
            // line 624
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 625
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-exclusion-category-author\"><span data-toggle=\"tooltip\" title=\"";
        // line 629
        echo ($context["help_exclusion_category"] ?? null);
        echo "\">";
        echo ($context["entry_exclusion_category_author"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"information_optimblog_exclusion_categories_author\" value=\"\" placeholder=\"";
        // line 631
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-exclusion-category-author\" class=\"form-control\" />
                    <div id=\"information-optimblog-exclusion-category-author\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 633
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["information_optimblog_exclusion_categories_author"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information_optimblog_exclusion_category_author"]) {
            // line 634
            echo "                      <div id=\"information-optimblog-exclusion-category-author";
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_author"], "category_id", [], "any", false, false, false, 634);
            echo "\"><i class=\"fa fa-minus-circle\"></i> 
                        ";
            // line 635
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_author"], "name", [], "any", false, false, false, 635);
            echo "
                        <input type=\"hidden\" name=\"information_optimblog_exclusion_category_author[]\" value=\"";
            // line 636
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_author"], "category_id", [], "any", false, false, false, 636);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information_optimblog_exclusion_category_author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 639
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 644
        echo ($context["text_date"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 646
        echo ($context["entry_category_date"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 648
        if (($context["information_optimblog_category_date"] ?? null)) {
            // line 649
            echo "                      <input type=\"radio\" name=\"information_optimblog_category_date\" value=\"1\" checked=\"checked\" />
                      ";
            // line 650
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 652
            echo "                      <input type=\"radio\" name=\"information_optimblog_category_date\" value=\"1\" />
                      ";
            // line 653
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 654
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 655
        if ( !($context["information_optimblog_category_date"] ?? null)) {
            // line 656
            echo "                      <input type=\"radio\" name=\"information_optimblog_category_date\" value=\"0\" checked=\"checked\" />
                      ";
            // line 657
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 659
            echo "                      <input type=\"radio\" name=\"information_optimblog_category_date\" value=\"0\" />
                      ";
            // line 660
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 661
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-exclusion-category-date\"><span data-toggle=\"tooltip\" title=\"";
        // line 665
        echo ($context["help_exclusion_category"] ?? null);
        echo "\">";
        echo ($context["entry_exclusion_category_date"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"information_optimblog_exclusion_categories_date\" value=\"\" placeholder=\"";
        // line 667
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-exclusion-category-date\" class=\"form-control\" />
                    <div id=\"information-optimblog-exclusion-category-date\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 669
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["information_optimblog_exclusion_categories_date"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information_optimblog_exclusion_category_date"]) {
            // line 670
            echo "                      <div id=\"information-optimblog-exclusion-category-date";
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_date"], "category_id", [], "any", false, false, false, 670);
            echo "\"><i class=\"fa fa-minus-circle\"></i> 
                        ";
            // line 671
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_date"], "name", [], "any", false, false, false, 671);
            echo "
                        <input type=\"hidden\" name=\"information_optimblog_exclusion_category_date[]\" value=\"";
            // line 672
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_date"], "category_id", [], "any", false, false, false, 672);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information_optimblog_exclusion_category_date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 675
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 680
        echo ($context["text_review"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\">";
        // line 682
        echo ($context["entry_category_review"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <label class=\"radio-inline\"> ";
        // line 684
        if (($context["information_optimblog_category_review"] ?? null)) {
            // line 685
            echo "                      <input type=\"radio\" name=\"information_optimblog_category_review\" value=\"1\" checked=\"checked\" />
                      ";
            // line 686
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        } else {
            // line 688
            echo "                      <input type=\"radio\" name=\"information_optimblog_category_review\" value=\"1\" />
                      ";
            // line 689
            echo ($context["text_yes"] ?? null);
            echo "
                      ";
        }
        // line 690
        echo " </label>
                    <label class=\"radio-inline\"> ";
        // line 691
        if ( !($context["information_optimblog_category_review"] ?? null)) {
            // line 692
            echo "                      <input type=\"radio\" name=\"information_optimblog_category_review\" value=\"0\" checked=\"checked\" />
                      ";
            // line 693
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        } else {
            // line 695
            echo "                      <input type=\"radio\" name=\"information_optimblog_category_review\" value=\"0\" />
                      ";
            // line 696
            echo ($context["text_no"] ?? null);
            echo "
                      ";
        }
        // line 697
        echo " </label>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-exclusion-category-review\"><span data-toggle=\"tooltip\" title=\"";
        // line 701
        echo ($context["help_exclusion_category"] ?? null);
        echo "\">";
        echo ($context["entry_exclusion_category_review"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"information_optimblog_exclusion_categories_review\" value=\"\" placeholder=\"";
        // line 703
        echo ($context["entry_category"] ?? null);
        echo "\" id=\"input-exclusion-category-review\" class=\"form-control\" />
                    <div id=\"information-optimblog-exclusion-category-review\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 705
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["information_optimblog_exclusion_categories_review"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information_optimblog_exclusion_category_review"]) {
            // line 706
            echo "                      <div id=\"information-optimblog-exclusion-category-review";
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_review"], "category_id", [], "any", false, false, false, 706);
            echo "\"><i class=\"fa fa-minus-circle\"></i> 
                        ";
            // line 707
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_review"], "name", [], "any", false, false, false, 707);
            echo "
                        <input type=\"hidden\" name=\"information_optimblog_exclusion_category_review[]\" value=\"";
            // line 708
            echo twig_get_attribute($this->env, $this->source, $context["information_optimblog_exclusion_category_review"], "category_id", [], "any", false, false, false, 708);
            echo "\" />
                      </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information_optimblog_exclusion_category_review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 711
        echo "                    </div>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 716
        echo ($context["text_view"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-category-view\"><span data-toggle=\"tooltip\" title=\"";
        // line 718
        echo ($context["help_category_view"] ?? null);
        echo "\">";
        echo ($context["entry_category_view"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <div class=\"btn-group\" data-toggle=\"buttons\" id=\"input-category-view\">
                      <label class=\"btn btn-default ";
        // line 721
        if ((($context["information_optimblog_category_view"] ?? null) == "block")) {
            echo "active";
        }
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_block"] ?? null);
        echo "\">
                        <input type=\"radio\" name=\"information_optimblog_category_view\" value=\"block\" autocomplete=\"off\" ";
        // line 722
        if ((($context["information_optimblog_category_view"] ?? null) == "block")) {
            echo "checked";
        }
        echo "><i class=\"fa fa-align-justify\"></i>
                      </label>
                      <label class=\"btn btn-default ";
        // line 724
        if ((($context["information_optimblog_category_view"] ?? null) == "list")) {
            echo "active";
        }
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_list"] ?? null);
        echo "\">
                        <input type=\"radio\" name=\"information_optimblog_category_view\" value=\"list\" autocomplete=\"off\"";
        // line 725
        if ((($context["information_optimblog_category_view"] ?? null) == "list")) {
            echo "checked";
        }
        echo "><i class=\"fa fa-th-list\"></i>
                      </label>
                      <label class=\"btn btn-default ";
        // line 727
        if ((($context["information_optimblog_category_view"] ?? null) == "grid")) {
            echo "active";
        }
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_grid"] ?? null);
        echo "\">
                        <input type=\"radio\" name=\"information_optimblog_category_view\" value=\"grid\" autocomplete=\"off\"";
        // line 728
        if ((($context["information_optimblog_category_view"] ?? null) == "grid")) {
            echo "checked";
        }
        echo "><i class=\"fa fa-th\"></i>
                      </label>
                    </div>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-category-view-show\">";
        // line 734
        echo ($context["entry_category_view_show"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"information_optimblog_category_view_show\" id=\"input-category-view-show\" class=\"form-control\">
                      ";
        // line 737
        if (($context["information_optimblog_category_view_show"] ?? null)) {
            // line 738
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 739
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 741
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 742
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 744
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 749
        echo ($context["text_sort"] ?? null);
        echo "</legend>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-category-sort\"><span data-toggle=\"tooltip\" title=\"";
        // line 751
        echo ($context["help_category_sort"] ?? null);
        echo "\">";
        echo ($context["entry_category_sort"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <select name=\"information_optimblog_category_sort\" id=\"input-category-sort\" class=\"form-control\">
                      ";
        // line 754
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sorts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 755
            echo "                      ";
            if ((twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 755) == ($context["information_optimblog_category_sort"] ?? null))) {
                // line 756
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 756);
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["sort"], "text", [], "any", false, false, false, 756);
                echo "</option>
                      ";
            } else {
                // line 758
                echo "                      <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sort"], "value", [], "any", false, false, false, 758);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["sort"], "text", [], "any", false, false, false, 758);
                echo "</option>
                      ";
            }
            // line 760
            echo "                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 761
        echo "                    </select>
                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-category-sort-show\">";
        // line 765
        echo ($context["entry_category_sort_show"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"information_optimblog_category_sort_show\" id=\"input-category-sort-show\" class=\"form-control\">
                      ";
        // line 768
        if (($context["information_optimblog_category_sort_show"] ?? null)) {
            // line 769
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 770
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 772
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 773
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 775
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
              <fieldset>
                <legend>";
        // line 780
        echo ($context["text_limit"] ?? null);
        echo "</legend>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-catalog-limit\"><span data-toggle=\"tooltip\" title=\"";
        // line 782
        echo ($context["help_information_limit"] ?? null);
        echo "\">";
        echo ($context["entry_information_limit"] ?? null);
        echo "</span></label>
                  <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"information_optimblog_information_limit\" value=\"";
        // line 784
        echo ($context["information_optimblog_information_limit"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_information_limit"] ?? null);
        echo "\" id=\"input-catalog-limit\" class=\"form-control\" />
                    ";
        // line 785
        if (($context["error_information_limit"] ?? null)) {
            // line 786
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_information_limit"] ?? null);
            echo "</div>
                    ";
        }
        // line 788
        echo "                  </div>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-sm-2 control-label\" for=\"input-category-limit-show\">";
        // line 791
        echo ($context["entry_category_limit_show"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <select name=\"information_optimblog_category_limit_show\" id=\"input-category-limit-show\" class=\"form-control\">
                      ";
        // line 794
        if (($context["information_optimblog_category_limit_show"] ?? null)) {
            // line 795
            echo "                      <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\">";
            // line 796
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        } else {
            // line 798
            echo "                      <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                      <option value=\"0\" selected=\"selected\">";
            // line 799
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                      ";
        }
        // line 801
        echo "                    </select>
                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-image\">
              <fieldset>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-image-category-width\">";
        // line 809
        echo ($context["entry_image_category"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"information_optimblog_image_category_width\" value=\"";
        // line 813
        echo ($context["information_optimblog_image_category_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-width\" class=\"form-control\" />
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"information_optimblog_image_category_height\" value=\"";
        // line 816
        echo ($context["information_optimblog_image_category_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                      </div>
                    </div>
                    ";
        // line 819
        if (($context["error_image_category"] ?? null)) {
            // line 820
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_image_category"] ?? null);
            echo "</div>
                    ";
        }
        // line 822
        echo "                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-image-thumb-width\">";
        // line 825
        echo ($context["entry_image_thumb"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"information_optimblog_image_thumb_width\" value=\"";
        // line 829
        echo ($context["information_optimblog_image_thumb_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-thumb-width\" class=\"form-control\" />
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"information_optimblog_image_thumb_height\" value=\"";
        // line 832
        echo ($context["information_optimblog_image_thumb_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                      </div>
                    </div>
                    ";
        // line 835
        if (($context["error_image_thumb"] ?? null)) {
            // line 836
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_image_thumb"] ?? null);
            echo "</div>
                    ";
        }
        // line 838
        echo "                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-image-popup-width\">";
        // line 841
        echo ($context["entry_image_popup"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"information_optimblog_image_popup_width\" value=\"";
        // line 845
        echo ($context["information_optimblog_image_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-popup-width\" class=\"form-control\" />
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"information_optimblog_image_popup_height\" value=\"";
        // line 848
        echo ($context["information_optimblog_image_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                      </div>
                    </div>
                    ";
        // line 851
        if (($context["error_image_popup"] ?? null)) {
            // line 852
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_image_popup"] ?? null);
            echo "</div>
                    ";
        }
        // line 854
        echo "                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-image-information-width\">";
        // line 857
        echo ($context["entry_image_information"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"information_optimblog_image_information_width\" value=\"";
        // line 861
        echo ($context["information_optimblog_image_information_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-information-width\" class=\"form-control\" />
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"information_optimblog_image_information_height\" value=\"";
        // line 864
        echo ($context["information_optimblog_image_information_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                      </div>
                    </div>
                    ";
        // line 867
        if (($context["error_image_information"] ?? null)) {
            // line 868
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_image_information"] ?? null);
            echo "</div>
                    ";
        }
        // line 870
        echo "                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-image-additional-width\">";
        // line 873
        echo ($context["entry_image_additional"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"information_optimblog_image_additional_width\" value=\"";
        // line 877
        echo ($context["information_optimblog_image_additional_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-additional-width\" class=\"form-control\" />
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"information_optimblog_image_additional_height\" value=\"";
        // line 880
        echo ($context["information_optimblog_image_additional_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                      </div>
                    </div>
                    ";
        // line 883
        if (($context["error_image_additional"] ?? null)) {
            // line 884
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_image_additional"] ?? null);
            echo "</div>
                    ";
        }
        // line 886
        echo "                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-image-related\">";
        // line 889
        echo ($context["entry_image_related"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"information_optimblog_image_related_width\" value=\"";
        // line 893
        echo ($context["information_optimblog_image_related_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-related\" class=\"form-control\" />
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"information_optimblog_image_related_height\" value=\"";
        // line 896
        echo ($context["information_optimblog_image_related_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                      </div>
                    </div>
                    ";
        // line 899
        if (($context["error_image_related"] ?? null)) {
            // line 900
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_image_related"] ?? null);
            echo "</div>
                    ";
        }
        // line 902
        echo "                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-image-category-popup-width\">";
        // line 905
        echo ($context["entry_image_category_popup"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"information_optimblog_image_category_popup_width\" value=\"";
        // line 909
        echo ($context["information_optimblog_image_category_popup_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-popup-width\" class=\"form-control\" />
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"information_optimblog_image_category_popup_height\" value=\"";
        // line 912
        echo ($context["information_optimblog_image_category_popup_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                      </div>
                    </div>
                    ";
        // line 915
        if (($context["error_image_category_popup"] ?? null)) {
            // line 916
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_image_category_popup"] ?? null);
            echo "</div>
                    ";
        }
        // line 918
        echo "                  </div>
                </div>
                <div class=\"form-group required\">
                  <label class=\"col-sm-2 control-label\" for=\"input-image-category-additional-width\">";
        // line 921
        echo ($context["entry_image_category_additional"] ?? null);
        echo "</label>
                  <div class=\"col-sm-10\">
                    <div class=\"row\">
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"information_optimblog_image_category_additional_width\" value=\"";
        // line 925
        echo ($context["information_optimblog_image_category_additional_width"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_width"] ?? null);
        echo "\" id=\"input-image-category-additional-width\" class=\"form-control\" />
                      </div>
                      <div class=\"col-sm-6\">
                        <input type=\"text\" name=\"information_optimblog_image_category_additional_height\" value=\"";
        // line 928
        echo ($context["information_optimblog_image_category_additional_height"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_height"] ?? null);
        echo "\" class=\"form-control\" />
                      </div>
                    </div>
                    ";
        // line 931
        if (($context["error_image_category_additional"] ?? null)) {
            // line 932
            echo "                    <div class=\"text-danger\">";
            echo ($context["error_image_category_additional"] ?? null);
            echo "</div>
                    ";
        }
        // line 934
        echo "                  </div>
                </div>
              </fieldset>
            </div>
            <div class=\"tab-pane\" id=\"tab-module\">
              <fieldset>
                <legend>";
        // line 940
        echo ($context["text_information"] ?? null);
        echo "</legend>
              </fieldset>
              <fieldset>
                <legend>";
        // line 943
        echo ($context["text_category"] ?? null);
        echo "</legend>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
// Information
\$('input[name*=\\'informations\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/information/autocomplete&user_token=";
        // line 956
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['title'],
\t\t\t\t\t\tvalue: item['information_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$(this).val('');

\t\t\$('#' + \$(this).next().next().attr('id') + item['value']).remove();

\t\t\$(this).next().next().append('<div id=\"' + \$(this).next().next().attr('id') + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"' + \$(this).next().next().attr('id').replace(/-/g, '_') + '[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

// Category
\$('input[name*=\\'categories\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 981
        echo ($context["user_token"] ?? null);
        echo "&filter_information=1&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
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
\t\t\$(this).val('');

\t\t\$('#' + \$(this).next().next().attr('id') + item['value']).remove();

\t\t\$(this).next().next().append('<div id=\"' + \$(this).next().next().attr('id') + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"' + \$(this).next().next().attr('id').replace(/-/g, '_') + '[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('.well').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});

// Import
\$('#button-import').on('click', function() {
\t\$('#form-import').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-import\" style=\"display: none;\"><input type=\"file\" name=\"import\" /></form>');

\t\$('#form-import input[name=\\'import\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-import input[name=\\'import\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=extension/information/optimblog/import&user_token=";
        // line 1023
        echo ($context["user_token"] ?? null);
        echo "&store_id=";
        echo ($context["store_id"] ?? null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-import')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-import').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-import').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.alert').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\tdocument.location.reload(true);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

// Style
var style_row = ";
        // line 1058
        echo ($context["style_row"] ?? null);
        echo ";

function addStyle() {
\thtml  = '<tr id=\"style-row' + style_row + '\">';
\thtml += '  <td>';
\thtml += '    <div class=\"input-group\">';
\thtml += '      <input type=\"text\" name=\"information_optimblog_information_style[' + style_row + ']\" value=\"\" placeholder=\"";
        // line 1064
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control input-sm\"/>';
\thtml += '      <div class=\"input-group-btn\">';
\thtml += '        <button type=\"button\" onclick=\"\$(\\'#style-row' + style_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1066
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>';
\thtml += '      </div>';
\thtml += '    </div>';
\thtml += '  </td>';
\thtml += '</tr>';
\t
\t\$('#style tbody').append(html);
\t
\tstyle_row++;
}

// Script
var script_row = ";
        // line 1078
        echo ($context["script_row"] ?? null);
        echo ";

function addScript() {
\thtml  = '<tr id=\"script-row' + script_row + '\">';
\thtml += '  <td>';
\thtml += '    <div class=\"input-group\">';
\thtml += '      <input type=\"text\" name=\"information_optimblog_information_script[header][]\" value=\"\" placeholder=\"";
        // line 1084
        echo ($context["entry_link"] ?? null);
        echo "\" class=\"form-control input-sm\"/>';
\thtml += '      <div class=\"input-group-btn\">';
\thtml += '        <button type=\"button\" onclick=\"rePosition(this);\" class=\"btn btn-sm btn-default\" data-toggle=\"tooltip\" title=\"";
        // line 1086
        echo ($context["button_position"] ?? null);
        echo "\">header</button>';
\thtml += '        <button type=\"button\" onclick=\"\$(\\'#script-row' + script_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 1087
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-sm btn-danger\"><i class=\"fa fa-minus-circle\"></i></button>';
\thtml += '      </div>';
\thtml += '    </div>';
\thtml += '  </td>';
\thtml += '</tr>';
\t
\t\$('#script tbody').append(html);
\t
\tscript_row++;
}

function rePosition(elem, script_row) {\t
\tif (\$(elem).text() == 'header') {
    \t\$(elem).parent().prev().attr('name', 'information_optimblog_information_script[footer][]');
        \$(elem).text('footer');
\t} else {
    \t\$(elem).parent().prev().attr('name', 'information_optimblog_information_script[header][]');
        \$(elem).text('header');
\t}
}
  //--></script> 
</div>
";
        // line 1109
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "extension/information/optimblog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2641 => 1109,  2616 => 1087,  2612 => 1086,  2607 => 1084,  2598 => 1078,  2583 => 1066,  2578 => 1064,  2569 => 1058,  2529 => 1023,  2484 => 981,  2456 => 956,  2440 => 943,  2434 => 940,  2426 => 934,  2420 => 932,  2418 => 931,  2410 => 928,  2402 => 925,  2395 => 921,  2390 => 918,  2384 => 916,  2382 => 915,  2374 => 912,  2366 => 909,  2359 => 905,  2354 => 902,  2348 => 900,  2346 => 899,  2338 => 896,  2330 => 893,  2323 => 889,  2318 => 886,  2312 => 884,  2310 => 883,  2302 => 880,  2294 => 877,  2287 => 873,  2282 => 870,  2276 => 868,  2274 => 867,  2266 => 864,  2258 => 861,  2251 => 857,  2246 => 854,  2240 => 852,  2238 => 851,  2230 => 848,  2222 => 845,  2215 => 841,  2210 => 838,  2204 => 836,  2202 => 835,  2194 => 832,  2186 => 829,  2179 => 825,  2174 => 822,  2168 => 820,  2166 => 819,  2158 => 816,  2150 => 813,  2143 => 809,  2133 => 801,  2128 => 799,  2123 => 798,  2118 => 796,  2113 => 795,  2111 => 794,  2105 => 791,  2100 => 788,  2094 => 786,  2092 => 785,  2086 => 784,  2079 => 782,  2074 => 780,  2067 => 775,  2062 => 773,  2057 => 772,  2052 => 770,  2047 => 769,  2045 => 768,  2039 => 765,  2033 => 761,  2027 => 760,  2019 => 758,  2011 => 756,  2008 => 755,  2004 => 754,  1996 => 751,  1991 => 749,  1984 => 744,  1979 => 742,  1974 => 741,  1969 => 739,  1964 => 738,  1962 => 737,  1956 => 734,  1945 => 728,  1937 => 727,  1930 => 725,  1922 => 724,  1915 => 722,  1907 => 721,  1899 => 718,  1894 => 716,  1887 => 711,  1878 => 708,  1874 => 707,  1869 => 706,  1865 => 705,  1860 => 703,  1853 => 701,  1847 => 697,  1842 => 696,  1839 => 695,  1834 => 693,  1831 => 692,  1829 => 691,  1826 => 690,  1821 => 689,  1818 => 688,  1813 => 686,  1810 => 685,  1808 => 684,  1803 => 682,  1798 => 680,  1791 => 675,  1782 => 672,  1778 => 671,  1773 => 670,  1769 => 669,  1764 => 667,  1757 => 665,  1751 => 661,  1746 => 660,  1743 => 659,  1738 => 657,  1735 => 656,  1733 => 655,  1730 => 654,  1725 => 653,  1722 => 652,  1717 => 650,  1714 => 649,  1712 => 648,  1707 => 646,  1702 => 644,  1695 => 639,  1686 => 636,  1682 => 635,  1677 => 634,  1673 => 633,  1668 => 631,  1661 => 629,  1655 => 625,  1650 => 624,  1647 => 623,  1642 => 621,  1639 => 620,  1637 => 619,  1634 => 618,  1629 => 617,  1626 => 616,  1621 => 614,  1618 => 613,  1616 => 612,  1611 => 610,  1606 => 608,  1599 => 603,  1594 => 602,  1591 => 601,  1586 => 599,  1583 => 598,  1581 => 597,  1578 => 596,  1573 => 595,  1570 => 594,  1565 => 592,  1562 => 591,  1560 => 590,  1553 => 588,  1548 => 585,  1542 => 583,  1540 => 582,  1534 => 581,  1527 => 579,  1521 => 575,  1516 => 573,  1511 => 572,  1506 => 570,  1501 => 569,  1499 => 568,  1493 => 565,  1476 => 551,  1471 => 549,  1464 => 544,  1458 => 543,  1455 => 542,  1452 => 541,  1446 => 540,  1444 => 539,  1434 => 534,  1428 => 533,  1421 => 531,  1414 => 528,  1409 => 527,  1406 => 526,  1400 => 525,  1398 => 524,  1388 => 519,  1382 => 518,  1375 => 516,  1368 => 513,  1363 => 512,  1360 => 511,  1355 => 510,  1353 => 509,  1346 => 505,  1333 => 495,  1328 => 493,  1321 => 488,  1315 => 487,  1313 => 486,  1303 => 481,  1296 => 479,  1289 => 476,  1284 => 475,  1282 => 474,  1275 => 470,  1269 => 466,  1264 => 464,  1259 => 463,  1254 => 461,  1249 => 460,  1247 => 459,  1241 => 456,  1236 => 454,  1226 => 449,  1221 => 447,  1216 => 445,  1209 => 440,  1200 => 437,  1196 => 436,  1191 => 435,  1187 => 434,  1182 => 432,  1175 => 430,  1169 => 426,  1160 => 423,  1156 => 422,  1151 => 421,  1147 => 420,  1142 => 418,  1135 => 416,  1129 => 412,  1124 => 411,  1121 => 410,  1116 => 408,  1113 => 407,  1111 => 406,  1108 => 405,  1103 => 404,  1100 => 403,  1095 => 401,  1092 => 400,  1090 => 399,  1085 => 397,  1079 => 393,  1073 => 392,  1065 => 390,  1057 => 388,  1054 => 387,  1050 => 386,  1046 => 385,  1038 => 382,  1032 => 378,  1027 => 377,  1024 => 376,  1019 => 374,  1016 => 373,  1014 => 372,  1011 => 371,  1006 => 370,  1003 => 369,  998 => 367,  995 => 366,  993 => 365,  986 => 363,  980 => 359,  975 => 358,  972 => 357,  967 => 355,  964 => 354,  962 => 353,  959 => 352,  954 => 351,  951 => 350,  946 => 348,  943 => 347,  941 => 346,  934 => 344,  929 => 342,  922 => 337,  913 => 334,  909 => 333,  904 => 332,  900 => 331,  895 => 329,  888 => 327,  882 => 323,  873 => 320,  869 => 319,  864 => 318,  860 => 317,  855 => 315,  848 => 313,  842 => 309,  837 => 308,  834 => 307,  829 => 305,  826 => 304,  824 => 303,  821 => 302,  816 => 301,  813 => 300,  808 => 298,  805 => 297,  803 => 296,  798 => 294,  793 => 292,  786 => 287,  777 => 284,  773 => 283,  768 => 282,  764 => 281,  759 => 279,  752 => 277,  746 => 273,  737 => 270,  733 => 269,  728 => 268,  724 => 267,  719 => 265,  712 => 263,  706 => 259,  701 => 258,  698 => 257,  693 => 255,  690 => 254,  688 => 253,  685 => 252,  680 => 251,  677 => 250,  672 => 248,  669 => 247,  667 => 246,  662 => 244,  657 => 242,  650 => 237,  641 => 234,  637 => 233,  632 => 232,  628 => 231,  623 => 229,  616 => 227,  610 => 223,  601 => 220,  597 => 219,  592 => 218,  588 => 217,  583 => 215,  576 => 213,  570 => 209,  565 => 208,  562 => 207,  557 => 205,  554 => 204,  552 => 203,  549 => 202,  544 => 201,  541 => 200,  536 => 198,  533 => 197,  531 => 196,  526 => 194,  521 => 192,  514 => 187,  505 => 184,  501 => 183,  496 => 182,  492 => 181,  487 => 179,  480 => 177,  475 => 175,  463 => 168,  456 => 166,  445 => 162,  438 => 160,  433 => 158,  426 => 153,  421 => 151,  416 => 150,  411 => 148,  406 => 147,  404 => 146,  396 => 143,  390 => 139,  385 => 137,  380 => 136,  375 => 134,  370 => 133,  368 => 132,  360 => 129,  354 => 125,  349 => 123,  344 => 122,  339 => 120,  334 => 119,  332 => 118,  324 => 115,  318 => 111,  313 => 109,  308 => 108,  303 => 106,  298 => 105,  296 => 104,  288 => 101,  282 => 97,  277 => 95,  272 => 94,  267 => 92,  262 => 91,  260 => 90,  252 => 87,  246 => 83,  241 => 81,  236 => 80,  231 => 78,  226 => 77,  224 => 76,  216 => 73,  210 => 69,  205 => 67,  200 => 66,  195 => 64,  190 => 63,  188 => 62,  180 => 59,  175 => 57,  168 => 52,  163 => 50,  158 => 49,  153 => 47,  148 => 46,  146 => 45,  140 => 42,  130 => 35,  125 => 33,  121 => 32,  117 => 31,  113 => 30,  108 => 28,  104 => 27,  98 => 24,  94 => 22,  86 => 18,  84 => 17,  78 => 13,  67 => 11,  63 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/information/optimblog.twig", "");
    }
}

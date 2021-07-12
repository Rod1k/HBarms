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

/* catalog/category_list.twig */
class __TwigTemplate_f2643fa6eff3a587f85d5b639f9fe8b4473129ed70884f8766dc3600cc9c4125 extends \Twig\Template
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
        <div class=\"btn-group\">
          ";
        // line 8
        if ( !(null === ($context["filter_information"] ?? null))) {
            // line 9
            echo "          <span class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            echo ((($context["filter_information"] ?? null)) ? (($context["text_type_information"] ?? null)) : (($context["text_type_product"] ?? null)));
            echo "\">
          ";
            // line 10
            echo ((($context["filter_information"] ?? null)) ? ("<i class=\"fa fa-file-text-o fa-fw\"></i>") : ("<i class=\"fa fa-shopping-cart fa-fw\"></i>"));
            echo " 
          ";
        } else {
            // line 12
            echo "          <span class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
            echo ($context["text_type_all"] ?? null);
            echo "\">
            <i class=\"fa fa-list fa-fw\"></i>
          ";
        }
        // line 15
        echo "          </span>
          <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        // line 16
        echo ($context["button_type_category"] ?? null);
        echo " <span class=\"caret\"></span></button>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            <li><a href=\"";
        // line 18
        echo ($context["type_all"] ?? null);
        echo "\"><i class=\"fa fa-list fa-fw\"></i> ";
        echo ($context["text_type_all"] ?? null);
        echo "</a></li>
            <li class=\"divider\"></li>
            <li><a href=\"";
        // line 20
        echo ($context["type_product"] ?? null);
        echo "\"><i class=\"fa fa-shopping-cart fa-fw\"></i> ";
        echo ($context["text_type_product"] ?? null);
        echo "</a></li>
            <li><a href=\"";
        // line 21
        echo ($context["type_information"] ?? null);
        echo "\"><i class=\"fa fa-file-text-o fa-fw\"></i> ";
        echo ($context["text_type_information"] ?? null);
        echo "</a></li>
          </ul>
        </div>
        <a href=\"";
        // line 24
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <a href=\"";
        // line 25
        echo ($context["repair"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_rebuild"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-refresh\"></i></a>
        
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 27
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-category').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 29
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 32
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 32);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 32);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 38
        if (($context["error_warning"] ?? null)) {
            // line 39
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 43
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 44
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 48
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 50
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 53
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 59
        if ((($context["sort"] ?? null) == "name")) {
            // line 60
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 62
            echo "                    <a href=\"";
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 63
        echo "</td>

                  <td class=\"text-right\">";
        // line 65
        if ((($context["sort"] ?? null) == "information")) {
            // line 66
            echo "                    <a href=\"";
            echo ($context["sort_information"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_type"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 68
            echo "                    <a href=\"";
            echo ($context["sort_information"] ?? null);
            echo "\">";
            echo ($context["column_type"] ?? null);
            echo "</a>
                    ";
        }
        // line 69
        echo "</td>
        
                  <td class=\"text-right\">";
        // line 71
        if ((($context["sort"] ?? null) == "sort_order")) {
            // line 72
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 74
            echo "                    <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 75
        echo "</td>
                  <td class=\"text-right\">";
        // line 76
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 80
        if (($context["categories"] ?? null)) {
            // line 81
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 82
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 83
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 83), ($context["selected"] ?? null))) {
                    // line 84
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 84);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 86
                    echo "                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 86);
                    echo "\" />
                    ";
                }
                // line 87
                echo "</td>
                  <td class=\"text-left\">";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 88);
                echo "</td>

                  <td class=\"text-right\">";
                // line 90
                echo ((twig_get_attribute($this->env, $this->source, $context["category"], "information", [], "any", false, false, false, 90)) ? (($context["text_type_information"] ?? null)) : (($context["text_type_product"] ?? null)));
                echo "</td>
        
                  <td class=\"text-right\">";
                // line 92
                echo twig_get_attribute($this->env, $this->source, $context["category"], "sort_order", [], "any", false, false, false, 92);
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 93
                echo twig_get_attribute($this->env, $this->source, $context["category"], "edit", [], "any", false, false, false, 93);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "                ";
        } else {
            // line 97
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 98
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 101
        echo "              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 106
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 107
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 113
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/category_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 113,  335 => 107,  331 => 106,  324 => 101,  318 => 98,  315 => 97,  312 => 96,  301 => 93,  297 => 92,  292 => 90,  287 => 88,  284 => 87,  278 => 86,  272 => 84,  270 => 83,  267 => 82,  262 => 81,  260 => 80,  253 => 76,  250 => 75,  242 => 74,  232 => 72,  230 => 71,  226 => 69,  218 => 68,  208 => 66,  206 => 65,  202 => 63,  194 => 62,  184 => 60,  182 => 59,  173 => 53,  167 => 50,  163 => 48,  155 => 44,  152 => 43,  144 => 39,  142 => 38,  136 => 34,  125 => 32,  121 => 31,  116 => 29,  109 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 20,  75 => 18,  70 => 16,  67 => 15,  60 => 12,  55 => 10,  50 => 9,  48 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/category_list.twig", "");
    }
}

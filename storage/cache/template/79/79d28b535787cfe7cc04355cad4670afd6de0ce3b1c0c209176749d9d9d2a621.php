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

/* default/template/information/category.twig */
class __TwigTemplate_61404b27aee6301bcbd895045f9b8f0704027030822819f948c42862e5ef67f1 extends \Twig\Template
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
<div id=\"information-category\" class=\"container\">

  <div class=\"row\">";
        // line 4
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 5
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 6
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 7
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 8
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 9
            echo "    ";
        } else {
            // line 10
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 11
            echo "    ";
        }
        // line 12
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 14
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 15
            echo "      <div class=\"row\"> ";
            if (($context["thumb"] ?? null)) {
                // line 16
                echo "        <div class=\"col-sm-2\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" /></div>
        ";
            }
            // line 18
            echo "        ";
            if (($context["description"] ?? null)) {
                // line 19
                echo "        <div class=\"col-sm-10\">";
                echo ($context["description"] ?? null);
                echo "</div>
        ";
            }
            // line 20
            echo "</div>
      <hr>
      ";
        }
        // line 23
        echo "      ";
        if (($context["categories"] ?? null)) {
            // line 24
            echo "      <h3>";
            echo ($context["text_refine"] ?? null);
            echo "</h3>
      ";
            // line 25
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 26
                echo "      <div class=\"row\">
        <div class=\"col-sm-3\">
          <ul>
            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 30
                    echo "            <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 30);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30);
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "          </ul>
        </div>
      </div>
      ";
            } else {
                // line 36
                echo "      <div class=\"row\">
        ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 38
                    echo "        <div class=\"col-sm-3\">
          <ul>
            ";
                    // line 40
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 41
                        echo "            <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 41);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 41);
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "          </ul>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "      </div>
      <br />
      ";
            }
            // line 49
            echo "      ";
        }
        // line 50
        echo "      ";
        if (($context["informations"] ?? null)) {
            // line 51
            echo "      ";
            if (((($context["view_show"] ?? null) || ($context["sort_show"] ?? null)) || ($context["limit_show"] ?? null))) {
                // line 52
                echo "      <div class=\"row\">
        ";
                // line 53
                if (($context["view_show"] ?? null)) {
                    // line 54
                    echo "        <div class=\"col-sm-5 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"information-block-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
                    // line 56
                    echo ($context["button_block"] ?? null);
                    echo "\"><i class=\"fa fa-align-justify\"></i></button>
            <button type=\"button\" id=\"information-list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
                    // line 57
                    echo ($context["button_list"] ?? null);
                    echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"information-grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
                    // line 58
                    echo ($context["button_grid"] ?? null);
                    echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        ";
                }
                // line 62
                echo "        ";
                if (($context["sort_show"] ?? null)) {
                    // line 63
                    echo "        <div class=\"col-sm-4 col-xs-6 ";
                    echo ((( !($context["limit_show"] ?? null) ||  !($context["view_show"] ?? null))) ? ("col-sm-offset-5 col-xs-offset-6") : (""));
                    echo "\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
                    // line 65
                    echo ($context["text_sort"] ?? null);
                    echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
                    // line 67
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                        // line 68
                        echo "              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 68) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                            // line 69
                            echo "              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 69);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 69);
                            echo "</option>
              ";
                        } else {
                            // line 71
                            echo "              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 71);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 71);
                            echo "</option>
              ";
                        }
                        // line 73
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    echo "            </select>
          </div>
        </div>
        ";
                }
                // line 78
                echo "        ";
                if (($context["limit_show"] ?? null)) {
                    // line 79
                    echo "        <div class=\"col-sm-3 col-xs-6 ";
                    echo (( !($context["sort_show"] ?? null)) ? ("col-sm-offset-4 col-xs-offset-6") : (""));
                    echo " ";
                    echo (( !($context["view_show"] ?? null)) ? ("pull-right") : (""));
                    echo "\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
                    // line 81
                    echo ($context["text_limit"] ?? null);
                    echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
                    // line 83
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["limits"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                        // line 84
                        echo "              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 84) == ($context["limit"] ?? null))) {
                            // line 85
                            echo "              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 85);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 85);
                            echo "</option>
              ";
                        } else {
                            // line 87
                            echo "              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 87);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 87);
                            echo "</option>
              ";
                        }
                        // line 89
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 90
                    echo "            </select>
          </div>
        </div>
        ";
                }
                // line 94
                echo "      </div>
      ";
            }
            // line 96
            echo "      <div class=\"row\">
        ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 98
                echo "        <div class=\"information-layout ";
                echo ($context["view"] ?? null);
                echo " col-xs-12\">
          <div class=\"thumbnail media\">
            ";
                // line 100
                if (twig_get_attribute($this->env, $this->source, $context["information"], "thumb", [], "any", false, false, false, 100)) {
                    // line 101
                    echo "            <div class=\"image pull-left\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 101);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "thumb", [], "any", false, false, false, 101);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 101);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 101);
                    echo "\" class=\"img-responsive\" /></a></div>
            ";
                }
                // line 103
                echo "            <div class=\"caption media-body\">
              <h4><a href=\"";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 104);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 104);
                echo "</a></h4>
              ";
                // line 105
                if (((($context["show_author"] ?? null) || ($context["show_date"] ?? null)) || ($context["show_review"] ?? null))) {
                    // line 106
                    echo "              <ul class=\"list-inline text-muted small\">
                ";
                    // line 107
                    if (($context["show_date"] ?? null)) {
                        // line 108
                        echo "                <li><i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["information"], "date_added", [], "any", false, false, false, 108);
                        echo "</li>
                ";
                    }
                    // line 110
                    echo "                ";
                    if (($context["show_author"] ?? null)) {
                        // line 111
                        echo "                <li><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["information"], "author", [], "any", false, false, false, 111);
                        echo "</li>
                ";
                    }
                    // line 113
                    echo "                ";
                    if (($context["show_review"] ?? null)) {
                        // line 114
                        echo "                <li><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["information"], "reviews", [], "any", false, false, false, 114);
                        echo "</li>
                ";
                    }
                    // line 116
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["information"], "rating", [], "any", false, false, false, 116)) {
                        // line 117
                        echo "                <li class=\"rating\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 118
                            echo "                  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["information"], "rating", [], "any", false, false, false, 118) < $context["i"])) {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                            } else {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                            }
                            // line 119
                            echo "                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " </li>
                ";
                    }
                    // line 121
                    echo "              </ul>
              ";
                }
                // line 123
                echo "              <p>";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "description", [], "any", false, false, false, 123);
                echo "</p>
              <a href=\"";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 124);
                echo "\" type=\"button\" class=\"btn btn-primary\" title=\"";
                echo ($context["text_read"] ?? null);
                echo "\">";
                echo ($context["text_read"] ?? null);
                echo "</a>
            </div>
          </div>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 131
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 132
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        }
        // line 135
        echo "      ";
        if (((( !($context["categories"] ?? null) &&  !($context["products"] ?? null)) &&  !($context["informations"] ?? null)) &&  !($context["category_information"] ?? null))) {
            // line 136
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 138
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 141
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 142
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 144
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/information/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  475 => 144,  470 => 142,  465 => 141,  457 => 138,  451 => 136,  448 => 135,  442 => 132,  438 => 131,  434 => 129,  419 => 124,  414 => 123,  410 => 121,  401 => 119,  394 => 118,  389 => 117,  386 => 116,  380 => 114,  377 => 113,  371 => 111,  368 => 110,  362 => 108,  360 => 107,  357 => 106,  355 => 105,  349 => 104,  346 => 103,  334 => 101,  332 => 100,  326 => 98,  322 => 97,  319 => 96,  315 => 94,  309 => 90,  303 => 89,  295 => 87,  287 => 85,  284 => 84,  280 => 83,  275 => 81,  267 => 79,  264 => 78,  258 => 74,  252 => 73,  244 => 71,  236 => 69,  233 => 68,  229 => 67,  224 => 65,  218 => 63,  215 => 62,  208 => 58,  204 => 57,  200 => 56,  196 => 54,  194 => 53,  191 => 52,  188 => 51,  185 => 50,  182 => 49,  177 => 46,  169 => 43,  158 => 41,  154 => 40,  150 => 38,  146 => 37,  143 => 36,  137 => 32,  126 => 30,  122 => 29,  117 => 26,  115 => 25,  110 => 24,  107 => 23,  102 => 20,  96 => 19,  93 => 18,  83 => 16,  80 => 15,  78 => 14,  74 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  55 => 8,  52 => 7,  49 => 6,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/category.twig", "");
    }
}

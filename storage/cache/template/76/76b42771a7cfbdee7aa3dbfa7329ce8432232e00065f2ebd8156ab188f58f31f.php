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
class __TwigTemplate_cd1b1e42b913a064968b874d5c85e15ddd7c9c09154cbefaeaf75591032b6249 extends \Twig\Template
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
      <h1>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 18
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 19
            echo "      <div class=\"row\"> ";
            if (($context["thumb"] ?? null)) {
                // line 20
                echo "        <div class=\"col-sm-2\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\" /></div>
        ";
            }
            // line 22
            echo "        ";
            if (($context["description"] ?? null)) {
                // line 23
                echo "        <div class=\"col-sm-10\">";
                echo ($context["description"] ?? null);
                echo "</div>
        ";
            }
            // line 24
            echo "</div>
      <hr>
      ";
        }
        // line 27
        echo "      ";
        if (($context["categories"] ?? null)) {
            // line 28
            echo "      <h3>";
            echo ($context["text_refine"] ?? null);
            echo "</h3>
      ";
            // line 29
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 30
                echo "      <div class=\"row\">
        <div class=\"col-sm-3\">
          <ul>
            ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 34
                    echo "            <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 34);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 34);
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "          </ul>
        </div>
      </div>
      ";
            } else {
                // line 40
                echo "      <div class=\"row\">
        ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 42
                    echo "        <div class=\"col-sm-3\">
          <ul>
            ";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 45
                        echo "            <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 45);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 45);
                        echo "</a></li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "          </ul>
        </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "      </div>
      <br />
      ";
            }
            // line 53
            echo "      ";
        }
        // line 54
        echo "      ";
        if (($context["informations"] ?? null)) {
            // line 55
            echo "      ";
            if (((($context["view_show"] ?? null) || ($context["sort_show"] ?? null)) || ($context["limit_show"] ?? null))) {
                // line 56
                echo "      <div class=\"row\">
        ";
                // line 57
                if (($context["view_show"] ?? null)) {
                    // line 58
                    echo "        <div class=\"col-sm-5 hidden-xs\">
          <div class=\"btn-group btn-group-sm\">
            <button type=\"button\" id=\"information-block-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
                    // line 60
                    echo ($context["button_block"] ?? null);
                    echo "\"><i class=\"fa fa-align-justify\"></i></button>
            <button type=\"button\" id=\"information-list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
                    // line 61
                    echo ($context["button_list"] ?? null);
                    echo "\"><i class=\"fa fa-th-list\"></i></button>
            <button type=\"button\" id=\"information-grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"";
                    // line 62
                    echo ($context["button_grid"] ?? null);
                    echo "\"><i class=\"fa fa-th\"></i></button>
          </div>
        </div>
        ";
                }
                // line 66
                echo "        ";
                if (($context["sort_show"] ?? null)) {
                    // line 67
                    echo "        <div class=\"col-sm-4 col-xs-6 ";
                    echo ((( !($context["limit_show"] ?? null) ||  !($context["view_show"] ?? null))) ? ("col-sm-offset-5 col-xs-offset-6") : (""));
                    echo "\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-sort\">";
                    // line 69
                    echo ($context["text_sort"] ?? null);
                    echo "</label>
            <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
                    // line 71
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["sorts"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                        // line 72
                        echo "              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 72) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                            // line 73
                            echo "              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 73);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 73);
                            echo "</option>
              ";
                        } else {
                            // line 75
                            echo "              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 75);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", [], "any", false, false, false, 75);
                            echo "</option>
              ";
                        }
                        // line 77
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 78
                    echo "            </select>
          </div>
        </div>
        ";
                }
                // line 82
                echo "        ";
                if (($context["limit_show"] ?? null)) {
                    // line 83
                    echo "        <div class=\"col-sm-3 col-xs-6 ";
                    echo (( !($context["sort_show"] ?? null)) ? ("col-sm-offset-4 col-xs-offset-6") : (""));
                    echo " ";
                    echo (( !($context["view_show"] ?? null)) ? ("pull-right") : (""));
                    echo "\">
          <div class=\"form-group input-group input-group-sm\">
            <label class=\"input-group-addon\" for=\"input-limit\">";
                    // line 85
                    echo ($context["text_limit"] ?? null);
                    echo "</label>
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
              ";
                    // line 87
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["limits"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                        // line 88
                        echo "              ";
                        if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 88) == ($context["limit"] ?? null))) {
                            // line 89
                            echo "              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 89);
                            echo "\" selected=\"selected\">";
                            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 89);
                            echo "</option>
              ";
                        } else {
                            // line 91
                            echo "              <option value=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 91);
                            echo "\">";
                            echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 91);
                            echo "</option>
              ";
                        }
                        // line 93
                        echo "              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 94
                    echo "            </select>
          </div>
        </div>
        ";
                }
                // line 98
                echo "      </div>
      ";
            }
            // line 100
            echo "      <div class=\"row\">
        ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 102
                echo "        <div class=\"information-layout ";
                echo ($context["view"] ?? null);
                echo " col-xs-12\">
          <div class=\"thumbnail media\">
            ";
                // line 104
                if (twig_get_attribute($this->env, $this->source, $context["information"], "thumb", [], "any", false, false, false, 104)) {
                    // line 105
                    echo "            <div class=\"image pull-left\"><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 105);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "thumb", [], "any", false, false, false, 105);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 105);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 105);
                    echo "\" class=\"img-responsive\" /></a></div>
            ";
                }
                // line 107
                echo "            <div class=\"caption media-body\">
              <h4><a href=\"";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 108);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 108);
                echo "</a></h4>
              ";
                // line 109
                if (((($context["show_author"] ?? null) || ($context["show_date"] ?? null)) || ($context["show_review"] ?? null))) {
                    // line 110
                    echo "              <ul class=\"list-inline text-muted small\">
                ";
                    // line 111
                    if (($context["show_date"] ?? null)) {
                        // line 112
                        echo "                <li><i class=\"fa fa-calendar-o\" aria-hidden=\"true\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["information"], "date_added", [], "any", false, false, false, 112);
                        echo "</li>
                ";
                    }
                    // line 114
                    echo "                ";
                    if (($context["show_author"] ?? null)) {
                        // line 115
                        echo "                <li><i class=\"fa fa-user-o\" aria-hidden=\"true\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["information"], "author", [], "any", false, false, false, 115);
                        echo "</li>
                ";
                    }
                    // line 117
                    echo "                ";
                    if (($context["show_review"] ?? null)) {
                        // line 118
                        echo "                <li><i class=\"fa fa-comment-o\" aria-hidden=\"true\"></i> ";
                        echo twig_get_attribute($this->env, $this->source, $context["information"], "reviews", [], "any", false, false, false, 118);
                        echo "</li>
                ";
                    }
                    // line 120
                    echo "                ";
                    if (twig_get_attribute($this->env, $this->source, $context["information"], "rating", [], "any", false, false, false, 120)) {
                        // line 121
                        echo "                <li class=\"rating\"> ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                            // line 122
                            echo "                  ";
                            if ((twig_get_attribute($this->env, $this->source, $context["information"], "rating", [], "any", false, false, false, 122) < $context["i"])) {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                            } else {
                                echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                            }
                            // line 123
                            echo "                  ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " </li>
                ";
                    }
                    // line 125
                    echo "              </ul>
              ";
                }
                // line 127
                echo "              <p>";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "description", [], "any", false, false, false, 127);
                echo "</p>
              <a href=\"";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 128);
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
            // line 133
            echo "      </div>
      <div class=\"row\">
        <div class=\"col-sm-6 text-left\">";
            // line 135
            echo ($context["pagination"] ?? null);
            echo "</div>
        <div class=\"col-sm-6 text-right\">";
            // line 136
            echo ($context["results"] ?? null);
            echo "</div>
      </div>
      ";
        }
        // line 139
        echo "      ";
        if (((( !($context["categories"] ?? null) &&  !($context["products"] ?? null)) &&  !($context["informations"] ?? null)) &&  !($context["category_information"] ?? null))) {
            // line 140
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 142
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 145
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 146
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 148
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
        return array (  493 => 148,  488 => 146,  483 => 145,  475 => 142,  469 => 140,  466 => 139,  460 => 136,  456 => 135,  452 => 133,  437 => 128,  432 => 127,  428 => 125,  419 => 123,  412 => 122,  407 => 121,  404 => 120,  398 => 118,  395 => 117,  389 => 115,  386 => 114,  380 => 112,  378 => 111,  375 => 110,  373 => 109,  367 => 108,  364 => 107,  352 => 105,  350 => 104,  344 => 102,  340 => 101,  337 => 100,  333 => 98,  327 => 94,  321 => 93,  313 => 91,  305 => 89,  302 => 88,  298 => 87,  293 => 85,  285 => 83,  282 => 82,  276 => 78,  270 => 77,  262 => 75,  254 => 73,  251 => 72,  247 => 71,  242 => 69,  236 => 67,  233 => 66,  226 => 62,  222 => 61,  218 => 60,  214 => 58,  212 => 57,  209 => 56,  206 => 55,  203 => 54,  200 => 53,  195 => 50,  187 => 47,  176 => 45,  172 => 44,  168 => 42,  164 => 41,  161 => 40,  155 => 36,  144 => 34,  140 => 33,  135 => 30,  133 => 29,  128 => 28,  125 => 27,  120 => 24,  114 => 23,  111 => 22,  101 => 20,  98 => 19,  96 => 18,  92 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/information/category.twig", "");
    }
}

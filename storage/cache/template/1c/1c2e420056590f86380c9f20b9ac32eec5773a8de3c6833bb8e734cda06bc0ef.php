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

/* hbarms/template/product/category.twig */
class __TwigTemplate_f78538385231d95492003c5a4a00076a23c5bedb45c92d63e25241a0b394f731 extends \Twig\Template
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
<div id=\"product-category\" class=\"container\">
  <div class=\"row\">";
        // line 3
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 4
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 5
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 6
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 7
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo " category-hbarms\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 12
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      <ul class=\"breadcrumb\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "        <li><a href=\"";
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

      ";
        // line 30
        echo "

      ";
        // line 32
        if (($context["categories"] ?? null)) {
            // line 33
            echo "      <div class=\"grid-category\">
        <div class=\"row\">
          <div class=\"col-sm-12\">
            <div class=\"categories-grid\">

                <div class=\"grid-category-parents\">
                  <div class=\"grid-category-child\">
                    <div class=\"children-img-block\"><img src=\"image/icons/pistol.png\" alt=\"\"></div>
                    <a class=\"name-category-child\" href=\"#\">Casings</a>
                    <a class=\"detailed-link-grid-child-category\" href=\"#\">detailed</a>
                    <p class=\"filter-category\"><a href=\"#\">rifile</a> / <a href=\"#\">pistol</a></p>
                  </div>
                  <div class=\"grid-category-child\">
                    <div class=\"children-img-block\"><img src=\"image/icons/pistol.png\" alt=\"\"></div>
                    <a class=\"name-category-child\" href=\"#\">Casings</a>
                    <a class=\"detailed-link-grid-child-category\" href=\"#\">detailed</a>
                    <p class=\"filter-category\"><a href=\"#\">rifile</a> / <a href=\"#\">pistol</a></p>
                  </div>
                  <div class=\"grid-category-child\">
                    <div class=\"children-img-block\"><img src=\"image/icons/pistol.png\" alt=\"\"></div>
                    <a class=\"name-category-child\" href=\"#\">Casings</a>
                    <a class=\"detailed-link-grid-child-category\" href=\"#\">detailed</a>
                    <p class=\"filter-category\"><a href=\"#\">rifile</a> / <a href=\"#\">pistol</a></p>
                  </div>
                  <div class=\"grid-category-child\">
                    <div class=\"children-img-block\"><img src=\"image/icons/pistol.png\" alt=\"\"></div>
                    <a class=\"name-category-child\" href=\"#\">Casings</a>
                    <a class=\"detailed-link-grid-child-category\" href=\"#\">detailed</a>
                    <p class=\"filter-category\"><a href=\"#\">rifile</a> / <a href=\"#\">pistol</a></p>
                  </div>
                </div>
               

            </div>  
          </div>
        </div>
      </div>


      ";
            // line 98
            echo "

      ";
        }
        // line 101
        echo "
      ";
        // line 213
        echo "
      ";
        // line 214
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 215
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 217
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 220
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 221
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<link href=\"catalog\\view\\theme\\hbarms\\stylesheet\\category.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
";
        // line 224
        echo ($context["footer"] ?? null);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "hbarms/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 224,  176 => 221,  171 => 220,  163 => 217,  157 => 215,  155 => 214,  152 => 213,  149 => 101,  144 => 98,  103 => 33,  101 => 32,  97 => 30,  93 => 17,  82 => 15,  78 => 14,  73 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hbarms/template/product/category.twig", "");
    }
}

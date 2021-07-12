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
class __TwigTemplate_ba233c6822fa21f8ffaf1ecd6fe9d92070df3489f6bd825f60ee47863c84db55 extends \Twig\Template
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
            echo "      <div class=\"row\">
        <div class=\"col-sm-12\">
          <div class=\"categories-grid\">

              <div class=\"grid-category-parents\">
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



      ";
            // line 78
            echo "

      ";
        }
        // line 81
        echo "
      ";
        // line 193
        echo "
      ";
        // line 194
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 195
            echo "      <p>";
            echo ($context["text_empty"] ?? null);
            echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
            // line 197
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
      ";
        }
        // line 200
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 201
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<link href=\"catalog\\view\\theme\\hbarms\\stylesheet\\category.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
";
        // line 204
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
        return array (  162 => 204,  156 => 201,  151 => 200,  143 => 197,  137 => 195,  135 => 194,  132 => 193,  129 => 81,  124 => 78,  103 => 33,  101 => 32,  97 => 30,  93 => 17,  82 => 15,  78 => 14,  73 => 12,  66 => 11,  63 => 10,  60 => 9,  57 => 8,  54 => 7,  51 => 6,  48 => 5,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hbarms/template/product/category.twig", "");
    }
}

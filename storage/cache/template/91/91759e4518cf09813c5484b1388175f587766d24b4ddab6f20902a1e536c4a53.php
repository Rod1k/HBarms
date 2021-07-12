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

/* default/template/extension/module/latest_information.twig */
class __TwigTemplate_45ba3ac0e1af7a578a666bdbe3936414ce8b607cfa9cc577aa2604e0b2a4085c extends \Twig\Template
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
        echo "<h3>";
        echo ($context["heading_title"] ?? null);
        echo "</h3>
<div class=\"row\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 4
            echo "  <div class=\"information-layout col-lg-4 col-md-4 col-sm-6 col-xs-12\">
    <div class=\"information-thumb transition thumbnail\">
      ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["information"], "thumb", [], "any", false, false, false, 6)) {
                // line 7
                echo "      <div class=\"image\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 7);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "thumb", [], "any", false, false, false, 7);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 7);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 7);
                echo "\" class=\"img-responsive\" /></a></div>
      ";
            }
            // line 9
            echo "      <div class=\"caption\">
        <h4><a href=\"";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 10);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 10);
            echo "</a></h4>
        ";
            // line 11
            if (((($context["author"] ?? null) || ($context["date"] ?? null)) || ($context["review"] ?? null))) {
                // line 12
                echo "        <ul class=\"list-inline text-muted small\">
          ";
                // line 13
                if (($context["date"] ?? null)) {
                    // line 14
                    echo "          <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "date_added", [], "any", false, false, false, 14);
                    echo "</li>
          ";
                }
                // line 16
                echo "          ";
                if (($context["author"] ?? null)) {
                    // line 17
                    echo "          <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "author", [], "any", false, false, false, 17);
                    echo "</li>
          ";
                }
                // line 19
                echo "          ";
                if (($context["review"] ?? null)) {
                    // line 20
                    echo "          <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "reviews", [], "any", false, false, false, 20);
                    echo "</li>
          ";
                }
                // line 22
                echo "          ";
                if (($context["rating"] ?? null)) {
                    // line 23
                    echo "          <li class=\"rating\">
          ";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 25
                        echo "          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["information"], "rating", [], "any", false, false, false, 25) < $context["i"])) {
                            // line 26
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                        } else {
                            // line 28
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                        }
                        // line 30
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "          </li>
          ";
                }
                // line 33
                echo "        </ul>
        ";
            }
            // line 35
            echo "        <p>";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "description", [], "any", false, false, false, 35);
            echo "</p>
        <a href=\"";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 36);
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
        // line 41
        echo "</div>
<link href=\"catalog\\view\\theme\\hbarms\\stylesheet\\blog.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />";
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/latest_information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 41,  145 => 36,  140 => 35,  136 => 33,  132 => 31,  126 => 30,  122 => 28,  118 => 26,  115 => 25,  111 => 24,  108 => 23,  105 => 22,  99 => 20,  96 => 19,  90 => 17,  87 => 16,  81 => 14,  79 => 13,  76 => 12,  74 => 11,  68 => 10,  65 => 9,  53 => 7,  51 => 6,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/latest_information.twig", "");
    }
}

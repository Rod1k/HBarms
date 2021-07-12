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
class __TwigTemplate_5dde5f192afd41b00f9753981be384be69dd591c8ad939eca347e7397d4a0594 extends \Twig\Template
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
        echo "
</div></div></div>
<div class=\"wrapper-container-blog\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-sm-12\">
<h3>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h3>
<div class=\"row\">
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 10
            echo "  <div class=\"information-layout col-lg-4 col-md-4 col-sm-6 col-xs-12\">
    <div class=\"information-thumb transition thumbnail\">
      ";
            // line 12
            if (twig_get_attribute($this->env, $this->source, $context["information"], "thumb", [], "any", false, false, false, 12)) {
                // line 13
                echo "      <div class=\"image\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 13);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "thumb", [], "any", false, false, false, 13);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 13);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 13);
                echo "\" class=\"img-responsive\" /></a></div>
      ";
            }
            // line 15
            echo "      <div class=\"caption\">
        <h4><a href=\"";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 16);
            echo "</a></h4>
        ";
            // line 17
            if (((($context["author"] ?? null) || ($context["date"] ?? null)) || ($context["review"] ?? null))) {
                // line 18
                echo "        <ul class=\"list-inline text-muted small\">
          ";
                // line 19
                if (($context["date"] ?? null)) {
                    // line 20
                    echo "          <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "date_added", [], "any", false, false, false, 20);
                    echo "</li>
          ";
                }
                // line 22
                echo "          ";
                if (($context["author"] ?? null)) {
                    // line 23
                    echo "          <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "author", [], "any", false, false, false, 23);
                    echo "</li>
          ";
                }
                // line 25
                echo "          ";
                if (($context["review"] ?? null)) {
                    // line 26
                    echo "          <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "reviews", [], "any", false, false, false, 26);
                    echo "</li>
          ";
                }
                // line 28
                echo "          ";
                if (($context["rating"] ?? null)) {
                    // line 29
                    echo "          <li class=\"rating\">
          ";
                    // line 30
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 31
                        echo "          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["information"], "rating", [], "any", false, false, false, 31) < $context["i"])) {
                            // line 32
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                        } else {
                            // line 34
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                        }
                        // line 36
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 37
                    echo "          </li>
          ";
                }
                // line 39
                echo "        </ul>
        ";
            }
            // line 41
            echo "        <p>";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "description", [], "any", false, false, false, 41);
            echo "</p>
        <a href=\"";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 42);
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
        // line 47
        echo "</div>
</div>
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
        return array (  167 => 47,  152 => 42,  147 => 41,  143 => 39,  139 => 37,  133 => 36,  129 => 34,  125 => 32,  122 => 31,  118 => 30,  115 => 29,  112 => 28,  106 => 26,  103 => 25,  97 => 23,  94 => 22,  88 => 20,  86 => 19,  83 => 18,  81 => 17,  75 => 16,  72 => 15,  60 => 13,  58 => 12,  54 => 10,  50 => 9,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/latest_information.twig", "");
    }
}

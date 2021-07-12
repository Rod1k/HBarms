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
class __TwigTemplate_016f941ffa1c313c46473489140de283a8ae78e30b030a32715dfcca981cf100 extends \Twig\Template
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
  <div class=\"infomation-head\">
    <h3>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h3>
    
  </div>
<div class=\"row\">
  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 13
            echo "  <div class=\"information-layout col-lg-4 col-md-4 col-sm-6 col-xs-12\">
    <div class=\"information-thumb transition thumbnail\">
      ";
            // line 15
            if (twig_get_attribute($this->env, $this->source, $context["information"], "thumb", [], "any", false, false, false, 15)) {
                // line 16
                echo "      <div class=\"image\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 16);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "thumb", [], "any", false, false, false, 16);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 16);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 16);
                echo "\" class=\"img-responsive\" /></a></div>
      ";
            }
            // line 18
            echo "      <div class=\"caption\">
        <h4><a href=\"";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 19);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 19);
            echo "</a></h4>
        ";
            // line 20
            if (((($context["author"] ?? null) || ($context["date"] ?? null)) || ($context["review"] ?? null))) {
                // line 21
                echo "        <ul class=\"list-inline text-muted small\">
          ";
                // line 22
                if (($context["date"] ?? null)) {
                    // line 23
                    echo "          <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "date_added", [], "any", false, false, false, 23);
                    echo "</li>
          ";
                }
                // line 25
                echo "          ";
                if (($context["author"] ?? null)) {
                    // line 26
                    echo "          <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "author", [], "any", false, false, false, 26);
                    echo "</li>
          ";
                }
                // line 28
                echo "          ";
                if (($context["review"] ?? null)) {
                    // line 29
                    echo "          <li>";
                    echo twig_get_attribute($this->env, $this->source, $context["information"], "reviews", [], "any", false, false, false, 29);
                    echo "</li>
          ";
                }
                // line 31
                echo "          ";
                if (($context["rating"] ?? null)) {
                    // line 32
                    echo "          <li class=\"rating\">
          ";
                    // line 33
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 34
                        echo "          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["information"], "rating", [], "any", false, false, false, 34) < $context["i"])) {
                            // line 35
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                        } else {
                            // line 37
                            echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                        }
                        // line 39
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "          </li>
          ";
                }
                // line 42
                echo "        </ul>
        ";
            }
            // line 44
            echo "        <p>";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "description", [], "any", false, false, false, 44);
            echo "</p>
        <a href=\"";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 45);
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
        // line 50
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
        return array (  170 => 50,  155 => 45,  150 => 44,  146 => 42,  142 => 40,  136 => 39,  132 => 37,  128 => 35,  125 => 34,  121 => 33,  118 => 32,  115 => 31,  109 => 29,  106 => 28,  100 => 26,  97 => 25,  91 => 23,  89 => 22,  86 => 21,  84 => 20,  78 => 19,  75 => 18,  63 => 16,  61 => 15,  57 => 13,  53 => 12,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/latest_information.twig", "");
    }
}

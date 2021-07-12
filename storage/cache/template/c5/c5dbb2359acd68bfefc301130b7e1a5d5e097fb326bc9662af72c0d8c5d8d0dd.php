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

/* hbarms/template/common/home.twig */
class __TwigTemplate_d98eb9385ebca88e385f28d073808b0abfac3bb64585ec8ade127c3aa0a76402 extends \Twig\Template
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
<div class=\"container-fluid\">
  <div class=\"row\">
  <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
  <!-- Indicators -->
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
    <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class=\"carousel-inner\" role=\"listbox\">
    <div class=\"item active\">
      <!-- <img src=\"http://hbarms/image/cache/catalog/demo/banners/iPhone6-1140x380.jpg\" alt=\"...\"> -->
      <div style=\"height: 500px;background-color:black\"></div>
      <div class=\"carousel-caption\">
        ывавыавыавыа
      </div>
    </div>
    <div class=\"item\">
      <img src=\"http://hbarms/image/cache/catalog/demo/banners/iPhone6-1140x380.jpg\" alt=\"...\">
      <div class=\"carousel-caption\">
        ...
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
    <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
    <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
  </div>
</div>
<div id=\"common-home\" class=\"container\">
  <div class=\"row\">";
        // line 42
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 43
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 44
            echo "    ";
            $context["class"] = "col-sm-6";
            // line 45
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 46
            echo "    ";
            $context["class"] = "col-sm-9";
            // line 47
            echo "    ";
        } else {
            // line 48
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 49
            echo "    ";
        }
        // line 50
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 51
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 53
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "hbarms/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 53,  113 => 51,  105 => 50,  102 => 49,  99 => 48,  96 => 47,  93 => 46,  90 => 45,  87 => 44,  85 => 43,  81 => 42,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hbarms/template/common/home.twig", "");
    }
}

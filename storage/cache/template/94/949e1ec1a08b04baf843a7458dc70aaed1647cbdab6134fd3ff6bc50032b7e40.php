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

/* hbarms/template/extension/module/slideshow.twig */
class __TwigTemplate_d5fede391fa76db2eeeac450a9d980694ca2d5005194cc1bad7c1e7e41b2c84c extends \Twig\Template
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
        echo "<!-- ";
        echo twig_get_attribute($this->env, $this->source, ($context["banner"] ?? null), "image", [], "any", false, false, false, 1);
        echo " -->
<div style=\"box-shadow:none;border:none;width: 100vw;padding-right:0;margin-left: calc(-50vw + 50%); margin-right:0\" class=\"slideshow swiper-viewport\">
  <div id=\"slideshow";
        // line 3
        echo ($context["module"] ?? null);
        echo "\" class=\"swiper-container\">
    <div class=\"swiper-wrapper\"> ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "      <div class=\"swiper-slide text-center\">
        
        <div class=\"slide-item-resize\" style=\"background-image: url();\">
        <div class=\"slider-title-description\">
          <div class=\"slider-title\">";
            // line 9
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 9);
            echo " <span style=\"color:#FF8A00;\">";
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "title_after", [], "any", false, false, false, 9);
            echo "</span></div>
          <div class=\"slider-description\">Unitary pistol cartridge with a wafer-type sleeve</div>
          <div class=\"slider-btn\">
            <a class=\"btn btn-warning btn-lg\">Large button</a>
          </div>
        </div>
        </div>
      
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo " </div>
  </div>
  <div style=\"bottom:6%\" class=\"swiper-pagination slideshow";
        // line 20
        echo ($context["module"] ?? null);
        echo "\"></div>
  <div class=\"swiper-pager\">
    <div class=\"swiper-button-next\"></div>
    <div class=\"swiper-button-prev\"></div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#slideshow";
        // line 27
        echo ($context["module"] ?? null);
        echo "').swiper({
\tmode: 'horizontal',
\tslidesPerView: 1,
\tpagination: '.slideshow";
        // line 30
        echo ($context["module"] ?? null);
        echo "',
\tpaginationClickable: true,
\tnextButton: '.slideshow .swiper-button-next',
    prevButton: '.slideshow .swiper-button-prev',
    spaceBetween: 30,
\tautoplay: 5000,
    autoplayDisableOnInteraction: true,
\tloop: true
});
\$(window).resize(function(){
  \$(\".slide-item-resize\").css({\"height\" : \$(\".slideshow\").width()*0.35});
})
var heightslide = \$(\".swiper-container\").height();
\$(\".slide-item-resize\").css({\"height\" : \$(\".slideshow\").width()*0.35});
//--></script>";
    }

    public function getTemplateName()
    {
        return "hbarms/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 30,  89 => 27,  79 => 20,  75 => 18,  57 => 9,  51 => 5,  47 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hbarms/template/extension/module/slideshow.twig", "");
    }
}

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
class __TwigTemplate_0272ed4921f12e23d0e9ff8edf25b6de6f3cfd7fdea781692448da3d737a3bcd extends \Twig\Template
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
<div class=\"slideshow swiper-viewport swiper-contain\">
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
          <div class=\"slider-description\">";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "description", [], "any", false, false, false, 10);
            echo "</div>
          <div class=\"slider-btn\">
            <a class=\"btn btn-warning btn-lg\">";
            // line 12
            echo twig_get_attribute($this->env, $this->source, $context["banner"], "name_button", [], "any", false, false, false, 12);
            echo "</a>
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
        return array (  99 => 30,  93 => 27,  83 => 20,  79 => 18,  66 => 12,  61 => 10,  55 => 9,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hbarms/template/extension/module/slideshow.twig", "");
    }
}

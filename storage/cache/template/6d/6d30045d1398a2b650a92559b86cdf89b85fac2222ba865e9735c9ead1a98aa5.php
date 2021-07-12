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

/* hbarms/template/common/footer.twig */
class __TwigTemplate_873802605249f2420a19b200a78f7647709201d286284473e4ca608b34b9d044 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 2
            echo "          <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 2);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 2);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-offset-1 col-sm-2 col-xs-4\">
        <h5>Firearms</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"##\">Assembled</a></li>
        </ul>
      </div>
      <div class=\"col-sm-2 col-xs-4\">
        <h5>Amunition</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"##\">Assembled Rounds</a></li>
          <li><a href=\"##\">Components</a></li>
        </ul>
      </div>
      <div class=\"col-sm-2 col-xs-4\">
        <h5>TTF transfers</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"##\">Assembled</a></li>
          <li><a href=\"##\">Components</a></li>
        </ul>
      </div>
      <div class=\"col-sm-2 col-xs-6\">
        <h5>Blog</h5>
      </div>
      <div class=\"col-sm-2 col-xs-6\">
        <h5>Contact</h5>
      </div>
    </div>
    <hr>
    <p>All rights reserved</p>
  </div>
</footer>

<link href=\"catalog\\view\\theme\\hbarms\\stylesheet\\footer.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "hbarms/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hbarms/template/common/footer.twig", "");
    }
}

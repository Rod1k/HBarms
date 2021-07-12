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
class __TwigTemplate_914787013b58267a6927a040ad52210dbfc38b4e92409a7c042107e0071348d5 extends \Twig\Template
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
        echo "<footer>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-offset-1 col-xs-2\">
        <h5>Firearms</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"##\">Assembled</a></li>
        </ul>
      </div>
      <div class=\"col-xs-2\">
        <h5>Amunition</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"##\">Assembled Rounds</a></li>
          <li><a href=\"##\">Components</a></li>
        </ul>
      </div>
      <div class=\"col-xs-2\">
        <h5>TTF transfers</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"##\">Assembled</a></li>
          <li><a href=\"##\">Components</a></li>
        </ul>
      </div>
      <div class=\"col-xs-2\">
        <h5>Blog</h5>
      </div>
      <div class=\"col-xs-2\">
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

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "hbarms/template/common/footer.twig", "");
    }
}

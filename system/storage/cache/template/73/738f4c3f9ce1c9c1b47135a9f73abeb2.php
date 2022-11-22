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

/* extension/opencart/catalog/view/template/module/featured.twig */
class __TwigTemplate_e1e7e8a708badca0b29deacaf2e52da2 extends Template
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
<div class=\"row";
        // line 2
        if ((($context["axis"] ?? null) == "horizontal")) {
            echo " row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4";
        }
        echo "\">
  ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "    <div class=\"col\">";
            echo $context["product"];
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/module/featured.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 6,  52 => 4,  48 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/featured.twig", "C:\\xampp\\htdocs\\upload\\extension\\opencart\\catalog\\view\\template\\module\\featured.twig");
    }
}

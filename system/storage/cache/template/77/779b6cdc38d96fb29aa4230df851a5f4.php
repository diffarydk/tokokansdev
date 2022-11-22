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

/* catalog/view/template/product/thumb.twig */
class __TwigTemplate_cebd547d253e7c5aa0db721a2a80cbf4 extends Template
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
        echo "<form method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["cart"] ?? null);
        echo "\" data-oc-target=\"#header-cart\">
  <div class=\"product-thumb\">
    <div class=\"image\"><a href=\"";
        // line 3
        echo ($context["href"] ?? null);
        echo "\"><img src=\"";
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" title=\"";
        echo ($context["name"] ?? null);
        echo "\" class=\"img-fluid\"/></a></div>
    <div class=\"content\">
      <div class=\"description\">
        <h4><a href=\"";
        // line 6
        echo ($context["href"] ?? null);
        echo "\">";
        echo ($context["name"] ?? null);
        echo "</a></h4>
        <p>";
        // line 7
        echo ($context["description"] ?? null);
        echo "</p>
        ";
        // line 8
        if (($context["price"] ?? null)) {
            // line 9
            echo "          <div class=\"price\">
            ";
            // line 10
            if ( !($context["special"] ?? null)) {
                // line 11
                echo "              <span class=\"price-new\">";
                echo ($context["price"] ?? null);
                echo "</span>
            ";
            } else {
                // line 13
                echo "              <span class=\"price-new\">";
                echo ($context["special"] ?? null);
                echo "</span> <span class=\"price-old\">";
                echo ($context["price"] ?? null);
                echo "</span>
            ";
            }
            // line 15
            echo "            ";
            if (($context["tax"] ?? null)) {
                // line 16
                echo "              <span class=\"price-tax\">";
                echo ($context["text_tax"] ?? null);
                echo " ";
                echo ($context["tax"] ?? null);
                echo "</span>
            ";
            }
            // line 18
            echo "          </div>
        ";
        }
        // line 20
        echo "        ";
        if ((($context["review_status"] ?? null) && ($context["rating"] ?? null))) {
            // line 21
            echo "          <div class=\"rating\">
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 23
                echo "              ";
                if ((($context["rating"] ?? null) < $context["i"])) {
                    // line 24
                    echo "                <span class=\"fa-stack\"><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
              ";
                } else {
                    // line 26
                    echo "                <span class=\"fa-stack\"><i class=\"fa-solid fa-star fa-stack-1x\"></i><i class=\"fa-regular fa-star fa-stack-1x\"></i></span>
              ";
                }
                // line 28
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "          </div>
        ";
        }
        // line 31
        echo "      </div>
      <div class=\"button-group\">
        <button type=\"submit\" formaction=\"";
        // line 33
        echo ($context["add_to_cart"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_cart"] ?? null);
        echo "\"><i class=\"fa-solid fa-shopping-cart\"></i></button>
        <button type=\"submit\" formaction=\"";
        // line 34
        echo ($context["add_to_wishlist"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_wishlist"] ?? null);
        echo "\"><i class=\"fa-solid fa-heart\"></i></button>
        <button type=\"submit\" formaction=\"";
        // line 35
        echo ($context["add_to_compare"] ?? null);
        echo "\" data-bs-toggle=\"tooltip\" title=\"";
        echo ($context["button_compare"] ?? null);
        echo "\"><i class=\"fa-solid fa-arrow-right-arrow-left\"></i></button>
      </div>
    </div>
    <input type=\"hidden\" name=\"product_id\" value=\"";
        // line 38
        echo ($context["product_id"] ?? null);
        echo "\"/>
    <input type=\"hidden\" name=\"quantity\" value=\"";
        // line 39
        echo ($context["minimum"] ?? null);
        echo "\"/>
  </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/thumb.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 39,  156 => 38,  148 => 35,  142 => 34,  136 => 33,  132 => 31,  128 => 29,  122 => 28,  118 => 26,  114 => 24,  111 => 23,  107 => 22,  104 => 21,  101 => 20,  97 => 18,  89 => 16,  86 => 15,  78 => 13,  72 => 11,  70 => 10,  67 => 9,  65 => 8,  61 => 7,  55 => 6,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/thumb.twig", "C:\\xampp\\htdocs\\upload\\catalog\\view\\template\\product\\thumb.twig");
    }
}

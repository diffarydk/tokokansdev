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

/* catalog/view/template/common/cart.twig */
class __TwigTemplate_83ddd86cb76ae1ea20137dc41d06d6ed extends Template
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
        echo "<div class=\"dropdown d-grid\">
  <button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-inverse btn-block dropdown-toggle\"><i class=\"fa-solid fa-cart-shopping\"></i> ";
        // line 2
        echo ($context["text_items"] ?? null);
        echo "</button>
  <ul class=\"dropdown-menu dropdown-menu-right\" style=\"width: 500px;\">
    ";
        // line 4
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 5
            echo "      <li>
        <table class=\"table table-sm table-striped\">
          ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 8
                echo "            <tr>
              <td class=\"text-center\">";
                // line 9
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 9);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 9);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 9);
                    echo "\" class=\"img-thumbnail\"/></a>";
                }
                echo "</td>
              <td class=\"text-start\"><a href=\"";
                // line 10
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 10);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 10);
                echo "</a>
                ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 11)) {
                    // line 12
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 12));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 13
                        echo "                    <br/>
                    <small> - ";
                        // line 14
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 14);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 14);
                        echo "</small>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "                ";
                }
                // line 17
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 17)) {
                    // line 18
                    echo "                  <br/>
                  <small> - ";
                    // line 19
                    echo ($context["text_subscription"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 19);
                    echo "</small>
                ";
                }
                // line 21
                echo "
              </td>
              <td class=\"text-end\">x ";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 23);
                echo "</td>
              <td class=\"text-end\">";
                // line 24
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 24);
                echo "</td>
              <td class=\"text-end\">
                <form action=\"";
                // line 26
                echo ($context["product_remove"] ?? null);
                echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["list"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">
                  <input type=\"hidden\" name=\"key\" value=\"";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 27);
                echo "\">
                  <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
                // line 28
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
                </form>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 34
                echo "            <tr>
              <td class=\"text-center\"></td>
              <td class=\"text-start\">";
                // line 36
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 36);
                echo "</td>
              <td class=\"text-end\">x&nbsp;1</td>
              <td class=\"text-end\">";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 38);
                echo "</td>
              <td class=\"text-end\">
                <form action=\"";
                // line 40
                echo ($context["voucher_remove"] ?? null);
                echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["list"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">
                  <input type=\"hidden\" name=\"key\" value=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 41);
                echo "\"/>
                  <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
                // line 42
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
                </form>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        </table>
        <div>
          <table class=\"table table-sm table-bordered\">
            ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 51
                echo "              <tr>
                <td class=\"text-end\"><strong>";
                // line 52
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 52);
                echo "</strong></td>
                <td class=\"text-end\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 53);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "          </table>
          <p class=\"text-end\"><a href=\"";
            // line 57
            echo ($context["cart"] ?? null);
            echo "\"><strong><i class=\"fa-solid fa-cart-shopping\"></i> ";
            echo ($context["text_cart"] ?? null);
            echo "</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\"><strong><i class=\"fa-solid fa-share\"></i> ";
            echo ($context["text_checkout"] ?? null);
            echo "</strong></a></p>
        </div>
      </li>
    ";
        } else {
            // line 61
            echo "      <li>
        <p class=\"text-center\">";
            // line 62
            echo ($context["text_no_results"] ?? null);
            echo "</p>
      </li>
    ";
        }
        // line 65
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 65,  232 => 62,  229 => 61,  216 => 57,  213 => 56,  204 => 53,  200 => 52,  197 => 51,  193 => 50,  188 => 47,  177 => 42,  173 => 41,  167 => 40,  162 => 38,  157 => 36,  153 => 34,  148 => 33,  137 => 28,  133 => 27,  127 => 26,  122 => 24,  118 => 23,  114 => 21,  107 => 19,  104 => 18,  101 => 17,  98 => 16,  88 => 14,  85 => 13,  80 => 12,  78 => 11,  72 => 10,  58 => 9,  55 => 8,  51 => 7,  47 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/cart.twig", "C:\\xampp\\htdocs\\upload\\catalog\\view\\template\\common\\cart.twig");
    }
}

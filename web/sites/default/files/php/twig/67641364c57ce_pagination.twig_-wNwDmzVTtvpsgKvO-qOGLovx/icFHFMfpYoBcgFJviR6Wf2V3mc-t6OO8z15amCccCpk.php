<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @radix/pagination/pagination.twig */
class __TwigTemplate_8209447f1ec26f7c39910b8b8c5b9510 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 13
        yield "
";
        // line 14
        if ((($context["alignment"] ?? null) == "right")) {
            // line 15
            yield "  ";
            $context["alignment"] = "justify-content-end";
        } elseif ((        // line 16
($context["alignment"] ?? null) == "center")) {
            // line 17
            yield "  ";
            $context["alignment"] = "justify-content-center";
        } else {
            // line 19
            yield "  ";
            $context["alignment"] = "";
        }
        // line 21
        yield "
";
        // line 22
        if (($context["items"] ?? null)) {
            // line 23
            yield "  <nav class=\"pager ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::join(($context["utility_classes"] ?? null), " "), "html", null, true);
            yield "\" aria-label=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "\">
    <ul class=\"pagination pager__items js-pager__items ";
            // line 24
            ((($context["size"] ?? null)) ? (yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ("pagination-" . ($context["size"] ?? null)), "html", null, true)) : (yield ""));
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["alignment"] ?? null), "html", null, true);
            yield " flex-wrap\">
      ";
            // line 26
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 26)) {
                // line 27
                yield "        <li class=\"page-item pager__item pager__item--first\">
          <a href=\"";
                // line 28
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 28), "href", [], "any", false, false, true, 28), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 28), "attributes", [], "any", false, false, true, 28), "href", "title"), "html", null, true);
                yield " class=\"page-link\">
            <span class=\"visually-hidden\">";
                // line 29
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                yield "</span>
            <span aria-hidden=\"true\">";
                // line 30
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 30), "text", [], "any", true, true, true, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, true, true, 30), "text", [], "any", false, false, true, 30), t("« First"))) : (t("« First"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 34
            yield "      ";
            // line 35
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 35)) {
                // line 36
                yield "        <li class=\"page-item pager__item pager__item--previous\">
          <a href=\"";
                // line 37
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 37), "href", [], "any", false, false, true, 37), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                yield "\" rel=\"prev\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 37), "attributes", [], "any", false, false, true, 37), "href", "title", "rel"), "html", null, true);
                yield " class=\"page-link\">
            <span class=\"visually-hidden\">";
                // line 38
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                yield "</span>
            <span aria-hidden=\"true\">";
                // line 39
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 39), "text", [], "any", true, true, true, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, true, true, 39), "text", [], "any", false, false, true, 39), t("‹ Previous"))) : (t("‹ Previous"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 43
            yield "      ";
            // line 44
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 44)) {
                // line 45
                yield "        <li class=\"page-item pager__item pager__item--ellipsis disabled\" role=\"presentation\"><span class=\"page-link\">&hellip;</span></li>
      ";
            }
            // line 47
            yield "      ";
            // line 48
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 48));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 49
                yield "        <li class=\"page-item pager__item";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" is-active active") : ("")));
                yield "\">
          ";
                // line 50
                if ((($context["current"] ?? null) == $context["key"])) {
                    // line 51
                    yield "            ";
                    $context["title"] = t("Current page");
                    // line 52
                    yield "          ";
                } else {
                    // line 53
                    yield "            ";
                    $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                    // line 54
                    yield "          ";
                }
                // line 55
                yield "          <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 55), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 55), "href", "title"), "html", null, true);
                yield " class=\"page-link\">
            <span class=\"visually-hidden\">
              ";
                // line 57
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (t("Current page")) : (t("Page"))));
                yield "
            </span>";
                // line 59
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                // line 60
                yield "</a>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "

      ";
            // line 65
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 65) && (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 65) || CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 65)))) {
                // line 66
                yield "        <li class=\"page-item disabled\">
          <span class=\"page-link\">
            ";
                // line 68
                yield t("Page @items.current", array("@items.current" => CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 68), ));
                // line 69
                yield "          </span>
        </li>
      ";
            }
            // line 72
            yield "
      ";
            // line 74
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 74)) {
                // line 75
                yield "        <li class=\"page-item pager__item pager__item--ellipsis disabled\" role=\"presentation\"><span class=\"page-link\">&hellip;</span></li>
      ";
            }
            // line 77
            yield "      ";
            // line 78
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 78)) {
                // line 79
                yield "        <li class=\"page-item pager__item pager__item--next\">
          <a href=\"";
                // line 80
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 80), "href", [], "any", false, false, true, 80), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                yield "\" rel=\"next\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 80), "attributes", [], "any", false, false, true, 80), "href", "title", "rel"), "html", null, true);
                yield " class=\"page-link\">
            <span class=\"visually-hidden\">";
                // line 81
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                yield "</span>
            <span aria-hidden=\"true\">";
                // line 82
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 82), "text", [], "any", true, true, true, 82)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, true, true, 82), "text", [], "any", false, false, true, 82), t("Next ›"))) : (t("Next ›"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 86
            yield "      ";
            // line 87
            yield "      ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 87)) {
                // line 88
                yield "        <li class=\"page-item pager__item pager__item--last\">
          <a href=\"";
                // line 89
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 89), "href", [], "any", false, false, true, 89), "html", null, true);
                yield "\" title=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                yield "\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 89), "attributes", [], "any", false, false, true, 89), "href", "title"), "html", null, true);
                yield " class=\"page-link\">
            <span class=\"visually-hidden\">";
                // line 90
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                yield "</span>
            <span aria-hidden=\"true\">";
                // line 91
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 91), "text", [], "any", true, true, true, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, true, true, 91), "text", [], "any", false, false, true, 91), t("Last »"))) : (t("Last »"))), "html", null, true);
                yield "</span>
          </a>
        </li>
      ";
            }
            // line 95
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["alignment", "items", "utility_classes", "size", "ellipses", "current"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@radix/pagination/pagination.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  272 => 95,  265 => 91,  261 => 90,  253 => 89,  250 => 88,  247 => 87,  245 => 86,  238 => 82,  234 => 81,  226 => 80,  223 => 79,  220 => 78,  218 => 77,  214 => 75,  211 => 74,  208 => 72,  203 => 69,  201 => 68,  197 => 66,  195 => 65,  191 => 63,  183 => 60,  181 => 59,  177 => 57,  167 => 55,  164 => 54,  161 => 53,  158 => 52,  155 => 51,  153 => 50,  148 => 49,  143 => 48,  141 => 47,  137 => 45,  134 => 44,  132 => 43,  125 => 39,  121 => 38,  113 => 37,  110 => 36,  107 => 35,  105 => 34,  98 => 30,  94 => 29,  86 => 28,  83 => 27,  80 => 26,  74 => 24,  67 => 23,  65 => 22,  62 => 21,  58 => 19,  54 => 17,  52 => 16,  49 => 15,  47 => 14,  44 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@radix/pagination/pagination.twig", "themes/contrib/radix/src/components/pagination/pagination.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 14, "set" => 15, "for" => 48, "trans" => 68);
        static $filters = array("escape" => 23, "join" => 23, "t" => 23, "without" => 28, "default" => 30);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for', 'trans'],
                ['escape', 'join', 't', 'without', 'default'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

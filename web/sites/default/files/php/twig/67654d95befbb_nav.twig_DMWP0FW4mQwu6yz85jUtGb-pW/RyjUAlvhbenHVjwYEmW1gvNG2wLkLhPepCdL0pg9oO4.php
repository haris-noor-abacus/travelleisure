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

/* @radix/nav/nav.twig */
class __TwigTemplate_e7c732f1714e6304b2454f82ee25cbae extends Template
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
            'items' => [$this, 'block_items'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 15
        yield "
";
        // line 16
        if ((($context["alignment"] ?? null) == "right")) {
            // line 17
            yield "  ";
            $context["alignment"] = "justify-content-end";
        } elseif ((        // line 18
($context["alignment"] ?? null) == "center")) {
            // line 19
            yield "  ";
            $context["alignment"] = "justify-content-center";
        } elseif ((        // line 20
($context["alignment"] ?? null) == "vertical")) {
            // line 21
            yield "  ";
            $context["alignment"] = "flex-column";
        } else {
            // line 23
            yield "  ";
            $context["alignment"] = "";
        }
        // line 25
        yield "
";
        // line 26
        $context["style"] = ((($context["style"] ?? null)) ? (("nav-" . ($context["style"] ?? null))) : (""));
        // line 27
        $context["fill"] = ((($context["fill"] ?? null)) ? (("nav-" . ($context["fill"] ?? null))) : (""));
        // line 28
        yield "
";
        // line 29
        $context["nav_classes"] = Twig\Extension\CoreExtension::merge(["nav",         // line 31
($context["style"] ?? null),         // line 32
($context["alignment"] ?? null),         // line 33
($context["fill"] ?? null)], ((        // line 34
($context["utility_classes"] ?? null)) ? (($context["utility_classes"] ?? null)) : ([])));
        // line 36
        yield "
";
        // line 37
        if (($context["items"] ?? null)) {
            // line 38
            yield "  <ul";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["nav_classes"] ?? null)], "method", false, false, true, 38), "html", null, true);
            yield ">
    ";
            // line 39
            yield from $this->unwrap()->yieldBlock('items', $context, $blocks);
            // line 72
            yield "  </ul>
";
        }
        // line 74
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "alignment", "utility_classes", "items", "attributes", "nav_item_utility_classes", "nav_link_utility_classes", "dropdown"]);        yield from [];
    }

    // line 39
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_items(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 40
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            yield "        ";
            $context["nav_item_classes"] = Twig\Extension\CoreExtension::merge(["nav-item", ((CoreExtension::getAttribute($this->env, $this->source,             // line 43
$context["item"], "in_active_trail", [], "any", false, false, true, 43)) ? ("active") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,             // line 44
$context["item"], "is_expanded", [], "any", false, false, true, 44) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 44))) ? ("dropdown") : (""))], ((            // line 45
($context["nav_item_utility_classes"] ?? null)) ? (($context["nav_item_utility_classes"] ?? null)) : ([])));
            // line 47
            yield "        ";
            $context["nav_link_classes"] = Twig\Extension\CoreExtension::merge(["nav-link"], ((            // line 49
($context["nav_link_utility_classes"] ?? null)) ? (($context["nav_link_utility_classes"] ?? null)) : ([])));
            // line 51
            yield "
        ";
            // line 52
            if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 52), "options", [], "any", false, false, true, 52), "attributes", [], "any", false, false, true, 52), "class", [], "any", false, false, true, 52))) {
                // line 53
                yield "          ";
                $context["nav_link_classes"] = Twig\Extension\CoreExtension::merge(($context["nav_link_classes"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 53), "options", [], "any", false, false, true, 53), "attributes", [], "any", false, false, true, 53), "class", [], "any", false, false, true, 53));
                // line 54
                yield "        ";
            } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 54), "options", [], "any", false, false, true, 54), "attributes", [], "any", false, false, true, 54), "class", [], "any", false, false, true, 54)) {
                // line 55
                yield "          ";
                $context["nav_link_classes"] = Twig\Extension\CoreExtension::merge(($context["nav_link_classes"] ?? null), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 55), "options", [], "any", false, false, true, 55), "attributes", [], "any", false, false, true, 55), "class", [], "any", false, false, true, 55)]);
                // line 56
                yield "        ";
            }
            // line 57
            yield "        
        <li";
            // line 58
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 58), "addClass", [($context["nav_item_classes"] ?? null)], "method", false, false, true, 58), "html", null, true);
            yield ">
          ";
            // line 59
            if (((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "is_expanded", [], "any", false, false, true, 59) && CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 59)) && ((array_key_exists("dropdown", $context)) ? (Twig\Extension\CoreExtension::default(($context["dropdown"] ?? null), true)) : (true)))) {
                // line 60
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 60), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 60), ["class" => Twig\Extension\CoreExtension::merge(($context["nav_link_classes"] ?? null), ["dropdown-toggle"]), "data-bs-toggle" => "dropdown"]), "html", null, true);
                yield "
            ";
                // line 61
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 61)) {
                    // line 62
                    yield "              ";
                    yield from                     $this->loadTemplate("@radix/dropdown/dropdown-menu.twig", "@radix/nav/nav.twig", 62)->unwrap()->yield(CoreExtension::merge($context, ["items" => CoreExtension::getAttribute($this->env, $this->source,                     // line 63
$context["item"], "below", [], "any", false, false, true, 63)]));
                    // line 65
                    yield "            ";
                }
                // line 66
                yield "          ";
            } else {
                // line 67
                yield "            ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 67), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 67), ["class" => ($context["nav_link_classes"] ?? null)]), "html", null, true);
                yield "
          ";
            }
            // line 69
            yield "        </li>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@radix/nav/nav.twig";
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
        return array (  208 => 71,  193 => 69,  187 => 67,  184 => 66,  181 => 65,  179 => 63,  177 => 62,  175 => 61,  170 => 60,  168 => 59,  164 => 58,  161 => 57,  158 => 56,  155 => 55,  152 => 54,  149 => 53,  147 => 52,  144 => 51,  142 => 49,  140 => 47,  138 => 45,  137 => 44,  136 => 43,  134 => 41,  116 => 40,  109 => 39,  102 => 74,  98 => 72,  96 => 39,  91 => 38,  89 => 37,  86 => 36,  84 => 34,  83 => 33,  82 => 32,  81 => 31,  80 => 29,  77 => 28,  75 => 27,  73 => 26,  70 => 25,  66 => 23,  62 => 21,  60 => 20,  57 => 19,  55 => 18,  52 => 17,  50 => 16,  47 => 15,  45 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@radix/nav/nav.twig", "themes/contrib/radix/src/components/nav/nav.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 14, "if" => 16, "set" => 17, "block" => 39, "for" => 40, "include" => 62);
        static $filters = array("merge" => 34, "escape" => 38, "default" => 59);
        static $functions = array("link" => 60);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'if', 'set', 'block', 'for', 'include'],
                ['merge', 'escape', 'default'],
                ['link'],
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

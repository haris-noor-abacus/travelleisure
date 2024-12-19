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

/* @apigee-kickstart/page/sidebar-default.twig */
class __TwigTemplate_e778f6083765e426ed7498c5ac650f7d extends Template
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
        // line 30
        yield "
";
        // line 31
        $context["content_classes"] = Twig\Extension\CoreExtension::merge([(((        // line 32
($context["sidebar_first"] ?? null) && ($context["sidebar_second"] ?? null))) ? ("col-md-5 offset-md-1") : ("")), (((        // line 33
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null))) ? ("col-md-8 offset-md-1") : ("")), ((( !        // line 34
($context["sidebar_first"] ?? null) && ($context["sidebar_second"] ?? null))) ? ("col-md-8") : ("")), ((( !        // line 35
($context["sidebar_first"] ?? null) &&  !($context["sidebar_second"] ?? null))) ? ("col-lg-7 col-xl-6") : (""))], ((        // line 36
array_key_exists("content_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["content_classes"] ?? null), [])) : ([])));
        // line 37
        yield "
";
        // line 38
        $context["content_no_sidebar_row_classes"] = ((array_key_exists("content_no_sidebar_row_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["content_no_sidebar_row_classes"] ?? null), [])) : ([]));
        // line 39
        $context["content_no_sidebar_col_classes"] = Twig\Extension\CoreExtension::merge(["col-md"], ((array_key_exists("content_no_sidebar_col_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["content_no_sidebar_col_classes"] ?? null), [])) : ([])));
        // line 40
        yield "
";
        // line 41
        $context["sidebar_default_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 42
            yield "  ";
            if (($context["content"] ?? null)) {
                // line 43
                yield "    ";
                if ((($context["sidebar_first"] ?? null) || ($context["sidebar_second"] ?? null))) {
                    // line 44
                    yield "      <div class=\"page__content ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(($context["content_classes"] ?? null), " ")), "html", null, true);
                    yield "\">
        ";
                    // line 45
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
                    yield "
      </div>
    ";
                } else {
                    // line 48
                    yield "      ";
                    $context["content_no_sidebar"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 49
                        yield "        <div class=\"page__content ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(($context["content_no_sidebar_col_classes"] ?? null), " ")), "html", null, true);
                        yield "\">
          ";
                        // line 50
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
                        yield "
        </div>
      ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 53
                    yield "
      ";
                    // line 54
                    if (($context["content_no_sidebar_row_classes"] ?? null)) {
                        // line 55
                        yield "        <div class=\"row ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(($context["content_no_sidebar_row_classes"] ?? null), " ")), "html", null, true);
                        yield "\">
          ";
                        // line 56
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_no_sidebar"] ?? null), "html", null, true);
                        yield "
        </div>
      ";
                    } else {
                        // line 59
                        yield "        ";
                        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content_no_sidebar"] ?? null), "html", null, true);
                        yield "
      ";
                    }
                    // line 61
                    yield "    ";
                }
                // line 62
                yield "  ";
            }
            // line 63
            yield "
  ";
            // line 64
            if (($context["sidebar_first"] ?? null)) {
                // line 65
                yield "    <aside class=\"sidebar sidebar-first col-md order-md-first\">
      ";
                // line 66
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_first"] ?? null), "html", null, true);
                yield "
    </aside>
  ";
            }
            // line 69
            yield "
  ";
            // line 70
            if (($context["sidebar_second"] ?? null)) {
                // line 71
                yield "    <aside class=\"sidebar sidebar-second col-md order-md-last offset-md-1\">
      ";
                // line 72
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_second"] ?? null), "html", null, true);
                yield "
    </aside>
  ";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 76
        yield "
<div class=\"page-layout-sidebar-default\">
  ";
        // line 78
        if (($context["container"] ?? null)) {
            // line 79
            yield "    <div class=\"container py-5\">
      <div class=\"row\">
        ";
            // line 81
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_default_content"] ?? null), "html", null, true);
            yield "
      </div>
    </div>

  ";
        } else {
            // line 86
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["sidebar_default_content"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 88
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["sidebar_first", "sidebar_second", "content", "container"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@apigee-kickstart/page/sidebar-default.twig";
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
        return array (  180 => 88,  174 => 86,  166 => 81,  162 => 79,  160 => 78,  156 => 76,  148 => 72,  145 => 71,  143 => 70,  140 => 69,  134 => 66,  131 => 65,  129 => 64,  126 => 63,  123 => 62,  120 => 61,  114 => 59,  108 => 56,  103 => 55,  101 => 54,  98 => 53,  91 => 50,  86 => 49,  83 => 48,  77 => 45,  72 => 44,  69 => 43,  66 => 42,  64 => 41,  61 => 40,  59 => 39,  57 => 38,  54 => 37,  52 => 36,  51 => 35,  50 => 34,  49 => 33,  48 => 32,  47 => 31,  44 => 30,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@apigee-kickstart/page/sidebar-default.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/./src/components/page/sidebar-default.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 31, "if" => 42);
        static $filters = array("merge" => 36, "default" => 36, "escape" => 44, "trim" => 44, "join" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['merge', 'default', 'escape', 'trim', 'join'],
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

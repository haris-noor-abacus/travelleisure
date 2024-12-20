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

/* @radix/block/block.twig */
class __TwigTemplate_08cd3d7933ec0995f4213df4587db300 extends Template
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
            'label' => [$this, 'block_label'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 11
        $context["block_classes"] = Twig\Extension\CoreExtension::merge(["block", ((        // line 13
($context["bundle"] ?? null)) ? (("block--" . \Drupal\Component\Utility\Html::getClass(($context["bundle"] ?? null)))) : ("")), ((        // line 14
($context["id"] ?? null)) ? (("block--" . \Drupal\Component\Utility\Html::getClass(Twig\Extension\CoreExtension::replace(($context["id"] ?? null), ["_" => "-"])))) : (""))], ((        // line 15
($context["block_utility_classes"] ?? null)) ? (($context["block_utility_classes"] ?? null)) : ([])));
        // line 16
        yield "
";
        // line 17
        if (($context["html_tag"] ?? null)) {
            // line 18
            yield "  <";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_tag"] ?? null), "html", null, true);
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["attributes"] ?? null), "id"), "addClass", [($context["block_classes"] ?? null)], "method", false, false, true, 18), "html", null, true);
            yield ">
";
        }
        // line 20
        yield "
  ";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 22
        if (($context["label"] ?? null)) {
            // line 23
            yield "    ";
            yield from $this->unwrap()->yieldBlock('label', $context, $blocks);
            // line 26
            yield "  ";
        }
        // line 27
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "

  ";
        // line 29
        if (($context["content"] ?? null)) {
            // line 30
            yield "    ";
            yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
            // line 33
            yield "  ";
        }
        // line 34
        yield "
";
        // line 35
        if (($context["html_tag"] ?? null)) {
            // line 36
            yield "  </";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["html_tag"] ?? null), "html", null, true);
            yield ">
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["bundle", "id", "block_utility_classes", "html_tag", "attributes", "title_prefix", "label", "title_suffix", "content", "title_attributes"]);        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 24
        yield "      <h2";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_attributes"] ?? null), "html", null, true);
        yield ">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
        yield "</h2>
    ";
        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 31
        yield "      ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@radix/block/block.twig";
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
        return array (  131 => 31,  124 => 30,  114 => 24,  107 => 23,  97 => 36,  95 => 35,  92 => 34,  89 => 33,  86 => 30,  84 => 29,  78 => 27,  75 => 26,  72 => 23,  70 => 22,  66 => 21,  63 => 20,  56 => 18,  54 => 17,  51 => 16,  49 => 15,  48 => 14,  47 => 13,  46 => 11,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@radix/block/block.twig", "themes/contrib/radix/src/components/block/block.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 11, "if" => 17, "block" => 23);
        static $filters = array("merge" => 15, "clean_class" => 13, "replace" => 14, "escape" => 18, "without" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['merge', 'clean_class', 'replace', 'escape', 'without'],
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

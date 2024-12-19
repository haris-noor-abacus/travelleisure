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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--full.html.twig */
class __TwigTemplate_6cd2bcff5c2b7e4eee101795a2d26804 extends Template
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

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 8
        return "@apigee-kickstart/node/node.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@apigee-kickstart/node/node.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--full.html.twig", 8);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "tasks"]);    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 10
        yield "
  ";
        // line 11
        if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_header", [], "any", false, false, true, 11))) {
            // line 12
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_header", [], "any", false, false, true, 12), "html", null, true);
            yield "
    ";
            // line 13
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["tasks"] ?? null))) {
                // line 14
                yield "      <div class=\"page__tasks\">
        <div class=\"container\">
          ";
                // line 16
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["tasks"] ?? null), "html", null, true);
                yield "
        </div>
      </div>
    ";
            }
            // line 20
            yield "  ";
        }
        // line 21
        yield "
  ";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_header"), "html", null, true);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--full.html.twig";
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
        return array (  90 => 22,  87 => 21,  84 => 20,  77 => 16,  73 => 14,  71 => 13,  66 => 12,  64 => 11,  61 => 10,  54 => 9,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--full.html.twig", "C:\\xampp\\htdocs\\travelleisure\\web\\profiles\\contrib\\apigee_devportal_kickstart\\themes\\custom\\apigee_kickstart\\templates\\node\\node--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("extends" => 8, "if" => 11);
        static $filters = array("render" => 11, "escape" => 12, "without" => 22);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'if'],
                ['render', 'escape', 'without'],
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

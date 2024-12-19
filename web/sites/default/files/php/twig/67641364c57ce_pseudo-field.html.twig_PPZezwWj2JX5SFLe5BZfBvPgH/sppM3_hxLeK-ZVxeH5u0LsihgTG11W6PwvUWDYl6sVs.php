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

/* profiles/contrib/apigee_devportal_kickstart/modules/custom/apigee_kickstart_enhancement/templates/pseudo-field.html.twig */
class __TwigTemplate_28727228ee1b9671289ca2afa6dd0bc5 extends Template
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
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, true, 9)) {
            // line 10
            yield "  <div class=\"field field-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "name", [], "any", false, false, true, 10)), "html", null, true);
            yield "\">
    ";
            // line 11
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, true, 11)) {
                // line 12
                yield "      <div class=\"field__label\">
        ";
                // line 13
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "label", [], "any", false, false, true, 13), "html", null, true);
                yield ":
      </div>
    ";
            }
            // line 16
            yield "
    <div>
      ";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "value", [], "any", false, false, true, 18), "html", null, true);
            yield "
    </div>
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/apigee_devportal_kickstart/modules/custom/apigee_kickstart_enhancement/templates/pseudo-field.html.twig";
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
        return array (  66 => 18,  62 => 16,  56 => 13,  53 => 12,  51 => 11,  46 => 10,  44 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/modules/custom/apigee_kickstart_enhancement/templates/pseudo-field.html.twig", "C:\\xampp\\htdocs\\travelleisure\\web\\profiles\\contrib\\apigee_devportal_kickstart\\modules\\custom\\apigee_kickstart_enhancement\\templates\\pseudo-field.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9);
        static $filters = array("escape" => 10, "clean_class" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'clean_class'],
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

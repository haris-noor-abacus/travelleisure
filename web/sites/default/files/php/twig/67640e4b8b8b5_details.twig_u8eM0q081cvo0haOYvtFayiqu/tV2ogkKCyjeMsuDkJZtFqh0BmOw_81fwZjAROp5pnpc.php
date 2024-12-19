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

/* @apigee-kickstart/details/details.twig */
class __TwigTemplate_e6280109cd48cb147fffc2560603dd3c extends Template
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
        // line 7
        yield "
";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("core/drupal.collapse"), "html", null, true);
        yield "
";
        // line 9
        $context["open"] = ((array_key_exists("open", $context)) ? (Twig\Extension\CoreExtension::default(($context["open"] ?? null), false)) : (false));
        // line 10
        $context["classes"] = Twig\Extension\CoreExtension::merge(["details", "py-3", "pt-md-4", "pb-md-5", "px-3"], ((        // line 16
array_key_exists("classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["classes"] ?? null), [])) : ([])));
        // line 17
        yield "
<details class=\"";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " ")), "html", null, true);
        yield "\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((($context["open"] ?? null)) ? (" open") : ("")));
        yield ">
  <summary class=\"details__summary pe-8\">
    ";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["summary"] ?? null), "html", null, true);
        yield "
    <i class=\"details__icon fas fa-chevron-down\"></i>
  </summary>
  <div class=\"details-wrapper details__content pt-4 pe-8\">
    ";
        // line 24
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true);
        yield "
  </div>
</details>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["summary", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@apigee-kickstart/details/details.twig";
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
        return array (  73 => 24,  66 => 20,  59 => 18,  56 => 17,  54 => 16,  53 => 10,  51 => 9,  47 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@apigee-kickstart/details/details.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/./src/components/details/details.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9);
        static $filters = array("escape" => 8, "default" => 9, "merge" => 16, "trim" => 18, "join" => 18);
        static $functions = array("attach_library" => 8);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['escape', 'default', 'merge', 'trim', 'join'],
                ['attach_library'],
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

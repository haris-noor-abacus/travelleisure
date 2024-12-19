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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-action.html.twig */
class __TwigTemplate_a1b8a9427992835e13bda24e0e138f0a extends Template
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
        $context["show_title"] = CoreExtension::inFilter(($context["route_name"] ?? null), ["entity.commerce_payment_method.collection"]);
        // line 11
        yield "
";
        // line 12
        $context["classes"] = Twig\Extension\CoreExtension::merge(["my-4", (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 =         // line 14
($context["element"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess && in_array($__internal_compile_0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_0["#link"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#link", [], "array", false, false, true, 14)), "url", [], "any", false, false, true, 14), "routeParameters", [], "any", false, false, true, 14), "node_type", [], "any", false, false, true, 14) == "forum")) ? ("forum__add") : ("")), ((        // line 15
($context["show_title"] ?? null)) ? ("d-flex justify-content-between align-items-center") : (""))], ((        // line 16
array_key_exists("classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["classes"] ?? null), [])) : ([])));
        // line 17
        yield "
<div class=\"";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::join(($context["classes"] ?? null), " ")), "html", null, true);
        yield "\">
    ";
        // line 19
        if (($context["show_title"] ?? null)) {
            // line 20
            yield "        <h4 class=\"mb-0\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "</h4>
    ";
        }
        // line 22
        yield "
    ";
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["link"] ?? null), "html", null, true);
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["route_name", "element", "title", "link"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-action.html.twig";
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
        return array (  75 => 23,  72 => 22,  66 => 20,  64 => 19,  60 => 18,  57 => 17,  55 => 16,  54 => 15,  53 => 14,  52 => 12,  49 => 11,  47 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/menu/menu-local-action.html.twig", "C:\\xampp\\htdocs\\travelleisure\\web\\profiles\\contrib\\apigee_devportal_kickstart\\themes\\custom\\apigee_kickstart\\templates\\menu\\menu-local-action.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "if" => 19);
        static $filters = array("merge" => 16, "default" => 16, "escape" => 18, "trim" => 18, "join" => 18);
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

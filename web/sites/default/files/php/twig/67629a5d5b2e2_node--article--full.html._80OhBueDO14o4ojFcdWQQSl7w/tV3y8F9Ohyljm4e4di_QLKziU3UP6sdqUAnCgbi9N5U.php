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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--article--full.html.twig */
class __TwigTemplate_ddb89e4d07a6bc005372c0da604e8cb6 extends Template
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
        $this->parent = $this->loadTemplate("@apigee-kickstart/node/node.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--article--full.html.twig", 8);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "label", "display_submitted", "author_name", "date", "sidebar_first", "sidebar_second"]);    }

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
        $context["node_content"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 12
            yield "    ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 12)) {
                // line 13
                yield "      <div class=\"article__tags\">
        ";
                // line 14
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_tags", [], "any", false, false, true, 14), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 17
            yield "
    <h1 class=\"article__title\">";
            // line 18
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "</h1>
    ";
            // line 19
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 19), "html", null, true);
            yield "

    ";
            // line 21
            if (($context["display_submitted"] ?? null)) {
                // line 22
                yield "      <p class=\"article__meta mt-3 d-block mt-5\">";
                yield t("by @author_name
        <span class=\"mx-1\">|</span> @date", array("@author_name" => ($context["author_name"] ?? null), "@date" =>                 // line 23
($context["date"] ?? null), ));
                // line 24
                yield "      </p>
    ";
            }
            // line 26
            yield "
    <hr class=\"mt-0 mb-4 border-top\"/>

    ";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_tags", "field_image", "comment"), "html", null, true);
            yield "

    ";
            // line 31
            if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 31)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess && in_array($__internal_compile_0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_0[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 31), 0, [], "array", false, false, true, 31)), "comment_form", [], "any", false, false, true, 31)) {
                // line 32
                yield "      <a href=\"#comment-form\" class=\"btn btn-primary\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Add new comment"));
                yield "</a>
    ";
            }
            // line 34
            yield "  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 35
        yield "
  ";
        // line 36
        yield from         $this->loadTemplate("@apigee-kickstart/page/sidebar-default.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--article--full.html.twig", 36)->unwrap()->yield(CoreExtension::merge($context, ["container" => true, "content" =>         // line 38
($context["node_content"] ?? null), "sidebar_first" =>         // line 39
($context["sidebar_first"] ?? null), "sidebar_second" =>         // line 40
($context["sidebar_second"] ?? null), "content_no_sidebar_row_classes" => ["justify-content-center", "w-100"], "content_no_sidebar_col_classes" => ["col-lg-8"]]));
        // line 44
        yield "
  ";
        // line 45
        if ((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 45)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess && in_array($__internal_compile_1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_1[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 45), 0, [], "array", false, false, true, 45))) {
            // line 46
            yield "    <div class=\"bg-lighter\">
      <div class=\"container py-5\">
        <div class=\"row justify-content-center w-100\">
          <div class=\"col-lg-8\">
            ";
            // line 50
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "comment", [], "any", false, false, true, 50), "html", null, true);
            yield "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--article--full.html.twig";
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
        return array (  142 => 50,  136 => 46,  134 => 45,  131 => 44,  129 => 40,  128 => 39,  127 => 38,  126 => 36,  123 => 35,  119 => 34,  113 => 32,  111 => 31,  106 => 29,  101 => 26,  97 => 24,  95 => 23,  92 => 22,  90 => 21,  85 => 19,  81 => 18,  78 => 17,  72 => 14,  69 => 13,  66 => 12,  64 => 11,  61 => 10,  54 => 9,  42 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/node/node--article--full.html.twig", "C:\\xampp\\htdocs\\travelleisure\\web\\profiles\\contrib\\apigee_devportal_kickstart\\themes\\custom\\apigee_kickstart\\templates\\node\\node--article--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("extends" => 8, "set" => 11, "if" => 12, "trans" => 22, "include" => 36);
        static $filters = array("escape" => 14, "without" => 29, "t" => 32);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'set', 'if', 'trans', 'include'],
                ['escape', 'without', 't'],
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

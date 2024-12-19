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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/travelleisure/templates/node--apidoc--card.html.twig */
class __TwigTemplate_3d94f6570c429c5579d8f86cf90055c6 extends Template
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
        // line 14
        return "apigee-entity.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("apigee-entity.html.twig", "profiles/contrib/apigee_devportal_kickstart/themes/custom/travelleisure/templates/node--apidoc--card.html.twig", 14);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["content", "entity"]);    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 17
        yield "  
    <div class=\"api-doc-card\">
      <!-- Card Wrapper -->
      <div class=\"card h-100\">
        <div class=\"card-body\">
          
          <!-- Image Rendering -->
          ";
        // line 24
        $context["image"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", true, true, true, 24) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 24)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 24)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image_apidoc", [], "any", false, false, true, 24)));
        // line 25
        yield "          ";
        if (($context["image"] ?? null)) {
            // line 26
            yield "            <div class=\"api-doc-image\">
              ";
            // line 27
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["image"] ?? null), ["attributes" => ["style" => "width: 25px; height: 25px;"]]), "html", null, true);
            yield "
              <!-- Ensure image is rendered properly -->
            </div>
          ";
        }
        // line 31
        yield "  
          <!-- Title -->
          <h3 class=\"card-title\">";
        // line 33
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["entity"] ?? null), "label", [], "any", false, false, true, 33), "html", null, true);
        yield "</h3>
  
          <!-- Description / API Spec -->
         
          <!-- ";
        // line 37
        $context["image"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", true, true, true, 37) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 37)))) ? (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 37)) : (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_image_apidoc", [], "any", false, false, true, 37)));
        yield " -->
          ";
        // line 38
        if (CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 38)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess && in_array($__internal_compile_1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_1["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 38), "#items", [], "array", false, false, true, 38))) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess && in_array($__internal_compile_0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_0[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 38)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess && in_array($__internal_compile_2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_2["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 38), "#items", [], "array", false, false, true, 38)), 0, [], "array", false, false, true, 38)), "value", [], "any", false, false, true, 38)) {
            // line 39
            yield "            <div class=\"card-text\">
              <p>";
            // line 40
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_3 = (($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 40)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess && in_array($__internal_compile_4::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_4["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 40), "#items", [], "array", false, false, true, 40))) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess && in_array($__internal_compile_3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_3[0] ?? null) : CoreExtension::getAttribute($this->env, $this->source, (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 40)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess && in_array($__internal_compile_5::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_5["#items"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 40), "#items", [], "array", false, false, true, 40)), 0, [], "array", false, false, true, 40)), "value", [], "any", false, false, true, 40)), "html", null, true);
            yield "</p>  <!-- Render description -->
            </div>
          ";
        } else {
            // line 43
            yield "            <div class=\"api-doc-spec\">
              <p>No description available for this API.</p>
            </div>
          ";
        }
        // line 47
        yield "  
          <!-- Documentation Link -->
          ";
        // line 49
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_apidoc_file_link", [], "any", false, false, true, 49)) {
            // line 50
            yield "            <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_apidoc_file_link", [], "any", false, false, true, 50)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess && in_array($__internal_compile_6::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($__internal_compile_6["#url"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_apidoc_file_link", [], "any", false, false, true, 50), "#url", [], "array", false, false, true, 50)), "html", null, true);
            yield "\" class=\"btn btn-link text-decoration-none pl-0\">
              Explore Documentation <i class=\"bi bi-arrow-right\"></i>
            </a>
          ";
        }
        // line 54
        yield "  
        </div>
      </div>
    </div>
  
  ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/travelleisure/templates/node--apidoc--card.html.twig";
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
        return array (  131 => 54,  123 => 50,  121 => 49,  117 => 47,  111 => 43,  105 => 40,  102 => 39,  100 => 38,  96 => 37,  89 => 33,  85 => 31,  78 => 27,  75 => 26,  72 => 25,  70 => 24,  61 => 17,  54 => 16,  42 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/travelleisure/templates/node--apidoc--card.html.twig", "C:\\xampp\\htdocs\\travelleisure\\web\\profiles\\contrib\\apigee_devportal_kickstart\\themes\\custom\\travelleisure\\templates\\node--apidoc--card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("extends" => 14, "set" => 24, "if" => 25);
        static $filters = array("escape" => 27, "render" => 27, "striptags" => 40);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['extends', 'set', 'if'],
                ['escape', 'render', 'striptags'],
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

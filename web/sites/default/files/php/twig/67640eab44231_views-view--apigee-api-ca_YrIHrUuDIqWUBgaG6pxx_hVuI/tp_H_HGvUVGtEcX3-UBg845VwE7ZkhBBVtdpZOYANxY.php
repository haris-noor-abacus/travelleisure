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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/travelleisure/templates/views-view--apigee-api-catalog--page-1.html.twig */
class __TwigTemplate_ce23c0cc14462b18fc4cf277b4a24fe8 extends Template
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
        // line 10
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 12
($context["id"] ?? null))), ("view-id-" .         // line 13
($context["id"] ?? null)), ("view-display-id-" .         // line 14
($context["display_id"] ?? null)), ((        // line 15
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : (""))];
        // line 18
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 18), "html", null, true);
        yield ">
  ";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 20
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "
  ";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "

  ";
        // line 23
        if (($context["header"] ?? null)) {
            // line 24
            yield "    <header>
      ";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true);
            yield "
    </header>
  ";
        }
        // line 28
        yield "  <!-- <div class=\"container-fluid bg-primary text-white py-5\">
    <div class=\"container\">
      <h1 class=\"text-center mb-3\">";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
        yield "</h1>
      <h2 class=\"text-center h4 mb-4\">Exceptional Travel Solutions with Ease.</h2>
      
      <div class=\"search-container\">
        <div class=\"input-group\">
          <input type=\"text\" class=\"form-control search-input\" placeholder=\"Find category or any API\">
          <button class=\"btn filter-btn\" type=\"button\">
            <i class=\"bi bi-funnel-fill\"></i>
            Filter
          </button>
        </div>
      </div>
    </div>
  </div> -->

  <!-- ";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "

  ";
        // line 47
        if (($context["header"] ?? null)) {
            // line 48
            yield "    <header>
      ";
            // line 49
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true);
            yield "
    </header>
  ";
        }
        // line 51
        yield " -->

  <div class=\"container-fluid\">
 ";
        // line 54
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true);
        yield "

  </div>
  <div class=\"container\">
    <div class=\"row g-4 mb-4\">

    </div>

    <div class=\"g-4\">
      ";
        // line 63
        if (($context["rows"] ?? null)) {
            // line 64
            yield "          ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true);
            yield "
      ";
        }
        // line 66
        yield "    </div>

    ";
        // line 68
        if (($context["empty"] ?? null)) {
            // line 69
            yield "      <div class=\"p-4 text-center text-muted\">
        ";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "
      </div>
    ";
        }
        // line 73
        yield "
    ";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true);
        yield "
  </div>

  ";
        // line 77
        if (($context["footer"] ?? null)) {
            // line 78
            yield "    <footer>
      ";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true);
            yield "
    </footer>
  ";
        }
        // line 82
        yield "
  ";
        // line 83
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true);
        yield "
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "title_prefix", "title", "title_suffix", "header", "exposed", "rows", "empty", "pager", "footer", "feed_icons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/travelleisure/templates/views-view--apigee-api-catalog--page-1.html.twig";
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
        return array (  180 => 83,  177 => 82,  171 => 79,  168 => 78,  166 => 77,  160 => 74,  157 => 73,  151 => 70,  148 => 69,  146 => 68,  142 => 66,  136 => 64,  134 => 63,  122 => 54,  117 => 51,  111 => 49,  108 => 48,  106 => 47,  101 => 45,  83 => 30,  79 => 28,  73 => 25,  70 => 24,  68 => 23,  63 => 21,  59 => 20,  55 => 19,  50 => 18,  48 => 15,  47 => 14,  46 => 13,  45 => 12,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/travelleisure/templates/views-view--apigee-api-catalog--page-1.html.twig", "C:\\xampp\\htdocs\\travelleisure\\web\\profiles\\contrib\\apigee_devportal_kickstart\\themes\\custom\\travelleisure\\templates\\views-view--apigee-api-catalog--page-1.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 10, "if" => 23);
        static $filters = array("clean_class" => 12, "escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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

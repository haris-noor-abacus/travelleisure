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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/view/views-view.html.twig */
class __TwigTemplate_c08d9b37a73190bff81d73ac8e7370b8 extends Template
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
        // line 34
        $context["classes"] = ["view", ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 36
($context["id"] ?? null))), ((("view-" . \Drupal\Component\Utility\Html::getClass(        // line 37
($context["id"] ?? null))) . "--") . \Drupal\Component\Utility\Html::getClass(($context["display_id"] ?? null))), ("view-id-" .         // line 38
($context["id"] ?? null)), ("view-display-id-" .         // line 39
($context["display_id"] ?? null)), ((        // line 40
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : (""))];
        // line 43
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 43), "html", null, true);
        yield ">
  ";
        // line 44
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true);
        yield "
  ";
        // line 45
        if (($context["title"] ?? null)) {
            // line 46
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 48
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true);
        yield "
  ";
        // line 49
        if (($context["header"] ?? null)) {
            // line 50
            yield "    <div class=\"view-header\">
      ";
            // line 51
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 54
        yield "  ";
        if (($context["exposed"] ?? null)) {
            // line 55
            yield "    <div class=\"view-filters\">
      ";
            // line 56
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 59
        yield "  ";
        if (($context["attachment_before"] ?? null)) {
            // line 60
            yield "    <div class=\"attachment attachment-before\">
      ";
            // line 61
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 64
        yield "
  ";
        // line 65
        if (($context["rows"] ?? null)) {
            // line 66
            yield "    <div class=\"view-content\">
      ";
            // line 67
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        } elseif (        // line 69
($context["empty"] ?? null)) {
            // line 70
            yield "    <div class=\"view-empty\">
      ";
            // line 71
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 74
        yield "
  ";
        // line 75
        if (($context["pager"] ?? null)) {
            // line 76
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 78
        yield "  ";
        if (($context["attachment_after"] ?? null)) {
            // line 79
            yield "    <div class=\"attachment attachment-after\">
      ";
            // line 80
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 83
        yield "  ";
        if (($context["more"] ?? null)) {
            // line 84
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 86
        yield "  ";
        if (($context["footer"] ?? null)) {
            // line 87
            yield "    <div class=\"view-footer\">
      ";
            // line 88
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 91
        yield "  ";
        if (($context["feed_icons"] ?? null)) {
            // line 92
            yield "    <div class=\"feed-icons\">
      ";
            // line 93
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 96
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["id", "display_id", "dom_id", "attributes", "title_prefix", "title", "title_suffix", "header", "exposed", "attachment_before", "rows", "empty", "pager", "attachment_after", "more", "footer", "feed_icons"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/view/views-view.html.twig";
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
        return array (  188 => 96,  182 => 93,  179 => 92,  176 => 91,  170 => 88,  167 => 87,  164 => 86,  158 => 84,  155 => 83,  149 => 80,  146 => 79,  143 => 78,  137 => 76,  135 => 75,  132 => 74,  126 => 71,  123 => 70,  121 => 69,  116 => 67,  113 => 66,  111 => 65,  108 => 64,  102 => 61,  99 => 60,  96 => 59,  90 => 56,  87 => 55,  84 => 54,  78 => 51,  75 => 50,  73 => 49,  68 => 48,  62 => 46,  60 => 45,  56 => 44,  51 => 43,  49 => 40,  48 => 39,  47 => 38,  46 => 37,  45 => 36,  44 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/view/views-view.html.twig", "C:\\xampp\\htdocs\\travelleisure\\web\\profiles\\contrib\\apigee_devportal_kickstart\\themes\\custom\\apigee_kickstart\\templates\\view\\views-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 34, "if" => 45);
        static $filters = array("clean_class" => 36, "escape" => 43);
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

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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/forum/forum-list.html.twig */
class __TwigTemplate_14e5278ca8377d2779a5ba02e9583b78 extends Template
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
<table id=\"forum-";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["forum_id"] ?? null), "html", null, true);
        yield "\" class=\"table\">
  <thead>
  <tr>
    <th>";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Forum"));
        yield "</th>
    <th>";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Topics"));
        yield "</th>
    <th>";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Posts"));
        yield "</th>
    <th>";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last post"));
        yield "</th>
  </tr>
  </thead>
  <tbody>
  ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["forums"] ?? null));
        foreach ($context['_seq'] as $context["child_id"] => $context["forum"]) {
            // line 19
            yield "    <tr id=\"forum-list-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["child_id"], "html", null, true);
            yield "\" class=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "zebra", [], "any", false, false, true, 19), "html", null, true);
            yield "\">
      <td ";
            // line 20
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "is_container", [], "any", false, false, true, 20) == true)) {
                // line 21
                yield "colspan=\"4\" class=\"container\"";
            } else {
                // line 23
                yield "class=\"forum-list__forum pt-4 pb-2\"";
            }
            // line 24
            yield ">
        ";
            // line 30
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 30) > 0)) {
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 30)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    yield "<div class=\"indented\">";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 31
            yield "          <div class=\"forum__icon forum-status-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "icon_class", [], "any", false, false, true, 31), "html", null, true);
            yield "\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "icon_title", [], "any", false, false, true, 31), "html", null, true);
            yield "\">
            <span class=\"visually-hidden\">";
            // line 32
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "icon_title", [], "any", false, false, true, 32), "html", null, true);
            yield "</span>
          </div>
          <div class=\"d-flex align-items-center\">
            <h4 class=\"forum__name me-2 mb-0\"><a href=\"";
            // line 35
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "link", [], "any", false, false, true, 35), "html", null, true);
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "label", [], "any", false, false, true, 35), "html", null, true);
            yield "</a></h4>
            ";
            // line 36
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "new_topics", [], "any", false, false, true, 36) == true)) {
                // line 37
                yield "              <a href=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "new_url", [], "any", false, false, true, 37), "html", null, true);
                yield "\" class=\"badge badge-primary\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "new_text", [], "any", false, false, true, 37), "html", null, true);
                yield "</a>
            ";
            }
            // line 39
            yield "          </div>
          ";
            // line 40
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, true, 40), "value", [], "any", false, false, true, 40)) {
                // line 41
                yield "            <div class=\"forum__description text-muted mt-1\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, true, 41), "value", [], "any", false, false, true, 41), "html", null, true);
                yield "</div>
          ";
            }
            // line 43
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 43) > 0)) {
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 43)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    yield "</div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 44
            yield "      </td>
      ";
            // line 45
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "is_container", [], "any", false, false, true, 45) == false)) {
                // line 46
                yield "        <td class=\"forum__topics pt-4 pb-2\">
          ";
                // line 47
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "num_topics", [], "any", false, false, true, 47), "html", null, true);
                yield "
        </td>
        <td class=\"forum__posts pt-4 pb-2\">";
                // line 49
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "num_posts", [], "any", false, false, true, 49), "html", null, true);
                yield "</td>
        <td class=\"forum__last-reply pt-4 pb-2\">";
                // line 50
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["forum"], "last_reply", [], "any", false, false, true, 50), "html", null, true);
                yield "</td>
      ";
            }
            // line 52
            yield "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['child_id'], $context['forum'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "  </tbody>
</table>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["forum_id", "forums"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/forum/forum-list.html.twig";
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
        return array (  187 => 54,  180 => 52,  175 => 50,  171 => 49,  166 => 47,  163 => 46,  161 => 45,  158 => 44,  146 => 43,  140 => 41,  138 => 40,  135 => 39,  127 => 37,  125 => 36,  119 => 35,  113 => 32,  106 => 31,  94 => 30,  91 => 24,  88 => 23,  85 => 21,  83 => 20,  76 => 19,  72 => 18,  65 => 14,  61 => 13,  57 => 12,  53 => 11,  47 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/apigee_kickstart/templates/forum/forum-list.html.twig", "C:\\xampp\\htdocs\\travelleisure\\web\\profiles\\contrib\\apigee_devportal_kickstart\\themes\\custom\\apigee_kickstart\\templates\\forum\\forum-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 18, "if" => 20);
        static $filters = array("escape" => 8, "t" => 11);
        static $functions = array("range" => 30);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape', 't'],
                ['range'],
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

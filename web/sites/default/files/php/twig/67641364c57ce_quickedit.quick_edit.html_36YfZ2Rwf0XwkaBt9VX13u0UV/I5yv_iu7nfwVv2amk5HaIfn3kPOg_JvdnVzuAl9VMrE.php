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

/* @help_topics/quickedit.quick_edit.html.twig */
class __TwigTemplate_336c878e6f088d72a4a5faf557920aa7 extends Template
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
        yield "<h2>";
        yield t("Goal", array());
        yield "</h2>
<p>";
        // line 8
        yield t("Edit content in place.", array());
        yield "</p>
<h2>";
        // line 9
        yield t("What is quick editing?", array());
        yield "</h2>
<p>";
        // line 10
        yield t("Quick editing is editing content inline. Content quick editing is provided by the core Quick Edit module or its contributed replacement. It requires the core Contextual Links module in order to expose the links that let you edit in place.", array());
        yield "</p>
<h2>";
        // line 11
        yield t("Who can edit content in place?", array());
        yield "</h2>
<p>";
        // line 12
        yield t("In order to follow these steps to edit content in place, the core Quick Edit module or its contributed replacement must be installed. Also, either the core Toolbar module or a contributed replacement must be installed. You will need to have <em>Use contextual links</em> permission, <em>Access in-place editing</em> permission, as well as permission to edit the particular content.", array());
        yield "</p>
<h2>";
        // line 13
        yield t("Steps", array());
        yield "</h2>
<ol>
  <li>";
        // line 15
        yield t("Find and visit a page on your site that has the content that you would like to edit.", array());
        yield "</li>
  <li>";
        // line 16
        yield t("Click the contextual links <em>Edit</em> button on the toolbar (in most themes, it looks like a pencil). Contextual <em>Edit</em> links with the same icon will appear all over your page.", array());
        yield "</li>
  <li>";
        // line 17
        yield t("Find the contextual link for the part of the page you want to edit. For example, to edit a specific post on the front page, the link should be in the top-right corner of the post, or top-left for right-to-left languages.", array());
        yield "</li>
  <li>";
        // line 18
        yield t("Click the link to open the contextual links menu, and click <em>Quick edit</em>. All editable fields will be enclosed in a light blue box. Hover over any box to see the label of the field that box contains. Click on the box and a form to edit that field will appear.", array());
        yield "</li>
  <li>";
        // line 19
        yield t("Make your edits and submit the form.", array());
        yield "</li>
</ol>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@help_topics/quickedit.quick_edit.html.twig";
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
        return array (  90 => 19,  86 => 18,  82 => 17,  78 => 16,  74 => 15,  69 => 13,  65 => 12,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  44 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@help_topics/quickedit.quick_edit.html.twig", "C:\\xampp\\htdocs\\travelleisure\\web\\modules\\contrib\\quickedit\\help_topics\\quickedit.quick_edit.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("trans" => 7);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['trans'],
                [],
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

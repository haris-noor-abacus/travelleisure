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

/* profiles/contrib/apigee_devportal_kickstart/themes/custom/travelleisure/templates/page.html.twig */
class __TwigTemplate_6428883c27e0574cd1956bc31b977863 extends Template
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
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["language"] ?? null), "getId", [], "any", false, false, true, 2), "html", null, true);
        yield "\">

<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <title>";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, ($context["head_title"] ?? null), " | "));
        yield "</title>
  <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
  
  ";
        // line 10
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("travelleisure/global-styling"), "html", null, true);
        yield " 

  <!-- Print meta tags, links, and other head elements -->
  ";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "meta", [], "any", false, false, true, 13), "html", null, true);
        yield "

  <!-- CSS added via modules -->
  ";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "stylesheets", [], "any", false, false, true, 16), "html", null, true);
        yield "

</head>

<body>

  <!-- Header -->
  
    <!-- Custom Header Section -->
     
  <header>
      <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
        <div class=\"container\">
            <!-- Logo Section -->
            <a class=\"navbar-brand d-flex align-items-center\" href=\"/travelleisure/web/\">
                <img src=\"";
        // line 31
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/images/logo.png\" alt=\"Logo\" class=\"logo-img\">
            </a>
            <!-- Search Bar Section -->
            <div class=\"search-bar d-flex align-items-center\">
                <input type=\"text\" class=\"form-control search-input\" placeholder=\"Find anything\" aria-label=\"Search\" />
            </div>

            <!-- Sign-In Button -->
            <button class=\"btn btn-outline-light sign-in\" type=\"button\">Sign In</button>
        </div>
    </nav>
  <nav class=\"navbar navbar-expand-lg navbar-light\">
  <div class=\"container\">
      <!-- Logo -->
      <!-- <a class=\"navbar-brand\" href=\"";
        // line 45
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
        yield "\">
          <img src=\"";
        // line 46
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/images/logo.png\" alt=\"Logo\" class=\"d-inline-block align-top\" height=\"30\">
      </a> -->

      <!-- Toggle button for mobile -->
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
          <!-- Main Menu Block (first) -->
          <ul class=\"navbar-nav first\">
              ";
        // line 57
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 57), "html", null, true);
        yield "  <!-- Main menu block -->
          </ul>

          <!-- User Menu Block (second) -->
          <ul class=\"navbar-nav ml-auto second\">
              <!-- <img class=\"search-icon\" src=\"";
        // line 62
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/images/icon.svg\" alt=\"Search\"> -->
              ";
        // line 63
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "user_menu", [], "any", false, false, true, 63), "html", null, true);
        yield "  <!-- User menu block -->
          </ul>
      </div>
      </div>
  </nav>
</header>

  
  

  <!-- Main content section -->
  
   
      ";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 76), "html", null, true);
        yield "
    


  <!-- Footer -->
   <div class=\"footer-content py-4\">
    <div class=\"container\">
        <div class=\"row footer-links\">
            <div class=\"link-group col-12 col-sm-6 col-md-3 mb-4\">
                <h4>Quick Links</h4>
                ";
        // line 86
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 86), "html", null, true);
        yield "
            </div>
            <div class=\"link-group col-12 col-sm-6 col-md-3 mb-4\">
                <h4>Resources</h4>
                ";
        // line 90
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 90), "html", null, true);
        yield "
            </div>
            <div class=\"link-group col-12 col-sm-6 col-md-3 mb-4\">
                <h4>Legal Information</h4>
                ";
        // line 94
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 94), "html", null, true);
        yield "
            </div>

        </div>
    </div>
    <footer class=\"bottom-footer\">
        <div class=\"container\">
            <div class=\"row align-items-center gy-3\">
                <div class=\"col-12 col-md-4 text-center text-md-start\">
                    <p class=\"mb-0\">© 2024 Travel and Leisure, Inc. All rights reserved</p>
                </div>
                <div class=\"col-12 col-md-4 text-center\">
                    <img src=\"";
        // line 106
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, (($context["base_path"] ?? null) . ($context["directory"] ?? null)), "html", null, true);
        yield "/images/logo.png\" 
                         alt=\"Travel and Leisure Logo\" 
                         class=\"footer-logo\">
                </div>
                <div class=\"col-12 col-md-4 text-center text-md-end\">
                    <div class=\"social-icons\">
                        <a href=\"#\" class=\"social-link\"><i class=\"bi bi-linkedin\"></i></a>
                        <a href=\"#\" class=\"social-link\"><i class=\"bi bi-twitter\"></i></a>
                        <a href=\"#\" class=\"social-link\"><i class=\"bi bi-youtube\"></i></a>
                        <a href=\"#\" class=\"social-link\"><i class=\"bi bi-instagram\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>




    


  
  

  <!-- JS attached by the theme and other libraries -->
  ";
        // line 133
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("travelLeisure/global-scripts"), "html", null, true);
        yield "

  <!-- JavaScript added via modules -->
  ";
        // line 136
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "scripts", [], "any", false, false, true, 136), "html", null, true);
        yield "

  <!-- Bootstrap JS -->
  

</body>

</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["language", "head_title", "page", "base_path", "directory"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "profiles/contrib/apigee_devportal_kickstart/themes/custom/travelleisure/templates/page.html.twig";
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
        return array (  232 => 136,  226 => 133,  196 => 106,  181 => 94,  174 => 90,  167 => 86,  154 => 76,  138 => 63,  134 => 62,  126 => 57,  112 => 46,  108 => 45,  91 => 31,  73 => 16,  67 => 13,  61 => 10,  55 => 7,  47 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "profiles/contrib/apigee_devportal_kickstart/themes/custom/travelleisure/templates/page.html.twig", "C:\\xampp\\htdocs\\travelleisure\\web\\profiles\\contrib\\apigee_devportal_kickstart\\themes\\custom\\travelleisure\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2, "safe_join" => 7);
        static $functions = array("attach_library" => 10, "path" => 45);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'safe_join'],
                ['attach_library', 'path'],
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

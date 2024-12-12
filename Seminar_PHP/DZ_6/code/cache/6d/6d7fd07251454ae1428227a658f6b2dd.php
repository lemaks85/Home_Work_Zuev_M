<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* main.tpl */
class __TwigTemplate_8dc894f3568a10aed7f50061bd3ec745 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html class=\"h-100\">
    <head>
        <meta charset=\"UTF-8\">
        <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"/css/main.css\">
        <script
  src=\"https://code.jquery.com/jquery-3.7.0.min.js\"
  integrity=\"sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=\"
  crossorigin=\"anonymous\"></script>
        <script src=\"/js/main.js\"></script>
        <title>";
        // line 12
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
    </head>
    <body class=\"d-flex flex-column h-100\">
        <div class=\"container\">
            <header class=\"d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom\">
                <a href=\"/\" class=\"d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none\">
                    <svg class=\"bi me-2\" width=\"40\" height=\"32\" role=\"img\" aria-label=\"Bootstrap\"><use xlink:href=\"#bootstrap\"></use></svg>
                </a>

                <ul class=\"nav col-12 col-md-auto mb-2 justify-content-center mb-md-0\">
                  <li><a href=\"/\" class=\"nav-link px-2 link-secondary\">Главная</a></li>
                  <li><a href=\"/user/index/\" class=\"nav-link px-2 link-dark\">Пользователи</a></li>
                </ul>

                ";
        // line 26
        $this->loadTemplate("auth-template.tpl", "main.tpl", 26)->display($context);
        // line 27
        echo "            </header>
        </div>

        <main class=\"flex-shrink-0\">
          <div class=\"container content-template\">
            ";
        // line 32
        $this->loadTemplate(($context["content_template_name"] ?? null), "main.tpl", 32)->display($context);
        // line 33
        echo "          </div>
        </main>
  
        <footer class=\"footer mt-auto py-3 bg-light\">
          <div class=\"container\">
            <span class=\"text-muted\">Место для контента прикрепленного футера здесь.</span>
          </div>
        </footer>

        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz\" crossorigin=\"anonymous\"></script>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "main.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 33,  76 => 32,  69 => 27,  67 => 26,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main.tpl", "/data/mysite.local/src/Domain/Views/main.tpl");
    }
}

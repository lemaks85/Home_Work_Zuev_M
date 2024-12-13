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
class __TwigTemplate_e0abd865af2a73441ea0e85d1722adc1 extends Template
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
<html>
    <head>
        <title>";
        // line 4
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
    </head>
    <body>
        <div id=\"header\">
            ";
        // line 8
        $this->loadTemplate("auth-template.tpl", "main.tpl", 8)->display($context);
        // line 9
        echo "        </div>

        ";
        // line 11
        $this->loadTemplate(($context["content_template_name"] ?? null), "main.tpl", 11)->display($context);
        // line 12
        echo "    </body>
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
        return array (  57 => 12,  55 => 11,  51 => 9,  49 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main.tpl", "/data/mysite.local/src/Domain/Views/main.tpl");
    }
}

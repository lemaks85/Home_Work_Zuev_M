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

/* auth-template.tpl */
class __TwigTemplate_7e16fd29c4b280e60bf5bc4b8f9e193c extends Template
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
        if ( !($context["user_authorized"] ?? null)) {
            // line 2
            echo "    <p><a href=\"/user/auth/\">Вход в систему</a></p>
";
        } else {
            // line 4
            echo "    <p>Добро пожаловать на сайт!</p>
";
        }
    }

    public function getTemplateName()
    {
        return "auth-template.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth-template.tpl", "/data/mysite.local/src/Domain/Views/auth-template.tpl");
    }
}

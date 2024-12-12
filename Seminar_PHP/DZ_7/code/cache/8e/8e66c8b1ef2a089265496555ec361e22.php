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

/* user-form.tpl */
class __TwigTemplate_da2b68f73a220945354578483d42db40 extends Template
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
        echo "<form action=\"/user/save/\" method=\"post\">
  <input id=\"csrf_token\" type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
        echo "\">
  <p>
    <label for=\"user-name\">Имя:</label>
    <input id=\"user-name\" type=\"text\" name=\"name\">
  </p>
  <p>
    <label for=\"user-lastname\">Фамилия:</label>
    <input id=\"user-lastname\" type=\"text\" name=\"lastname\">
  </p>
  <p>
    <label for=\"user-birthday\">День рождения:</label>
    <input id=\"user-birthday\" type=\"text\" name=\"birthday\" placeholder=\"ДД-ММ-ГГГГ\">
  </p>
  <p><input type=\"submit\" value=\"Сохранить\"></p>
</form>";
    }

    public function getTemplateName()
    {
        return "user-form.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-form.tpl", "/data/mysite.local/src/Domain/Views/user-form.tpl");
    }
}

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

/* user-index.tpl */
class __TwigTemplate_9e876dc8b08b34ddae441d2fe0085022 extends Template
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
        echo "<p>Список пользователей в хранилище</p>

      <div class=\"table-responsive small\">
        <table class=\"table table-striped table-sm\">
          <thead>
            <tr>
              <th scope=\"col\">ID</th>
              <th scope=\"col\">Имя</th>
              <th scope=\"col\">Фамилия</th>
              <th scope=\"col\">День рождения</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "            <tr>       
              <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getUserId", [], "method", false, false, false, 16), "html", null, true);
            echo "</td>   
              <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getUserName", [], "method", false, false, false, 17), "html", null, true);
            echo "</td>
              <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getUserLastName", [], "method", false, false, false, 18), "html", null, true);
            echo "</td>
              <td>";
            // line 19
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["user"], "getUserBirthday", [], "method", false, false, false, 19))) {
                // line 20
                echo "                    ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getUserBirthday", [], "method", false, false, false, 20), "d.m.Y"), "html", null, true);
                echo "
                  ";
            } else {
                // line 22
                echo "                    <b>Не задан</b>
                  ";
            }
            // line 24
            echo "              </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "          </tbody>
        </table>
      </div>

<script>
    let maxId = \$('.table-responsive tbody tr:last-child td:first-child').html();
  
    setInterval(function () {
      \$.ajax({
          method: 'POST',
          url: \"/user/indexRefresh/\",
          data: { maxId: maxId }
      }).done(function (response) {
          // \$('.content-template').html(response);

          let users = \$.parseJSON(response);
          
          if(users.length != 0){
            for(var k in users){

              let row = \"<tr>\";

              row += \"<td>\" + users[k].id + \"</td>\";
              maxId = users[k].id;

              row += \"<td>\" + users[k].username + \"</td>\";
              row += \"<td>\" + users[k].userlastname + \"</td>\";
              row += \"<td>\" + users[k].userbirthday + \"</td>\";

              row += \"</tr>\";

              \$('.content-template tbody').append(row);
            }
            
          }
          
      });
    }, 5000);
</script>";
    }

    public function getTemplateName()
    {
        return "user-index.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  83 => 24,  79 => 22,  73 => 20,  71 => 19,  67 => 18,  63 => 17,  59 => 16,  56 => 15,  52 => 14,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user-index.tpl", "/data/mysite.local/src/Domain/Views/user-index.tpl");
    }
}

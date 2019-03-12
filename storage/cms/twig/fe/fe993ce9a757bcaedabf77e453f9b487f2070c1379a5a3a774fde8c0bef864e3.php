<?php

/* C:\xampp\htdocs\octoberTutorial/plugins/sasho/movies/components/actors/default.htm */
class __TwigTemplate_4003596127563798565b3e6b938c3fd994b8851d21a3327bd4b2f281f62d342f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        $context["actors"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "actors", []);
        // line 2
        echo "
<ul>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actors"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
            // line 5
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "name", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "lastname", []), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/plugins/sasho/movies/components/actors/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  33 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%  set actors = __SELF__.actors %}

<ul>
    {% for actor in actors %}
        <li>{{ actor.name }} {{ actor.lastname }}</li>
    {% endfor %}
</ul>", "C:\\xampp\\htdocs\\octoberTutorial/plugins/sasho/movies/components/actors/default.htm", "");
    }
}

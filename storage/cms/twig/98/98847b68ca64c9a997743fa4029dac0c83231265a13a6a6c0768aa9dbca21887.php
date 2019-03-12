<?php

/* C:\xampp\htdocs\octoberTutorial/themes/weed/pages/genres.htm */
class __TwigTemplate_1cf36f67a7f8cb3f9e27c4e01f6988480ea0571c176c256fceb5f2ea345ead57 extends Twig_Template
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
        $context["record"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "record", []);
        // line 2
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "displayColumn", []);
        // line 3
        $context["notFoundMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderDetails"] ?? null), "notFoundMessage", []);
        // line 4
        echo "
";
        // line 5
        if (($context["record"] ?? null)) {
            // line 6
            echo "    <h2> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), ($context["displayColumn"] ?? null)), "html", null, true);
            echo "</h2>

    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["record"] ?? null), "movies", []));
            foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
                // line 9
                echo "        ";
                // line 10
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", []), "html", null, true);
                echo "<br>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/pages/genres.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 13,  46 => 10,  44 => 9,  40 => 8,  34 => 6,  32 => 5,  29 => 4,  27 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set record = builderDetails.record %}
{% set displayColumn = builderDetails.displayColumn %}
{% set notFoundMessage = builderDetails.notFoundMessage %}

{% if record %}
    <h2> {{ attribute(record, displayColumn) }}</h2>

    {% for movie in record.movies %}
        {#<a href=\"{{ 'genres'|page({ slug: genre.genre_title  }) }}\"> {{ genre.genre_title }}<br></a>#}
            {{ movie.name }}<br>
    {% endfor %}
{% else %}
    {{ notFoundMessage }}
{% endif %}", "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/pages/genres.htm", "");
    }
}

<?php

/* C:\xampp\htdocs\octoberTutorial/themes/weed/pages/movies.htm */
class __TwigTemplate_b8f0ed6a7aa1deee7bc9661aadc59a9a57a65d990cf45fab82e36bc80fcb654e extends Twig_Template
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
        echo "<ul class=\"movie-list\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 3
            echo "        <li>
            ";
            // line 5
            echo "            <h3>
                <a href=\"./movies/movie/";
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "slug", []), "html", null, true);
            echo "\">
                    ";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "year", []), "html", null, true);
            echo "
                </a>
            </h3>

            ";
            // line 11
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["movie"], "description", []), 150]);
            echo "
        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 14
            echo "        <li class=\"no-data\">No Movies found</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>

<div>
    ";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["movies"] ?? null), "render", []);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/pages/movies.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  65 => 16,  58 => 14,  50 => 11,  41 => 7,  37 => 6,  34 => 5,  31 => 3,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul class=\"movie-list\">
    {% for movie in movies %}
        <li>
            {# Use spaceless tag to remove spaces inside the A tag. #}
            <h3>
                <a href=\"./movies/movie/{{movie.slug}}\">
                    {{ movie.name }} - {{movie.year}}
                </a>
            </h3>

            {{ html_limit(movie.description, 150)|raw }}
        </li>
    {% else %}
        <li class=\"no-data\">No Movies found</li>
    {% endfor %}
</ul>

<div>
    {{movies.render|raw}}
</div>", "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/pages/movies.htm", "");
    }
}

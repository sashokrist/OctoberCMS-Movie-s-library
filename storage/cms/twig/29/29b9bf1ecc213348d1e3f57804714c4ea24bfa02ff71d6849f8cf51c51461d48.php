<?php

/* C:\xampp\htdocs\octoberTutorial/themes/weed/pages/movie-single.htm */
class __TwigTemplate_cb0b088a48104feffe51996d7db659f070a65dce36a3b20858169036939c7858 extends Twig_Template
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
        if (($context["movie"] ?? null)) {
            // line 2
            echo "    <h2>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "name", []), "html", null, true);
            echo "</h2>
    <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "poster", []), "thumb", [0 => 200, 1 => ($context["auto"] ?? null)], "method"), "html", null, true);
            echo "\">



    <h4>";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "year", []), "html", null, true);
            echo "</h4>

    <h3>Description</h3>

    ";
            // line 11
            echo twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "description", []);
            echo "

    <h3>Actors</h3>

    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "actors", []));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 16
                echo "        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "name", []), "html", null, true);
                echo "
        ";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["actor"], "lastname", []), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    <h3>Gallery</h3>

    <ul class=\"gallery clearfix\">
        ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "movie_gallery", []));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 23
                echo "            <li>
                <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", []), "html", null, true);
                echo "\">
                    <img src=\"";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 80, 1 => ($context["auto"] ?? null)], "method"), "html", null, true);
                echo "\">
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    </ul>

    <h3>Genres</h3>

    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["movie"] ?? null), "genres", []));
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                // line 34
                echo "        <a href=\"./genres/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "slug", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["genre"], "genre_title", []), "html", null, true);
                echo "</a><br>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "
";
        } else {
            // line 38
            echo "    ";
            echo twig_escape_filter($this->env, ($context["notFoundMessage"] ?? null), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/pages/movie-single.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 38,  115 => 36,  104 => 34,  100 => 33,  94 => 29,  84 => 25,  80 => 24,  77 => 23,  73 => 22,  68 => 19,  60 => 17,  55 => 16,  51 => 15,  44 => 11,  37 => 7,  30 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if movie %}
    <h2>{{ movie.name}}</h2>
    <img src=\"{{ movie.poster.thumb(200,auto) }}\">



    <h4>{{ movie.year }}</h4>

    <h3>Description</h3>

    {{ movie.description|raw }}

    <h3>Actors</h3>

    {% for actor in movie.actors %}
        {{ actor.name }}
        {{ actor.lastname }}
    {% endfor %}
    <h3>Gallery</h3>

    <ul class=\"gallery clearfix\">
        {% for image in movie.movie_gallery %}
            <li>
                <a href=\"{{ image.path}}\">
                    <img src=\"{{ image.thumb(80,auto) }}\">
                </a>
            </li>
        {% endfor %}
    </ul>

    <h3>Genres</h3>

    {% for genre in movie.genres %}
        <a href=\"./genres/{{ genre.slug }}\">{{ genre.genre_title }}</a><br>
    {% endfor %}

{% else %}
    {{ notFoundMessage }}
{% endif %}", "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/pages/movie-single.htm", "");
    }
}

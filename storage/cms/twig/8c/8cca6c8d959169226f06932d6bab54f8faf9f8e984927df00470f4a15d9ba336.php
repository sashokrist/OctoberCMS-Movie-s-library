<?php

/* C:\xampp\htdocs\octoberTutorial/themes/weed/pages/home.htm */
class __TwigTemplate_30c59b347755bdb88fa6b5158797a7c44e79120789b451ee94cfe597d4835bd6 extends Twig_Template
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
        echo "<div class=\"jumbotron\">
    <div class=\"container\">
        ";
        // line 3
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("welcome.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 4
        echo "    </div>
</div>
";
        // line 6
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("searchInput"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 7
        echo "<ul class=\"movie-list\">
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 9
            echo "        <li>
            ";
            // line 11
            echo "            <h3>
                <a href=\"./movies/movie/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "slug", []), "html", null, true);
            echo "\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "name", []), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["movie"], "year", []), "html", null, true);
            echo "
                </a>
            </h3>

            ";
            // line 17
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, $context["movie"], "description", []), 150]);
            echo "
        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 20
            echo "        <li class=\"no-data\">No Movies found</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "</ul>

<div class=\"container text-center\">
    <h2>Let's start here</h2> </div>
<div>
    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusamus aspernatur culpa dolor expedita ipsa
        laborum minima molestias neque nesciunt numquam obcaecati tempore temporibus vitae voluptatibus! Harum natus non
        totam.
    </div>
    <div>Animi, eveniet, numquam. Minus odit perspiciatis placeat quaerat reprehenderit tempore ullam vel vero? A,
        assumenda blanditiis commodi culpa, dolores ea eos inventore, ipsam laudantium minus nulla odit perspiciatis
        veritatis voluptatibus.
    </div>
    <div>Exercitationem fugiat illum iure sapiente tempora? Adipisci dicta eius explicabo facere illum incidunt maxime
        nostrum officiis quasi sed! A ab amet dolorem dolores doloribus eaque expedita, molestiae officia perspiciatis
        voluptatem.
    </div>
    <div>Accusantium cupiditate, dicta eligendi fugit nesciunt nobis non officiis, quia quo ratione, repellat ullam
        voluptatibus? Amet, autem cum exercitationem incidunt ipsam, libero molestiae quam quas, quia rerum sed
        similique sint?
    </div>
    <div>Accusantium adipisci architecto at consectetur enim ipsam odit quis! Alias amet cumque deleniti dolorem
        doloremque, facilis iusto, minus necessitatibus perspiciatis placeat possimus praesentium, reprehenderit sequi
        voluptatem voluptatibus! Eos laboriosam, natus.
    </div>
</div>";
        // line 47
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("actors"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 47,  81 => 22,  74 => 20,  66 => 17,  57 => 13,  53 => 12,  50 => 11,  47 => 9,  42 => 8,  39 => 7,  35 => 6,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"jumbotron\">
    <div class=\"container\">
        {% content \"welcome.htm\" %}
    </div>
</div>
{% component 'searchInput' %}
<ul class=\"movie-list\">
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

<div class=\"container text-center\">
    <h2>Let's start here</h2> </div>
<div>
    <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusamus aspernatur culpa dolor expedita ipsa
        laborum minima molestias neque nesciunt numquam obcaecati tempore temporibus vitae voluptatibus! Harum natus non
        totam.
    </div>
    <div>Animi, eveniet, numquam. Minus odit perspiciatis placeat quaerat reprehenderit tempore ullam vel vero? A,
        assumenda blanditiis commodi culpa, dolores ea eos inventore, ipsam laudantium minus nulla odit perspiciatis
        veritatis voluptatibus.
    </div>
    <div>Exercitationem fugiat illum iure sapiente tempora? Adipisci dicta eius explicabo facere illum incidunt maxime
        nostrum officiis quasi sed! A ab amet dolorem dolores doloribus eaque expedita, molestiae officia perspiciatis
        voluptatem.
    </div>
    <div>Accusantium cupiditate, dicta eligendi fugit nesciunt nobis non officiis, quia quo ratione, repellat ullam
        voluptatibus? Amet, autem cum exercitationem incidunt ipsam, libero molestiae quam quas, quia rerum sed
        similique sint?
    </div>
    <div>Accusantium adipisci architecto at consectetur enim ipsam odit quis! Alias amet cumque deleniti dolorem
        doloremque, facilis iusto, minus necessitatibus perspiciatis placeat possimus praesentium, reprehenderit sequi
        voluptatem voluptatibus! Eos laboriosam, natus.
    </div>
</div>{% component 'actors' %}", "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/pages/home.htm", "");
    }
}

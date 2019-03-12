<?php

/* C:\xampp\htdocs\octoberTutorial/plugins/offline/sitesearch/components/searchinput/autocomplete.htm */
class __TwigTemplate_a8f201901deebaff84b44aed45e5cc5238a52d20a67da7b2e002f314a3c3926a extends Twig_Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "count", [])) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["results"] ?? null), 0, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "autoCompleteResultCount", [])));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 3
                echo "        ";
                // line 4
                echo "        ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['result'] = $context["result"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::searchresult.htm")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 5
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "
    ";
            // line 7
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "searchPage", [])) {
                // line 8
                echo "        <p class=\"ss-show-all-results\">
            <a href=\"";
                // line 9
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "searchPage", []));
                echo "?q=";
                echo twig_escape_filter($this->env, twig_urlencode_filter(($context["query"] ?? null), true), "html", null, true);
                echo "\">
                Show all results &raquo;
            </a>
        </p>
    ";
            }
        } else {
            // line 15
            echo "    ";
            // line 16
            echo "    <p>Your search for ";
            echo twig_escape_filter($this->env, ($context["query"] ?? null), "html", null, true);
            echo " returned no results.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/plugins/offline/sitesearch/components/searchinput/autocomplete.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  63 => 15,  52 => 9,  49 => 8,  47 => 7,  44 => 6,  38 => 5,  32 => 4,  30 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if results.count %}
    {% for result in results | slice(0, __SELF__.autoCompleteResultCount) %}
        {# Display results #}
        {% partial __SELF__ ~ '::searchresult.htm' result = result %}
    {% endfor %}

    {% if __SELF__.searchPage %}
        <p class=\"ss-show-all-results\">
            <a href=\"{{ __SELF__.searchPage | page }}?q={{ query | url_encode(true) }}\">
                Show all results &raquo;
            </a>
        </p>
    {% endif %}
{% else %}
    {# No results found #}
    <p>Your search for {{ query }} returned no results.</p>
{% endif %}", "C:\\xampp\\htdocs\\octoberTutorial/plugins/offline/sitesearch/components/searchinput/autocomplete.htm", "");
    }
}

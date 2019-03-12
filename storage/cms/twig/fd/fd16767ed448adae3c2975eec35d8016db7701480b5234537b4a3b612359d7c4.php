<?php

/* C:\xampp\htdocs\octoberTutorial/plugins/offline/sitesearch/components/searchresults/default.htm */
class __TwigTemplate_a5a6c8bcb37b1a1f45e25c19f1c75a3322f84c0d3e19694231c3813c64765741 extends Twig_Template
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
        $context["results"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "results", []);
        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 4
            echo "    ";
            // line 5
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['result'] = $context["result"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::searchresult.htm")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 7
            echo "    ";
            // line 8
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::no-results.htm")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
        // line 11
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['results'] = ($context["results"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::pagination.htm")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/plugins/offline/sitesearch/components/searchresults/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 11,  55 => 10,  46 => 8,  44 => 7,  35 => 5,  33 => 4,  28 => 3,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set results = __SELF__.results %}

{% for result in results %}
    {# Display all results #}
    {% partial __SELF__ ~ '::searchresult.htm' result = result %}
{% else %}
    {# No results found #}
    {% partial __SELF__ ~ '::no-results.htm' %}
{% endfor %}

{% partial __SELF__ ~ '::pagination.htm' results = results %}
", "C:\\xampp\\htdocs\\octoberTutorial/plugins/offline/sitesearch/components/searchresults/default.htm", "");
    }
}

<?php

/* C:\xampp\htdocs\octoberTutorial/plugins/offline/sitesearch/components/searchinput/default.htm */
class __TwigTemplate_d03278ff99be1d2031680e6fbb84d06f12813cac38f5207d83f29189e689f25b extends Twig_Template
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
        echo "<form action=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "searchPage", []));
        echo "?q=";
        echo twig_escape_filter($this->env, twig_urlencode_filter(($context["query"] ?? null), true), "html", null, true);
        echo "\" method=\"get\">
    <div class=\"ss-search-form\">
        <div class=\"ss-search-form__input\">
            <input name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" 
                   value=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "query", []), "html", null, true);
        echo "\"
                   autocomplete=\"off\"
                   autofocus
                    ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "useAutoComplete", [])) {
            // line 9
            echo "                        data-track-input
                        data-request=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::onType\"
                        data-request-before-update=\"document.getElementById('autocomplete-results').classList.add('ss-search-form__results--visible')\"
                        data-request-update=\"'";
            // line 12
            echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
            echo "::autocomplete': '#autocomplete-results'\"
                    ";
        }
        // line 14
        echo "            >
            <button class=\"ss-search-form__submit\" type=\"submit\">Search</button>
        </div>
        <div class=\"ss-search-form__results\" id=\"autocomplete-results\"></div>
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/plugins/offline/sitesearch/components/searchinput/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  49 => 12,  44 => 10,  41 => 9,  39 => 8,  33 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<form action=\"{{ __SELF__.searchPage | page }}?q={{ query | url_encode(true) }}\" method=\"get\">
    <div class=\"ss-search-form\">
        <div class=\"ss-search-form__input\">
            <input name=\"q\" type=\"text\" placeholder=\"What are you looking for?\" 
                   value=\"{{ __SELF__.query }}\"
                   autocomplete=\"off\"
                   autofocus
                    {% if __SELF__.useAutoComplete %}
                        data-track-input
                        data-request=\"{{ __SELF__ }}::onType\"
                        data-request-before-update=\"document.getElementById('autocomplete-results').classList.add('ss-search-form__results--visible')\"
                        data-request-update=\"'{{ __SELF__ }}::autocomplete': '#autocomplete-results'\"
                    {% endif %}
            >
            <button class=\"ss-search-form__submit\" type=\"submit\">Search</button>
        </div>
        <div class=\"ss-search-form__results\" id=\"autocomplete-results\"></div>
    </div>
</form>
", "C:\\xampp\\htdocs\\octoberTutorial/plugins/offline/sitesearch/components/searchinput/default.htm", "");
    }
}

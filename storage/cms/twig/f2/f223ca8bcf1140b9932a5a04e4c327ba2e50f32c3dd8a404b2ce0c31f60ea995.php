<?php

/* C:\xampp\htdocs\octoberTutorial/plugins/rainlab/pages/components/staticmenu/items.htm */
class __TwigTemplate_816bebf5342f9641617ee476a5f0b9d87e458697c55330960ad7df16f86ec403 extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", []), "isHidden", [])) {
                // line 2
                echo "    <li role=\"presentation\" class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [])) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [])) ? ("child-active") : (""));
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", []), "cssClass", []), "html", null, true);
                echo "\">
        ";
                // line 3
                if (twig_get_attribute($this->env, $this->source, $context["item"], "url", [])) {
                    // line 4
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", []), "html", null, true);
                    echo "\" ";
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "viewBag", []), "isExternal", [])) ? ("target=\"_blank\"") : (""));
                    echo ">
                ";
                    // line 5
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", []), "html", null, true);
                    echo "
            </a>
        ";
                } else {
                    // line 8
                    echo "            <span>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", []), "html", null, true);
                    echo "</span>
        ";
                }
                // line 10
                echo "
        ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [])) {
                    // line 12
                    echo "            <ul>";
                    $context['__cms_partial_params'] = [];
                    $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, $context["item"], "items", [])                    ;
                    echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::items")                    , $context['__cms_partial_params']                    , true                    );
                    unset($context['__cms_partial_params']);
                    echo "</ul>
        ";
                }
                // line 14
                echo "    </li>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/plugins/rainlab/pages/components/staticmenu/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  63 => 12,  61 => 11,  58 => 10,  52 => 8,  46 => 5,  39 => 4,  37 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for item in items if not item.viewBag.isHidden %}
    <li role=\"presentation\" class=\"{{ item.isActive ? 'active' : '' }} {{ item.isChildActive ? 'child-active' : '' }} {{ item.viewBag.cssClass }}\">
        {% if item.url %}
            <a href=\"{{ item.url }}\" {{ item.viewBag.isExternal ? 'target=\"_blank\"' }}>
                {{ item.title }}
            </a>
        {% else %}
            <span>{{ item.title }}</span>
        {% endif %}

        {% if item.items %}
            <ul>{% partial __SELF__ ~ \"::items\" items=item.items %}</ul>
        {% endif %}
    </li>
{% endfor %}", "C:\\xampp\\htdocs\\octoberTutorial/plugins/rainlab/pages/components/staticmenu/items.htm", "");
    }
}

<?php

/* C:\xampp\htdocs\octoberTutorial/themes/weed/pages/contact-form.htm */
class __TwigTemplate_39816cb9d833ba303985ebdd0b5765f9038bb50689119901056aedbe1c4ba3b3 extends Twig_Template
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
        echo "<h2>Contact Form</h2>
This is our contact form.
";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("contactform"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/pages/contact-form.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Contact Form</h2>
This is our contact form.
{% component 'contactform' %}", "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/pages/contact-form.htm", "");
    }
}

<?php

/* C:\xampp\htdocs\octoberTutorial/themes/weed/partials/user-update.htm */
class __TwigTemplate_68c9b38aa8c6cbcd32030439a034a5b7dfdd90265bc70d3b3ccd16468169f430 extends Twig_Template
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
        echo call_user_func_array($this->env->getFunction('form_ajax')->getCallable(), ["ajax", "onUpdate"]);
        echo "

<div class=\"form-group\">
    <label for=\"accountName\">Full Name</label>
    <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "name", []), "html", null, true);
        echo "\">
</div>

<div class=\"form-group\">
    <label for=\"accountEmail\">Email</label>
    <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", []), "html", null, true);
        echo "\">
</div>

<div class=\"form-group\">
    <label for=\"accountPassword\">New Password</label>
    <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
</div>

<div class=\"form-group\">
    <label for=\"accountPasswordConfirm\">Confirm New Password</label>
    <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
</div>

<div class=\"form-group\">
    <label>Facebook</label>
    <input name=\"facebook\" type=\"text\" class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "facebook", []), "html", null, true);
        echo "\">
</div>

<div class=\"form-group\">
    <label>Bio</label>
    <textarea name=\"bio\" id=\"\" cols=\"30\" rows=\"10\" class=\"form-control\">";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "bio", []), "html", null, true);
        echo "\"</textarea>
</div>

<button type=\"submit\" class=\"btn btn-danger\">Save</button>

";
        // line 35
        echo call_user_func_array($this->env->getFunction('form_close')->getCallable(), ["close"]);
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/partials/user-update.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 35,  64 => 30,  56 => 25,  38 => 10,  30 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_ajax('onUpdate') }}

<div class=\"form-group\">
    <label for=\"accountName\">Full Name</label>
    <input name=\"name\" type=\"text\" class=\"form-control\" id=\"accountName\" value=\"{{ user.name }}\">
</div>

<div class=\"form-group\">
    <label for=\"accountEmail\">Email</label>
    <input name=\"email\" type=\"email\" class=\"form-control\" id=\"accountEmail\" value=\"{{ user.email }}\">
</div>

<div class=\"form-group\">
    <label for=\"accountPassword\">New Password</label>
    <input name=\"password\" type=\"password\" class=\"form-control\" id=\"accountPassword\">
</div>

<div class=\"form-group\">
    <label for=\"accountPasswordConfirm\">Confirm New Password</label>
    <input name=\"password_confirmation\" type=\"password\" class=\"form-control\" id=\"accountPasswordConfirm\">
</div>

<div class=\"form-group\">
    <label>Facebook</label>
    <input name=\"facebook\" type=\"text\" class=\"form-control\" value=\"{{ user.facebook }}\">
</div>

<div class=\"form-group\">
    <label>Bio</label>
    <textarea name=\"bio\" id=\"\" cols=\"30\" rows=\"10\" class=\"form-control\">{{ user.bio }}\"</textarea>
</div>

<button type=\"submit\" class=\"btn btn-danger\">Save</button>

{{ form_close() }}", "C:\\xampp\\htdocs\\octoberTutorial/themes/weed/partials/user-update.htm", "");
    }
}

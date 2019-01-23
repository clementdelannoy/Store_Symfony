<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_6283d47a86865632be70566b8307b64fdaf3c273c836a8f358649b1b4294ec21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82ff5ccef75ce99b8b308cb101da5554c74eda2398637bd414ce526f72f5d5be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82ff5ccef75ce99b8b308cb101da5554c74eda2398637bd414ce526f72f5d5be->enter($__internal_82ff5ccef75ce99b8b308cb101da5554c74eda2398637bd414ce526f72f5d5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_033a5436fcba5fedaf77cb4dfe5c90af9733e2960e0e020efca511b6dca3793d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033a5436fcba5fedaf77cb4dfe5c90af9733e2960e0e020efca511b6dca3793d->enter($__internal_033a5436fcba5fedaf77cb4dfe5c90af9733e2960e0e020efca511b6dca3793d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82ff5ccef75ce99b8b308cb101da5554c74eda2398637bd414ce526f72f5d5be->leave($__internal_82ff5ccef75ce99b8b308cb101da5554c74eda2398637bd414ce526f72f5d5be_prof);

        
        $__internal_033a5436fcba5fedaf77cb4dfe5c90af9733e2960e0e020efca511b6dca3793d->leave($__internal_033a5436fcba5fedaf77cb4dfe5c90af9733e2960e0e020efca511b6dca3793d_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_e80982b3054597cfd834c2f77cb390c21adc9a75c8ebd8a825f8227e35e40e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e80982b3054597cfd834c2f77cb390c21adc9a75c8ebd8a825f8227e35e40e74->enter($__internal_e80982b3054597cfd834c2f77cb390c21adc9a75c8ebd8a825f8227e35e40e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_493961b8e40730201a9c2b79d8deec255a0c22cafcf4ce0e5ac863df8df847e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493961b8e40730201a9c2b79d8deec255a0c22cafcf4ce0e5ac863df8df847e3->enter($__internal_493961b8e40730201a9c2b79d8deec255a0c22cafcf4ce0e5ac863df8df847e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_493961b8e40730201a9c2b79d8deec255a0c22cafcf4ce0e5ac863df8df847e3->leave($__internal_493961b8e40730201a9c2b79d8deec255a0c22cafcf4ce0e5ac863df8df847e3_prof);

        
        $__internal_e80982b3054597cfd834c2f77cb390c21adc9a75c8ebd8a825f8227e35e40e74->leave($__internal_e80982b3054597cfd834c2f77cb390c21adc9a75c8ebd8a825f8227e35e40e74_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c65437423b0a4cbee35450ae9870c8fae859f2d455ec5b465c3a43c6da46c72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c65437423b0a4cbee35450ae9870c8fae859f2d455ec5b465c3a43c6da46c72c->enter($__internal_c65437423b0a4cbee35450ae9870c8fae859f2d455ec5b465c3a43c6da46c72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b29050e432a1e150510ac502c2e3a99ad498c85915637d65d59755331e910285 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29050e432a1e150510ac502c2e3a99ad498c85915637d65d59755331e910285->enter($__internal_b29050e432a1e150510ac502c2e3a99ad498c85915637d65d59755331e910285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b29050e432a1e150510ac502c2e3a99ad498c85915637d65d59755331e910285->leave($__internal_b29050e432a1e150510ac502c2e3a99ad498c85915637d65d59755331e910285_prof);

        
        $__internal_c65437423b0a4cbee35450ae9870c8fae859f2d455ec5b465c3a43c6da46c72c->leave($__internal_c65437423b0a4cbee35450ae9870c8fae859f2d455ec5b465c3a43c6da46c72c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

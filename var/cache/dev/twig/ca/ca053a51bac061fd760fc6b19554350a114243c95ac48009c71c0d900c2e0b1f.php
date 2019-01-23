<?php

/* @App/Default/about.html.twig */
class __TwigTemplate_8ba3ed2f56efaf4bd3fa5c45ec47b6b4a1382f0ceb1ae33358cbfb8e9204efde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Default/about.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d81fe1f4775f721461cbb05493281b3fa28f45a6e3354981d530ea27e18289c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d81fe1f4775f721461cbb05493281b3fa28f45a6e3354981d530ea27e18289c0->enter($__internal_d81fe1f4775f721461cbb05493281b3fa28f45a6e3354981d530ea27e18289c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/about.html.twig"));

        $__internal_c31edb659b67596c6e210c54c81019c35557bdc7002889a4fe2bb5a3f5398747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31edb659b67596c6e210c54c81019c35557bdc7002889a4fe2bb5a3f5398747->enter($__internal_c31edb659b67596c6e210c54c81019c35557bdc7002889a4fe2bb5a3f5398747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d81fe1f4775f721461cbb05493281b3fa28f45a6e3354981d530ea27e18289c0->leave($__internal_d81fe1f4775f721461cbb05493281b3fa28f45a6e3354981d530ea27e18289c0_prof);

        
        $__internal_c31edb659b67596c6e210c54c81019c35557bdc7002889a4fe2bb5a3f5398747->leave($__internal_c31edb659b67596c6e210c54c81019c35557bdc7002889a4fe2bb5a3f5398747_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_980fa95a066f835d91ba60d8d617f6600f272696191ffc3f4d9907732bb33445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980fa95a066f835d91ba60d8d617f6600f272696191ffc3f4d9907732bb33445->enter($__internal_980fa95a066f835d91ba60d8d617f6600f272696191ffc3f4d9907732bb33445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e997e98aa3ff534e3e203aa0bd726ce1ee9842408f856c33b24acea065347634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e997e98aa3ff534e3e203aa0bd726ce1ee9842408f856c33b24acea065347634->enter($__internal_e997e98aa3ff534e3e203aa0bd726ce1ee9842408f856c33b24acea065347634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " About
";
        
        $__internal_e997e98aa3ff534e3e203aa0bd726ce1ee9842408f856c33b24acea065347634->leave($__internal_e997e98aa3ff534e3e203aa0bd726ce1ee9842408f856c33b24acea065347634_prof);

        
        $__internal_980fa95a066f835d91ba60d8d617f6600f272696191ffc3f4d9907732bb33445->leave($__internal_980fa95a066f835d91ba60d8d617f6600f272696191ffc3f4d9907732bb33445_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_7588dd1ca9d8b269474775db650261054101094bc7eeb0439ccdd667e0216731 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7588dd1ca9d8b269474775db650261054101094bc7eeb0439ccdd667e0216731->enter($__internal_7588dd1ca9d8b269474775db650261054101094bc7eeb0439ccdd667e0216731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4f55bcf415df7a518a41f581274ccab5ee5fe3e757b4b4d8acf57ed8d9bb85cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f55bcf415df7a518a41f581274ccab5ee5fe3e757b4b4d8acf57ed8d9bb85cc->enter($__internal_4f55bcf415df7a518a41f581274ccab5ee5fe3e757b4b4d8acf57ed8d9bb85cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>About page !</h1>
";
        
        $__internal_4f55bcf415df7a518a41f581274ccab5ee5fe3e757b4b4d8acf57ed8d9bb85cc->leave($__internal_4f55bcf415df7a518a41f581274ccab5ee5fe3e757b4b4d8acf57ed8d9bb85cc_prof);

        
        $__internal_7588dd1ca9d8b269474775db650261054101094bc7eeb0439ccdd667e0216731->leave($__internal_7588dd1ca9d8b269474775db650261054101094bc7eeb0439ccdd667e0216731_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ parent() }} About
{% endblock %}

{% block body %}
    <h1>About page !</h1>
{% endblock %}", "@App/Default/about.html.twig", "/Applications/MAMP/htdocs/sf3/src/AppBundle/Resources/views/Default/about.html.twig");
    }
}

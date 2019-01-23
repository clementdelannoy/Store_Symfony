<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_f21ae8284ef2f05a61d29a5f4d291ddbd5fcde8b954fee01c14fefaf923c15d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5dffdd6152a85be0cc56afbc33a0e1a83e74b3d2b7e0a45a8b60f2bb433b4483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dffdd6152a85be0cc56afbc33a0e1a83e74b3d2b7e0a45a8b60f2bb433b4483->enter($__internal_5dffdd6152a85be0cc56afbc33a0e1a83e74b3d2b7e0a45a8b60f2bb433b4483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_27567d5d69c5b073741e12176a43add04e32eb5e17de11f8b8567e14e502eb88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27567d5d69c5b073741e12176a43add04e32eb5e17de11f8b8567e14e502eb88->enter($__internal_27567d5d69c5b073741e12176a43add04e32eb5e17de11f8b8567e14e502eb88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dffdd6152a85be0cc56afbc33a0e1a83e74b3d2b7e0a45a8b60f2bb433b4483->leave($__internal_5dffdd6152a85be0cc56afbc33a0e1a83e74b3d2b7e0a45a8b60f2bb433b4483_prof);

        
        $__internal_27567d5d69c5b073741e12176a43add04e32eb5e17de11f8b8567e14e502eb88->leave($__internal_27567d5d69c5b073741e12176a43add04e32eb5e17de11f8b8567e14e502eb88_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7630be4786a082ec8cd7dcab637a3f7ae58252414ebfb7348a5b117e4d949575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7630be4786a082ec8cd7dcab637a3f7ae58252414ebfb7348a5b117e4d949575->enter($__internal_7630be4786a082ec8cd7dcab637a3f7ae58252414ebfb7348a5b117e4d949575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_560e69511b29a3fd0f176bd71258fcbc691f0a04a9549a172f275b11b7bc69b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_560e69511b29a3fd0f176bd71258fcbc691f0a04a9549a172f275b11b7bc69b1->enter($__internal_560e69511b29a3fd0f176bd71258fcbc691f0a04a9549a172f275b11b7bc69b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_560e69511b29a3fd0f176bd71258fcbc691f0a04a9549a172f275b11b7bc69b1->leave($__internal_560e69511b29a3fd0f176bd71258fcbc691f0a04a9549a172f275b11b7bc69b1_prof);

        
        $__internal_7630be4786a082ec8cd7dcab637a3f7ae58252414ebfb7348a5b117e4d949575->leave($__internal_7630be4786a082ec8cd7dcab637a3f7ae58252414ebfb7348a5b117e4d949575_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2fd9c0c9b058fd6115386cb4a933da10ac83de232f8de13758cb8269862e2ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2fd9c0c9b058fd6115386cb4a933da10ac83de232f8de13758cb8269862e2ee->enter($__internal_b2fd9c0c9b058fd6115386cb4a933da10ac83de232f8de13758cb8269862e2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9f35de517e0b712157b646b9f506eb204597354e1b5f4a05e11d52d467010a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f35de517e0b712157b646b9f506eb204597354e1b5f4a05e11d52d467010a6e->enter($__internal_9f35de517e0b712157b646b9f506eb204597354e1b5f4a05e11d52d467010a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9f35de517e0b712157b646b9f506eb204597354e1b5f4a05e11d52d467010a6e->leave($__internal_9f35de517e0b712157b646b9f506eb204597354e1b5f4a05e11d52d467010a6e_prof);

        
        $__internal_b2fd9c0c9b058fd6115386cb4a933da10ac83de232f8de13758cb8269862e2ee->leave($__internal_b2fd9c0c9b058fd6115386cb4a933da10ac83de232f8de13758cb8269862e2ee_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

<?php

/* @Cart/Product/form.html.twig */
class __TwigTemplate_e63062b5a56913f14dbc53aaf6061bb5591f361564dac029ef77f6fe725e5935 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Cart/Product/form.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9be83280ef8cba5d1b5b040dfc97aaf958aed7dbfef30d3744c0d58101bbbc96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be83280ef8cba5d1b5b040dfc97aaf958aed7dbfef30d3744c0d58101bbbc96->enter($__internal_9be83280ef8cba5d1b5b040dfc97aaf958aed7dbfef30d3744c0d58101bbbc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cart/Product/form.html.twig"));

        $__internal_2fe9aa0fc73562a438ab1adf2b8fef214210c7440e18f6e2304f41728f574ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe9aa0fc73562a438ab1adf2b8fef214210c7440e18f6e2304f41728f574ba2->enter($__internal_2fe9aa0fc73562a438ab1adf2b8fef214210c7440e18f6e2304f41728f574ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cart/Product/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9be83280ef8cba5d1b5b040dfc97aaf958aed7dbfef30d3744c0d58101bbbc96->leave($__internal_9be83280ef8cba5d1b5b040dfc97aaf958aed7dbfef30d3744c0d58101bbbc96_prof);

        
        $__internal_2fe9aa0fc73562a438ab1adf2b8fef214210c7440e18f6e2304f41728f574ba2->leave($__internal_2fe9aa0fc73562a438ab1adf2b8fef214210c7440e18f6e2304f41728f574ba2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe9d91193b79d2b25eefc4c6e0b4ea420e45398dda8e919e7c7f2cf69059e3d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9d91193b79d2b25eefc4c6e0b4ea420e45398dda8e919e7c7f2cf69059e3d4->enter($__internal_fe9d91193b79d2b25eefc4c6e0b4ea420e45398dda8e919e7c7f2cf69059e3d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4b8b3f58e2d11401c030309bdbe9e871cf32082a1eac42c0bf9e74073b777768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b8b3f58e2d11401c030309bdbe9e871cf32082a1eac42c0bf9e74073b777768->enter($__internal_4b8b3f58e2d11401c030309bdbe9e871cf32082a1eac42c0bf9e74073b777768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <h1>Nouveau produit</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "

";
        
        $__internal_4b8b3f58e2d11401c030309bdbe9e871cf32082a1eac42c0bf9e74073b777768->leave($__internal_4b8b3f58e2d11401c030309bdbe9e871cf32082a1eac42c0bf9e74073b777768_prof);

        
        $__internal_fe9d91193b79d2b25eefc4c6e0b4ea420e45398dda8e919e7c7f2cf69059e3d4->leave($__internal_fe9d91193b79d2b25eefc4c6e0b4ea420e45398dda8e919e7c7f2cf69059e3d4_prof);

    }

    public function getTemplateName()
    {
        return "@Cart/Product/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}
{% block body %}

    <h1>Nouveau produit</h1>

    {{ form(form) }}

{% endblock %}", "@Cart/Product/form.html.twig", "/Applications/MAMP/htdocs/sf3/src/CartBundle/Resources/views/Product/form.html.twig");
    }
}

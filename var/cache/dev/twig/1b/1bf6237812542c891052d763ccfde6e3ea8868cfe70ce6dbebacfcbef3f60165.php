<?php

/* @Cart/Category/form.html.twig */
class __TwigTemplate_0e79e94011a74da987e8cbd0a89dbebf77fbeecb7ad8093ff1008e7f0fd77e03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Cart/Category/form.html.twig", 1);
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
        $__internal_46efd582b8b7aa94690869f5ffc8b5f170784c13edf4c36e3cd3777dcfe0f307 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46efd582b8b7aa94690869f5ffc8b5f170784c13edf4c36e3cd3777dcfe0f307->enter($__internal_46efd582b8b7aa94690869f5ffc8b5f170784c13edf4c36e3cd3777dcfe0f307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cart/Category/form.html.twig"));

        $__internal_49b2518452a959b18f54a161594b57d1727f507203aadebd4c3d5892d0f1a8d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b2518452a959b18f54a161594b57d1727f507203aadebd4c3d5892d0f1a8d2->enter($__internal_49b2518452a959b18f54a161594b57d1727f507203aadebd4c3d5892d0f1a8d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Cart/Category/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46efd582b8b7aa94690869f5ffc8b5f170784c13edf4c36e3cd3777dcfe0f307->leave($__internal_46efd582b8b7aa94690869f5ffc8b5f170784c13edf4c36e3cd3777dcfe0f307_prof);

        
        $__internal_49b2518452a959b18f54a161594b57d1727f507203aadebd4c3d5892d0f1a8d2->leave($__internal_49b2518452a959b18f54a161594b57d1727f507203aadebd4c3d5892d0f1a8d2_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_104224a99046be02ca08856d64306ddcdb5e5ccfbbdbd30f069a986018c00e60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_104224a99046be02ca08856d64306ddcdb5e5ccfbbdbd30f069a986018c00e60->enter($__internal_104224a99046be02ca08856d64306ddcdb5e5ccfbbdbd30f069a986018c00e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ec08c3575944c81be4f75f1db4d600bde918e08e2dbd54475b288d40b23e432 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec08c3575944c81be4f75f1db4d600bde918e08e2dbd54475b288d40b23e432->enter($__internal_4ec08c3575944c81be4f75f1db4d600bde918e08e2dbd54475b288d40b23e432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <h1>Nouvelle catégorie</h1>

    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate")));
        echo "

    <div class=\"form-group\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'label');
        echo "
        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
    </div>

    <div class=\"form-check\">
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "active", array()), 'widget', array("attr" => array("class" => "form-check-input")));
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "active", array()), 'label', array("attr" => array("class" => "form-check-label")));
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "active", array()), 'errors');
        echo "
    </div>

    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", array()), 'widget', array("attr" => array("class" => "btn btn-success")));
        echo "

    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_4ec08c3575944c81be4f75f1db4d600bde918e08e2dbd54475b288d40b23e432->leave($__internal_4ec08c3575944c81be4f75f1db4d600bde918e08e2dbd54475b288d40b23e432_prof);

        
        $__internal_104224a99046be02ca08856d64306ddcdb5e5ccfbbdbd30f069a986018c00e60->leave($__internal_104224a99046be02ca08856d64306ddcdb5e5ccfbbdbd30f069a986018c00e60_prof);

    }

    public function getTemplateName()
    {
        return "@Cart/Category/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  89 => 20,  83 => 17,  79 => 16,  75 => 15,  68 => 11,  64 => 10,  60 => 9,  54 => 6,  49 => 3,  40 => 2,  11 => 1,);
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

    <h1>Nouvelle catégorie</h1>

    {{ form_start(form, {'attr' : {novalidate: 'novalidate'} }) }}

    <div class=\"form-group\">
        {{ form_label(form.name) }}
        {{ form_widget(form.name, { attr: { class: 'form-control'} }) }}
        {{ form_errors(form.name) }}
    </div>

    <div class=\"form-check\">
        {{ form_widget(form.active, { attr: { class: 'form-check-input'} }) }}
        {{ form_label(form.active, null, { attr: { class: 'form-check-label'} }) }}
        {{ form_errors(form.active) }}
    </div>

    {{ form_widget(form.submit, { attr: { class: 'btn btn-success'} }) }}

    {{ form_end(form) }}

{% endblock %}", "@Cart/Category/form.html.twig", "/Applications/MAMP/htdocs/sf3/src/CartBundle/Resources/views/Category/form.html.twig");
    }
}

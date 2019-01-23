<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_197555324fe40ec8c205d744a939bf8dff89c8f6ed8128edf5b110bdf9ff867c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_744e6dfa3798407d6f403d3c7d56f6e24e379edec3e720ec4235e878a43fef73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_744e6dfa3798407d6f403d3c7d56f6e24e379edec3e720ec4235e878a43fef73->enter($__internal_744e6dfa3798407d6f403d3c7d56f6e24e379edec3e720ec4235e878a43fef73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_11876b3bd926547fb6655773af2c158d879745726d8448a39cf81994ede8d0f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11876b3bd926547fb6655773af2c158d879745726d8448a39cf81994ede8d0f2->enter($__internal_11876b3bd926547fb6655773af2c158d879745726d8448a39cf81994ede8d0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_744e6dfa3798407d6f403d3c7d56f6e24e379edec3e720ec4235e878a43fef73->leave($__internal_744e6dfa3798407d6f403d3c7d56f6e24e379edec3e720ec4235e878a43fef73_prof);

        
        $__internal_11876b3bd926547fb6655773af2c158d879745726d8448a39cf81994ede8d0f2->leave($__internal_11876b3bd926547fb6655773af2c158d879745726d8448a39cf81994ede8d0f2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

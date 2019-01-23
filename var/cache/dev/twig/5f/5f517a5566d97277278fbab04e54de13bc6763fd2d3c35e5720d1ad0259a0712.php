<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_1438b64cf2d936018c0eecc080cce01049a2c178df7eaa99571e44a3c2d7c263 extends Twig_Template
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
        $__internal_24ae600f81b016962134a9f0ef1ca5772b0b8b22f27a1e85aeb1928e26e2a8bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ae600f81b016962134a9f0ef1ca5772b0b8b22f27a1e85aeb1928e26e2a8bc->enter($__internal_24ae600f81b016962134a9f0ef1ca5772b0b8b22f27a1e85aeb1928e26e2a8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_b9e3163d9aec1a94b1e7a5a9b028495726d245b9c63ddfb48f165a8e57c04b62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e3163d9aec1a94b1e7a5a9b028495726d245b9c63ddfb48f165a8e57c04b62->enter($__internal_b9e3163d9aec1a94b1e7a5a9b028495726d245b9c63ddfb48f165a8e57c04b62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_24ae600f81b016962134a9f0ef1ca5772b0b8b22f27a1e85aeb1928e26e2a8bc->leave($__internal_24ae600f81b016962134a9f0ef1ca5772b0b8b22f27a1e85aeb1928e26e2a8bc_prof);

        
        $__internal_b9e3163d9aec1a94b1e7a5a9b028495726d245b9c63ddfb48f165a8e57c04b62->leave($__internal_b9e3163d9aec1a94b1e7a5a9b028495726d245b9c63ddfb48f165a8e57c04b62_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

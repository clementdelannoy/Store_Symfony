<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_9928096e3ba9c367d5427f2d228a9e62eda4b06a7d00cdbb311543ef04daba37 extends Twig_Template
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
        $__internal_883f82816d1bff826ed69d236bdc9647d16f74f7b4e98365848ba7c23adfd77c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883f82816d1bff826ed69d236bdc9647d16f74f7b4e98365848ba7c23adfd77c->enter($__internal_883f82816d1bff826ed69d236bdc9647d16f74f7b4e98365848ba7c23adfd77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_6a9a2a9c056663ef7ca80bc14e08d4607f56b9d82c7c5dff7e36634cc930e074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a9a2a9c056663ef7ca80bc14e08d4607f56b9d82c7c5dff7e36634cc930e074->enter($__internal_6a9a2a9c056663ef7ca80bc14e08d4607f56b9d82c7c5dff7e36634cc930e074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_883f82816d1bff826ed69d236bdc9647d16f74f7b4e98365848ba7c23adfd77c->leave($__internal_883f82816d1bff826ed69d236bdc9647d16f74f7b4e98365848ba7c23adfd77c_prof);

        
        $__internal_6a9a2a9c056663ef7ca80bc14e08d4607f56b9d82c7c5dff7e36634cc930e074->leave($__internal_6a9a2a9c056663ef7ca80bc14e08d4607f56b9d82c7c5dff7e36634cc930e074_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_f2cc935a87882ea4a7afa91e49ea5ead3a1ee577920961789ae61bfedda7b7c6 extends Twig_Template
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
        $__internal_80548f3b227fe414105649bd7448b17a5f642835e6a34e171df7aad3e19f4b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80548f3b227fe414105649bd7448b17a5f642835e6a34e171df7aad3e19f4b27->enter($__internal_80548f3b227fe414105649bd7448b17a5f642835e6a34e171df7aad3e19f4b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_1a35d0431374d93dab29e0a4d38161c6308feb730d680b365193af915c3b1e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a35d0431374d93dab29e0a4d38161c6308feb730d680b365193af915c3b1e76->enter($__internal_1a35d0431374d93dab29e0a4d38161c6308feb730d680b365193af915c3b1e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_80548f3b227fe414105649bd7448b17a5f642835e6a34e171df7aad3e19f4b27->leave($__internal_80548f3b227fe414105649bd7448b17a5f642835e6a34e171df7aad3e19f4b27_prof);

        
        $__internal_1a35d0431374d93dab29e0a4d38161c6308feb730d680b365193af915c3b1e76->leave($__internal_1a35d0431374d93dab29e0a4d38161c6308feb730d680b365193af915c3b1e76_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

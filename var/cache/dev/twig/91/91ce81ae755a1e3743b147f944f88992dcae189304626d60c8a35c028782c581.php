<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_20a28ef4238c3fd4eea833eb708d205e54ef600892db807403d061d65ee6affb extends Twig_Template
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
        $__internal_fa8a5be73c8c08d1720fd0236ec70cdcb9d6de2498e8a7ea4e225eb8534c37b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa8a5be73c8c08d1720fd0236ec70cdcb9d6de2498e8a7ea4e225eb8534c37b4->enter($__internal_fa8a5be73c8c08d1720fd0236ec70cdcb9d6de2498e8a7ea4e225eb8534c37b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_fa1a77f831c9f8c38c5e18b545764fde9eb627b74ab49144fefee1d65d144488 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa1a77f831c9f8c38c5e18b545764fde9eb627b74ab49144fefee1d65d144488->enter($__internal_fa1a77f831c9f8c38c5e18b545764fde9eb627b74ab49144fefee1d65d144488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_fa8a5be73c8c08d1720fd0236ec70cdcb9d6de2498e8a7ea4e225eb8534c37b4->leave($__internal_fa8a5be73c8c08d1720fd0236ec70cdcb9d6de2498e8a7ea4e225eb8534c37b4_prof);

        
        $__internal_fa1a77f831c9f8c38c5e18b545764fde9eb627b74ab49144fefee1d65d144488->leave($__internal_fa1a77f831c9f8c38c5e18b545764fde9eb627b74ab49144fefee1d65d144488_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

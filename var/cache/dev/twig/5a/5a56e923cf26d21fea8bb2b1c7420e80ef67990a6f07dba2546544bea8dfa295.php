<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_73ecaab4a33e0124724806494b089fe5ed4999ea0ee53c14c40541647bf0ac09 extends Twig_Template
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
        $__internal_f57caad6dde2a94dd7e435b6d077ae027696cbf17e4ac4c8bb5e9b6aff65761c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57caad6dde2a94dd7e435b6d077ae027696cbf17e4ac4c8bb5e9b6aff65761c->enter($__internal_f57caad6dde2a94dd7e435b6d077ae027696cbf17e4ac4c8bb5e9b6aff65761c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_7fdf2d52dfe275275744b915ca927b896ed9dbfd21229a5eb6d1dfd4e4a64900 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fdf2d52dfe275275744b915ca927b896ed9dbfd21229a5eb6d1dfd4e4a64900->enter($__internal_7fdf2d52dfe275275744b915ca927b896ed9dbfd21229a5eb6d1dfd4e4a64900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_f57caad6dde2a94dd7e435b6d077ae027696cbf17e4ac4c8bb5e9b6aff65761c->leave($__internal_f57caad6dde2a94dd7e435b6d077ae027696cbf17e4ac4c8bb5e9b6aff65761c_prof);

        
        $__internal_7fdf2d52dfe275275744b915ca927b896ed9dbfd21229a5eb6d1dfd4e4a64900->leave($__internal_7fdf2d52dfe275275744b915ca927b896ed9dbfd21229a5eb6d1dfd4e4a64900_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

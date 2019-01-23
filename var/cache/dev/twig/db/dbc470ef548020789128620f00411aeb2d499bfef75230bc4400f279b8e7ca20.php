<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_66ce3f2cdce8e78ec097a0c6094c57a44b79d8e5c4c015855506e38580abc315 extends Twig_Template
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
        $__internal_49673b17fc0f55b1cf7526fe2477b2725c3a0ff54d452828d4972dbc204ce4b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49673b17fc0f55b1cf7526fe2477b2725c3a0ff54d452828d4972dbc204ce4b9->enter($__internal_49673b17fc0f55b1cf7526fe2477b2725c3a0ff54d452828d4972dbc204ce4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_9d873f99ef0fe008a813e3bc3e61689cdbf34a7e77a65ec57f2ee8fa17abc883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d873f99ef0fe008a813e3bc3e61689cdbf34a7e77a65ec57f2ee8fa17abc883->enter($__internal_9d873f99ef0fe008a813e3bc3e61689cdbf34a7e77a65ec57f2ee8fa17abc883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_49673b17fc0f55b1cf7526fe2477b2725c3a0ff54d452828d4972dbc204ce4b9->leave($__internal_49673b17fc0f55b1cf7526fe2477b2725c3a0ff54d452828d4972dbc204ce4b9_prof);

        
        $__internal_9d873f99ef0fe008a813e3bc3e61689cdbf34a7e77a65ec57f2ee8fa17abc883->leave($__internal_9d873f99ef0fe008a813e3bc3e61689cdbf34a7e77a65ec57f2ee8fa17abc883_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}

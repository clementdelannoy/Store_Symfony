<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_d86edbff7efa2aa7a657181f512a9af2786c990d04714fc94a251e02b3d38fef extends Twig_Template
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
        $__internal_e5756360e1169930b1a6371c67c566989e9059249baf9a7c5e13adc2de963ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5756360e1169930b1a6371c67c566989e9059249baf9a7c5e13adc2de963ebf->enter($__internal_e5756360e1169930b1a6371c67c566989e9059249baf9a7c5e13adc2de963ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_768c6fdd04114a3cc1d60ffe2ac777384ba230e370262e68d5d6757d6286411c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768c6fdd04114a3cc1d60ffe2ac777384ba230e370262e68d5d6757d6286411c->enter($__internal_768c6fdd04114a3cc1d60ffe2ac777384ba230e370262e68d5d6757d6286411c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e5756360e1169930b1a6371c67c566989e9059249baf9a7c5e13adc2de963ebf->leave($__internal_e5756360e1169930b1a6371c67c566989e9059249baf9a7c5e13adc2de963ebf_prof);

        
        $__internal_768c6fdd04114a3cc1d60ffe2ac777384ba230e370262e68d5d6757d6286411c->leave($__internal_768c6fdd04114a3cc1d60ffe2ac777384ba230e370262e68d5d6757d6286411c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}

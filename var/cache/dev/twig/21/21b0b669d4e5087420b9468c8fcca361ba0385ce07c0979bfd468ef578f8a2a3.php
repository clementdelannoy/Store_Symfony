<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c33a84d23129ca92a00f47eb3729442177fb5025d669e97645d841d4393e1b82 extends Twig_Template
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
        $__internal_3466dd50c68fa709ac1d4d06ea56893a41ffe98d72a4ce64ead1a604879462b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3466dd50c68fa709ac1d4d06ea56893a41ffe98d72a4ce64ead1a604879462b0->enter($__internal_3466dd50c68fa709ac1d4d06ea56893a41ffe98d72a4ce64ead1a604879462b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_c1b1a15b553f13e785e43d04a3d972abc9fe583c721c8bfbf619692263ae4a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b1a15b553f13e785e43d04a3d972abc9fe583c721c8bfbf619692263ae4a53->enter($__internal_c1b1a15b553f13e785e43d04a3d972abc9fe583c721c8bfbf619692263ae4a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3466dd50c68fa709ac1d4d06ea56893a41ffe98d72a4ce64ead1a604879462b0->leave($__internal_3466dd50c68fa709ac1d4d06ea56893a41ffe98d72a4ce64ead1a604879462b0_prof);

        
        $__internal_c1b1a15b553f13e785e43d04a3d972abc9fe583c721c8bfbf619692263ae4a53->leave($__internal_c1b1a15b553f13e785e43d04a3d972abc9fe583c721c8bfbf619692263ae4a53_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}

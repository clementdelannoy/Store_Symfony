<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_543242b188429d0f13759256d86393637f6c1739675faae6bcd8e01c0ffd48cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_76b6159191a202d334aa1e7f266652bafa8bafb449eec357634b5c3e894e840c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b6159191a202d334aa1e7f266652bafa8bafb449eec357634b5c3e894e840c->enter($__internal_76b6159191a202d334aa1e7f266652bafa8bafb449eec357634b5c3e894e840c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_1e41ba38b1e82dd34ea4b14e54f496656aecb3590c51991615ea08588eda3a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e41ba38b1e82dd34ea4b14e54f496656aecb3590c51991615ea08588eda3a5d->enter($__internal_1e41ba38b1e82dd34ea4b14e54f496656aecb3590c51991615ea08588eda3a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_76b6159191a202d334aa1e7f266652bafa8bafb449eec357634b5c3e894e840c->leave($__internal_76b6159191a202d334aa1e7f266652bafa8bafb449eec357634b5c3e894e840c_prof);

        
        $__internal_1e41ba38b1e82dd34ea4b14e54f496656aecb3590c51991615ea08588eda3a5d->leave($__internal_1e41ba38b1e82dd34ea4b14e54f496656aecb3590c51991615ea08588eda3a5d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9647c7cf69fb997fc66fdc94b61be8bd89dcabc26ff6e9d2a85af6acbafd544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9647c7cf69fb997fc66fdc94b61be8bd89dcabc26ff6e9d2a85af6acbafd544->enter($__internal_a9647c7cf69fb997fc66fdc94b61be8bd89dcabc26ff6e9d2a85af6acbafd544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c76d15ef1523ff5e8d41af9d8eb24a32eb083a47827025b7141dd3d04c3396f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76d15ef1523ff5e8d41af9d8eb24a32eb083a47827025b7141dd3d04c3396f1->enter($__internal_c76d15ef1523ff5e8d41af9d8eb24a32eb083a47827025b7141dd3d04c3396f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c76d15ef1523ff5e8d41af9d8eb24a32eb083a47827025b7141dd3d04c3396f1->leave($__internal_c76d15ef1523ff5e8d41af9d8eb24a32eb083a47827025b7141dd3d04c3396f1_prof);

        
        $__internal_a9647c7cf69fb997fc66fdc94b61be8bd89dcabc26ff6e9d2a85af6acbafd544->leave($__internal_a9647c7cf69fb997fc66fdc94b61be8bd89dcabc26ff6e9d2a85af6acbafd544_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_9da1df2ed013efead6a326b80f67f5c4f89cdd7f88c15fdcffce9ca75898f564 extends Twig_Template
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
        $__internal_2d4bb54927ced70bb69b3a39ca6e9e237b006e562ef4209e7e5e5dacd60e441a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4bb54927ced70bb69b3a39ca6e9e237b006e562ef4209e7e5e5dacd60e441a->enter($__internal_2d4bb54927ced70bb69b3a39ca6e9e237b006e562ef4209e7e5e5dacd60e441a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_d607f05b4791c1cc72036a9b425fc115e324297a18009b940ed27c1a1db915f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d607f05b4791c1cc72036a9b425fc115e324297a18009b940ed27c1a1db915f5->enter($__internal_d607f05b4791c1cc72036a9b425fc115e324297a18009b940ed27c1a1db915f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_2d4bb54927ced70bb69b3a39ca6e9e237b006e562ef4209e7e5e5dacd60e441a->leave($__internal_2d4bb54927ced70bb69b3a39ca6e9e237b006e562ef4209e7e5e5dacd60e441a_prof);

        
        $__internal_d607f05b4791c1cc72036a9b425fc115e324297a18009b940ed27c1a1db915f5->leave($__internal_d607f05b4791c1cc72036a9b425fc115e324297a18009b940ed27c1a1db915f5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}

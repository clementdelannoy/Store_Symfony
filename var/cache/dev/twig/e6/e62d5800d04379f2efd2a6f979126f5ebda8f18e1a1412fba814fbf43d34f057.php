<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_d2573d8f7a0cfdb906ba630e49400a4ab430423e28c8d3acf4c23d46c5e51f52 extends Twig_Template
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
        $__internal_f21ab14b97e2e0cdf79fcfc1eaedab655c6e664e989128c61cffff4ada2c47a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21ab14b97e2e0cdf79fcfc1eaedab655c6e664e989128c61cffff4ada2c47a3->enter($__internal_f21ab14b97e2e0cdf79fcfc1eaedab655c6e664e989128c61cffff4ada2c47a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_b6b778eca3a3bbc2ff55855516a1eedd44a613c1ea807d74e58b78908a3d6c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6b778eca3a3bbc2ff55855516a1eedd44a613c1ea807d74e58b78908a3d6c27->enter($__internal_b6b778eca3a3bbc2ff55855516a1eedd44a613c1ea807d74e58b78908a3d6c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_f21ab14b97e2e0cdf79fcfc1eaedab655c6e664e989128c61cffff4ada2c47a3->leave($__internal_f21ab14b97e2e0cdf79fcfc1eaedab655c6e664e989128c61cffff4ada2c47a3_prof);

        
        $__internal_b6b778eca3a3bbc2ff55855516a1eedd44a613c1ea807d74e58b78908a3d6c27->leave($__internal_b6b778eca3a3bbc2ff55855516a1eedd44a613c1ea807d74e58b78908a3d6c27_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}

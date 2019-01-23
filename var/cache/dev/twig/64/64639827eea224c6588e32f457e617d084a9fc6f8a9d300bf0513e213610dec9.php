<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e0daa9fba57eb8ed8c33c47766cfab8e7baac4000db01b90543b0247895b7558 extends Twig_Template
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
        $__internal_f76e7d538d3758ca7da993acc1c99cf938226eadbdc35988190f7cacef1c1838 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f76e7d538d3758ca7da993acc1c99cf938226eadbdc35988190f7cacef1c1838->enter($__internal_f76e7d538d3758ca7da993acc1c99cf938226eadbdc35988190f7cacef1c1838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_5f2ad5b7919cda7bc677f33b3b5bf230d8f694c49f476eb82a6dd71fe79b6812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f2ad5b7919cda7bc677f33b3b5bf230d8f694c49f476eb82a6dd71fe79b6812->enter($__internal_5f2ad5b7919cda7bc677f33b3b5bf230d8f694c49f476eb82a6dd71fe79b6812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_f76e7d538d3758ca7da993acc1c99cf938226eadbdc35988190f7cacef1c1838->leave($__internal_f76e7d538d3758ca7da993acc1c99cf938226eadbdc35988190f7cacef1c1838_prof);

        
        $__internal_5f2ad5b7919cda7bc677f33b3b5bf230d8f694c49f476eb82a6dd71fe79b6812->leave($__internal_5f2ad5b7919cda7bc677f33b3b5bf230d8f694c49f476eb82a6dd71fe79b6812_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}

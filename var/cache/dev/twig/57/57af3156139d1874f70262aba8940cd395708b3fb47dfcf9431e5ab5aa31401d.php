<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_75e9861a5a7e8ccb4a1230e17e357a8ad382e6455b5b5d0155bdda9a94fe46fc extends Twig_Template
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
        $__internal_1e5a7a236e6d9d446bf6e86ffa58bbfd4f2401dcef125e0295ea4ab1d29066d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e5a7a236e6d9d446bf6e86ffa58bbfd4f2401dcef125e0295ea4ab1d29066d3->enter($__internal_1e5a7a236e6d9d446bf6e86ffa58bbfd4f2401dcef125e0295ea4ab1d29066d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_05aedb880838e20370333b962e8b1a30a85d08be95a75bdf2ba01d2203c4568e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05aedb880838e20370333b962e8b1a30a85d08be95a75bdf2ba01d2203c4568e->enter($__internal_05aedb880838e20370333b962e8b1a30a85d08be95a75bdf2ba01d2203c4568e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_1e5a7a236e6d9d446bf6e86ffa58bbfd4f2401dcef125e0295ea4ab1d29066d3->leave($__internal_1e5a7a236e6d9d446bf6e86ffa58bbfd4f2401dcef125e0295ea4ab1d29066d3_prof);

        
        $__internal_05aedb880838e20370333b962e8b1a30a85d08be95a75bdf2ba01d2203c4568e->leave($__internal_05aedb880838e20370333b962e8b1a30a85d08be95a75bdf2ba01d2203c4568e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}

<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d9eee2d3c0ad643ddc1bd65408537ab07b84b3f251803870a83a8f2c500780e4 extends Twig_Template
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
        $__internal_1cfe6dff93eaeb7de87bd63b667dd6c68066021514e9f6a0687825a225809d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cfe6dff93eaeb7de87bd63b667dd6c68066021514e9f6a0687825a225809d58->enter($__internal_1cfe6dff93eaeb7de87bd63b667dd6c68066021514e9f6a0687825a225809d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_e214c497c14d48cd7adc99486a5928768c75cf33e88ad46243a3e8159140be0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e214c497c14d48cd7adc99486a5928768c75cf33e88ad46243a3e8159140be0c->enter($__internal_e214c497c14d48cd7adc99486a5928768c75cf33e88ad46243a3e8159140be0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1cfe6dff93eaeb7de87bd63b667dd6c68066021514e9f6a0687825a225809d58->leave($__internal_1cfe6dff93eaeb7de87bd63b667dd6c68066021514e9f6a0687825a225809d58_prof);

        
        $__internal_e214c497c14d48cd7adc99486a5928768c75cf33e88ad46243a3e8159140be0c->leave($__internal_e214c497c14d48cd7adc99486a5928768c75cf33e88ad46243a3e8159140be0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

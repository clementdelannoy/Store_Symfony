<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_270f3ced0fe68d53807b23a10cd94582f17587c0b868fa2b696f0fe0a22cbfbb extends Twig_Template
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
        $__internal_0adb178ad4a68b6f01731993e92c764c005f817fb5c126e97f70ff1d3f9e079b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0adb178ad4a68b6f01731993e92c764c005f817fb5c126e97f70ff1d3f9e079b->enter($__internal_0adb178ad4a68b6f01731993e92c764c005f817fb5c126e97f70ff1d3f9e079b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_86d90cf7cf0888e9697009323f9efbd6cb192105e2affc8cb7bd8cebf9be76dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d90cf7cf0888e9697009323f9efbd6cb192105e2affc8cb7bd8cebf9be76dd->enter($__internal_86d90cf7cf0888e9697009323f9efbd6cb192105e2affc8cb7bd8cebf9be76dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_0adb178ad4a68b6f01731993e92c764c005f817fb5c126e97f70ff1d3f9e079b->leave($__internal_0adb178ad4a68b6f01731993e92c764c005f817fb5c126e97f70ff1d3f9e079b_prof);

        
        $__internal_86d90cf7cf0888e9697009323f9efbd6cb192105e2affc8cb7bd8cebf9be76dd->leave($__internal_86d90cf7cf0888e9697009323f9efbd6cb192105e2affc8cb7bd8cebf9be76dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}

<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_eef7a73f6285febfd21c153098bdc89b4560d436bb8a8c2bf474f0f31afdb32f extends Twig_Template
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
        $__internal_f3bf2332373af6885ab497097dd06d7e12c20461e4a10c4275635314390bbf93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3bf2332373af6885ab497097dd06d7e12c20461e4a10c4275635314390bbf93->enter($__internal_f3bf2332373af6885ab497097dd06d7e12c20461e4a10c4275635314390bbf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d7b259076496261b9b7c8c53dd59f243fb97435fd931f0e2b907325f6803a990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b259076496261b9b7c8c53dd59f243fb97435fd931f0e2b907325f6803a990->enter($__internal_d7b259076496261b9b7c8c53dd59f243fb97435fd931f0e2b907325f6803a990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_f3bf2332373af6885ab497097dd06d7e12c20461e4a10c4275635314390bbf93->leave($__internal_f3bf2332373af6885ab497097dd06d7e12c20461e4a10c4275635314390bbf93_prof);

        
        $__internal_d7b259076496261b9b7c8c53dd59f243fb97435fd931f0e2b907325f6803a990->leave($__internal_d7b259076496261b9b7c8c53dd59f243fb97435fd931f0e2b907325f6803a990_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

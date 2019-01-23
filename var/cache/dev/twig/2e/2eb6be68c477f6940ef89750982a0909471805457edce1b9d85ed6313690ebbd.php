<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_15830011e220587d6e21dfb09c55c7a2f98755b87916f9de16dd51b8289d14d7 extends Twig_Template
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
        $__internal_3fc81eaebef5d6d86b90a2d8e6b4b6b9824ac3925e42884e937d11332057ce03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc81eaebef5d6d86b90a2d8e6b4b6b9824ac3925e42884e937d11332057ce03->enter($__internal_3fc81eaebef5d6d86b90a2d8e6b4b6b9824ac3925e42884e937d11332057ce03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_58df88996e74f10f840622525961d767f8ad3dd70f3e6e5881f2c4c630bac912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58df88996e74f10f840622525961d767f8ad3dd70f3e6e5881f2c4c630bac912->enter($__internal_58df88996e74f10f840622525961d767f8ad3dd70f3e6e5881f2c4c630bac912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_3fc81eaebef5d6d86b90a2d8e6b4b6b9824ac3925e42884e937d11332057ce03->leave($__internal_3fc81eaebef5d6d86b90a2d8e6b4b6b9824ac3925e42884e937d11332057ce03_prof);

        
        $__internal_58df88996e74f10f840622525961d767f8ad3dd70f3e6e5881f2c4c630bac912->leave($__internal_58df88996e74f10f840622525961d767f8ad3dd70f3e6e5881f2c4c630bac912_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}

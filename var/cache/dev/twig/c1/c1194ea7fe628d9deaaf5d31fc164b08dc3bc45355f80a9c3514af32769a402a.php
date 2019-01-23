<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6a46984fd288958725c51add0c4d3ad9d1a408c64b52c0270406cd978ff6a30a extends Twig_Template
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
        $__internal_35a217422a720539392f41311db4037584e6a14bb42ad187f4774de76ae003e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35a217422a720539392f41311db4037584e6a14bb42ad187f4774de76ae003e7->enter($__internal_35a217422a720539392f41311db4037584e6a14bb42ad187f4774de76ae003e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_ab6c6c23cab91ac758362ae4e1454541c6a5262780ade01f5b4f6fa68c1cad01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6c6c23cab91ac758362ae4e1454541c6a5262780ade01f5b4f6fa68c1cad01->enter($__internal_ab6c6c23cab91ac758362ae4e1454541c6a5262780ade01f5b4f6fa68c1cad01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_35a217422a720539392f41311db4037584e6a14bb42ad187f4774de76ae003e7->leave($__internal_35a217422a720539392f41311db4037584e6a14bb42ad187f4774de76ae003e7_prof);

        
        $__internal_ab6c6c23cab91ac758362ae4e1454541c6a5262780ade01f5b4f6fa68c1cad01->leave($__internal_ab6c6c23cab91ac758362ae4e1454541c6a5262780ade01f5b4f6fa68c1cad01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}

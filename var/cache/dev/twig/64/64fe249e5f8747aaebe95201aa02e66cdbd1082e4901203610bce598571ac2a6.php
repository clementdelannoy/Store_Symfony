<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_978ddcd1026e36d44b242668e117503313ad75c0d2a2b8e3f1956ecd3a329cdb extends Twig_Template
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
        $__internal_9188a8c2c6e99d2bb2d8cbc5834a8b59d355d29661b2674af0b1340423558ea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9188a8c2c6e99d2bb2d8cbc5834a8b59d355d29661b2674af0b1340423558ea0->enter($__internal_9188a8c2c6e99d2bb2d8cbc5834a8b59d355d29661b2674af0b1340423558ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e251d5d1de7907084ddc10b9703a162dbaf5214b0e0227a0a56ce21f57f54557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e251d5d1de7907084ddc10b9703a162dbaf5214b0e0227a0a56ce21f57f54557->enter($__internal_e251d5d1de7907084ddc10b9703a162dbaf5214b0e0227a0a56ce21f57f54557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9188a8c2c6e99d2bb2d8cbc5834a8b59d355d29661b2674af0b1340423558ea0->leave($__internal_9188a8c2c6e99d2bb2d8cbc5834a8b59d355d29661b2674af0b1340423558ea0_prof);

        
        $__internal_e251d5d1de7907084ddc10b9703a162dbaf5214b0e0227a0a56ce21f57f54557->leave($__internal_e251d5d1de7907084ddc10b9703a162dbaf5214b0e0227a0a56ce21f57f54557_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}

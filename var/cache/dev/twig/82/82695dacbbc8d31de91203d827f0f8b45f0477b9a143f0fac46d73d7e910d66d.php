<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_77ef7a368468ebd03d6e5e9de1d31267f954282a16ed07a819d398585d483413 extends Twig_Template
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
        $__internal_984669f58232ce9bbdfd5971df90c3b76376c990b74aaff884497fa396afaeb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984669f58232ce9bbdfd5971df90c3b76376c990b74aaff884497fa396afaeb1->enter($__internal_984669f58232ce9bbdfd5971df90c3b76376c990b74aaff884497fa396afaeb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_047b4548284830a50f7c7049f837043a51df1947cff12841904c5b45966a5baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047b4548284830a50f7c7049f837043a51df1947cff12841904c5b45966a5baa->enter($__internal_047b4548284830a50f7c7049f837043a51df1947cff12841904c5b45966a5baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_984669f58232ce9bbdfd5971df90c3b76376c990b74aaff884497fa396afaeb1->leave($__internal_984669f58232ce9bbdfd5971df90c3b76376c990b74aaff884497fa396afaeb1_prof);

        
        $__internal_047b4548284830a50f7c7049f837043a51df1947cff12841904c5b45966a5baa->leave($__internal_047b4548284830a50f7c7049f837043a51df1947cff12841904c5b45966a5baa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}

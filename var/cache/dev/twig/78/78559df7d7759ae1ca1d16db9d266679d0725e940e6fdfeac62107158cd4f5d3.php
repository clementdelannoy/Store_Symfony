<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_7232aa0127231258a45701a039437d751c1b3c3b53036667e00f4b3232efbbb1 extends Twig_Template
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
        $__internal_0d9fe99de371c64d4931b957e68946bbf0e017f92b98b882b253367ae6ea97d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d9fe99de371c64d4931b957e68946bbf0e017f92b98b882b253367ae6ea97d5->enter($__internal_0d9fe99de371c64d4931b957e68946bbf0e017f92b98b882b253367ae6ea97d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_aa5f668d3a9c4ac22b445a3c7907e465a06b5da39dabfd29a2406ea9e051fe53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5f668d3a9c4ac22b445a3c7907e465a06b5da39dabfd29a2406ea9e051fe53->enter($__internal_aa5f668d3a9c4ac22b445a3c7907e465a06b5da39dabfd29a2406ea9e051fe53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0d9fe99de371c64d4931b957e68946bbf0e017f92b98b882b253367ae6ea97d5->leave($__internal_0d9fe99de371c64d4931b957e68946bbf0e017f92b98b882b253367ae6ea97d5_prof);

        
        $__internal_aa5f668d3a9c4ac22b445a3c7907e465a06b5da39dabfd29a2406ea9e051fe53->leave($__internal_aa5f668d3a9c4ac22b445a3c7907e465a06b5da39dabfd29a2406ea9e051fe53_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}

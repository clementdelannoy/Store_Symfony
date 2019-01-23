<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_6ce96a73fa6137e76f1700bc6cbb92129d81f513c3de628af49807c4702345fc extends Twig_Template
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
        $__internal_d974ba178910578822bf58c5ddf74bb4793ff99a510a4df210b488962087fea3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d974ba178910578822bf58c5ddf74bb4793ff99a510a4df210b488962087fea3->enter($__internal_d974ba178910578822bf58c5ddf74bb4793ff99a510a4df210b488962087fea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_49a7f6551230e23d8e37d3498ef312dda9290c98dda26c348338b618ca9aad46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a7f6551230e23d8e37d3498ef312dda9290c98dda26c348338b618ca9aad46->enter($__internal_49a7f6551230e23d8e37d3498ef312dda9290c98dda26c348338b618ca9aad46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_d974ba178910578822bf58c5ddf74bb4793ff99a510a4df210b488962087fea3->leave($__internal_d974ba178910578822bf58c5ddf74bb4793ff99a510a4df210b488962087fea3_prof);

        
        $__internal_49a7f6551230e23d8e37d3498ef312dda9290c98dda26c348338b618ca9aad46->leave($__internal_49a7f6551230e23d8e37d3498ef312dda9290c98dda26c348338b618ca9aad46_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}

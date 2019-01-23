<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_c3b5617b6616663785800a3b01ab5567ed6d0a26eba8762f547d18a0a70fa063 extends Twig_Template
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
        $__internal_fedf709c93f7fb55e4ec197ef54a4b39f50fd8f8998c02537a6e0db1813fe23f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fedf709c93f7fb55e4ec197ef54a4b39f50fd8f8998c02537a6e0db1813fe23f->enter($__internal_fedf709c93f7fb55e4ec197ef54a4b39f50fd8f8998c02537a6e0db1813fe23f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_efc4b0fffa8d07d6329e5eb393733852d4e6a1282abfd34d92c2217f60c4cde7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc4b0fffa8d07d6329e5eb393733852d4e6a1282abfd34d92c2217f60c4cde7->enter($__internal_efc4b0fffa8d07d6329e5eb393733852d4e6a1282abfd34d92c2217f60c4cde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_fedf709c93f7fb55e4ec197ef54a4b39f50fd8f8998c02537a6e0db1813fe23f->leave($__internal_fedf709c93f7fb55e4ec197ef54a4b39f50fd8f8998c02537a6e0db1813fe23f_prof);

        
        $__internal_efc4b0fffa8d07d6329e5eb393733852d4e6a1282abfd34d92c2217f60c4cde7->leave($__internal_efc4b0fffa8d07d6329e5eb393733852d4e6a1282abfd34d92c2217f60c4cde7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}

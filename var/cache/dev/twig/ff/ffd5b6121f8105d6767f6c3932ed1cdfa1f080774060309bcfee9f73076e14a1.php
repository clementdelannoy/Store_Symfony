<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_6966b01f33298d5f0f8cc476a6c7b1e4f8db0dd3ccd07e8d16e3b9d263f8fc3c extends Twig_Template
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
        $__internal_c6a019dec4e5549a5e5ba2863b04e0c9b3006a2f735ede836554568c47ab2147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6a019dec4e5549a5e5ba2863b04e0c9b3006a2f735ede836554568c47ab2147->enter($__internal_c6a019dec4e5549a5e5ba2863b04e0c9b3006a2f735ede836554568c47ab2147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_0d8ef1965ab11d90bb22ed4536a8fc21288c3d65e890518414b066c61093670f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8ef1965ab11d90bb22ed4536a8fc21288c3d65e890518414b066c61093670f->enter($__internal_0d8ef1965ab11d90bb22ed4536a8fc21288c3d65e890518414b066c61093670f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c6a019dec4e5549a5e5ba2863b04e0c9b3006a2f735ede836554568c47ab2147->leave($__internal_c6a019dec4e5549a5e5ba2863b04e0c9b3006a2f735ede836554568c47ab2147_prof);

        
        $__internal_0d8ef1965ab11d90bb22ed4536a8fc21288c3d65e890518414b066c61093670f->leave($__internal_0d8ef1965ab11d90bb22ed4536a8fc21288c3d65e890518414b066c61093670f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}

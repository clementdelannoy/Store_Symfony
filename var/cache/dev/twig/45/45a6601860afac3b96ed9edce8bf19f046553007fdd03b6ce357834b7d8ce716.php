<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_e7f52ad4dc6900e383c89c864e2a500424dffa98cf3aea339b5007c2bc6df84c extends Twig_Template
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
        $__internal_1c2b25c1429a4f3523d2edc8bc1dd9cc5f5258a350bec3b265246e97e57b3f83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c2b25c1429a4f3523d2edc8bc1dd9cc5f5258a350bec3b265246e97e57b3f83->enter($__internal_1c2b25c1429a4f3523d2edc8bc1dd9cc5f5258a350bec3b265246e97e57b3f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ace94c1e898d6aa7ad5edfec86a14f3018f79ca7b2baf62f4663c196f89d08fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ace94c1e898d6aa7ad5edfec86a14f3018f79ca7b2baf62f4663c196f89d08fd->enter($__internal_ace94c1e898d6aa7ad5edfec86a14f3018f79ca7b2baf62f4663c196f89d08fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_1c2b25c1429a4f3523d2edc8bc1dd9cc5f5258a350bec3b265246e97e57b3f83->leave($__internal_1c2b25c1429a4f3523d2edc8bc1dd9cc5f5258a350bec3b265246e97e57b3f83_prof);

        
        $__internal_ace94c1e898d6aa7ad5edfec86a14f3018f79ca7b2baf62f4663c196f89d08fd->leave($__internal_ace94c1e898d6aa7ad5edfec86a14f3018f79ca7b2baf62f4663c196f89d08fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

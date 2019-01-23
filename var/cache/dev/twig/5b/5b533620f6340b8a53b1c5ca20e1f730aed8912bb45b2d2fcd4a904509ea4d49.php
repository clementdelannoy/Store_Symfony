<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_016a12e3c9f92e0eac60b8e55eeee419e7bf76b1b465d43b561ab80cb7a787b8 extends Twig_Template
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
        $__internal_e8b4f520ce23dd24f9e989b52b21a51692b9452ab6d68655049cac929fab4c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8b4f520ce23dd24f9e989b52b21a51692b9452ab6d68655049cac929fab4c2f->enter($__internal_e8b4f520ce23dd24f9e989b52b21a51692b9452ab6d68655049cac929fab4c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_0f318659bc6c899ca1304dd1703150d762f3243e3d846fbfae089c8c6c74cbfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f318659bc6c899ca1304dd1703150d762f3243e3d846fbfae089c8c6c74cbfd->enter($__internal_0f318659bc6c899ca1304dd1703150d762f3243e3d846fbfae089c8c6c74cbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_e8b4f520ce23dd24f9e989b52b21a51692b9452ab6d68655049cac929fab4c2f->leave($__internal_e8b4f520ce23dd24f9e989b52b21a51692b9452ab6d68655049cac929fab4c2f_prof);

        
        $__internal_0f318659bc6c899ca1304dd1703150d762f3243e3d846fbfae089c8c6c74cbfd->leave($__internal_0f318659bc6c899ca1304dd1703150d762f3243e3d846fbfae089c8c6c74cbfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

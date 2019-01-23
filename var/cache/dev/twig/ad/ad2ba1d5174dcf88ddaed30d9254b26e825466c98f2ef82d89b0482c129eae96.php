<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_d6bc4da3dc9230b53d34f028ee4b66d6e584a378c337714b1ea6756451a1e788 extends Twig_Template
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
        $__internal_b3ba0928ff61598c8e1d7d5b4ef20c398b06d3674a96e0bf048ac027a63044d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ba0928ff61598c8e1d7d5b4ef20c398b06d3674a96e0bf048ac027a63044d0->enter($__internal_b3ba0928ff61598c8e1d7d5b4ef20c398b06d3674a96e0bf048ac027a63044d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_189bf75c44d76017111ceba2d3021b8c1187b48967d15a51649d5c408dc7cf73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189bf75c44d76017111ceba2d3021b8c1187b48967d15a51649d5c408dc7cf73->enter($__internal_189bf75c44d76017111ceba2d3021b8c1187b48967d15a51649d5c408dc7cf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_b3ba0928ff61598c8e1d7d5b4ef20c398b06d3674a96e0bf048ac027a63044d0->leave($__internal_b3ba0928ff61598c8e1d7d5b4ef20c398b06d3674a96e0bf048ac027a63044d0_prof);

        
        $__internal_189bf75c44d76017111ceba2d3021b8c1187b48967d15a51649d5c408dc7cf73->leave($__internal_189bf75c44d76017111ceba2d3021b8c1187b48967d15a51649d5c408dc7cf73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}

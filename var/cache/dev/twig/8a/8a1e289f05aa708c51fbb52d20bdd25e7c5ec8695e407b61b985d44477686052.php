<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_7183c191414e3bd56cd5fcbab8218a31f093d4252e52e1d8a822f4ff9f5e9d8b extends Twig_Template
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
        $__internal_758d71f2d21da0661face2cca50fdf7545e05346d1fc1ef8ff483a1bef59741c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758d71f2d21da0661face2cca50fdf7545e05346d1fc1ef8ff483a1bef59741c->enter($__internal_758d71f2d21da0661face2cca50fdf7545e05346d1fc1ef8ff483a1bef59741c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5de2257b4fdeee8bab2cc4f8539b27ac085441a29a6eec30547ab96d923ac85f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de2257b4fdeee8bab2cc4f8539b27ac085441a29a6eec30547ab96d923ac85f->enter($__internal_5de2257b4fdeee8bab2cc4f8539b27ac085441a29a6eec30547ab96d923ac85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_758d71f2d21da0661face2cca50fdf7545e05346d1fc1ef8ff483a1bef59741c->leave($__internal_758d71f2d21da0661face2cca50fdf7545e05346d1fc1ef8ff483a1bef59741c_prof);

        
        $__internal_5de2257b4fdeee8bab2cc4f8539b27ac085441a29a6eec30547ab96d923ac85f->leave($__internal_5de2257b4fdeee8bab2cc4f8539b27ac085441a29a6eec30547ab96d923ac85f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

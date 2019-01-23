<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_93326da2ba0fa9adaef637d2262fce0aaf8fe1f245424e9c6621ea33d476cbc4 extends Twig_Template
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
        $__internal_d082b92e9a4947ab8bb68ea366e3e538811e7096f722ecdd0d6041d9c8af11b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d082b92e9a4947ab8bb68ea366e3e538811e7096f722ecdd0d6041d9c8af11b6->enter($__internal_d082b92e9a4947ab8bb68ea366e3e538811e7096f722ecdd0d6041d9c8af11b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_c57af3a9a4de41fa9d12f8137b610bd45a3669ceacbf886b7eee9288a887c775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c57af3a9a4de41fa9d12f8137b610bd45a3669ceacbf886b7eee9288a887c775->enter($__internal_c57af3a9a4de41fa9d12f8137b610bd45a3669ceacbf886b7eee9288a887c775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d082b92e9a4947ab8bb68ea366e3e538811e7096f722ecdd0d6041d9c8af11b6->leave($__internal_d082b92e9a4947ab8bb68ea366e3e538811e7096f722ecdd0d6041d9c8af11b6_prof);

        
        $__internal_c57af3a9a4de41fa9d12f8137b610bd45a3669ceacbf886b7eee9288a887c775->leave($__internal_c57af3a9a4de41fa9d12f8137b610bd45a3669ceacbf886b7eee9288a887c775_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

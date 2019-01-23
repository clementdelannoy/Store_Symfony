<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_94fc8a73273ab2ac89af17fec1b941fa53dfe383a370dca65e2821c683ed0c39 extends Twig_Template
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
        $__internal_70ee7b949549f34daa6206416c504dfd180990180c83933557e4a2ebc0ecacb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70ee7b949549f34daa6206416c504dfd180990180c83933557e4a2ebc0ecacb3->enter($__internal_70ee7b949549f34daa6206416c504dfd180990180c83933557e4a2ebc0ecacb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ade9379a0cd2680db8f6f6444f315157eba41208b8c3ca33f440b420bced3adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade9379a0cd2680db8f6f6444f315157eba41208b8c3ca33f440b420bced3adc->enter($__internal_ade9379a0cd2680db8f6f6444f315157eba41208b8c3ca33f440b420bced3adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_70ee7b949549f34daa6206416c504dfd180990180c83933557e4a2ebc0ecacb3->leave($__internal_70ee7b949549f34daa6206416c504dfd180990180c83933557e4a2ebc0ecacb3_prof);

        
        $__internal_ade9379a0cd2680db8f6f6444f315157eba41208b8c3ca33f440b420bced3adc->leave($__internal_ade9379a0cd2680db8f6f6444f315157eba41208b8c3ca33f440b420bced3adc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}

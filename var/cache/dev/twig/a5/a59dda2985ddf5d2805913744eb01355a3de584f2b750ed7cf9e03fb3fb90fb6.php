<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_10a91966ef3a49bce0ccaa17483429c3e6aa8e126befe2e5779e8d33bdfeb460 extends Twig_Template
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
        $__internal_e8f08fa8c25f5e217c5d0382b1cb9c997d6fe4501f2a9c0b1a55470725a9ea0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8f08fa8c25f5e217c5d0382b1cb9c997d6fe4501f2a9c0b1a55470725a9ea0d->enter($__internal_e8f08fa8c25f5e217c5d0382b1cb9c997d6fe4501f2a9c0b1a55470725a9ea0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_926745b23889150dbebe95fa363dccb6198f4d83711fbe1e3fd23c0c3d195d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926745b23889150dbebe95fa363dccb6198f4d83711fbe1e3fd23c0c3d195d84->enter($__internal_926745b23889150dbebe95fa363dccb6198f4d83711fbe1e3fd23c0c3d195d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e8f08fa8c25f5e217c5d0382b1cb9c997d6fe4501f2a9c0b1a55470725a9ea0d->leave($__internal_e8f08fa8c25f5e217c5d0382b1cb9c997d6fe4501f2a9c0b1a55470725a9ea0d_prof);

        
        $__internal_926745b23889150dbebe95fa363dccb6198f4d83711fbe1e3fd23c0c3d195d84->leave($__internal_926745b23889150dbebe95fa363dccb6198f4d83711fbe1e3fd23c0c3d195d84_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

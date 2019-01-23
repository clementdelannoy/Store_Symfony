<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e67b2e19843cd5dc4f0db64230097206af910446fe1550c27d7f865f6522e8e5 extends Twig_Template
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
        $__internal_a6c4a0fa4b2a8f3b5f4bc7e6e98b4660a8c1e7bc24a17808c202b51a5742ca28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6c4a0fa4b2a8f3b5f4bc7e6e98b4660a8c1e7bc24a17808c202b51a5742ca28->enter($__internal_a6c4a0fa4b2a8f3b5f4bc7e6e98b4660a8c1e7bc24a17808c202b51a5742ca28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_cc4ff3febfa487ea5ca9b1f9e8158cce91ae636018111a908542fc80ccda2a88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc4ff3febfa487ea5ca9b1f9e8158cce91ae636018111a908542fc80ccda2a88->enter($__internal_cc4ff3febfa487ea5ca9b1f9e8158cce91ae636018111a908542fc80ccda2a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a6c4a0fa4b2a8f3b5f4bc7e6e98b4660a8c1e7bc24a17808c202b51a5742ca28->leave($__internal_a6c4a0fa4b2a8f3b5f4bc7e6e98b4660a8c1e7bc24a17808c202b51a5742ca28_prof);

        
        $__internal_cc4ff3febfa487ea5ca9b1f9e8158cce91ae636018111a908542fc80ccda2a88->leave($__internal_cc4ff3febfa487ea5ca9b1f9e8158cce91ae636018111a908542fc80ccda2a88_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}

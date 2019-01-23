<?php

/* form_table_layout.html.twig */
class __TwigTemplate_99e69a41f664ead503bce8b4b2fa92cd218c44a97dd163eee9301a28c0b42d26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_230b6d2ec715a8c3c5c30ab79c1f48db8750083d0847ade117564fa54298e4fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_230b6d2ec715a8c3c5c30ab79c1f48db8750083d0847ade117564fa54298e4fb->enter($__internal_230b6d2ec715a8c3c5c30ab79c1f48db8750083d0847ade117564fa54298e4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_f1f625b84db963f8c4ce26a2a6ea64de94c9093acf718b6b94babf570baa6c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f625b84db963f8c4ce26a2a6ea64de94c9093acf718b6b94babf570baa6c42->enter($__internal_f1f625b84db963f8c4ce26a2a6ea64de94c9093acf718b6b94babf570baa6c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_230b6d2ec715a8c3c5c30ab79c1f48db8750083d0847ade117564fa54298e4fb->leave($__internal_230b6d2ec715a8c3c5c30ab79c1f48db8750083d0847ade117564fa54298e4fb_prof);

        
        $__internal_f1f625b84db963f8c4ce26a2a6ea64de94c9093acf718b6b94babf570baa6c42->leave($__internal_f1f625b84db963f8c4ce26a2a6ea64de94c9093acf718b6b94babf570baa6c42_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b5894474de753f3a9c024a6c08e2491dd44d7e24889b91e22bedd7c0d3463ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5894474de753f3a9c024a6c08e2491dd44d7e24889b91e22bedd7c0d3463ec7->enter($__internal_b5894474de753f3a9c024a6c08e2491dd44d7e24889b91e22bedd7c0d3463ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_0267db945a90f45ba51dc050796cd6fbf0da34f552780163a61e391f5a5f752d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0267db945a90f45ba51dc050796cd6fbf0da34f552780163a61e391f5a5f752d->enter($__internal_0267db945a90f45ba51dc050796cd6fbf0da34f552780163a61e391f5a5f752d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_0267db945a90f45ba51dc050796cd6fbf0da34f552780163a61e391f5a5f752d->leave($__internal_0267db945a90f45ba51dc050796cd6fbf0da34f552780163a61e391f5a5f752d_prof);

        
        $__internal_b5894474de753f3a9c024a6c08e2491dd44d7e24889b91e22bedd7c0d3463ec7->leave($__internal_b5894474de753f3a9c024a6c08e2491dd44d7e24889b91e22bedd7c0d3463ec7_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_d8e19463170ace9dcc71e217618c91e79ce73673fb09bd9ef86d5bc30adc9c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8e19463170ace9dcc71e217618c91e79ce73673fb09bd9ef86d5bc30adc9c94->enter($__internal_d8e19463170ace9dcc71e217618c91e79ce73673fb09bd9ef86d5bc30adc9c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_876f1ea7b893d11e432c0249259c5b8de404ba56db8e920ad2fff932d2fc2a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876f1ea7b893d11e432c0249259c5b8de404ba56db8e920ad2fff932d2fc2a6c->enter($__internal_876f1ea7b893d11e432c0249259c5b8de404ba56db8e920ad2fff932d2fc2a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_876f1ea7b893d11e432c0249259c5b8de404ba56db8e920ad2fff932d2fc2a6c->leave($__internal_876f1ea7b893d11e432c0249259c5b8de404ba56db8e920ad2fff932d2fc2a6c_prof);

        
        $__internal_d8e19463170ace9dcc71e217618c91e79ce73673fb09bd9ef86d5bc30adc9c94->leave($__internal_d8e19463170ace9dcc71e217618c91e79ce73673fb09bd9ef86d5bc30adc9c94_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_f477fe3ca3884551f847684379ae58cb68f4c88e1f5d89da3f509ce566ff98d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f477fe3ca3884551f847684379ae58cb68f4c88e1f5d89da3f509ce566ff98d5->enter($__internal_f477fe3ca3884551f847684379ae58cb68f4c88e1f5d89da3f509ce566ff98d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_1261f292dd7e566a2e2f202256d1cb41b7db875a57e42c0459186f9a4c97b9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1261f292dd7e566a2e2f202256d1cb41b7db875a57e42c0459186f9a4c97b9da->enter($__internal_1261f292dd7e566a2e2f202256d1cb41b7db875a57e42c0459186f9a4c97b9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_1261f292dd7e566a2e2f202256d1cb41b7db875a57e42c0459186f9a4c97b9da->leave($__internal_1261f292dd7e566a2e2f202256d1cb41b7db875a57e42c0459186f9a4c97b9da_prof);

        
        $__internal_f477fe3ca3884551f847684379ae58cb68f4c88e1f5d89da3f509ce566ff98d5->leave($__internal_f477fe3ca3884551f847684379ae58cb68f4c88e1f5d89da3f509ce566ff98d5_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_18378bdf3ac1e359359dfe38c0f679f5f667fa3af539c032c728d19696d8201c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18378bdf3ac1e359359dfe38c0f679f5f667fa3af539c032c728d19696d8201c->enter($__internal_18378bdf3ac1e359359dfe38c0f679f5f667fa3af539c032c728d19696d8201c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_82e17e0f9a3ea1aed58ce66a0a800e5d31eb957e60022d76e1ad876f2c6ff85c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82e17e0f9a3ea1aed58ce66a0a800e5d31eb957e60022d76e1ad876f2c6ff85c->enter($__internal_82e17e0f9a3ea1aed58ce66a0a800e5d31eb957e60022d76e1ad876f2c6ff85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_82e17e0f9a3ea1aed58ce66a0a800e5d31eb957e60022d76e1ad876f2c6ff85c->leave($__internal_82e17e0f9a3ea1aed58ce66a0a800e5d31eb957e60022d76e1ad876f2c6ff85c_prof);

        
        $__internal_18378bdf3ac1e359359dfe38c0f679f5f667fa3af539c032c728d19696d8201c->leave($__internal_18378bdf3ac1e359359dfe38c0f679f5f667fa3af539c032c728d19696d8201c_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}

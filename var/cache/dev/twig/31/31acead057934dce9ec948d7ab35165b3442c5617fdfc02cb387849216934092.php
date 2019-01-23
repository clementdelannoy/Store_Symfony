<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_b52889b5debdb1515c2a42998845fa2298d43f2dd288ded4f4221ce1d0c2d3e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7ea58490a0f1bbdd626d145c06ae05776ce5a06133b39b779ffcecf1823a5ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7ea58490a0f1bbdd626d145c06ae05776ce5a06133b39b779ffcecf1823a5ad->enter($__internal_f7ea58490a0f1bbdd626d145c06ae05776ce5a06133b39b779ffcecf1823a5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_ce308cef966e5180c2d06516db1d406fb393bcd1859e16be585ed5f363105a82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce308cef966e5180c2d06516db1d406fb393bcd1859e16be585ed5f363105a82->enter($__internal_ce308cef966e5180c2d06516db1d406fb393bcd1859e16be585ed5f363105a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_f7ea58490a0f1bbdd626d145c06ae05776ce5a06133b39b779ffcecf1823a5ad->leave($__internal_f7ea58490a0f1bbdd626d145c06ae05776ce5a06133b39b779ffcecf1823a5ad_prof);

        
        $__internal_ce308cef966e5180c2d06516db1d406fb393bcd1859e16be585ed5f363105a82->leave($__internal_ce308cef966e5180c2d06516db1d406fb393bcd1859e16be585ed5f363105a82_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2388d10514d0459a53da0853c934a404547807f0459fbb0125763eeb91dfbab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2388d10514d0459a53da0853c934a404547807f0459fbb0125763eeb91dfbab3->enter($__internal_2388d10514d0459a53da0853c934a404547807f0459fbb0125763eeb91dfbab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_f0154841b8db1666f4e7a774def2a870e5cebad5cb368748da6f936d40f418f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0154841b8db1666f4e7a774def2a870e5cebad5cb368748da6f936d40f418f3->enter($__internal_f0154841b8db1666f4e7a774def2a870e5cebad5cb368748da6f936d40f418f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_f0154841b8db1666f4e7a774def2a870e5cebad5cb368748da6f936d40f418f3->leave($__internal_f0154841b8db1666f4e7a774def2a870e5cebad5cb368748da6f936d40f418f3_prof);

        
        $__internal_2388d10514d0459a53da0853c934a404547807f0459fbb0125763eeb91dfbab3->leave($__internal_2388d10514d0459a53da0853c934a404547807f0459fbb0125763eeb91dfbab3_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_bbef49d3c6f245119f42f553b361ded2bd9225233557ce089b33405989c34be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbef49d3c6f245119f42f553b361ded2bd9225233557ce089b33405989c34be7->enter($__internal_bbef49d3c6f245119f42f553b361ded2bd9225233557ce089b33405989c34be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0bf935a52c0a06fadb86a4701477e905e83f006563f093a9c0615ad00979f395 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf935a52c0a06fadb86a4701477e905e83f006563f093a9c0615ad00979f395->enter($__internal_0bf935a52c0a06fadb86a4701477e905e83f006563f093a9c0615ad00979f395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_0bf935a52c0a06fadb86a4701477e905e83f006563f093a9c0615ad00979f395->leave($__internal_0bf935a52c0a06fadb86a4701477e905e83f006563f093a9c0615ad00979f395_prof);

        
        $__internal_bbef49d3c6f245119f42f553b361ded2bd9225233557ce089b33405989c34be7->leave($__internal_bbef49d3c6f245119f42f553b361ded2bd9225233557ce089b33405989c34be7_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_26adb9031060d8faffb021e1636355de4329dadc66077f71ab1477c79de5f014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26adb9031060d8faffb021e1636355de4329dadc66077f71ab1477c79de5f014->enter($__internal_26adb9031060d8faffb021e1636355de4329dadc66077f71ab1477c79de5f014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_8a2f5465b22b2383fa879da63253a0aac36544a379ed12ac8a67cd9266e4b2b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a2f5465b22b2383fa879da63253a0aac36544a379ed12ac8a67cd9266e4b2b7->enter($__internal_8a2f5465b22b2383fa879da63253a0aac36544a379ed12ac8a67cd9266e4b2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_8a2f5465b22b2383fa879da63253a0aac36544a379ed12ac8a67cd9266e4b2b7->leave($__internal_8a2f5465b22b2383fa879da63253a0aac36544a379ed12ac8a67cd9266e4b2b7_prof);

        
        $__internal_26adb9031060d8faffb021e1636355de4329dadc66077f71ab1477c79de5f014->leave($__internal_26adb9031060d8faffb021e1636355de4329dadc66077f71ab1477c79de5f014_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ddf472ae002fd99cae17474885710e9fc3e1c9cd76d02cd9bb0cde4d5e76e0db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf472ae002fd99cae17474885710e9fc3e1c9cd76d02cd9bb0cde4d5e76e0db->enter($__internal_ddf472ae002fd99cae17474885710e9fc3e1c9cd76d02cd9bb0cde4d5e76e0db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3b6e192f2c41e7fe0d48e0a231e0671e6bb6ddfd1fdf0c08cb007249ef8b2c92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b6e192f2c41e7fe0d48e0a231e0671e6bb6ddfd1fdf0c08cb007249ef8b2c92->enter($__internal_3b6e192f2c41e7fe0d48e0a231e0671e6bb6ddfd1fdf0c08cb007249ef8b2c92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_3b6e192f2c41e7fe0d48e0a231e0671e6bb6ddfd1fdf0c08cb007249ef8b2c92->leave($__internal_3b6e192f2c41e7fe0d48e0a231e0671e6bb6ddfd1fdf0c08cb007249ef8b2c92_prof);

        
        $__internal_ddf472ae002fd99cae17474885710e9fc3e1c9cd76d02cd9bb0cde4d5e76e0db->leave($__internal_ddf472ae002fd99cae17474885710e9fc3e1c9cd76d02cd9bb0cde4d5e76e0db_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_4083eb43992f6a9c6edcde63765f71e12824f46c431fa153eecd485110044fae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4083eb43992f6a9c6edcde63765f71e12824f46c431fa153eecd485110044fae->enter($__internal_4083eb43992f6a9c6edcde63765f71e12824f46c431fa153eecd485110044fae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_0064eb7c52d7ef2bd31c82e33a90cf4edebdcce00811a213378255df68a48164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0064eb7c52d7ef2bd31c82e33a90cf4edebdcce00811a213378255df68a48164->enter($__internal_0064eb7c52d7ef2bd31c82e33a90cf4edebdcce00811a213378255df68a48164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_0064eb7c52d7ef2bd31c82e33a90cf4edebdcce00811a213378255df68a48164->leave($__internal_0064eb7c52d7ef2bd31c82e33a90cf4edebdcce00811a213378255df68a48164_prof);

        
        $__internal_4083eb43992f6a9c6edcde63765f71e12824f46c431fa153eecd485110044fae->leave($__internal_4083eb43992f6a9c6edcde63765f71e12824f46c431fa153eecd485110044fae_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_10de2117959ce8e7b9108c0956af4d820532dede45f11f8982468ce19fd0b6b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10de2117959ce8e7b9108c0956af4d820532dede45f11f8982468ce19fd0b6b0->enter($__internal_10de2117959ce8e7b9108c0956af4d820532dede45f11f8982468ce19fd0b6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_d53a27fbc0bc8187eb4765028c20817e8e693f91cbd53e8008c076d4941db60c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53a27fbc0bc8187eb4765028c20817e8e693f91cbd53e8008c076d4941db60c->enter($__internal_d53a27fbc0bc8187eb4765028c20817e8e693f91cbd53e8008c076d4941db60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_d53a27fbc0bc8187eb4765028c20817e8e693f91cbd53e8008c076d4941db60c->leave($__internal_d53a27fbc0bc8187eb4765028c20817e8e693f91cbd53e8008c076d4941db60c_prof);

        
        $__internal_10de2117959ce8e7b9108c0956af4d820532dede45f11f8982468ce19fd0b6b0->leave($__internal_10de2117959ce8e7b9108c0956af4d820532dede45f11f8982468ce19fd0b6b0_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_1c9acf5f80e024e5cd98e131b602c03c85ab1251082cb6f9b1b4731def3d8ef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c9acf5f80e024e5cd98e131b602c03c85ab1251082cb6f9b1b4731def3d8ef3->enter($__internal_1c9acf5f80e024e5cd98e131b602c03c85ab1251082cb6f9b1b4731def3d8ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_530e5c0d00009934ad3728b8bfa74f33ae9253d8f607eed2cba463f3c2ede760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_530e5c0d00009934ad3728b8bfa74f33ae9253d8f607eed2cba463f3c2ede760->enter($__internal_530e5c0d00009934ad3728b8bfa74f33ae9253d8f607eed2cba463f3c2ede760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_530e5c0d00009934ad3728b8bfa74f33ae9253d8f607eed2cba463f3c2ede760->leave($__internal_530e5c0d00009934ad3728b8bfa74f33ae9253d8f607eed2cba463f3c2ede760_prof);

        
        $__internal_1c9acf5f80e024e5cd98e131b602c03c85ab1251082cb6f9b1b4731def3d8ef3->leave($__internal_1c9acf5f80e024e5cd98e131b602c03c85ab1251082cb6f9b1b4731def3d8ef3_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_fcabb83fbf231f3ee800ca007e9dbcd92268ebc5526c9ccd20e6f2edec6a3f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcabb83fbf231f3ee800ca007e9dbcd92268ebc5526c9ccd20e6f2edec6a3f08->enter($__internal_fcabb83fbf231f3ee800ca007e9dbcd92268ebc5526c9ccd20e6f2edec6a3f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_a829cba0adc912640668f192e347c4bab9b3f736f2e497548e3ec9cc60affd37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a829cba0adc912640668f192e347c4bab9b3f736f2e497548e3ec9cc60affd37->enter($__internal_a829cba0adc912640668f192e347c4bab9b3f736f2e497548e3ec9cc60affd37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_a829cba0adc912640668f192e347c4bab9b3f736f2e497548e3ec9cc60affd37->leave($__internal_a829cba0adc912640668f192e347c4bab9b3f736f2e497548e3ec9cc60affd37_prof);

        
        $__internal_fcabb83fbf231f3ee800ca007e9dbcd92268ebc5526c9ccd20e6f2edec6a3f08->leave($__internal_fcabb83fbf231f3ee800ca007e9dbcd92268ebc5526c9ccd20e6f2edec6a3f08_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}

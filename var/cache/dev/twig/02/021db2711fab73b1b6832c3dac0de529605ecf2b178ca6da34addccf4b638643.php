<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_c36e2ff4214dde4a3848d92090b75861a44329ff25e75a763864554b6bf01b95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15f007d4e28c2b367cdf4e2e343874853a5eec06ec3c10ef22994b7efa0a6411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f007d4e28c2b367cdf4e2e343874853a5eec06ec3c10ef22994b7efa0a6411->enter($__internal_15f007d4e28c2b367cdf4e2e343874853a5eec06ec3c10ef22994b7efa0a6411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_27c06e7854a282f693a2d60f90b4f27d14c295a6f6b6b141fbb38f5f6e201b45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c06e7854a282f693a2d60f90b4f27d14c295a6f6b6b141fbb38f5f6e201b45->enter($__internal_27c06e7854a282f693a2d60f90b4f27d14c295a6f6b6b141fbb38f5f6e201b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15f007d4e28c2b367cdf4e2e343874853a5eec06ec3c10ef22994b7efa0a6411->leave($__internal_15f007d4e28c2b367cdf4e2e343874853a5eec06ec3c10ef22994b7efa0a6411_prof);

        
        $__internal_27c06e7854a282f693a2d60f90b4f27d14c295a6f6b6b141fbb38f5f6e201b45->leave($__internal_27c06e7854a282f693a2d60f90b4f27d14c295a6f6b6b141fbb38f5f6e201b45_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_0dbf91a978c83987c104b23db6017a659e9fa131d3d5bb176b091b226df8e9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dbf91a978c83987c104b23db6017a659e9fa131d3d5bb176b091b226df8e9a1->enter($__internal_0dbf91a978c83987c104b23db6017a659e9fa131d3d5bb176b091b226df8e9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_2397a29b57996b3d1e56e956cc0f7b506925330f2de89c20a4b37b4e0c069d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2397a29b57996b3d1e56e956cc0f7b506925330f2de89c20a4b37b4e0c069d79->enter($__internal_2397a29b57996b3d1e56e956cc0f7b506925330f2de89c20a4b37b4e0c069d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2397a29b57996b3d1e56e956cc0f7b506925330f2de89c20a4b37b4e0c069d79->leave($__internal_2397a29b57996b3d1e56e956cc0f7b506925330f2de89c20a4b37b4e0c069d79_prof);

        
        $__internal_0dbf91a978c83987c104b23db6017a659e9fa131d3d5bb176b091b226df8e9a1->leave($__internal_0dbf91a978c83987c104b23db6017a659e9fa131d3d5bb176b091b226df8e9a1_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_bf291003d30d9c46edd71510e95e6927d4ea2cc652f83e36fbda9f21e54fc981 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf291003d30d9c46edd71510e95e6927d4ea2cc652f83e36fbda9f21e54fc981->enter($__internal_bf291003d30d9c46edd71510e95e6927d4ea2cc652f83e36fbda9f21e54fc981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_94d86d7cb4252a4025d2cc39c84e44a669c66773888fcc83e533115d4ad1e817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d86d7cb4252a4025d2cc39c84e44a669c66773888fcc83e533115d4ad1e817->enter($__internal_94d86d7cb4252a4025d2cc39c84e44a669c66773888fcc83e533115d4ad1e817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_94d86d7cb4252a4025d2cc39c84e44a669c66773888fcc83e533115d4ad1e817->leave($__internal_94d86d7cb4252a4025d2cc39c84e44a669c66773888fcc83e533115d4ad1e817_prof);

        
        $__internal_bf291003d30d9c46edd71510e95e6927d4ea2cc652f83e36fbda9f21e54fc981->leave($__internal_bf291003d30d9c46edd71510e95e6927d4ea2cc652f83e36fbda9f21e54fc981_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ac1523d0eacb9d2f78fd4acb9028c8c0bf155220f46330594fed488f0edf9f49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac1523d0eacb9d2f78fd4acb9028c8c0bf155220f46330594fed488f0edf9f49->enter($__internal_ac1523d0eacb9d2f78fd4acb9028c8c0bf155220f46330594fed488f0edf9f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_255df3af2cc39e853172dd86034cdad8e88b3eec90811cee357614e4e6bbd444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255df3af2cc39e853172dd86034cdad8e88b3eec90811cee357614e4e6bbd444->enter($__internal_255df3af2cc39e853172dd86034cdad8e88b3eec90811cee357614e4e6bbd444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_255df3af2cc39e853172dd86034cdad8e88b3eec90811cee357614e4e6bbd444->leave($__internal_255df3af2cc39e853172dd86034cdad8e88b3eec90811cee357614e4e6bbd444_prof);

        
        $__internal_ac1523d0eacb9d2f78fd4acb9028c8c0bf155220f46330594fed488f0edf9f49->leave($__internal_ac1523d0eacb9d2f78fd4acb9028c8c0bf155220f46330594fed488f0edf9f49_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_613642fcaed11d780bd3e9693a6c36760a6ef46de7a1288bbb2ecde5dd3e3852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613642fcaed11d780bd3e9693a6c36760a6ef46de7a1288bbb2ecde5dd3e3852->enter($__internal_613642fcaed11d780bd3e9693a6c36760a6ef46de7a1288bbb2ecde5dd3e3852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_cbc4ef6e4249c01884e747332904ab698b8e074d226fa0926e624f8e1a355200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbc4ef6e4249c01884e747332904ab698b8e074d226fa0926e624f8e1a355200->enter($__internal_cbc4ef6e4249c01884e747332904ab698b8e074d226fa0926e624f8e1a355200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_cbc4ef6e4249c01884e747332904ab698b8e074d226fa0926e624f8e1a355200->leave($__internal_cbc4ef6e4249c01884e747332904ab698b8e074d226fa0926e624f8e1a355200_prof);

        
        $__internal_613642fcaed11d780bd3e9693a6c36760a6ef46de7a1288bbb2ecde5dd3e3852->leave($__internal_613642fcaed11d780bd3e9693a6c36760a6ef46de7a1288bbb2ecde5dd3e3852_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_0fa2687609533ac9612e03f8ba43ba7f22be8e872de503f923228bd7e989e7ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa2687609533ac9612e03f8ba43ba7f22be8e872de503f923228bd7e989e7ce->enter($__internal_0fa2687609533ac9612e03f8ba43ba7f22be8e872de503f923228bd7e989e7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_fdf7dc75a80c5906a8ae3225b0dfcd9bbabe593b77eb1a561aee35e2e9e47290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf7dc75a80c5906a8ae3225b0dfcd9bbabe593b77eb1a561aee35e2e9e47290->enter($__internal_fdf7dc75a80c5906a8ae3225b0dfcd9bbabe593b77eb1a561aee35e2e9e47290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_fdf7dc75a80c5906a8ae3225b0dfcd9bbabe593b77eb1a561aee35e2e9e47290->leave($__internal_fdf7dc75a80c5906a8ae3225b0dfcd9bbabe593b77eb1a561aee35e2e9e47290_prof);

        
        $__internal_0fa2687609533ac9612e03f8ba43ba7f22be8e872de503f923228bd7e989e7ce->leave($__internal_0fa2687609533ac9612e03f8ba43ba7f22be8e872de503f923228bd7e989e7ce_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_984bed43ad0245d0115569cd16e23635474cb2d16c379490f7f2352091fd0c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_984bed43ad0245d0115569cd16e23635474cb2d16c379490f7f2352091fd0c68->enter($__internal_984bed43ad0245d0115569cd16e23635474cb2d16c379490f7f2352091fd0c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_fa7a0c3f469bac1e6363c2d12ef6ba89bede2d681f0455e9aaee14b6ec51e1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7a0c3f469bac1e6363c2d12ef6ba89bede2d681f0455e9aaee14b6ec51e1a8->enter($__internal_fa7a0c3f469bac1e6363c2d12ef6ba89bede2d681f0455e9aaee14b6ec51e1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_fa7a0c3f469bac1e6363c2d12ef6ba89bede2d681f0455e9aaee14b6ec51e1a8->leave($__internal_fa7a0c3f469bac1e6363c2d12ef6ba89bede2d681f0455e9aaee14b6ec51e1a8_prof);

        
        $__internal_984bed43ad0245d0115569cd16e23635474cb2d16c379490f7f2352091fd0c68->leave($__internal_984bed43ad0245d0115569cd16e23635474cb2d16c379490f7f2352091fd0c68_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_f01ae2b1f2c6141963559d71431370a3d020289ca6e55e8425866b2c1240887a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f01ae2b1f2c6141963559d71431370a3d020289ca6e55e8425866b2c1240887a->enter($__internal_f01ae2b1f2c6141963559d71431370a3d020289ca6e55e8425866b2c1240887a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_7d6e3b46e87158b7e289d207af052fa032bff745cf882e81a74d180ba7c8aa80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d6e3b46e87158b7e289d207af052fa032bff745cf882e81a74d180ba7c8aa80->enter($__internal_7d6e3b46e87158b7e289d207af052fa032bff745cf882e81a74d180ba7c8aa80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_7d6e3b46e87158b7e289d207af052fa032bff745cf882e81a74d180ba7c8aa80->leave($__internal_7d6e3b46e87158b7e289d207af052fa032bff745cf882e81a74d180ba7c8aa80_prof);

        
        $__internal_f01ae2b1f2c6141963559d71431370a3d020289ca6e55e8425866b2c1240887a->leave($__internal_f01ae2b1f2c6141963559d71431370a3d020289ca6e55e8425866b2c1240887a_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_029f67da2423607c35202018e9e74e402f53198ad14ea576243c6e12aac7619e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_029f67da2423607c35202018e9e74e402f53198ad14ea576243c6e12aac7619e->enter($__internal_029f67da2423607c35202018e9e74e402f53198ad14ea576243c6e12aac7619e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_4e2eaec9957952bf4d79d82bcc1f40ac7b8c9f1b6a0e9bfaeb8282a1efe15ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e2eaec9957952bf4d79d82bcc1f40ac7b8c9f1b6a0e9bfaeb8282a1efe15ff4->enter($__internal_4e2eaec9957952bf4d79d82bcc1f40ac7b8c9f1b6a0e9bfaeb8282a1efe15ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_4e2eaec9957952bf4d79d82bcc1f40ac7b8c9f1b6a0e9bfaeb8282a1efe15ff4->leave($__internal_4e2eaec9957952bf4d79d82bcc1f40ac7b8c9f1b6a0e9bfaeb8282a1efe15ff4_prof);

        
        $__internal_029f67da2423607c35202018e9e74e402f53198ad14ea576243c6e12aac7619e->leave($__internal_029f67da2423607c35202018e9e74e402f53198ad14ea576243c6e12aac7619e_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_af1e66e02b5e00039c4b0b5460915272acd23825bd10b583d812a388266afcdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af1e66e02b5e00039c4b0b5460915272acd23825bd10b583d812a388266afcdb->enter($__internal_af1e66e02b5e00039c4b0b5460915272acd23825bd10b583d812a388266afcdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_31a0cee27d2b2a859e82b065e988b71649f4cf0cc6e3124377664968bdf6d9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a0cee27d2b2a859e82b065e988b71649f4cf0cc6e3124377664968bdf6d9f2->enter($__internal_31a0cee27d2b2a859e82b065e988b71649f4cf0cc6e3124377664968bdf6d9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_31a0cee27d2b2a859e82b065e988b71649f4cf0cc6e3124377664968bdf6d9f2->leave($__internal_31a0cee27d2b2a859e82b065e988b71649f4cf0cc6e3124377664968bdf6d9f2_prof);

        
        $__internal_af1e66e02b5e00039c4b0b5460915272acd23825bd10b583d812a388266afcdb->leave($__internal_af1e66e02b5e00039c4b0b5460915272acd23825bd10b583d812a388266afcdb_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_3682a35bc3e0378c128cff7a879bb1ce5f9e75d5e85ed69c8f632db239df3ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3682a35bc3e0378c128cff7a879bb1ce5f9e75d5e85ed69c8f632db239df3ef8->enter($__internal_3682a35bc3e0378c128cff7a879bb1ce5f9e75d5e85ed69c8f632db239df3ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_90d5b187555a98ccf90c5b46f49d9d6a24e04ea40bf9301132078132208b705f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90d5b187555a98ccf90c5b46f49d9d6a24e04ea40bf9301132078132208b705f->enter($__internal_90d5b187555a98ccf90c5b46f49d9d6a24e04ea40bf9301132078132208b705f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_90d5b187555a98ccf90c5b46f49d9d6a24e04ea40bf9301132078132208b705f->leave($__internal_90d5b187555a98ccf90c5b46f49d9d6a24e04ea40bf9301132078132208b705f_prof);

        
        $__internal_3682a35bc3e0378c128cff7a879bb1ce5f9e75d5e85ed69c8f632db239df3ef8->leave($__internal_3682a35bc3e0378c128cff7a879bb1ce5f9e75d5e85ed69c8f632db239df3ef8_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_a23c547a296bb085f81a1d3b9174eebd40d006411b34e76d5a6bf2f058b2273c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a23c547a296bb085f81a1d3b9174eebd40d006411b34e76d5a6bf2f058b2273c->enter($__internal_a23c547a296bb085f81a1d3b9174eebd40d006411b34e76d5a6bf2f058b2273c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_ef9b7f463338398040bf9f1b268524246b173172b5f6b4df6846e3241783c967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef9b7f463338398040bf9f1b268524246b173172b5f6b4df6846e3241783c967->enter($__internal_ef9b7f463338398040bf9f1b268524246b173172b5f6b4df6846e3241783c967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_ef9b7f463338398040bf9f1b268524246b173172b5f6b4df6846e3241783c967->leave($__internal_ef9b7f463338398040bf9f1b268524246b173172b5f6b4df6846e3241783c967_prof);

        
        $__internal_a23c547a296bb085f81a1d3b9174eebd40d006411b34e76d5a6bf2f058b2273c->leave($__internal_a23c547a296bb085f81a1d3b9174eebd40d006411b34e76d5a6bf2f058b2273c_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_21853ff8de7604c181b41173c7c73c66de00910972d37d6e329ae41044ded668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21853ff8de7604c181b41173c7c73c66de00910972d37d6e329ae41044ded668->enter($__internal_21853ff8de7604c181b41173c7c73c66de00910972d37d6e329ae41044ded668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_cb4826b42bc6230b5afe6e1ceda6a3d8c3e5282396ac329650a6e4c18418380e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4826b42bc6230b5afe6e1ceda6a3d8c3e5282396ac329650a6e4c18418380e->enter($__internal_cb4826b42bc6230b5afe6e1ceda6a3d8c3e5282396ac329650a6e4c18418380e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_cb4826b42bc6230b5afe6e1ceda6a3d8c3e5282396ac329650a6e4c18418380e->leave($__internal_cb4826b42bc6230b5afe6e1ceda6a3d8c3e5282396ac329650a6e4c18418380e_prof);

        
        $__internal_21853ff8de7604c181b41173c7c73c66de00910972d37d6e329ae41044ded668->leave($__internal_21853ff8de7604c181b41173c7c73c66de00910972d37d6e329ae41044ded668_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_c0a5ce9f8aaa4e3e733688a9839ec9063eb72ac53c3de8aa4f1ebbe3d835796b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0a5ce9f8aaa4e3e733688a9839ec9063eb72ac53c3de8aa4f1ebbe3d835796b->enter($__internal_c0a5ce9f8aaa4e3e733688a9839ec9063eb72ac53c3de8aa4f1ebbe3d835796b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_ff7fe9027e8606581f794f2d154e2ad29e5a8845ad6cad462f76dc849ae35615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff7fe9027e8606581f794f2d154e2ad29e5a8845ad6cad462f76dc849ae35615->enter($__internal_ff7fe9027e8606581f794f2d154e2ad29e5a8845ad6cad462f76dc849ae35615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_ff7fe9027e8606581f794f2d154e2ad29e5a8845ad6cad462f76dc849ae35615->leave($__internal_ff7fe9027e8606581f794f2d154e2ad29e5a8845ad6cad462f76dc849ae35615_prof);

        
        $__internal_c0a5ce9f8aaa4e3e733688a9839ec9063eb72ac53c3de8aa4f1ebbe3d835796b->leave($__internal_c0a5ce9f8aaa4e3e733688a9839ec9063eb72ac53c3de8aa4f1ebbe3d835796b_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_c75bebd0eddcdf81f4275f303215d9ca778b31d8ca5c2509e772af29d65524c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c75bebd0eddcdf81f4275f303215d9ca778b31d8ca5c2509e772af29d65524c3->enter($__internal_c75bebd0eddcdf81f4275f303215d9ca778b31d8ca5c2509e772af29d65524c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_846875988ae15a682445103af357e81daeca4c6a80af58ab2a1472831853c6f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_846875988ae15a682445103af357e81daeca4c6a80af58ab2a1472831853c6f1->enter($__internal_846875988ae15a682445103af357e81daeca4c6a80af58ab2a1472831853c6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_846875988ae15a682445103af357e81daeca4c6a80af58ab2a1472831853c6f1->leave($__internal_846875988ae15a682445103af357e81daeca4c6a80af58ab2a1472831853c6f1_prof);

        
        $__internal_c75bebd0eddcdf81f4275f303215d9ca778b31d8ca5c2509e772af29d65524c3->leave($__internal_c75bebd0eddcdf81f4275f303215d9ca778b31d8ca5c2509e772af29d65524c3_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a28de57a769dcd8f044e7b6b33ab82efa62a31380d9398c9b3162469b2afc3cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a28de57a769dcd8f044e7b6b33ab82efa62a31380d9398c9b3162469b2afc3cf->enter($__internal_a28de57a769dcd8f044e7b6b33ab82efa62a31380d9398c9b3162469b2afc3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_e151212b45f6021738841a8519903bcaa0e7bea208a08634df898e2466632b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e151212b45f6021738841a8519903bcaa0e7bea208a08634df898e2466632b9a->enter($__internal_e151212b45f6021738841a8519903bcaa0e7bea208a08634df898e2466632b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e151212b45f6021738841a8519903bcaa0e7bea208a08634df898e2466632b9a->leave($__internal_e151212b45f6021738841a8519903bcaa0e7bea208a08634df898e2466632b9a_prof);

        
        $__internal_a28de57a769dcd8f044e7b6b33ab82efa62a31380d9398c9b3162469b2afc3cf->leave($__internal_a28de57a769dcd8f044e7b6b33ab82efa62a31380d9398c9b3162469b2afc3cf_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_cead937e3532515fe1da7db2fe179bffbfa35f4d9e4fb7ad19a4e8dd3655de25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cead937e3532515fe1da7db2fe179bffbfa35f4d9e4fb7ad19a4e8dd3655de25->enter($__internal_cead937e3532515fe1da7db2fe179bffbfa35f4d9e4fb7ad19a4e8dd3655de25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_06a3c2a542cd14a2dbabfb2fd8751e07862d1f540e2cbcfab62e432d561b179c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06a3c2a542cd14a2dbabfb2fd8751e07862d1f540e2cbcfab62e432d561b179c->enter($__internal_06a3c2a542cd14a2dbabfb2fd8751e07862d1f540e2cbcfab62e432d561b179c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_06a3c2a542cd14a2dbabfb2fd8751e07862d1f540e2cbcfab62e432d561b179c->leave($__internal_06a3c2a542cd14a2dbabfb2fd8751e07862d1f540e2cbcfab62e432d561b179c_prof);

        
        $__internal_cead937e3532515fe1da7db2fe179bffbfa35f4d9e4fb7ad19a4e8dd3655de25->leave($__internal_cead937e3532515fe1da7db2fe179bffbfa35f4d9e4fb7ad19a4e8dd3655de25_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_0127c8f85e2d56a575d4a42b5f1778cc97c7f838757c2996f11956f52bb66587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0127c8f85e2d56a575d4a42b5f1778cc97c7f838757c2996f11956f52bb66587->enter($__internal_0127c8f85e2d56a575d4a42b5f1778cc97c7f838757c2996f11956f52bb66587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_dcb0f157890c02fd3bf29fb9e2ff7895fa5c918a82abaf71ad3d895e6e3bfbc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb0f157890c02fd3bf29fb9e2ff7895fa5c918a82abaf71ad3d895e6e3bfbc0->enter($__internal_dcb0f157890c02fd3bf29fb9e2ff7895fa5c918a82abaf71ad3d895e6e3bfbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_dcb0f157890c02fd3bf29fb9e2ff7895fa5c918a82abaf71ad3d895e6e3bfbc0->leave($__internal_dcb0f157890c02fd3bf29fb9e2ff7895fa5c918a82abaf71ad3d895e6e3bfbc0_prof);

        
        $__internal_0127c8f85e2d56a575d4a42b5f1778cc97c7f838757c2996f11956f52bb66587->leave($__internal_0127c8f85e2d56a575d4a42b5f1778cc97c7f838757c2996f11956f52bb66587_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_817f8b2664638595a89563c65c45bf7c5f4cd9af2055301705cd801576751691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_817f8b2664638595a89563c65c45bf7c5f4cd9af2055301705cd801576751691->enter($__internal_817f8b2664638595a89563c65c45bf7c5f4cd9af2055301705cd801576751691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3df745fc105de030a3cdbee08db3ac62c965e0d4536ca8af876765176c4facd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df745fc105de030a3cdbee08db3ac62c965e0d4536ca8af876765176c4facd2->enter($__internal_3df745fc105de030a3cdbee08db3ac62c965e0d4536ca8af876765176c4facd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_3df745fc105de030a3cdbee08db3ac62c965e0d4536ca8af876765176c4facd2->leave($__internal_3df745fc105de030a3cdbee08db3ac62c965e0d4536ca8af876765176c4facd2_prof);

        
        $__internal_817f8b2664638595a89563c65c45bf7c5f4cd9af2055301705cd801576751691->leave($__internal_817f8b2664638595a89563c65c45bf7c5f4cd9af2055301705cd801576751691_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_03e241220464099b1312489594b15ac6e8bd3a7ee5b97a61a2e31dfae3aad626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03e241220464099b1312489594b15ac6e8bd3a7ee5b97a61a2e31dfae3aad626->enter($__internal_03e241220464099b1312489594b15ac6e8bd3a7ee5b97a61a2e31dfae3aad626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ca0fe587ec0d4130697455a36a47041f944a68a9aa6d4912f63871c296d3c329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0fe587ec0d4130697455a36a47041f944a68a9aa6d4912f63871c296d3c329->enter($__internal_ca0fe587ec0d4130697455a36a47041f944a68a9aa6d4912f63871c296d3c329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ca0fe587ec0d4130697455a36a47041f944a68a9aa6d4912f63871c296d3c329->leave($__internal_ca0fe587ec0d4130697455a36a47041f944a68a9aa6d4912f63871c296d3c329_prof);

        
        $__internal_03e241220464099b1312489594b15ac6e8bd3a7ee5b97a61a2e31dfae3aad626->leave($__internal_03e241220464099b1312489594b15ac6e8bd3a7ee5b97a61a2e31dfae3aad626_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_a22abb4bb523d0dc4f97ab1c85afee24247cdeed7970f0ab9fd0c95077aa65e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a22abb4bb523d0dc4f97ab1c85afee24247cdeed7970f0ab9fd0c95077aa65e5->enter($__internal_a22abb4bb523d0dc4f97ab1c85afee24247cdeed7970f0ab9fd0c95077aa65e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_168249e713d6a0252ab7647a70d8b5d4c1cae8ecc415988c18454107b02f5b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_168249e713d6a0252ab7647a70d8b5d4c1cae8ecc415988c18454107b02f5b4d->enter($__internal_168249e713d6a0252ab7647a70d8b5d4c1cae8ecc415988c18454107b02f5b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_168249e713d6a0252ab7647a70d8b5d4c1cae8ecc415988c18454107b02f5b4d->leave($__internal_168249e713d6a0252ab7647a70d8b5d4c1cae8ecc415988c18454107b02f5b4d_prof);

        
        $__internal_a22abb4bb523d0dc4f97ab1c85afee24247cdeed7970f0ab9fd0c95077aa65e5->leave($__internal_a22abb4bb523d0dc4f97ab1c85afee24247cdeed7970f0ab9fd0c95077aa65e5_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_48485b88564ee525bbc59f149b05a4bb825fbcd0260669f5d513391e7d621c3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48485b88564ee525bbc59f149b05a4bb825fbcd0260669f5d513391e7d621c3a->enter($__internal_48485b88564ee525bbc59f149b05a4bb825fbcd0260669f5d513391e7d621c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_18e79f305427fe61a48299b75b9a6c226ed78483d785f009e8b55c7fe7ae3d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18e79f305427fe61a48299b75b9a6c226ed78483d785f009e8b55c7fe7ae3d85->enter($__internal_18e79f305427fe61a48299b75b9a6c226ed78483d785f009e8b55c7fe7ae3d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_18e79f305427fe61a48299b75b9a6c226ed78483d785f009e8b55c7fe7ae3d85->leave($__internal_18e79f305427fe61a48299b75b9a6c226ed78483d785f009e8b55c7fe7ae3d85_prof);

        
        $__internal_48485b88564ee525bbc59f149b05a4bb825fbcd0260669f5d513391e7d621c3a->leave($__internal_48485b88564ee525bbc59f149b05a4bb825fbcd0260669f5d513391e7d621c3a_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_cb7c71c56b8274acc80ba8ffed95dede396424ffdc1dbc125d20334ac01bd495 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7c71c56b8274acc80ba8ffed95dede396424ffdc1dbc125d20334ac01bd495->enter($__internal_cb7c71c56b8274acc80ba8ffed95dede396424ffdc1dbc125d20334ac01bd495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_359bc648b81edbd7380959b22296f8551fa569b4655f149b1e67fcf3db5f3d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_359bc648b81edbd7380959b22296f8551fa569b4655f149b1e67fcf3db5f3d2d->enter($__internal_359bc648b81edbd7380959b22296f8551fa569b4655f149b1e67fcf3db5f3d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_359bc648b81edbd7380959b22296f8551fa569b4655f149b1e67fcf3db5f3d2d->leave($__internal_359bc648b81edbd7380959b22296f8551fa569b4655f149b1e67fcf3db5f3d2d_prof);

        
        $__internal_cb7c71c56b8274acc80ba8ffed95dede396424ffdc1dbc125d20334ac01bd495->leave($__internal_cb7c71c56b8274acc80ba8ffed95dede396424ffdc1dbc125d20334ac01bd495_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_3ece82604a3746804ca46b0ada54688b6074e9ccfad1eee70b0a34c085ac46b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ece82604a3746804ca46b0ada54688b6074e9ccfad1eee70b0a34c085ac46b5->enter($__internal_3ece82604a3746804ca46b0ada54688b6074e9ccfad1eee70b0a34c085ac46b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_c1f4614dcb81b76034bf1eb476e57fc6922f4868389694887556b15765565132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f4614dcb81b76034bf1eb476e57fc6922f4868389694887556b15765565132->enter($__internal_c1f4614dcb81b76034bf1eb476e57fc6922f4868389694887556b15765565132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_c1f4614dcb81b76034bf1eb476e57fc6922f4868389694887556b15765565132->leave($__internal_c1f4614dcb81b76034bf1eb476e57fc6922f4868389694887556b15765565132_prof);

        
        $__internal_3ece82604a3746804ca46b0ada54688b6074e9ccfad1eee70b0a34c085ac46b5->leave($__internal_3ece82604a3746804ca46b0ada54688b6074e9ccfad1eee70b0a34c085ac46b5_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_dde587607bf0c2c548f0b2d6733ea73e53d8837ae044621c1b1f77510c8e1031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde587607bf0c2c548f0b2d6733ea73e53d8837ae044621c1b1f77510c8e1031->enter($__internal_dde587607bf0c2c548f0b2d6733ea73e53d8837ae044621c1b1f77510c8e1031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_f7d5103be317dc4293cbbd06642b4fae5c6375e0583f12b5812bff0eb69083ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d5103be317dc4293cbbd06642b4fae5c6375e0583f12b5812bff0eb69083ee->enter($__internal_f7d5103be317dc4293cbbd06642b4fae5c6375e0583f12b5812bff0eb69083ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_f7d5103be317dc4293cbbd06642b4fae5c6375e0583f12b5812bff0eb69083ee->leave($__internal_f7d5103be317dc4293cbbd06642b4fae5c6375e0583f12b5812bff0eb69083ee_prof);

        
        $__internal_dde587607bf0c2c548f0b2d6733ea73e53d8837ae044621c1b1f77510c8e1031->leave($__internal_dde587607bf0c2c548f0b2d6733ea73e53d8837ae044621c1b1f77510c8e1031_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_e1208a4924a97f57d6a25e1cd6073dc991313e6be3575b6c7d29f26f88a68944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1208a4924a97f57d6a25e1cd6073dc991313e6be3575b6c7d29f26f88a68944->enter($__internal_e1208a4924a97f57d6a25e1cd6073dc991313e6be3575b6c7d29f26f88a68944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5d49fe44f4bf2c5681f8b2aec813eef1407b04e29773146f3e0035d3c37face0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d49fe44f4bf2c5681f8b2aec813eef1407b04e29773146f3e0035d3c37face0->enter($__internal_5d49fe44f4bf2c5681f8b2aec813eef1407b04e29773146f3e0035d3c37face0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_5d49fe44f4bf2c5681f8b2aec813eef1407b04e29773146f3e0035d3c37face0->leave($__internal_5d49fe44f4bf2c5681f8b2aec813eef1407b04e29773146f3e0035d3c37face0_prof);

        
        $__internal_e1208a4924a97f57d6a25e1cd6073dc991313e6be3575b6c7d29f26f88a68944->leave($__internal_e1208a4924a97f57d6a25e1cd6073dc991313e6be3575b6c7d29f26f88a68944_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock button_widget %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form.parent %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form.parent %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}

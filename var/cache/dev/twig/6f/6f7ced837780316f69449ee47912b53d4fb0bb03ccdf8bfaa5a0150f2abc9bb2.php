<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_05e75b3e5e5cf3da7c2856b1a21b56e47ce0ba983b2f331c616be547f1ae9c08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0a72eb9d17ea0b595cbf347535c0e4a771792032d246aa1c92baed30e30fb02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a72eb9d17ea0b595cbf347535c0e4a771792032d246aa1c92baed30e30fb02->enter($__internal_b0a72eb9d17ea0b595cbf347535c0e4a771792032d246aa1c92baed30e30fb02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_02b28974592447839e6e7ffb33ba1476b5ddd27a8817a61b4a298a8c3e66244b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b28974592447839e6e7ffb33ba1476b5ddd27a8817a61b4a298a8c3e66244b->enter($__internal_02b28974592447839e6e7ffb33ba1476b5ddd27a8817a61b4a298a8c3e66244b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_b0a72eb9d17ea0b595cbf347535c0e4a771792032d246aa1c92baed30e30fb02->leave($__internal_b0a72eb9d17ea0b595cbf347535c0e4a771792032d246aa1c92baed30e30fb02_prof);

        
        $__internal_02b28974592447839e6e7ffb33ba1476b5ddd27a8817a61b4a298a8c3e66244b->leave($__internal_02b28974592447839e6e7ffb33ba1476b5ddd27a8817a61b4a298a8c3e66244b_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_bc9fddee23f999a150760c85883a081e90449958f5e5a04589654f52d0a13e40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9fddee23f999a150760c85883a081e90449958f5e5a04589654f52d0a13e40->enter($__internal_bc9fddee23f999a150760c85883a081e90449958f5e5a04589654f52d0a13e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_4386dd9fdd595174fc7f3021cd2cc3fa21c53f47434f71c53a5bb8ce20ea7b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4386dd9fdd595174fc7f3021cd2cc3fa21c53f47434f71c53a5bb8ce20ea7b3e->enter($__internal_4386dd9fdd595174fc7f3021cd2cc3fa21c53f47434f71c53a5bb8ce20ea7b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4386dd9fdd595174fc7f3021cd2cc3fa21c53f47434f71c53a5bb8ce20ea7b3e->leave($__internal_4386dd9fdd595174fc7f3021cd2cc3fa21c53f47434f71c53a5bb8ce20ea7b3e_prof);

        
        $__internal_bc9fddee23f999a150760c85883a081e90449958f5e5a04589654f52d0a13e40->leave($__internal_bc9fddee23f999a150760c85883a081e90449958f5e5a04589654f52d0a13e40_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e871656e282ab9e1016ae15f89a992ecfec940d3144f957d3bae7b1d9d5420c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e871656e282ab9e1016ae15f89a992ecfec940d3144f957d3bae7b1d9d5420c0->enter($__internal_e871656e282ab9e1016ae15f89a992ecfec940d3144f957d3bae7b1d9d5420c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_dd54660f7ee1406170293e7dc98b41cdbc6e9d81a52595d5b3c921bc99ca8220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd54660f7ee1406170293e7dc98b41cdbc6e9d81a52595d5b3c921bc99ca8220->enter($__internal_dd54660f7ee1406170293e7dc98b41cdbc6e9d81a52595d5b3c921bc99ca8220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_dd54660f7ee1406170293e7dc98b41cdbc6e9d81a52595d5b3c921bc99ca8220->leave($__internal_dd54660f7ee1406170293e7dc98b41cdbc6e9d81a52595d5b3c921bc99ca8220_prof);

        
        $__internal_e871656e282ab9e1016ae15f89a992ecfec940d3144f957d3bae7b1d9d5420c0->leave($__internal_e871656e282ab9e1016ae15f89a992ecfec940d3144f957d3bae7b1d9d5420c0_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_49fcb447b447964f9dc576744b7fbb260177f1bf34f9c6375a3be26159c465be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49fcb447b447964f9dc576744b7fbb260177f1bf34f9c6375a3be26159c465be->enter($__internal_49fcb447b447964f9dc576744b7fbb260177f1bf34f9c6375a3be26159c465be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_f73de8771d34dfa97ced0a1a2849bf3f90a85c3d89653377a34b01baf10d697e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73de8771d34dfa97ced0a1a2849bf3f90a85c3d89653377a34b01baf10d697e->enter($__internal_f73de8771d34dfa97ced0a1a2849bf3f90a85c3d89653377a34b01baf10d697e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_f73de8771d34dfa97ced0a1a2849bf3f90a85c3d89653377a34b01baf10d697e->leave($__internal_f73de8771d34dfa97ced0a1a2849bf3f90a85c3d89653377a34b01baf10d697e_prof);

        
        $__internal_49fcb447b447964f9dc576744b7fbb260177f1bf34f9c6375a3be26159c465be->leave($__internal_49fcb447b447964f9dc576744b7fbb260177f1bf34f9c6375a3be26159c465be_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_a100fd4af5c3df3485a1eccc5ce3aaac4fa176efe9a2765955bf6b4d2b0e8d73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a100fd4af5c3df3485a1eccc5ce3aaac4fa176efe9a2765955bf6b4d2b0e8d73->enter($__internal_a100fd4af5c3df3485a1eccc5ce3aaac4fa176efe9a2765955bf6b4d2b0e8d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_b5c8b7506b738beb9f6135c853bc7a2382c6022888acd65b77ab25003c4014c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c8b7506b738beb9f6135c853bc7a2382c6022888acd65b77ab25003c4014c4->enter($__internal_b5c8b7506b738beb9f6135c853bc7a2382c6022888acd65b77ab25003c4014c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_b5c8b7506b738beb9f6135c853bc7a2382c6022888acd65b77ab25003c4014c4->leave($__internal_b5c8b7506b738beb9f6135c853bc7a2382c6022888acd65b77ab25003c4014c4_prof);

        
        $__internal_a100fd4af5c3df3485a1eccc5ce3aaac4fa176efe9a2765955bf6b4d2b0e8d73->leave($__internal_a100fd4af5c3df3485a1eccc5ce3aaac4fa176efe9a2765955bf6b4d2b0e8d73_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_720062fb610379dd7fe6711ee5e1e31a73fd1c6eee68d61616c01821e2f137b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_720062fb610379dd7fe6711ee5e1e31a73fd1c6eee68d61616c01821e2f137b5->enter($__internal_720062fb610379dd7fe6711ee5e1e31a73fd1c6eee68d61616c01821e2f137b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_04593a577bf8322280be3de109cb536b58b97be8ccf246a5d160e426851d0596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04593a577bf8322280be3de109cb536b58b97be8ccf246a5d160e426851d0596->enter($__internal_04593a577bf8322280be3de109cb536b58b97be8ccf246a5d160e426851d0596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_04593a577bf8322280be3de109cb536b58b97be8ccf246a5d160e426851d0596->leave($__internal_04593a577bf8322280be3de109cb536b58b97be8ccf246a5d160e426851d0596_prof);

        
        $__internal_720062fb610379dd7fe6711ee5e1e31a73fd1c6eee68d61616c01821e2f137b5->leave($__internal_720062fb610379dd7fe6711ee5e1e31a73fd1c6eee68d61616c01821e2f137b5_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_ad065e8117beb7c1fdc4c109de33c5bd8a5bb2ff6572eef3b9e21bd7c60792dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad065e8117beb7c1fdc4c109de33c5bd8a5bb2ff6572eef3b9e21bd7c60792dc->enter($__internal_ad065e8117beb7c1fdc4c109de33c5bd8a5bb2ff6572eef3b9e21bd7c60792dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_0381b4962536c8b7f3e52a7a900512cfd17af7b9c7303eb5ec5d5b25a7cbdd12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0381b4962536c8b7f3e52a7a900512cfd17af7b9c7303eb5ec5d5b25a7cbdd12->enter($__internal_0381b4962536c8b7f3e52a7a900512cfd17af7b9c7303eb5ec5d5b25a7cbdd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_0381b4962536c8b7f3e52a7a900512cfd17af7b9c7303eb5ec5d5b25a7cbdd12->leave($__internal_0381b4962536c8b7f3e52a7a900512cfd17af7b9c7303eb5ec5d5b25a7cbdd12_prof);

        
        $__internal_ad065e8117beb7c1fdc4c109de33c5bd8a5bb2ff6572eef3b9e21bd7c60792dc->leave($__internal_ad065e8117beb7c1fdc4c109de33c5bd8a5bb2ff6572eef3b9e21bd7c60792dc_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_92decda5d998f285bf30f25a98eb08a8ca5c69810e32db0c3c5ed02278464b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92decda5d998f285bf30f25a98eb08a8ca5c69810e32db0c3c5ed02278464b7b->enter($__internal_92decda5d998f285bf30f25a98eb08a8ca5c69810e32db0c3c5ed02278464b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_53c2d6cb6353ecf982bc4d9d302a86788214cfaf1efedc0cccf96c019fcdf633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c2d6cb6353ecf982bc4d9d302a86788214cfaf1efedc0cccf96c019fcdf633->enter($__internal_53c2d6cb6353ecf982bc4d9d302a86788214cfaf1efedc0cccf96c019fcdf633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_53c2d6cb6353ecf982bc4d9d302a86788214cfaf1efedc0cccf96c019fcdf633->leave($__internal_53c2d6cb6353ecf982bc4d9d302a86788214cfaf1efedc0cccf96c019fcdf633_prof);

        
        $__internal_92decda5d998f285bf30f25a98eb08a8ca5c69810e32db0c3c5ed02278464b7b->leave($__internal_92decda5d998f285bf30f25a98eb08a8ca5c69810e32db0c3c5ed02278464b7b_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_e8a7d1a6cd9e49deda148d0f4c8ccdf53660dd50466f2b377e146327a4756c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8a7d1a6cd9e49deda148d0f4c8ccdf53660dd50466f2b377e146327a4756c49->enter($__internal_e8a7d1a6cd9e49deda148d0f4c8ccdf53660dd50466f2b377e146327a4756c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_35077f3ebffe21a3137195105e6489ae30b24359f612305af95092ce61b0152f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35077f3ebffe21a3137195105e6489ae30b24359f612305af95092ce61b0152f->enter($__internal_35077f3ebffe21a3137195105e6489ae30b24359f612305af95092ce61b0152f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_35077f3ebffe21a3137195105e6489ae30b24359f612305af95092ce61b0152f->leave($__internal_35077f3ebffe21a3137195105e6489ae30b24359f612305af95092ce61b0152f_prof);

        
        $__internal_e8a7d1a6cd9e49deda148d0f4c8ccdf53660dd50466f2b377e146327a4756c49->leave($__internal_e8a7d1a6cd9e49deda148d0f4c8ccdf53660dd50466f2b377e146327a4756c49_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_66ce62469ad589502e5ca5bcdcb9c6ff4a28535e5df786f1548a7fe3c9a14cdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66ce62469ad589502e5ca5bcdcb9c6ff4a28535e5df786f1548a7fe3c9a14cdd->enter($__internal_66ce62469ad589502e5ca5bcdcb9c6ff4a28535e5df786f1548a7fe3c9a14cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_82f11a77b45681c32f89eb1bc0c356c182fbbd49c0ba5e1125cb639fad8a103f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82f11a77b45681c32f89eb1bc0c356c182fbbd49c0ba5e1125cb639fad8a103f->enter($__internal_82f11a77b45681c32f89eb1bc0c356c182fbbd49c0ba5e1125cb639fad8a103f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 68
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 73
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 74
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 75
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 76
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 77
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 83
            echo "<label";
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
            echo ">";
            // line 84
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_82f11a77b45681c32f89eb1bc0c356c182fbbd49c0ba5e1125cb639fad8a103f->leave($__internal_82f11a77b45681c32f89eb1bc0c356c182fbbd49c0ba5e1125cb639fad8a103f_prof);

        
        $__internal_66ce62469ad589502e5ca5bcdcb9c6ff4a28535e5df786f1548a7fe3c9a14cdd->leave($__internal_66ce62469ad589502e5ca5bcdcb9c6ff4a28535e5df786f1548a7fe3c9a14cdd_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_aed6419617088fec303899a7e7ceef7b87b02ef1889adef487cfd32cb5bf9a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aed6419617088fec303899a7e7ceef7b87b02ef1889adef487cfd32cb5bf9a85->enter($__internal_aed6419617088fec303899a7e7ceef7b87b02ef1889adef487cfd32cb5bf9a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_bfa3e0d7807673401a552653972f36ac824ad76ed8cba8619085342bf9961bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfa3e0d7807673401a552653972f36ac824ad76ed8cba8619085342bf9961bf0->enter($__internal_bfa3e0d7807673401a552653972f36ac824ad76ed8cba8619085342bf9961bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_bfa3e0d7807673401a552653972f36ac824ad76ed8cba8619085342bf9961bf0->leave($__internal_bfa3e0d7807673401a552653972f36ac824ad76ed8cba8619085342bf9961bf0_prof);

        
        $__internal_aed6419617088fec303899a7e7ceef7b87b02ef1889adef487cfd32cb5bf9a85->leave($__internal_aed6419617088fec303899a7e7ceef7b87b02ef1889adef487cfd32cb5bf9a85_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_9bd28cbcd881e3079538181a4cfb394fe397f933f7dbe0e4142ced30634bfaf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bd28cbcd881e3079538181a4cfb394fe397f933f7dbe0e4142ced30634bfaf5->enter($__internal_9bd28cbcd881e3079538181a4cfb394fe397f933f7dbe0e4142ced30634bfaf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0f40d42d4043d1233a94b0cea6681400fab6f283d99d015357228b330d145dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f40d42d4043d1233a94b0cea6681400fab6f283d99d015357228b330d145dba->enter($__internal_0f40d42d4043d1233a94b0cea6681400fab6f283d99d015357228b330d145dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_0f40d42d4043d1233a94b0cea6681400fab6f283d99d015357228b330d145dba->leave($__internal_0f40d42d4043d1233a94b0cea6681400fab6f283d99d015357228b330d145dba_prof);

        
        $__internal_9bd28cbcd881e3079538181a4cfb394fe397f933f7dbe0e4142ced30634bfaf5->leave($__internal_9bd28cbcd881e3079538181a4cfb394fe397f933f7dbe0e4142ced30634bfaf5_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_2798d03a2ef7a52d5e0c9eb5f7ae2bf059a5efcaa2fdf5ce13c2dfbf5bc2b1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2798d03a2ef7a52d5e0c9eb5f7ae2bf059a5efcaa2fdf5ce13c2dfbf5bc2b1f6->enter($__internal_2798d03a2ef7a52d5e0c9eb5f7ae2bf059a5efcaa2fdf5ce13c2dfbf5bc2b1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_749aa985e2b416d9084ae2e4126e8ec0e1128777ee90564ef766ef4a64ae5390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_749aa985e2b416d9084ae2e4126e8ec0e1128777ee90564ef766ef4a64ae5390->enter($__internal_749aa985e2b416d9084ae2e4126e8ec0e1128777ee90564ef766ef4a64ae5390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_749aa985e2b416d9084ae2e4126e8ec0e1128777ee90564ef766ef4a64ae5390->leave($__internal_749aa985e2b416d9084ae2e4126e8ec0e1128777ee90564ef766ef4a64ae5390_prof);

        
        $__internal_2798d03a2ef7a52d5e0c9eb5f7ae2bf059a5efcaa2fdf5ce13c2dfbf5bc2b1f6->leave($__internal_2798d03a2ef7a52d5e0c9eb5f7ae2bf059a5efcaa2fdf5ce13c2dfbf5bc2b1f6_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_b7dfe932f87767e5fe6c7a4097ac56d38a8a33ddf9ebeef375522849fe4ec199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7dfe932f87767e5fe6c7a4097ac56d38a8a33ddf9ebeef375522849fe4ec199->enter($__internal_b7dfe932f87767e5fe6c7a4097ac56d38a8a33ddf9ebeef375522849fe4ec199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_b0a6451904a5c717a3e8b5bfc2749f1ade8d461b0e1dfd6834f1548284bae495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0a6451904a5c717a3e8b5bfc2749f1ade8d461b0e1dfd6834f1548284bae495->enter($__internal_b0a6451904a5c717a3e8b5bfc2749f1ade8d461b0e1dfd6834f1548284bae495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b0a6451904a5c717a3e8b5bfc2749f1ade8d461b0e1dfd6834f1548284bae495->leave($__internal_b0a6451904a5c717a3e8b5bfc2749f1ade8d461b0e1dfd6834f1548284bae495_prof);

        
        $__internal_b7dfe932f87767e5fe6c7a4097ac56d38a8a33ddf9ebeef375522849fe4ec199->leave($__internal_b7dfe932f87767e5fe6c7a4097ac56d38a8a33ddf9ebeef375522849fe4ec199_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b0b3972465eff7b3302c49853da105c8b772d0cb03179feae0387aed81730db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b3972465eff7b3302c49853da105c8b772d0cb03179feae0387aed81730db8->enter($__internal_b0b3972465eff7b3302c49853da105c8b772d0cb03179feae0387aed81730db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_b2a7ec5f5d72e34c5e1a3401ed16f52c10559b0e6a0caef1a20240fd9c69277e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a7ec5f5d72e34c5e1a3401ed16f52c10559b0e6a0caef1a20240fd9c69277e->enter($__internal_b2a7ec5f5d72e34c5e1a3401ed16f52c10559b0e6a0caef1a20240fd9c69277e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b2a7ec5f5d72e34c5e1a3401ed16f52c10559b0e6a0caef1a20240fd9c69277e->leave($__internal_b2a7ec5f5d72e34c5e1a3401ed16f52c10559b0e6a0caef1a20240fd9c69277e_prof);

        
        $__internal_b0b3972465eff7b3302c49853da105c8b772d0cb03179feae0387aed81730db8->leave($__internal_b0b3972465eff7b3302c49853da105c8b772d0cb03179feae0387aed81730db8_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_e44725a07cd49cdf4716d59a63d9ff5b453bc4c9c0c03b3fe45767d08aaa7c59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44725a07cd49cdf4716d59a63d9ff5b453bc4c9c0c03b3fe45767d08aaa7c59->enter($__internal_e44725a07cd49cdf4716d59a63d9ff5b453bc4c9c0c03b3fe45767d08aaa7c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_2c24a9b15d3896e952014fa6d8d9cf74115a00dd4984257de66af1a3a9001954 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c24a9b15d3896e952014fa6d8d9cf74115a00dd4984257de66af1a3a9001954->enter($__internal_2c24a9b15d3896e952014fa6d8d9cf74115a00dd4984257de66af1a3a9001954_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2c24a9b15d3896e952014fa6d8d9cf74115a00dd4984257de66af1a3a9001954->leave($__internal_2c24a9b15d3896e952014fa6d8d9cf74115a00dd4984257de66af1a3a9001954_prof);

        
        $__internal_e44725a07cd49cdf4716d59a63d9ff5b453bc4c9c0c03b3fe45767d08aaa7c59->leave($__internal_e44725a07cd49cdf4716d59a63d9ff5b453bc4c9c0c03b3fe45767d08aaa7c59_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_17b97014b8c26494dbfd67ebbd477a87fa721f47cd2fa3691389b47862343021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17b97014b8c26494dbfd67ebbd477a87fa721f47cd2fa3691389b47862343021->enter($__internal_17b97014b8c26494dbfd67ebbd477a87fa721f47cd2fa3691389b47862343021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_808f8dd38a6034725feedb8f56c1b3a1a597b499f08132f98294b2d0761ff1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808f8dd38a6034725feedb8f56c1b3a1a597b499f08132f98294b2d0761ff1f1->enter($__internal_808f8dd38a6034725feedb8f56c1b3a1a597b499f08132f98294b2d0761ff1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_808f8dd38a6034725feedb8f56c1b3a1a597b499f08132f98294b2d0761ff1f1->leave($__internal_808f8dd38a6034725feedb8f56c1b3a1a597b499f08132f98294b2d0761ff1f1_prof);

        
        $__internal_17b97014b8c26494dbfd67ebbd477a87fa721f47cd2fa3691389b47862343021->leave($__internal_17b97014b8c26494dbfd67ebbd477a87fa721f47cd2fa3691389b47862343021_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_69a3eb83aef1edb68e45ececf416435f9c9b605e41382be4155784112236c2d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69a3eb83aef1edb68e45ececf416435f9c9b605e41382be4155784112236c2d0->enter($__internal_69a3eb83aef1edb68e45ececf416435f9c9b605e41382be4155784112236c2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_f2bf3d38e038dce3b497019ed79ba03ccb0d7a9dd0bbd3581b74de8686eeb7aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2bf3d38e038dce3b497019ed79ba03ccb0d7a9dd0bbd3581b74de8686eeb7aa->enter($__internal_f2bf3d38e038dce3b497019ed79ba03ccb0d7a9dd0bbd3581b74de8686eeb7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_f2bf3d38e038dce3b497019ed79ba03ccb0d7a9dd0bbd3581b74de8686eeb7aa->leave($__internal_f2bf3d38e038dce3b497019ed79ba03ccb0d7a9dd0bbd3581b74de8686eeb7aa_prof);

        
        $__internal_69a3eb83aef1edb68e45ececf416435f9c9b605e41382be4155784112236c2d0->leave($__internal_69a3eb83aef1edb68e45ececf416435f9c9b605e41382be4155784112236c2d0_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_61b2c2024ed286c6819ae800f750fb6f523c03fdad1b053dbc25fe2cbde45d7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61b2c2024ed286c6819ae800f750fb6f523c03fdad1b053dbc25fe2cbde45d7a->enter($__internal_61b2c2024ed286c6819ae800f750fb6f523c03fdad1b053dbc25fe2cbde45d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c2855ae688b9c905efd4daacb4312db4dc3548c8585556f1c24680288280ba1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2855ae688b9c905efd4daacb4312db4dc3548c8585556f1c24680288280ba1b->enter($__internal_c2855ae688b9c905efd4daacb4312db4dc3548c8585556f1c24680288280ba1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 143
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_c2855ae688b9c905efd4daacb4312db4dc3548c8585556f1c24680288280ba1b->leave($__internal_c2855ae688b9c905efd4daacb4312db4dc3548c8585556f1c24680288280ba1b_prof);

        
        $__internal_61b2c2024ed286c6819ae800f750fb6f523c03fdad1b053dbc25fe2cbde45d7a->leave($__internal_61b2c2024ed286c6819ae800f750fb6f523c03fdad1b053dbc25fe2cbde45d7a_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/Applications/MAMP/htdocs/sf3/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}

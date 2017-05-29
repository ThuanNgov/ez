<?php

/* EzPublishDebugBundle:Profiler:layout.html.twig */
class __TwigTemplate_f899af4d14676320eade7977c9aaea62b097edafa1a391d1867a6fd91dff174d extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig", "EzPublishDebugBundle:Profiler:layout.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ea982a59dc578e401c80dd5168b2376e5bd1304d4265573c902280f7d397b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ea982a59dc578e401c80dd5168b2376e5bd1304d4265573c902280f7d397b46->enter($__internal_2ea982a59dc578e401c80dd5168b2376e5bd1304d4265573c902280f7d397b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EzPublishDebugBundle:Profiler:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ea982a59dc578e401c80dd5168b2376e5bd1304d4265573c902280f7d397b46->leave($__internal_2ea982a59dc578e401c80dd5168b2376e5bd1304d4265573c902280f7d397b46_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7cb83745894fc62b406a92646fe6659cc20edfb4e853129c625cb6723394c906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb83745894fc62b406a92646fe6659cc20edfb4e853129c625cb6723394c906->enter($__internal_7cb83745894fc62b406a92646fe6659cc20edfb4e853129c625cb6723394c906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        // line 5
        echo "
    ";
        // line 6
        $context["icon"] = ('' === $tmp = "        <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 1200 1200\" enable-background=\"new 0 0 1200 1200\" xml:space=\"preserve\">
            <g>
                <path fill=\"#FFFFFF\" d=\"M979.9,435.2V53H50.2v929.8H435v167.6h715.2V435.2H979.9z M435,892.7H140.3V143.1h749.5v292.1H435V892.7z\" />
                <rect x=\"520.6\" y=\"520.8\" fill=\"#F15C25\" width=\"544\" height=\"543.9\"/>
            </g>
        </svg>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 14
        echo "
    ";
        // line 15
        ob_start();
        // line 16
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "allCollectors", array()));
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
        foreach ($context['_seq'] as $context["name"] => $context["inner_collector"]) {
            // line 17
            echo "            ";
            $context["inner_template"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getToolbarTemplate", array(0 => $context["name"]), "method");
            // line 18
            echo "            ";
            if ((isset($context["inner_template"]) ? $context["inner_template"] : $this->getContext($context, "inner_template"))) {
                // line 19
                echo "                ";
                $this->loadTemplate((isset($context["inner_template"]) ? $context["inner_template"] : $this->getContext($context, "inner_template")), "EzPublishDebugBundle:Profiler:layout.html.twig", 19)->display(array_merge($context, array("collector" => $context["inner_collector"])));
                // line 20
                echo "
                ";
                // line 21
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo "<hr />";
                }
                // line 22
                echo "            ";
            }
            // line 23
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['inner_collector'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "
    ";
        // line 28
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "status" => ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "")) : (""))));
        echo "
";
        
        $__internal_7cb83745894fc62b406a92646fe6659cc20edfb4e853129c625cb6723394c906->leave($__internal_7cb83745894fc62b406a92646fe6659cc20edfb4e853129c625cb6723394c906_prof);

    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        $__internal_39aee7e8b34a4fe3a77e17badbc03d814aa65bb68424e21c06e77da902c92494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39aee7e8b34a4fe3a77e17badbc03d814aa65bb68424e21c06e77da902c92494->enter($__internal_39aee7e8b34a4fe3a77e17badbc03d814aa65bb68424e21c06e77da902c92494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 32
        echo "    <span class=\"label\">
        <span class=\"icon\">
            <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 1200 1200\" enable-background=\"new 0 0 1200 1200\" xml:space=\"preserve\">
                <g>
                    <path fill=\"#FFFFFF\" d=\"M979.9,435.2V53H50.2v929.8H435v167.6h715.2V435.2H979.9z M435,892.7H140.3V143.1h749.5v292.1H435V892.7z\" />
                    <rect x=\"520.6\" y=\"520.8\" fill=\"#F15C25\" width=\"544\" height=\"543.9\"/>
                </g>
            </svg>
        </span>
        <strong>eZ Platform</strong>
    </span>
";
        
        $__internal_39aee7e8b34a4fe3a77e17badbc03d814aa65bb68424e21c06e77da902c92494->leave($__internal_39aee7e8b34a4fe3a77e17badbc03d814aa65bb68424e21c06e77da902c92494_prof);

    }

    // line 45
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d544d8321e539d453de803e4af3b7651b4168397e124eaec0bf8a36423337a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d544d8321e539d453de803e4af3b7651b4168397e124eaec0bf8a36423337a0->enter($__internal_3d544d8321e539d453de803e4af3b7651b4168397e124eaec0bf8a36423337a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 46
        echo "    <h2>Usage Information</h2>

    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "allCollectors", array()));
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
        foreach ($context['_seq'] as $context["name"] => $context["inner_collector"]) {
            // line 49
            echo "        ";
            $context["inner_template"] = $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "getPanelTemplate", array(0 => $context["name"]), "method");
            // line 50
            echo "        ";
            if ((isset($context["inner_template"]) ? $context["inner_template"] : $this->getContext($context, "inner_template"))) {
                $this->loadTemplate((isset($context["inner_template"]) ? $context["inner_template"] : $this->getContext($context, "inner_template")), "EzPublishDebugBundle:Profiler:layout.html.twig", 50)->display(array_merge($context, array("collector" => $context["inner_collector"])));
            }
            // line 51
            echo "
        ";
            // line 52
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo "<hr />";
            }
            // line 53
            echo "
    ";
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
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['inner_collector'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
";
        
        $__internal_3d544d8321e539d453de803e4af3b7651b4168397e124eaec0bf8a36423337a0->leave($__internal_3d544d8321e539d453de803e4af3b7651b4168397e124eaec0bf8a36423337a0_prof);

    }

    public function getTemplateName()
    {
        return "EzPublishDebugBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 55,  194 => 53,  190 => 52,  187 => 51,  182 => 50,  179 => 49,  162 => 48,  158 => 46,  152 => 45,  134 => 32,  128 => 31,  119 => 28,  116 => 27,  112 => 25,  97 => 23,  94 => 22,  90 => 21,  87 => 20,  84 => 19,  81 => 18,  78 => 17,  60 => 16,  58 => 15,  55 => 14,  47 => 6,  44 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'WebProfilerBundle:Profiler:layout.html.twig' %}

{% block toolbar %}
    {# {% set status = (collector.hits/collector.calls) < 0.33 ? 'red' : (collector.hits/collector.calls) < 0.66 ? 'yellow' : '' %} #}

    {% set icon %}
        <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 1200 1200\" enable-background=\"new 0 0 1200 1200\" xml:space=\"preserve\">
            <g>
                <path fill=\"#FFFFFF\" d=\"M979.9,435.2V53H50.2v929.8H435v167.6h715.2V435.2H979.9z M435,892.7H140.3V143.1h749.5v292.1H435V892.7z\" />
                <rect x=\"520.6\" y=\"520.8\" fill=\"#F15C25\" width=\"544\" height=\"543.9\"/>
            </g>
        </svg>
    {% endset %}

    {% set text %}
        {% for name, inner_collector in collector.allCollectors %}
            {% set inner_template = collector.getToolbarTemplate( name ) %}
            {% if inner_template %}
                {% include inner_template with { \"collector\": inner_collector } %}

                {% if not loop.last %}<hr />{% endif %}
            {% endif %}

        {% endfor %}

    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status|default('') }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">
            <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" viewBox=\"0 0 1200 1200\" enable-background=\"new 0 0 1200 1200\" xml:space=\"preserve\">
                <g>
                    <path fill=\"#FFFFFF\" d=\"M979.9,435.2V53H50.2v929.8H435v167.6h715.2V435.2H979.9z M435,892.7H140.3V143.1h749.5v292.1H435V892.7z\" />
                    <rect x=\"520.6\" y=\"520.8\" fill=\"#F15C25\" width=\"544\" height=\"543.9\"/>
                </g>
            </svg>
        </span>
        <strong>eZ Platform</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Usage Information</h2>

    {% for name, inner_collector in collector.allCollectors %}
        {% set inner_template = collector.getPanelTemplate( name ) %}
        {% if inner_template %}{% include inner_template with { \"collector\": inner_collector } %}{% endif %}

        {% if not loop.last %}<hr />{% endif %}

    {% endfor %}

{% endblock %}
", "EzPublishDebugBundle:Profiler:layout.html.twig", "/var/www/html/ez/vendor/ezsystems/ezpublish-kernel/eZ/Bundle/EzPublishDebugBundle/Resources/views/Profiler/layout.html.twig");
    }
}

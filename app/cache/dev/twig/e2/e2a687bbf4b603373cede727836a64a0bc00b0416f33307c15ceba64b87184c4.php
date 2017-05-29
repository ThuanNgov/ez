<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_01e59e0a8aaf0eea8cb61d7633a1b6ab3605fa551cfe3f56cf27254d54821c2f extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_91c6e9603ed0b32c19ba8311b0bada305e24f6ef821d34a9ab5264f715f66f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c6e9603ed0b32c19ba8311b0bada305e24f6ef821d34a9ab5264f715f66f5b->enter($__internal_91c6e9603ed0b32c19ba8311b0bada305e24f6ef821d34a9ab5264f715f66f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91c6e9603ed0b32c19ba8311b0bada305e24f6ef821d34a9ab5264f715f66f5b->leave($__internal_91c6e9603ed0b32c19ba8311b0bada305e24f6ef821d34a9ab5264f715f66f5b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d50e80fef7aaf43c4228e89ea3bf1d8403f7409f36eb156bc1ece1c9a508800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d50e80fef7aaf43c4228e89ea3bf1d8403f7409f36eb156bc1ece1c9a508800->enter($__internal_5d50e80fef7aaf43c4228e89ea3bf1d8403f7409f36eb156bc1ece1c9a508800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d50e80fef7aaf43c4228e89ea3bf1d8403f7409f36eb156bc1ece1c9a508800->leave($__internal_5d50e80fef7aaf43c4228e89ea3bf1d8403f7409f36eb156bc1ece1c9a508800_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9a2f8e950bf4715623cbed432eac1e5728850030ad54df1ac1277f4f2e222a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2f8e950bf4715623cbed432eac1e5728850030ad54df1ac1277f4f2e222a8a->enter($__internal_9a2f8e950bf4715623cbed432eac1e5728850030ad54df1ac1277f4f2e222a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9a2f8e950bf4715623cbed432eac1e5728850030ad54df1ac1277f4f2e222a8a->leave($__internal_9a2f8e950bf4715623cbed432eac1e5728850030ad54df1ac1277f4f2e222a8a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_411fab8e039368173bf67159ae1e7729bff7a9c613201777cb9ddb765226248c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_411fab8e039368173bf67159ae1e7729bff7a9c613201777cb9ddb765226248c->enter($__internal_411fab8e039368173bf67159ae1e7729bff7a9c613201777cb9ddb765226248c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_411fab8e039368173bf67159ae1e7729bff7a9c613201777cb9ddb765226248c->leave($__internal_411fab8e039368173bf67159ae1e7729bff7a9c613201777cb9ddb765226248c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/ez/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

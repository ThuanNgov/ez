<?php

/* EzPublishDebugBundle:Profiler/persistence:toolbar.html.twig */
class __TwigTemplate_14f54c9f4af0131bf8ac9befb5246c5af455327bb62ebf15880e4c440fffa85b extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        $__internal_d68cc26566b8a0840eaabe94523f98cc01dde16f2a35ad1f7c26b2a5eb246dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d68cc26566b8a0840eaabe94523f98cc01dde16f2a35ad1f7c26b2a5eb246dee->enter($__internal_d68cc26566b8a0840eaabe94523f98cc01dde16f2a35ad1f7c26b2a5eb246dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EzPublishDebugBundle:Profiler/persistence:toolbar.html.twig"));

        // line 1
        echo "<div class=\"sf-toolbar-info-piece\">
    <b>SPI (persistence)</b>
</div>
<div class=\"sf-toolbar-info-piece\">
    <b>calls</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "count", array()), "html", null, true);
        echo "</span>
</div>
<div class=\"sf-toolbar-info-piece\">
    <b>handlers</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "handlerscount", array()), "html", null, true);
        echo "</span>
</div>
";
        
        $__internal_d68cc26566b8a0840eaabe94523f98cc01dde16f2a35ad1f7c26b2a5eb246dee->leave($__internal_d68cc26566b8a0840eaabe94523f98cc01dde16f2a35ad1f7c26b2a5eb246dee_prof);

    }

    public function getTemplateName()
    {
        return "EzPublishDebugBundle:Profiler/persistence:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 8,  28 => 5,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sf-toolbar-info-piece\">
    <b>SPI (persistence)</b>
</div>
<div class=\"sf-toolbar-info-piece\">
    <b>calls</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ collector.count }}</span>
</div>
<div class=\"sf-toolbar-info-piece\">
    <b>handlers</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ collector.handlerscount }}</span>
</div>
", "EzPublishDebugBundle:Profiler/persistence:toolbar.html.twig", "/var/www/html/ez/vendor/ezsystems/ezpublish-kernel/eZ/Bundle/EzPublishDebugBundle/Resources/views/Profiler/persistence/toolbar.html.twig");
    }
}

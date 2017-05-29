<?php

/* EzPublishDebugBundle:Profiler/siteaccess:toolbar.html.twig */
class __TwigTemplate_19fa10327a361d850fa600a066ede87be9ba372ea55ee3082d3c6d7e3306aec3 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        $__internal_47e01f06d4afce687e5c41a8ae1385df383b046b8b7cc76363327a6be6997f3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e01f06d4afce687e5c41a8ae1385df383b046b8b7cc76363327a6be6997f3b->enter($__internal_47e01f06d4afce687e5c41a8ae1385df383b046b8b7cc76363327a6be6997f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EzPublishDebugBundle:Profiler/siteaccess:toolbar.html.twig"));

        // line 1
        if ( !(null === $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "siteAccess", array()))) {
            // line 2
            echo "<div class=\"sf-toolbar-info-piece\">
    <b>Site Access</b>
</div>
<div class=\"sf-toolbar-info-piece\">
    <b>name</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "siteAccess", array()), "name", array()), "html", null, true);
            echo "</span>
</div>
<div class=\"sf-toolbar-info-piece\">
    <b>matching type</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "siteAccess", array()), "matchingType", array()), "html", null, true);
            echo "</span>
</div>
";
        }
        
        $__internal_47e01f06d4afce687e5c41a8ae1385df383b046b8b7cc76363327a6be6997f3b->leave($__internal_47e01f06d4afce687e5c41a8ae1385df383b046b8b7cc76363327a6be6997f3b_prof);

    }

    public function getTemplateName()
    {
        return "EzPublishDebugBundle:Profiler/siteaccess:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 9,  30 => 6,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if collector.siteAccess is not null %}
<div class=\"sf-toolbar-info-piece\">
    <b>Site Access</b>
</div>
<div class=\"sf-toolbar-info-piece\">
    <b>name</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ collector.siteAccess.name }}</span>
</div>
<div class=\"sf-toolbar-info-piece\">
    <b>matching type</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ collector.siteAccess.matchingType }}</span>
</div>
{% endif %}
", "EzPublishDebugBundle:Profiler/siteaccess:toolbar.html.twig", "/var/www/html/ez/vendor/ezsystems/ezpublish-kernel/eZ/Bundle/EzPublishDebugBundle/Resources/views/Profiler/siteaccess/toolbar.html.twig");
    }
}

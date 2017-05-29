<?php

/* EzPublishCoreBundle::viewbase_layout.html.twig */
class __TwigTemplate_7c75542e45ee4b94e8d9501ca947484be0dfc110acb74dc7b7ce0649f7596a9c extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c906876c3f9f3cb41c79c130521a5ba6ef8a851920fa62f9c64b63a35314ab2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c906876c3f9f3cb41c79c130521a5ba6ef8a851920fa62f9c64b63a35314ab2e->enter($__internal_c906876c3f9f3cb41c79c130521a5ba6ef8a851920fa62f9c64b63a35314ab2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EzPublishCoreBundle::viewbase_layout.html.twig"));

        // line 4
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_c906876c3f9f3cb41c79c130521a5ba6ef8a851920fa62f9c64b63a35314ab2e->leave($__internal_c906876c3f9f3cb41c79c130521a5ba6ef8a851920fa62f9c64b63a35314ab2e_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_4de3ec87d084c92fa1ae20d24c704511c805e6755a043ce6d506bf7058db79f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4de3ec87d084c92fa1ae20d24c704511c805e6755a043ce6d506bf7058db79f4->enter($__internal_4de3ec87d084c92fa1ae20d24c704511c805e6755a043ce6d506bf7058db79f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_4de3ec87d084c92fa1ae20d24c704511c805e6755a043ce6d506bf7058db79f4->leave($__internal_4de3ec87d084c92fa1ae20d24c704511c805e6755a043ce6d506bf7058db79f4_prof);

    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle::viewbase_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# this is the layout used when we want to render a block with any decoration
 # ie with using the complete pagelayout.
 #}
{% block content %}{% endblock %}
", "EzPublishCoreBundle::viewbase_layout.html.twig", "/var/www/html/ez/vendor/ezsystems/ezpublish-kernel/eZ/Bundle/EzPublishCoreBundle/Resources/views/viewbase_layout.html.twig");
    }
}

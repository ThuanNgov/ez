<?php

/* EzPublishCoreBundle:default:content/full.html.twig */
class __TwigTemplate_be237d5cdc4054be7fb65d59757f9802d7badd5d2d5a0997fe9adc82df049515 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((((isset($context["noLayout"]) ? $context["noLayout"] : $this->getContext($context, "noLayout")) == true)) ? ((isset($context["viewbaseLayout"]) ? $context["viewbaseLayout"] : $this->getContext($context, "viewbaseLayout"))) : ((isset($context["pagelayout"]) ? $context["pagelayout"] : $this->getContext($context, "pagelayout")))), "EzPublishCoreBundle:default:content/full.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a462ef90f91acc8de1c1dfba2cfc8439ff5f9046a2282729195ba8edca7d426e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a462ef90f91acc8de1c1dfba2cfc8439ff5f9046a2282729195ba8edca7d426e->enter($__internal_a462ef90f91acc8de1c1dfba2cfc8439ff5f9046a2282729195ba8edca7d426e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EzPublishCoreBundle:default:content/full.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a462ef90f91acc8de1c1dfba2cfc8439ff5f9046a2282729195ba8edca7d426e->leave($__internal_a462ef90f91acc8de1c1dfba2cfc8439ff5f9046a2282729195ba8edca7d426e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_1956740bb7a5bb581444fc7a5802195ce8e318db33c78ba64f0d8447eaddfe2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1956740bb7a5bb581444fc7a5802195ce8e318db33c78ba64f0d8447eaddfe2a->enter($__internal_1956740bb7a5bb581444fc7a5802195ce8e318db33c78ba64f0d8447eaddfe2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->env->getExtension('eZ\Publish\Core\MVC\Symfony\Templating\Twig\Extension\ContentExtension')->getTranslatedContentName((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))), "html", null, true);
        echo "</h2>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "fieldsByLanguage", array(0 => ((array_key_exists("language", $context)) ? (_twig_default_filter((isset($context["language"]) ? $context["language"] : $this->getContext($context, "language")), null)) : (null))), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 5
            echo "        <h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldDefIdentifier", array()), "html", null, true);
            echo "</h3>
        ";
            // line 6
            echo call_user_func_array($this->env->getFunction('ez_render_field')->getCallable(), array($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), $this->getAttribute($context["field"], "fieldDefIdentifier", array())));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_1956740bb7a5bb581444fc7a5802195ce8e318db33c78ba64f0d8447eaddfe2a->leave($__internal_1956740bb7a5bb581444fc7a5802195ce8e318db33c78ba64f0d8447eaddfe2a_prof);

    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle:default:content/full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  48 => 5,  44 => 4,  39 => 3,  33 => 2,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends noLayout == true ? viewbaseLayout : pagelayout %}
{% block content %}
    <h2>{{ ez_content_name(content) }}</h2>
    {% for field in content.fieldsByLanguage(language|default(null)) %}
        <h3>{{ field.fieldDefIdentifier }}</h3>
        {{ ez_render_field(content, field.fieldDefIdentifier) }}
    {% endfor %}
{% endblock %}
", "EzPublishCoreBundle:default:content/full.html.twig", "/var/www/html/ez/vendor/ezsystems/ezpublish-kernel/eZ/Bundle/EzPublishCoreBundle/Resources/views/default/content/full.html.twig");
    }
}

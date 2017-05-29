<?php

/* EzPublishCoreBundle::pagelayout.html.twig */
class __TwigTemplate_b86e3f27f3ec38b068905257aecb6fc74a4c387b7be5fcba31adb1c6898e2633 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        $__internal_0b864e5ad02435145c69ee31f34b326a6ee793a166922dae274f3f4e1d1c86be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b864e5ad02435145c69ee31f34b326a6ee793a166922dae274f3f4e1d1c86be->enter($__internal_0b864e5ad02435145c69ee31f34b326a6ee793a166922dae274f3f4e1d1c86be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EzPublishCoreBundle::pagelayout.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), array("_" => "-")), "html", null, true);
        echo "\">
<head>
    <meta charset=\"utf-8\">
    ";
        // line 5
        if ((array_key_exists("content", $context) &&  !array_key_exists("title", $context))) {
            // line 6
            echo "        ";
            $context["title"] = $this->env->getExtension('eZ\Publish\Core\MVC\Symfony\Templating\Twig\Extension\ContentExtension')->getTranslatedContentName((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")));
            // line 7
            echo "    ";
        }
        // line 8
        echo "    <title>";
        echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "Home")) : ("Home")), "html", null, true);
        echo "</title>
    <meta name=\"generator\" content=\"eZ Platform\"/>
    ";
        // line 10
        if ((array_key_exists("content", $context) && $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contentInfo", array()), "mainLocationId", array()))) {
            // line 11
            echo "        <link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ez_urlalias", array("locationId" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contentInfo", array()), "mainLocationId", array()))), "html", null, true);
            echo "\" />
    ";
        }
        // line 13
        echo "</head>
<body>
";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "</body>
</html>
";
        
        $__internal_0b864e5ad02435145c69ee31f34b326a6ee793a166922dae274f3f4e1d1c86be->leave($__internal_0b864e5ad02435145c69ee31f34b326a6ee793a166922dae274f3f4e1d1c86be_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_012501a22bde9392e91f4945d66180918ff617049e2a17d63da4fc467779b992 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012501a22bde9392e91f4945d66180918ff617049e2a17d63da4fc467779b992->enter($__internal_012501a22bde9392e91f4945d66180918ff617049e2a17d63da4fc467779b992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_012501a22bde9392e91f4945d66180918ff617049e2a17d63da4fc467779b992->leave($__internal_012501a22bde9392e91f4945d66180918ff617049e2a17d63da4fc467779b992_prof);

    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle::pagelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  60 => 16,  58 => 15,  54 => 13,  48 => 11,  46 => 10,  40 => 8,  37 => 7,  34 => 6,  32 => 5,  26 => 2,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"{{ app.request.locale|replace({'_': '-'}) }}\">
<head>
    <meta charset=\"utf-8\">
    {% if content is defined and title is not defined %}
        {% set title = ez_content_name( content ) %}
    {% endif %}
    <title>{{ title|default( 'Home' ) }}</title>
    <meta name=\"generator\" content=\"eZ Platform\"/>
    {% if content is defined and content.contentInfo.mainLocationId %}
        <link rel=\"canonical\" href=\"{{ path( 'ez_urlalias', {'locationId': content.contentInfo.mainLocationId} ) }}\" />
    {% endif %}
</head>
<body>
{% block content %}{% endblock %}
</body>
</html>
", "EzPublishCoreBundle::pagelayout.html.twig", "/var/www/html/ez/vendor/ezsystems/ezpublish-kernel/eZ/Bundle/EzPublishCoreBundle/Resources/views/pagelayout.html.twig");
    }
}

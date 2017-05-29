<?php

/* @TedivmStash/Profiler/icon.svg */
class __TwigTemplate_5b80742a46c37c9f5cfb5d14c12d947207f643c7dfbc813ad485291f20a2424e extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        $__internal_8b1b520d312a070e1307c40b01e440f36d92b074de7bb7ee483d8a66fd89a2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1b520d312a070e1307c40b01e440f36d92b074de7bb7ee483d8a66fd89a2fd->enter($__internal_8b1b520d312a070e1307c40b01e440f36d92b074de7bb7ee483d8a66fd89a2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@TedivmStash/Profiler/icon.svg"));

        // line 1
        echo "<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\" d=\"M2,8 L6,3 L17,3 L21,8 L21,9 L21,21 L2,21 M3,8 L20,8 L16.5,3.6 L6.5,3.6 L3,8\"/>
    <text x=\"11.5\" y=\"18\" font-family=\"sans-serif\" font-size=\"10\" text-anchor=\"middle\">S</text>
</svg>
";
        
        $__internal_8b1b520d312a070e1307c40b01e440f36d92b074de7bb7ee483d8a66fd89a2fd->leave($__internal_8b1b520d312a070e1307c40b01e440f36d92b074de7bb7ee483d8a66fd89a2fd_prof);

    }

    public function getTemplateName()
    {
        return "@TedivmStash/Profiler/icon.svg";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" height=\"24\" viewBox=\"0 0 24 24\" enable-background=\"new 0 0 24 24\" xml:space=\"preserve\">
    <path fill=\"#AAAAAA\" d=\"M2,8 L6,3 L17,3 L21,8 L21,9 L21,21 L2,21 M3,8 L20,8 L16.5,3.6 L6.5,3.6 L3,8\"/>
    <text x=\"11.5\" y=\"18\" font-family=\"sans-serif\" font-size=\"10\" text-anchor=\"middle\">S</text>
</svg>
", "@TedivmStash/Profiler/icon.svg", "/var/www/html/ez/vendor/tedivm/stash-bundle/Resources/views/Profiler/icon.svg");
    }
}

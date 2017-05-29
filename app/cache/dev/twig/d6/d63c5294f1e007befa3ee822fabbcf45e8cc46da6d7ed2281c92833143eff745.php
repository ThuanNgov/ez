<?php

/* TedivmStashBundle:Profiler:layout.html.twig */
class __TwigTemplate_19aac93a7aececf614cd05081a4bbe91766193e04a36ee6c02565d11121fd7b7 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "TedivmStashBundle:Profiler:layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_feb169eccd65d223b522e3a474eb639b969d2ec03ff63086143787732d7e4b70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feb169eccd65d223b522e3a474eb639b969d2ec03ff63086143787732d7e4b70->enter($__internal_feb169eccd65d223b522e3a474eb639b969d2ec03ff63086143787732d7e4b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TedivmStashBundle:Profiler:layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_feb169eccd65d223b522e3a474eb639b969d2ec03ff63086143787732d7e4b70->leave($__internal_feb169eccd65d223b522e3a474eb639b969d2ec03ff63086143787732d7e4b70_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9b6d094e58e55d0aaa3c565b10872f092e333afd23a83ea59feffe043e422700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6d094e58e55d0aaa3c565b10872f092e333afd23a83ea59feffe043e422700->enter($__internal_9b6d094e58e55d0aaa3c565b10872f092e333afd23a83ea59feffe043e422700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()) > 0) || ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()) > 0))) {
            // line 5
            echo "        ";
            $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
            // line 6
            echo "
        ";
            // line 7
            ob_start();
            // line 8
            echo "            ";
            if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
                // line 9
                echo "                <img width=\"22\" height=\"28\" alt=\"Memory Usage\" style=\"vertical-align: middle;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAcCAYAAABlL09dAAAABGdBTUEAALGPC/xhBQAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9wHGAALFQCM6LQAAAFwSURBVEjH7ZW9S4JRFIefRAoaAmlpbguCiKaGIqjh1FI0SV+vH6G2BmW4RlJG0Rj08RcE0aI3bGqPioagD6IpSEISGiSiBt/ATK+91ynwLBfOOffhx+/cD6jHv40GpVQ7EDXcnxCR+7JgAKVUGhgyAJ8CAyLyWVpw2esC8GEA7gesiopt1btA0AD+AnSISKacYoAYkDMAtwKJSlYgIs/AmuEQLaXUYHHCXdKwBdxqAFlN7UkH7jQ8Hd9z2gZuROTNXZQcBg6AZgPmOxAC2gAvEHXZUC9wZAjNASPAgy2ssdiKa6DX0IEM0GJfluYfHi8txi5qeRdWE/F5wFPpHNf05pQm3Lru4GyAyakJPJ6CmO6unkqtLkdgf8DHxvomyWSKfD7vSLHWipXlOGPjo6RPjglHQo680YJTKYU17ScSnsPyzehamxxZcX55VrjH2Sx7O/t/teKxKlgzrHLgV8AvIodVwQ7iDugTkav6b/8rvgBcMlqf0kD/YAAAAABJRU5ErkJggg==\" />

                <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()), "html", null, true);
                echo " call";
                if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()) != 1)) {
                    echo "s";
                }
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()), "html", null, true);
                echo " hit";
                if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()) != 1)) {
                    echo "s";
                }
                echo "</span>
            ";
            } else {
                // line 13
                echo "                ";
                $context["status"] = (((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()) / $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array())) < 0.33)) ? ("red") : ((((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()) / $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array())) < 0.66)) ? ("yellow") : (""))));
                // line 14
                echo "
                ";
                // line 15
                echo twig_include($this->env, $context, "@TedivmStash/Profiler/icon.svg");
                echo "

                <span class=\"sf-toolbar-value\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()), "html", null, true);
                echo "</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">call";
                // line 19
                if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()) != 1)) {
                    echo "s";
                }
                echo "</span>
                </span>
                <span class=\"sf-toolbar-label\">/</span>
                <span class=\"sf-toolbar-value\">";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()), "html", null, true);
                echo "</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">hit";
                // line 24
                if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()) != 1)) {
                    echo "s";
                }
                echo "</span>
                </span>
            ";
            }
            // line 27
            echo "        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 28
            echo "
        ";
            // line 29
            ob_start();
            // line 30
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Total Response</b> <span class=\"sf-toolbar-status\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Default Queue</b> <span>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "default", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Av. Drivers</b> <span>";
            // line 37
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "drivers", array()), ", "), "html", null, true);
            echo "</span>
            </div>
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "caches", array()));
            foreach ($context['_seq'] as $context["name"] => $context["details"]) {
                // line 40
                echo "                <hr style=\"border: 1px solid #ccc;\">
                <div class=\"sf-toolbar-info-piece\">
                    <b><i>";
                // line 42
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</i></b> <span class=\"sf-toolbar-status\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "calls", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "hits", array()), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Drivers</b> <span>";
                // line 45
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute($context["details"], "options", array()), "drivers", array()), ", "), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['details'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 49
            echo "
        ";
            // line 50
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")), "status" => ((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "")) : (""))));
            echo "
    ";
        }
        
        $__internal_9b6d094e58e55d0aaa3c565b10872f092e333afd23a83ea59feffe043e422700->leave($__internal_9b6d094e58e55d0aaa3c565b10872f092e333afd23a83ea59feffe043e422700_prof);

    }

    // line 54
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c3c88e60738fcccfa2a07cfb5af52332062bc16fd1cfd456278dfd3ba44bf34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3c88e60738fcccfa2a07cfb5af52332062bc16fd1cfd456278dfd3ba44bf34->enter($__internal_1c3c88e60738fcccfa2a07cfb5af52332062bc16fd1cfd456278dfd3ba44bf34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 55
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 56
        echo "
    ";
        // line 57
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 58
            echo "        <span class=\"label\">
            <span class=\"icon\">
                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAkCAYAAAAD3IPhAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9wJGRMhOUTTjFIAAAUYSURBVFjDzZhtiFRlFMd/55nryNqa7KaI9CER18pCWz/Y+gYFlnekD34QjMrs9VMRIuJbpURIUSRIRRAIRkH5kpWQc2M3o/ogBCuWq7TrW+smO75nq+vqzNx/H/bOOjvOjneXjXrgMneeOec8Z875n/8598L/aFk6na4BaoBR0Z7MzMoJS5KZKY5dSQ64bGadvu/3xHHGA+YAb5rZGEBA2HtmWX9CIHsro5KSZuYBf0hqDIKgGdjr+35FXc/M9gFdwAOSKDgh9Q+AmTGAgzeH5YaNiWb2UGT/YaC5kp7zff+8pM2Sus2skApKryFhoDelAkZL2tjY2OgqOhN9/gRsKtiIDAwLJoscW5DNZpfFEg6CYKqkLWbWoAqgGeJSBOpuM7vL9/1zlSKDpJPAbuBipDisVRtV6Shgy63SRBiG3cAnwB4zyw9vYPql/7EgCBZXTFNhpdNp38w+AiYONR0x5NqAeb7vnykbmSKgtQHbJV0tSmHZqwy/WMn3cjIAU4B30un0iFLSKxXOAJ+aWShpCpA3szAi4FIeKahlgWy0bwW+MjMVyRiQMLMLkk4BraVsPmBIgyC4T9I9QC5SGlkiP1JSIrrviZxOFslYpOMBCsPQgBHR/t/OuQzQCbQW2sVNkdmzZ88k4DNJd0eUruiflqbAyrF1SQqtqJIKOhYp/iVpbSqV+rVsZIIgmCRpBzAjOuiWgCxtIRWqUEWU0WVm70raDdwGHE+lUhkrqqIa4GMzWzxQNIaB9AAuSdrknPtR0iPAuIhS9nmRI3cC7wGLi3qTFU8Ow9QW2oHNZrYfWG5miyR9KykP4DU2NTpJvkItAa5LSt5c7YY56zazywivyLgTvSA2jOg+yhkOKADcXMIdVKgN2Wz2jHPuZWBRFP1rQE4S3uy5s5XpzDQfO3L8JSkcBVQVGekjaDO74FzisqQRfX2034GGqV9BOKz3tzAMr40bO27fufPnTrm82xnNUP3wZWZ4c2bOGwlsTSQSOfWucIBxwAbb0RWJhvkwF4bhc0uffvKNadOnzSlHimaGF3HF9Fwu96/Ot5IIw7C+aHy10or2DJOAwdSNc24gXqmM4kjPeqm5X5ok4YFiT3Ljx4/nmWeXscB/lJqaGgBaW9vYvm0Hu77cFX/SujEFWnG6vLjR8DyPt97eSP2MetrajnDwtxbMGbW1tax7dU0sZzBLVGpFsZ1JJBLUz6jn+PETrFyxko6OPwGorq5m1qyGuDOxlcGSi1pFfGfy+TxtbUeoq5vMmrVr6Og4SUvLYZqammhsbBrcQFxm28xwcZ3J5XKsWrmapqbvmTW7gSWPL2H9htf4ZvfXTJ16b+zHhXLRKjC8A4tdDe3t7axauZqGmbN56omlBOnvqK2tYe26NfGqsHcKuClNhb7lbjHW9FvVo6tJJBJcv36dQ4cOs/71DWQyGSbXTY4ZGFcOFn2PzLFLO5lMsuurnXzx+TZaf28lm8sxb95cJkyYQHv7yZg801fKfaRnZhcLI25sAIdhSEdHBy+8+DxVVVV9+y0HW/jg/Q9jAthcEU4E7AV2AqdTqZS8wQB4+SsrqJtSx9ixd2DmuHLlCseOHqWzMxN3kigUTB4IJG0Eflm4cGF+UJEB6OrqYn/z/iH3p3w+l3POnc7n81uBbclk8sD8+fNVTHqm2BAe+nLm6OnpOTBmzO0/nD177udsNnsplUqphIGtG3E/Rv7ffS1Foqfn2omZMx+8GvOF03+7/gEOqoOB52x0lgAAAABJRU5ErkJggg==\" alt=\"\" />
            </span>
            <strong>Stash</strong>
            <span class=\"count\">
                <span>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()), "html", null, true);
            echo "</span>
            </span>
        </span>
    ";
        } else {
            // line 68
            echo "        <span class=\"label ";
            echo (((($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()) == 0) && ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()) == 0))) ? ("disabled") : (""));
            echo "\">
            <span class=\"icon\">";
            // line 69
            echo twig_include($this->env, $context, "@TedivmStash/Profiler/icon.svg");
            echo "</span>
            <strong>Stash</strong>
        </span>
    ";
        }
        
        $__internal_1c3c88e60738fcccfa2a07cfb5af52332062bc16fd1cfd456278dfd3ba44bf34->leave($__internal_1c3c88e60738fcccfa2a07cfb5af52332062bc16fd1cfd456278dfd3ba44bf34_prof);

    }

    // line 75
    public function block_panel($context, array $blocks = array())
    {
        $__internal_57e996f9ec7c4aabc06c4e05ebc9fe33cc9ab0082172a51f19b48565d35542d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e996f9ec7c4aabc06c4e05ebc9fe33cc9ab0082172a51f19b48565d35542d0->enter($__internal_57e996f9ec7c4aabc06c4e05ebc9fe33cc9ab0082172a51f19b48565d35542d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 76
        echo "    ";
        $context["profiler_markup_version"] = ((array_key_exists("profiler_markup_version", $context)) ? (_twig_default_filter((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")), 1)) : (1));
        // line 77
        echo "
    <h2>Cache Information</h2>
    ";
        // line 79
        if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
            // line 80
            echo "        <table>
            <tr>
                <th>Default Cache</th>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "default", array()), "html", null, true);
            echo "</td>
            <tr>
                <th>Available Drivers</th>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "drivers", array()), ", "), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Total Requests</th>
                <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Total Hits</th>
                <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()), "html", null, true);
            echo "</td>
            </tr>
        </table>
    ";
        } else {
            // line 98
            echo "        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total requests</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hits", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Total hits</span>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Key</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Default Cache</th>
                    <td>";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "default", array()), "html", null, true);
            echo "</td>
                <tr>
                <tr>
                    <th>Available Drivers</th>
                    <td>";
            // line 122
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "drivers", array()), ", "), "html", null, true);
            echo "</td>
                </tr>
            </tbody>
        </table>
    ";
        }
        // line 127
        echo "
    ";
        // line 128
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "caches", array()));
        foreach ($context['_seq'] as $context["name"] => $context["details"]) {
            // line 129
            echo "        <h2>Cache Service: <i>";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</i></h2>
        ";
            // line 130
            if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
                // line 131
                echo "            <table>
                <tr>
                    <th>Drivers</th>
                    <td>";
                // line 134
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute($context["details"], "options", array()), "drivers", array()), ", "), "html", null, true);
                echo "</td>
                </tr>
                <tr>
                    <th>Calls</th>
                    <td>";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "calls", array()), "html", null, true);
                echo "</td>
                </tr>
                <tr>
                    <th>Hits</th>
                    <td>";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "hits", array()), "html", null, true);
                echo "</td>
                </tr>
                <tr>
                    <th>Doctrine Adapter</th>
                    <td>";
                // line 146
                echo (($this->getAttribute($this->getAttribute($context["details"], "options", array()), "registerDoctrineAdapter", array())) ? ("true") : ("false"));
                echo "</td>
                </tr>
                <tr>
                    <th>Cache In-Memory</th>
                    <td>";
                // line 150
                echo (($this->getAttribute($this->getAttribute($context["details"], "options", array()), "inMemory", array())) ? ("true") : ("false"));
                echo "</td>
                </tr>
            </table>
        ";
            } else {
                // line 154
                echo "            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "calls", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Requests</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "hits", array()), "html", null, true);
                echo "</span>
                    <span class=\"label\">Hits</span>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Key</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Drivers</th>
                        <td>";
                // line 174
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute($context["details"], "options", array()), "drivers", array()), ", "), "html", null, true);
                echo "</td>
                    </tr>
                    </tr>
                    <tr>
                        <th>Doctrine Adapter</th>
                        <td>";
                // line 179
                echo (($this->getAttribute($this->getAttribute($context["details"], "options", array()), "registerDoctrineAdapter", array())) ? ("true") : ("false"));
                echo "</td>
                    </tr>
                    <tr>
                        <th>Cache In-Memory</th>
                        <td>";
                // line 183
                echo (($this->getAttribute($this->getAttribute($context["details"], "options", array()), "inMemory", array())) ? ("true") : ("false"));
                echo "</td>
                    </tr>
                </tbody>
            </table>
        ";
            }
            // line 188
            echo "
        <h3>Driver Options</h3>
        ";
            // line 190
            if (((isset($context["profiler_markup_version"]) ? $context["profiler_markup_version"] : $this->getContext($context, "profiler_markup_version")) == 1)) {
                // line 191
                echo "            <table>
                ";
                // line 192
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["details"], "options", array()));
                foreach ($context['_seq'] as $context["name"] => $context["options"]) {
                    // line 193
                    echo "                    ";
                    if ((($context["name"] != "drivers") && twig_in_filter($context["name"], $this->getAttribute($this->getAttribute($context["details"], "options", array()), "drivers", array())))) {
                        // line 194
                        echo "                        <tr>
                            <th colspan=\"2\"><h3 style=\"font-size: 16px; margin-bottom: 0;\">";
                        // line 195
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo " settings</h3></th>
                        </tr>
                        ";
                        // line 197
                        if (twig_in_filter($context["name"], array(0 => "Memcache", 1 => "Redis"))) {
                            // line 198
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["options"], "servers", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["ovalue"]) {
                                // line 199
                                echo "                                <tr>
                                    <th>Server</th>
                                    <td>";
                                // line 201
                                echo twig_escape_filter($this->env, $this->getAttribute($context["ovalue"], "server", array()), "html", null, true);
                                echo ":";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["ovalue"], "port", array()), "html", null, true);
                                echo " ";
                                if ($this->getAttribute($context["ovalue"], "weight", array(), "any", true, true)) {
                                    echo "(weight ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["ovalue"], "weight", array()), "html", null, true);
                                    echo ")";
                                }
                                echo "</td>
                                </tr>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ovalue'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 204
                            echo "                        ";
                        } else {
                            // line 205
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["options"]);
                            foreach ($context['_seq'] as $context["oname"] => $context["ovalue"]) {
                                // line 206
                                echo "                                <tr>
                                    <th>";
                                // line 207
                                echo twig_escape_filter($this->env, $context["oname"], "html", null, true);
                                echo "</th>
                                    ";
                                // line 208
                                if ((($context["oname"] == "filePermissions") || ($context["oname"] == "dirPermissions"))) {
                                    // line 209
                                    echo "                                        <td>";
                                    echo twig_escape_filter($this->env, sprintf("%o", $context["ovalue"]), "html", null, true);
                                    echo "
                                    ";
                                } else {
                                    // line 211
                                    echo "                                        <td>";
                                    echo twig_escape_filter($this->env, $context["ovalue"], "html", null, true);
                                    echo "</td>
                                    ";
                                }
                                // line 213
                                echo "                                </tr>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['oname'], $context['ovalue'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 215
                            echo "                        ";
                        }
                        // line 216
                        echo "                    ";
                    }
                    // line 217
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['options'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 218
                echo "            </table>
        ";
            } else {
                // line 220
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["details"], "options", array()));
                foreach ($context['_seq'] as $context["name"] => $context["options"]) {
                    // line 221
                    echo "                ";
                    if ((($context["name"] != "drivers") && twig_in_filter($context["name"], $this->getAttribute($this->getAttribute($context["details"], "options", array()), "drivers", array())))) {
                        // line 222
                        echo "                    <table>
                        <thead>
                            <tr>
                                <th colspan=\"2\">";
                        // line 225
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo " settings</th>
                            </th>
                        </thead>
                        <tbody>
                        ";
                        // line 229
                        if (twig_in_filter($context["name"], array(0 => "Memcache", 1 => "Redis"))) {
                            // line 230
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["options"], "servers", array()));
                            foreach ($context['_seq'] as $context["_key"] => $context["ovalue"]) {
                                // line 231
                                echo "                                <tr>
                                    <th>Server</th>
                                    <td>";
                                // line 233
                                echo twig_escape_filter($this->env, $this->getAttribute($context["ovalue"], "server", array()), "html", null, true);
                                echo ":";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["ovalue"], "port", array()), "html", null, true);
                                echo " ";
                                if ($this->getAttribute($context["ovalue"], "weight", array(), "any", true, true)) {
                                    echo "(weight ";
                                    echo twig_escape_filter($this->env, $this->getAttribute($context["ovalue"], "weight", array()), "html", null, true);
                                    echo ")";
                                }
                                echo "</td>
                                </tr>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ovalue'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 236
                            echo "                        ";
                        } else {
                            // line 237
                            echo "                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable($context["options"]);
                            foreach ($context['_seq'] as $context["oname"] => $context["ovalue"]) {
                                // line 238
                                echo "                                <tr>
                                    <th>";
                                // line 239
                                echo twig_escape_filter($this->env, $context["oname"], "html", null, true);
                                echo "</th>
                                    ";
                                // line 240
                                if ((($context["oname"] == "filePermissions") || ($context["oname"] == "dirPermissions"))) {
                                    // line 241
                                    echo "                                        <td>";
                                    echo twig_escape_filter($this->env, sprintf("%o", $context["ovalue"]), "html", null, true);
                                    echo "
                                    ";
                                } else {
                                    // line 243
                                    echo "                                        <td>";
                                    echo twig_escape_filter($this->env, $context["ovalue"], "html", null, true);
                                    echo "</td>
                                    ";
                                }
                                // line 245
                                echo "                                </tr>
                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['oname'], $context['ovalue'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 247
                            echo "                        ";
                        }
                        // line 248
                        echo "                        </tbody>
                ";
                    }
                    // line 250
                    echo "                </table>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['options'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 252
                echo "        ";
            }
            // line 253
            echo "
        <h3>Query Record</h3>
        ";
            // line 255
            if ( !twig_length_filter($this->env, $this->getAttribute($context["details"], "queries", array()))) {
                // line 256
                echo "            <div class=\"empty\">
                <p>No queries were performed.</p>
            </div>
        ";
            } else {
                // line 260
                echo "            <table>
                <thead>
                    <tr>
                        <th>Request Key</th>
                        <th>Hit?</th>
                        <th>Returned Value</th>
                    </tr>
                 </thead>
                 <tbody>
                    ";
                // line 269
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["details"], "queries", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                    // line 270
                    echo "                        <tr>
                            <td>";
                    // line 271
                    echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "key", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 272
                    echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "hit", array()), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 273
                    echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "value", array()), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 276
                echo "                </tbody>
            </table>
        ";
            }
            // line 279
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_57e996f9ec7c4aabc06c4e05ebc9fe33cc9ab0082172a51f19b48565d35542d0->leave($__internal_57e996f9ec7c4aabc06c4e05ebc9fe33cc9ab0082172a51f19b48565d35542d0_prof);

    }

    public function getTemplateName()
    {
        return "TedivmStashBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  684 => 279,  679 => 276,  670 => 273,  666 => 272,  662 => 271,  659 => 270,  655 => 269,  644 => 260,  638 => 256,  636 => 255,  632 => 253,  629 => 252,  622 => 250,  618 => 248,  615 => 247,  608 => 245,  602 => 243,  596 => 241,  594 => 240,  590 => 239,  587 => 238,  582 => 237,  579 => 236,  562 => 233,  558 => 231,  553 => 230,  551 => 229,  544 => 225,  539 => 222,  536 => 221,  531 => 220,  527 => 218,  521 => 217,  518 => 216,  515 => 215,  508 => 213,  502 => 211,  496 => 209,  494 => 208,  490 => 207,  487 => 206,  482 => 205,  479 => 204,  462 => 201,  458 => 199,  453 => 198,  451 => 197,  446 => 195,  443 => 194,  440 => 193,  436 => 192,  433 => 191,  431 => 190,  427 => 188,  419 => 183,  412 => 179,  404 => 174,  387 => 160,  380 => 156,  376 => 154,  369 => 150,  362 => 146,  355 => 142,  348 => 138,  341 => 134,  336 => 131,  334 => 130,  329 => 129,  325 => 128,  322 => 127,  314 => 122,  307 => 118,  290 => 104,  283 => 100,  279 => 98,  272 => 94,  265 => 90,  258 => 86,  252 => 83,  247 => 80,  245 => 79,  241 => 77,  238 => 76,  232 => 75,  220 => 69,  215 => 68,  206 => 64,  198 => 58,  196 => 57,  193 => 56,  190 => 55,  184 => 54,  174 => 50,  171 => 49,  168 => 48,  159 => 45,  149 => 42,  145 => 40,  141 => 39,  136 => 37,  130 => 34,  122 => 31,  119 => 30,  117 => 29,  114 => 28,  111 => 27,  103 => 24,  98 => 22,  90 => 19,  85 => 17,  80 => 15,  77 => 14,  74 => 13,  59 => 11,  55 => 9,  52 => 8,  50 => 7,  47 => 6,  44 => 5,  41 => 4,  35 => 3,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends app.request.isXmlHttpRequest ? '@WebProfiler/Profiler/ajax_layout.html.twig' : '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% if collector.calls > 0 or collector.hits > 0 %}
        {% set profiler_markup_version = profiler_markup_version|default(1) %}

        {% set icon %}
            {% if profiler_markup_version == 1 %}
                <img width=\"22\" height=\"28\" alt=\"Memory Usage\" style=\"vertical-align: middle;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAcCAYAAABlL09dAAAABGdBTUEAALGPC/xhBQAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9wHGAALFQCM6LQAAAFwSURBVEjH7ZW9S4JRFIefRAoaAmlpbguCiKaGIqjh1FI0SV+vH6G2BmW4RlJG0Rj08RcE0aI3bGqPioagD6IpSEISGiSiBt/ATK+91ynwLBfOOffhx+/cD6jHv40GpVQ7EDXcnxCR+7JgAKVUGhgyAJ8CAyLyWVpw2esC8GEA7gesiopt1btA0AD+AnSISKacYoAYkDMAtwKJSlYgIs/AmuEQLaXUYHHCXdKwBdxqAFlN7UkH7jQ8Hd9z2gZuROTNXZQcBg6AZgPmOxAC2gAvEHXZUC9wZAjNASPAgy2ssdiKa6DX0IEM0GJfluYfHi8txi5qeRdWE/F5wFPpHNf05pQm3Lru4GyAyakJPJ6CmO6unkqtLkdgf8DHxvomyWSKfD7vSLHWipXlOGPjo6RPjglHQo680YJTKYU17ScSnsPyzehamxxZcX55VrjH2Sx7O/t/teKxKlgzrHLgV8AvIodVwQ7iDugTkav6b/8rvgBcMlqf0kD/YAAAAABJRU5ErkJggg==\" />

                <span class=\"sf-toolbar-status sf-toolbar-status-green\">{{ collector.calls }} call{% if collector.calls != 1 %}s{% endif %} / {{ collector.hits }} hit{% if collector.hits != 1 %}s{% endif %}</span>
            {% else %}
                {% set status = (collector.hits/collector.calls) < 0.33 ? 'red' : (collector.hits/collector.calls) < 0.66 ? 'yellow' : '' %}

                {{ include('@TedivmStash/Profiler/icon.svg') }}

                <span class=\"sf-toolbar-value\">{{ collector.calls }}</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">call{% if collector.calls != 1 %}s{% endif %}</span>
                </span>
                <span class=\"sf-toolbar-label\">/</span>
                <span class=\"sf-toolbar-value\">{{ collector.hits }}</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">hit{% if collector.hits != 1 %}s{% endif %}</span>
                </span>
            {% endif %}
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Total Response</b> <span class=\"sf-toolbar-status\">{{ collector.calls }} / {{ collector.hits }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Default Queue</b> <span>{{ collector.default }}</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Av. Drivers</b> <span>{{ collector.drivers|join(', ') }}</span>
            </div>
            {% for name, details in collector.caches %}
                <hr style=\"border: 1px solid #ccc;\">
                <div class=\"sf-toolbar-info-piece\">
                    <b><i>{{ name }}</i></b> <span class=\"sf-toolbar-status\">{{ details.calls }} / {{ details.hits }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Drivers</b> <span>{{ details.options.drivers|join(', ') }}</span>
                </div>
            {% endfor %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status|default('') }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if profiler_markup_version == 1 %}
        <span class=\"label\">
            <span class=\"icon\">
                <img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAkCAYAAAAD3IPhAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9wJGRMhOUTTjFIAAAUYSURBVFjDzZhtiFRlFMd/55nryNqa7KaI9CER18pCWz/Y+gYFlnekD34QjMrs9VMRIuJbpURIUSRIRRAIRkH5kpWQc2M3o/ogBCuWq7TrW+smO75nq+vqzNx/H/bOOjvOjneXjXrgMneeOec8Z875n/8598L/aFk6na4BaoBR0Z7MzMoJS5KZKY5dSQ64bGadvu/3xHHGA+YAb5rZGEBA2HtmWX9CIHsro5KSZuYBf0hqDIKgGdjr+35FXc/M9gFdwAOSKDgh9Q+AmTGAgzeH5YaNiWb2UGT/YaC5kp7zff+8pM2Sus2skApKryFhoDelAkZL2tjY2OgqOhN9/gRsKtiIDAwLJoscW5DNZpfFEg6CYKqkLWbWoAqgGeJSBOpuM7vL9/1zlSKDpJPAbuBipDisVRtV6Shgy63SRBiG3cAnwB4zyw9vYPql/7EgCBZXTFNhpdNp38w+AiYONR0x5NqAeb7vnykbmSKgtQHbJV0tSmHZqwy/WMn3cjIAU4B30un0iFLSKxXOAJ+aWShpCpA3szAi4FIeKahlgWy0bwW+MjMVyRiQMLMLkk4BraVsPmBIgyC4T9I9QC5SGlkiP1JSIrrviZxOFslYpOMBCsPQgBHR/t/OuQzQCbQW2sVNkdmzZ88k4DNJd0eUruiflqbAyrF1SQqtqJIKOhYp/iVpbSqV+rVsZIIgmCRpBzAjOuiWgCxtIRWqUEWU0WVm70raDdwGHE+lUhkrqqIa4GMzWzxQNIaB9AAuSdrknPtR0iPAuIhS9nmRI3cC7wGLi3qTFU8Ow9QW2oHNZrYfWG5miyR9KykP4DU2NTpJvkItAa5LSt5c7YY56zazywivyLgTvSA2jOg+yhkOKADcXMIdVKgN2Wz2jHPuZWBRFP1rQE4S3uy5s5XpzDQfO3L8JSkcBVQVGekjaDO74FzisqQRfX2034GGqV9BOKz3tzAMr40bO27fufPnTrm82xnNUP3wZWZ4c2bOGwlsTSQSOfWucIBxwAbb0RWJhvkwF4bhc0uffvKNadOnzSlHimaGF3HF9Fwu96/Ot5IIw7C+aHy10or2DJOAwdSNc24gXqmM4kjPeqm5X5ok4YFiT3Ljx4/nmWeXscB/lJqaGgBaW9vYvm0Hu77cFX/SujEFWnG6vLjR8DyPt97eSP2MetrajnDwtxbMGbW1tax7dU0sZzBLVGpFsZ1JJBLUz6jn+PETrFyxko6OPwGorq5m1qyGuDOxlcGSi1pFfGfy+TxtbUeoq5vMmrVr6Og4SUvLYZqammhsbBrcQFxm28xwcZ3J5XKsWrmapqbvmTW7gSWPL2H9htf4ZvfXTJ16b+zHhXLRKjC8A4tdDe3t7axauZqGmbN56omlBOnvqK2tYe26NfGqsHcKuClNhb7lbjHW9FvVo6tJJBJcv36dQ4cOs/71DWQyGSbXTY4ZGFcOFn2PzLFLO5lMsuurnXzx+TZaf28lm8sxb95cJkyYQHv7yZg801fKfaRnZhcLI25sAIdhSEdHBy+8+DxVVVV9+y0HW/jg/Q9jAthcEU4E7AV2AqdTqZS8wQB4+SsrqJtSx9ixd2DmuHLlCseOHqWzMxN3kigUTB4IJG0Eflm4cGF+UJEB6OrqYn/z/iH3p3w+l3POnc7n81uBbclk8sD8+fNVTHqm2BAe+nLm6OnpOTBmzO0/nD177udsNnsplUqphIGtG3E/Rv7ffS1Foqfn2omZMx+8GvOF03+7/gEOqoOB52x0lgAAAABJRU5ErkJggg==\" alt=\"\" />
            </span>
            <strong>Stash</strong>
            <span class=\"count\">
                <span>{{ collector.calls }} / {{ collector.hits }}</span>
            </span>
        </span>
    {% else %}
        <span class=\"label {{ collector.calls == 0 and collector.hits == 0 ? 'disabled' }}\">
            <span class=\"icon\">{{ include('@TedivmStash/Profiler/icon.svg') }}</span>
            <strong>Stash</strong>
        </span>
    {% endif %}
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    <h2>Cache Information</h2>
    {% if profiler_markup_version == 1 %}
        <table>
            <tr>
                <th>Default Cache</th>
                <td>{{ collector.default }}</td>
            <tr>
                <th>Available Drivers</th>
                <td>{{ collector.drivers|join(', ') }}</td>
            </tr>
            <tr>
                <th>Total Requests</th>
                <td>{{ collector.calls }}</td>
            </tr>
            <tr>
                <th>Total Hits</th>
                <td>{{ collector.hits }}</td>
            </tr>
        </table>
    {% else %}
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.calls }}</span>
                <span class=\"label\">Total requests</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.hits }}</span>
                <span class=\"label\">Total hits</span>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Key</th>
                    <th>Value</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>Default Cache</th>
                    <td>{{ collector.default }}</td>
                <tr>
                <tr>
                    <th>Available Drivers</th>
                    <td>{{ collector.drivers|join(', ') }}</td>
                </tr>
            </tbody>
        </table>
    {% endif %}

    {% for name, details in collector.caches %}
        <h2>Cache Service: <i>{{ name }}</i></h2>
        {% if profiler_markup_version == 1 %}
            <table>
                <tr>
                    <th>Drivers</th>
                    <td>{{ details.options.drivers|join(', ') }}</td>
                </tr>
                <tr>
                    <th>Calls</th>
                    <td>{{ details.calls }}</td>
                </tr>
                <tr>
                    <th>Hits</th>
                    <td>{{ details.hits }}</td>
                </tr>
                <tr>
                    <th>Doctrine Adapter</th>
                    <td>{{ details.options.registerDoctrineAdapter ? 'true' : 'false' }}</td>
                </tr>
                <tr>
                    <th>Cache In-Memory</th>
                    <td>{{ details.options.inMemory ? 'true' : 'false' }}</td>
                </tr>
            </table>
        {% else %}
            <div class=\"metrics\">
                <div class=\"metric\">
                    <span class=\"value\">{{ details.calls }}</span>
                    <span class=\"label\">Requests</span>
                </div>
                <div class=\"metric\">
                    <span class=\"value\">{{ details.hits }}</span>
                    <span class=\"label\">Hits</span>
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Key</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Drivers</th>
                        <td>{{ details.options.drivers|join(', ') }}</td>
                    </tr>
                    </tr>
                    <tr>
                        <th>Doctrine Adapter</th>
                        <td>{{ details.options.registerDoctrineAdapter ? 'true' : 'false' }}</td>
                    </tr>
                    <tr>
                        <th>Cache In-Memory</th>
                        <td>{{ details.options.inMemory ? 'true' : 'false' }}</td>
                    </tr>
                </tbody>
            </table>
        {% endif %}

        <h3>Driver Options</h3>
        {% if profiler_markup_version == 1 %}
            <table>
                {% for name, options in details.options %}
                    {% if name != 'drivers' and name in details.options.drivers %}
                        <tr>
                            <th colspan=\"2\"><h3 style=\"font-size: 16px; margin-bottom: 0;\">{{ name }} settings</h3></th>
                        </tr>
                        {% if name in ['Memcache', 'Redis'] %}
                            {% for ovalue in options.servers %}
                                <tr>
                                    <th>Server</th>
                                    <td>{{ ovalue.server }}:{{ ovalue.port }} {% if ovalue.weight is defined %}(weight {{ ovalue.weight }}){% endif %}</td>
                                </tr>
                            {% endfor %}
                        {% else %}
                            {% for oname, ovalue in options %}
                                <tr>
                                    <th>{{ oname }}</th>
                                    {% if oname == 'filePermissions' or oname == 'dirPermissions' %}
                                        <td>{{ \"%o\"|format(ovalue) }}
                                    {% else %}
                                        <td>{{ ovalue }}</td>
                                    {% endif %}
                                </tr>
                            {% endfor %}
                        {% endif %}
                    {% endif %}
                {% endfor %}
            </table>
        {% else %}
            {% for name, options in details.options %}
                {% if name != 'drivers' and name in details.options.drivers %}
                    <table>
                        <thead>
                            <tr>
                                <th colspan=\"2\">{{ name }} settings</th>
                            </th>
                        </thead>
                        <tbody>
                        {% if name in ['Memcache', 'Redis'] %}
                            {% for ovalue in options.servers %}
                                <tr>
                                    <th>Server</th>
                                    <td>{{ ovalue.server }}:{{ ovalue.port }} {% if ovalue.weight is defined %}(weight {{ ovalue.weight }}){% endif %}</td>
                                </tr>
                            {% endfor %}
                        {% else %}
                            {% for oname, ovalue in options %}
                                <tr>
                                    <th>{{ oname }}</th>
                                    {% if oname == 'filePermissions' or oname == 'dirPermissions' %}
                                        <td>{{ \"%o\"|format(ovalue) }}
                                    {% else %}
                                        <td>{{ ovalue }}</td>
                                    {% endif %}
                                </tr>
                            {% endfor %}
                        {% endif %}
                        </tbody>
                {% endif %}
                </table>
            {% endfor %}
        {% endif %}

        <h3>Query Record</h3>
        {% if not details.queries|length %}
            <div class=\"empty\">
                <p>No queries were performed.</p>
            </div>
        {% else %}
            <table>
                <thead>
                    <tr>
                        <th>Request Key</th>
                        <th>Hit?</th>
                        <th>Returned Value</th>
                    </tr>
                 </thead>
                 <tbody>
                    {% for query in details.queries %}
                        <tr>
                            <td>{{ query.key }}</td>
                            <td>{{ query.hit }}</td>
                            <td>{{ query.value }}</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    {% endfor %}
{% endblock %}
", "TedivmStashBundle:Profiler:layout.html.twig", "/var/www/html/ez/vendor/tedivm/stash-bundle/Resources/views/Profiler/layout.html.twig");
    }
}

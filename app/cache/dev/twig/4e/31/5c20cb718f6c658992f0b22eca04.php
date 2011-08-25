<?php

/* ISpySiWelcomeBundle:Art:artList.html.twig */
class __TwigTemplate_4e315c20cb718f6c658992f0b22eca04 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<ul>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'artWorks'));
        foreach ($context['_seq'] as $context['_key'] => $context['artWork']) {
            // line 3
            echo "<li>
    ";
            // line 5
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("bundles/ISpySi/images/artWork/compressed/") . $this->getAttribute($this->getContext($context, 'artWork'), "filename", array(), "any", false)), "html");
            echo ".jpg\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'artWork'), "filename", array(), "any", false), "html");
            echo "\" />
    ";
            // line 11
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artWork'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "ISpySiWelcomeBundle:Art:artList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

<?php

/* ISpySiWelcomeBundle:Art:artList.html.twig */
class __TwigTemplate_4e315c20cb718f6c658992f0b22eca04 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<ul id=\"";
        if (($this->getContext($context, 'artFolder') == "compressed")) {
            echo "artList";
        } else {
            echo "featuredArtList";
        }
        echo "\">
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'artWorks'));
        foreach ($context['_seq'] as $context['_key'] => $context['artWork']) {
            // line 3
            echo "<li>
    ";
            // line 4
            if (($this->getContext($context, 'artFolder') == "compressed")) {
                // line 5
                echo "    <img src=\"";
                echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl((("bundles/ISpySi/images/artWork/" . $this->getContext($context, 'artFolder')) . "/")) . $this->getAttribute($this->getContext($context, 'artWork'), "filename", array(), "any", false)), "html");
                echo ".jpg\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'artWork'), "filename", array(), "any", false), "html");
                echo "\" />
    <h3>";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'artWork'), "filename", array(), "any", false), "html");
                echo "</h3>
    <dl>
        ";
                // line 9
                echo "        <dt>Date Added</dt><dd>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'artWork'), "dateAdded", array(), "any", false), "m/d/y"), "html");
                echo "</dd>
        ";
                // line 10
                if ((twig_date_format_filter($this->getAttribute($this->getContext($context, 'artWork'), "dateCreated", array(), "any", false), "m/d/y") != "11/30/-1")) {
                    // line 11
                    echo "        <dt>Date Created</dt><dd>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'artWork'), "dateCreated", array(), "any", false), "m/d/y"), "html");
                    echo "</dd>
        ";
                }
                // line 13
                echo "        ";
                if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'artWork'), "notes", array(), "any", false)) > 0)) {
                    // line 14
                    echo "        <dt>Notes</dt><dd>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'artWork'), "notes", array(), "any", false), "html");
                    echo "</dd>
        ";
                }
                // line 16
                echo "    </dl>
    ";
            } else {
                // line 18
                echo "    <img class=\"featuredArt\" src=\"";
                echo twig_escape_filter($this->env, ($this->env->getExtension('assets')->getAssetUrl("bundles/ISpySi/images/artWork/") . $this->getAttribute($this->getContext($context, 'artWork'), "filename", array(), "any", false)), "html");
                echo ".jpg\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'artWork'), "filename", array(), "any", false), "html");
                echo "\" />
    ";
            }
            // line 20
            echo "    ";
            // line 25
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['artWork'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
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

<?php

/* ISpySiSecurityBundle:Security:login.html.twig */
class __TwigTemplate_53b918f5bcf69007e545ad2789748b66 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        if ($this->getContext($context, 'error')) {
            // line 2
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'error'), "message", array(), "any", false), "html");
            echo "</div>
";
        }
        // line 4
        echo "    
<form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, 'last_username'), "html");
        echo "\" />
    
    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />
    
    <input type=\"submit\" name=\"login\" value=\"Log in\" />
</form>    ";
    }

    public function getTemplateName()
    {
        return "ISpySiSecurityBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

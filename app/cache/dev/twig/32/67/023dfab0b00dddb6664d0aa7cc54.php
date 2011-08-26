<?php

/* ::base.html.twig */
class __TwigTemplate_3267023dfab0b00dddb6664d0aa7cc54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <title>I Spy Si. Simon Kerr&rsquo;s online portfolio - ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        
    </head>
    <body>
        <div id=\"main-nav\">
            <ul>
                <li id=\"art\"><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("art"), "html");
        echo "\">Art</a></li>
                <li id=\"work\"><a href=\"#\">Worky Stuff</a></li>
                <li id=\"biog\"><a href=\"#\">Me</a></li>
                <li id=\"contact\"><a href=\"#\">Contact</a></li>
            </ul>
        </div>
            
        <div id=\"page-title\">
            ";
        // line 25
        echo "            <h1><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("welcome"), "html");
        echo "\" title=\"Back to home page\">I Spy Si&hellip;(mon kerr)</a></h1>
            <h1>";
        // line 26
        $this->displayBlock('pageTitle', $context, $blocks);
        echo "</h1>
        </div>
        ";
        // line 28
        $this->displayBlock('body', $context, $blocks);
        // line 29
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>


";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Home";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ISpySi/css/reset.css"), "html");
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ISpySi/css/main.css"), "html");
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 26
    public function block_pageTitle($context, array $blocks = array())
    {
    }

    // line 28
    public function block_body($context, array $blocks = array())
    {
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "           ";
        // line 31
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

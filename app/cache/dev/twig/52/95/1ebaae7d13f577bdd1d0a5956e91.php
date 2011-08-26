<?php

/* ISpySiWelcomeBundle:Art:art.html.twig */
class __TwigTemplate_52951ebaae7d13f577bdd1d0a5956e91 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'pageTitle' => array($this, 'block_pageTitle'),
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Art";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo $this->renderParentBlock("stylesheets", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "Art";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<div id=\"art\">
    <ul id=\"artSubNav\">
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("art", array("type" => "1")), "html");
        echo "\">Pencil Sketches</a></li>
        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("art", array("type" => "2")), "html");
        echo "\">Watercolours</a></li>
        <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("art", array("type" => "3")), "html");
        echo "\">Acrylics</a></li>
        <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("art", array("type" => "4")), "html");
        echo "\">3D Models</a></li>
        <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("art", array("type" => "5")), "html");
        echo "\">Digital Paintings</a></li>
    </ul>
    <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, 'artWorks'), 0, array(), "array", false), "mediaType", array(), "any", false), "name", array(), "any", false), "html");
        echo "</h2>
    ";
        // line 17
        $this->env->loadTemplate("ISpySiWelcomeBundle:Art:artList.html.twig")->display(array_merge($context, array("artWorks" => $this->getContext($context, 'artWorks'), "artFolder" => $this->getContext($context, 'artFolder'))));
        echo "    

</div>

";
    }

    public function getTemplateName()
    {
        return "ISpySiWelcomeBundle:Art:art.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

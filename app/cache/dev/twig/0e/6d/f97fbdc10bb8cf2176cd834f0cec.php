<?php

/* ISpySiWelcomeBundle:Default:index.html.twig */
class __TwigTemplate_0e6df97fbdc10bb8cf2176cd834f0cec extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "Index";
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
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div id=\"featured-art\">
    <h2>Featured Art</h2>
    ";
        // line 9
        echo $this->env->getExtension('actions')->renderAction("ISpySiWelcomeBundle:Art:featuredArt", array("max" => 3), array());
        // line 10
        echo "    ";
        // line 14
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("art"), "html");
        echo "\">&hellip;all art</a>
</div>
<div id=\"featured-work\">

</div>
<div id=\"contact-form\">

</div>

<div id=\"my-details\">

</div>
";
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        echo " 
";
        // line 28
        echo $this->renderParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ISpySiWelcomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

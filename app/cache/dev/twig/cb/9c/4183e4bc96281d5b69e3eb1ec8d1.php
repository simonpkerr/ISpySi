<?php

/* ISpySiWelcomeBundle:Default:error.html.twig */
class __TwigTemplate_cb9c4183e4bc96281d5b69e3eb1ec8d1 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Error";
    }

    // line 4
    public function block_pageTitle($context, array $blocks = array())
    {
        echo "An error occurred";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<p>Sorry, something went wrong, please try again.</p>
";
    }

    public function getTemplateName()
    {
        return "ISpySiWelcomeBundle:Default:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

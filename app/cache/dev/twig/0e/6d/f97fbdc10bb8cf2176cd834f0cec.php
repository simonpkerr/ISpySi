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
        echo "Index";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div id=\"featured-art\">
    <h2>Featured Art</h2>
    ";
        // line 7
        echo $this->env->getExtension('actions')->renderAction("ISpySiWelcomeBundle:Art:featuredArt", array("max" => 3), array());
        // line 8
        echo "</div>
<div id=\"featured-work\">

</div>
<div id=\"contact-form\">

</div>

<div id=\"my-details\">

</div>
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

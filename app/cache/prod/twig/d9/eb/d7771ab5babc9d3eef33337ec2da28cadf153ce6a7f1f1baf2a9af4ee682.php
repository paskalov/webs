<?php

/* FilmwebWebsiteBundle:MoviesList:movies_not_found.html.twig */
class __TwigTemplate_d9ebd7771ab5babc9d3eef33337ec2da28cadf153ce6a7f1f1baf2a9af4ee682 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FilmwebWebsiteBundle::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'filmPreview' => array($this, 'block_filmPreview'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FilmwebWebsiteBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_filmPreview($context, array $blocks = array())
    {
        // line 5
        echo "    <font color=\"red\"><h1 align=\"center\" >Brak rezultatów wyszukiwania</h1></font>
";
    }

    public function getTemplateName()
    {
        return "FilmwebWebsiteBundle:MoviesList:movies_not_found.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  36 => 4,  11 => 1,);
    }
}

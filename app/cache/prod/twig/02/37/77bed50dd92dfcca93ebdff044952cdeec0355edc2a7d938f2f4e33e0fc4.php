<?php

/* FilmwebWebsiteBundle:Default:index.html.twig */
class __TwigTemplate_023777bed50dd92dfcca93ebdff044952cdeec0355edc2a7d938f2f4e33e0fc4 extends Twig_Template
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
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filmy"]) ? $context["filmy"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 6
            echo "        <div class=\"leftbox\">
            <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($context["film"], "getId", array()), "slug_name" => strtr($this->getAttribute($context["film"], "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getNazwa", array()), "html", null, true);
            echo "</h3></a>
            <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($context["film"], "getId", array()), "slug_name" => strtr($this->getAttribute($context["film"], "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getImgUrl", array()), "html", null, true);
            echo "\" width=\"80\" height=\"110\" alt=\"photo 1\" class=\"left\" />
            </a>
            <p><b>Rok:</b> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getRokPremiery", array()), "html", null, true);
            echo "</p>
            <p><b>Dlugość:</b> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getDlugosc", array()), "html", null, true);
            echo "</p>
            <p><b>Cena:</b> <b>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getCena", array()), "html", null, true);
            echo "</b> zł.</p>
            <p class=\"readmore\"><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($context["film"], "getId", array()), "slug_name" => $this->getAttribute($context["film"], "getNazwa", array()))), "html", null, true);
            echo "\">Zobać więcej</a></p>
            <div class=\"clear\"></div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['film'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "FilmwebWebsiteBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 14,  70 => 13,  66 => 12,  62 => 11,  57 => 9,  53 => 8,  47 => 7,  44 => 6,  39 => 5,  36 => 4,  11 => 1,);
    }
}

<?php

/* FilmwebWebsiteBundle:MoviesList:movies_by_genre_ajax.html.twig */
class __TwigTemplate_cc3a3be07392421e2de1e8c98628dd5c36e2da5d5c5711b0eb5b74dd7487d218 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filmy"]) ? $context["filmy"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["film"]) {
            // line 2
            echo "    <div class=\"leftbox\">
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($context["film"], "getId", array()), "slug_name" => strtr($this->getAttribute($context["film"], "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\"><h3>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getNazwa", array()), "html", null, true);
            echo "</h3></a>
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($context["film"], "getId", array()), "slug_name" => strtr($this->getAttribute($context["film"], "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">
            <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getImgUrl", array()), "html", null, true);
            echo "\" width=\"80\" height=\"110\" alt=\"photo 1\" class=\"left\" />
        </a>
        <p><b>Rok:</b> ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getRokPremiery", array()), "html", null, true);
            echo "</p>
        <p><b>Dlugość:</b> ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getDlugosc", array()), "html", null, true);
            echo "</p>
        <p><b>Cena:</b> <b>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["film"], "getCena", array()), "html", null, true);
            echo "</b> zł.</p>
        <p class=\"readmore\"><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($context["film"], "getId", array()), "slug_name" => strtr($this->getAttribute($context["film"], "getNazwa", array()), " ", "-"))), "html", null, true);
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
        return "FilmwebWebsiteBundle:MoviesList:movies_by_genre_ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  49 => 9,  45 => 8,  41 => 7,  36 => 5,  32 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}

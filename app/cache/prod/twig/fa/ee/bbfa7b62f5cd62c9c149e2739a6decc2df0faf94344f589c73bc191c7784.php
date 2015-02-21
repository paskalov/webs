<?php

/* FilmwebWebsiteBundle:Order:order_information.html.twig */
class __TwigTemplate_faeebbfa7b62f5cd62c9c149e2739a6decc2df0faf94344f589c73bc191c7784 extends Twig_Template
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

    // line 3
    public function block_filmPreview($context, array $blocks = array())
    {
        // line 4
        echo "    <style>

    </style>
    <h1 align=\"center\">Zamówienie</h1>
    <table class=\"tftable\" border=\"0\">
        <tr><td><b>Imię:</b></td><td>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getName", array()), "html", null, true);
        echo "</td></tr>
        <tr><td><b>Nazwisko:</b></td><td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getSurname", array()), "html", null, true);
        echo "</td></tr>
        <tr><td><b>Nazwa filmu:</b></td><td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "getNazwa", array()), "html", null, true);
        echo "</td></tr>
        <tr><td><b>Email:</b></td><td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "getEmail", array()), "html", null, true);
        echo "</td></tr>
        <tr><td><b>Cena:</b></td><td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "getCena", array()), "html", null, true);
        echo " zł</td></tr>
        <tr><td><b>Data wypożyczenia:</b></td><td>";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["dataWypozyczenia"]) ? $context["dataWypozyczenia"] : null), "html", null, true);
        echo "</td></tr>
        <tr><td><b>Data zwrotu:</b></td><td>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["dataZwrotu"]) ? $context["dataZwrotu"] : null), "html", null, true);
        echo "</td></tr>
    </table>
    <br />
    <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("order");
        echo "\" method=\"POST\" align=\"center\">
        <input type=\"hidden\" name=\"movieId\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : null), "getId", array()), "html", null, true);
        echo "\"/>
        <input  type=\"submit\" value=\"Dalej\"/>
    </form>
";
    }

    public function getTemplateName()
    {
        return "FilmwebWebsiteBundle:Order:order_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  76 => 18,  70 => 15,  66 => 14,  62 => 13,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  39 => 4,  36 => 3,  11 => 1,);
    }
}

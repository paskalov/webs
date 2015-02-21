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
            'title' => array($this, 'block_title'),
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
    public function block_title($context, array $blocks = array())
    {
        echo "Zamówienie";
    }

    // line 4
    public function block_filmPreview($context, array $blocks = array())
    {
        // line 5
        echo "    <style>

    </style>
    <h1 align=\"center\">Zamówienie</h1>
    <table class=\"tftable\" border=\"0\">
        <tr><td><b>Imię:</b></td><td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getName", array()), "html", null, true);
        echo "</td></tr>
        <tr><td><b>Nazwisko:</b></td><td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getSurname", array()), "html", null, true);
        echo "</td></tr>
        <tr><td><b>Nazwa filmu:</b></td><td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getNazwa", array()), "html", null, true);
        echo "</td></tr>
        <tr><td><b>Email:</b></td><td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getEmail", array()), "html", null, true);
        echo "</td></tr>
        <tr><td><b>Cena:</b></td><td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getCena", array()), "html", null, true);
        echo " zł</td></tr>
        <tr><td><b>Data wypożyczenia:</b></td><td>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["dataWypozyczenia"]) ? $context["dataWypozyczenia"] : $this->getContext($context, "dataWypozyczenia")), "html", null, true);
        echo "</td></tr>
        <tr><td><b>Data zwrotu:</b></td><td>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["dataZwrotu"]) ? $context["dataZwrotu"] : $this->getContext($context, "dataZwrotu")), "html", null, true);
        echo "</td></tr>
    </table>
    <br />
    <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("order");
        echo "\" method=\"POST\" align=\"center\">
        <input type=\"hidden\" name=\"movieId\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getId", array()), "html", null, true);
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
        return array (  87 => 20,  83 => 19,  77 => 16,  73 => 15,  69 => 14,  65 => 13,  61 => 12,  57 => 11,  53 => 10,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}

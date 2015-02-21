<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_d36d8dda61333c76a67df6b79bac5ebd20144c2566b03e668344bdfd887d3812 extends Twig_Template
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
            'gatunki' => array($this, 'block_gatunki'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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
    public function block_gatunki($context, array $blocks = array())
    {
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Rejestracja";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <style>
        .fos_user_registration_register div {
            display: block;
            margin: 0px;
            margin-left: 14%;
        }
        .fos_user_registration_register div label {
            float: left;
            width: 15%;
            text-align: right;
            padding-right: 10px;
            font-weight: bold;
        }
        .fos_user_registration_register div input {
            margin-bottom: 16px;
            margin-right: 6px;
            outline: 0 none;
            padding: 3px 3px 3px 5px;
            font-size: 12px;
            line-height:15px;
        }
        .fos_user_registration_register div>input:focus {
            box-shadow: 0 0 5px blue;
        }
        .fos_user_registration_register div>input[type=\"submit\"] {
            margin-left: 230px;
            width: 12%;
        }
    </style>
    ";
        // line 35
        $this->displayBlock("fos_user_content", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 35,  52 => 6,  49 => 5,  43 => 4,  38 => 3,  11 => 1,);
    }
}

<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_00c446dce220e8607d0bb797da9c5d37982f7883878b516b725fe1d8eed20930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        form {
            margin: 2.5%;
        }
        form div {
            display: block;
        }
        form div>label {
            float: left;
            width: 15%;
            font-weight: bold;
        }
        form div input[type=\"text\"], input[type=\"email\"], input[type=\"password\"] {
            margin-bottom: 16px;
            margin-right: 6px;
            outline: 0 none;
            padding: 3px 3px 3px 5px;
            font-size: 12px;
            line-height:15px;
        }
        form div>input:focus {
            box-shadow: 0 0 5px  blue;
        }
        form div input[type=\"submit\"] {
            margin-top: 0.5%;
            margin-left: 112px;
            width: 18%;
        }
    </style>
";
        // line 33
        $this->env->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 33,  39 => 4,  36 => 3,  11 => 1,);
    }
}

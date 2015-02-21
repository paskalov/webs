<?php

/* FilmwebWebsiteBundle:UserOrders:user_orders.html.twig */
class __TwigTemplate_bdecef198b2da786384b557d965db444db8e961b46f460265759637af33f53ef extends Twig_Template
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
        echo "Moje filmy";
    }

    // line 4
    public function block_filmPreview($context, array $blocks = array())
    {
        // line 5
        echo "    <br />
    <table id=\"order-table\">
        <tr class=\"order-table-header\">
            <th>Obrazek</th>
            <th>Nazwa filmu</th>
            <th>Data zamówienia</th>
            <th>Data zwrotu</th>
            <th>Status transakcji</th>
        </tr>
        ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 15
            echo "            <tr class=\"order-table-row\">
                <td class=\"order-table-data\">
                    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getId", array()), "slug_name" => strtr($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getImgUrl", array())), "html", null, true);
            echo "\" height=\"82.5\" width=\"60\"/>
                    </a>
                </td>
                <td class=\"order-table-data\">
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getId", array()), "slug_name" => strtr($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), "html", null, true);
            echo "
                    </a>
                </td>
                <td class=\"order-table-data\">
                    ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getDataZamowienia", array()), "format", array(0 => "H:i:s d-m-Y"), "method"), "html", null, true);
            echo "
                </td>
                <td class=\"order-table-data\">
                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getDataZwrotu", array()), "format", array(0 => "H:i:s d-m-Y"), "method"), "html", null, true);
            echo "
                </td>
                <td class=\"order-table-data\">
                    ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdStatus", array()), "getStatus", array()), "html", null, true);
            echo "
                </td>
                <td class=\"order-table-data\">
                    <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getVideoUrl", array())), "html", null, true);
            echo "\" class=\"html5lightbox\" data-width=\"1024\" data-height=\"768\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmweb/images/video-play.png"), "html", null, true);
            echo "\" height=\"45px\" width=\"45px\" alt=\"Oglądaj\"/>
                    </a>
                </td>
            </tr>
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "          ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["expiredOrders"]) ? $context["expiredOrders"] : $this->getContext($context, "expiredOrders")));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 43
            echo "            <tr class=\"order-table-row\">
                <td class=\"order-table-data\" bgcolor=\"#a9a9a9\">
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getId", array()), "slug_name" => strtr($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getImgUrl", array())), "html", null, true);
            echo "\" height=\"82.5\" width=\"60\"/>
                    </a>
                </td>
                <td class=\"order-table-data\" bgcolor=\"#a9a9a9\">
                    <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getId", array()), "slug_name" => strtr($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">
                        ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), "html", null, true);
            echo "
                    </a>
                </td>
                <td class=\"order-table-data\" bgcolor=\"#a9a9a9\">
                    ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getDataZamowienia", array()), "format", array(0 => "H:i:s d-m-Y"), "method"), "html", null, true);
            echo "
                </td>
                <td class=\"order-table-data\" bgcolor=\"#a9a9a9\" style=\"color: red;\">
                    ";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getDataZwrotu", array()), "format", array(0 => "H:i:s d-m-Y"), "method"), "html", null, true);
            echo "
                </td>
                <td class=\"order-table-data\" bgcolor=\"#a9a9a9\">
                    ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdStatus", array()), "getStatus", array()), "html", null, true);
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </table>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmweb/html5lightbox/html5lightbox.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FilmwebWebsiteBundle:UserOrders:user_orders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 66,  175 => 65,  165 => 61,  159 => 58,  153 => 55,  146 => 51,  142 => 50,  135 => 46,  131 => 45,  127 => 43,  122 => 42,  111 => 37,  105 => 36,  99 => 33,  93 => 30,  87 => 27,  80 => 23,  76 => 22,  69 => 18,  65 => 17,  61 => 15,  57 => 14,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}

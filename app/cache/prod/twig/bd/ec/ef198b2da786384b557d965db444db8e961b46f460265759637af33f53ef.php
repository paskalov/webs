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
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 14
            echo "            <tr class=\"order-table-row\">
                <td class=\"order-table-data\">
                    <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getId", array()), "slug_name" => strtr($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getImgUrl", array()), "html", null, true);
            echo "\" height=\"82.5\" width=\"60\"/>
                    </a>
                </td>
                <td class=\"order-table-data\">
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getId", array()), "slug_name" => strtr($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">
                        ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), "html", null, true);
            echo "
                    </a>
                </td>
                <td class=\"order-table-data\">
                    ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "getDataZamowienia", array()), "h:m:s d-m-Y"), "html", null, true);
            echo "
                </td>
                <td class=\"order-table-data\">
                    ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "getDataZwrotu", array()), "h:m:s d-m-Y"), "html", null, true);
            echo "
                </td>
                <td class=\"order-table-data\">
                    ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdStatus", array()), "getStatus", array()), "html", null, true);
            echo "
                </td>
                <td class=\"order-table-data\">
                    <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getVideoUrl", array())), "html", null, true);
            echo "\" class=\"html5lightbox\" data-width=\"1024\" data-height=\"768\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 36
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
        // line 41
        echo "          ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["expiredOrders"]) ? $context["expiredOrders"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 42
            echo "            <tr class=\"order-table-row\">
                <td class=\"order-table-data\" bgcolor=\"#a9a9a9\">
                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getId", array()), "slug_name" => strtr($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">
                        <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getImgUrl", array()), "html", null, true);
            echo "\" height=\"82.5\" width=\"60\"/>
                    </a>
                </td>
                <td class=\"order-table-data\" bgcolor=\"#a9a9a9\">
                    <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getId", array()), "slug_name" => strtr($this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), " ", "-"))), "html", null, true);
            echo "\">
                        ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdFilm", array()), "getNazwa", array()), "html", null, true);
            echo "
                    </a>
                </td>
                <td class=\"order-table-data\" bgcolor=\"#a9a9a9\">
                    ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "getDataZamowienia", array()), "h:m:s d-m-Y"), "html", null, true);
            echo "
                </td>
                <td class=\"order-table-data\" bgcolor=\"#a9a9a9\" style=\"color: red;\">
                    ";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "getDataZwrotu", array()), "h:m:s d-m-Y"), "html", null, true);
            echo "
                </td>
                <td class=\"order-table-data\" bgcolor=\"#a9a9a9\">
                    ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["order"], "getIdStatus", array()), "getStatus", array()), "html", null, true);
            echo "
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "    </table>
    <script src=\"";
        // line 65
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
        return array (  171 => 65,  168 => 64,  158 => 60,  152 => 57,  146 => 54,  139 => 50,  135 => 49,  128 => 45,  124 => 44,  120 => 42,  115 => 41,  104 => 36,  98 => 35,  92 => 32,  86 => 29,  80 => 26,  73 => 22,  69 => 21,  62 => 17,  58 => 16,  54 => 14,  50 => 13,  39 => 4,  36 => 3,  11 => 1,);
    }
}

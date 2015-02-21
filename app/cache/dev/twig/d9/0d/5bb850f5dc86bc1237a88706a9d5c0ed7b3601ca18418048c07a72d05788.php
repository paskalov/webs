<?php

/* FilmwebWebsiteBundle:SingleMovie:single_movie.html.twig */
class __TwigTemplate_d90d5bb850f5dc86bc1237a88706a9d5c0ed7b3601ca18418048c07a72d05788 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getNazwa", array()), "html", null, true);
    }

    // line 4
    public function block_filmPreview($context, array $blocks = array())
    {
        // line 5
        echo "    <h3 style=\"font-size: 180%\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getNazwa", array()), "html", null, true);
        echo "</h3>
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getImgUrl", array())), "html", null, true);
        echo "\" width=\"104\" height=\"143\" alt=\"photo 1\" class=\"left\" />
    <p><b>Rok:</b> ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getRokPremiery", array()), "html", null, true);
        echo "</p>
    <p><b>Gatunki: </b>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getNazwaGatunku", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["gatunek"]) {
            // line 10
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moviesByGenre", array("genre" => $this->getAttribute($context["gatunek"], "getNazwaGatunku", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gatunek"], "getNazwaGatunku", array()), "html", null, true);
            echo "</a>
            ";
            // line 11
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                echo ",";
            }
            // line 12
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gatunek'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </p>
    <p><b>Dlugość:</b> ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getDlugosc", array()), "html", null, true);
        echo "</p>
    <p><b>Obsada aktorska:</b>
         ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getNazwaAktora", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["aktor"]) {
            // line 17
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["aktor"], "getNazwaAktora", array()), "html", null, true);
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                echo ",";
            }
            // line 18
            echo "         ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aktor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </p>
    <p><b>Opis: </b>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getOpis", array()), "html", null, true);
        echo "</p>
    <br />
    <br />
    <p align=\"right\" style=\"font-size: 125%\"><b>Cena:</b> <b>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getCena", array()), "html", null, true);
        echo "</b> zł.</p>

    ";
        // line 25
        if ((isset($context["doesUserHavePermissionToWatch"]) ? $context["doesUserHavePermissionToWatch"] : $this->getContext($context, "doesUserHavePermissionToWatch"))) {
            // line 26
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmweb/html5lightbox/html5lightbox.js"), "html", null, true);
            echo "\"></script>
        <div id=\"online-movie\">
        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getVideoUrl", array())), "html", null, true);
            echo "\"
                class=\"html5lightbox\" data-width=\"1024\" data-height=\"768\" title=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getNazwa", array()), "html", null, true);
            echo "\">
            <img  src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmweb/images/movie-icon.png"), "html", null, true);
            echo "\" height=\"30px\" width=\"30px\"/>
            Oglądaj film online!</a>
        </div>
    ";
        } else {
            // line 34
            echo "        <form action=\"";
            echo $this->env->getExtension('routing')->getPath("orderInfo");
            echo "\" method=\"post\">
            <input type=\"hidden\"  name=\"movieId\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getId", array()), "html", null, true);
            echo "\" />
            <input class=\"button\" type=\"submit\" value=\"Wypożyczyć\" />
        </form>
    ";
        }
        // line 39
        echo "    <br /><br /><br />

    ";
        // line 41
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 42
            echo "        <div id=\"review\" name=\"lol\">
        <b>Dodaj recenzję:</b>
        <br />
        <br />
        <style>
            #reviewTextArea {
                text-align: center;
            }
            #review b {
               font-size: 125%;
            }
            textarea {
                width: 420px;
                height:130px;
                border:1px solid #3366FF;
                border-left: 4px solid #3366FF;
            }
            .button {
                border-top: 1px solid #96d1f8;
                background: #65a9d7;
                background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
                background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
                background: -moz-linear-gradient(top, #3e779d, #65a9d7);
                background: -ms-linear-gradient(top, #3e779d, #65a9d7);
                background: -o-linear-gradient(top, #3e779d, #65a9d7);
                padding: 0px 14px;
                -webkit-border-radius: 0px;
                -moz-border-radius: 0px;
                border-radius: 0px;
                -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
                -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
                box-shadow: rgba(0,0,0,1) 0 1px 0;
                text-shadow: rgba(0,0,0,.4) 0 1px 0;
                color: white;
                font-size: 14px;
                font-family: Georgia, serif;
                text-decoration: none;
                vertical-align: middle;
            }
            .button:hover {
                border-top-color: #28597a;
                background: #28597a;
                color: #ccc;
            }
            .button:active {
                border-top-color: #1b435e;
                background: #1b435e;
            }
            .hide {
                margin: 0;
                padding: 0;
                border: none;
                width: 90%;
                height: 50px;
            }
            #online-movie {
                margin-left: 35%;
            }
        </style>
        <script type=\"text/javascript\">
            \$(document).ready(function(){
               \$('.button').click(function() {
                  \$('#review').hide();
               });
            });
        </script>
        <div id=\"reviewTextArea\">
            <form action=\"";
            // line 109
            echo $this->env->getExtension('routing')->getPath("addReview");
            echo "\" method=\"post\" target=\"hiddenFrame\">
                <textarea wrap=\"physical\" name=\"review\"></textarea>
                <input type=\"hidden\" name=\"movieId\" value=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["film"]) ? $context["film"] : $this->getContext($context, "film")), "getId", array()), "html", null, true);
            echo "\">
                <br/><br />
                <input class=\"button\" type=\"submit\" value=\"Dodaj\">
            </form>
        </div>
    </div>
        <iframe align=\"center\" name=\"hiddenFrame\" class=\"hide\"></iframe>
    ";
        }
    }

    public function getTemplateName()
    {
        return "FilmwebWebsiteBundle:SingleMovie:single_movie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 111,  271 => 109,  202 => 42,  200 => 41,  196 => 39,  189 => 35,  184 => 34,  177 => 30,  173 => 29,  169 => 28,  163 => 26,  161 => 25,  156 => 23,  150 => 20,  147 => 19,  133 => 18,  127 => 17,  110 => 16,  105 => 14,  102 => 13,  88 => 12,  84 => 11,  77 => 10,  60 => 9,  55 => 7,  51 => 6,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}

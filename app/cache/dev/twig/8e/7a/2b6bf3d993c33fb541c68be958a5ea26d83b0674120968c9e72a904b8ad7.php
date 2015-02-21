<?php

/* FilmwebWebsiteBundle::base.html.twig */
class __TwigTemplate_8e7a2b6bf3d993c33fb541c68be958a5ea26d83b0674120968c9e72a904b8ad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'gatunki' => array($this, 'block_gatunki'),
            'body' => array($this, 'block_body'),
            'filmPreview' => array($this, 'block_filmPreview'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
  <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmweb/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
  <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmweb/images/favicon/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
  <link rel=\"icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmweb/images/favicon/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
  <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js\"></script>
  <script type=\"text/javascript\">
    function loadAjax(genre) {
      var path = '/filmweb/web/app_dev.php/genre-ajax/';

      \$(document).ready(function() {
        \$(\"#body .inner\").load(path + genre);
      });

    }

    \$(document).ready(function() {
      \$(\"#genres_header\").click(function () {
        \$(\".genre\").toggle(\"slow\");
      });
    });

  </script>
</head>
<body>

<div id=\"wrapper\">
  <div id=\"inner\">
    <div id=\"header\">
      <h1><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmweb/images/logo.gif"), "html", null, true);
        echo "\" width=\"519\" height=\"63\" alt=\"Online Movie Store\" /></h1>
      <div id=\"nav\"> 
          <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Strona główna</a> |
          ";
        // line 36
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 37
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a> |
            <a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Wyloguj się</a>
          ";
        } else {
            // line 40
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Zaloguj się</a> |
            <a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Rejestracja</a>
          ";
        }
        // line 43
        echo "      </div>
      <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => "1", "slug_name" => "Harry-Potter-i-więzień-Azkabanu")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmweb/images/header_1.jpg"), "html", null, true);
        echo "\" width=\"744\" height=\"145\" alt=\"Harry Potter cd\" /></a>
      <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => "1", "slug_name" => "Harry-Potter-i-więzień-Azkabanu")), "html", null, true);
        echo "\">
        <img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmweb/images/header_2.jpg"), "html", null, true);
        echo "\" width=\"745\" height=\"48\" alt=\"\" /></a> </div>
    <!-- end header -->
    ";
        // line 48
        $this->displayBlock('gatunki', $context, $blocks);
        // line 77
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 86
        echo "    <!-- end body -->
    <div class=\"clear\"></div>
    <div id=\"footer\">© filmweb.pl</div>
      <!-- end footnav -->
    </div>
    <!-- end footer -->
  </div>
  <!-- end inner -->
</div>

</body>
<!-- end wrapper -->
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Wypożyczalnia filmów ";
    }

    // line 48
    public function block_gatunki($context, array $blocks = array())
    {
        // line 49
        echo "    <dl id=\"browse\">
      <dt id=\"genres_header\">Dostępne kategorie</dt>
          <dd class=\"genre\"><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Wszystkie</a></dd>
      ";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gatunki"]) ? $context["gatunki"] : $this->getContext($context, "gatunki")));
        foreach ($context['_seq'] as $context["_key"] => $context["gatunek"]) {
            // line 53
            echo "          <dd class=\"genre\" onclick=\"loadAjax('";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gatunek"], "getNazwaGatunku", array()), "html", null, true);
            echo "')\"><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gatunek"], "getNazwaGatunku", array()), "html", null, true);
            echo "</a></dd>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gatunek'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "      <dt>
      </dt>

      ";
        // line 58
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 59
            echo "        <dd class=\"userOrders\">
          <table class=\"tftable\">
            <tr>
              <td>
                <a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("myOrders");
            echo "\">
                <img alt=\"Moje zamówienia\" src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmweb/images/my_orders.png"), "html", null, true);
            echo "\" height=\"60px\" width=\"60px\"/>
                  </a>
              </td>
              <td>
                <a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("myOrders");
            echo "\" style=\"text-decoration: none\"><p>Moje filmy</p></a>
              </td>
            </tr>
           </table>
        </dd>
      ";
        }
        // line 74
        echo "
    </dl>
     ";
    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        // line 78
        echo "    <div id=\"body\">
      <div class=\"inner\">
        ";
        // line 80
        $this->displayBlock('filmPreview', $context, $blocks);
        // line 82
        echo "      </div>
      <!-- end .inner -->
    </div>
    ";
    }

    // line 80
    public function block_filmPreview($context, array $blocks = array())
    {
        // line 81
        echo "        ";
    }

    public function getTemplateName()
    {
        return "FilmwebWebsiteBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 81,  229 => 80,  222 => 82,  220 => 80,  216 => 78,  213 => 77,  207 => 74,  198 => 68,  191 => 64,  187 => 63,  181 => 59,  179 => 58,  174 => 55,  163 => 53,  159 => 52,  155 => 51,  151 => 49,  148 => 48,  142 => 4,  125 => 86,  122 => 77,  120 => 48,  115 => 46,  111 => 45,  105 => 44,  102 => 43,  97 => 41,  92 => 40,  87 => 38,  80 => 37,  78 => 36,  74 => 35,  69 => 33,  41 => 8,  37 => 7,  33 => 6,  28 => 4,  23 => 1,);
    }
}

<?php

/* FilmwebWebsiteBundle::base.html.twig */
class __TwigTemplate_8e7a2b6bf3d993c33fb541c68be958a5ea26d83b0674120968c9e72a904b8ad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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
<title>Online Movie Store</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
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
<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmweb/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body>

<div id=\"wrapper\">
  <div id=\"inner\">
    <div id=\"header\">
      <h1><img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmweb/images/logo.gif"), "html", null, true);
        echo "\" width=\"519\" height=\"63\" alt=\"Online Movie Store\" /></h1>
      <div id=\"nav\"> 
          <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Strona główna</a> |
          ";
        // line 34
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 35
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
            echo "</a> |
            <a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Wyloguj się</a>
          ";
        } else {
            // line 38
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Zaloguj się</a> |
            <a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Rejestracja</a> |
          ";
        }
        // line 41
        echo "      </div>
      <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => "1", "slug_name" => "Harry-Potter-i-więzień-Azkabanu")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmweb/images/header_1.jpg"), "html", null, true);
        echo "\" width=\"744\" height=\"145\" alt=\"Harry Potter cd\" /></a>
      <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("movie", array("slug_id" => "1", "slug_name" => "Harry-Potter-i-więzień-Azkabanu")), "html", null, true);
        echo "\">
        <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmweb/images/header_2.jpg"), "html", null, true);
        echo "\" width=\"745\" height=\"48\" alt=\"\" /></a> </div>
    <!-- end header -->
    ";
        // line 46
        $this->displayBlock('gatunki', $context, $blocks);
        // line 75
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 84
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

    // line 46
    public function block_gatunki($context, array $blocks = array())
    {
        // line 47
        echo "    <dl id=\"browse\">
      <dt id=\"genres_header\">Dostępne kategorie</dt>
          <dd class=\"genre\"><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Wszystkie</a></dd>
      ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gatunki"]) ? $context["gatunki"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["gatunek"]) {
            // line 51
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
        // line 53
        echo "      <dt>
      </dt>

      ";
        // line 56
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 57
            echo "        <dd class=\"userOrders\">
          <table class=\"tftable\">
            <tr>
              <td>
                <a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("myOrders");
            echo "\">
                <img alt=\"Moje zamówienia\" src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/filmweb/images/my_orders.png"), "html", null, true);
            echo "\" height=\"60px\" width=\"60px\"/>
                  </a>
              </td>
              <td>
                <a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("myOrders");
            echo "\" style=\"text-decoration: none\"><p>Moje filmy</p></a>
              </td>
            </tr>
           </table>
        </dd>
      ";
        }
        // line 72
        echo "
    </dl>
     ";
    }

    // line 75
    public function block_body($context, array $blocks = array())
    {
        // line 76
        echo "    <div id=\"body\">
      <div class=\"inner\">
        ";
        // line 78
        $this->displayBlock('filmPreview', $context, $blocks);
        // line 80
        echo "      </div>
      <!-- end .inner -->
    </div>
    ";
    }

    // line 78
    public function block_filmPreview($context, array $blocks = array())
    {
        // line 79
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
        return array (  213 => 79,  210 => 78,  203 => 80,  201 => 78,  197 => 76,  194 => 75,  188 => 72,  179 => 66,  172 => 62,  168 => 61,  162 => 57,  160 => 56,  155 => 53,  144 => 51,  140 => 50,  136 => 49,  132 => 47,  129 => 46,  113 => 84,  110 => 75,  108 => 46,  103 => 44,  99 => 43,  93 => 42,  90 => 41,  85 => 39,  80 => 38,  75 => 36,  68 => 35,  66 => 34,  62 => 33,  57 => 31,  47 => 24,  22 => 1,);
    }
}

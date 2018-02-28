<?php

/* themes/basic/templates/page.html.twig */
class __TwigTemplate_1b202616e2fea5951b28e7beeec103a342b068ab4bdb041e93a8acf71a70dd6f extends Twig_Template
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
        $tags = array("set" => 1, "if" => 13);
        $filters = array("render" => 1);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('render'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        $context["main_menu"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "primary_menu", array()));
        // line 2
        $context["secondary_menu"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "secondary_menu", array()));
        // line 3
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => "layout-container", 1 => (((        // line 5
($context["main_menu"] ?? null) || ($context["secondary_menu"] ?? null))) ? ("with-navigation") : ("")), 2 => ((        // line 6
($context["secondary_menu"] ?? null)) ? ("with-subnav") : (""))), "method"), "html", null, true));
        // line 7
        echo ">

  <!-- ______________________ HEADER _______________________ -->

  <header id=\"header\">
    <div class=\"container\">
      ";
        // line 13
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 14
            echo "        <div id=\"header-region\">
          ";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 18
        echo "    </div>
  </header><!-- /#header -->

  ";
        // line 21
        if ((($context["main_menu"] ?? null) || ($context["secondary_menu"] ?? null))) {
            // line 22
            echo "    <nav id=\"navigation\" class=\"menu";
            if (($context["main_menu"] ?? null)) {
                echo " with-primary";
            }
            if (($context["secondary_menu"] ?? null)) {
                echo " with-secondary";
            }
            echo "\">
      <div class=\"container\">
        ";
            // line 24
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["main_menu"] ?? null), "html", null, true));
            echo "
        ";
            // line 25
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["secondary_menu"] ?? null), "html", null, true));
            echo "
      </div>
    </nav><!-- /#navigation -->
  ";
        }
        // line 29
        echo "
  <!-- ______________________ MAIN _______________________ -->

  <div id=\"main\">
    <div class=\"container\">
      <section id=\"content\">

        <div id=\"content-header\">

          ";
        // line 38
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "

          ";
        // line 40
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "highlighted", array()))) {
            // line 41
            echo "            <div id=\"highlighted\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "</div>
          ";
        }
        // line 43
        echo "
          ";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "

          ";
        // line 46
        if (($context["title"] ?? null)) {
            // line 47
            echo "            <h1 class=\"title\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h1>
          ";
        }
        // line 49
        echo "
          ";
        // line 50
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
          ";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "

          ";
        // line 53
        if (($context["tabs"] ?? null)) {
            // line 54
            echo "            <div class=\"tabs\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tabs"] ?? null), "html", null, true));
            echo "</div>
          ";
        }
        // line 56
        echo "
          ";
        // line 57
        if (($context["action_links"] ?? null)) {
            // line 58
            echo "            <ul class=\"action-links\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
            echo "</ul>
          ";
        }
        // line 60
        echo "
        </div><!-- /#content-header -->

        <div id=\"content-area\">
          ";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        </div>

      </section><!-- /#content -->

      ";
        // line 69
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_first", array()))) {
            // line 70
            echo "        <aside id=\"sidebar-first\" class=\"column sidebar first\">
          ";
            // line 71
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
        </aside><!-- /#sidebar-first -->
      ";
        }
        // line 74
        echo "
      ";
        // line 75
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) {
            // line 76
            echo "        <aside id=\"sidebar-second\" class=\"column sidebar second\">
          ";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
        </aside><!-- /#sidebar-second -->
      ";
        }
        // line 80
        echo "    </div><!-- /.container -->
  </div><!-- /#main -->

  <!-- ______________________ FOOTER _______________________ -->

  ";
        // line 85
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "footer", array()))) {
            // line 86
            echo "    <footer id=\"footer\">
      <div class=\"container\">
        ";
            // line 88
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
      </div>
    </footer><!-- /#footer -->
  ";
        }
        // line 92
        echo "
</div><!-- /.layout-container -->
";
    }

    public function getTemplateName()
    {
        return "themes/basic/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 92,  223 => 88,  219 => 86,  217 => 85,  210 => 80,  204 => 77,  201 => 76,  199 => 75,  196 => 74,  190 => 71,  187 => 70,  185 => 69,  177 => 64,  171 => 60,  165 => 58,  163 => 57,  160 => 56,  154 => 54,  152 => 53,  147 => 51,  143 => 50,  140 => 49,  134 => 47,  132 => 46,  127 => 44,  124 => 43,  118 => 41,  116 => 40,  111 => 38,  100 => 29,  93 => 25,  89 => 24,  78 => 22,  76 => 21,  71 => 18,  65 => 15,  62 => 14,  60 => 13,  52 => 7,  50 => 6,  49 => 5,  47 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/basic/templates/page.html.twig", "/customers/d/9/b/ataraxiadesign.be/httpd.www/cwb/themes/basic/templates/page.html.twig");
    }
}

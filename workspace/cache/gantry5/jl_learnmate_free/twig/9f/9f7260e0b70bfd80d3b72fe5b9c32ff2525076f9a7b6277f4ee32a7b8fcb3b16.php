<?php

/* @particles/owlcarousel.html.twig */
class __TwigTemplate_34813125eae67ff9b940f4f28cc6a01149817a4de8aaef748431194de2fe7602 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/owlcarousel.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
            'javascript_footer' => array($this, 'block_javascript_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "
    <div class=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "class", array()));
        echo "\">
        ";
        // line 6
        if ($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array())) {
            echo "<h2 class=\"g-title\">";
            echo $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "title", array());
            echo "</h2>";
        }
        // line 7
        echo "
        <div id=\"g-owlcarousel-";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "\" class=\"g-owlcarousel owl-carousel ";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "imageOverlay", array()) == "enable")) {
            echo "has-color-overlay";
        }
        echo "\">

            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "items", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                <div class=\"g-owlcarousel-item owl-item\">
                    <div class=\"g-owlcarousel-item-wrapper\">
                        <div class=\"g-owlcarousel-item-img\">
                            <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["item"], "image", array())));
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()));
            echo "\" />
                        </div>
                        <div class=\"g-owlcarousel-item-content-container\">
                            <div class=\"g-owlcarousel-item-content-wrapper\">
                                <div class=\"g-owlcarousel-item-content\">
                                    ";
            // line 19
            if ($this->getAttribute($context["item"], "title", array())) {
                // line 20
                echo "                                        <h1 class=\"g-owlcarousel-item-title\">";
                echo $this->getAttribute($context["item"], "title", array());
                echo "</h1>";
            }
            // line 21
            echo "                                    ";
            if ($this->getAttribute($context["item"], "desc", array())) {
                // line 22
                echo "                                        <h2 class=\"g-owlcarousel-item-desc\">";
                echo $this->getAttribute($context["item"], "desc", array());
                echo "</h2>";
            }
            // line 23
            echo "                                    ";
            if ($this->getAttribute($context["item"], "link", array())) {
                // line 24
                echo "                                        <div class=\"g-owlcarousel-item-link\">
                                            <a target=\"_self\" class=\"g-owlcarousel-item-button button ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "buttonclass", array()));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "link", array()));
                echo "\">
                                                ";
                // line 26
                echo $this->getAttribute($context["item"], "linktext", array());
                echo "
                                            </a>
                                        </div>
                                    ";
            }
            // line 30
            echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
        </div>
    </div>

";
    }

    // line 42
    public function block_javascript_footer($context, array $blocks = array())
    {
        // line 43
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/owlcarousel.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        jQuery(window).load(function() {
            jQuery('#g-owlcarousel-";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "').owlCarousel({
                items: 1,
                rtl: ";
        // line 48
        if (($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "page", array()), "direction", array()) == "rtl")) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                loop: true,
                ";
        // line 50
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "nav", array()) == "enable")) {
            // line 51
            echo "                nav: true,
                navText: ['";
            // line 52
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "prevText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "prevText", array()), "<i class=\"fa fa-chevron-left\"></i>")) : ("<i class=\"fa fa-chevron-left\"></i>")), "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "nextText", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "nextText", array()), "<i class=\"fa fa-chevron-right\"></i>")) : ("<i class=\"fa fa-chevron-right\"></i>")), "js"), "html", null, true);
            echo "'],
                ";
        } else {
            // line 54
            echo "                nav: false,
                ";
        }
        // line 56
        echo "                ";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "dots", array()) == "enable")) {
            // line 57
            echo "                dots: true,
                ";
        } else {
            // line 59
            echo "                dots: false,
                ";
        }
        // line 61
        echo "                ";
        if (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplay", array()) == "enable")) {
            // line 62
            echo "                autoplay: true,
                autoplayTimeout: ";
            // line 63
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplaySpeed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "autoplaySpeed", array()), "5000")) : ("5000")), "html", null, true);
            echo ",
                ";
        } else {
            // line 65
            echo "                autoplay: false,
                ";
        }
        // line 67
        echo "            })
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@particles/owlcarousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 67,  191 => 65,  186 => 63,  183 => 62,  180 => 61,  176 => 59,  172 => 57,  169 => 56,  165 => 54,  158 => 52,  155 => 51,  153 => 50,  144 => 48,  139 => 46,  132 => 43,  129 => 42,  121 => 36,  110 => 30,  103 => 26,  97 => 25,  94 => 24,  91 => 23,  86 => 22,  83 => 21,  78 => 20,  76 => 19,  66 => 14,  61 => 11,  57 => 10,  48 => 8,  45 => 7,  39 => 6,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@particles/owlcarousel.html.twig", "/home/ubuntu/workspace/templates/jl_learnmate_free/particles/owlcarousel.html.twig");
    }
}

<?php

/* SonataAdminBundle:Core:search.html.twig */
class __TwigTemplate_3ccbcdff82c079951258ffbe5f772165ba17a2c8a788eca87195831d2d3fdc56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "base_template"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => $this->getContext($context, "query")), "SonataAdminBundle"), "html", null, true);
    }

    // line 15
    public function block_breadcrumb($context, array $blocks = array())
    {
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    <!--
    <div class=\"row-fluid\">
        <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
        echo "\" method=\"GET\"  class=\"form-search\">
            <div class=\"input-append\">
                <input type=\"text\" name=\"q\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "query"), "html", null, true);
        echo "\" class=\"input-large search-query\"/>
                <button type=\"submit\" class=\"btn\">Search</button>
            </div>
        </form>
    </div>
    -->

    <h1>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_search_results", array("%query%" => $this->getContext($context, "query")), "SonataAdminBundle"), "html", null, true);
        echo "</h1>

    ";
        // line 30
        if ($this->getContext($context, "query")) {
            // line 31
            echo "        ";
            $context["count"] = 0;
            // line 32
            echo "        <div class=\"row-fluid\">

            ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "groups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 35
                echo "                ";
                $context["display"] = (twig_test_empty($this->getAttribute($this->getContext($context, "group"), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 36
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!$this->getContext($context, "display"))) {
                        // line 37
                        echo "                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted($this->getContext($context, "role"));
                        // line 38
                        echo "                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "
                ";
                // line 40
                if ($this->getContext($context, "display")) {
                    // line 41
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "group"), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 42
                        echo "                        ";
                        if ((($this->getContext($context, "count") % 3) == 0)) {
                            // line 43
                            echo "                            </div><div class=\"row-fluid\">
                        ";
                        }
                        // line 45
                        echo "
                        ";
                        // line 46
                        $context["count"] = ($this->getContext($context, "count") + 1);
                        // line 47
                        echo "                        ";
                        if ((($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "create"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method")))) {
                            // line 48
                            echo "                            ";
                            echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.admin.block.search_result"), array("query" => $this->getContext($context, "query"), "admin_code" => $this->getAttribute($this->getContext($context, "admin"), "code"), "page" => 0, "per_page" => 10)));
                            // line 55
                            echo "
                        ";
                        }
                        // line 57
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    echo "                ";
                }
                // line 59
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        </div>
    ";
        }
        // line 62
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 46,  797 => 266,  794 => 265,  789 => 260,  782 => 256,  776 => 253,  772 => 251,  770 => 250,  767 => 249,  761 => 247,  759 => 246,  756 => 245,  750 => 243,  748 => 242,  745 => 241,  739 => 239,  737 => 238,  734 => 237,  728 => 235,  726 => 234,  723 => 233,  720 => 232,  716 => 187,  710 => 186,  701 => 183,  696 => 182,  691 => 181,  688 => 180,  683 => 179,  680 => 178,  676 => 168,  667 => 164,  661 => 162,  658 => 161,  655 => 160,  649 => 157,  645 => 156,  642 => 155,  636 => 154,  631 => 151,  625 => 150,  617 => 148,  614 => 147,  610 => 146,  605 => 144,  602 => 143,  600 => 142,  597 => 141,  594 => 140,  587 => 139,  584 => 138,  581 => 137,  578 => 136,  572 => 135,  569 => 134,  566 => 133,  563 => 131,  556 => 130,  553 => 129,  547 => 128,  544 => 127,  539 => 126,  536 => 125,  533 => 124,  527 => 123,  521 => 169,  519 => 160,  515 => 158,  512 => 157,  509 => 124,  507 => 123,  503 => 121,  500 => 120,  493 => 116,  487 => 115,  482 => 114,  479 => 113,  472 => 77,  466 => 76,  462 => 75,  459 => 74,  451 => 71,  446 => 69,  441 => 67,  433 => 65,  417 => 59,  405 => 56,  395 => 51,  391 => 50,  372 => 37,  370 => 36,  361 => 33,  357 => 32,  352 => 30,  349 => 29,  346 => 28,  340 => 22,  333 => 272,  331 => 265,  326 => 262,  324 => 232,  320 => 231,  317 => 230,  311 => 227,  308 => 226,  306 => 225,  301 => 222,  295 => 219,  292 => 218,  290 => 217,  287 => 216,  282 => 213,  276 => 211,  270 => 209,  256 => 208,  250 => 206,  245 => 203,  239 => 201,  231 => 199,  226 => 197,  223 => 196,  205 => 195,  202 => 194,  200 => 193,  194 => 190,  190 => 188,  188 => 178,  181 => 173,  178 => 172,  150 => 100,  137 => 95,  134 => 94,  90 => 87,  81 => 84,  70 => 79,  126 => 55,  113 => 90,  104 => 40,  53 => 24,  153 => 62,  124 => 52,  110 => 89,  100 => 41,  65 => 54,  34 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 72,  444 => 149,  440 => 148,  437 => 66,  435 => 146,  430 => 144,  427 => 62,  423 => 60,  413 => 134,  409 => 58,  407 => 131,  402 => 55,  398 => 129,  393 => 126,  387 => 48,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 34,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 198,  220 => 70,  214 => 69,  177 => 65,  169 => 69,  140 => 96,  132 => 47,  128 => 49,  107 => 36,  61 => 28,  273 => 210,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 61,  143 => 56,  135 => 48,  119 => 42,  102 => 42,  71 => 32,  67 => 31,  63 => 28,  59 => 14,  28 => 14,  87 => 86,  201 => 92,  196 => 191,  183 => 82,  171 => 113,  166 => 71,  163 => 68,  158 => 67,  156 => 66,  151 => 61,  142 => 58,  138 => 54,  136 => 58,  121 => 51,  117 => 92,  105 => 40,  91 => 38,  62 => 25,  49 => 20,  38 => 18,  25 => 5,  93 => 88,  88 => 37,  78 => 31,  46 => 19,  44 => 21,  31 => 11,  26 => 14,  94 => 39,  89 => 37,  85 => 35,  75 => 34,  68 => 31,  56 => 9,  27 => 14,  21 => 2,  24 => 13,  19 => 11,  79 => 35,  72 => 16,  69 => 32,  47 => 19,  40 => 8,  37 => 14,  22 => 12,  246 => 90,  157 => 64,  145 => 60,  139 => 59,  131 => 52,  123 => 48,  120 => 47,  115 => 45,  111 => 43,  108 => 42,  101 => 40,  98 => 39,  96 => 31,  83 => 25,  74 => 81,  66 => 30,  55 => 25,  52 => 21,  50 => 25,  43 => 21,  41 => 16,  35 => 13,  32 => 5,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 120,  173 => 119,  168 => 72,  164 => 111,  162 => 110,  154 => 58,  149 => 62,  147 => 58,  144 => 98,  141 => 48,  133 => 55,  130 => 57,  125 => 44,  122 => 43,  116 => 43,  112 => 47,  109 => 34,  106 => 44,  103 => 41,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 36,  80 => 19,  73 => 19,  64 => 17,  60 => 24,  57 => 27,  54 => 26,  51 => 21,  48 => 13,  45 => 18,  42 => 17,  39 => 16,  36 => 19,  33 => 16,  30 => 15,);
    }
}

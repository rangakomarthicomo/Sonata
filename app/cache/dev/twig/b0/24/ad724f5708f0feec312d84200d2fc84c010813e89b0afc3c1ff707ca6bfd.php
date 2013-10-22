<?php

/* SonataAdminBundle:CRUD:list_choice.html.twig */
class __TwigTemplate_b024ad724f5708f0feec312d84200d2fc84c010813e89b0afc3c1ff707ca6bfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getContext($context, "admin"), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        echo "    ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 17
            echo "        ";
            if ((($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "multiple", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "multiple") == true)) && twig_test_iterable($this->getContext($context, "value")))) {
                // line 18
                echo "
            ";
                // line 19
                $context["result"] = "";
                // line 20
                echo "            ";
                $context["delimiter"] = (($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "delimiter", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "delimiter"), ", ")) : (", "));
                // line 21
                echo "
            ";
                // line 22
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "value"));
                foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                    // line 23
                    echo "                ";
                    if ((!twig_test_empty($this->getContext($context, "result")))) {
                        // line 24
                        echo "                    ";
                        $context["result"] = ($this->getContext($context, "result") . $this->getContext($context, "delimiter"));
                        // line 25
                        echo "                ";
                    }
                    // line 26
                    echo "
                ";
                    // line 27
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "choices", array(), "any", false, true), $this->getContext($context, "val"), array(), "array", true, true)) {
                        // line 28
                        echo "                    ";
                        if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                            // line 29
                            echo "                        ";
                            $context["result"] = ($this->getContext($context, "result") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "choices"), $this->getContext($context, "val"), array(), "array"));
                            // line 30
                            echo "                    ";
                        } else {
                            // line 31
                            echo "                        ";
                            $context["result"] = ($this->getContext($context, "result") . $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "choices"), $this->getContext($context, "val"), array(), "array"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "catalogue")));
                            // line 32
                            echo "                    ";
                        }
                        // line 33
                        echo "                ";
                    } else {
                        // line 34
                        echo "                    ";
                        $context["result"] = ($this->getContext($context, "result") . $this->getContext($context, "val"));
                        // line 35
                        echo "                ";
                    }
                    // line 36
                    echo "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "
            ";
                // line 38
                $context["value"] = $this->getContext($context, "result");
                // line 39
                echo "
        ";
            } elseif (twig_in_filter($this->getContext($context, "value"), twig_get_array_keys_filter($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "choices")))) {
                // line 41
                echo "            ";
                if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "catalogue", array(), "any", true, true))) {
                    // line 42
                    echo "                ";
                    $context["value"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "choices"), $this->getContext($context, "value"), array(), "array");
                    // line 43
                    echo "            ";
                } else {
                    // line 44
                    echo "                ";
                    $context["value"] = $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "choices"), $this->getContext($context, "value"), array(), "array"), array(), $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "catalogue"));
                    // line 45
                    echo "            ";
                }
                // line 46
                echo "        ";
            }
            // line 47
            echo "    ";
        }
        // line 48
        echo "
    ";
        // line 49
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 44,  84 => 34,  160 => 59,  152 => 63,  77 => 13,  23 => 11,  76 => 33,  129 => 49,  97 => 31,  58 => 25,  20 => 11,  118 => 49,  797 => 266,  794 => 265,  789 => 260,  782 => 256,  776 => 253,  772 => 251,  770 => 250,  767 => 249,  761 => 247,  759 => 246,  756 => 245,  750 => 243,  748 => 242,  745 => 241,  739 => 239,  737 => 238,  734 => 237,  728 => 235,  726 => 234,  723 => 233,  720 => 232,  716 => 187,  710 => 186,  701 => 183,  696 => 182,  691 => 181,  688 => 180,  683 => 179,  680 => 178,  676 => 168,  667 => 164,  661 => 162,  658 => 161,  655 => 160,  649 => 157,  645 => 156,  642 => 155,  636 => 154,  631 => 151,  625 => 150,  617 => 148,  614 => 147,  610 => 146,  605 => 144,  602 => 143,  600 => 142,  597 => 141,  594 => 140,  587 => 139,  584 => 138,  581 => 137,  578 => 136,  572 => 135,  569 => 134,  566 => 133,  563 => 131,  556 => 130,  553 => 129,  547 => 128,  544 => 127,  539 => 126,  536 => 125,  533 => 124,  527 => 123,  521 => 169,  519 => 160,  515 => 158,  512 => 157,  509 => 124,  507 => 123,  503 => 121,  500 => 120,  493 => 116,  487 => 115,  482 => 114,  479 => 113,  472 => 77,  466 => 76,  462 => 75,  459 => 74,  451 => 71,  446 => 69,  441 => 67,  433 => 65,  417 => 59,  405 => 56,  395 => 51,  391 => 50,  372 => 37,  370 => 36,  361 => 33,  357 => 32,  352 => 30,  349 => 29,  346 => 28,  340 => 22,  333 => 272,  331 => 265,  326 => 262,  324 => 232,  320 => 231,  317 => 230,  311 => 227,  308 => 226,  306 => 225,  301 => 222,  295 => 219,  292 => 218,  290 => 217,  287 => 216,  282 => 213,  276 => 211,  270 => 209,  256 => 208,  250 => 206,  245 => 203,  239 => 201,  231 => 199,  226 => 197,  223 => 196,  205 => 195,  202 => 194,  200 => 193,  194 => 190,  190 => 188,  188 => 178,  181 => 173,  178 => 172,  150 => 58,  137 => 95,  134 => 94,  90 => 36,  81 => 33,  70 => 29,  126 => 48,  113 => 46,  104 => 43,  53 => 24,  153 => 48,  124 => 49,  110 => 45,  100 => 41,  65 => 29,  34 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 72,  444 => 149,  440 => 148,  437 => 66,  435 => 146,  430 => 144,  427 => 62,  423 => 60,  413 => 134,  409 => 58,  407 => 131,  402 => 55,  398 => 129,  393 => 126,  387 => 48,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 34,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 198,  220 => 70,  214 => 69,  177 => 65,  169 => 69,  140 => 53,  132 => 43,  128 => 47,  107 => 44,  61 => 26,  273 => 210,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 72,  159 => 49,  143 => 56,  135 => 48,  119 => 44,  102 => 42,  71 => 31,  67 => 19,  63 => 28,  59 => 27,  28 => 14,  87 => 35,  201 => 92,  196 => 191,  183 => 82,  171 => 113,  166 => 71,  163 => 60,  158 => 67,  156 => 66,  151 => 61,  142 => 58,  138 => 54,  136 => 58,  121 => 51,  117 => 45,  105 => 41,  91 => 39,  62 => 28,  49 => 17,  38 => 18,  25 => 13,  93 => 39,  88 => 37,  78 => 32,  46 => 19,  44 => 19,  31 => 16,  26 => 14,  94 => 39,  89 => 17,  85 => 36,  75 => 31,  68 => 30,  56 => 25,  27 => 12,  21 => 11,  24 => 12,  19 => 11,  79 => 34,  72 => 30,  69 => 29,  47 => 20,  40 => 19,  37 => 18,  22 => 12,  246 => 90,  157 => 58,  145 => 56,  139 => 51,  131 => 48,  123 => 47,  120 => 46,  115 => 47,  111 => 43,  108 => 42,  101 => 39,  98 => 36,  96 => 37,  83 => 15,  74 => 29,  66 => 28,  55 => 24,  52 => 23,  50 => 23,  43 => 20,  41 => 19,  35 => 13,  32 => 16,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 120,  173 => 119,  168 => 72,  164 => 111,  162 => 110,  154 => 58,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 51,  130 => 57,  125 => 46,  122 => 45,  116 => 47,  112 => 47,  109 => 45,  106 => 35,  103 => 38,  99 => 38,  95 => 19,  92 => 35,  86 => 33,  82 => 35,  80 => 14,  73 => 32,  64 => 27,  60 => 24,  57 => 26,  54 => 22,  51 => 23,  48 => 22,  45 => 21,  42 => 20,  39 => 20,  36 => 18,  33 => 16,  30 => 15,);
    }
}

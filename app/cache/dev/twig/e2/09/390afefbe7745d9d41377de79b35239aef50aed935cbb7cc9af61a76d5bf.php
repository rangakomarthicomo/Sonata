<?php

/* SonataDoctrineORMAdminBundle:Block:block_audit.html.twig */
class __TwigTemplate_e209390afefbe7745d9d41377de79b35239aef50aed935cbb7cc9af61a76d5bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_audit_log", array(), "SonataAdminBundle"), "html", null, true);
        echo "</h3>

    <div>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "revisions"));
        foreach ($context['_seq'] as $context["_key"] => $context["revision"]) {
            // line 18
            echo "            <div>
                ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "revision"), "revision"), "rev"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "revision"), "revision"), "username"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "revision"), "revision"), "timestamp")), "html", null, true);
            echo "

                <ul>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "revision"), "entities"));
            foreach ($context['_seq'] as $context["_key"] => $context["changedEntity"]) {
                // line 23
                echo "                        <li>
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "entity"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "revisionType"), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "className"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "changedEntity"), "id"), "html", null, true);
                echo "
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['changedEntity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                </ul>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['revision'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:Block:block_audit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  695 => 210,  692 => 209,  690 => 208,  684 => 205,  674 => 204,  669 => 202,  657 => 200,  654 => 199,  651 => 198,  643 => 193,  640 => 192,  623 => 190,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  580 => 178,  573 => 176,  535 => 172,  530 => 171,  524 => 169,  518 => 167,  516 => 166,  498 => 157,  490 => 154,  486 => 134,  471 => 129,  468 => 128,  455 => 147,  450 => 145,  439 => 140,  434 => 138,  420 => 135,  418 => 128,  404 => 124,  389 => 118,  371 => 113,  358 => 106,  342 => 101,  339 => 100,  336 => 99,  329 => 95,  319 => 90,  297 => 84,  289 => 81,  286 => 80,  274 => 77,  263 => 71,  236 => 63,  233 => 62,  228 => 59,  191 => 50,  175 => 43,  146 => 34,  344 => 97,  338 => 94,  335 => 93,  321 => 91,  259 => 70,  215 => 54,  184 => 47,  161 => 38,  343 => 91,  332 => 97,  330 => 87,  327 => 86,  315 => 90,  313 => 82,  310 => 81,  304 => 79,  293 => 75,  277 => 78,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  216 => 25,  185 => 20,  180 => 104,  12 => 34,  568 => 179,  557 => 177,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 165,  504 => 160,  495 => 156,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 115,  369 => 136,  367 => 99,  347 => 102,  307 => 87,  302 => 78,  300 => 113,  296 => 76,  291 => 82,  288 => 85,  280 => 82,  275 => 77,  272 => 76,  249 => 67,  197 => 54,  192 => 23,  186 => 54,  174 => 60,  172 => 52,  148 => 44,  127 => 34,  114 => 46,  84 => 16,  160 => 52,  152 => 38,  77 => 27,  23 => 13,  76 => 13,  129 => 24,  97 => 41,  58 => 19,  20 => 11,  118 => 28,  797 => 266,  794 => 265,  789 => 260,  782 => 256,  776 => 253,  772 => 251,  770 => 250,  767 => 249,  761 => 247,  759 => 246,  756 => 245,  750 => 243,  748 => 242,  745 => 241,  739 => 239,  737 => 238,  734 => 237,  728 => 235,  726 => 234,  723 => 233,  720 => 232,  716 => 187,  710 => 186,  701 => 213,  696 => 182,  691 => 181,  688 => 180,  683 => 179,  680 => 178,  676 => 168,  667 => 164,  661 => 162,  658 => 161,  655 => 160,  649 => 157,  645 => 156,  642 => 155,  636 => 154,  631 => 151,  625 => 150,  617 => 148,  614 => 147,  610 => 146,  605 => 144,  602 => 143,  600 => 142,  597 => 141,  594 => 140,  587 => 139,  584 => 180,  581 => 137,  578 => 177,  572 => 135,  569 => 134,  566 => 133,  563 => 131,  556 => 174,  553 => 176,  547 => 128,  544 => 127,  539 => 173,  536 => 125,  533 => 124,  527 => 170,  521 => 168,  519 => 160,  515 => 158,  512 => 157,  509 => 124,  507 => 159,  503 => 121,  500 => 158,  493 => 155,  487 => 115,  482 => 114,  479 => 113,  472 => 77,  466 => 76,  462 => 75,  459 => 74,  451 => 71,  446 => 122,  441 => 141,  433 => 65,  417 => 59,  405 => 56,  395 => 120,  391 => 50,  372 => 37,  370 => 100,  361 => 107,  357 => 125,  352 => 94,  349 => 103,  346 => 92,  340 => 95,  333 => 117,  331 => 265,  326 => 93,  324 => 92,  320 => 84,  317 => 230,  311 => 89,  308 => 226,  306 => 225,  301 => 222,  295 => 88,  292 => 87,  290 => 217,  287 => 72,  282 => 79,  276 => 211,  270 => 209,  256 => 208,  250 => 67,  245 => 203,  239 => 201,  231 => 199,  226 => 67,  223 => 58,  205 => 59,  202 => 194,  200 => 55,  194 => 190,  190 => 50,  188 => 21,  181 => 47,  178 => 45,  150 => 58,  137 => 27,  134 => 94,  90 => 34,  81 => 26,  70 => 29,  126 => 55,  113 => 48,  104 => 23,  53 => 24,  153 => 35,  124 => 23,  110 => 25,  100 => 42,  65 => 5,  34 => 18,  480 => 132,  474 => 130,  469 => 158,  461 => 149,  457 => 131,  453 => 146,  444 => 142,  440 => 148,  437 => 66,  435 => 146,  430 => 103,  427 => 62,  423 => 136,  413 => 134,  409 => 127,  407 => 95,  402 => 55,  398 => 121,  393 => 119,  387 => 48,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 34,  362 => 110,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 89,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 84,  283 => 70,  278 => 86,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 198,  220 => 56,  214 => 61,  177 => 65,  169 => 58,  140 => 28,  132 => 44,  128 => 44,  107 => 24,  61 => 27,  273 => 210,  269 => 75,  254 => 68,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 82,  227 => 60,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 57,  204 => 72,  179 => 72,  159 => 49,  143 => 29,  135 => 48,  119 => 31,  102 => 17,  71 => 29,  67 => 184,  63 => 27,  59 => 23,  28 => 13,  87 => 17,  201 => 57,  196 => 52,  183 => 82,  171 => 113,  166 => 57,  163 => 49,  158 => 37,  156 => 36,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 29,  117 => 49,  105 => 45,  91 => 39,  62 => 24,  49 => 112,  38 => 17,  25 => 12,  93 => 40,  88 => 33,  78 => 36,  46 => 22,  44 => 21,  31 => 14,  26 => 14,  94 => 40,  89 => 38,  85 => 30,  75 => 21,  68 => 6,  56 => 81,  27 => 16,  21 => 11,  24 => 2,  19 => 11,  79 => 31,  72 => 198,  69 => 197,  47 => 22,  40 => 44,  37 => 54,  22 => 12,  246 => 54,  157 => 41,  145 => 43,  139 => 31,  131 => 25,  123 => 30,  120 => 46,  115 => 27,  111 => 40,  108 => 45,  101 => 37,  98 => 36,  96 => 44,  83 => 36,  74 => 33,  66 => 23,  55 => 22,  52 => 23,  50 => 23,  43 => 21,  41 => 20,  35 => 22,  32 => 21,  29 => 15,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 71,  187 => 49,  182 => 66,  176 => 45,  173 => 42,  168 => 72,  164 => 54,  162 => 110,  154 => 46,  149 => 36,  147 => 46,  144 => 33,  141 => 48,  133 => 51,  130 => 35,  125 => 46,  122 => 45,  116 => 30,  112 => 26,  109 => 45,  106 => 35,  103 => 38,  99 => 30,  95 => 20,  92 => 19,  86 => 37,  82 => 10,  80 => 9,  73 => 24,  64 => 183,  60 => 26,  57 => 154,  54 => 153,  51 => 24,  48 => 23,  45 => 19,  42 => 18,  39 => 20,  36 => 18,  33 => 16,  30 => 17,);
    }
}

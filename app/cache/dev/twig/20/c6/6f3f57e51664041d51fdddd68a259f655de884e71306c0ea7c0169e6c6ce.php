<?php

/* SonataBlockBundle:Block:block_core_action.html.twig */
class __TwigTemplate_20c66f3f57e51664041d51fdddd68a259f655de884e71306c0ea7c0169e6c6ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_block"), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->getContext($context, "content");
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 139,  248 => 115,  318 => 144,  316 => 121,  299 => 112,  284 => 106,  281 => 105,  279 => 104,  222 => 81,  210 => 75,  165 => 76,  681 => 404,  664 => 394,  659 => 392,  650 => 388,  639 => 380,  633 => 377,  629 => 376,  613 => 366,  595 => 354,  588 => 350,  577 => 344,  575 => 341,  567 => 337,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  514 => 306,  492 => 295,  481 => 290,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  429 => 255,  424 => 254,  422 => 250,  253 => 95,  242 => 112,  213 => 126,  399 => 158,  396 => 234,  394 => 156,  383 => 224,  366 => 210,  359 => 140,  348 => 136,  345 => 135,  325 => 125,  267 => 156,  237 => 86,  234 => 84,  232 => 84,  218 => 77,  170 => 78,  167 => 60,  155 => 55,  695 => 210,  692 => 209,  690 => 410,  684 => 205,  674 => 397,  669 => 202,  657 => 200,  654 => 390,  651 => 198,  643 => 381,  640 => 192,  623 => 373,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  580 => 178,  573 => 340,  535 => 172,  530 => 171,  524 => 169,  518 => 307,  516 => 166,  498 => 157,  490 => 154,  486 => 292,  471 => 129,  468 => 128,  455 => 147,  450 => 145,  439 => 260,  434 => 138,  420 => 249,  418 => 128,  404 => 124,  389 => 118,  371 => 144,  358 => 106,  342 => 133,  339 => 100,  336 => 99,  329 => 126,  319 => 90,  297 => 84,  289 => 109,  286 => 132,  274 => 128,  263 => 124,  236 => 108,  233 => 62,  228 => 83,  191 => 69,  175 => 76,  146 => 34,  344 => 97,  338 => 94,  335 => 188,  321 => 123,  259 => 70,  215 => 78,  184 => 47,  161 => 70,  343 => 91,  332 => 97,  330 => 87,  327 => 86,  315 => 90,  313 => 82,  310 => 81,  304 => 174,  293 => 109,  277 => 78,  271 => 66,  265 => 125,  262 => 63,  260 => 123,  257 => 149,  216 => 99,  185 => 85,  180 => 104,  12 => 34,  568 => 179,  557 => 330,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 310,  517 => 161,  513 => 165,  504 => 302,  495 => 156,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  426 => 102,  419 => 98,  415 => 247,  410 => 96,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 147,  369 => 136,  367 => 99,  347 => 102,  307 => 87,  302 => 78,  300 => 138,  296 => 76,  291 => 169,  288 => 107,  280 => 130,  275 => 103,  272 => 158,  249 => 89,  197 => 89,  192 => 87,  186 => 81,  174 => 64,  172 => 52,  148 => 53,  127 => 76,  114 => 23,  84 => 38,  160 => 75,  152 => 92,  77 => 27,  23 => 18,  76 => 20,  129 => 56,  97 => 63,  58 => 23,  20 => 11,  118 => 28,  797 => 266,  794 => 265,  789 => 260,  782 => 256,  776 => 253,  772 => 251,  770 => 250,  767 => 249,  761 => 247,  759 => 246,  756 => 245,  750 => 243,  748 => 242,  745 => 241,  739 => 239,  737 => 238,  734 => 237,  728 => 235,  726 => 234,  723 => 233,  720 => 232,  716 => 187,  710 => 186,  701 => 213,  696 => 182,  691 => 181,  688 => 180,  683 => 179,  680 => 178,  676 => 401,  667 => 164,  661 => 162,  658 => 161,  655 => 160,  649 => 157,  645 => 156,  642 => 155,  636 => 154,  631 => 151,  625 => 150,  617 => 148,  614 => 147,  610 => 146,  605 => 361,  602 => 143,  600 => 142,  597 => 141,  594 => 140,  587 => 139,  584 => 180,  581 => 346,  578 => 177,  572 => 135,  569 => 134,  566 => 133,  563 => 131,  556 => 174,  553 => 176,  547 => 128,  544 => 127,  539 => 173,  536 => 125,  533 => 124,  527 => 170,  521 => 168,  519 => 160,  515 => 158,  512 => 157,  509 => 304,  507 => 159,  503 => 121,  500 => 158,  493 => 155,  487 => 115,  482 => 114,  479 => 113,  472 => 77,  466 => 280,  462 => 75,  459 => 74,  451 => 71,  446 => 122,  441 => 141,  433 => 65,  417 => 59,  405 => 56,  395 => 120,  391 => 50,  372 => 37,  370 => 100,  361 => 208,  357 => 139,  352 => 138,  349 => 103,  346 => 196,  340 => 95,  333 => 117,  331 => 187,  326 => 185,  324 => 92,  320 => 84,  317 => 230,  311 => 89,  308 => 118,  306 => 140,  301 => 222,  295 => 88,  292 => 134,  290 => 217,  287 => 72,  282 => 79,  276 => 102,  270 => 100,  256 => 120,  250 => 93,  245 => 88,  239 => 86,  231 => 199,  226 => 67,  223 => 58,  205 => 59,  202 => 73,  200 => 55,  194 => 86,  190 => 50,  188 => 68,  181 => 79,  178 => 45,  150 => 64,  137 => 58,  134 => 58,  90 => 34,  81 => 26,  70 => 33,  126 => 55,  113 => 41,  104 => 49,  53 => 23,  153 => 71,  124 => 23,  110 => 51,  100 => 22,  65 => 29,  34 => 16,  480 => 132,  474 => 285,  469 => 158,  461 => 149,  457 => 131,  453 => 146,  444 => 142,  440 => 148,  437 => 66,  435 => 258,  430 => 103,  427 => 62,  423 => 136,  413 => 134,  409 => 127,  407 => 242,  402 => 55,  398 => 121,  393 => 119,  387 => 152,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 34,  362 => 141,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 142,  309 => 117,  305 => 115,  298 => 173,  294 => 111,  285 => 84,  283 => 166,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 198,  220 => 80,  214 => 98,  177 => 63,  169 => 73,  140 => 28,  132 => 59,  128 => 58,  107 => 24,  61 => 25,  273 => 101,  269 => 100,  254 => 91,  243 => 89,  240 => 86,  238 => 139,  235 => 74,  230 => 105,  227 => 134,  224 => 102,  221 => 78,  219 => 100,  217 => 79,  208 => 124,  204 => 73,  179 => 66,  159 => 69,  143 => 29,  135 => 81,  119 => 43,  102 => 37,  71 => 29,  67 => 25,  63 => 50,  59 => 28,  28 => 14,  87 => 17,  201 => 72,  196 => 71,  183 => 82,  171 => 63,  166 => 100,  163 => 49,  158 => 74,  156 => 67,  151 => 45,  142 => 50,  138 => 61,  136 => 60,  121 => 75,  117 => 50,  105 => 46,  91 => 39,  62 => 29,  49 => 21,  38 => 17,  25 => 12,  93 => 68,  88 => 60,  78 => 40,  46 => 21,  44 => 19,  31 => 15,  26 => 14,  94 => 21,  89 => 39,  85 => 34,  75 => 39,  68 => 30,  56 => 24,  27 => 13,  21 => 12,  24 => 13,  19 => 11,  79 => 31,  72 => 37,  69 => 50,  47 => 21,  40 => 19,  37 => 18,  22 => 12,  246 => 54,  157 => 41,  145 => 52,  139 => 59,  131 => 48,  123 => 57,  120 => 56,  115 => 49,  111 => 40,  108 => 47,  101 => 73,  98 => 47,  96 => 44,  83 => 36,  74 => 33,  66 => 25,  55 => 22,  52 => 20,  50 => 22,  43 => 20,  41 => 18,  35 => 16,  32 => 16,  29 => 15,  209 => 95,  203 => 92,  199 => 53,  193 => 70,  189 => 71,  187 => 86,  182 => 84,  176 => 81,  173 => 62,  168 => 60,  164 => 71,  162 => 70,  154 => 66,  149 => 36,  147 => 68,  144 => 67,  141 => 66,  133 => 51,  130 => 46,  125 => 45,  122 => 44,  116 => 30,  112 => 52,  109 => 69,  106 => 40,  103 => 45,  99 => 38,  95 => 42,  92 => 45,  86 => 43,  82 => 33,  80 => 41,  73 => 19,  64 => 26,  60 => 23,  57 => 22,  54 => 25,  51 => 24,  48 => 40,  45 => 20,  42 => 18,  39 => 17,  36 => 17,  33 => 16,  30 => 15,);
    }
}

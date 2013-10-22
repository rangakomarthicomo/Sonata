<?php

/* SensioDistributionBundle:Configurator/Step:secret.html.twig */
class __TwigTemplate_047a7cb4306d0096cf82e4e4f0f99ce2efdddba4010ed023b1426684f473542d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure global Secret";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme($this->getContext($context, "form"), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => $this->getContext($context, "index"), "count" => $this->getContext($context, "count"))));
        // line 10
        echo "
        <h1>Global Secret</h1>
        <p>Configure the global secret for your website (the secret is used for the CSRF protection among other things):</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => $this->getContext($context, "index"))), "html", null, true);
        echo " \" method=\"POST\">
            <div class=\"symfony-form-row\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'label');
        echo "
                <div class=\"symfony-form-field\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'widget');
        echo "
                    <a href=\"#\" onclick=\"generateSecret(); return false;\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">Generate</span>
                            </span>
                        </span>
                    </a>
                    <div class=\"symfony-form-errors\">
                        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "secret"), 'errors');
        echo "
                    </div>
                </div>
            </div>

            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>

        </form>

        <script type=\"text/javascript\">
            function generateSecret()
            {
                var result = '';
                for (i=0; i < 32; i++) {
                    result += Math.round(Math.random()*16).toString(16);
                }
                document.getElementById('distributionbundle_secret_step_secret').value = result;
            }
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:secret.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 328,  431 => 189,  408 => 176,  401 => 172,  373 => 156,  323 => 128,  207 => 75,  378 => 157,  334 => 141,  328 => 139,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  742 => 475,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  630 => 455,  621 => 452,  618 => 451,  616 => 450,  565 => 414,  525 => 408,  520 => 406,  244 => 136,  363 => 153,  353 => 149,  351 => 141,  255 => 101,  212 => 78,  303 => 122,  248 => 94,  318 => 111,  316 => 121,  299 => 112,  284 => 106,  281 => 114,  279 => 104,  222 => 83,  210 => 77,  165 => 60,  681 => 404,  664 => 394,  659 => 392,  650 => 388,  639 => 380,  633 => 377,  629 => 376,  613 => 366,  595 => 354,  588 => 350,  577 => 344,  575 => 341,  567 => 337,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  514 => 306,  492 => 295,  481 => 290,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  429 => 188,  424 => 254,  422 => 184,  253 => 100,  242 => 112,  213 => 78,  399 => 158,  396 => 234,  394 => 168,  383 => 224,  366 => 210,  359 => 140,  348 => 140,  345 => 147,  325 => 129,  267 => 101,  237 => 86,  234 => 84,  232 => 88,  218 => 77,  170 => 56,  167 => 60,  155 => 47,  695 => 210,  692 => 209,  690 => 467,  684 => 205,  674 => 397,  669 => 202,  657 => 200,  654 => 390,  651 => 198,  643 => 381,  640 => 192,  623 => 373,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  580 => 178,  573 => 340,  535 => 172,  530 => 410,  524 => 169,  518 => 307,  516 => 166,  498 => 157,  490 => 154,  486 => 292,  471 => 129,  468 => 128,  455 => 147,  450 => 145,  439 => 195,  434 => 138,  420 => 249,  418 => 128,  404 => 124,  389 => 160,  371 => 156,  358 => 151,  342 => 317,  339 => 316,  336 => 99,  329 => 131,  319 => 90,  297 => 276,  289 => 113,  286 => 112,  274 => 110,  263 => 95,  236 => 108,  233 => 87,  228 => 83,  191 => 67,  175 => 65,  146 => 34,  344 => 318,  338 => 135,  335 => 134,  321 => 135,  259 => 103,  215 => 78,  184 => 63,  161 => 63,  343 => 146,  332 => 116,  330 => 87,  327 => 114,  315 => 125,  313 => 82,  310 => 81,  304 => 174,  293 => 120,  277 => 78,  271 => 66,  265 => 105,  262 => 98,  260 => 123,  257 => 149,  216 => 79,  185 => 66,  180 => 104,  12 => 34,  568 => 179,  557 => 330,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 310,  517 => 161,  513 => 165,  504 => 302,  495 => 156,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 198,  426 => 102,  419 => 98,  415 => 180,  410 => 96,  392 => 83,  388 => 107,  386 => 159,  382 => 93,  380 => 160,  377 => 147,  369 => 136,  367 => 155,  347 => 102,  307 => 128,  302 => 125,  300 => 121,  296 => 121,  291 => 102,  288 => 118,  280 => 130,  275 => 105,  272 => 158,  249 => 89,  197 => 71,  192 => 87,  186 => 81,  174 => 65,  172 => 64,  148 => 63,  127 => 35,  114 => 23,  84 => 27,  160 => 66,  152 => 46,  77 => 25,  23 => 18,  76 => 27,  129 => 56,  97 => 41,  58 => 14,  20 => 1,  118 => 49,  797 => 266,  794 => 265,  789 => 260,  782 => 256,  776 => 253,  772 => 251,  770 => 250,  767 => 249,  761 => 247,  759 => 246,  756 => 245,  750 => 243,  748 => 242,  745 => 476,  739 => 239,  737 => 238,  734 => 237,  728 => 235,  726 => 234,  723 => 473,  720 => 232,  716 => 187,  710 => 186,  701 => 213,  696 => 182,  691 => 181,  688 => 180,  683 => 179,  680 => 178,  676 => 401,  667 => 164,  661 => 162,  658 => 161,  655 => 160,  649 => 157,  645 => 460,  642 => 155,  636 => 154,  631 => 151,  625 => 453,  617 => 148,  614 => 147,  610 => 146,  605 => 361,  602 => 449,  600 => 142,  597 => 141,  594 => 140,  587 => 139,  584 => 180,  581 => 346,  578 => 177,  572 => 135,  569 => 134,  566 => 133,  563 => 131,  556 => 174,  553 => 176,  547 => 411,  544 => 127,  539 => 173,  536 => 125,  533 => 124,  527 => 409,  521 => 168,  519 => 160,  515 => 404,  512 => 157,  509 => 304,  507 => 159,  503 => 121,  500 => 158,  493 => 155,  487 => 115,  482 => 114,  479 => 113,  472 => 77,  466 => 280,  462 => 202,  459 => 74,  451 => 71,  446 => 197,  441 => 196,  433 => 65,  417 => 59,  405 => 56,  395 => 120,  391 => 50,  372 => 37,  370 => 100,  361 => 146,  357 => 123,  352 => 138,  349 => 103,  346 => 196,  340 => 145,  333 => 117,  331 => 140,  326 => 138,  324 => 113,  320 => 127,  317 => 230,  311 => 89,  308 => 118,  306 => 107,  301 => 222,  295 => 275,  292 => 134,  290 => 119,  287 => 72,  282 => 79,  276 => 111,  270 => 102,  256 => 96,  250 => 93,  245 => 88,  239 => 86,  231 => 83,  226 => 84,  223 => 58,  205 => 59,  202 => 77,  200 => 72,  194 => 70,  190 => 76,  188 => 90,  181 => 65,  178 => 66,  150 => 55,  137 => 60,  134 => 54,  90 => 27,  81 => 30,  70 => 26,  126 => 51,  113 => 40,  104 => 37,  53 => 11,  153 => 56,  124 => 23,  110 => 38,  100 => 36,  65 => 17,  34 => 4,  480 => 132,  474 => 285,  469 => 158,  461 => 149,  457 => 131,  453 => 199,  444 => 142,  440 => 148,  437 => 66,  435 => 258,  430 => 103,  427 => 62,  423 => 136,  413 => 134,  409 => 127,  407 => 242,  402 => 55,  398 => 121,  393 => 119,  387 => 164,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 34,  362 => 141,  360 => 109,  355 => 143,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 129,  305 => 115,  298 => 120,  294 => 111,  285 => 84,  283 => 115,  278 => 106,  268 => 126,  264 => 72,  258 => 94,  252 => 68,  247 => 66,  241 => 90,  229 => 85,  220 => 81,  214 => 98,  177 => 63,  169 => 73,  140 => 58,  132 => 59,  128 => 58,  107 => 37,  61 => 17,  273 => 101,  269 => 107,  254 => 91,  243 => 92,  240 => 86,  238 => 139,  235 => 89,  230 => 105,  227 => 86,  224 => 81,  221 => 78,  219 => 100,  217 => 79,  208 => 76,  204 => 73,  179 => 66,  159 => 69,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 13,  67 => 18,  63 => 21,  59 => 17,  28 => 3,  87 => 33,  201 => 72,  196 => 92,  183 => 82,  171 => 63,  166 => 54,  163 => 53,  158 => 62,  156 => 58,  151 => 59,  142 => 50,  138 => 61,  136 => 71,  121 => 50,  117 => 39,  105 => 34,  91 => 34,  62 => 16,  49 => 12,  38 => 6,  25 => 35,  93 => 68,  88 => 30,  78 => 24,  46 => 10,  44 => 11,  31 => 5,  26 => 3,  94 => 38,  89 => 35,  85 => 23,  75 => 28,  68 => 12,  56 => 16,  27 => 7,  21 => 2,  24 => 2,  19 => 1,  79 => 29,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 93,  157 => 41,  145 => 74,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 40,  111 => 47,  108 => 19,  101 => 33,  98 => 34,  96 => 35,  83 => 30,  74 => 22,  66 => 25,  55 => 12,  52 => 13,  50 => 10,  43 => 9,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 95,  203 => 73,  199 => 93,  193 => 70,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 67,  162 => 59,  154 => 60,  149 => 36,  147 => 54,  144 => 42,  141 => 51,  133 => 51,  130 => 46,  125 => 51,  122 => 41,  116 => 39,  112 => 39,  109 => 47,  106 => 51,  103 => 45,  99 => 31,  95 => 34,  92 => 31,  86 => 33,  82 => 26,  80 => 32,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 11,  45 => 9,  42 => 13,  39 => 10,  36 => 9,  33 => 9,  30 => 7,);
    }
}

<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_e1f127f31e3f26e11ba100aa24e4e3a5e6ad8bc3c8650f6c2f15d5403ad7ac2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
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
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ($this->getContext($context, "is_writable")) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ($this->getContext($context, "is_writable")) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "yml_path"), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, $this->getContext($context, "yml_path"), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, "parameters"), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ($this->getContext($context, "welcome_url")) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getContext($context, "welcome_url"), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1352 => 388,  1343 => 387,  1341 => 386,  1338 => 385,  1322 => 381,  1315 => 380,  1313 => 379,  1310 => 378,  1287 => 374,  1262 => 373,  1260 => 372,  1257 => 371,  1245 => 366,  1240 => 365,  1238 => 364,  1235 => 363,  1226 => 357,  1220 => 355,  1217 => 354,  1212 => 353,  1210 => 352,  1207 => 351,  1200 => 346,  1191 => 344,  1187 => 343,  1184 => 342,  1181 => 341,  1179 => 340,  1176 => 339,  1168 => 335,  1166 => 334,  1163 => 333,  1157 => 329,  1151 => 327,  1148 => 326,  1146 => 325,  1143 => 324,  1134 => 319,  1132 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 313,  1094 => 312,  1091 => 311,  1089 => 310,  1086 => 309,  1079 => 305,  1075 => 304,  1070 => 303,  1068 => 302,  1065 => 301,  1058 => 296,  1055 => 295,  1047 => 290,  1044 => 289,  1042 => 288,  1039 => 287,  1031 => 282,  1027 => 281,  1023 => 280,  1020 => 279,  1018 => 278,  1015 => 277,  1007 => 273,  1005 => 269,  1003 => 268,  1000 => 267,  995 => 263,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  949 => 250,  946 => 249,  943 => 248,  941 => 247,  938 => 246,  930 => 240,  927 => 239,  925 => 238,  922 => 237,  914 => 233,  911 => 232,  909 => 231,  906 => 230,  894 => 226,  891 => 225,  888 => 224,  885 => 223,  883 => 222,  880 => 221,  872 => 217,  869 => 216,  867 => 215,  864 => 214,  856 => 210,  853 => 209,  851 => 208,  848 => 207,  840 => 203,  837 => 202,  835 => 201,  832 => 200,  824 => 196,  821 => 195,  819 => 194,  816 => 193,  808 => 189,  805 => 188,  800 => 186,  787 => 180,  774 => 174,  763 => 169,  760 => 168,  758 => 167,  755 => 166,  747 => 162,  744 => 161,  740 => 159,  730 => 153,  715 => 151,  712 => 150,  703 => 147,  687 => 137,  685 => 135,  671 => 131,  666 => 129,  653 => 122,  634 => 117,  626 => 114,  608 => 109,  589 => 104,  555 => 96,  548 => 93,  546 => 92,  541 => 91,  506 => 82,  494 => 78,  484 => 75,  442 => 62,  428 => 59,  414 => 52,  403 => 48,  400 => 47,  390 => 43,  385 => 41,  350 => 26,  266 => 363,  225 => 295,  356 => 328,  431 => 189,  408 => 50,  401 => 172,  373 => 156,  323 => 128,  207 => 266,  378 => 157,  334 => 141,  328 => 139,  806 => 488,  803 => 187,  792 => 182,  788 => 484,  784 => 179,  771 => 173,  742 => 160,  706 => 148,  702 => 470,  698 => 145,  694 => 468,  686 => 136,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  630 => 455,  621 => 452,  618 => 451,  616 => 450,  565 => 414,  525 => 408,  520 => 89,  244 => 136,  363 => 32,  353 => 149,  351 => 141,  255 => 350,  212 => 276,  303 => 122,  248 => 333,  318 => 111,  316 => 16,  299 => 8,  284 => 106,  281 => 385,  279 => 104,  222 => 294,  210 => 267,  165 => 60,  681 => 404,  664 => 394,  659 => 392,  650 => 388,  639 => 380,  633 => 377,  629 => 115,  613 => 366,  595 => 354,  588 => 350,  577 => 344,  575 => 341,  567 => 98,  550 => 326,  542 => 321,  538 => 90,  531 => 312,  514 => 306,  492 => 77,  481 => 74,  456 => 68,  452 => 272,  445 => 267,  443 => 261,  429 => 188,  424 => 254,  422 => 184,  253 => 339,  242 => 112,  213 => 78,  399 => 158,  396 => 234,  394 => 168,  383 => 224,  366 => 33,  359 => 140,  348 => 140,  345 => 147,  325 => 129,  267 => 101,  237 => 86,  234 => 84,  232 => 88,  218 => 77,  170 => 56,  167 => 60,  155 => 47,  695 => 210,  692 => 209,  690 => 139,  684 => 205,  674 => 132,  669 => 130,  657 => 123,  654 => 390,  651 => 198,  643 => 381,  640 => 119,  623 => 373,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  580 => 178,  573 => 340,  535 => 172,  530 => 410,  524 => 169,  518 => 88,  516 => 166,  498 => 157,  490 => 154,  486 => 292,  471 => 72,  468 => 128,  455 => 147,  450 => 64,  439 => 195,  434 => 138,  420 => 249,  418 => 128,  404 => 124,  389 => 160,  371 => 35,  358 => 151,  342 => 23,  339 => 316,  336 => 99,  329 => 131,  319 => 90,  297 => 276,  289 => 113,  286 => 112,  274 => 110,  263 => 362,  236 => 108,  233 => 301,  228 => 83,  191 => 243,  175 => 65,  146 => 178,  344 => 24,  338 => 135,  335 => 21,  321 => 135,  259 => 103,  215 => 277,  184 => 230,  161 => 199,  343 => 146,  332 => 20,  330 => 87,  327 => 114,  315 => 125,  313 => 15,  310 => 81,  304 => 174,  293 => 6,  277 => 78,  271 => 371,  265 => 105,  262 => 98,  260 => 360,  257 => 149,  216 => 79,  185 => 66,  180 => 104,  12 => 34,  568 => 179,  557 => 330,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 310,  517 => 161,  513 => 165,  504 => 302,  495 => 156,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 198,  426 => 58,  419 => 98,  415 => 180,  410 => 96,  392 => 83,  388 => 42,  386 => 159,  382 => 93,  380 => 160,  377 => 37,  369 => 136,  367 => 155,  347 => 102,  307 => 128,  302 => 125,  300 => 121,  296 => 121,  291 => 102,  288 => 4,  280 => 130,  275 => 105,  272 => 158,  249 => 89,  197 => 246,  192 => 87,  186 => 236,  174 => 214,  172 => 64,  148 => 63,  127 => 35,  114 => 108,  84 => 41,  160 => 66,  152 => 46,  77 => 25,  23 => 18,  76 => 31,  129 => 145,  97 => 41,  58 => 15,  20 => 1,  118 => 49,  797 => 266,  794 => 265,  789 => 181,  782 => 256,  776 => 175,  772 => 251,  770 => 250,  767 => 249,  761 => 247,  759 => 246,  756 => 245,  750 => 243,  748 => 242,  745 => 476,  739 => 239,  737 => 158,  734 => 237,  728 => 235,  726 => 234,  723 => 473,  720 => 152,  716 => 187,  710 => 186,  701 => 146,  696 => 182,  691 => 181,  688 => 138,  683 => 179,  680 => 134,  676 => 401,  667 => 164,  661 => 162,  658 => 161,  655 => 160,  649 => 121,  645 => 120,  642 => 155,  636 => 154,  631 => 116,  625 => 453,  617 => 148,  614 => 147,  610 => 110,  605 => 108,  602 => 449,  600 => 142,  597 => 141,  594 => 140,  587 => 103,  584 => 102,  581 => 346,  578 => 177,  572 => 135,  569 => 134,  566 => 133,  563 => 131,  556 => 174,  553 => 176,  547 => 411,  544 => 127,  539 => 173,  536 => 125,  533 => 124,  527 => 409,  521 => 168,  519 => 160,  515 => 87,  512 => 157,  509 => 304,  507 => 159,  503 => 81,  500 => 80,  493 => 155,  487 => 76,  482 => 114,  479 => 113,  472 => 77,  466 => 280,  462 => 202,  459 => 69,  451 => 71,  446 => 197,  441 => 196,  433 => 60,  417 => 59,  405 => 49,  395 => 120,  391 => 50,  372 => 37,  370 => 100,  361 => 146,  357 => 123,  352 => 138,  349 => 103,  346 => 196,  340 => 145,  333 => 117,  331 => 140,  326 => 138,  324 => 113,  320 => 127,  317 => 230,  311 => 14,  308 => 13,  306 => 107,  301 => 222,  295 => 275,  292 => 134,  290 => 5,  287 => 72,  282 => 79,  276 => 378,  270 => 102,  256 => 96,  250 => 338,  245 => 332,  239 => 86,  231 => 83,  226 => 84,  223 => 58,  205 => 59,  202 => 263,  200 => 72,  194 => 245,  190 => 76,  188 => 90,  181 => 229,  178 => 66,  150 => 55,  137 => 60,  134 => 158,  90 => 27,  81 => 40,  70 => 19,  126 => 144,  113 => 40,  104 => 87,  53 => 11,  153 => 56,  124 => 129,  110 => 38,  100 => 36,  65 => 17,  34 => 4,  480 => 132,  474 => 285,  469 => 71,  461 => 70,  457 => 131,  453 => 199,  444 => 142,  440 => 148,  437 => 61,  435 => 258,  430 => 103,  427 => 62,  423 => 57,  413 => 134,  409 => 127,  407 => 242,  402 => 55,  398 => 121,  393 => 119,  387 => 164,  384 => 116,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 34,  362 => 141,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 99,  312 => 124,  309 => 129,  305 => 115,  298 => 120,  294 => 111,  285 => 3,  283 => 115,  278 => 384,  268 => 370,  264 => 72,  258 => 351,  252 => 68,  247 => 66,  241 => 90,  229 => 85,  220 => 287,  214 => 98,  177 => 63,  169 => 207,  140 => 58,  132 => 59,  128 => 58,  107 => 37,  61 => 2,  273 => 377,  269 => 107,  254 => 91,  243 => 324,  240 => 323,  238 => 309,  235 => 308,  230 => 300,  227 => 298,  224 => 81,  221 => 78,  219 => 100,  217 => 286,  208 => 76,  204 => 264,  179 => 221,  159 => 193,  143 => 51,  135 => 62,  119 => 114,  102 => 30,  71 => 19,  67 => 16,  63 => 21,  59 => 13,  28 => 3,  87 => 26,  201 => 72,  196 => 92,  183 => 82,  171 => 213,  166 => 206,  163 => 53,  158 => 62,  156 => 192,  151 => 185,  142 => 50,  138 => 61,  136 => 165,  121 => 128,  117 => 39,  105 => 34,  91 => 29,  62 => 14,  49 => 12,  38 => 5,  25 => 35,  93 => 28,  88 => 28,  78 => 24,  46 => 10,  44 => 8,  31 => 5,  26 => 3,  94 => 57,  89 => 47,  85 => 26,  75 => 22,  68 => 20,  56 => 14,  27 => 7,  21 => 2,  24 => 2,  19 => 1,  79 => 32,  72 => 18,  69 => 13,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 93,  157 => 41,  145 => 74,  139 => 166,  131 => 157,  123 => 42,  120 => 31,  115 => 40,  111 => 107,  108 => 33,  101 => 86,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 4,  32 => 4,  29 => 3,  209 => 95,  203 => 73,  199 => 262,  193 => 70,  189 => 237,  187 => 75,  182 => 87,  176 => 220,  173 => 85,  168 => 61,  164 => 200,  162 => 59,  154 => 186,  149 => 179,  147 => 54,  144 => 173,  141 => 172,  133 => 51,  130 => 46,  125 => 51,  122 => 41,  116 => 113,  112 => 39,  109 => 102,  106 => 101,  103 => 45,  99 => 68,  95 => 34,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 17,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 10,  45 => 8,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}

<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_c8ee2b6caa48ad7db3b85c87bc057e99f5f873472614dd93c5af63e9d6d97c8b extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute($this->getContext($context, "admin"), "hasroute", array(0 => "list"), "method") && $this->getAttribute($this->getContext($context, "admin"), "isGranted", array(0 => "LIST"), "method"))) {
            // line 13
            echo "    <a class=\"btn sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"icon-list\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 25,  27 => 14,  30 => 15,  24 => 13,  22 => 12,  19 => 11,  1352 => 388,  1343 => 387,  1341 => 386,  1338 => 385,  1322 => 381,  1315 => 380,  1313 => 379,  1310 => 378,  1287 => 374,  1262 => 373,  1260 => 372,  1257 => 371,  1245 => 366,  1240 => 365,  1238 => 364,  1235 => 363,  1226 => 357,  1220 => 355,  1217 => 354,  1212 => 353,  1210 => 352,  1207 => 351,  1200 => 346,  1191 => 344,  1187 => 343,  1184 => 342,  1181 => 341,  1179 => 340,  1176 => 339,  1168 => 335,  1166 => 334,  1163 => 333,  1157 => 329,  1151 => 327,  1148 => 326,  1146 => 325,  1143 => 324,  1134 => 319,  1132 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1097 => 313,  1094 => 312,  1091 => 311,  1089 => 310,  1086 => 309,  1079 => 305,  1075 => 304,  1070 => 303,  1068 => 302,  1065 => 301,  1058 => 296,  1055 => 295,  1047 => 290,  1044 => 289,  1042 => 288,  1039 => 287,  1031 => 282,  1027 => 281,  1023 => 280,  1020 => 279,  1018 => 278,  1015 => 277,  1007 => 273,  1005 => 269,  1003 => 268,  1000 => 267,  995 => 263,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  949 => 250,  946 => 249,  943 => 248,  941 => 247,  938 => 246,  930 => 240,  927 => 239,  925 => 238,  922 => 237,  914 => 233,  911 => 232,  909 => 231,  906 => 230,  894 => 226,  891 => 225,  888 => 224,  885 => 223,  883 => 222,  880 => 221,  872 => 217,  869 => 216,  867 => 215,  864 => 214,  856 => 210,  853 => 209,  851 => 208,  848 => 207,  840 => 203,  837 => 202,  835 => 201,  832 => 200,  824 => 196,  821 => 195,  819 => 194,  816 => 193,  808 => 189,  805 => 188,  803 => 187,  800 => 186,  792 => 182,  787 => 180,  784 => 179,  774 => 174,  771 => 173,  763 => 169,  760 => 168,  758 => 167,  755 => 166,  747 => 162,  744 => 161,  742 => 160,  740 => 159,  730 => 153,  715 => 151,  712 => 150,  706 => 148,  703 => 147,  698 => 145,  687 => 137,  686 => 136,  685 => 135,  671 => 131,  666 => 129,  653 => 122,  634 => 117,  629 => 115,  626 => 114,  608 => 109,  589 => 104,  567 => 98,  555 => 96,  548 => 93,  546 => 92,  541 => 91,  538 => 90,  520 => 89,  506 => 82,  494 => 78,  492 => 77,  484 => 75,  481 => 74,  469 => 71,  456 => 68,  442 => 62,  428 => 59,  426 => 58,  414 => 52,  408 => 50,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  368 => 34,  366 => 33,  363 => 32,  350 => 26,  344 => 24,  337 => 22,  335 => 21,  316 => 16,  299 => 8,  288 => 4,  285 => 3,  281 => 385,  278 => 384,  266 => 363,  258 => 351,  255 => 350,  253 => 339,  240 => 323,  235 => 308,  227 => 298,  225 => 295,  222 => 294,  220 => 287,  217 => 286,  215 => 277,  212 => 276,  210 => 267,  207 => 266,  204 => 264,  199 => 262,  189 => 237,  186 => 236,  179 => 221,  161 => 199,  159 => 193,  156 => 192,  154 => 186,  151 => 185,  129 => 145,  126 => 144,  119 => 114,  116 => 113,  114 => 108,  111 => 107,  109 => 102,  106 => 101,  99 => 68,  96 => 67,  91 => 56,  89 => 47,  61 => 2,  695 => 210,  692 => 209,  690 => 139,  684 => 205,  674 => 132,  669 => 130,  657 => 123,  654 => 199,  651 => 198,  643 => 193,  640 => 119,  623 => 190,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  580 => 178,  573 => 176,  535 => 172,  530 => 171,  524 => 169,  518 => 88,  516 => 166,  513 => 165,  504 => 160,  498 => 157,  495 => 156,  490 => 154,  486 => 134,  480 => 132,  474 => 130,  471 => 72,  468 => 128,  461 => 70,  455 => 147,  450 => 64,  444 => 142,  439 => 140,  434 => 138,  420 => 135,  418 => 128,  404 => 124,  398 => 121,  393 => 119,  389 => 118,  384 => 116,  377 => 37,  374 => 36,  371 => 35,  358 => 106,  347 => 102,  342 => 23,  339 => 100,  336 => 99,  329 => 95,  321 => 91,  319 => 90,  307 => 87,  297 => 84,  291 => 82,  289 => 81,  272 => 76,  269 => 75,  247 => 66,  243 => 324,  238 => 309,  233 => 301,  228 => 59,  208 => 57,  191 => 243,  184 => 230,  175 => 43,  157 => 41,  152 => 38,  149 => 179,  146 => 178,  139 => 166,  118 => 28,  107 => 24,  101 => 86,  95 => 20,  84 => 41,  76 => 31,  64 => 3,  57 => 27,  52 => 113,  44 => 74,  42 => 62,  34 => 53,  318 => 144,  312 => 142,  303 => 139,  300 => 138,  286 => 80,  274 => 77,  268 => 370,  263 => 362,  248 => 333,  242 => 112,  236 => 63,  230 => 300,  224 => 102,  219 => 100,  214 => 98,  203 => 56,  197 => 246,  187 => 86,  182 => 84,  170 => 78,  165 => 76,  158 => 74,  153 => 71,  147 => 68,  141 => 172,  138 => 61,  136 => 165,  132 => 59,  123 => 30,  120 => 56,  112 => 26,  104 => 87,  98 => 21,  92 => 19,  86 => 46,  78 => 40,  75 => 39,  72 => 198,  67 => 184,  62 => 165,  59 => 164,  38 => 18,  797 => 266,  794 => 265,  789 => 181,  782 => 256,  776 => 175,  772 => 251,  770 => 250,  767 => 249,  761 => 247,  759 => 246,  756 => 245,  750 => 243,  748 => 242,  745 => 241,  739 => 239,  737 => 158,  734 => 237,  728 => 235,  726 => 234,  723 => 233,  720 => 152,  716 => 187,  710 => 186,  701 => 146,  696 => 182,  691 => 181,  688 => 138,  683 => 179,  680 => 134,  676 => 168,  667 => 164,  661 => 162,  658 => 161,  655 => 160,  649 => 121,  645 => 120,  642 => 155,  636 => 154,  631 => 116,  625 => 150,  617 => 148,  614 => 147,  610 => 110,  605 => 108,  602 => 143,  600 => 142,  597 => 141,  594 => 140,  587 => 103,  584 => 102,  581 => 137,  578 => 177,  572 => 135,  569 => 134,  566 => 133,  563 => 131,  556 => 174,  553 => 129,  547 => 128,  544 => 127,  539 => 173,  536 => 125,  533 => 124,  527 => 170,  521 => 168,  519 => 160,  515 => 87,  512 => 157,  509 => 124,  507 => 123,  503 => 81,  500 => 80,  493 => 155,  487 => 76,  482 => 114,  479 => 113,  472 => 77,  466 => 76,  462 => 75,  459 => 69,  453 => 146,  451 => 71,  446 => 69,  441 => 141,  437 => 61,  433 => 60,  427 => 62,  423 => 57,  417 => 59,  409 => 127,  405 => 49,  402 => 55,  395 => 120,  391 => 50,  387 => 48,  372 => 37,  365 => 34,  357 => 32,  349 => 103,  333 => 272,  331 => 265,  326 => 93,  324 => 92,  317 => 230,  311 => 14,  308 => 13,  306 => 140,  301 => 222,  295 => 219,  292 => 134,  290 => 5,  282 => 79,  276 => 378,  273 => 377,  270 => 209,  256 => 120,  250 => 338,  245 => 332,  239 => 201,  231 => 199,  229 => 198,  226 => 197,  205 => 195,  202 => 263,  200 => 55,  196 => 191,  194 => 245,  190 => 188,  181 => 229,  178 => 45,  173 => 42,  171 => 213,  162 => 110,  150 => 100,  144 => 173,  140 => 96,  134 => 158,  117 => 92,  110 => 25,  93 => 88,  90 => 18,  87 => 17,  81 => 40,  70 => 33,  54 => 26,  51 => 24,  47 => 75,  45 => 18,  41 => 16,  39 => 61,  33 => 16,  31 => 11,  370 => 36,  367 => 99,  361 => 107,  355 => 27,  352 => 30,  346 => 28,  343 => 91,  340 => 22,  332 => 20,  330 => 87,  327 => 86,  320 => 231,  315 => 83,  313 => 15,  310 => 81,  304 => 79,  302 => 78,  296 => 76,  293 => 6,  287 => 216,  283 => 70,  280 => 130,  277 => 78,  271 => 371,  265 => 125,  262 => 63,  260 => 360,  257 => 61,  254 => 68,  249 => 55,  246 => 54,  241 => 31,  223 => 58,  216 => 99,  209 => 95,  192 => 87,  188 => 178,  185 => 85,  180 => 104,  176 => 220,  174 => 214,  169 => 207,  166 => 206,  164 => 200,  160 => 75,  143 => 48,  137 => 95,  131 => 157,  128 => 58,  124 => 129,  121 => 128,  115 => 27,  113 => 90,  100 => 36,  79 => 32,  68 => 30,  65 => 54,  60 => 13,  56 => 12,  40 => 6,  37 => 54,  35 => 16,  32 => 13,  29 => 11,  23 => 1,  97 => 37,  94 => 57,  88 => 32,  83 => 35,  80 => 41,  77 => 20,  74 => 20,  71 => 19,  69 => 13,  66 => 12,  63 => 28,  55 => 18,  49 => 112,  46 => 21,  43 => 21,  12 => 34,);
    }
}

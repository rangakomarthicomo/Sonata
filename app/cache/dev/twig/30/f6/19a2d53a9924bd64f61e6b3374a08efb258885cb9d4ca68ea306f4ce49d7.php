<?php

/* SonataAdminBundle:CRUD:base_inline_edit_field.html.twig */
class __TwigTemplate_30f619a2d53a9924bd64f61e6b3374a08efb258885cb9d4ca68ea306f4ce49d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'label' => array($this, 'block_label'),
            'field' => array($this, 'block_field'),
            'errors' => array($this, 'block_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<div id=\"sonata-ba-field-container-";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "id"), "html", null, true);
        echo "\" class=\"sonata-ba-field sonata-ba-field-";
        echo twig_escape_filter($this->env, $this->getContext($context, "edit"), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getContext($context, "inline"), "html", null, true);
        echo " ";
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "field_element"), "vars"), "errors"))) {
            echo "sonata-ba-field-error";
        }
        echo "\">

    ";
        // line 14
        $this->displayBlock('label', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('field', $context, $blocks);
        // line 26
        echo "
    <div class=\"sonata-ba-field-error-messages\">
        ";
        // line 28
        $this->displayBlock('errors', $context, $blocks);
        // line 29
        echo "    </div>
</div>
";
    }

    // line 14
    public function block_label($context, array $blocks = array())
    {
        // line 15
        echo "        ";
        if (($this->getContext($context, "inline") == "natural")) {
            // line 16
            echo "            ";
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "field_description", true), "options", array(), "any", false, true), "name", array(), "any", true, true)) {
                // line 17
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label', (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute($this->getContext($context, "field_description"), "options"), "name")) ? array() : array("label" => $_label_)));
                echo "
            ";
            } else {
                // line 19
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'label');
                echo "
            ";
            }
            // line 21
            echo "            <br />
        ";
        }
        // line 23
        echo "    ";
    }

    // line 25
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'widget');
    }

    // line 28
    public function block_errors($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "field_element"), 'errors');
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_inline_edit_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 179,  557 => 177,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  504 => 158,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  367 => 131,  347 => 118,  307 => 115,  302 => 114,  300 => 113,  296 => 111,  291 => 109,  288 => 108,  280 => 79,  275 => 77,  272 => 76,  249 => 70,  197 => 56,  192 => 55,  186 => 54,  174 => 53,  172 => 52,  148 => 44,  127 => 34,  114 => 44,  84 => 34,  160 => 48,  152 => 63,  77 => 13,  23 => 11,  76 => 33,  129 => 49,  97 => 31,  58 => 25,  20 => 11,  118 => 49,  797 => 266,  794 => 265,  789 => 260,  782 => 256,  776 => 253,  772 => 251,  770 => 250,  767 => 249,  761 => 247,  759 => 246,  756 => 245,  750 => 243,  748 => 242,  745 => 241,  739 => 239,  737 => 238,  734 => 237,  728 => 235,  726 => 234,  723 => 233,  720 => 232,  716 => 187,  710 => 186,  701 => 183,  696 => 182,  691 => 181,  688 => 180,  683 => 179,  680 => 178,  676 => 168,  667 => 164,  661 => 162,  658 => 161,  655 => 160,  649 => 157,  645 => 156,  642 => 155,  636 => 154,  631 => 151,  625 => 150,  617 => 148,  614 => 147,  610 => 146,  605 => 144,  602 => 143,  600 => 142,  597 => 141,  594 => 140,  587 => 139,  584 => 138,  581 => 137,  578 => 136,  572 => 135,  569 => 134,  566 => 133,  563 => 131,  556 => 130,  553 => 176,  547 => 128,  544 => 127,  539 => 126,  536 => 125,  533 => 124,  527 => 123,  521 => 169,  519 => 160,  515 => 158,  512 => 157,  509 => 124,  507 => 159,  503 => 121,  500 => 157,  493 => 116,  487 => 115,  482 => 114,  479 => 113,  472 => 77,  466 => 76,  462 => 75,  459 => 74,  451 => 71,  446 => 122,  441 => 105,  433 => 65,  417 => 59,  405 => 56,  395 => 84,  391 => 50,  372 => 37,  370 => 36,  361 => 127,  357 => 125,  352 => 121,  349 => 29,  346 => 28,  340 => 22,  333 => 117,  331 => 265,  326 => 262,  324 => 116,  320 => 231,  317 => 230,  311 => 227,  308 => 226,  306 => 225,  301 => 222,  295 => 219,  292 => 218,  290 => 217,  287 => 216,  282 => 80,  276 => 211,  270 => 209,  256 => 208,  250 => 206,  245 => 203,  239 => 201,  231 => 199,  226 => 67,  223 => 66,  205 => 59,  202 => 194,  200 => 193,  194 => 190,  190 => 188,  188 => 178,  181 => 173,  178 => 172,  150 => 58,  137 => 95,  134 => 94,  90 => 36,  81 => 30,  70 => 29,  126 => 48,  113 => 46,  104 => 43,  53 => 24,  153 => 48,  124 => 49,  110 => 45,  100 => 41,  65 => 25,  34 => 17,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 66,  435 => 146,  430 => 103,  427 => 62,  423 => 60,  413 => 134,  409 => 58,  407 => 95,  402 => 55,  398 => 129,  393 => 126,  387 => 48,  384 => 121,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 34,  362 => 110,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 81,  283 => 88,  278 => 86,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 198,  220 => 65,  214 => 61,  177 => 65,  169 => 51,  140 => 41,  132 => 43,  128 => 47,  107 => 44,  61 => 26,  273 => 210,  269 => 75,  254 => 92,  243 => 68,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 60,  204 => 72,  179 => 72,  159 => 49,  143 => 56,  135 => 48,  119 => 31,  102 => 142,  71 => 31,  67 => 19,  63 => 16,  59 => 23,  28 => 14,  87 => 35,  201 => 57,  196 => 191,  183 => 82,  171 => 113,  166 => 50,  163 => 49,  158 => 67,  156 => 66,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 51,  117 => 45,  105 => 143,  91 => 75,  62 => 24,  49 => 28,  38 => 14,  25 => 12,  93 => 138,  88 => 74,  78 => 21,  46 => 19,  44 => 19,  31 => 16,  26 => 14,  94 => 39,  89 => 17,  85 => 36,  75 => 31,  68 => 26,  56 => 22,  27 => 12,  21 => 11,  24 => 12,  19 => 11,  79 => 34,  72 => 19,  69 => 29,  47 => 20,  40 => 24,  37 => 14,  22 => 11,  246 => 69,  157 => 47,  145 => 43,  139 => 51,  131 => 48,  123 => 33,  120 => 46,  115 => 47,  111 => 43,  108 => 144,  101 => 39,  98 => 140,  96 => 139,  83 => 64,  74 => 29,  66 => 17,  55 => 24,  52 => 23,  50 => 20,  43 => 25,  41 => 19,  35 => 13,  32 => 16,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 120,  173 => 119,  168 => 72,  164 => 111,  162 => 110,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 51,  130 => 35,  125 => 46,  122 => 45,  116 => 30,  112 => 47,  109 => 45,  106 => 35,  103 => 38,  99 => 38,  95 => 19,  92 => 28,  86 => 25,  82 => 23,  80 => 14,  73 => 27,  64 => 27,  60 => 15,  57 => 14,  54 => 22,  51 => 29,  48 => 22,  45 => 26,  42 => 20,  39 => 20,  36 => 18,  33 => 16,  30 => 15,);
    }
}

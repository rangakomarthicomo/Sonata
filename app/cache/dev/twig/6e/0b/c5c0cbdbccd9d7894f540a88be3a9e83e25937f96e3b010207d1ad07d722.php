<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_6e0bc5c0cbdbccd9d7894f540a88be3a9e83e25937f96e3b010207d1ad07d722 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'show' => array($this, 'block_show'),
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
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:edit_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:history_button.html.twig")->display($context);
        // line 18
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 19
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 20
        echo "    </div>
";
    }

    // line 23
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute($this->getContext($context, "admin"), "sidemenu", array(0 => $this->getContext($context, "action")), "method"), array("currentClass" => "active"), "list");
    }

    // line 25
    public function block_show($context, array $blocks = array())
    {
        // line 26
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "admin"), "showgroups"));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 28
            echo "            <table class=\"table table-bordered\">
                ";
            // line 29
            if ($this->getContext($context, "name")) {
                // line 30
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "admin"), "trans", array(0 => $this->getContext($context, "name")), "method"), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 36
            echo "
                ";
            // line 37
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "view_group"), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 38
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 39
                if ($this->getAttribute($this->getContext($context, "elements", true), $this->getContext($context, "field_name"), array(), "array", true, true)) {
                    // line 40
                    echo "                            ";
                    echo $this->env->getExtension('sonata_admin')->renderViewElement($this->getAttribute($this->getContext($context, "elements"), $this->getContext($context, "field_name"), array(), "array"), $this->getContext($context, "object"));
                    echo "
                        ";
                }
                // line 42
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 91,  332 => 88,  330 => 87,  327 => 86,  315 => 83,  313 => 82,  310 => 81,  304 => 79,  293 => 75,  277 => 68,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  216 => 25,  185 => 20,  180 => 104,  12 => 34,  568 => 179,  557 => 177,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  504 => 158,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  367 => 99,  347 => 118,  307 => 115,  302 => 78,  300 => 113,  296 => 76,  291 => 109,  288 => 108,  280 => 69,  275 => 77,  272 => 76,  249 => 55,  197 => 56,  192 => 23,  186 => 54,  174 => 60,  172 => 52,  148 => 44,  127 => 34,  114 => 46,  84 => 36,  160 => 52,  152 => 63,  77 => 34,  23 => 12,  76 => 35,  129 => 56,  97 => 41,  58 => 25,  20 => 11,  118 => 49,  797 => 266,  794 => 265,  789 => 260,  782 => 256,  776 => 253,  772 => 251,  770 => 250,  767 => 249,  761 => 247,  759 => 246,  756 => 245,  750 => 243,  748 => 242,  745 => 241,  739 => 239,  737 => 238,  734 => 237,  728 => 235,  726 => 234,  723 => 233,  720 => 232,  716 => 187,  710 => 186,  701 => 183,  696 => 182,  691 => 181,  688 => 180,  683 => 179,  680 => 178,  676 => 168,  667 => 164,  661 => 162,  658 => 161,  655 => 160,  649 => 157,  645 => 156,  642 => 155,  636 => 154,  631 => 151,  625 => 150,  617 => 148,  614 => 147,  610 => 146,  605 => 144,  602 => 143,  600 => 142,  597 => 141,  594 => 140,  587 => 139,  584 => 138,  581 => 137,  578 => 136,  572 => 135,  569 => 134,  566 => 133,  563 => 131,  556 => 130,  553 => 176,  547 => 128,  544 => 127,  539 => 126,  536 => 125,  533 => 124,  527 => 123,  521 => 169,  519 => 160,  515 => 158,  512 => 157,  509 => 124,  507 => 159,  503 => 121,  500 => 157,  493 => 116,  487 => 115,  482 => 114,  479 => 113,  472 => 77,  466 => 76,  462 => 75,  459 => 74,  451 => 71,  446 => 122,  441 => 105,  433 => 65,  417 => 59,  405 => 56,  395 => 84,  391 => 50,  372 => 37,  370 => 100,  361 => 97,  357 => 125,  352 => 94,  349 => 29,  346 => 92,  340 => 90,  333 => 117,  331 => 265,  326 => 262,  324 => 116,  320 => 84,  317 => 230,  311 => 227,  308 => 226,  306 => 225,  301 => 222,  295 => 219,  292 => 218,  290 => 217,  287 => 72,  282 => 80,  276 => 211,  270 => 209,  256 => 208,  250 => 206,  245 => 203,  239 => 201,  231 => 199,  226 => 67,  223 => 27,  205 => 59,  202 => 194,  200 => 193,  194 => 190,  190 => 188,  188 => 21,  181 => 173,  178 => 172,  150 => 58,  137 => 47,  134 => 94,  90 => 36,  81 => 30,  70 => 29,  126 => 55,  113 => 48,  104 => 43,  53 => 24,  153 => 48,  124 => 43,  110 => 45,  100 => 42,  65 => 15,  34 => 16,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 66,  435 => 146,  430 => 103,  427 => 62,  423 => 60,  413 => 134,  409 => 58,  407 => 95,  402 => 55,  398 => 129,  393 => 126,  387 => 48,  384 => 121,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 34,  362 => 110,  360 => 109,  355 => 95,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 81,  283 => 70,  278 => 86,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 78,  241 => 31,  229 => 198,  220 => 65,  214 => 61,  177 => 65,  169 => 58,  140 => 41,  132 => 57,  128 => 44,  107 => 44,  61 => 27,  273 => 210,  269 => 75,  254 => 60,  243 => 68,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 60,  204 => 72,  179 => 72,  159 => 49,  143 => 48,  135 => 48,  119 => 31,  102 => 43,  71 => 30,  67 => 19,  63 => 31,  59 => 26,  28 => 14,  87 => 35,  201 => 57,  196 => 191,  183 => 82,  171 => 113,  166 => 57,  163 => 49,  158 => 67,  156 => 66,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 52,  117 => 49,  105 => 45,  91 => 39,  62 => 27,  49 => 23,  38 => 18,  25 => 12,  93 => 138,  88 => 37,  78 => 36,  46 => 22,  44 => 21,  31 => 15,  26 => 14,  94 => 40,  89 => 38,  85 => 37,  75 => 32,  68 => 16,  56 => 25,  27 => 12,  21 => 11,  24 => 13,  19 => 11,  79 => 34,  72 => 31,  69 => 29,  47 => 19,  40 => 17,  37 => 17,  22 => 12,  246 => 54,  157 => 47,  145 => 43,  139 => 51,  131 => 45,  123 => 52,  120 => 46,  115 => 40,  111 => 43,  108 => 45,  101 => 46,  98 => 140,  96 => 44,  83 => 36,  74 => 33,  66 => 28,  55 => 21,  52 => 23,  50 => 23,  43 => 21,  41 => 20,  35 => 20,  32 => 14,  29 => 15,  209 => 24,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 102,  173 => 119,  168 => 72,  164 => 54,  162 => 110,  154 => 46,  149 => 62,  147 => 46,  144 => 45,  141 => 48,  133 => 51,  130 => 35,  125 => 46,  122 => 45,  116 => 30,  112 => 47,  109 => 45,  106 => 35,  103 => 38,  99 => 45,  95 => 19,  92 => 39,  86 => 37,  82 => 36,  80 => 35,  73 => 34,  64 => 27,  60 => 28,  57 => 27,  54 => 25,  51 => 24,  48 => 22,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}

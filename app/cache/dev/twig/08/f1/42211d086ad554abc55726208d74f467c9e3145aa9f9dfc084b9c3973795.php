<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_08f142211d086ad554abc55726208d74f467c9e3145aa9f9dfc084b9c3973795 extends Twig_Template
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
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo $this->getContext($context, "id");
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "code"), "elementId" => $this->getContext($context, "id"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute($this->getContext($context, "sonata_admin"), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 49
        echo $this->getContext($context, "id");
        echo "').replaceWith(html); // replace the html
                Admin.setup_select2(jQuery('#field_container_";
        // line 50
        echo $this->getContext($context, "id");
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 56
        echo $this->getContext($context, "id");
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 57
        echo $this->getContext($context, "id");
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 64
        echo $this->getContext($context, "id");
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 68
        echo $this->getContext($context, "id");
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 73
        echo $this->getContext($context, "id");
        echo " = jQuery(\"#field_widget_";
        echo $this->getContext($context, "id");
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 77
        echo $this->getContext($context, "id");
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 158,  396 => 157,  394 => 156,  383 => 150,  366 => 142,  359 => 140,  348 => 136,  345 => 135,  325 => 125,  267 => 98,  237 => 85,  234 => 84,  232 => 83,  218 => 77,  170 => 61,  167 => 60,  155 => 55,  695 => 210,  692 => 209,  690 => 208,  684 => 205,  674 => 204,  669 => 202,  657 => 200,  654 => 199,  651 => 198,  643 => 193,  640 => 192,  623 => 190,  606 => 189,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  580 => 178,  573 => 176,  535 => 172,  530 => 171,  524 => 169,  518 => 167,  516 => 166,  498 => 157,  490 => 154,  486 => 134,  471 => 129,  468 => 128,  455 => 147,  450 => 145,  439 => 140,  434 => 138,  420 => 135,  418 => 128,  404 => 124,  389 => 118,  371 => 144,  358 => 106,  342 => 133,  339 => 100,  336 => 99,  329 => 126,  319 => 90,  297 => 84,  289 => 109,  286 => 80,  274 => 77,  263 => 71,  236 => 63,  233 => 62,  228 => 59,  191 => 69,  175 => 76,  146 => 34,  344 => 97,  338 => 94,  335 => 129,  321 => 124,  259 => 70,  215 => 54,  184 => 47,  161 => 70,  343 => 91,  332 => 97,  330 => 87,  327 => 86,  315 => 90,  313 => 82,  310 => 81,  304 => 79,  293 => 75,  277 => 78,  271 => 66,  265 => 64,  262 => 63,  260 => 94,  257 => 61,  216 => 25,  185 => 65,  180 => 104,  12 => 34,  568 => 179,  557 => 177,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 165,  504 => 160,  495 => 156,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 147,  369 => 136,  367 => 99,  347 => 102,  307 => 87,  302 => 78,  300 => 113,  296 => 76,  291 => 82,  288 => 85,  280 => 82,  275 => 77,  272 => 76,  249 => 89,  197 => 54,  192 => 23,  186 => 82,  174 => 60,  172 => 52,  148 => 53,  127 => 45,  114 => 46,  84 => 33,  160 => 52,  152 => 38,  77 => 27,  23 => 18,  76 => 57,  129 => 24,  97 => 41,  58 => 23,  20 => 11,  118 => 28,  797 => 266,  794 => 265,  789 => 260,  782 => 256,  776 => 253,  772 => 251,  770 => 250,  767 => 249,  761 => 247,  759 => 246,  756 => 245,  750 => 243,  748 => 242,  745 => 241,  739 => 239,  737 => 238,  734 => 237,  728 => 235,  726 => 234,  723 => 233,  720 => 232,  716 => 187,  710 => 186,  701 => 213,  696 => 182,  691 => 181,  688 => 180,  683 => 179,  680 => 178,  676 => 168,  667 => 164,  661 => 162,  658 => 161,  655 => 160,  649 => 157,  645 => 156,  642 => 155,  636 => 154,  631 => 151,  625 => 150,  617 => 148,  614 => 147,  610 => 146,  605 => 144,  602 => 143,  600 => 142,  597 => 141,  594 => 140,  587 => 139,  584 => 180,  581 => 137,  578 => 177,  572 => 135,  569 => 134,  566 => 133,  563 => 131,  556 => 174,  553 => 176,  547 => 128,  544 => 127,  539 => 173,  536 => 125,  533 => 124,  527 => 170,  521 => 168,  519 => 160,  515 => 158,  512 => 157,  509 => 124,  507 => 159,  503 => 121,  500 => 158,  493 => 155,  487 => 115,  482 => 114,  479 => 113,  472 => 77,  466 => 76,  462 => 75,  459 => 74,  451 => 71,  446 => 122,  441 => 141,  433 => 65,  417 => 59,  405 => 56,  395 => 120,  391 => 50,  372 => 37,  370 => 100,  361 => 107,  357 => 139,  352 => 138,  349 => 103,  346 => 92,  340 => 95,  333 => 117,  331 => 265,  326 => 93,  324 => 92,  320 => 84,  317 => 230,  311 => 89,  308 => 118,  306 => 225,  301 => 222,  295 => 88,  292 => 87,  290 => 217,  287 => 72,  282 => 79,  276 => 102,  270 => 100,  256 => 208,  250 => 67,  245 => 88,  239 => 86,  231 => 199,  226 => 67,  223 => 58,  205 => 59,  202 => 73,  200 => 55,  194 => 87,  190 => 50,  188 => 68,  181 => 79,  178 => 45,  150 => 58,  137 => 58,  134 => 94,  90 => 34,  81 => 26,  70 => 29,  126 => 55,  113 => 48,  104 => 23,  53 => 24,  153 => 35,  124 => 23,  110 => 77,  100 => 42,  65 => 29,  34 => 26,  480 => 132,  474 => 130,  469 => 158,  461 => 149,  457 => 131,  453 => 146,  444 => 142,  440 => 148,  437 => 66,  435 => 146,  430 => 103,  427 => 62,  423 => 136,  413 => 134,  409 => 127,  407 => 95,  402 => 55,  398 => 121,  393 => 119,  387 => 152,  384 => 116,  381 => 120,  379 => 119,  374 => 114,  368 => 112,  365 => 34,  362 => 141,  360 => 109,  355 => 105,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 89,  309 => 97,  305 => 95,  298 => 91,  294 => 111,  285 => 84,  283 => 106,  278 => 86,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 198,  220 => 56,  214 => 75,  177 => 63,  169 => 73,  140 => 28,  132 => 57,  128 => 44,  107 => 24,  61 => 27,  273 => 101,  269 => 75,  254 => 91,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 82,  227 => 80,  224 => 71,  221 => 78,  219 => 76,  217 => 75,  208 => 74,  204 => 72,  179 => 72,  159 => 69,  143 => 29,  135 => 48,  119 => 42,  102 => 39,  71 => 29,  67 => 27,  63 => 50,  59 => 49,  28 => 14,  87 => 17,  201 => 57,  196 => 71,  183 => 82,  171 => 113,  166 => 57,  163 => 49,  158 => 37,  156 => 36,  151 => 45,  142 => 50,  138 => 54,  136 => 48,  121 => 52,  117 => 41,  105 => 46,  91 => 39,  62 => 28,  49 => 20,  38 => 17,  25 => 12,  93 => 68,  88 => 33,  78 => 30,  46 => 35,  44 => 19,  31 => 15,  26 => 20,  94 => 40,  89 => 39,  85 => 30,  75 => 28,  68 => 30,  56 => 81,  27 => 13,  21 => 12,  24 => 13,  19 => 11,  79 => 31,  72 => 56,  69 => 24,  47 => 19,  40 => 44,  37 => 54,  22 => 12,  246 => 54,  157 => 41,  145 => 43,  139 => 49,  131 => 25,  123 => 30,  120 => 46,  115 => 49,  111 => 40,  108 => 45,  101 => 73,  98 => 43,  96 => 44,  83 => 36,  74 => 33,  66 => 25,  55 => 22,  52 => 21,  50 => 20,  43 => 18,  41 => 18,  35 => 16,  32 => 12,  29 => 15,  209 => 24,  203 => 56,  199 => 53,  193 => 70,  189 => 71,  187 => 49,  182 => 64,  176 => 45,  173 => 62,  168 => 72,  164 => 71,  162 => 57,  154 => 66,  149 => 36,  147 => 46,  144 => 33,  141 => 48,  133 => 51,  130 => 46,  125 => 44,  122 => 45,  116 => 30,  112 => 26,  109 => 45,  106 => 40,  103 => 45,  99 => 38,  95 => 37,  92 => 19,  86 => 64,  82 => 10,  80 => 9,  73 => 29,  64 => 26,  60 => 25,  57 => 22,  54 => 153,  51 => 24,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 16,  30 => 15,);
    }
}

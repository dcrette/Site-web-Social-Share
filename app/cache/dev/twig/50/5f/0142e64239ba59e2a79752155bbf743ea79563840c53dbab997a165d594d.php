<?php

/* WebProfilerBundle:Profiler:admin.html.twig */
class __TwigTemplate_505f0142e64239ba59e2a79752155bbf743ea79563840c53dbab997a165d594d extends Twig_Template
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
        // line 1
        echo "<div class=\"search import clearfix\" id=\"adminBar\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle; height: 16px\" width=\"16\" height=\"16\" alt=\"Import\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAADo0lEQVR42u2XS0hUURjHD5njA1oYbXQ2MqCmIu2iEEISUREEEURxFB8ovt+DEsLgaxBRQQeUxnQ0ZRYSQasgiDaFqxAy2jUtCjdCoEjFwHj6/+F+dbvN6PQAN37wm++c7/z/35x7uPcOo7TW58rFBs59A7GGQ51XBAIBlZmZuYOhE1zm/A/4PxvY3NwMO53OYEJCgp+nccqXXQc94D54boAxalyLNayNtra2NJmbmzvOyMj4cRqoKYK4AsZzc3Nft7e3f5qZmTnCpk8Ix6xxjRpDGzmkUU5Ozuu2trZP09PTR+vr6ycbGxtaWFtbC9fU1AQTExPdmNNzLSUlZXt4ePhANNGghlp6lDWkkcvlOsCX6LNYXV0N8BTS0tK2cDJfWIsFaumhV0lIIxzXl5WVFX0aPp8vhDwJbMnJyc6JiYkji8YP7oI4YowfmDX00KskOHG73UfLy8vahB/cBXFSW1pa2kPOA7RdqqysfGtaCyOXA2VGgmvUiJ5e9lD8qKioeOv1ejVZXFwMI5eLEWOFWgh5Etg4J0lJSTdwYiHxLSwseFi3Yg5qRE8veyh+TE1Nhebn5zWZnZ31mE2okTxmM6WlpS7xeDyeQ2Qb61bMQQ214mMPVVxc7MJuNBkfHz9EtplNmEcET4JPfL29va+i6azR19f3UnzV1dUrqqqqyocT0KSzs/OV1YB6ROrr67fF19TU9DSazhp1dXXPxdfS0vJQNTY2+sfGxjSpra19YTWgHhHs/pn40OhRNJ0lLuON+kF8ra2tY9yAe3R0VBMc6wfr84n6b1BDrfiam5snImgczObAq7ylv7//q/hGRkbuqMHBwTt4Q2nS3d39jSKzCfXfoKarq+ur+NhD1owLcNrt9h3OTXGrqKgoKJ6hoaFD5DhuIA43xiGyJoWFhUGKxYXaL3CNGtH39PR8Zg9jzREfH+8vKCgI4krDRu0GcGVnZ78ZGBg4ER/Wf+4OVzOMRhrwFE6ysrLe0EQzaopII65RI3p478lVp6am7uDmPJY11F44HI7dsrKyfc5Nnj1km5Lo6Oiw4cdnD1kLJSUl++np6btsQjhmzayB5x29uGp3fn5+EPMw66eBX8b3yHZlDdyRdtzN75F1LED7kR6gMA7E6HsMrqpogbv5KngM9Bk8MbTKwAYmQSiCdhd4wW0VazQ0NNwEXrALNDHGS+A2UFHIA3smj/rX4JvrT7GBSRDi/J8Db8e/JY/5jLj4Y3KxgfPfwHc53iL+IQDMOgAAAABJRU5ErkJggg==\" />
        Admin
    </h3>

    <form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_import"), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        ";
        // line 8
        if ((!twig_test_empty($this->getContext($context, "token")))) {
            // line 9
            echo "            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_purge", array("token" => $this->getContext($context, "token"))), "html", null, true);
            echo "\">Purge</a>
            </div>
            <div style=\"margin-bottom: 10px\">
                &#187;&#160;<a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_profiler_export", array("token" => $this->getContext($context, "token"))), "html", null, true);
            echo "\">Export</a>
            </div>
        ";
        }
        // line 16
        echo "        &#187;&#160;<label for=\"file\">Import</label><br />
        <input type=\"file\" name=\"file\" id=\"file\" /><br />
        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">UPLOAD</span>
                </span>
            </span>
        </button>
        <div class=\"clear-fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  353 => 121,  344 => 119,  332 => 116,  321 => 112,  318 => 111,  315 => 110,  306 => 107,  300 => 105,  297 => 104,  291 => 102,  274 => 97,  263 => 95,  104 => 32,  400 => 180,  396 => 179,  388 => 177,  386 => 176,  378 => 170,  369 => 165,  348 => 153,  334 => 145,  293 => 118,  288 => 101,  276 => 113,  271 => 111,  262 => 104,  259 => 103,  248 => 96,  195 => 71,  150 => 55,  191 => 69,  178 => 66,  175 => 65,  172 => 62,  161 => 63,  134 => 47,  118 => 49,  113 => 38,  385 => 160,  382 => 159,  376 => 169,  367 => 156,  363 => 126,  359 => 153,  357 => 123,  354 => 151,  351 => 120,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  327 => 114,  324 => 113,  317 => 135,  311 => 131,  308 => 130,  303 => 106,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  251 => 97,  249 => 100,  244 => 97,  242 => 96,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  212 => 78,  206 => 77,  190 => 76,  185 => 74,  180 => 63,  174 => 65,  148 => 46,  70 => 24,  795 => 477,  792 => 476,  781 => 474,  777 => 473,  773 => 471,  760 => 470,  734 => 464,  731 => 463,  712 => 461,  695 => 460,  691 => 458,  687 => 457,  683 => 456,  679 => 455,  675 => 454,  671 => 453,  667 => 452,  664 => 451,  662 => 450,  645 => 449,  634 => 447,  619 => 441,  614 => 439,  610 => 438,  607 => 437,  605 => 436,  591 => 434,  586 => 431,  552 => 399,  534 => 396,  517 => 395,  514 => 394,  512 => 393,  507 => 391,  502 => 389,  202 => 77,  188 => 68,  170 => 84,  165 => 60,  153 => 56,  97 => 23,  127 => 60,  110 => 22,  90 => 37,  84 => 27,  76 => 27,  53 => 15,  34 => 5,  23 => 4,  100 => 39,  81 => 23,  58 => 18,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 183,  407 => 131,  402 => 130,  398 => 129,  393 => 178,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 157,  368 => 112,  365 => 111,  362 => 161,  360 => 109,  355 => 157,  341 => 118,  337 => 103,  322 => 138,  314 => 99,  312 => 109,  309 => 108,  305 => 125,  298 => 121,  294 => 90,  285 => 115,  283 => 100,  278 => 98,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 78,  241 => 77,  229 => 87,  220 => 70,  214 => 69,  177 => 64,  169 => 60,  140 => 58,  132 => 51,  128 => 49,  107 => 27,  61 => 23,  38 => 12,  273 => 112,  269 => 94,  254 => 92,  243 => 92,  240 => 92,  238 => 85,  235 => 85,  230 => 82,  227 => 81,  224 => 81,  221 => 85,  219 => 84,  217 => 75,  208 => 68,  204 => 76,  179 => 69,  159 => 53,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 13,  67 => 22,  63 => 21,  59 => 22,  94 => 34,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  87 => 32,  28 => 3,  93 => 38,  88 => 25,  78 => 18,  27 => 7,  46 => 34,  26 => 6,  44 => 11,  31 => 8,  196 => 92,  183 => 82,  171 => 58,  166 => 56,  163 => 82,  158 => 62,  156 => 62,  151 => 59,  142 => 59,  138 => 54,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 35,  62 => 24,  49 => 11,  24 => 3,  25 => 35,  21 => 2,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 11,  40 => 8,  37 => 6,  22 => 2,  246 => 136,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 20,  115 => 43,  111 => 47,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 31,  74 => 27,  66 => 25,  55 => 38,  52 => 12,  50 => 18,  43 => 9,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 79,  203 => 78,  199 => 73,  193 => 69,  189 => 71,  187 => 75,  182 => 87,  176 => 86,  173 => 85,  168 => 61,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 54,  144 => 49,  141 => 51,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 51,  103 => 25,  99 => 31,  95 => 34,  92 => 28,  86 => 28,  82 => 19,  80 => 29,  73 => 20,  64 => 21,  60 => 16,  57 => 39,  54 => 19,  51 => 37,  48 => 16,  45 => 10,  42 => 13,  39 => 10,  36 => 10,  33 => 9,  30 => 5,);
    }
}

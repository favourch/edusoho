<?php

/* TopxiaWebBundle:Default:footer-link.html.twig */
class __TwigTemplate_deb854bf565b9bb50685744a525652a94474bb976e3235af026443dd48270e26 extends Twig_Template
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
        echo "<div class=\"es-footer-link\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        echo $this->env->getExtension('topxia_block_twig')->showBlock("jianmo:bottom_info");
        echo "
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:footer-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}

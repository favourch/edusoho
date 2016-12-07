<?php

/* TopxiaAdminBundle:Default:user-coins-block.html.twig */
class __TwigTemplate_bc147863cd3bd76b57a279a5911b5cf6779a2a8db2e818ea0f4bff5e786ce751 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Default:user-coins-block.html.twig", 1);
        // line 2
        echo "<div class=\"col-md-12\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">

            <a class=\"pull-right\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("admin_coin_user_records");
        echo "\"
            >";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("更多"), "html", null, true);
        echo "</a>
            <h3 class=\"panel-title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户虚拟币记录"), "html", null, true);
        echo "</h3>
             
        </div>

      ";
        // line 12
        if ((isset($context["userIds"]) ? $context["userIds"] : null)) {
            // line 13
            echo "        <table class=\"table table-condensed table-bordered table-striped table-hover\">
          <thead>
            <tr>
              <th width=\"40%\">";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("用户名"), "html", null, true);
            echo "</th>
              <th width=\"10%\">";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("充值虚拟币"), "html", null, true);
            echo "</th>
              <th width=\"15%\">";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支出虚拟币"), "html", null, true);
            echo "</th>
              <th width=\"35%\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("当前余额"), "html", null, true);
            echo "</th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userIds"]) ? $context["userIds"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["userId"]) {
                // line 24
                echo "              <tr><td >";
                echo $context["admin_macro"]->getuser_link($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $context["userId"], array(), "array"), "link-muted");
                echo "</td><td style=\"color:#1bb974;\">";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getInCash($context["userId"], "all"), "0.00"), "html", null, true);
                echo "</td><td style=\"color:#ff7b0e;\">";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getOutCash($context["userId"], "all"), "0.00"), "html", null, true);
                echo "</td><td style=\"color:blue;\">";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getAccount($context["userId"]), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getAccount($context["userId"]), "cash", array()), 0)) : (0)), "html", null, true);
                echo "</td></tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "          </tbody>
        </table>
      ";
        } else {
            // line 29
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("暂无用户虚拟币记录"), "html", null, true);
            echo "</div>
      ";
        }
        // line 31
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:user-coins-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 31,  92 => 29,  87 => 26,  72 => 24,  68 => 23,  61 => 19,  57 => 18,  53 => 17,  49 => 16,  44 => 13,  42 => 12,  35 => 8,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}

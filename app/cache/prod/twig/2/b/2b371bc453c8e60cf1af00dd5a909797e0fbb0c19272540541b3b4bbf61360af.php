<?php

/* TopxiaAdminBundle:Teacher:tr.html.twig */
class __TwigTemplate_2b371bc453c8e60cf1af00dd5a909797e0fbb0c19272540541b3b4bbf61360af extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Teacher:tr.html.twig", 1);
        // line 2
        echo "<tr id=\"user-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">
  <td>
    <strong>";
        // line 4
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
        echo "</strong>
    ";
        // line 5
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "locked", array())) {
            // line 6
            echo "      <label class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("禁"), "html", null, true);
            echo "</label>
    ";
        }
        // line 8
        echo "  </td>
   ";
        // line 9
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:Teacher:tr.html.twig", 9)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "orgCode", array()))));
        // line 10
        echo "  <td>
    ";
        // line 11
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promoted", array())) {
            // line 12
            echo "      <span class=\"label label-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("荐:"), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promotedTime", array()), "Y-m-d"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("序号:"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "promotedSeq", array()), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 14
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("否"), "html", null, true);
            echo "</span>
    ";
        }
        // line 16
        echo "  </td>
  <td>
    <span class=\"text-sm\">";
        // line 18
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginTime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginTime", array()), "Y-n-d H:i:s"), "html", null, true);
        } else {
            echo "--";
        }
        echo "</span>
    <br>
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array()), "html", null, true);
        echo "</a>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
      ";
        // line 25
        $this->loadTemplate("PermissionBundle:Templates:group-button.html.twig", "TopxiaAdminBundle:Teacher:tr.html.twig", 25)->display(array_merge($context, array("parentCode" => "admin_teacher_manage", "group" => "groupButton", "user" => (isset($context["user"]) ? $context["user"] : null))));
        // line 26
        echo "    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Teacher:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 26,  91 => 25,  87 => 24,  78 => 20,  69 => 18,  65 => 16,  59 => 14,  49 => 12,  47 => 11,  44 => 10,  42 => 9,  39 => 8,  33 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}

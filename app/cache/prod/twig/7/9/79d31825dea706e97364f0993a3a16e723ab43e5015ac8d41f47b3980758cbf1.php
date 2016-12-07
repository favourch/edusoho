<?php

/* TopxiaWebBundle:Settings:security.html.twig */
class __TwigTemplate_79d31825dea706e97364f0993a3a16e723ab43e5015ac8d41f47b3980758cbf1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:security.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "security";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安全设置"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo " ";
        $this->loadTemplate("TopxiaWebBundle:Settings:security.html.twig", "TopxiaWebBundle:Settings:security.html.twig", 7, "1970900331")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  32 => 2,  28 => 1,  26 => 4,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:security.html.twig */
class __TwigTemplate_79d31825dea706e97364f0993a3a16e723ab43e5015ac8d41f47b3980758cbf1_1970900331 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:security.html.twig", 7);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_heading($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安全设置"), "html", null, true);
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"row safety-setting\" style=\"margin-top:10px;\">
        <div class=\"col-xs-2 tar\">
          <span class=\"glyphicon glyphicon-info-sign ";
        // line 14
        if (((isset($context["progressScore"]) ? $context["progressScore"] : null) > 67)) {
            echo "text-success";
        } elseif (((isset($context["progressScore"]) ? $context["progressScore"] : null) > 34)) {
            echo "text-warning";
        } else {
            echo "text-danger";
        }
        echo "\" style=\"font-size:20px;\"></span>
        </div>
      <div class=\"col-sm-6 col-xs-5\">
        <div class=\"progress mbs\">
          <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["progressScore"]) ? $context["progressScore"] : null), "html", null, true);
        echo "%;\"></div>
        </div>
      </div>
      <div class=\"col-sm-4 col-xs-5\">
        ";
        // line 22
        if (((isset($context["progressScore"]) ? $context["progressScore"] : null) > 67)) {
            // line 23
            echo "          <span class=\"text-success\" style=\"display:block;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安全等级：高"), "html", null, true);
            echo "</span>
        ";
        } elseif ((        // line 24
(isset($context["progressScore"]) ? $context["progressScore"] : null) > 34)) {
            // line 25
            echo "        <span class=\"text-warning\" style=\"display:block;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安全等级：中"), "html", null, true);
            echo "</span>
        ";
        } else {
            // line 27
            echo "          <span class=\"text-danger\" style=\"display:block;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安全等级：低"), "html", null, true);
            echo "</span>
        ";
        }
        // line 29
        echo "      </div>
    </div>

    <hr>

    <div class=\"row\">
      <div class=\"col-xs-2 tar
        ";
        // line 36
        if ((isset($context["hasLoginPassword"]) ? $context["hasLoginPassword"] : null)) {
            // line 37
            echo "          text-success
        ";
        } else {
            // line 39
            echo "          text-danger
        ";
        }
        // line 41
        echo "      \" style=\"font-size:20px\">
        ";
        // line 42
        if ((isset($context["hasLoginPassword"]) ? $context["hasLoginPassword"] : null)) {
            // line 43
            echo "          <span class=\"glyphicon glyphicon-ok\"></span>
        ";
        } else {
            // line 45
            echo "          <span class=\"glyphicon glyphicon-warning-sign\"></span>
        ";
        }
        // line 47
        echo "      </div>

      <span class=\"col-sm-3 col-xs-6\" style=\"margin-top: 5px;\" >";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录密码"), "html", null, true);
        echo "</span>

      <span class=\"col-sm-4 hidden-xs\" style=\"margin-top: 5px;\" >";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("登录网校时需要输入的密码"), "html", null, true);
        echo "</span>

      <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("settings_password");
        echo "\" class=\"col-xs-offset-1 btn btn-primary\" style=\"margin-top: -3px;\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("修改"), "html", null, true);
        echo "</a>
    </div>
    <hr>

    <div class=\"row\">
      <div class=\"col-xs-2 tar
        ";
        // line 59
        if ((isset($context["hasPayPassword"]) ? $context["hasPayPassword"] : null)) {
            // line 60
            echo "          text-success
        ";
        } else {
            // line 62
            echo "          text-danger
        ";
        }
        // line 64
        echo "      \" style=\"font-size:20px\">
        ";
        // line 65
        if ((isset($context["hasPayPassword"]) ? $context["hasPayPassword"] : null)) {
            // line 66
            echo "          <span class=\"glyphicon glyphicon-ok\"></span>
        ";
        } else {
            // line 68
            echo "          <span class=\"glyphicon glyphicon-warning-sign\"></span>
        ";
        }
        // line 70
        echo "      </div>

      <span class=\"col-sm-3 col-xs-6\" style=\"margin-top: 5px;\" >";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("支付密码"), "html", null, true);
        echo "</span>

      <span class=\"col-sm-4 hidden-xs\" style=\"margin-top: 5px;\" >";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("在网校进行消费行为时需要输入的密码"), "html", null, true);
        echo "</span>

      ";
        // line 76
        if ((isset($context["hasPayPassword"]) ? $context["hasPayPassword"] : null)) {
            // line 77
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("settings_reset_pay_password");
            echo "\" class=\"col-xs-offset-1 btn btn-primary\" style=\"margin-top: -3px;\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("重置"), "html", null, true);
            echo "</a>
      ";
        } else {
            // line 79
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("settings_pay_password");
            echo "\" class=\"col-xs-offset-1  btn btn-primary\" style=\"margin-top: -3px;\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置"), "html", null, true);
            echo "</a>
      ";
        }
        // line 81
        echo "
    </div>
    <hr>

    <div class=\"row\">
      <div class=\"col-xs-2 tar
        ";
        // line 87
        if ((isset($context["hasFindPayPasswordQuestion"]) ? $context["hasFindPayPasswordQuestion"] : null)) {
            // line 88
            echo "          text-success
        ";
        } else {
            // line 90
            echo "          text-danger
        ";
        }
        // line 91
        echo " \"
        style=\"font-size:20px\">

        ";
        // line 94
        if ((isset($context["hasFindPayPasswordQuestion"]) ? $context["hasFindPayPasswordQuestion"] : null)) {
            // line 95
            echo "          <span class=\"glyphicon glyphicon-ok\"></span>
        ";
        } else {
            // line 97
            echo "          <span class=\"glyphicon glyphicon-warning-sign\"></span>
        ";
        }
        // line 99
        echo "      </div>

      <span class=\"col-sm-3 col-xs-6\" style=\"margin-top: 5px;\" >";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("安全问题"), "html", null, true);
        echo "</span>

      <span class=\"col-sm-4 hidden-xs\" style=\"margin-top: 5px;\" >";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("通过设置并且验证安全问题，保护帐号密码安全。"), "html", null, true);
        echo "</span>

      <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("settings_security_questions");
        echo "\" class=\"col-xs-offset-1 btn btn-primary\" style=\"margin-top: -3px;\" >
      ";
        // line 106
        if ((isset($context["hasFindPayPasswordQuestion"]) ? $context["hasFindPayPasswordQuestion"] : null)) {
            // line 107
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("查看"), "html", null, true);
            echo "
      ";
        } else {
            // line 109
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("设置"), "html", null, true);
            echo "
      ";
        }
        // line 111
        echo "
      </a>
    </div>

    ";
        // line 115
        if (((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled"), "") == "1") && (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_bind"), "") == "on"))) {
            // line 116
            echo "      <hr>

      <div class=\"row\">
        <div class=\"col-xs-2 tar
          ";
            // line 120
            if ((isset($context["hasVerifiedMobile"]) ? $context["hasVerifiedMobile"] : null)) {
                // line 121
                echo "            text-success
          ";
            } else {
                // line 123
                echo "            text-danger
          ";
            }
            // line 124
            echo " \"
          style=\"font-size:20px\">

          ";
            // line 127
            if ((isset($context["hasVerifiedMobile"]) ? $context["hasVerifiedMobile"] : null)) {
                // line 128
                echo "            <span class=\"glyphicon glyphicon-ok\"></span>
          ";
            } else {
                // line 130
                echo "            <span class=\"glyphicon glyphicon-warning-sign\"></span>
          ";
            }
            // line 132
            echo "        </div>

        <span class=\"col-sm-3 col-xs-6\" style=\"margin-top: 5px;\" >";
            // line 134
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("手机绑定"), "html", null, true);
            echo "</span>

        <span class=\"col-sm-4 hidden-xs\" style=\"margin-top: 5px;\" >";
            // line 136
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("增加账户登录、购买课程时的安全性，同时还可以找回登录密码，支付密码。"), "html", null, true);
            echo "</span>

        <a href=\"";
            // line 138
            echo $this->env->getExtension('routing')->getPath("settings_bind_mobile");
            echo "\" class=\"col-xs-offset-1 btn btn-primary\" style=\"margin-top: -3px;\" >
        ";
            // line 139
            if ((isset($context["hasVerifiedMobile"]) ? $context["hasVerifiedMobile"] : null)) {
                // line 140
                echo "          ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("修改"), "html", null, true);
                echo "
        ";
            } else {
                // line 142
                echo "          ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("绑定"), "html", null, true);
                echo "
        ";
            }
            // line 144
            echo "        </a>
      </div>
    ";
        }
        // line 147
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:security.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  400 => 147,  395 => 144,  389 => 142,  383 => 140,  381 => 139,  377 => 138,  372 => 136,  367 => 134,  363 => 132,  359 => 130,  355 => 128,  353 => 127,  348 => 124,  344 => 123,  340 => 121,  338 => 120,  332 => 116,  330 => 115,  324 => 111,  318 => 109,  312 => 107,  310 => 106,  306 => 105,  301 => 103,  296 => 101,  292 => 99,  288 => 97,  284 => 95,  282 => 94,  277 => 91,  273 => 90,  269 => 88,  267 => 87,  259 => 81,  251 => 79,  243 => 77,  241 => 76,  236 => 74,  231 => 72,  227 => 70,  223 => 68,  219 => 66,  217 => 65,  214 => 64,  210 => 62,  206 => 60,  204 => 59,  193 => 53,  188 => 51,  183 => 49,  179 => 47,  175 => 45,  171 => 43,  169 => 42,  166 => 41,  162 => 39,  158 => 37,  156 => 36,  147 => 29,  141 => 27,  135 => 25,  133 => 24,  128 => 23,  126 => 22,  119 => 18,  106 => 14,  98 => 10,  95 => 9,  89 => 8,  43 => 7,  40 => 6,  32 => 2,  28 => 1,  26 => 4,  11 => 1,);
    }
}

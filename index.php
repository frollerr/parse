<?php
defined('_JEXEC') or die;
JHtml::_('behavior.framework', true);
$app = JFactory::getApplication();
?>
<?php echo '<?'; ?>xml version="1.0" encoding="<?php echo $this->_charset ?>"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
<head>
<jdoc:include type="head" />
<!--<script language="JavaScript" src="<?php //echo $this->baseurl ?>/templates/<?php //echo $this->template ?>/js/script.js" type="text/javascript"></script>-->
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />

<!--[if lt IE 8]> 
	<meta http-equiv="refresh" content="1;URL=<?php echo $this->baseurl ?>/ie/ie.html" />
<![endif]--> 

</head>
<body>
   <?php if($this->countModules('user3')) : ?>
      <div id="user3">
         <jdoc:include type="modules" name="user3" style="xhtml" />
      </div> 
   <?php endif; ?>
   <div id="bg_top">
      <div id="t_1"></div>
      <div id="t_2">
         <div id="t_l">
            <div id="t_l_t"></div>
            <div id="t_l_c"></div>
         </div>
         <div id="t_c">
            <div id="t_c_t"></div>
            <div id="t_c_c"></div>
         </div>
         <div id="t_r">
            <div id="t_r_t"></div>
            <div id="t_r_c"></div>
         </div>
         <div class="clear"></div>
      </div>
   </div>
   <div id="c_content">
   <div id="absl"></div>
      <div id="marg"></div>
      <div id="cont_center_block">
         <div id="left_content_block">
            <div id="logo">
               <a id="link_logo" href="http://avatarax.ru"></a>
               <div id="logo_text">  
                  <?php echo $app->getCfg('sitename'); ?>
               </div>
            </div>  
            <div id="menu">
               <?php if($this->countModules('mainmenu')) : ?>
                  <div id="mainmenu">
                     <jdoc:include type="modules" name="mainmenu" style="xhtml" />
                  </div>
               <?php endif; ?>
            </div>
            <div id="des"></div>
         </div>
         <div id="right_content_block">
            <div id="content_block_top"></div> 
            <div id="content_block_center">
               <div class="b_search">
                  <div class="rez"></div>
                     <?php if($this->countModules('user1')) : ?>
                        <div id="user1">
                           <div class="bg_100"></div>
                           <div class="bg_101"></div>
                           <jdoc:include type="modules" name="user1" style="xhtml" /> 
                        </div> 
                     <?php endif; ?> 
                     <div class="clear"></div>
                 </div>
                    <?php if($this->countModules('slider')) : ?>
                       <div class="block_slider">
                          <div id="slider">
                             <jdoc:include type="modules" name="slider" style="xhtml" />
                          </div>
                       </div>
                    <?php endif; ?>  
                   
                 
                 
                 <div id="content<?php echo $contentwidth; ?>">
                    <jdoc:include type="message" /> 
                    <jdoc:include type="component" style="xhtml" />
                 </div>
            
               
               
               
               
               
               
               
               <div class="b_bottom"></div> 
               <div class="decor"></div>    
            </div> 
            <div id="content_block_bottom"></div>
         </div>
         <div class="clear"></div>
      </div>
      <div id="left_center_block">
         <div id="abs_top_left"></div>
         <div id="abs_bottom_left"></div>
      </div>
      <div id="right_center_block">
         <div id="abs_top_right"></div>
         <div id="abs_bottom_right"></div>
      </div> 
      <div class="clear"></div>    
   </div>
   <div id="bg_bottom">
      <div id="b_1">
         <div id="b_l">
            <div id="b_l_c"></div>
            <div id="b_l_b"></div>
         </div>
         <div id="b_c">
            <div id="b_c_c">
               <div id="copiright">
                  <div class="sch_css">
                     <p>
                        <a href="http://jigsaw.w3.org/css-validator/check/referer">
                           <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Правильный CSS!" />
                        </a>
                     </p>
                  </div>
                  <div class="sch_xhtml">
                     <p>
                        <a href="http://validator.w3.org/check?uri=referer">
                           <img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10-blue" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
                        </a>
                     </p>
                  </div>
                  <a class="copiright" href="mailto:frollerr@yandex.ru">Copiright &copy; 2013 www.avatarax.ru</a> | <a class="copiright" href="">Design by </a>
               </div>
            </div>
            <div id="b_c_b"></div>
         </div>
         <div id="b_r">
            <div id="b_r_c"></div>
            <div id="b_r_b"></div>
         </div>
         <div class="clear"></div>
      </div>
      <div id="b_2"></div>
   </div>
<!--конец блока page-->
</body>
</html>
<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Jason Zhao--Resume</title>
        <meta name="description" content="">
		<meta name=”keyword” content=”jasonzhao，赵世林简历，jasonresume，赵世林的简历“>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="__PUBLIC__/Css/bootstrap.min.css">
        <link rel="stylesheet" href="__PUBLIC__/Css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="__PUBLIC__/Css/templatemo-style.css">

        <script src="__PUBLIC__/Js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="nav">
          <div class="burger">
            <div class="burger__patty"></div>
          </div>

          <ul class="nav__list">
            <li class="nav__item">
              <a href="#1" class="nav__link c-blue"><img src="__PUBLIC__/Images/home-icon.png" alt=""></a>
            </li>
            <li class="nav__item">
              <a href="#2" class="nav__link c-yellow scrolly"><img src="__PUBLIC__/Images/about-icon.png" alt=""></a>
            </li>
            <li class="nav__item">
              <a href="#3" class="nav__link c-red"><img src="__PUBLIC__/Images/projects-icon.png" alt=""></a>
            </li>
            <li class="nav__item">
              <a href="#4" class="nav__link c-green"><img src="__PUBLIC__/Images/contact-icon.png" alt=""></a>
            </li>
          </ul>
        </nav>

        <section class="panel b-blue" id="1">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
			  <?php if(is_array($data)): foreach($data as $key=>$vo): ?><div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="home-content">
                      <div class="home-heading">
                        <h1><em><?php echo ($vo["LogoTitle"]); ?></em><?php echo ($vo["Introduce"]); ?></h1>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="home-box-content">
                            <div class="left-text">
                              <h4><?php echo ($vo["Small_title1"]); ?> <em><?php echo ($vo["Small_title2_red"]); ?></em> <?php echo ($vo["Small_title3"]); ?></h4>
                              <p><?php echo ($vo["Skill"]); ?></p>
                              <div class="primary-button">
                                <a href="#2">Discover More</a>
                              </div>
                            </div>
                            <div class="right-image">
                              <img src="__PUBLIC__/Images/right-home-image.png" alt="">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><?php endforeach; endif; ?>
              </div>
            </div>
          </article>
        </section>
        <div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
        <section class="panel b-yellow" id="2">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="about-content">
                      <div class="heading">
                        <h4>About me</h4>
                      </div>
					  <?php if(is_array($data1)): foreach($data1 as $key=>$vo): ?><div class="row">
                        <div class="col-md-12">
                          <div class="about-box-content">
                            <img src="__PUBLIC__/Images/about-image.png" alt="">
                          </div>
                        </div>
                        <div class="col-md-7 col-md-offset-5">
                          <div class="about-box-text">
                            <h4><?php echo ($vo["title"]); ?></h4>
                            <p><?php echo ($vo["content"]); ?></p>
                            <div class="primary-button">
                              <a href="#3">Discover More</a>
                            </div>
                          </div>
                        </div>
                      </div><?php endforeach; endif; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </section>
        <section class="panel b-red" id="3">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="projects-content">
                      <div class="heading">
                        <h4>Recent Projects</h4>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="owl-carousel owl-theme projects-container">
						  	<?php if(is_array($data2)): foreach($data2 as $key=>$vo): ?><div>
                              <div class="project-item">
                                <a href="__PUBLIC__/Uploads/<?php echo ($vo["filename"]); ?>" data-lightbox="image-1"><img src="__PUBLIC__/Uploads/<?php echo ($vo["filename"]); ?>" alt="<?php echo ($vo["name"]); ?>"></a>
                                <div class="text-content">
                                  <h4><?php echo ($vo["name"]); ?></h4>
                                  <p><?php echo ($vo["content"]); ?></p>
                                  <div class="primary-button">
                                    <a href="<?php echo ($vo["links"]); ?>">Discover More</a>
                                  </div>
                                </div>
                              </div>
                            </div><?php endforeach; endif; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </section>
        <section class="panel b-green" id="4">
          <article class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="contact-content">
                      <div class="heading">
                        <h4>Contact me</h4>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="contat-form">
                            <form id="contact" action="__URL__/do_message" method='post' >
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                              </fieldset>
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Email" required="">
                              </fieldset>
                              <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required=""></textarea>
                              </fieldset>
                              <fieldset>
                                <button type="submit" id="form-submit" class="btn">Send Message</button>
                              </fieldset>
                            </form>
                          </div>
                        </div>
						<?php if(is_array($data3)): foreach($data3 as $key=>$vo): ?><div class="col-md-4">
                          <div class="more-info">
                            <p><?php echo ($vo["content"]); ?><a href="<?php echo ($vo["link"]); ?>"><span style="color:#26303c;"><?php echo ($vo["blog_title"]); ?></span></a><br><br>
                            <em>email:<?php echo ($vo["email"]); ?>
								<br><?php echo ($vo["address"]); ?></em>
							</p>
                          </div>
                        </div><?php endforeach; endif; ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="footer">
                      <p>Copyright &copy; 2017 Jason's Resume
                      | 陇ICP备17005793号</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </section>
      

        <script src="__PUBLIC__/Js/vendor/jquery-1.11.2.min.js"></script>
        <script>window.jQuery || document.write('<script src="__PUBLIC__/Js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="__PUBLIC__/Js/vendor/bootstrap.min.js"></script>

        <script src="__PUBLIC__/Js/plugins.js"></script>
        <script src="__PUBLIC__/Js/main.js"></script>

    </body>
</html>
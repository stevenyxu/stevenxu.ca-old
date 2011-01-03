<?

$portfolio = array(
									
	'web_applications' => array(
		'Email2Mobile' => array('images' => array(
			'email2mobile-1.gif' => '',
			'email2mobile-2.gif' => '',
			'email2mobile-3.gif' => '',
			'email2mobile-4.gif' => ''), 'description' => 'Email2Mobile is a Web 2.0 service that allows businesses and individuals to build email newsletters optimized for mobile browsers using an intuitive what you see is what you get WYSIWYG system. I was responsible for the design, coding, maintenance, and server and ongoing administration of this implementation.'),
		'fadoo' => array('images' => array(
			'fadoo-1.jpg' => '',
			'fadoo-2.gif' => '',
			'fadoo-3.gif' => '',
			'fadoo-4.gif' => ''), 'description' => 'Fadoo was a project designed to be the online home of Canadian sports personality Bob McCown. It featured a built-from-scratch fully-powered content management system that was continually improved and amended to meet the client\'s evolving needs including automated email newsletter generation, blogs and news, user management, RSS feeds, podcasts, syndication, games, and a shop. It also had a fully-powered customized media player to play archived shows.'),
		'sportswagers' => array('images' => array(
			'sportswagers-1.gif' => '',
			'sportswagers-2.gif' => '',
			'sportswagers-3.gif' => ''), 'description' => 'Sportswagers.ca is a sports betting advice site, offering daily columns on all major sports. We worked within their inherited content management system to introduce a new cleaner skin, and we performed a security and stability review on the site\'s backend.'),/*
		'medtronic' => array('images' => array(
			'medtronic-1.gif' => '')),*/
		'FanExpo_Canada' => array('images' => array(
			'fanexpo-1.jpg' => '',
			'fanexpo-2.gif' => '',
			'fanexpo-3.gif' => '',
			'fanexpo-4.jpg' => ''), 'description' => 'FanExpo Canada is another fully customized, built from scratch content management system to provide publicity and provide information about the FanExpo Canada conference. My work was comprised of taking a design document and interpolating the client\'s requirements to create a robust web application.')/*,
		'TMM' => array('images' => array(
			'tmm-1.gif' => ''))*/), 
	'corporate_sites' => array(
		'Web2Mobile' => array('images' => array(
			'web2mobile-1.gif' => '',
			'web2mobile-2.gif' => ''), 'description' => 'Web2Mobile is the parent company of Email2Mobile, and the purpose of this website was to showcase the other sorts of solutions offered by the company. It was built around a WordPress installation so that the client could also add and manage blog posts, comments, and static content dynamically. My work also included an original design.'),
		'face' => array('images' => array(
			'face-1.jpg' => '',
			'face-2.gif' => '',
			'face-3.gif' => ''), 'description' => 'Face Wireless is a new initiative to bring free Wi-Fi access to millions of people at their favourite hotspots. This website, adapted from a design document that the client provided, showcases the services and methodology of the company. It also has dynamic forms and sections for deep interaction in the future.'),/*
		'welcome_weekend' => array('images' => array(
			'welcomeweekend-1.gif' => '',
			'welcomeweekend-2.jpg' => ''))*/),
	'showcase_sites' => array(
		'ministry_of' => array('images' => array(
			'ministry_of-1.jpg' => '',
			'ministry_of-2.gif' => '',
			'ministry_of-3.gif' => ''), 'description' => 'The Ministry of Communication is the portfolio site for a graphic designer and includes dynamic management and delivery of portfolio images and videos. It is supplemented by a number of Javascript and AJAX techniques to improve the browsing experience, such as overlay video.'),
		'cimaron' => array('images' => array(
			'cimaron-1.gif' => '',
			'cimaron-2.gif' => '',
			'cimaron-3.gif' => ''), 'description' => 'The Cimaron Group is a creative Canadian firm that offers a wide variety of technological solutions. The website showcases some of the firm\'s web and video productions.'),/*
		'a_northern_soul' => array('images' => array(
			'anorthernsoul-1.jpg' => '')),*/
		/*'CMA' => array('images' => array(
			'cma-1.gif' => ''))*/)

);



?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link type="text/css" rel="stylesheet" href="css/nivo-slider.css" />
<link type="text/css" rel="stylesheet" href="css/custom-nivo-slider.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="js/jquery.localscroll.js"></script>
<link rel="openid.server" href="http://www.myopenid.com/server" />
<link rel="openid.delegate" href="http://stevenxu.myopenid.com/" />
<title>Steven Xu</title>
</head>
<body>
<div id="gradient">&nbsp;</div>
<div id="header">
  <h1>Steven Xu</h1>
  <h2>Awesome web development</h2>
  <ul id="nav">
    <li><a href="#about">About</a></li>
    <li> <a href="#portfolio">Portfolio</a>
      <ul>
        <? foreach($portfolio as $name => $section) : ?>
        <li> <a href="#<?=$name?>" rel="<?=$name;?>" class="nav_section_header">
          <?=ucwords(str_replace('_', ' ', $name))?>
          </a>
          <ul id="nav_<?=$name?>">
            <? foreach($section as $name => $item) : ?>
            <li> <a href="#<?=$name?>">
              <?=ucwords(str_replace('_', ' ', $name))?>
              </a> </li>
            <? endforeach; ?>
          </ul>
        </li>
        <? endforeach; ?>
      </ul>
    </li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</div>
<ul id="content">
  <li id="about">
    <h3><a name="about">About</a></h3>
    <div>
      <p>Hello. My name is Steven. I'm a solo web developer based in Ontario, Canada, specializing in fast-paced, customized, client-focused website solutions. I love working directly with my customers, and I believe this direct line of communication is extremely valuable in keeping costs and development time down. If you're working with me, the person you talk to on the phone is often the same person who is programming your website.</p>
      <p>My work experience includes corporate websites, dynamic web applications, and personal and small business showcases. I work with PHP and Ruby on Rails for server-side processing, and I have experience working with a variety of Linux-based servers on a variety of hosting providers and service styles. My front-end work consists of XHTML, CSS, and Javascript including jQuery, and I have experience with highly dynamic content-delivery systems including deep-linking with advanced AJAX techniques.</p>
      <p>Whether it's monkey-patching a broken site, coding and bringing to life an existing design, or building an entire web application from scratch, I'm interested in hearing about your next project. Check out my selected portfolio below and feel free to send me an email to the address at the bottom of this page.</p>
    </div>
  </li>
  <li id="portfolio">
    <h3><a name="portfolio">Portfolio</a></h3>
    <ul id="portfolio_items">
      <? foreach($portfolio as $name => $section) : ?>
      <li>
        <h4><a name="<?=$name?>">
          <?=ucwords(str_replace('_', ' ', $name))?>
          </a></h4>
        <ul>
          <? foreach($section as $name => $item) : ?>
          <li>
            <div class="project">
              <div class="description">
                <h5><a name="<?=$name?>">
                  <?=ucwords(str_replace('_', ' ', $name))?>
                  </a></h5>
                <? if(array_key_exists('description', $item)) : ?>
                <p>
                  <?=$item['description'];?>
                </p>
                <? else : ?>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec velit risus. Ut porttitor mattis iaculis. Proin ornare metus sit amet tortor venenatis congue. Aenean iaculis cursus hendrerit. Ut sollicitudin, urna et commodo pharetra, nulla velit placerat elit, vel semper turpis nisl in mi. Phasellus sit amet suscipit massa. Morbi in velit lectus. Curabitur a magna at lectus mollis fermentum. Integer euismod porttitor lobortis. Vestibulum sit amet magna augue. Praesent imperdiet hendrerit mollis.</p>
                <? endif; ?>
              </div>
              <div class="slider_container">
                <div class="slider">
                  <? if(array_key_exists('images', $item)) : ?>
                  <? foreach($item['images'] as $url => $caption) : ?>
                  <img src="portfolio/<?=$url?>" alt="<?=$caption;?>" />
                  <? endforeach; ?>
                  <? else: ?>
                  <img src="portfolio/sportswagers-1.gif" />
                  <? endif; ?>
                </div>
              </div>
              <div class="clearer">&nbsp;</div>
            </div>
          </li>
          <? endforeach; ?>
        </ul>
      </li>
      <? endforeach; ?>
    </ul>
  </li>
  <li id="contact">
    <h3><a name="contact">Contact</a></h3>
    <p><img src="images/email.png" /></p>
  </li>
</ul>
<script>
$(window).load(function() {
	$('.slider').nivoSlider({manualAdvance: true});
	$('#nav').localScroll();
	$('.nav_section_header').click(function(){
		var rel = $(this).attr('rel');
		$('.nav_section_header').each(function(){
			var other_rel = $(this).attr('rel')
			if(rel != other_rel) {
				$('ul#nav_' + other_rel).stop().slideUp(200);
			}
		});
		$('ul#nav_' + rel).stop().slideDown(200);
	});
});
</script>
</body>
</html>

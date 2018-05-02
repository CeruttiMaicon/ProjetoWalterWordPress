<!DOCTYPE html>
<html>
<head>
		<link type="text/css" rel="stylesheet" href="style.css" />
  <?php
      $dir = get_template_directory_uri() . '/wallpaper-php.jpg';
  ?>
  <style>

  body {
  font-family: 'Hind', sans-serif;
  background: #edeff0;
  background-image: url(<?php echo $dir ?>);
}

      div::before {
	    content: " WordPress- by Maicon Cerutti ";
	    font: 10pt Arial;
	    font-weight: bold;
	    color: white;
	    background-color: #006400 ;
	    padding: 5px;
	    display: block;
	    position: relative;
	    top: -10px;
	    left: -10px;
	    width: 560px;
	}

	div {
	    background-color: rgba(255,255,255,.8);
	    margin: 100px auto 100px auto;
	    padding: 10px;
	    width: 550px;
	    min-height:300px;
	}

	h4 {
		 font-family: 'FonteLogo', sans-serif;
	    font-size: 15pt;
	    color: #606060;
	    margin-bottom: 0px;
	    margin-top: 0px;
	}

	h3 {
		 font-family: 'FonteLogo', sans-serif;
	    font-size: 10pt;
	    color: ##0000FF;
	    margin-bottom: 0px;
	    margin-top: 0px;
	}

	span {
		font-size: 10pt;
		color: #000;

	}

	p {
		text-align: justify;
    	text-indent: 50px;
	}

	#menu ul {
	    padding:0px;
	    margin:0px;
	    background-color:#EDEDED;
	    list-style:none;
		}
		
	#menu ul li a {
	    padding: 2px 10px;
	    display: inline-block;

    /* visual do link */
	    background-color:#EDEDED;
	    color: #333;
	    text-decoration: none;
	    border-bottom:3px solid #EDEDED;
	}
	#menu ul li a:hover {
	    background-color:#D6D6D6;
	    color: #6D6D6D;
	    border-bottom:3px solid #EA0000;
	}
	* {
  box-sizing: border-box;
	}

	footer#rodape{
    clear: both;
    border-top: 1px solid #606060;
    background-color: #006400 ;

	}

	footer#rodape p {
    text-align: center;
	}



/* Start Navigation Bar */

.navbar {
  max-width: 820px;
  margin: 0 auto;
  color: #fff;
  border-radius: 4px;
  background-color: #25283d;
}

.navbar .menu {
  position: relative;
  display: flex;
}

.navbar .menu li {
  display: flex;
  transition: background-color .5s ease;
  text-align: center;
  flex: 1;
}

.navbar .menu a {
  position: relative;
  display: inline-flex;
  padding: 20px;
  text-decoration: none;
  color: #fff;
  flex: 1;
  justify-content: center;
}

.navbar .menu a > .fa {
  font-weight: bold;
  margin-left: 8px;
}

.navbar .menu li:hover {
  background-color: #8f3985;
}

.navbar .menu li:hover .container {
  display: flex;
}

a.hasDropdown:after {
  position: absolute;
  z-index: 2;
  bottom: -16px;
  left: 50%;
  width: 0;
  height: 0;
  transform: translateX(-50%);
  border: 8px solid transparent;
  border-top-color: #25283d;
}

li:hover a.hasDropdown:after {
  content: '';
  border-top-color: #8f3985;
}

/* End Navigation Bar */

/* Start Single Section Menu */

.container {
  position: absolute;
  z-index: 1;
  top: 56px;
  right: 0;
  left: 0;
  display: none;
  margin-bottom: 30px;
  text-align: left;
  background-color: #fff;
  box-shadow: 0 2px 0 rgba(0, 0, 0, .06);
}

.container__list {
  display: flex;
  min-width: 0;
  padding: 20px;
  flex: 1;
  flex-wrap: wrap;
}

.container__listItem {
  overflow: hidden;
  padding: 10px 30px;
  white-space: nowrap;
  text-overflow: ellipsis;
  flex: 0 0 25%;
}

.container__listItem > div {
  overflow: hidden;
  cursor: pointer;
  white-space: nowrap;
  text-decoration: underline;
  text-overflow: ellipsis;
  color: #db6356;
}

/* End Single Section Menu */

/* Start Multiple Section Menu */

.container.has-multi .container__listItem {
  flex-basis: 100%;
}

.container.has-multi .container__list {
  border-radius: 4px;
  flex-basis: 33.333%;
}

.container.has-multi .container__list:not(:last-child) {
  margin-right: 20px;
  border-right: solid 1px #f3f3f3;
}

/* End Multiple Section Menu */

/* Start Responsive Menu */

.mobile-menu {
  display: none;
}

@media only screen and (max-width: 768px) {
  .mobile-menu {
    display: block;
    margin: 20px;
  }
  .mobile-menu > i {
    cursor: pointer;
  }
  .navbar {
    position: absolute;
    transition: top .3s ease-in;
    top: -100%;
    border-radius: 0;
    will-change: top;
  }
  .navbar--is-visible {
    top: 88px;
  }
  .navbar .menu {
    flex-direction: column;
  }
  .navbar .menu li {
    position: relative;
    flex-direction: column;
    transition: initial;
  }
  .navbar .menu li:hover {
    background-color: initial;
  }
  .navbar .menu li.is-selected {
    position: relative;
    background-color: #8f3985;
  }
  .container {
    position: static;
    display: flex;
    overflow: hidden;
    max-height: 0;
    margin-bottom: 0;
    transition: all .3s ease;
  }

  a.hasDropdown:after {
    display: none;
  }
  .container--is-visible {
    max-height: 1000px !important;
  }
  .container__list .container__listItem:nth-child(n + 11) {
    display: none;
  }
  .container.has-multi .container__list-multi:not(:first-child) {
    display: none;
  }
  .menu .container.has-multi .container__list {
    margin-right: 0;
    border-right: 0;
  }
  .navbar .menu li .container__listItem {
    flex-basis: 100%;
  }
}

/* End Responsive Menu */

  </style>
</head>
<body>
        <!-- Inicio Navegação Menu -->
    <nav class="navbar js-navbar">
        <ul class="menu">
            <li>
                <a href="index.php">Home </a>
            </li>
            <li>
                <a href="champions.php">Champions</a>
            </li>
            <li>
                <a href="runes.php">Runes</a>
            </li>
            <li>
                <a href="elos.php">Elos</a>
            </li>
        </ul>
    </nav>
    <!-- Fim Naveção Menu -->
	<table>
	

	<?php
		comment_form();
	?>
	
	</table>

	<?php 
		
		while ( have_posts() ): 
			the_post(); 
	?>
			<div>
				<li>
					<ul>
						<h4> 
							<?php  the_title(); ?>
						</h4>
					</ul>
					<ul>
						<h3> 
							<?php  the_content(); ?>
						</h3>
					</ul>
					<span> 
						<?php  the_time("d/m/Y"); ?>
					</span>
				</li>
			</div>
	<?php 
			endwhile;
	?>
</body>
    <footer id="rodape">
        <p>Copyright &copy; 2013 - by Gustavo Guanabara <br/>
            <a href="https://github.com/CeruttiMaicon" target="_blank">Git Hub</a> | <a href="https://www.facebook.com/maicon.cerutti.3" target="_blank">Facebook</a></p>
    </footer>
</html>






<?php
/**
 * Template Name: Portfolio Template
 */

get_header();
?>

<body class="body">
<div class="banner">
    
    
    
    <h4 class="banner-title">Hi. I'm Jake Hackett, frontend web developer.</h4>

</div>
    <section id="about-me">
    <h2 class="about-me-title">About Me</h2>
        <div class="aboutme">
        <div class="about-me-photo">
        <img class="photo-aboutme" src="<?php echo get_template_directory_uri(); ?>\Assets\Portfolio-image.jpg" alt=''/>
        </div>
        <div class="about-me-info">
            <!-- Add content for about me section -->
            <p> Bonjour à tous ! Je suis Jake Hackett, un développeur web autodidacte avec une passion pour la création d'expériences numériques engageantes. Assoiffé de connaissances et déterminé à faire de ma passion une carrière
                et déterminé à faire de ma passion une carrière, j'ai affiné mes compétences en JavaScript, PHP, HTML, CSS, jQuery, etc. au cours d'une longue période d'études autodidactes et d'applications pratiques.
                 en JavaScript, PHP, HTML, CSS, jQuery et WordPress, entre autres. En outre, j'ai suivi un programme d'études complet par l'intermédiaire d'OpenClassrooms 
                 en France, ce qui m'a permis d'accroître mes compétences et de m'acclimater à l'environnement professionnel typique du développement frontal. Ce programme m'a permis d'acquérir 
                 Ce programme m'a permis d'acquérir une expérience inestimable en matière de respect des délais, de présentations à l'issue des projets et de travail en collaboration.
        </div>
        
    </div>
    </div>
    </section>

<?php get_template_part('template-parts/portfolio-section')?>


<section id="skills">
    <h2 class="skills-title">Compétences</h2>
        <div class="skills-info">
           
            <div class="php-box">
                <img class="php-icon" src="<?php echo get_template_directory_uri(); ?>\Assets\php.png" alt='PHP Icon'/>
                <div class="php-info "></div>
            </div>

            <div class="js-box">
                <img class="js-icon" src="<?php echo get_template_directory_uri(); ?>\Assets\js-format.png" alt='PHP Icon'/>

            </div>

            <div class="html-box">
                <img class="html-icon" src="<?php echo get_template_directory_uri(); ?>\Assets\html.png" alt='PHP Icon'/>

            </div>

            <div class="wordpress-box">
                <img class="wordpress-icon" src="<?php echo get_template_directory_uri(); ?>\Assets\wordpress-icon.png" alt='PHP Icon'/>

            </div>
            
            <div class="css-box">
                <img class="css-icon" src="<?php echo get_template_directory_uri(); ?>\Assets\css-file.png" alt='PHP Icon'/>

            </div>
            <div class="jquery-box">
                <img class="css-icon" src="<?php echo get_template_directory_uri(); ?>\Assets\jquery.png" alt='PHP Icon'/>

            </div>
        </div>
        <div class="skills-text"> 
        <span>En combinant ces compétences, j'ai la capacité de créer des sites WordPress diversifiés, allant des simples blogs aux applications Web complexes, tout en veillant à ce qu'ils soient visuellement attrayants, fonctionnels et conviviaux. Ma capacité à exploiter ces technologies de plusieurs manières démontre mon adaptabilité et mes compétences en développement Web.<br><br> J'espère continuer à apprendre et à ajouter des compétences à mon répertoire.</span>
</div>
</section>

</body>

<?php get_footer(); ?>
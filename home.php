<?php
/**
 * Template Name: Portfolio Template
 */

get_header();
?>

<body class="body">
<div class="banner">
    
    <!-- <img class="header-image" src="<?php echo get_template_directory_uri(); ?>/assets/Header1.JPG" alt='NZ mountains'/> -->
    
    <h4 class="banner-title">Hi there. I'm Jake Hackett, frontend web developer.</h4>

</div>
    <section id="about-me">
    <h2 class="about-me-title">About Me</h2>
        <div class="aboutme">
        <div class="about-me-photo">
        <img class="photo-aboutme" src="<?php echo get_template_directory_uri(); ?>\Assets\Portfolio-image.jpg" alt=''/>
        </div>
        <div class="about-me-info">
            <!-- Add content for about me section -->
            <p> Hey there! I'm Jake Hackett, a self-taught front-end web developer with a passion for crafting engaging digital experiences. With a thirst for knowledge and
                a determination to turn my passion into a career, Over an extensive period of self-directed study and practical application, I have refined my proficiencies
                 in JavaScript, PHP, HTML, CSS, jQuery, and WordPress, among others. Additionally, I have undertaken a comprehensive curriculum through OpenClassrooms 
                 in France, augmenting my skills and acclimating myself to the professional environment typical of front-end development. This program provided me with 
                 invaluable experience in meeting deadlines, delivering presentations upon project completion, and working within collaborative settings.
        </div>
        
    </div>
    </div>
    </section>

<?php get_template_part('template-parts/portfolio-section')?>


<section id="skills">
    <h2 class="skills-title">Skills</h2>
        <div class="skills-info">
            <!-- Add content for skills section -->
        </div>
</section>

</body>

<?php get_footer(); ?>
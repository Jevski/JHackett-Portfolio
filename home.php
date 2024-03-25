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
        </div>
        <div class="skills-text"> 
        <span>Combining these skills, you have the capability to create diverse WordPress sites, ranging from simple blogs to complex web applications, while ensuring they are visually appealing, functional, and user-friendly. My ability to leverage these technologies in multiple ways demonstrates my adaptability and proficiency in web development.<br><br> I hope to continue learning and adding skills to my repertoire.</span>
</div>
</section>

</body>

<?php get_footer(); ?>
<?php
/*
Template Name: Expertis Page
*/
?>
<?php get_header(); ?>
<div class="expertis-full-list">
    <div class="page expertis-page wrapper " <?php if (get_field('background_image')) { echo "data-bg='".get_field('background_image')."'"; } ?> >
        <div class="expertis-list wrapper">
            <div class="content">
                <h2>Our toolbox of creative and strategic business development tools provides
            fresh ideas and insights, archetypal brand attitudes, technology intelligence,
            and compelling user and brand experiences.</h2>
            </div>

            

        </div>

        <div class="icons">
              <a href="#branding" class="branding"><span>Branding</span></a>
              <a href="#industrial" class="industrial"><span>Industrial</span></a>
              <a href="#engineering" class="engineering"><span>Engineering</span></a>
              <a href="#visual" class="visual"><span>Visual Communication</span></a>
              <div class="clear"></div>
            </div>
    </div>
    <div class="page expertis-page wrapper" id="branding">
        <div class="expertis-list wrapper">
            <div class="content">
                <div class="icon"><img src="/wp-content/themes/yeopress/images/expertis-branding-icon-left.jpg" alt=""></div>
                <div class="text">
                    <h1>Branding</h1>
                    <div class="illustration-img">
                        <img src="" alt="">
                    </div>
                    <p>
                        Our approach considers establishing clarity across our proprietary 3C’s brand factors that include brand value Creation, human Connection and likeability Communication. We believe that these factors have the power to ignite brand affection from a consumer’s perspective by establishing positive conditions for a brand’s justified benefits, emotional desirability and undivided trust. From a corporate perspective this framework extends to 9 sub factors, grouped around WHAT our brand stands for, WHO our brand represents and WHY our brand exists. Among the most powerful tools we have in our arsenal is our Archetypal Diamond. Developed around Carl Jung’s omnipresent Archetypal theory it helps to identify the heart and soul of your brand and delivers the energy that is required to vibrantly resonate with your consumers and drive it to a unique identity in the market. 
                    </p>    
                </div>
                
            </div>
        </div>
    </div>
    <div class="page expertis-page wrapper" id="industrial">
        <div class="expertis-list wrapper">
            <div class="content">
                <h1>Industrial Design</h1>
                <p>
                    Our Industrial Design is driven by our proprietary UXperience model that combines user observation, technology and archetypal psychology to produce exciting, innovative Designs with distinctive signatures. If brand strategy presents the heart and soul of your business, then industrial Design is the lifeblood that shapes the physical attributes of your body. It is the perfect balance of mind and body, functionality and aesthetics that determines the success or failure of a product.  Products should always be simple, intuitive and honest. At shakes we are Alumni of these good Design principles established by Dieter Rams long before the age of the iPod. This is something that we live and breathe.
                </p>
                <p>
                    Our industrial Design services range from new product development, to product evolution, material surface Designs, FMCG packaging and POP/POS creation. 
                </p>
            </div>
        </div>
    </div>
    <div class="page expertis-page wrapper" id="engineering">
        <div class="expertis-list wrapper">
            <div class="content">
                <h1>Engineering</h1>
                <p>
                  Our in-house engineers are capable of supporting any of our Design decisions and transform vision into reality. We are fully equipped to co-work with third party engineers on multiple 3D platforms including ProEngineer, Solidworks and Rhinoceros. We also respect all of our client’s need for confidentiality and follow international guidelines to protect your intellectual property. If required you can also entrust us with preparing documentation, legal text and technical drawings for patent application.
                </p>
                <p>
                  We are also able to 3D print rapid prototypes on our Makerbot for client presentation, testing and development. For a product’s final prototyping stage we work with a reliable Australian prototype maker in China, proven trustworthy throughout many of our projects.
                </p>
                <p>
                  You can consult us on production issues, complex 3D surfacing, mechanical assembly, and electrical components. Our engineers are always up to date on the latest technical advancements in all industrial fields.
                </p>
            </div>
        </div>
    </div>
    <div class="page expertis-page wrapper" id="visual">
        <div class="expertis-list wrapper">
            <div class="content">
                <h1>Visual Communication</h1>
                <p>
                    Our visual communication department is responsible for creating captivating graphics for packaging, print advertising and marketing material. We can create bold, playful artistic illustrations or clean and commercially effective Designs to suit your communication architecture. 
                </p>
                <p>
                    We deliver fresh and powerful corporate identities that transcend your business from just a name into a poised image, recognized for its values beyond words. 
                </p>
                <p>
                    We operate our own in-house photo studio for packaging based productions and work closely with Sota96 a leading photo studio in Bangkok for large scale productions.
                </p>
            </div>
        </div>
    </div>
  </div>
<div class="down-button"></div>
<div class="right-navigator hidden">
    <ul>
        <li class="branding" rank="0"></li>
        <li class="industrial" rank="1"></li>
        <li class="engineering" rank="2"></li>
        <li class="visual" rank="3"></li>
    </ul>
</div>
<?php get_footer(); ?>

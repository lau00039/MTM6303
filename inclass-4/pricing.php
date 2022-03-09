<?php 
    // Require the Session start function
    require_once "includes/session_include.php";
    // Added Page title to be stored in the $_SESSION variable
    $_SESSION["page_title"] = "Pricing Page";
    $_SESSION["current_page"] = "pricing";
    // Including the header
    include "includes/header.php";
?>

<?php 
    print_r($_SESSION);
?>

<body>

<div class="section-container">
    <div class="container">
        <div class="row section-container-spacer">
            <div class="col-xs-12">
                <div class="text-center">
                    <h1>Pricing</h1>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <p>Adipiscing vitae proin sagittis nisl rhoncus mattis. Bibendum enim facilisis gravida neque convallis
                        a cras semper auctor. Sit amet risus nullam eget felis eget. Metus dictum at tempor commodo ullamcorper
                        a lacus vestibulum. Sit amet facilisis magna etiam tempor orci eu. Eleifend mi in nulla posuere.
                        Et magnis dis parturient montes nascetur ridiculus mus mauris vitae. 
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="pricing-card pricing-primary">
                    <h3>Personal</h3>
                    <h6 class="price">18 <span>$/MO</span></h6>
                </div>
                <div class="pricing-features">
                    <ul class="features">
                        <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                        <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                        <li>Gravida arcu ac tortor dignissim</li>
                    </ul>

                    <a href="#" class="btn btn-primary" title="">Subscribe</a>
                </div>

            </div>
            <div class="col-md-4">
                <div class="pricing-card pricing-info">
                    <h3>Profesional</h3>
                    <h6 class="price"> 28 <span>$/MO</span></h6>
                </div>
                <div class="pricing-features">
                    <ul class="features">
                        <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                        <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                        <li>Gravida arcu ac tortor dignissim</li>
                        <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                    </ul>
                    
                    <a href="#" class="btn btn-primary" title="">Subscribe</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing-card pricing-secondary">
                    <h3>Business</h3>
                    <h6 class="price">48 <span>$/MO</span></h6>
                </div>
                <div class="pricing-features">
                    <ul class="features">
                        <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                        <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                        <li>Gravida arcu ac tortor dignissim</li>
                        <li>Gravida arcu ac tortor dignissim convallis aenean</li>
                        <li>Gravida arcu ac tortor dignissim</li>
                    </ul>
                    <a href="#" class="btn btn-primary" title="">Subscribe</a>
                </div>
            </div>
        </div>
    </div>
</div>  

</body>

<?php 
    // Including the footer
    include "includes/footer.php";
?>
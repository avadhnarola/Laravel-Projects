@include('header')


<section class="page-heading wow fadeIn" data-wow-duration="1.5s"
    style="background-image: url(files/images/01-heading.jpg)">
    <div class="container">
        <div class="page-name">
            <h1>Latest Photos</h1>
            <span>Lovely layout of heading</span>
        </div>
    </div>
</section>

<section class="portfolio on-portfolio">
    <div class="container">
        <div class="col-sm-12 text-center">
            <div id="projects-filter">
                <a href="#" data-filter="*" class="active">Show All</a>
                <a href="#" data-filter=".furniture">Furniture</a>
                <a href="#" data-filter=".wallpaper">Wallpaper</a>
                <a href="#" data-filter=".nature">Nature</a>
                <a href="#" data-filter=".branding">Branding</a>
            </div>
        </div>
        <div class="row">
            <div class="row" id="portfolio-grid">
                <div class="item col-md-4 col-sm-6 col-xs-12 furniture">
                    <figure>
                        <img alt="1-image" src="files/images/01-portfolio.jpg">
                        <figcaption>
                            <h3>Plaid Authentic</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="item col-md-4 col-sm-6 col-xs-12 wallpaper">
                    <figure>
                        <img alt="2-image" src="files/images/02-portfolio.jpg">
                        <figcaption>
                            <h3>Portland Neutral</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="item col-md-4 col-sm-6 col-xs-12 furniture">
                    <figure>
                        <img alt="3-image" src="files/images/03-portfolio.jpg">
                        <figcaption>
                            <h3>Synth Thundercats</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="item col-md-4 col-sm-6 col-xs-12 wallpaper">
                    <figure>
                        <img alt="4-image" src="files/images/04-portfolio.jpg">
                        <figcaption>
                            <h3>Bushwick Letterpress</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="item col-md-4 col-sm-6 col-xs-12 furniture">
                    <figure>
                        <img alt="5-image" src="files/images/05-portfolio.jpg">
                        <figcaption>
                            <h3>Fashion Heirloom</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="item col-md-4 col-sm-6 col-xs-12 nature">
                    <figure>
                        <img alt="6-image" src="files/images/06-portfolio.jpg">
                        <figcaption>
                            <h3>Locavore Brooklyn</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="item col-md-4 col-sm-6 col-xs-12 branding">
                    <figure>
                        <img alt="7-image" src="files/images/07-portfolio.jpg">
                        <figcaption>
                            <h3>Meggings Mixtape</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="item col-md-4 col-sm-6 col-xs-12 wallpaper furniture">
                    <figure>
                        <img alt="8-image" src="files/images/08-portfolio.jpg">
                        <figcaption>
                            <h3>Normcore Dreamcatcher</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="item col-md-4 col-sm-6 col-xs-12 branding nature">
                    <figure>
                        <img alt="9-image" src="files/images/09-portfolio.jpg">
                        <figcaption>
                            <h3>Street Fanny</h3>
                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="portfolio-page-nav text-center">
                <ul>
                    <li><a href="#" class="current">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@include('footer')
<?php
/**
 * Created by PhpStorm.
 * User: reals
 * Date: 7/7/2017
 * Time: 2:14 PM
 */
?>
<div class="container">
    <?php
    $session = Yii::app()->session;
    if (isset($session['eauth_profile'])) {
        echo '<div style="padding: 20px;"><strong>EAuth profile:</strong><br/>';
        CVarDumper::dump($session['eauth_profile'], 10, true);
        echo '</div>';
    }
    ?>
    <h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

    <p>Congratulations! You have successfully created your Yii application.</p>

    <p>You may change the content of this page by modifying the following two files:</p>
    <ul>
        <li>View file: <code><?php echo __FILE__; ?></code></li>
        <li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
    </ul>

    <p>For more details on how to further develop this application, please read
        the <a href="http://www.yiiframework.com/doc/">documentation</a>.
        Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
        should you have any questions.</p>

</div>
<!-- Fullwidth Section -->
<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="headline centered margin-bottom-45">
                    Most Visited Places
                    <span>Discover top-rated local businesses</span>
                </h3>
            </div>
            <div class="col-md-12">
                <div class="simple-slick-carousel dots-nav">
                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <a href="listings-single-page.html" class="listing-item-container">
                            <div class="listing-item">
                                <img src="images/listing-item-01.jpg" alt="">
                                <div class="listing-badge now-open">Now Open</div>
                                <div class="listing-item-content">
                                    <span class="tag">Eat & Drink</span>
                                    <h3>Tom's Restaurant</h3>
                                    <span>964 School Street, New York</span>
                                </div>
                                <span class="like-icon"></span>
                            </div>
                            <div class="star-rating" data-rating="3.5">
                                <div class="rating-counter">(12 reviews)</div>
                            </div>
                        </a>
                    </div>
                    <!-- Listing Item / End -->
                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <a href="listings-single-page.html" class="listing-item-container">
                            <div class="listing-item">
                                <img src="images/listing-item-02.jpg" alt="">
                                <div class="listing-item-details">
                                    <ul>
                                        <li>Friday, August 10</li>
                                    </ul>
                                </div>
                                <div class="listing-item-content">
                                    <span class="tag">Events</span>
                                    <h3>Sticky Band</h3>
                                    <span>Bishop Avenue, New York</span>
                                </div>
                                <span class="like-icon"></span>
                            </div>
                            <div class="star-rating" data-rating="5.0">
                                <div class="rating-counter">(23 reviews)</div>
                            </div>
                        </a>
                    </div>
                    <!-- Listing Item / End -->
                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <a href="listings-single-page.html" class="listing-item-container">
                            <div class="listing-item">
                                <img src="images/listing-item-03.jpg" alt="">
                                <div class="listing-item-details">
                                    <ul>
                                        <li>Starting from $59 per night</li>
                                    </ul>
                                </div>
                                <div class="listing-item-content">
                                    <span class="tag">Hotels</span>
                                    <h3>Hotel Govendor</h3>
                                    <span>778 Country Street, New York</span>
                                </div>
                                <span class="like-icon"></span>
                            </div>
                            <div class="star-rating" data-rating="2.0">
                                <div class="rating-counter">(17 reviews)</div>
                            </div>
                        </a>
                    </div>
                    <!-- Listing Item / End -->
                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <a href="listings-single-page.html" class="listing-item-container">
                            <div class="listing-item">
                                <img src="images/listing-item-04.jpg" alt="">
                                <div class="listing-badge now-open">Now Open</div>
                                <div class="listing-item-content">
                                    <span class="tag">Eat & Drink</span>
                                    <h3>Burger House</h3>
                                    <span>2726 Shinn Street, New York</span>
                                </div>
                                <span class="like-icon"></span>
                            </div>
                            <div class="star-rating" data-rating="5.0">
                                <div class="rating-counter">(31 reviews)</div>
                            </div>
                        </a>
                    </div>
                    <!-- Listing Item / End -->
                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <a href="listings-single-page.html" class="listing-item-container">
                            <div class="listing-item">
                                <img src="images/listing-item-05.jpg" alt="">
                                <div class="listing-item-content">
                                    <span class="tag">Other</span>
                                    <h3>Airport</h3>
                                    <span>1512 Duncan Avenue, New York</span>
                                </div>
                                <span class="like-icon"></span>
                            </div>
                            <div class="star-rating" data-rating="3.5">
                                <div class="rating-counter">(46 reviews)</div>
                            </div>
                        </a>
                    </div>
                    <!-- Listing Item / End -->
                    <!-- Listing Item -->
                    <div class="carousel-item">
                        <a href="listings-single-page.html" class="listing-item-container">
                            <div class="listing-item">
                                <img src="images/listing-item-06.jpg" alt="">
                                <div class="listing-badge now-closed">Now Closed</div>
                                <div class="listing-item-content">
                                    <span class="tag">Eat & Drink</span>
                                    <h3>Think Coffee</h3>
                                    <span>215 Terry Lane, New York</span>
                                </div>
                                <span class="like-icon"></span>
                            </div>
                            <div class="star-rating" data-rating="4.5">
                                <div class="rating-counter">(15 reviews)</div>
                            </div>
                        </a>
                    </div>
                    <!-- Listing Item / End -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Fullwidth Section / End -->

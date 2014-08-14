<?php
require_once 'functions/function.php';
?>
<!DOCTYPE HTML>
<html lang="en">
  
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=" media="screen" rel="stylesheet" type="text/css" />
    <link href="stylesheets/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="stylesheets/bootstrap-responsive.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="stylesheets/common.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="stylesheets/fontawesome.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="stylesheets/project.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="stylesheets/nz-trader.css" media="screen" rel="stylesheet" type="text/css" />
    <!-- Typekit fonts require an account and a kit containing the fonts used. see https://typekit.com/plans for details. <script type="text/javascript" src="//use.typekit.net/YOUR_KIT_ID.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
-->
    <title>NZ TRADER</title>
  </head>
  
  <body>
    <div id="page-wrapper">
      <div id="absolute-wrapper">
        <img class="image image-1 image-6" src="images/bird-6.png">
        <h1 class="dom-heading dom-heading-1">New Zealand Trader</h1>
        <div class="paragraph paragraph-1 paragraph-8">
          <p>Chat</p>
        </div>
        <select name="" class="select-4">
          <option value="On">On</option>
          <option value="Off">Off</option>
        </select>
<i class="icon icon-comments"></i>

        <div class="paragraph paragraph-2 paragraph-9">
          <p>Because listing&nbsp;fees are not cool..</p>
        </div>
        <a class="dom-link" href="#">Log out</a>
        <div class="navbar navbar-inverse div-1 div-2">
          <div class="navbar-inner div-1 div-3">
            <ul class="nav">
              <li>
                  <a href="sellitem.php" class="a-1"><strong>Create a listing</strong>
                </a>
              </li>
              <li>
                  <a href="myauctions.php" class="a-2"><strong>Item's I'm Selling</strong>
                </a>
              </li>
              <li>
                  <a href="mytrader.php" class="a-1"><strong>My Trader</strong>
                </a>
              </li>
              <li>
                  <a href="lostitems.php" class="a-1"><strong>Items I Lost</strong>
                </a>
              </li>
              <li>
                  <a href="feedback.php" class="a-1"><strong>Feedback</strong>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="paragraph paragraph-1 paragraph-10">
          <p>Hi Toni</p>
        </div>
<i class="icon icon-cog"></i>

<i class="icon icon-info-sign"></i>

<i class="icon icon-envelope-alt"></i>

<i class="icon icon-user"></i>

<i class="icon icon-home"></i>

        <select name="" class="select-1 select-5">
          <option value="CATEGORIES">CATEGORIES</option>
          <?php
          loopCategory();
          ?>
        </select>
<i class="icon icon-search"></i>

        <textarea name="" placeholder="Placeholder">Search</textarea>
<i class="icon icon-legal"></i>

        <div class="paragraph paragraph-3 paragraph-11">
          <p>Reserve met</p>
        </div>
<i class="icon icon-ok-sign"></i>

        <div class="paragraph paragraph-3 paragraph-4">
          <p>No reserve</p>
        </div>
        <div class="well well-1 well-4"></div>
        <img class="image image-1 image-7" src="images/download.jpg">
        <ul class="nav nav-list nav-stacked nav-1 nav-2 nav-3">
          <li>
              <a href="browserental.php">Farming</a>
          </li>
          <li>
              <a href="browserental.php">Flatmates Wanted</a>
          </li>
          <li>
              <a href="browselistings.php">Gaming</a>
          </li>
          <li>
              <a href="browselistings.php">Health &amp; Beauty</a>
          </li>
          <li>
              <a href="browselistings.php">Home &amp; Living</a>
          </li>
          <li>
              <a href="browselistings.php">Jewellery &amp; Watches</a>
          </li>
          <li>
              <a href="searchbrowsejobs.php">Jobs</a>
          </li>
          <li>
              <a href="browselistings.php">Mobile Phones</a>
          </li>
          <li>
              <a href="browselistings.php">Movies &amp; TV</a>
          </li>
          <li>
              <a href="browselistings.php">Music &amp; Instruments</a>
          </li>
          <li>
              <a href="browselistings.php">Pets &amp; Animals</a>
          </li>
        </ul>
        <ul class="nav nav-list nav-stacked nav-1 nav-2 nav-4">
          <li>
              <a href="browselistings.php">Pottery &amp; Glass</a>
          </li>
          <li>
              <a href="browserental.php">Real Estate</a>
          </li>
          <li>
              <a href="browselistings.php">Services</a>
          </li>
          <li>
              <a href="browselistings.php">Sports</a>
          </li>
          <li>
              <a href="browselistings.php">Toys &amp; Models&nbsp;</a>
          </li>
          <li>
              <a href="browselistings.php">Travel &amp; Events</a>
          </li>
          <li>
              <a href="browselistings.php">$1 Reserve</a>
          </li>
          <li>
              <a href="browselistings.php">Closing Soon</a>
          </li>
          <li>
              <a href="browselistings.php">Free</a>
          </li>
          <li>
              <a href="browselistings.php">Fundraisers</a>
          </li>
          <li>
              <a href="browselistings.php">Garage Sales</a>
          </li>
        </ul>
        <ul class="nav nav-list nav-stacked nav-1 nav-5">
          <li>
              <a href="browselistings.php" class="a-3">Antiques &amp; Collectables</a>
          </li>
          <li>
              <a href="browselistings.php" class="a-3">Art</a>
          </li>
          <li>
              <a href="browselistings.php" class="a-3">Baby Gear</a>
          </li>
          <li>
              <a href="browselistings.php" class="a-3">Books</a>
          </li>
          <li>
              <a href="browselistings.php" class="a-3">Building &amp; Renovation</a>
          </li>
          <li>
              <a href="browselistings.php" class="a-3">Business &amp; Industry</a>
          </li>
          <li>
              <a href="browselistings.php" class="a-3">Cars, Bikes &amp; Boats</a>
          </li>
          <li>
              <a href="browselistings.php" class="a-3">Clothing</a>
          </li>
          <li>
              <a href="browselistings.php" class="a-3">Computers</a>
          </li>
          <li>
              <a href="browselistings.php" class="a-3">Craft</a>
          </li>
          <li>
              <a href="browselistings.php" class="a-3">Electronics &amp; Photography</a>
          </li>
          <li>
            <a href="#"></a>
          </li>
        </ul>
        <div class="well well-1 well-2"></div>
        <img class="image image-1 image-2 image-8" src="images/download-99.jpg">
        <div class="well well-1 well-5 div-4"></div>
        <div class="paragraph paragraph-12 div-4">
          <p>Puppies - Foxy cross. Comes with bedding &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <span>AUCKLAND - Mt Albert</span>
          </p>
        </div>
        <img class="image image-1 image-3 image-9" src="images/images-80.jpg">
        <img class="image image-1 image-2 image-4 image-10" src="images/download-100.jpg">
        <div class="paragraph paragraph-13">
          <p>Box of baby clothes 0-12 months. &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; WELLINGTON - Kingston</p>
        </div>
        <img class="image image-1 image-3 image-5 image-11" src="images/images-80.jpg">
        <img class="image image-1 image-2 image-4 image-12" src="images/images-81.jpg">
        <div class="well well-1 well-6"></div>
        <div class="paragraph paragraph-14">
          <p>Table and chairs. In ok condition. Pick up asap. NAPIER - Taradale</p>
        </div>
        <img class="image image-1 image-3 image-5 image-13" src="images/images-80.jpg">
        <div class="btn-group btn-group-1 btn-group-3">
          <button class="btn">All</button>
          <button class="btn">New</button>
          <button class="btn">Used</button>
        </div>
        <div class="btn-group btn-group-4 div-1">
          <button class="btn">All</button>
          <button class="btn">Buy Now</button>
        </div>
        <div class="paragraph paragraph-4 paragraph-5">
          <p>Suburb:</p>
        </div>
        <select name="" class="select-1 select-2 select-6">
          <option value="All">All</option>
        </select>
        <div class="paragraph paragraph-5 paragraph-15">
          <p>Region:</p>
        </div>
        <select name="" class="select-1 select-2 select-7">
          <option value="All">All</option>
        </select>
        <select name="" class="select-1 select-8">
          <option value="Featured First">Featured First</option>
          <option value="Closing soon">Closing soon</option>
          <option value="Lowest Price">Lowest Price</option>
          <option value="Highest Price">Highest Price</option>
          <option value="Most Bids">Most Bids</option>
          <option value="Latest Listings">Latest Listings</option>
          <option value="Closing Soon">Closing Soon</option>
          <option value="Title">Title</option>
        </select>
        <div class="div-2 div-5 div-7">
          <div class="row-fluid">
            <span class="span4">
              <div class="well well-2 well-3">
                <img class="pull-center image" src="http://placehold.it/200X150">
                <p>Table &amp; Chairs</p>
                <p>$1.00</p>
                <p>Auckland - Mt Albert</p>
                <p>Closes in 6&nbsp;hours</p>
                <p>&nbsp;</p>
                <button class="btn btn-primary pull-center">Save</button>
              </div>
            </span>
            <span class="span4">
              <div class="well well-2 well-3">
                <img class="pull-center image" src="http://placehold.it/200X150">
                <p>Table &amp; Chairs</p>
                <p>$1.00</p>
                <p>Auckland - Mt Albert</p>
                <p>Closes in 6&nbsp;hours</p>
                <p>&nbsp;</p>
                <button class="btn btn-primary pull-center">Save</button>
              </div>
            </span>
            <span class="span4">
              <div class="well well-2 well-3">
                <img class="pull-center image" src="http://placehold.it/200X150">
                <p>Table &amp; Chairs</p>
                <p>$1.00</p>
                <p>Auckland - Mt Albert</p>
                <p>Closes in 6&nbsp;hours</p>
                <p>&nbsp;</p>
                <button class="btn btn-primary pull-center">Save</button>
              </div>
            </span>
          </div>
        </div>
        <div class="well well-1 div-3"></div>
        <h1 class="dom-heading dom-heading-2">Search&nbsp;</h1>
        <select name="" class="select-3 select-9">
          <option value="Featured First">Featured First</option>
          <option value="Closing soon">Closing soon</option>
          <option value="Lowest Price">Lowest Price</option>
          <option value="Highest Price">Highest Price</option>
          <option value="Most Bids">Most Bids</option>
          <option value="Latest Listings">Latest Listings</option>
          <option value="Closing Soon">Closing Soon</option>
          <option value="Title">Title</option>
        </select>
        <div class="paragraph paragraph-1 paragraph-6">
          <p>Location:&nbsp;</p>
        </div>
        <select name="" class="select-10">
          <option value="All">All</option>
        </select>
        <div class="paragraph paragraph-2 paragraph-6">
          <p>Suburb:</p>
        </div>
        <select name="" class="select-3 select-11">
          <option value="All">All</option>
        </select>
<i class="icon icon-comments-alt"></i>

        <div class="paragraph paragraph-2 paragraph-7 div-6">
          <p>Conidition:</p>
        </div>
        <div class="btn-group btn-group-1 div-6"> <strong></strong>  <strong></strong>  <strong></strong> 
          <button class="btn">All</button>
          <button class="btn">New</button>
          <button class="btn">Used</button>
        </div>
        <div class="paragraph paragraph-2 paragraph-7 paragraph-16">
          <p>Filter:</p>
        </div>
        <div class="btn-group btn-group-2 btn-group-5">
          <button class="btn">All</button>
          <button class="btn">Buy Now</button>
        </div>
        <div class="btn-group btn-group-2 btn-group-6">
          <button class="btn">All</button>
          <button class="btn">Wanted</button>
          <button class="btn">For Sale</button>
        </div>
        <div class="div-2 div-5 div-8">
          <div class="row-fluid">
            <span class="span4">
              <div class="well well-2 well-3">
                <img class="pull-center image" src="http://placehold.it/200X150">
                <p>Table &amp; Chairs</p>
                <p>$1.00</p>
                <p>Auckland - Mt Albert</p>
                <p>Closes in 6&nbsp;hours</p>
                <p>&nbsp;</p>
                <button class="btn btn-primary pull-center">Save</button>
              </div>
            </span>
            <span class="span4">
              <div class="well well-2 well-3">
                <img class="pull-center image" src="http://placehold.it/200X150">
                <p>Table &amp; Chairs</p>
                <p>$1.00</p>
                <p>Auckland - Mt Albert</p>
                <p>Closes in 6&nbsp;hours</p>
                <p>&nbsp;</p>
                <button class="btn btn-primary pull-center">Save</button>
              </div>
            </span>
            <span class="span4">
              <div class="well well-2 well-3">
                <img class="pull-center image" src="http://placehold.it/200X150">
                <p>Table &amp; Chairs</p>
                <p>$1.00</p>
                <p>Auckland - Mt Albert</p>
                <p>Closes in 6&nbsp;hours</p>
                <p>&nbsp;</p>
                <button class="btn btn-primary pull-center">Save</button>
              </div>
            </span>
          </div>
        </div>
        <div class="paragraph paragraph-2 paragraph-17">
          <p>Price:</p>
        </div>
        <input class="textinput textinput-1" type="text" placeholder="To" name="">
        <input class="textinput textinput-2" type="text" placeholder="From" name="">
        <div class="paragraph paragraph-18">
          <p>-</p>
        </div>
        <img class="image image-1 image-14" src="images/skinnyfiber160x600.gif">
        <div class="div-2 div-5 div-9">
          <div class="row-fluid">
            <span class="span4">
              <div class="well well-2 well-3">
                <img class="pull-center image" src="http://placehold.it/200X150">
                <p>Table &amp; Chairs</p>
                <p>$1.00</p>
                <p>Auckland - Mt Albert</p>
                <p>Closes in 6&nbsp;hours</p>
                <p>&nbsp;</p>
                <button class="btn btn-primary pull-center">Save</button>
              </div>
            </span>
            <span class="span4">
              <div class="well well-2 well-3">
                <img class="pull-center image" src="http://placehold.it/200X150">
                <p>Table &amp; Chairs</p>
                <p>$1.00</p>
                <p>Auckland - Mt Albert</p>
                <p>Closes in 6&nbsp;hours</p>
                <p>&nbsp;</p>
                <button class="btn btn-primary pull-center">Save</button>
              </div>
            </span>
            <span class="span4">
              <div class="well well-2 well-3">
                <img class="pull-center image" src="http://placehold.it/200X150">
                <p>Table &amp; Chairs</p>
                <p>$1.00</p>
                <p>Auckland - Mt Albert</p>
                <p>Closes in 6&nbsp;hours</p>
                <p>&nbsp;</p>
                <button class="btn btn-primary pull-center">Save</button>
              </div>
            </span>
          </div>
        </div>
        <div class="container-fluid div-2 div-10">
          <div class="row-fluid">
            <span class="span12">
              <div class="pull-left">
                <p>© AwesomeCo</p>
              </div>
              <ul class="nav nav-pills pull-right">
                <li>
                  <a href="#">About</a>
                </li>
                <li>
                  <a href="#">Privacy</a>
                </li>
                <li>
                  <a href="#">Terms Of Service</a>
                </li>
              </ul>
            </span>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>
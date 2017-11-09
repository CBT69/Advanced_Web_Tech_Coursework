<script type="text/javascript" src="extras/jquery.min.1.7.js"></script>
<script type="text/javascript" src="extras/jquery-ui-1.8.20.custom.min.js"></script>
<script type="text/javascript" src="extras/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="extras/modernizr.2.5.3.min.js"></script>
<script type="text/javascript" src="js/turn.js"></script>
<script type="text/javascript" src="lib/hash.js"></script>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" type="text/css" href="css/jquery.ui.css">
<div id="flipbook" class="center">
	<div class="hard">
		<p>Cowboy Story</p>
	</div>
	<div class="hard">
	</div>
	<div>
		<div id="authors" class="row">
			<div class="col">
				<h1>Cowboy Story</h1>
				<h3> </h3>
				<h5><b>Created by:</b></h5>
				<h3></h3>
				<h4>Antony Becirspahic</h4>
				<h4>Max Laird</h4>
				<h4>Ryan Feely</h4>
				<h4>Krzysztof Luc</h4>
			</div>
		</div>
	</div>

	<div>
	 <div class="row text">
		 <div class="row">
			 <img src="img/cowboy4.jpg" class="img img-responsive"/>
		 </div>
		 <h5>The story starts with a description of the cowboy (listener) wandering
			 through a desert with his horse and revolver as
			 he makes his way towards the nearest town. He is stopped by an old Indian
			 chief who asks a favour of him. The cowboy is asked to go in the mine to
			 retrieve an old drum and may keep any of the copper, silver, and gold he finds along the way.
			 Indian gives him his headdress to protect him from the hyenas.</h5>
	 </div>
	</div>

	<div>
		<div class="row text">
			<div>
				<h5 class="col col-lg-6 col-md-6 col-sm-6">Cowboy goes into mine and as he goes deeper, he progresses through each of the hyenas
				 who start aggressive but then become passive when they see the headdress.
				 Once he finds the drum in the last room he returns to the old Indian chief and asks why the drum is needed.
				 After the Indian won’t tell him he shoots him with his revolver.</h5>
			</div>
			<div class="col col-lg-6 col-md-6 col-sm-6">
				<img src="img/cowboy2.jpg" class="img img-responsive"/>
			</div>
			<div class="row">
				<img src="img/coyote.gif" class="img img-responsive"/>
			</div>
		 </div>
	</div>

	<div>
		<div class="row text">
			<div class="col col-lg-4 col-md-4 col-sm-4">
				<img src="img/cowboy.jpg" class="img img-responsive"/>
			</div>
			<div class="col col-lg-8 col-md-8 col-sm-8">
			 <h5>Continues into town where he stops at the saloon with his newfound wealth
			 and orders a room to stay with lots of food and drink.
			 Overhears old men talking about the beautiful sheriff’s daughter who is locked away on a far out ranch.
			 Unable to find a way to see her the cowboy eventually runs out of money and has to sleep behind a house
			 in the town. As a way of trying to make money he plays the drum which summons the hyenas who offer to
			 do what he asks. They bring him money and he goes back to living well at the saloon.</h5>
		 	</div>
		 </div>
	</div>

	<div>
		<div class="col col-lg-12 col-md-12">
			<img src="img/cowboy3.jpg" class="img img-responsive image"/>
		</div>
		<div class="row text">
			 <h5>Eventually asks the dogs to bring the sheriff’s daughter who appears and he kisses her.
			 The daughter tells her father of the dream. Next night the sheriff has an officer
			 watch over his daughter and follows the hyena as he brings the girl to the cowboy.
			 The officer marks where the dog goes by leaving a bottle of whisky at the door but the hyena then
			 copies this and puts whisky at every door in town.
			 After this fails the sheriff uses a trail of gunpowder to track where the hyena takes his
			 daughter and so he can follow it the next day.</h5>
		 </div>
	</div>
	<div>
		<div class="row text">
			 <h5>Cowboy gets arrested and is thrown in jail to be executed at sun rise the next day.
			 Asks the guard to send someone to retrieve his drum so he may say a final prayer the next day.
			 As he is to be shot, he plays the drum to summon the hyenas who kills the sheriff
			 and officers and free the daughter.
			 All the townspeople are happy to let him free as he gave everyone whisky earlier. </h5>
		</div>
		<div class="col col-lg-12 col-md-12">
				<img src="img/giphy.webp" class="img img-responsive image"/>
		</div>
	</div>
		<div class="hard"></div>
		<div class="hard"></div>
	</div>

	<script type="text/javascript">
		$("#flipbook").turn({
			width: 980,
			height: 680,
			autoCenter: true
		});
	</script>
	<script type="text/javascript">

	function loadApp() {
		var flipbook = $('.sj-book');
		// Check if the CSS was already loaded
		if (flipbook.width()==0 || flipbook.height()==0) {
			setTimeout(loadApp, 10);
			return;
		}
		// Flipbook
		flipbook.bind(($.isTouch) ? 'touchend' : 'click', zoomHandle);
		flipbook.turn({
			elevation: 50,
			acceleration: !isChrome(),
			autoCenter: true,
			gradients: true,
			duration: 1000,
			pages: 112,
			when: {
				turning: function(e, page, view) {
					var book = $(this),
						currentPage = book.turn('page'),
						pages = book.turn('pages');
					if (currentPage>3 && currentPage<pages-3) {
						if (page==1) {
							book.turn('page', 2).turn('stop').turn('page', page);
							e.preventDefault();
							return;
						} else if (page==pages) {
							book.turn('page', pages-1).turn('stop').turn('page', page);
							e.preventDefault();
							return;
						}
					} else if (page>3 && page<pages-3) {
						if (currentPage==1) {
							book.turn('page', 2).turn('stop').turn('page', page);
							e.preventDefault();
							return;
						} else if (currentPage==pages) {
							book.turn('page', pages-1).turn('stop').turn('page', page);
							e.preventDefault();
							return;
						}
					}
					updateDepth(book, page);
					if (page>=2)
						$('.sj-book .p2').addClass('fixed');
					else
						$('.sj-book .p2').removeClass('fixed');
					if (page<book.turn('pages'))
						$('.sj-book .p111').addClass('fixed');
					else
						$('.sj-book .p111').removeClass('fixed');
					Hash.go('page/'+page).update();
				},
				turned: function(e, page, view) {
					var book = $(this);
					if (page==2 || page==3) {
						book.turn('peel', 'br');
					}
					updateDepth(book);
					$('#slider').slider('value', getViewNumber(book, page));
					book.turn('center');
				},
				start: function(e, pageObj) {
					moveBar(true);
				},
				end: function(e, pageObj) {
					var book = $(this);
					updateDepth(book);
					setTimeout(function() {
						$('#slider').slider('value', getViewNumber(book));
					}, 1);
					moveBar(false);
				},
				missing: function (e, pages) {
					for (var i = 0; i < pages.length; i++) {
						addPage(pages[i], $(this));
					}
				}
			}
		});

		$('#slider').slider('option', 'max', numberOfViews(flipbook));
		flipbook.addClass('animated');
	</script>

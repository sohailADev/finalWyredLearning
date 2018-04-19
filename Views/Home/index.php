<?php require APPROOT.'/Views/PartialViews/header.php' ?>

<header id="main-header" class="py-1 text-white mb-3" style="background-color:#3bafda;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>
                    <i class="fa fa-gear"></i> Dashboard
                </h1>
            </div>
        </div>
    </div>
</header>

<div class="promo">
	<div class="jumbotron">
		<!--        <h1 class="display-3">--><?php //echo $data['title']; ?><!--</h1>-->
		<h1 class="display-3">LEARN TO CODE AWESOME WEBSITES IN HTML, CSS, JAVASCRIPT, PHP WITH MONGODB </h1>
		<!--        <p class="lead">LEARN TO CODE AWESOME WEBSITES IN HTML, CSS, JAVASCRIPT, PHP WITH MONGODB .</p>-->
		<hr class="my-4" />
		<p>WyredLearing is a fun and free online portal that teaches you the basics of web development through projects you can do in your browser..</p>
		<p class="lead">
			<a class="btn btn-primary  btn-lg" href="<?php echo URLROOT ?>/Users/login" role="button">Start Learning</a>
		</p>
	</div>
</div>
<?php require APPROOT.'/Views/PartialViews/footer.php' ?>
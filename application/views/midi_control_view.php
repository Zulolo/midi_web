<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<link rel="icon" href="<?php echo base_url("image/favicon.ico"); ?>">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />

    <script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.min.js"); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>

	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php echo base_url("assets/css/midi.css"); ?>" />
	
	<title>MIDI Controller Web</title>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">MIDI Controller Web</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav masthead-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="<?php echo site_url('/Auth/edit_user') ?>">User</a></li>
					<li><a href="<?php echo site_url('/Auth/logout') ?>">Log out</a></li>
				</ul>
			</div>
			<!--/.navbar-collapse -->
		</div>
	</nav>
	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron">
		<div class="container">
			<h1>MIDI controller Function 1</h1>
			<p>You can use the combo box below to change instrument.</p>
			<p>
				<a class="btn btn-primary btn-lg"
					href="https://github.com/Zulolo/midi_daemon/wiki" role="button">Learn
					more »</a>
			</p>
		</div>
	</div>

	<div class="container"> 
		<!-- Example row of columns -->
		<div class="row">
			<div class="col-md-4">				
				<div class="input-group">
					<span class="input-group-addon" id="basic-addon3">Channel</span>
					<input type="number" min="1" max="128" class="form-control" aria-label="..." id="midi_channel">
					<div class="input-group-btn">
						<button type="button" class="btn btn-default dropdown-toggle" id="midi_instrument_show"
							data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Default Instrument <span class="caret"></span>
						</button>
						
						<ul class="dropdown-menu dropdown-menu-right" id="midi_instrument_change">
                            <li><a index="1">Acoustic Grand Piano</a></li>
                            <li><a index="2">Bright Acoustic Piano</a></li>
                            <li><a index="3">Electric Grand Piano</a></li>
                            <li><a index="4">Honky-tonk Piano</a></li>
                            <li><a index="5">Electric Piano 1</a></li>
                            <li><a index="6">Electric Piano 2</a></li>
                            <li><a index="7">Harpsichord</a></li>
                            <li><a index="8">Clavi</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a index="9">Celesta</a></li>
                            <li><a index="10">Glockenspiel</a></li>
                            <li><a index="11">Music Box</a></li>
                            <li><a index="12">Vibraphone</a></li>
                            <li><a index="13">Marimba</a></li>
                            <li><a index="14">Xylophone</a></li>
                            <li><a index="15">Tubular Bells</a></li>
                            <li><a index="16">Dulcimer</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a index="17">Drawbar Organ</a></li>
                            <li><a index="18">Percussive Organ</a></li>
                            <li><a index="19">Rock Organ</a></li>
                            <li><a index="20">Church Organ</a></li>
                            <li><a index="21">Reed Organ</a></li>
                            <li><a index="22">Accordion</a></li>
                            <li><a index="23">Harmonica</a></li>
                            <li><a index="24">Tango Accordion</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a index="25">Acoustic Guitar (nylon)</a></li>
                            <li><a index="26">Acoustic Guitar (steel)</a></li>
                            <li><a index="27">Electric Guitar (jazz)</a></li>
                            <li><a index="28">Electric Guitar (clean)</a></li>
                            <li><a index="29">Electric Guitar (muted)</a></li>
                            <li><a index="30">Overdriven Guitar</a></li>
                            <li><a index="31">Distortion Guitar</a></li>
                            <li><a index="32">Guitar harmonics</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a index="33">Acoustic Bass</a></li>
                            <li><a index="34">Electric Bass (finger)</a></li>
                            <li><a index="35">Electric Bass (pick)</a></li>
                            <li><a index="36">Fretless Bass</a></li>
                            <li><a index="37">Slap Bass 1</a></li>
                            <li><a index="38">Slap Bass 2</a></li>
                            <li><a index="39">Synth Bass 1</a></li>
                            <li><a index="40">Synth Bass 2</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a index="41">Violin</a></li>
                            <li><a index="42">Viola</a></li>
                            <li><a index="43">Cello</a></li>
                            <li><a index="44">Contrabass</a></li>
                            <li><a index="45">Tremolo Strings</a></li>
                            <li><a index="46">Pizzicato Strings</a></li>
                            <li><a index="47">Orchestral Harp</a></li>
                            <li><a index="48">Timpani</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a index="49">String Ensemble 1</a></li>
                            <li><a index="50">String Ensemble 2</a></li>
                            <li><a index="51">SynthStrings 1</a></li>
                            <li><a index="52">SynthStrings 2</a></li>
                            <li><a index="53">Choir Aahs</a></li>
                            <li><a index="54">Voice Oohs</a></li>
                            <li><a index="55">Synth Voice</a></li>
                            <li><a index="56">Orchestra Hit</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a index="57">Trumpet</a></li>
                            <li><a index="58">Trombone</a></li>
                            <li><a index="59">Tuba</a></li>
                            <li><a index="60">Muted Trumpet</a></li>
                            <li><a index="61">French Horn</a></li>
                            <li><a index="62">Brass Section</a></li>
                            <li><a index="63">SynthBrass 1</a></li>
                            <li><a index="64">SynthBrass 2</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a index="65">Soprano Sax</a></li>
                            <li><a index="66">Alto Sax</a></li>
                            <li><a index="67">Tenor Sax</a></li>
                            <li><a index="68">Baritone Sax</a></li>
                            <li><a index="69">Oboe</a></li>
                            <li><a index="70">English Horn</a></li>
                            <li><a index="71">Bassoon</a></li>
                            <li><a index="72">Clarinet</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a index="73">Piccolo</a></li>
                            <li><a index="74">Flute</a></li>
                            <li><a index="75">Recorder</a></li>
                            <li><a index="76">Pan Flute</a></li>
                            <li><a index="77">Blown Bottle</a></li>
                            <li><a index="78">Shakuhachi</a></li>
                            <li><a index="79">Whistle</a></li>
                            <li><a index="80">Ocarina</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a index="81">Lead 1 (square)</a></li>
                            <li><a index="82">Lead 2 (sawtooth)</a></li>
                            <li><a index="83">Lead 3 (calliope)</a></li>
                            <li><a index="84">Lead 4 (chiff)</a></li>
                            <li><a index="85">Lead 5 (charang)</a></li>
                            <li><a index="86">Lead 6 (voice)</a></li>
                            <li><a index="87">Lead 7 (fifths)</a></li>
                            <li><a index="88">Lead 8 (bass + lead)</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a index="89">Pad 1 (new age)</a></li>
                            <li><a index="90">Pad 2 (warm)</a></li>
                            <li><a index="91">Pad 3 (polysynth)</a></li>
                            <li><a index="92">Pad 4 (choir)</a></li>
                            <li><a index="93">Pad 5 (bowed)</a></li>
                            <li><a index="94">Pad 6 (metallic)</a></li>
                            <li><a index="95">Pad 7 (halo)</a></li>
                            <li><a index="96">Pad 8 (sweep)</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a index="97">FX 1 (rain)</a></li>
                            <li><a index="98">FX 2 (soundtrack)</a></li>
                            <li><a index="99">FX 3 (crystal)</a></li>
                            <li><a index="100">FX 4 (atmosphere)</a></li>
                            <li><a index="101">FX 5 (brightness)</a></li>
                            <li><a index="102">FX 6 (goblins)</a></li>
                            <li><a index="103">FX 7 (echoes)</a></li>
                            <li><a index="104">FX 8 (sci-fi)</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a index="105">Sitar</a></li>
                            <li><a index="106">Banjo</a></li>
                            <li><a index="107">Shamisen</a></li>
                            <li><a index="108">Koto</a></li>
                            <li><a index="109">Kalimba</a></li>
                            <li><a index="110">Bag pipe</a></li>
                            <li><a index="111">Fiddle</a></li>
                            <li><a index="112">Shanai</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a index="113">Tinkle Bell</a></li>
                            <li><a index="114">Agogo</a></li>
                            <li><a index="115">Steel Drums</a></li>
                            <li><a index="116">Woodblock</a></li>
                            <li><a index="117">Taiko Drum</a></li>
                            <li><a index="118">Melodic Tom</a></li>
                            <li><a index="119">Synth Drum</a></li>
                            <li><a index="120">Reverse Cymbal</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a index="121">Guitar Fret Noise</a></li>
                            <li><a index="122">Breath Noise</a></li>
                            <li><a index="123">Seashore</a></li>
                            <li><a index="124">Bird Tweet</a></li>
                            <li><a index="125">Telephone Ring</a></li>
                            <li><a index="126">Helicopter</a></li>
                            <li><a index="127">Applause</a></li>
                            <li><a index="128">Gunshot</a></li>
						</ul>
					</div>
					<!-- /btn-group -->
				</div>
				<!-- /input-group -->
			</div>
			<!-- /.col-lg-6 -->
			<div class="col-md-4">
				<h2>Sub Function 2</h2>
				<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus,
					tellus ac cursus commodo, tortor mauris condimentum nibh, ut
					fermentum massa justo sit amet risus. Etiam porta sem malesuada
					magna mollis euismod. Donec sed odio dui.</p>
				<p>
					<a class="btn btn-default" href="#" role="button">View details »</a>
				</p>
			</div>
			<div class="col-md-4">
				<h2>Sub Function 3</h2>
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in,
					egestas eget quam. Vestibulum id ligula porta felis euismod semper.
					Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum
					nibh, ut fermentum massa justo sit amet risus.</p>
				<p>
					<a class="btn btn-default" href="#" role="button">View details »</a>
				</p>
			</div>
		</div>

		<hr>

		<footer>
			<p>© 2016 Zulolo Company, Inc.</p>
		</footer>
		<script type="text/javascript" src="<?php echo base_url("assets/js/midi_control.js"); ?>"></script>
	</div>
</body>
</html>
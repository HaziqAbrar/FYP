@extends('layout/mainlayout')

@section('title','FSKTM Projects')

@section('style')

	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
		}
		#information{
			color:white;
			
		}
		#information h3{
			font-family: 'Asap Condensed', sans-serif;
			padding: 0 20px;
			margin-top: 20px;
		}
		#cardbox{
			background-color: rgba( 118, 133, 133, 0.5);
			padding: 0 3px;
			border-radius: 30px;
		}
		#title{
			font-family: 'Patua One', cursive;
			font-size: 150px;
			padding-top: 70px;
			color: white;
			text-shadow:  0px 0px 50px #000;
		}
	</style>

@endsection


@section('container')

    <div class="container text-center">
        <div class="row">
            <div class="col-12 w3-container w3-center">
                <h1 class="mt-3" id="title">WELCOME!</h1>
            </div>
        </div>
    </div>


    <div class=" text-center m-3" id="information">

    	<div class="w3-row-padding text-center"style="margin: 1px;">

	    	<div class="w3-half ">
	    		<div id="cardbox">
	    			<h3>What is FSKTM Projects?</h3>
	    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	    			quis nostrud exercitation ullamco laborirum.</p>
	    		</div>
	    	</div>
	    		

	    	<div class="w3-half ">
	    		<div id="cardbox">
	    			<h3>What is FSKTM Projects?</h3>
	    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	    			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	    			quis nostrud exercitation ullamco laborirum.</p>
	    		</div>
	    	</div>

	    	
    	</div>


    	<div class="container text-center" style="margin-bottom: 10px 0 20px 0">
    		<a href="#"><button type="button" class="btn btn-primary">Contact Us!</button></a>
    	</div>
    </div>

@endsection
    


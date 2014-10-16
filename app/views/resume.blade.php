@extends('layouts.master')

@section('title', 'Resume')

@section('content')
	<div class="jumbotron">	
		<h1>Frank Rodriguez <small>LAMP Stack Developer</small></h1>
		
		<div id="contact">
			<h2>Contact</h2>

			<dl id="contact_info" class="dl-horizontal">
				<dt><i class="fa fa-home fa-2x"></i></dt>

				<dd>930 South Pine Street, 78210</dd>

				<dt><i class="fa fa-envelope fa-2x"></i></dt>

				<dd><a href="mailto:frank.aaron.rodriguez@gmail.com">frank.aaron.rodriguez@gmail.com</a></dd>

				<dt><i class="fa fa-github-square fa-2x" alt="Github"></i></dt>

				<dd id="github"><a href="https://github.com/FrankARod">FrankARod</a></dd>

				<dt><i class="fa fa-phone fa-2x"></i></dt>

				<dd>Cell: 210-544-0143 Home: 210-532-6804</dd>
			</dl>
		</div>
	</div>
	
	<div class="row">
		<div id="education" class="col-md-10 col-md-offset-1">	
			<h2>Education</h2>

			<dl>
				<div class="row">
					<dt class="col-md-6">LAMP+J Software Development Bootcamp</dt>

					<dd class="col-md-6 pull-right">Codeup, August 2014-November 2014</dd>
				</div>
				
				<div id="hich_school" class="row">
					<dt class="col-md-6">High School</dt>
				
					<dd class="col-md-6 pull-right">Brooks Academy of Science and Engineering, 2010-2014</dd>
				</div>
			</dl>
		</div>
	</div>

	<hr>

	<div class="row">
		<div id="experience" class="col-md-10 col-md-offset-1">
			<h2>Work Experience</h2>

			<dl>
				<div class="row">
					<dt class="col-md-6">Intern</dt>

					<dd class="col-md-6 pull-right">Codeup, January 2014-May 2014</dd>
				</div>
			</dl>
		</div>
	</div>

	<hr>

	<div class="row">
		<div id="honors" class="col-md-10 col-md-offset-1">
			<h2>Honors</h2>
			
			<dl>
				<div class="row">		
					<dt class="col-md-6">National Hispanic Scholar</dt>

					<dd class="col-md-6 pull-right">Honorable Mention</dd>
				</div>
			</dl>
		</div>
	</div>
@stop
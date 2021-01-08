<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'larcasts')</title>
	<style>
		ul 
		{
			list-style-type: none;
  			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: #333;
		}

		li 
		{
 			float: left;
		}

		li a 
		{
		  display: block;
		  color: white;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		}

		li a:hover 
		{
		  background-color: #111;
		}
		
		.is-complete
		{
			text-decoration: line-through;
		}

		footer
		{
			width: 100%;
			background-color: black;
			color: white;
			margin-top: 20%;
		}
	</style>
</head>
<body>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact Us</a></li>
        <li><a href="/registration">Register</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/projects/create">Create New Project</a></li>
        <li><a href="/projects">Projects Created</a></li>
    </ul>
    @yield('content')
</body>
<footer>
	<center>All rights reserved &copy;2019, Nikita Shrestha.</center>
</footer>
</html>
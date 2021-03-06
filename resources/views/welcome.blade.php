<html>
	<head>
		<title>Usably</title>

        <link href="{{elixir('css/output/all.css')}}" rel="stylesheet" type="text/css">
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}

            .btn-sign-in {
                margin-top: 40px;
            }

		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title">Usably</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
                <a href="{{url('auth/login')}}" class="btn btn-primary btn-sign-in" role="button">Sign In</a>
                <a href="{{url('auth/register')}}" class="btn btn-primary btn-sign-in" role="button">Register</a>
			</div>
		</div>
	</body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>PO-Oil Information System</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        {!! HTML::style('/css/app.css') !!}
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
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
            }
			.login{
				width: 30%;
				align:center;
			}
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">PO Oil</div>
            </div>
            <div>
			<div class="login">
				<div class="input-group margin-bottom-sm">
				  <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
				  <input class="form-control" type="text" placeholder="Email address">
				</div>
				<div class="input-group">
				  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
				  <input class="form-control" type="password" placeholder="Password">
				</div>
				<a class="btn btn-lg btn-success" href="/portal">
					<i class="fa fa-flag fa-2x pull-left"></i> เข้าสู่ระบบ
				</a>
			
            </div>

        </div>
    </body>
</html>

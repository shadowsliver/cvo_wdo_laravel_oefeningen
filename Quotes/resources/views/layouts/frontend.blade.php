<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quotes</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        .header {
            margin-top: 20px;
            padding: 20px 0;
            overflow: hidden;
            border-bottom: 1px solid #777777;
            margin-bottom: 20px;
        }

        .header h1 {
            margin: 0;
        }

        .sidebar h2 {
            margin-top: 0;
        }

        .mainContent blockquote {
            position: relative;
        }

        .mainContent blockquote:hover .editLinks {
            display: block;
        }

        .mainContent blockquote:hover {
            background: #f5f5f5;
        }

        .mainContent .editLinks {
            display: none;
            position: absolute;
            right: 0;
            bottom: 5px;
        }

        .mainContent .editLinks a {
        }

        .mainContent .editLinks a:first-child {
            color: orange;
        }

        .mainContent .editLinks a:last-child {
            color: red;
        }

        .form-error {
            display: block;
            color: red;
        }
    </style>
</head>
<body>

<!-- container -->
<div class="container">

    <!-- header -->
    <div class="row header">
        <div class="col-md-12">
            <h1 class="pull-left">Quotes</h1>
        </div>
    </div>
    <!-- end header -->


    @yield('content')

</div>
<!-- end container -->

</body>
</html>
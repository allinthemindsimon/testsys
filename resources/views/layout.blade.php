<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Farmer Fred</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <style>
            h1 {
                font-size: 1.5em;
            }
        </style>
    </head>
    <body class="container">
        <section class="section">
            <div class="container">
            <h1 class="title">Farmer Fred's Cows Application</h1>
            </div>
        </section>
        <section class="section">
            <div class="columns">
                <div class="column is-2">
                    <a href="/" class="button is-link">List Cows</a>
                </div>
                <div class="column is-2">
                    <a href="/cow/create" class="button is-link">Add Cows</a>
                </div>
                <div class="column is-2">
                    <a href="/report" class="button is-link">Reports</a>
                </div>
            </div>
        </section>
        <section class="section">

        @yield ('content')

        </section>
    </body>
</html>

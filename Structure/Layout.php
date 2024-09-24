<?php
class Layout
{
    public function heading()
    {
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <script src="https://cdn.tailwindcss.com"></script>
            <link href="Css/style.css" rel="stylesheet">
            <title>Sign Up</title>
        </head>

        <body>
            <nav class="navbar bg-body-tertiary">
                <form class="container-fluid justify-content-start">
                    <button class="btn btn-outline-success me-2" type="button">Main button</button>
                    <button class="btn btn-sm btn-outline-secondary" type="button">Smaller button</button>
                </form>
            </nav>

        </body>

        </html>
    <?php
    }

    public function Footer()
    {
    ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>>
            <title>Document</title>
        </head>

        <body>

        </body>

        </html>
<?php
    }
}

?>
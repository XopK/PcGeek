<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="/style/adminStyle.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <title>Admin-panel</title>
</head>

<body>


    <div class="container-fluid">
        <x-admin-sidebar></x-admin-sidebar>
        <div class="col py-3">
            <h3>Left Sidebar with Submenus</h3>
            <p class="lead">
                An example 2-level sidebar with collasible menu items. The menu functions like an "accordion"
                where only a single
                menu is be open at a time. While the sidebar itself is not toggle-able, it does responsively
                shrink in width on smaller screens.</p>
            <ul class="list-unstyled">
                <li>
                    <h5>Responsive</h5> shrinks in width, hides text labels and collapses to icons only on
                    mobile
                </li>
            </ul>
        </div>
    </div>
    </div>

</body>

</html>

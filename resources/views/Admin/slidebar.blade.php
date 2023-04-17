<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/slidebar.css">
    <script src="https://kit.fontawesome.com/11f84bb94c.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="sidebar">
        <div class="sidebar-inner">
            <header class="sidebar-header">
                <button type="button" class="sidebar-burger" onclick="toggelsidebar()">
                </button>
                <img class="sidebar-logo" src="/htmlcode/images/blacklord.jpg" alt="">
            </header>
            <nav class="sidebar-menu">
                <button type="button" class="has-border">
                    <img src="/svg/gear-solid.svg" alt="">
                    <span>Settings</span>
                </button>
            </nav>
        </div>
    </nav>
    <script type="text/javascript">
        const toggelsidebar = () =>
            document.body.classList.toggle("open");
    </script>
</body>

</html>

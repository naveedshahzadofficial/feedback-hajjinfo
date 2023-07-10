<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@500&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/wizard.css') }}">
    <title>Post Hajj Feedback | Survey</title>
</head>

<body>
    <div class="cover">
        <div class="container-fluid p-0">
            <livewire:wizard />
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".bar-btn").hide();
            $(".bar-btn").click(function() {
                $("#side_bar").show();
                $(".close-btn").show();
                $(this).hide();
            });
            $(".close-btn").click(function() {
                $("#side_bar").hide();
                $(".bar-btn").show();
                $(this).hide();
            });
            /*
                $(".sidebar .nav li").on('click', function() {
                    $(".sidebar .nav li").removeClass("active");
                    $(this).addClass("active");
                });
                $(".bar-btn").hide();
                $(".bar-btn").click(function() {
                    $("#side_bar").show();
                    $(".close-btn").show();
                    $(this).hide();
                });
                $(".close-btn").click(function() {
                    $("#side_bar").hide();
                    $(".bar-btn").show();
                    $(this).hide();
                });
                $(".next-btn").on('click', function() {
                    $(".nav-tabs .active").next('li').find('button').trigger('click');
                });
                $(".previous-btn").on('click', function() {
                    $(".nav-tabs .active").prev('li').find('button').trigger('click');
                });
                */
        });
    </script>
</body>
@livewireScripts

</html>

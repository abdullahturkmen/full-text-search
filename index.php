<?php
require 'connect.php';
?>
<html lang="tr">
<head>
    <title>Full Text Search</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body class="bg-dark">

<div class="container">
    <div class="row">
        <form class="w-100 m-4">
            <div class="form-group">
                <input type="text" class="form-control" id="text" placeholder="Arama...">
            </div>
        </form>
        <ul class="list-group mx-4 w-100 " id="sonuclar">

        </ul>
    </div>
</div>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script
    src="https://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>


<script>
    $('#text').keyup(function () {
       var kelime = this.value;

        $.post('ajax.php',{'type':'abc','text':kelime},function (sonuc) {
            $('#sonuclar').html(sonuc);
        })
    })
</script>

</body>
</html>

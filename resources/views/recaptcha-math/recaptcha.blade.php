<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recaptcha-Math</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
<section class="container mt-5">

    <section class="row g-5">
        <section class="col-md-12 col-lg-12">
            <form action="" method="post">
                @csrf
                <section class="row g-3">
                    <section class="col-sm-12" id="captcha-section">
                        <label for="captcha" class="form-label">Captcha</label>
                        <p>
                            {!! captcha_img(); !!}
                        </p>
                        <input type="text" class="form-control" name="captcha" id="captcha">
                        <button type="button" class="btn btn-success" id="refresh">Captcha</button>
                    </section>
                </section>
                <br>
                <button type="submit" class="w-100 btn btn-primary">ok</button>
            </form>
        </section>
    </section>

</section>

</body>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>

<script>
        $('#refresh').click(function (){
            $.ajax({
                type : 'GET',
                url : '/recaptcha-math/recaptcha/refresh/',
                success : function (data){
                    console.log(data);
                    $("#captcha-section p").html(data.captcha);
                },
            });
        })


</script>

</html>

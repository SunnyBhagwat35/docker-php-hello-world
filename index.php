<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello World !</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <h1 id="liveToastBtn">Hello, world!</h1>
    </div>

    <!-- <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button> -->

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
        <div class="rounded me-1 p-2 bg-primary" style="width: 20px;"></div>
        <strong class="me-auto">Hello World by
        <a class="text" href="https://github.com/SunnyBhagwat35" target="_blank">SunnyBhagwat</a>    
        </strong>
        <small><?php echo date("Y"); ?></small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            To get Github link 
            <a href="https://github.com/SunnyBhagwat35/docker-php-hello-world" target="_blank">
            Click Here</a>
        </div>
    </div>
    </div>

    <script>
        const toastTrigger = document.getElementById('liveToastBtn')
        const toastLiveExample = document.getElementById('liveToast')
        if (toastTrigger) {
            toastTrigger.addEventListener('click', () => {
                const toast = new bootstrap.Toast(toastLiveExample)

                toast.show()
            })
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
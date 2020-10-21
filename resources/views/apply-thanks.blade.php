<!doctype html>

<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Applied Successfully</title>
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <meta name="msapplication-TileColor" content="#206bc4" />
        <meta name="theme-color" content="#206bc4" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="mobile-web-app-capable" content="yes" />
        <meta name="HandheldFriendly" content="True" />
        <meta name="MobileOptimized" content="320" />
        <meta name="robots" content="noindex,nofollow,noarchive" />

        <!-- CSS files -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link href="/css/dashboard/tabler.min.css" rel="stylesheet" />

        <style>
            body {
                display: none;
            }
        </style>
    </head>

    <body class="antialiased d-flex flex-column">
        <div class="align-items-center justify-content-center">
            <div class="container-tight py-6 px-5 pb-4">
                <div class="empty w-lg-50 m-auto p-0">
                    <img src="{{asset('image/apply-thanks.png')}}">
                </div>
            </div>
            <div class="container ">
                <div class="col-md-6 offset-3">
                    <h1 class="empty-subtitle text-muted">
                        Thanks, {{ $name }}.Your Application is on its way! 
                    </h1>
                    <p>
                        Looking for a job is hard work, and we’ll make sure to carefully review your application. While we’re not able to reach out to every applicant, our recruiting team will contact you if your skills and experience are a strong match.
                    </p>
                    <div class="empty-action justify-content-center align-items-center">
                        <a href="/" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="5" y1="12" x2="19" y2="12" /><line x1="5" y1="12" x2="11" y2="18" /><line x1="5" y1="12" x2="11" y2="6" /></svg>                        Take me home
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Libs JS -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Jquery, Popper, Bootstrap -->
        <script src="/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="/js/pages/popper.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/pages/Chart.min.js"></script>

        <!-- Tabler Core -->
        <script src="/js/dashboard/tabler.min.js"></script>
        <script>
document.body.style.display = "block"
        </script>
    </body>

</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>

    <title>Curhat Bot AI</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Icon -->
    <link rel="icon" href="{{ asset('robot.png') }}" type="image/x-icon" />

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Space Grotesk', sans-serif;
        }

        .title:empty:before {
            content: attr(data-placeholder);
            color: gray
        }
    </style>

    <script src="https://unpkg.com/marked" defer></script>

    {{-- Sweet Alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl w-full mx-auto sm:px-6 lg:px-8 space-y-4 py-4">
            <div class="text-center text-gray-800 dark:text-gray-300 py-4">
                <h1 class="text-7xl font-bold"><a href="/">Curhat Bot AI 🤖</a></h1>
            </div>
            <center>
                <button onclick="location.href='/write'" type="button"
                    class="text-gray-900 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-refresh" width="24"
                        height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"></path>
                        <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"></path>
                    </svg> &nbsp;
                    Refresh
                </button>
            </center>
            <div class="w-full rounded-md bg-white border-2 border-gray-600 p-4 min-h-[60px] h-full text-gray-600">
                <form onsubmit="return submitForm(this);" action="/write/generate" method="post"
                    class="inline-flex gap-2 w-full">
                    @csrf
                    <input required name="title" class="w-full outline-none text-2xl font-bold"
                        placeholder="Coba Ketikkan Sesuatu..." />
                    <button type="submit"></button>
                    <script>
                        function submitForm(btn) {
                            var form = btn.form;
                            Swal.fire({
                                title: 'Mohon Tunggu',
                                text: 'Bot sedang memproses...',
                                allowOutsideClick: false,
                                didOpen: () => {
                                    Swal.showLoading()
                                }
                            })
                            form.submit();
                        }
                    </script>
                </form>
            </div>
            <div class="w-full rounded-md bg-white border-2 border-gray-600 p-4 min-h-[360px] h-full text-gray-600">
                <textarea readonly placeholder="Bot akan menjawab disini..."
                    class="min-h-[360px] h-full w-full outline-none" spellcheck="false"
                    style="font-size: 2rem;">{{ $content }}</textarea>
            </div>
        </div>
    </div>
</body>

</html>

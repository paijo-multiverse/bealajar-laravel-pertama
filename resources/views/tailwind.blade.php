<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Tailwind</title>
</head>
<body class="dark:bg-slate-900">
    <Button class="bg-sky-500 block mx-auto my-10 px-5 py-2 rounded-full font-semibold text-white hover:bg-sky-600 cursor-pointer active:bg-sky-700">Simpan</Button>

    <div class="max-w-lg my-10 border border-slate-200 rounded-2xl mx-auto p-5 shadow-md hover:bg-sky-500 hover:text-white group selection:bg-lime-300 selection:text-slate-900 font-serif">
        <h5 class="font-bold text-slate-700 text-lg mb-3 group-hover:text-white">My Card</h5>
        <p class="text-slate-600 group-hover:text-white first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:mr-3 first-letter:font-bold first-letter:float-left">Lorem ipsum, dolor sit amet consecte tur adipisicing elit. Fuga, quisquam similique cupiditate ea autem non quaerat inventore blanditiis. Aliquid, accusamus vero et error odit commodi ducimus cumque a! Facere, eveniet?</p>
    </div>

    <div class="max-w-lg mx-auto border border-slate-200 rounded-xl shadow p-5">
        <form action="" method="post">
            <label for="email">
                <span class="block font-semibold mb-1 text-slate-700 after:content-['*'] after:text-pink-500 after:ml-1">Email</span>
                <input id="email" type="email" placeholder="masukkan email..." class="px-3 py-2 shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 peer">
                <p class="m-1 text-sm text-pink-700 invisible peer-invalid:visible">Email tidak valid</p>
            </label>
        </form>
    </div>
    <hr class="my-20">

        <button id="toggle" class="m-auto cursor-pointer bg-amber-300 px-4 py-2 rounded-full font-medium dark:bg-slate-800 dark:text-white dark:hover:bg-slate-400 shadow block mx-auto mb-20">Ganti Mode</button>
    <hr class="my-20">

    <div class="h-40 w-40 bg-sky-500 mx-auto rounded-lg shadow-lg hover:rotate-180 transition hover:bg-pink-500 origin-top-left"></div>

    <div class="h-40 w-40 mx-auto mt-20 group">
        <div class="h-40 w-40 bg-sky-500 mx-auto mt-20 rounded-2xl group-hover:rotate-45 transition duration-700"></div>
    </div>

    <div class="h-40 w-40 bg-pink-500 mt-20 mx-auto rounded-lg animate-wiggle"></div>

    <div class="mb-96"></div>
    <script>
        const html = document.documentElement;
        const button = document.getElementById('toggle');
        button.addEventListener('click', () => {
            html.classList.toggle('dark');
        })
    </script>
</body>
</html>
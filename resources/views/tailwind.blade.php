<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Tailwind</title>
</head>

<body class="dark:bg-slate-900">
    <Button
        class="bg-sky-500 block mx-auto my-10 px-5 py-2 rounded-full font-semibold text-white hover:bg-sky-600 cursor-pointer active:bg-sky-700">Simpan</Button>

    <div
        class="max-w-lg my-10 border border-slate-200 rounded-2xl mx-auto p-5 shadow-md hover:bg-sky-500 hover:text-white group selection:bg-lime-300 selection:text-slate-900 font-serif">
        <h5 class="font-bold text-slate-700 text-lg mb-3 group-hover:text-white">My Card</h5>
        <p
            class="text-slate-600 group-hover:text-white first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:mr-3 first-letter:font-bold first-letter:float-left">
            Lorem ipsum, dolor sit amet consecte tur adipisicing elit. Fuga, quisquam similique cupiditate ea autem non
            quaerat inventore blanditiis. Aliquid, accusamus vero et error odit commodi ducimus cumque a! Facere,
            eveniet?</p>
    </div>

    <div class="max-w-lg mx-auto border border-slate-200 rounded-xl shadow p-5">
        <form action="" method="post">
            <label for="email">
                <span
                    class="block font-semibold mb-1 text-slate-700 after:content-['*'] after:text-pink-500 after:ml-1">Email</span>
                <input id="email" type="email" placeholder="masukkan email..."
                    class="px-3 py-2 shadow rounded w-full block text-sm placeholder:text-slate-400 focus:outline-none focus:ring-1 focus:ring-sky-500 invalid:text-pink-700 invalid:focus:ring-pink-700 peer">
                <p class="m-1 text-sm text-pink-700 invisible peer-invalid:visible">Email tidak valid</p>
            </label>
        </form>
    </div>
    <hr class="my-20">

    <button id="toggle"
        class="m-auto cursor-pointer bg-amber-300 px-4 py-2 rounded-full font-medium dark:bg-slate-800 dark:text-white dark:hover:bg-slate-400 shadow block mx-auto mb-20">Ganti
        Mode</button>
    <hr class="my-20">

    <div
        class="h-40 w-40 bg-sky-500 mx-auto rounded-lg shadow-lg hover:rotate-180 transition hover:bg-pink-500 origin-top-left">
    </div>

    <div class="h-40 w-40 mx-auto mt-20 group">
        <div class="h-40 w-40 bg-sky-500 mx-auto mt-20 rounded-2xl group-hover:rotate-45 transition duration-700"></div>
    </div>

    <div class="h-40 w-40 bg-pink-500 mt-20 mx-auto rounded-lg animate-wiggle"></div>

    <hr class="my-20">

    <div class="@container max-w-3xl mx-auto text-justify shadow-lg p-10 rounded-2xl relative border">
        <div class="bg-sky-200 w-10 h-10 rounded-full flex fixed bottom-10 right-10 cursor-pointer">
            <a href="#" class="text-xl m-auto">🔝</a>
        </div>
        <div>
            <img src="data:image/jpeg;base64,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"
                class="w-40 float-left mr-5">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem a cupiditate nobis incidunt sed
                corporis, praesentium neque. Adipisci corporis omnis quis dicta vero eos aspernatur in incidunt minima
                fuga corrupti quasi numquam cupiditate ab nostrum, iste, expedita, aperiam facilis. Consequuntur libero
                aut itaque eveniet vero quae magnam nam animi, delectus amet aliquam, esse magni ipsam voluptate. Velit
                saepe quidem tempore ut? Saepe, totam atque repudiandae fugit neque quidem a sint rem at omnis aperiam
                exercitationem. Laboriosam, consequuntur iste voluptatem tenetur mollitia officia et exercitationem.
            </p>
        </div>
    </div>

    <div class="max-w-3xl mx-auto border rounded-lg shadow-lg p-10 mt-20 columns-3">
        <img src="https://images.unsplash.com/photo-1713643560082-1d0a7ccc41de?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
            alt="gambar" class="mb-4">
        <img src="https://images.unsplash.com/photo-1713643560082-1d0a7ccc41de?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
            alt="gambar">
        <img src="https://images.unsplash.com/photo-1713643560082-1d0a7ccc41de?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
            alt="gambar" class="mb-4">
        <img src="https://images.unsplash.com/photo-1713643560082-1d0a7ccc41de?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
            alt="gambar">
        <img src="https://images.unsplash.com/photo-1713643560082-1d0a7ccc41de?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
            alt="gambar" class="mb-4">
        <img src="https://images.unsplash.com/photo-1713643560082-1d0a7ccc41de?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170"
            alt="gambar">
    </div>

    <hr class="my-20">

    <section class="@container p-8">
        <div class="@lg:p-20">
            <h2 class="font-bold text-2xl mb-2 text-slate-800 dark:text-slate-300 @md:text-4xl @md:mb-6">Damage M416
                Jarak
                150m</h2>
            <div
                class="w-full h-80 bg-[url('https://images.unsplash.com/photo-1713643560082-1d0a7ccc41de?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=1170')] rounded-2xl bg-cover bg-center @lg:bg-[center_-180px] @md:bg-[center_-100px]">
            </div>
            <p class="text-slate-700 dark:text-slate-300 @md:text-2xl @md:mt-4 @lg:text-base">Lorem ipsum dolor, sit
                amet
                consectetur adipisicing elit. Voluptate officiis reiciendis facere. Tempora iure
                qui pariatur, tempore atque veniam numquam esse rerum molestiae facilis. Nostrum tenetur dolores
                asperiores
                non quos aspernatur voluptas, et repellendus debitis.</p>
        </div>
    </section>

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

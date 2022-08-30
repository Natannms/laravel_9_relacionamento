<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.24.0/dist/full.css" rel="stylesheet" type="text/css" />
</head>

<body class="antialiased">
        <div class="navbar bg-base-100">
            <div class="flex-1">
                <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
            </div>
            <div class="flex-none gap-2">
                <div class="form-control">
                    <input type="text" placeholder="Search" class="input input-bordered" />
                </div>
                <div class="dropdown dropdown-end">
                    <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img src="https://placeimg.com/80/80/people" />
                        </div>
                    </label>
                    <ul tabindex="0"
                        class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between">
                                Profile
                            </a>
                        </li>
                        <li><a href="{{ route('posts.create') }}">Novo Post</a></li>
                        <li><a>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <div class="title p-4">
        <h1 class="posts text-white text-3xl mb-10 mt-10">POSTS</h1>
    </div>
    <div class="profile p-4 bg-base-300 flex flex-wrap justify-center">
        @foreach ($posts as $key => $post)
            <div class="card w-96 bg-white text-black shadow-xl m-4">
                <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
                <div class="card-body">
                    <h1 class="card-id text-indigo-700 text-2xl font-black">#{{ $key + 1 }}</h1>
                    <h2 class="card-title text-gray-700">{{ $post['title'] }}</h2>
                    <p class="text-gray-500">
                        {{ $post['body'] }}
                    </p>
                </div>
            </div>
        @endforeach
</body>

</html>

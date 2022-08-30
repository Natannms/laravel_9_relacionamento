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
    <div class="content p-4">
        <form class="flex flex-col w-2/12" action="{{ route('user.store') }}" method="post">
            @csrf
            <h1 class="text-white text-2xl">Novo Usuario</h1> <br>
            <input type="text" name="name" placeholder="Complete Name"
            value="{{ old('name') }}"
                class="mt-4 input input-bordered input-primary w-full " />
                @error('name')
                <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            <input type="email" name="email" placeholder="email@example.com"
            value="{{ old('email') }}"
                class="mt-4 input input-bordered input-primary w-full" />
                @error('email')
                <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            <input type="password" name="password" placeholder="password"
            value="{{ old('password') }}"
                class="mt-4 input input-bordered input-primary w-full " />
                @error('password')
                <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            <button type="submit" class="btn btn-primary mt-4">Salvar</button>
        </form>
    </div>
</body>

</html>

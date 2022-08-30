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
        <form class="flex flex-col w-2/12" action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <h1 class="text-white text-2xl">Novo Post</h1> <br>
            <input type="file" name="image" id="image" class="mt-4 input input-bordered input-primary w-full bg-gray-200">
            <input type="hidden" name="user_id" value="1">
            <input type="text" name="title" placeholder="Complete title"
            value="{{ old('title') }}"
                class="mt-4 input input-bordered input-primary w-full " />
                @error('title')
                <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror

                <textarea class="textarea textarea-primary" name="body" placeholder="Bio">{{ old('body') }}</textarea>
                @error('body')
                <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror

            <button type="submit" class="btn btn-primary mt-4">Salvar</button>
        </form>
    </div>
</body>

</html>

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

    <div class="navbar bg-base-300">
        <a class="btn btn-ghost normal-case text-xl">Users</a>
    </div>
    <div class="navbar bg-base-300">
        {{ $Users->links() }}
    </div>


    <div class="overflow-x-auto w-full">
        <table class="table w-full">
          <!-- head -->
          <thead>
            <tr>
              <th>
                <label>
                  <input type="checkbox" class="checkbox" />
                </label>
              </th>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <!-- row 1 -->
            @foreach ($Users as $key=> $User)
            <tr>
                <th>
                  <label>
                    <input type="checkbox" class="checkbox" />
                  </label>
                </th>
                <td>
                    {{ $User->id }}
                </td>
                <td>
                  <div class="flex items-center space-x-3">
                    <div class="avatar">
                      <div class="mask mask-squircle w-12 h-12">
                        <img src="/tailwind-css-component-profile-2@56w.png" alt="Avatar Tailwind CSS Component" />
                      </div>
                    </div>
                    <div>
                      <div class="font-bold">{{ $User->name }}</div>
                      {{-- <div class="text-sm opacity-50">United States</div> --}}
                    </div>
                  </div>
                </td>
                <td>
                    {{ $User->email }}
                  <br>
                  {{-- <span class="badge badge-ghost badge-sm">Desktop Support Technician</span> --}}
                </td>
                <th>
                  <a href="{{ route('user.show', $User->id) }}" class="btn btn-ghost btn-xs">Posts</a>
                </th>
              </tr>
            @endforeach

          </tbody>
          <!-- foot -->
          <tfoot>
            <tr>
                <th>
                  </th>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th></th>
            </tr>
          </tfoot>

        </table>
      </div>
</body>

</html>

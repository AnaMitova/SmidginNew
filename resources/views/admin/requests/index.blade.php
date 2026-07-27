<!DOCTYPE html>
<html>
<head>
    <title>Tour Requests</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="max-w-7xl mx-auto py-10">

    <h1 class="text-3xl font-bold mb-8">Tour Requests</h1>

    <div class="bg-white rounded-xl shadow overflow-x-auto">

        <table class="w-full">

            <thead class="bg-gray-100">
                <tr>
                    <th class="p-4 text-left">Tour</th>
                    <th class="p-4 text-left">Name</th>
                    <th class="p-4 text-left">Email</th>
                    <th class="p-4 text-left">Phone</th>
                    <th class="p-4 text-left">Date</th>
                    <th class="p-4 text-left">People</th>
                    <th class="p-4 text-left">Message</th>
                    <th class="p-4 text-left">Status</th>
                </tr>
            </thead>

            <tbody>

                @foreach($requests as $request)

                    <tr class="border-t">

                        <td class="p-4">{{ $request->tour->title }}</td>
                        <td class="p-4">{{ $request->name }}</td>
                        <td class="p-4">{{ $request->email }}</td>
                        <td class="p-4">{{ $request->phone }}</td>
                        <td class="p-4">{{ $request->date }}</td>
                        <td class="p-4">{{ $request->people }}</td>
                        <td class="p-4">{{ $request->message }}</td>
                        <td class="p-4">{{ $request->status }}</td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

</body>
</html>
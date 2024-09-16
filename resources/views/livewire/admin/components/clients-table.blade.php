<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-sm text-white uppercase bg-pink-500 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nome
                </th>
                <th scope="col" class="px-6 py-3">
                    Tipo
                </th>
                <th scope="col" class="px-6 py-3">
                    Tickets Abertos
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$client->name}}
                </th>
                <td class="px-6 py-4">
                    {{$client->type}}
                </td>
                <td class="px-6 py-4">
                    {{$client->tickets->count()}}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-pink-600 dark:text-pink-500 hover:underline">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
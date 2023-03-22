<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="#" class="btn btn-success">Kategoriyalar</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="" class="btn btn-success m-2">Yangi</a>
                    <table class="table table-hover">
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>parent</th>
                            <th>image</th>
                            <th>action</th>
                        </tr>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name_en}}</td>
                                <td>{{$category->parent_id}}</td>
                                <td>{{$category->image}}</td>
                                <td></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

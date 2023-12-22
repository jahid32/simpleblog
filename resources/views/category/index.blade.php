<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <table class=" table-cell">
        <!-- head -->
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $key => $cat)
            <tr>
                <th>{{$cat->id}}</th>
                <td>{{$cat->title}}</td>
                <td> <a class="btn btn-circle" href="">Edit</a> </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <button class="btn btn-primary">Button</button>
</div>
</x-app-layout>

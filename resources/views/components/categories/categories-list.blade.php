<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>Categories List</h1>
            @if ( session('status') )
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">x</span>
                    </button>
                </div>
            @endif
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Products</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td>
                            @foreach($category->products as $product)
                                {{$product->name}}
                                <br>
                            @endforeach
                        </td>
                        <td class="text-center">
                            <div class="pr-1">
                                <form action="{{ url('categories/' . $category->id) }}" method="POST">
                                    <a href="{{ url('categories/' . $category->id) }}" type="button"
                                       class="btn btn-success">Show</a>
                                    <a href="{{ url('categories/' . $category->id . '/edit') }}" type="button"
                                       class="btn btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

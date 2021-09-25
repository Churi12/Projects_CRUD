<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>Products List</h1>
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
                    <th scope="col">Product Name</th>
                    <th scope="col">Project</th>
                    <th scope="col">Category</th>
                    <th scope="col">Details</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->project->name}}</td>
                        <td>{{$product->category->name}}</td>
                        <td>{{$product->details}}</td>
                        <td class="text-center">
                            <div class="pr-1">
                                <form action="{{ url('products/' . $product->id) }}" method="POST">
                                    <a href="{{ url('products/' . $product->id) }}" type="button"
                                       class="btn btn-success">Show</a>
                                    <a href="{{ url('products/' . $product->id . '/edit') }}" type="button"
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
        {{ $products->links() }}
    </div>
</div>


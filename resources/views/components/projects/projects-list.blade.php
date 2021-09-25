<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <h1>Projects List</h1>
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
                    <th scope="col">Project Name</th>
                    <th scope="col">Products</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr>
                        <th scope="row">{{$project->id}}</th>
                        <td>{{$project->name}}</td>
                        <td>
                            @foreach($project->products as $product)
                                {{$product->name}}
                                <br>
                            @endforeach
                        </td>
                        <td class="text-center">
                            <div class="pr-1">
                                <form action="{{ url('projects/' . $project->id) }}" method="POST">
                                    <a href="{{ url('projects/' . $project->id) }}" type="button"
                                       class="btn btn-success">Show</a>
                                    <a href="{{ url('projects/' . $project->id . '/edit') }}" type="button"
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

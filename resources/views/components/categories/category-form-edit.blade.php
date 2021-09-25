<div class="container pb-5">
    <div class="row">
        <div class="col-12">
            <h1>Edit Category</h1>
            <form method="POST" action="{{ url('categories/' . $category->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Category Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control"
                        value="{{ $category->name }}">
                </div>
                <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
                <a href="{{ url('categories') }}" class="mt-2 mb-5 btn btn-primary">Back</a>
            </form>
        </div>
    </div>
</div>

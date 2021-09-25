<div class="container pb-5">
    <div class="row">
        <div class="col-12">
            <h1>Edit Product</h1>
            <form method="POST" action="{{ url('products/' . $product->id) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Product Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control"
                        value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label for="project_id" class="font-weight-bold">Project</label>
                    <select name="project_id" id="project_id" class="form-control">
                        @foreach($projects as $project)
                            <option value={{$project->id}}@if(!is_null($product->project->id) && $product->project->id == $project->id) selected @endif> {{$project->name}}</option>
                        @endforeach
                    </select>
                    @error('project')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category_id" class="font-weight-bold">Category</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" @if(!is_null($product->category) && $product->category->id == $category->id) selected @endif> {{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="details" class="font-weight-bold">Description</label>
                    <textarea id="details"
                              name="details"
                              placeholder="Type the product details"
                              class="form-control"
                              aria-describedby="detailsHelp"
                              rows="4"
                              cols="50">{{ trim($product->details) }}</textarea>
                </div>
                <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
                <a href="{{ url('products') }}" class="mt-2 mb-5 btn btn-primary">Back</a>
            </form>
        </div>
    </div>
</div>

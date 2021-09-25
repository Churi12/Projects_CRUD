<div class="container pb-5">
    <div class="row">
        <div class="col-12">
            <h1>Add Product</h1>
            <form method="POST" action="{{ url('products') }}">
                @csrf
                <div class="form-group">
                    <label for="name" class="font-weight-bold">Product Name</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        autocomplete="name"
                        placeholder="Product name"
                        class="form-control
                        @error('name') is-invalid @enderror"
                        value="{{ old('name') }}"
                        required
                        aria-describedby="nameHelp">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="details" class="font-weight-bold">Details</label>
                    <textarea id="details"
                              name="details"
                              autocomplete="details"
                              placeholder="Type the product details"
                              class="form-control
                              @error('details') is-invalid @enderror"
                              value="{{ old('details') }}"
                              required aria-describedby="detailsHelp"
                              rows="4"
                              cols="50"></textarea>

                    @error('details')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="project" class="font-weight-bold">Project</label>
                    <div>
                        <select
                            id="project_id"
                            name="project_id"
                            class="form-select custom-select
                            @error('project') is-invalid @enderror"
                            aria-describedby="projectHelp">

                            @foreach($projects as $project)
                                <option value = " {{ $project->id }} ">
                                    {{ $project->name }}
                                </option>
                            @endforeach

                            @error('project')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="category" class="font-weight-bold">Category</label>
                    <div>
                        <select
                            id="category_id"
                            name="category_id"
                            class="form-select custom-select
                            @error('category') is-invalid @enderror"
                            aria-describedby="categoryHelp">

                            @foreach($categories as $category)
                                <option value = " {{ $category->id }} ">
                                    {{ $category->name }}
                                </option>
                            @endforeach

                            @error('category')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </select>
                    </div>
                </div>
                <button type="submit" class="mt-2 mb-5 btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

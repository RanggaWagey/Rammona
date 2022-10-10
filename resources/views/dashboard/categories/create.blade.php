@extends('layouts.master')

@section('title') Create New Category @endsection

@section('content')

@component('components.breadcrumb')
    @slot('li_1') Articles Categories @endslot
    @slot('li_1_url')  {{--{{ route('categories.index')  }} --}}@endslot
    @slot('title') Create New Category @endslot
@endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Create New Category</h4>

                <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="@error('name') is-invalid @enderror form-control" name="name" id="name" placeholder="Enter Category Name" value="{{ old('name') }}">
                            <!-- Hidden Slug -->
                            <input type="text" class="@error('slug') is-invalid @enderror form-control" name="slug" id="slug" placeholder="Enter Slug" value="{{ old('slug') }}">
                            @error('name')
                            <div class="mt-2 alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @enderror
                        </div>
                        {{-- <label for="name" class="col-sm-3 col-form-label">Parent Category</label>
                        <div class="col sm-9 mt-2">
                            <select class="form-control input-md" name="category_id" id="category_id">
                                <option value="">None</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div> --}}
                    </div>



                    <div class="row mb-3">
                        <button type="submit" onclick="this.form.submit(); this.disabled = true;" class="btn btn-primary btn-block">Create Category</button>
                    </div>
                    
                </form>
                
            </div>
        </div>
        <!-- end card -->
    </div>
</div>
<!-- end row -->

@endsection

@section('script-bottom')
<script src="https://cdn.jsdelivr.net/npm/slugify@1.6.5/slugify.min.js"></script>
<script>
    let inputName = document.getElementById('name')
    let inputSlug = document.getElementById('slug')

    inputName.addEventListener('keyup', function(){
        let slug = slugify(inputName.value, {
             remove: /[*+~.()'"!:@]/g
        })
        inputSlug.value = slug.toLowerCase()
    })

</script>

@endsection
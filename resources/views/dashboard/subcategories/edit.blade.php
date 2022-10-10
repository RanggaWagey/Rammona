@extends('layouts.master')

@section('title') Edit Category @endsection

@section('content')

@component('components.breadcrumb')
    @slot('li_1') Sub Category @endslot
    @slot('li_1_url') {{ route('categories.index') }} @endslot
    @slot('title') Edit Sub Category @endslot
@endcomponent

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit Category</h4>

                <form action="{{ route('subcategories.update', $subcategory->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="@error('name') is-invalid @enderror form-control" name="name" id="name" placeholder="Enter Category Name" value="{{ old('name', $subcategory->name) }}">
                            <!-- Hidden Slug -->
                            <input type="text" class="@error('slug') is-invalid @enderror form-control" name="slug" id="slug" placeholder="Enter Slug" value="{{ old('slug', $subcategory->slug) }}" readonly>
                            @error('name')
                                <div class="mt-2 alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    {{-- <div class="row mb-3">
                        <label for="description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <textarea class="@error('description') is-invalid @enderror form-control" name="description" id="description" placeholder="Enter Description">{{ old('description', $category->description) }}</textarea>
                            @error('description')
                                <div class="mt-2 alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="is_published" class="col-sm-3 col-form-label">Is Published?</label>
                        <div class="col-sm-9">
                            <select name="is_published" id="is_published" class="@error('is_published') is-invalid @enderror form-control">
                                <option value="" disabled>Choose Status</option>
                                <option value="0" @if ( old('is_published', $category->is_published) == 0 ) selected @endif>No</option>
                                <option value="1" @if ( old('is_published', $category->is_published) == 1 ) selected @endif>Yes</option>
                            </select>
                            @error('is_published')
                                <div class="mt-2 alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            @enderror
                        </div>
                    </div> --}}

                    <div class="row mb-3">
                        <button type="submit" class="btn btn-primary btn-block">Edit Category</button>
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

@extends('theme.master')

@section('title','addnewblog')

@section('content')
    <section class="section-margin--small section-margin">
        <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('blogs.store') }}" class="form-contact contact_form" method="post" novalidate="novalidate" enctype="multipart/form-data">
                    @csrf



                        <div class="form-group">
                            <input class="form-control border" name="title" type="text"
                                placeholder="Enter your blog title" value="{{ old('name') }}">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>


                        <div class="form-group">
                            <input class="form-control border" name="image" type="file">
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <div class="form-group">
                            <select class="form-control border" name="category_id" placeholder="Enter your blog title"
                                value="{{ old('category_id') }}">

                                @php
                                use App\Models\Category;
                                $Categorys = Category::all();

                                @endphp
                                @foreach ($Categorys as $Category)
                                    <option  value="{{ $Category->id }}">{{ $Category->name }}</option>
                                @endforeach

                            </select>
                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                        </div>


                        <div class="form-group">
                            <textarea class="w-100 border" name="description" placeholder="Enter your blog title" rows="5">{{ old('description') }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="form-group text-center text-md-right mt-3">
                            <button type="submit" class="button button--active button-contactForm">Submit</button>
                        </div>




                </form>
            </div>
        </div>
        </div>
  </section>
@endsection





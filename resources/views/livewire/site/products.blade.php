<div>
    <div class="default-page">
        <div class="background-telas">
            <div class="title-background-telas">Anestesia</div>
        </div>
        <div class="margin-content-products">
            <div class="container">
                <div class="grid-types-products">
                    @if(!empty($category))
                        <div class="btn-types-products btn-types-products active_types-products" onclick="location.href='{{ route('site.products', ['category' => $categoryId]) }}'">{{ $category->name }}</div>
                        @foreach ($category->children()->get() as $subcategory)
                            <div class="btn-types-products" onclick="location.href='{{ route('site.products', ['category' => $subcategory->id]) }}'">{{ $subcategory->name }}</div>
                        @endforeach
                    @else
                        @foreach ($categories as $index => $category)
                            <div class="btn-types-products" onclick="location.href='{{ route('site.products', ['category' => $category->id]) }}'">{{ $category->name }}</div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="container-fluid">
                <div class="grid-products-services mt30">
                    @livewire('components.card-product')
                    @livewire('components.card-product')
                    @livewire('components.card-product')
                    @livewire('components.card-product')
                    @livewire('components.card-product')
                    @livewire('components.card-product')
                </div>
            </div>
        </div>
    </div>
</div>

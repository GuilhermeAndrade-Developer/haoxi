<div>
    <div class="default-page">
        <div class="background-telas">
            <div class="title-background-telas">Produtos e Serviços</div>
        </div>
        <div class="margin-content">
            <div class="container">
                <div class="grid-categories-products">
                    @foreach ($categories as $category)
                        @livewire('components.product-box', ['name_products_services' => $category->name, 'image' => $category->file, 'itemId' => $category->id])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

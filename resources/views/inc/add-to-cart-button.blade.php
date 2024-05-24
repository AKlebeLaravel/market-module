@if($product->is_locked)
    <div class="btn w-100 btn-secondary">
        <span class="bi bi-cart"></span> {{ __('Not available') }}
    </div>
@else
    <template x-if="cart.object.items.findIndex(x => x.product_id == '{{ $product->id }}') != -1">
        <button class="btn btn-remove-from-cart w-100 btn-outline-danger" @click="cart.removeProduct({{ $product->id }})">
            <span class="bi bi-cart"></span> {{ __('Remove from Cart') }}
        </button>
    </template>
    <template x-if="cart.object.items.findIndex(x => x.product_id == '{{ $product->id }}') == -1">
        <button class="btn btn-add-to-cart w-100 btn-outline-success" @click="cart.addProduct({{ $product->id }})">
            <span class="bi bi-cart"></span> {{ __('Add to Cart') }}
        </button>
    </template>
@endif
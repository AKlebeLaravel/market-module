@php
    /**
     * @var \Modules\DataTable\app\Http\Livewire\DataTable\Base\BaseDataTable $this
     * @var \Illuminate\Database\Eloquent\Model $item
     * @var string $name
     * @var mixed $value The image path
     * @var string $link make clickable link if exists
     * @var string $imageBoxCss image-box css
     **/
    $link = route('product', $item->web_uri);
    $title = $item->name;
@endphp
@include('data-table::livewire.js-dt.tables.columns.image')


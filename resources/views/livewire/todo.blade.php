<div class="col-md-6">
    <div class="card">
        <div class="card-header">
            <h3>{{ $title }}</h3>
        </div>
        <div class="card-body" ondrop="drop_{{ $category_id }}(event, this)"
            ondragover="allowDrop_{{ $category_id }}(event)" category_id="1">
            @foreach ($items as $item)
                <li draggable="true" ondragstart="drag_{{ $category_id }}(event)" id="{{ $item['id']}}">
                    {{ $item['name'] }}</li>
            @endforeach
        </div>
    </div>
</div>


@push('scripts')
    <script>
        function allowDrop_{{ $category_id }}(ev) {
            ev.preventDefault();
        }

        function drag_{{ $category_id }}(ev) {
            // Imposta i dati che vuoi trasferire durante il trascinamento

            ev.dataTransfer.setData("id", ev.target.id);
        }

        function drop_{{ $category_id }}(ev, divElement) {
            ev.preventDefault();

            var id = ev.dataTransfer.getData("id");

            ev.target.appendChild(document.getElementById(id));

            @this.moveItem(id);
        }
    </script>
@endpush
